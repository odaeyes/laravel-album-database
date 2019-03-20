<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    //
    protected $fillable = ['albumname', 'albumcover', 'kind', 'productyear'];
    public function artists()
    {
        return $this->hasOne(Artists::class);
    }

    public function songs()
    {
        return $this->hasMany(Songs::class);
    }
}
