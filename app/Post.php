<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Post extends Model
{

    protected $fillable = ['admin_id', 'friend_id', 'city_id', 'type_comment', 'music_fon_id', 'video', 'image',
        'name', 'date', 'position', 'biography', 'other', 'speech', 'images', 'family', 'gender', 'publish'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function friend()
    {
        return $this->belongsTo(Friend::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function City()
    {
        return $this->belongsTo(City::class);
    }

}
