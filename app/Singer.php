<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = ['name'];

    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
