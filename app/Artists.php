<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    //
    protected $fillable = ['albumname', 'albumcover', 'kind', 'productyear'];
    public function albums()
    {
        return $this->belongsTo(Albums::class);
    }
}
