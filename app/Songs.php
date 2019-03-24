<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    //
    protected $fillable = [
        'name',
        'productdate'
    ];
    public function artist()
    {
        return $this->belongsTo('App\Artists');
    }
    public function album()
    {
        return $this->belongsTo('App\Albums');
    }
}
