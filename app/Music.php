<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\FilterScope;
use App\Scopes\SearchScope;

class Music extends Model
{
    protected $fillable = ['singer_id', 'name', 'path'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
}
