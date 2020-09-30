<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $casts = [
        'part1' => 'array',
        'part2' => 'array',
        'part3' => 'array',
        'part4' => 'array',
        'part5' => 'array',
        'part2a' => 'array',
        'part2b' => 'array',
        'part2c' => 'array',
        'part2d' => 'array',
        'part3a' => 'array',
        'part3b' => 'array',
        'part3c' => 'array',
        'part3d' => 'array',
        'part4a' => 'array',
        'part4b' => 'array',
        'part4c' => 'array',
    ];
    protected $fillable = [
        'part1',
        'part2',
        'part3',
        'part4',
        'part5',
        'part2a',
        'part2b',
        'part2c',
        'part2d',
        'part3a',
        'part3b',
        'part3c',
        'part3d',
        'part4a',
        'part4b',
        'part4c',
    ];
    // public function schedule()
    // {
    //     return $this->belongsTo('App\Schedule', 'id_schedules', 'id');
    // }
    
    public function schedule()
    {
        return $this->belongsto('App\Schedule', 'id_schedules', 'id');
    }
    public function teacher()
    {
        return $this->belongsto('App\Teacher', 'id_teacher', 'id');
    }
    public function location()
    {
        return $this->belongsto('App\Address', 'id_location', 'id');
    }
    public function subject()
    {
        return $this->belongsto('App\Subject', 'id_subject', 'id');
    }
    public function user()
    {
        return $this->belongsto('App\User', 'author', 'id');
    }
}
