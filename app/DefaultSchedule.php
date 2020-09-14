<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultSchedule extends Model
{
    
    protected $fillable = [
        'day_id', 'session_id', 'teacher_id', 'dclass', 'address_id'
    ];
    public function day()
    {
        return $this->belongsTo('App\Day', 'day_id', 'id');
    }
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
