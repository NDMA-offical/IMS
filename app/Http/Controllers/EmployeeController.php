<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Issue;
use App\Http\Requests\Employees\{StoreEmployeeRequest, UpdateEmployeeRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};
use Illuminate\Http\Request;


class EmployeeController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:employee view', only: ['index', 'show']),
            // new Middleware('permission:employee create', only: ['create', 'store']),
            // new Middleware('permission:employee edit', only: ['edit', 'update']),
            // new Middleware('permission:employee delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $employees = Employee::with(['wing:id,wing_name', 'designation:id,designation_name', ]);

            return DataTables::of($employees)
                ->addColumn('employee_name', function($row) {
                        return str($row->employee_name)->limit(100);
                    })
				// ->addColumn('employee_cnic', function($row) {
                //         return str($row->employee_cnic)->limit(100);
                //     })
				// ->addColumn('employee_email', function($row) {
                //         return str($row->employee_email)->limit(100);
                //     })
				// ->addColumn('employee_contact', function($row) {
                //         return str($row->employee_contact)->limit(100);
                //     })
				->addColumn('wing', function ($row) {
                    return $row?->wing?->wing_name ?? '';
                })->addColumn('section', function ($row) {
                    return $row?->section?->section_name ?? '';
                // })->addColumn('designation', function ($row) {
                //     return $row?->designation?->designation_name ?? '';
                })->addColumn('action', 'employees.include.action')
                ->toJson();
        }

        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        
        Employee::create($request->validated());

        return to_route('employees.index')->with('success', __('The employee was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): View
    {
        $employee->load(['wing:id,wing_name', 'designation:id,designation_name', ]);

		return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): View
    {
        $employee->load(['wing:id,wing_name', 'designation:id,designation_name', ]);

		return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee): RedirectResponse
    {
        
        $employee->update($request->validated());

        return to_route('employees.index')->with('success', __('The employee was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        try {
            $employee->delete();

            return to_route('employees.index')->with('success', __('The employee was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('employees.index')->with('error', __("The employee can't be deleted because it's related to another table."));
        }
    }

    
    /**
     * Get Employee from issued item list
     */
    public function fetchEmployeeDetails(Request $request){
        $employeeId = $request->input('employee_id');
    
        // Fetch the issue details along with the employee name
        $response = Issue::where('issue_to', $employeeId)
                    ->with('item:id,item_code') // Load only id and employee_name from employees table
                    // ->select('issue_to', 'issue_date')
                    ->get();
                    // Prepare the response data, including the employee_name if available
        // $response = [
        //     'issue' => $item,
            // 'item_code' => $item->item ? $issue->item->item_code : null,
        // ];
        // dd($response);
         // Prepare the response data, including the item code and employee name if available
    $responseData = $response->map(function ($issue) {
        return [
            'id' => $issue->item ? $issue->item->id : null,
            'item_code' => $issue->item ? $issue->item->item_code : null,
        ];
    });
        
        return response()->json($responseData);
    }
}
