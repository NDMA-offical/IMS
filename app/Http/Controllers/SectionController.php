<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Http\Requests\Sections\{StoreSectionRequest, UpdateSectionRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class SectionController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:section view', only: ['index', 'show']),
            // new Middleware('permission:section create', only: ['create', 'store']),
            // new Middleware('permission:section edit', only: ['edit', 'update']),
            // new Middleware('permission:section delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $sections = Section::with(['wing:id,wing_name']);

            return DataTables::of($sections)
                ->addColumn('section_name', function($row) {
                        return str($row->section_name)->limit(100);
                    })
				->addColumn('wing', function ($row) {
                    return $row?->wing?->wing_name ?? '';
                })->addColumn('section_status', function($row) {
                    return $row->section_status ? 'Active' : 'Inactive';
                })
                ->addColumn('action', 'sections.include.action')
                ->toJson();
        }

        return view('sections.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request): RedirectResponse
    {
        
        Section::create($request->validated());

        return to_route('sections.index')->with('success', __('The section was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section): View
    {
        $section->load(['wing:id,wing_name']);

		return view('sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section): View
    {
        $section->load(['wing:id,wing_name']);

		return view('sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section): RedirectResponse
    {
        
        $section->update($request->validated());

        return to_route('sections.index')->with('success', __('The section was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section): RedirectResponse
    {
        try {
            $section->delete();

            return to_route('sections.index')->with('success', __('The section was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('sections.index')->with('error', __("The section can't be deleted because it's related to another table."));
        }
    }
}
