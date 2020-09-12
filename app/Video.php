<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['name', 'path'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
