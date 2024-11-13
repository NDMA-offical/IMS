<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\Categories\{StoreCategoryRequest, UpdateCategoryRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class CategoryController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:category view', only: ['index', 'show']),
            // new Middleware('permission:category create', only: ['create', 'store']),
            // new Middleware('permission:category edit', only: ['edit', 'update']),
            // new Middleware('permission:category delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $categories = Category::query();

            return DataTables::of($categories)
                ->addColumn('category_name', function($row) {
                        return str($row->category_name)->limit(100);
                    })
				// ->addColumn('category_desp', function($row) {
                //         return str($row->category_desp)->limit(100);
                //     })
                    ->addColumn('category_status', function($row) {
                        return $row->category_status ? 'Active' : 'Inactive';
                    })
				->addColumn('action', 'categories.include.action')
                ->toJson();
        }

        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        
        Category::create($request->validated());

        return to_route('categories.index')->with('success', __('The category was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        
        $category->update($request->validated());

        return to_route('categories.index')->with('success', __('The category was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        try {
            $category->delete();

            return to_route('categories.index')->with('success', __('The category was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('categories.index')->with('error', __("The category can't be deleted because it's related to another table."));
        }
    }
}
