<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\Projects\{StoreProjectRequest, UpdateProjectRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class ProjectController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:project view', only: ['index', 'show']),
            // new Middleware('permission:project create', only: ['create', 'store']),
            // new Middleware('permission:project edit', only: ['edit', 'update']),
            // new Middleware('permission:project delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $projects = Project::query();

            return DataTables::of($projects)
                ->addColumn('project_name', function($row) {
                        return str($row->project_name)->limit(100);
                    })
				->addColumn('project_desp', function($row) {
                        return str($row->project_desp)->limit(100);
                    })
                    ->addColumn('project_status', function($row) {
                        return $row->project_status ? 'Active' : 'Inactive';
                    })
				->addColumn('action', 'projects.include.action')
                ->toJson();
        }

        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        
        Project::create($request->validated());

        return to_route('projects.index')->with('success', __('The project was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): View
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): View
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project): RedirectResponse
    {
        
        $project->update($request->validated());

        return to_route('projects.index')->with('success', __('The project was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): RedirectResponse
    {
        try {
            $project->delete();

            return to_route('projects.index')->with('success', __('The project was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('projects.index')->with('error', __("The project can't be deleted because it's related to another table."));
        }
    }
}
