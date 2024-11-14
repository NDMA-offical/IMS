<?php

namespace App\Http\Controllers;

use App\Models\Itemreturn;
use App\Http\Requests\Itemreturns\{StoreItemreturnRequest, UpdateItemreturnRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ItemreturnController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:itemreturn view', only: ['index', 'show']),
            // new Middleware('permission:itemreturn create', only: ['create', 'store']),
            // new Middleware('permission:itemreturn edit', only: ['edit', 'update']),
            // new Middleware('permission:itemreturn delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $itemreturns = Itemreturn::with(['item:id,item_code', 'condition:id,condition_name']);

            return DataTables::of($itemreturns)
                ->addColumn('item', function ($row) {
                    return $row?->item?->item_code ?? '';
                })->addColumn('condition', function ($row) {
                    return $row?->condition?->condition_name ?? '';
                })->addColumn('action', 'itemreturns.include.action')
                ->toJson();
        }

        return view('itemreturns.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       
        return view('itemreturns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemreturnRequest $request): RedirectResponse
    {
        
        Itemreturn::create($request->validated());

        return to_route('itemreturns.index')->with('success', __('The itemreturn was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Itemreturn $itemreturn): View
    {
        $itemreturn->load(['item:id,item_code', 'condition:id,condition_name']);

		return view('itemreturns.show', compact('itemreturn'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Itemreturn $itemreturn): View
    {
        $itemreturn->load(['item:id,item_code', 'condition:id,condition_name']);

		return view('itemreturns.edit', compact('itemreturn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemreturnRequest $request, Itemreturn $itemreturn): RedirectResponse
    {
        
        $itemreturn->update($request->validated());

        return to_route('itemreturns.index')->with('success', __('The itemreturn was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itemreturn $itemreturn): RedirectResponse
    {
        try {
            $itemreturn->delete();

            return to_route('itemreturns.index')->with('success', __('The itemreturn was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('itemreturns.index')->with('error', __("The itemreturn can't be deleted because it's related to another table."));
        }
    }
}
