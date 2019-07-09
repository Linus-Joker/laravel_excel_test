<?php

namespace App\Exports;

use DB;
use App\User;
use App\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

//視圖匯出下載
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithTitle;

// class InvoicesExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return User::all();
//     }
// }

class tableB implements FromView
{
    public function view(): View
    {
        $alls = DB::table('excel')->get();

            // return view('invoices')->with([
            //     'alls' => $alls,
            // ]);
        
            return view('tableB')->with([
                'alls' => $alls,
            ]);
    }
    
}
