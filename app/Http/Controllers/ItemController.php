<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use App\Http\Requests\Items\{StoreItemRequest, UpdateItemRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ItemController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:item view', only: ['index', 'show']),
            // new Middleware('permission:item create', only: ['create', 'store']),
            // new Middleware('permission:item edit', only: ['edit', 'update']),
            // new Middleware('permission:item delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $items = Item::with(['brand:id,brand_name', 'category:id,category_name', 'project:id,project_name', 'fundingsource:id,source_name',]);

            return DataTables::of($items)
                ->addColumn('item_code', function ($row) {
                    return str($row->item_code)->limit(100);
                })
                ->addColumn('item_name', function ($row) {
                    return str($row->item_name)->limit(100);
                })
                ->addColumn('item_model_no', function ($row) {
                    return str($row->item_model_no)->limit(100);
                })
                ->addColumn('item_desp', function ($row) {
                    return str($row->item_desp)->limit(100);
                })
                ->addColumn('item_status', function ($row) {
                    return str($row->item_status)->limit(100);
                })
                ->addColumn('brand', function ($row) {
                    return $row?->brand?->brand_name ?? '';
                })->addColumn('category', function ($row) {
                    return $row?->category?->category_name ?? '';
                })->addColumn('project', function ($row) {
                    return $row?->project?->project_name ?? '';
                })->addColumn('fundingsource', function ($row) {
                    return $row?->fundingsource?->source_name ?? '';
                })->addColumn('itemclass', function ($row) {
                    return $row?->itemclass?->class_name ?? '';
                })->addColumn('action', 'items.include.action')
                ->toJson();
        }

        return view('items.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request): RedirectResponse
    {
        // Create the item and get the created instance
        $item = Item::create(array_merge(
            $request->validated(),
            ['item_status' => 1]
        ));
        
        Transaction::create([
            'transaction_type' => 1,
            'item_id' => $item->id,
            'transaction_date' => now(), 
        ]);

        return to_route('items.index')->with('success', __('The item was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item): View
    {
        $item->load(['brand:id,brand_name', 'category:id,category_name', 'project:id,project_name', 'fundingsource:id,source_name',]);

        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item): View
    {
        $item->load(['brand:id,brand_name', 'category:id,category_name', 'project:id,project_name', 'fundingsource:id,source_name', 'itemclass:id,class_name',]);

        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item): RedirectResponse
    {

        $item->update($request->validated());

        return to_route('items.index')->with('success', __('The item was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item): RedirectResponse
    {
        try {
            $item->delete();

            return to_route('items.index')->with('success', __('The item was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('items.index')->with('error', __("The item can't be deleted because it's related to another table."));
        }
    }
}
