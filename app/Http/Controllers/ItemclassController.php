<?php

namespace App\Http\Controllers;

use App\Models\Itemclass;
use App\Http\Requests\Itemclasses\{StoreItemclassRequest, UpdateItemclassRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ItemclassController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:itemclass view', only: ['index', 'show']),
            // new Middleware('permission:itemclass create', only: ['create', 'store']),
            // new Middleware('permission:itemclass edit', only: ['edit', 'update']),
            // new Middleware('permission:itemclass delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $itemclasses = Itemclass::query();

            return DataTables::of($itemclasses)
                ->addColumn('action', 'itemclasses.include.action')
                ->addColumn('class_status', function($row) {
                    return $row->class_status ? 'Active' : 'Inactive';
                })
                ->toJson();
        }

        return view('itemclasses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('itemclasses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemclassRequest $request): RedirectResponse
    {
        
        Itemclass::create($request->validated());

        return to_route('itemclasses.index')->with('success', __('The itemclass was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Itemclass $itemclass): View
    {
        return view('itemclasses.show', compact('itemclass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Itemclass $itemclass): View
    {
        return view('itemclasses.edit', compact('itemclass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemclassRequest $request, Itemclass $itemclass): RedirectResponse
    {
        
        $itemclass->update($request->validated());

        return to_route('itemclasses.index')->with('success', __('The itemclass was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itemclass $itemclass): RedirectResponse
    {
        try {
            $itemclass->delete();

            return to_route('itemclasses.index')->with('success', __('The itemclass was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('itemclasses.index')->with('error', __("The itemclass can't be deleted because it's related to another table."));
        }
    }
}
