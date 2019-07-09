<?php

namespace App\Imports;

use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// class UsersImport implements ToModel
// {
//     /**
//      * @param array $row
//      *
//      * @return \Illuminate\Database\Eloquent\Model|null
//      */
//     public function model(array $row)
//     {
//         return new User([
//             'name'     => $row[0],
//             'email'    => $row[1],
//             'password' => Hash::make($row[2]),
//         ]);

//         return $tables;
//     }
// }

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        date_default_timezone_set("Asia/Taipei");
        foreach ($rows as $key => $row) {
            // User::create([
            //     'name' => $row[0],
            // ]);

            // if($key !== 0)
            // {
            //     $total = $row[1] * $row[2];

            //     DB::table('excel')
            //     ->insert([
            //         'name'          =>  $row[0],
            //         'hourly_wage'   =>  $row[1],
            //         'hours'         =>  $row[2],
            //         'total_wage'    =>  $total,
            //         'createDate'    =>  date('Y-m-d H:i:s')
            //     ]);
            //     print_r($total);
            // }

            // print_r($row);
        }
        dd($rows);
    }
}
