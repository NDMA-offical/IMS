<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Item;
use App\Models\Transaction;
use App\Http\Requests\Issues\{StoreIssueRequest, UpdateIssueRequest};
use Illuminate\Contracts\View\View;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\{JsonResponse, RedirectResponse};
use Illuminate\Routing\Controllers\{HasMiddleware, Middleware};

class IssueController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            // 'auth',

            // TODO: uncomment this code if you are using spatie permission
            // new Middleware('permission:issue view', only: ['index', 'show']),
            // new Middleware('permission:issue create', only: ['create', 'store']),
            // new Middleware('permission:issue edit', only: ['edit', 'update']),
            // new Middleware('permission:issue delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|JsonResponse
    {


        // $issues = Issue::with(['item:id,item_code', 'wing:id,wing_name'])->get();
        // $issueIds = $issues->pluck('id')->toArray();
        // dd($issueIds); 


        if (request()->ajax()) {
            $issues = Issue::with([
                'item:id,item_code',
                'issueToEmployee:id,employee_name',
                'issueByEmployee:id,employee_name'
            ])->get();

            return DataTables::of($issues)
                ->addColumn('issue_to_name', function ($row) {
                    return str($row->issue_to_name)->limit(100);
                })
                ->addColumn('issue_by', function ($row) {
                    return str($row->issue_by)->limit(100);
                })
                ->addColumn('voucher_no', function ($row) {
                    return str($row->voucher_no)->limit(100);
                })
                ->addColumn('remarks', function ($row) {
                    return str($row->remarks)->limit(100);
                })
                ->addColumn('item', function ($row) {
                    return $row?->item?->item_code ?? '';
                })->addColumn('issue_to_name', function ($row) {
                    return $row->issueToEmployee ? $row->issueToEmployee->employee_name : '';
                })
                ->addColumn('issue_by_name', function ($row) {
                    return $row->issueByEmployee ? $row->issueByEmployee->employee_name : '';
                })
                ->addColumn('action', 'issues.include.action')

                ->toJson();
        }

        return view('issues.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('issues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueRequest $request): RedirectResponse
    {

        $issue = Issue::create($request->validated());
        Item::where('id', $request->item_id)->update(['item_status' => 2]);

        Transaction::create([
            'transaction_type' => 2,
            'issue_id' => $issue->id,
            'transaction_date' => now(), 
        ]);

        return to_route('issues.index')->with('success', __('The issue was created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue): View
    {

        $issue->load(['item:id,item_code', 'wing:id,wing_name',]);

        return view('issues.show', compact('issue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue): View
    {

        $issue->load(['item:id,item_code', 'wing:id,wing_name',]);

        return view('issues.edit', compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueRequest $request, Issue $issue): RedirectResponse
    {

        $issue->update($request->validated());

        return to_route('issues.index')->with('success', __('The issue was updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue): RedirectResponse
    {
        try {
            $issue->delete();

            return to_route('issues.index')->with('success', __('The issue was deleted successfully.'));
        } catch (\Exception $e) {
            return to_route('issues.index')->with('error', __("The issue can't be deleted because it's related to another table."));
        }
    }
}
