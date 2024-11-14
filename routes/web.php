<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', fn () => view('dashboard'));
    Route::get('/dashboard', fn () => view('dashboard'));

    Route::get('/profile', App\Http\Controllers\ProfileController::class)->name('profile');

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('roles', App\Http\Controllers\RoleAndPermissionController::class);
});

Route::middleware(['auth', 'permission:test view'])->get('/tests', function () {
    dd('This is just a test and an example for permission and sidebar menu. You can remove this line on web.php, config/permission.php and config/generator.php');
})->name('tests.index');

Route::resource('brands', App\Http\Controllers\BrandController::class)->middleware('auth');
Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('projects', App\Http\Controllers\ProjectController::class)->middleware('auth');
Route::resource('fundingsources', App\Http\Controllers\FundingsourceController::class)->middleware('auth');
Route::resource('wings', App\Http\Controllers\WingController::class)->middleware('auth');
Route::resource('items', App\Http\Controllers\ItemController::class)->middleware('auth');
Route::resource('issues', App\Http\Controllers\IssueController::class)->middleware('auth');
Route::resource('repairs', App\Http\Controllers\RepairController::class)->middleware('auth');
Route::resource('itemclasses', App\Http\Controllers\ItemclassController::class)->middleware('auth');
Route::resource('itemtypes', App\Http\Controllers\ItemtypeController::class)->middleware('auth');
Route::resource('vendors', App\Http\Controllers\VendorController::class)->middleware('auth');
Route::resource('designations', App\Http\Controllers\DesignationController::class)->middleware('auth');
Route::resource('employees', App\Http\Controllers\EmployeeController::class)->middleware('auth');
Route::resource('sections', App\Http\Controllers\SectionController::class)->middleware('auth');
Route::resource('conditions', App\Http\Controllers\ConditionController::class)->middleware('auth');
Route::resource('returns', App\Http\Controllers\ReturnController::class)->middleware('auth');
Route::resource('itemreturns', App\Http\Controllers\ItemreturnController::class)->middleware('auth');

Route::get('/fetch-issue-details', [App\Http\Controllers\ItemController::class, 'fetchIssueDetails']);
Route::get('/issues/{id}/receipt', [App\Http\Controllers\IssueController::class, 'printReceipt'])->middleware('auth')->name('issues.print');
