<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['users.create', 'users.edit'], function ($view) {
            return $view->with(
                'roles',
                Role::select('id', 'name')->get()
            );
        });
  

				View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'brands',
                \App\Models\Brand::select('id', 'brand_name')->get()
            );
        });

		View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'categories',
                \App\Models\Category::select('id', 'category_name')->get()
            );
        });

		View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'projects',
                \App\Models\Project::select('id', 'project_name')->get()
            );
        });

		View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'fundingsources',
                \App\Models\Fundingsource::select('id', 'source_name')->get()
            );
        });
        View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'itemclasses',
                \App\Models\Itemclass::select('id', 'class_name')->get()
            );
        });
        View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'vendors',
                \App\Models\Vendor::select('id', 'vendor_name')->get()
            );
        });
        View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'conditions',
                \App\Models\Condition::select('id', 'condition_name')->get()
            );
        });
        View::composer(['items.create', 'items.edit'], function ($view) {
            return $view->with(
                'itemtypes',
                \App\Models\Itemtype::select('id', 'type_name')->get()
            );
        });
        
        View::composer(['issues.create', 'issues.edit'], function ($view) {
            
            return $view->with(
                'wings',
                \App\Models\Wing::select('id', 'wing_name')->get()
            );
        });
        
		View::composer(['issues.create', 'issues.edit'], function ($view) {
            return $view->with(
                'items',
                \App\Models\Item::select('id', 'item_code')
                    ->where('item_status', 1)
                    ->get()
            );
        });


        View::composer(['issues.create', 'issues.edit'], function ($view) {
            return $view->with(
                'employees',
                \App\Models\Employee::select('id', 'employee_name')->get()
            );
        });
        

				View::composer(['repairs.create', 'repairs.edit'], function ($view) {
            return $view->with(
                'fundingsources',
                \App\Models\Fundingsource::select('id', 'source_name')->get()
            );
        });

        

				View::composer(['employees.create', 'employees.edit'], function ($view) {
            return $view->with(
                'wings',
                \App\Models\Wing::select('id', 'wing_name')->get()
            );
        });
        View::composer(['employees.create', 'employees.edit'], function ($view) {
            
            return $view->with(
                'sections',
                \App\Models\Section::select('id', 'section_name')->get()
            );
        });

		View::composer(['employees.create', 'employees.edit'], function ($view) {
            return $view->with(
                'designations',
                \App\Models\Designation::select('id', 'designation_name')->get()
            );
        });

		View::composer(['sections.create', 'sections.edit'], function ($view) {
            return $view->with(
                'wings',
                \App\Models\Wing::select('id', 'wing_name')->get()
            );
        });

	}
}