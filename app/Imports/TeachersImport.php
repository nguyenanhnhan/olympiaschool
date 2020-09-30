<?php

namespace App\Imports;

use App\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeachersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Teacher([
            'fullname'  => $row['fullname'],
            'fullname_eng'  => $row['fullname_eng'],
            'last_name'  => $row['last_name'],
            'first_name'  => $row['first_name'],
            'email' => $row['email'],
            'department' => $row['department'],
            'position' => $row['position'],
        ]);
    }
}
