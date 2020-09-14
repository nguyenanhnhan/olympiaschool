<?php

namespace App\Imports;

use App\DefaultSchedule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DefaultScheduleImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DefaultSchedule([
            'address_id' => $row['address'],
            'day_id'  => $row['day'],
            'session_id' => $row['session'],
            'teacher_id'    => $row['teacher'],
            'dclass'    => $row['class'],
        ]);
    }
}
