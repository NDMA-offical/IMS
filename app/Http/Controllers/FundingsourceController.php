<?php

namespace App\Http\Controllers;

use App\Models\Fundingsource;
use App\Http\Requests\Fundingsources\{StoreFundingsourceRequest, UpdateFundingsourceRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class FundingsourceController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:fundingsource view', only: ['index', 'show']),
            // new Middleware('permission:fundingsource create', only: ['create', 'store']),
            // new Middleware('permission:fundingsource edit', only: ['edit', 'update']),
            // new Middleware('permission:fundingsource delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $fundingsources = Fundingsource::query();

            return DataTables::of($fundingsources)
                ->addColumn('source_name', function($row) {
                        return str($row->source_name)->limit(100);
                    })
				->addColumn('source_desp', function($row) {
                        return str($row->source_desp)->limit(100);
                    })
                    ->addColumn('source_status', function($row) {
                        return $row->source_status ? 'Active' : 'Inactive';
                    })
				->addColumn('action', 'fundingsources.include.action')
                ->toJson();
        }

        return view('fundingsources.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('fundingsources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFundingsourceRequest $request): RedirectResponse
    {
        
        Fundingsource::create($request->validated());

        return to_route('fundingsources.index')->with('success', __('The fundingsource was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Fundingsource $fundingsource): View
    {
        return view('fundingsources.show', compact('fundingsource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundingsource $fundingsource): View
    {
        return view('fundingsources.edit', compact('fundingsource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFundingsourceRequest $request, Fundingsource $fundingsource): RedirectResponse
    {
        
        $fundingsource->update($request->validated());

        return to_route('fundingsources.index')->with('success', __('The fundingsource was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundingsource $fundingsource): RedirectResponse
    {
        try {
            $fundingsource->delete();

            return to_route('fundingsources.index')->with('success', __('The fundingsource was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('fundingsources.index')->with('error', __("The fundingsource can't be deleted because it's related to another table."));
        }
    }
}
