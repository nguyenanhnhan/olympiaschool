<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    protected $fillable = [
        'code_name', 'name', 'criteria'
    ];
}
