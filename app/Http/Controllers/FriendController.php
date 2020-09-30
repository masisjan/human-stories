<?php

namespace App\Http\Controllers;

use App\City;
use App\Music;
use App\Post;
use App\Friend;
use App\User;
use App\Scopes\FilterScope;
use App\Scopes\SearchScope;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class FriendController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
    DB::enableQueryLog();
    $friends = Friend::latest()->paginate(2);
    //        $user_id = auth()->user()->id;
    //        $posts_user = Post::where('admin_id', $user_id);
    //        $posts = Post::orderBy('name')->pluck('name', 'id');
    return view('admins.friends.index', compact('friends'));
    }

    public function show($id)
    {
        $friend = Friend::findOrFail($id);
        return view('admins.friends.show', compact('friend')); // ['contact' => $contact]
    }

    public function create()
    {
        $friend = new Friend();
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $city = City::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $music = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');
        return view('admins.friends.create', compact( 'users', 'friend', 'city', 'music'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Friend::create($request->all());
        return redirect()->route('friends.index')
            ->with('message', "Contact has been updated successfully");

//        dd($request->all());

    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $friend = Friend::findOrFail($id);
        $friend->update($request->all());
        return redirect()->route('friends.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $friend = Friend::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $posts = Post::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        $city = City::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $music = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');

        return view('admins.friends.edit', compact('posts', 'users', 'friend', 'city', 'music'));

    }

    public function destroy($id)
    {
        $Friend = Friend::findOrFail($id)->delete();

        return redirect()->route('friends.index')->with('message', "Contact has been deleted successfully");
    }
}
