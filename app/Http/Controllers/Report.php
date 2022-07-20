<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\Reports;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Report extends Controller
{
    public function report()
    {
        return view('employee.report');
    }

    public function reportmsg(Request $request)
    {
       $request->validate
        (
            [
               'user_id'=>'required',
                'first_name'=>'required',
                'report'=>'required'
            ]
        );

            $report = new Report();
            $report -> first_name = $request->first_name;
            $report -> user_id = $request->user_id;
            $report -> report = $request->report;
            $report->save(); 
        return back()->with('success', 'Report sent successfully.');
    }
}
