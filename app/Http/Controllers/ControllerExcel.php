<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ControllerExcel extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function add()
    { }

    public function edit()
    { }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request)
    {
        $xlsxdata = $request->file('xlsx');
        // $data = $request['name'];

        // dd($xlsxdata);

        // Excel::import(new UsersImport, $xlsxdata);

        $data = Excel::toArray(new UsersImport, request()->file('xlsx'));
        dd($data);

        // return redirect('/')->with('success', 'All good!');
    }
}
