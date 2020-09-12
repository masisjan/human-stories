<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citypost extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
