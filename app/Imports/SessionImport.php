<?php

namespace App\Imports;

use App\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SessionImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Session([
            'address_id' => $row['address'],
            'name'  => $row['name'],
            'time'  => $row['time'],
        ]);
    }
}
