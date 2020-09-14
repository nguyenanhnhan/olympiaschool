<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['time1'];
    public function location()
    {
        return $this->belongsTo('App\Address', 'id_location', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'id_teacher', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'author', 'id');
    }
    // public function evaluation()
    // {
    //     return $this->hasMany('App\Evaluation', 'id_schedules', 'id');
    // }
    public function evaluation()
    {
        return $this->hasOne('App\Evaluation', 'id_schedules', 'id');
    }
}
