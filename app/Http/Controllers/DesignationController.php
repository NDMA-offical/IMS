<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Requests\Designations\{StoreDesignationRequest, UpdateDesignationRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class DesignationController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:designation view', only: ['index', 'show']),
            // new Middleware('permission:designation create', only: ['create', 'store']),
            // new Middleware('permission:designation edit', only: ['edit', 'update']),
            // new Middleware('permission:designation delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $designations = Designation::query();

            return DataTables::of($designations)
                ->addColumn('designation_name', function($row) {
                        return str($row->designation_name)->limit(100);
                    })
				->addColumn('designation_name_short', function($row) {
                        return str($row->designation_name_short)->limit(100);
                    })
				->addColumn('action', 'designations.include.action')
                ->toJson();
        }

        return view('designations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('designations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationRequest $request): RedirectResponse
    {
        
        Designation::create($request->validated());

        return to_route('designations.index')->with('success', __('The designation was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation): View
    {
        return view('designations.show', compact('designation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation): View
    {
        return view('designations.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationRequest $request, Designation $designation): RedirectResponse
    {
        
        $designation->update($request->validated());

        return to_route('designations.index')->with('success', __('The designation was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation): RedirectResponse
    {
        try {
            $designation->delete();

            return to_route('designations.index')->with('success', __('The designation was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('designations.index')->with('error', __("The designation can't be deleted because it's related to another table."));
        }
    }
}
