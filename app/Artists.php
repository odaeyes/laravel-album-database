<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    //
    protected $fillable = [
        'lastname',
        'firstname'
    ];
    public function songs()
    {
        return $this->hasMany('App\Songs');
    }
    public function albums()
    {
        return $this->hasMany('App\Albums');
    }
}
