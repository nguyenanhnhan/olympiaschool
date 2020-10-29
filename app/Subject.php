<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    protected $fillable = [
        'code_name', 'name', 'criteria_id'
    ];

    public function criteria()
    {
        return $this->belongsTo('App\Criteria', 'criteria_id', 'id');
    }
}
