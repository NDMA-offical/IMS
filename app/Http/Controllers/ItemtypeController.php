<?php

namespace App\Http\Controllers;

use App\Models\Itemtype;
use App\Http\Requests\Itemtypes\{StoreItemtypeRequest, UpdateItemtypeRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ItemtypeController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:itemtype view', only: ['index', 'show']),
            // new Middleware('permission:itemtype create', only: ['create', 'store']),
            // new Middleware('permission:itemtype edit', only: ['edit', 'update']),
            // new Middleware('permission:itemtype delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $itemtypes = Itemtype::query();

            return DataTables::of($itemtypes)
                ->addColumn('type_name', function($row) {
                        return str($row->type_name)->limit(100);
                    })
				->addColumn('type_desp', function($row) {
                        return str($row->type_desp)->limit(100);
                    })
                ->addColumn('type_status', function($row) {
                    return $row->type_status ? 'Active' : 'Inactive';
                })
				->addColumn('action', 'itemtypes.include.action')
                ->toJson();
        }

        return view('itemtypes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('itemtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemtypeRequest $request): RedirectResponse
    {
        
        Itemtype::create($request->validated());

        return to_route('itemtypes.index')->with('success', __('The itemtype was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Itemtype $itemtype): View
    {
        return view('itemtypes.show', compact('itemtype'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Itemtype $itemtype): View
    {
        return view('itemtypes.edit', compact('itemtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemtypeRequest $request, Itemtype $itemtype): RedirectResponse
    {
        
        $itemtype->update($request->validated());

        return to_route('itemtypes.index')->with('success', __('The itemtype was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itemtype $itemtype): RedirectResponse
    {
        try {
            $itemtype->delete();

            return to_route('itemtypes.index')->with('success', __('The itemtype was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('itemtypes.index')->with('error', __("The itemtype can't be deleted because it's related to another table."));
        }
    }
}
