<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['admin_id', 'friend_id', 'type_comment', 'music_id', 'music_fon_id', 'video_id', 'image',
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

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
