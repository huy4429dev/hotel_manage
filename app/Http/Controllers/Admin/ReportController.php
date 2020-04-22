<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{   
    public function index(){
        $reports = Report::all();
        return view('admin.report.index')->with('reports', $reports);
    }

    public function details($id){
        $report = Report::find($id);
        return view('admin.report.details')->with('report', $report);
    }

    public function delete($id)
    {
        return Report::destroy($id);
    }
}
