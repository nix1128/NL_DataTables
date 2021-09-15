<?php

namespace App\Http\Controllers;


use App\Models\Employees;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTables;


class EmpController extends Controller
{


    public function getEmps(Request $request)
    {
        if ($request->ajax()) {
            $data = Employees::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)"
                    </a> <a href="javascript:void(0)" </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
