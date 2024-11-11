<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Http\Requests\Vendors\{StoreVendorRequest, UpdateVendorRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class VendorController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:vendor view', only: ['index', 'show']),
            // new Middleware('permission:vendor create', only: ['create', 'store']),
            // new Middleware('permission:vendor edit', only: ['edit', 'update']),
            // new Middleware('permission:vendor delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {
        if (request()->ajax()) {
            $vendors = Vendor::query();

            return DataTables::of($vendors)
                ->addColumn('vendor_name', function($row) {
                        return str($row->vendor_name)->limit(100);
                    })
				->addColumn('vendor_desp', function($row) {
                        return str($row->vendor_desp)->limit(100);
                    })
				->addColumn('action', 'vendors.include.action')
                ->toJson();
        }

        return view('vendors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request): RedirectResponse
    {
        
        Vendor::create($request->validated());

        return to_route('vendors.index')->with('success', __('The vendor was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor): View
    {
        return view('vendors.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor): View
    {
        return view('vendors.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor): RedirectResponse
    {
        
        $vendor->update($request->validated());

        return to_route('vendors.index')->with('success', __('The vendor was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor): RedirectResponse
    {
        try {
            $vendor->delete();

            return to_route('vendors.index')->with('success', __('The vendor was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('vendors.index')->with('error', __("The vendor can't be deleted because it's related to another table."));
        }
    }
}
