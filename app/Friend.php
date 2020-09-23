<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = ['city_id', 'name', 'tel', 'email'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
