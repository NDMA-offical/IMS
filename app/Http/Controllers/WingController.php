<?php

namespace App\Http\Controllers;

use App\Models\Wing;
use App\Http\Requests\Wings\{StoreWingRequest, UpdateWingRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class WingController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:wing view', only: ['index', 'show']),
            // new Middleware('permission:wing create', only: ['create', 'store']),
            // new Middleware('permission:wing edit', only: ['edit', 'update']),
            // new Middleware('permission:wing delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $wings = Wing::query();

            return DataTables::of($wings)
                ->addColumn('wing_name', function($row) {
                        return str($row->wing_name)->limit(100);
                    })
				// ->addColumn('wing_short_name', function($row) {
                //         return str($row->wing_short_name)->limit(100);
                //     })
				// ->addColumn('wing_desp', function($row) {
                //         return str($row->wing_desp)->limit(100);
                //     })
                    ->addColumn('wing_status', function($row) {
                        return $row->wing_status ? 'Active' : 'Inactive';
                    })
				->addColumn('action', 'wings.include.action')
                ->toJson();
        }

        return view('wings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('wings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWingRequest $request): RedirectResponse
    {
        
        Wing::create($request->validated());

        return to_route('wings.index')->with('success', __('The wing was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Wing $wing): View
    {
        return view('wings.show', compact('wing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wing $wing): View
    {
        return view('wings.edit', compact('wing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWingRequest $request, Wing $wing): RedirectResponse
    {
        
        $wing->update($request->validated());

        return to_route('wings.index')->with('success', __('The wing was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wing $wing): RedirectResponse
    {
        try {
            $wing->delete();

            return to_route('wings.index')->with('success', __('The wing was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('wings.index')->with('error', __("The wing can't be deleted because it's related to another table."));
        }
    }
}
