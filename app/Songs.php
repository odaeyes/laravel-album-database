<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    //
    protected $fillable = ['productdate', 'name'];
	public function albums()
    {
        return $this->belongsTo(Albums::class);
    }
}
