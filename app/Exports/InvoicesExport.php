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

class InvoicesExport implements FromView
{
    public function view(): View
    {
        $alls = DB::table('users')->get();

        return view('invoices')->with([
            'alls' => $alls,
        ]);

        // return view('tableB')->with([
        //     'alls' => $alls,
        // ]);
    }


    // public $user;

    // public function __construct($user)
    // {
    //     $this->user = $user;
    // }

    // 指定子表名称
    // public function title(): string
    // {
    //     return '用户' . $this->user->name;
    // }

    // public function view(): View
    // {
    //     return view('exports.users', [
    //         'user' => $this->user
    //     ]);
    // }
}
