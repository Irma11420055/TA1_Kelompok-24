<?php

namespace App\Http\Controllers\Backend;

use App\Models\Lending;
use App\Models\LogVisitor;
use Illuminate\Http\Request;
use App\Exports\VisitorExport;
use App\Exports\LendingBookExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function index()
    {
        return view('backend.reports.index');
    }

    public function exportLendingBook(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_month' => 'required',
            'end_month' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $start_month = $request->start_month;
        $end_month = $request->end_month;
        $status = $request->status;

        return Excel::download(new LendingBookExport($start_month, $end_month, $status, 'book'), 'LendingBook.xlsx');
    }

    public function exportLendingCD(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_month' => 'required',
            'end_month' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $start_month = $request->start_month;
        $end_month = $request->end_month;
        $status = $request->status;

        return Excel::download(new LendingBookExport($start_month, $end_month, $status, 'cd_dvd'), 'LendingCD.xlsx');
    }

    public function exportVisitor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_month' => 'required',
            'end_month' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $start_month = $request->start_month;
        $end_month = $request->end_month;

        return Excel::download(new VisitorExport($start_month, $end_month), 'Visitor.xlsx');
    }
}
