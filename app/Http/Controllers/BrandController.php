<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\Brands\{StoreBrandRequest, UpdateBrandRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class BrandController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:brand view', only: ['index', 'show']),
            // new Middleware('permission:brand create', only: ['create', 'store']),
            // new Middleware('permission:brand edit', only: ['edit', 'update']),
            // new Middleware('permission:brand delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {

        dd('test');


        if (request()->ajax()) {
            $brands = Brand::query();

            return DataTables::of($brands)
                ->addColumn('brand_name', function($row) {
                        return str($row->brand_name)->limit(100);
                    })
				->addColumn('brand_desp', function($row) {
                        return str($row->brand_desp)->limit(100);
                    })
                    ->addColumn('brand_status', function($row) {
                        return $row->brand_status ? 'Active' : 'Inactive';
                    })
				->addColumn('action', 'brands.include.action')
                ->toJson();
        }

        return view('brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request): RedirectResponse
    {
        
        Brand::create($request->validated());

        return to_route('brands.index')->with('success', __('The brand was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand): View
    {
        return view('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand): View
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand): RedirectResponse
    {
        
        $brand->update($request->validated());

        return to_route('brands.index')->with('success', __('The brand was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand): RedirectResponse
    {
        try {
            $brand->delete();

            return to_route('brands.index')->with('success', __('The brand was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('brands.index')->with('error', __("The brand can't be deleted because it's related to another table."));
        }
    }
}
