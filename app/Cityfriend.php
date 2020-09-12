<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cityfriend extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
