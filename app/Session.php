<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    
    protected $fillable = [
        'address_id', 'name', 'time'
    ];
    
    public function address()
    {
        return $this->belongsTo('App\Address', 'address_id', 'id');
    }
}
