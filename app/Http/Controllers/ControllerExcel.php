<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


//B表格匯出
use App\Exports\tableB;

//視圖匯出模型
use App\Exports\InvoicesExport;

class ControllerExcel extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function export()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');

        // $alls = DB::table('users')->get();

        // return view('invoices')->with([
        //     'alls' => $alls,
        // ]);

        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

    public function tableB()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');

        // $alls = DB::table('excel')->get();

        // return view('invoices')->with([
        //     'alls' => $alls,
        // ]);

        return Excel::download(new tableB, 'tableB.xlsx');
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->hasfile('xlsx')) {
                $xlsx_data = $request->file('xlsx');
                if ($xlsx_data->isValid()) {
                    Excel::import(new UsersImport, $xlsx_data);
                    return redirect('test');
                } else {
                    echo 'no pass!!';
                }
            } else {
                echo 'no data!!';
            }
        } else {
            echo 'no post!!';
        }
    }

    public function add()
    {
        // $alls = DB::table('excel')->get();
        $alls = DB::table('excel')->get();

        // $arr = array('姓名','時薪','時數','日期');
        // $arr = array();
        // $data = array();

        // $arr_name  = array();
        // $arr_wage  = array();
        // $arr_hours = array();
        // $arr_date  = array();

        // foreach($alls as $all){
        //     array_push($arr_name,$all->name);
        //     array_push($arr_wage,$all->hourly_wage);
        //     array_push($arr_hours,$all->hours);
        //     array_push($arr_date,$all->createDate);
        // }

        // for($i = 0; $i < count($alls); $i++){
        //     print_r($arr_name[$i]);
        // }

        // for($i = 0; $i < count($alls); $i++){
        //     $data = array(
        //         '姓名' => $arr_name[$i],
        //         '時薪' => $arr_wage[$i],
        //         '時數' => $arr_hours[$i],
        //         '日期' => $arr_date[$i],
        //     );
        // }

        // foreach($alls as $all){
        //     $data = array(
        //         '姓名' => $all->name,
        //         '時薪' => $all->hourly_wage,
        //         '時數' => $all->hours,
        //         '日期' => $all->createDate,
        //     );
        // }

        // dd($data);

        // echo count($alls);

        // print_r(array_push($arr, $data));

    }

    public function edit()
    { }
}
