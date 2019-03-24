<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    //
    protected $fillable = [
        'albumname',
        'productyear',
        'kind',
        'cover',
        'label',
        'rank'
    ];
    public function songs()
    {
        return $this->hasMany('App\Songs');
    }
    public function album()
    {
        return $this->belongsTo('App\Albums');
    }
}
