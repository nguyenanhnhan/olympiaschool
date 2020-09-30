<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Foundation\Auth\Teacher as Authenticatable;
use Illuminate\Support\Facades\Auth;
class Teacher extends Authenticatable
{
    
    protected $fillable = [
        'name', 'email', 'password', 'fullname', 'fullname_eng', 'last_name', 'first_name', 'email', 'department', 'position'
    ];

    public function coso()
    {
        return $this->belongsTo('App\Address', 'id_address', 'id');
    }
    // public function evaluation()
    // {
    //     return $this->belongsTo('App\Evaluation', 'id_teacher', 'id');
    // }
    public function evaluation()
    {
        return $this->hasMany('App\Evaluation', 'id_teacher', 'id');
    }
    public function lps()
    {
        return $this->hasMany('App\Lesson_plan', 'teacher_id', 'id');
    }
}
