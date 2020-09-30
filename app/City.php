<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\FilterScope;
use App\Scopes\SearchScope;

class City extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function friend()
    {
        return $this->belongsTo(Friend::class);
    }
}
