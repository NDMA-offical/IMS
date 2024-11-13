<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Http\Requests\Conditions\{StoreConditionRequest, UpdateConditionRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ConditionController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:condition view', only: ['index', 'show']),
            // new Middleware('permission:condition create', only: ['create', 'store']),
            // new Middleware('permission:condition edit', only: ['edit', 'update']),
            // new Middleware('permission:condition delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $conditions = Condition::query();

            return DataTables::of($conditions)
                ->addColumn('condition_name', function($row) {
                        return str($row->condition_name)->limit(100);
                    })
				->addColumn('action', 'conditions.include.action')
                ->toJson();
        }

        return view('conditions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('conditions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConditionRequest $request): RedirectResponse
    {
       
        Condition::create($request->validated());

        return to_route('conditions.index')->with('success', __('The condition was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Condition $condition): View
    {
        return view('conditions.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition): View
    {
        return view('conditions.edit', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConditionRequest $request, Condition $condition): RedirectResponse
    {
        
        $condition->update($request->validated());

        return to_route('conditions.index')->with('success', __('The condition was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condition $condition): RedirectResponse
    {
        try {
            $condition->delete();

            return to_route('conditions.index')->with('success', __('The condition was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('conditions.index')->with('error', __("The condition can't be deleted because it's related to another table."));
        }
    }
}
