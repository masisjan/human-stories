<?php

namespace App\Http\Controllers;

use App\City;
use App\Music;
use App\Post;
use App\Friend;
use App\Singer;
use App\User;
use App\Scopes\FilterScope;
use App\Scopes\SearchScope;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class MusicController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
        $musices = Music::latest()->paginate(2);
        //        $user_id = auth()->user()->id;
        //        $posts_user = Post::where('admin_id', $user_id);
        //        $posts = Post::orderBy('name')->pluck('name', 'id');
        return view('admins.music.index', compact('musices'));
    }

    public function create()
    {
        $music = new Music();
        $singers = Singer::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');
        return view('admins.music.create', compact( 'music', 'singers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'path' => 'required|mimes:audio/mpeg,mp3,',
        ]);

        $music_name = $request->singer_id;

        $music_new_name = date('Y-m-d-H-i-s') . '.' . $request->file('path')->getClientOriginalExtension();
        $music_path = $request->file('path')->storeAs('uploads/music/' . $music_name, $music_new_name, 'public');

        $form = array(
            'singer_id'             =>  $request->singer_id,
            'name'                  =>  $request->name,
            'path'                  =>  $music_new_name,
        );

        Music::create($form);

        return redirect()->route('music.index', compact('music_path','music_new_name'))
            ->with('message', "Contact has been updated successfully");
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);
        $singers = Singer::orderBy('name')->pluck('name', 'id');
        return view('admins.music.show', compact('music', 'singers')); // ['contact' => $contact]
    }

    public function edit($id)
    {
        $music = Music::findOrFail($id);
        $singers = Singer::orderBy('name')->pluck('name', 'id');
        return view('admins.music.edit', compact('singers', 'music'));

    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $music = Music::findOrFail($id);
        $music->update($request->all());
        return redirect()->route('music.index')->with('message', "Contact has been updated successfully");
    }

    public function destroy($id, Request $request)
    {
        $music = Music::findOrFail($id);
        Storage::disk('public')->delete('uploads/music/' . $music->singer_id . '/' . $music->path);
        $music = Music::findOrFail($id)->delete();
        return redirect()->route('music.index')->with('message', "Contact has been deleted successfully");
    }
}
