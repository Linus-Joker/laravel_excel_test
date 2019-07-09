<?php

namespace App\Exports;

use DB;
use App\User;
use App\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

//一般下載
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

//視圖匯出下載
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return User::all();

        return DB::table('excel')->get();

        // $query = DB::table('excel')->select('name')->get();

        // return $query;

    }

}
