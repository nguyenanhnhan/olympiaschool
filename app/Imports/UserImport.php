<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'role'  => 1,
            'name' => $row['name'],
            'email' => $row['email'],
            'image' => 'default.png',
            'qa-qc' => $row['criteria'],
            'password'    => bcrypt(123456),
        ]);
    }
}
