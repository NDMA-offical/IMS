<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use App\Http\Requests\Repairs\{StoreRepairRequest, UpdateRepairRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class RepairController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:repair view', only: ['index', 'show']),
            // new Middleware('permission:repair create', only: ['create', 'store']),
            // new Middleware('permission:repair edit', only: ['edit', 'update']),
            // new Middleware('permission:repair delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $repairs = Repair::with(['fundingsource:id,source_name', ]);

            return DataTables::of($repairs)
                ->addColumn('request_by', function($row) {
                        return str($row->request_by)->limit(100);
                    })
				->addColumn('request_sheet_id', function($row) {
                        return str($row->request_sheet_id)->limit(100);
                    })
				->addColumn('repair_cost', function($row) {
                        return str($row->repair_cost)->limit(100);
                    })
				->addColumn('fundingsource', function ($row) {
                    return $row?->fundingsource?->source_name ?? '';
                })->addColumn('action', 'repairs.include.action')
                ->toJson();
        }

        return view('repairs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('repairs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRepairRequest $request): RedirectResponse
    {
        
        Repair::create($request->validated());

        return to_route('repairs.index')->with('success', __('The repair was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Repair $repair): View
    {
        $repair->load(['fundingsource:id,source_name', ]);

		return view('repairs.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repair $repair): View
    {
        $repair->load(['fundingsource:id,source_name', ]);

		return view('repairs.edit', compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRepairRequest $request, Repair $repair): RedirectResponse
    {
        
        $repair->update($request->validated());

        return to_route('repairs.index')->with('success', __('The repair was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repair $repair): RedirectResponse
    {
        try {
            $repair->delete();

            return to_route('repairs.index')->with('success', __('The repair was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('repairs.index')->with('error', __("The repair can't be deleted because it's related to another table."));
        }
    }
}
