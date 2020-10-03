<?php

namespace App\Http\Controllers;

use App\City;
use App\Admin;
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

class PostController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
//        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $posts = Post::latest()->paginate(5);
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id')->prepend('All Cities', '');
        $music = Music::orderBy('name')->pluck('name', 'id');

        $user_id = auth()->user()->id;
//        dd($user_id);
        $posts_users = Post::orderBy('name')->where('admin_id', $user_id)->paginate(5);
//        dd($posts);
//        dd($posts_users);

        return view('admins.posts.index', compact('posts', 'users', 'friends', 'music', 'cities', 'posts_users'));
    }

    public function create()
    {
        $post = new Post();
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $friends = Friend::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        $city = City::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $music = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');
        return view('admins.posts.create', compact('post', 'users', 'friends', 'city', 'music'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $friends = Friend::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        $city = City::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $music = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');

        return view('admins.posts.edit', compact('post', 'users', 'friends', 'city', 'music'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
//            'company_id' => 'required|exists:companies,id'
        ]);


        $admin_id = auth()->user()->id;
        $image_new_name = date('Y-m-d-H-i-s') . '.' . $request->file('image')->getClientOriginalExtension();
        $image_path = $request->file('image')->storeAs('uploads/image', $image_new_name, 'public');

        $form_data = array(
            'admin_id'               =>  $admin_id,
            'friend_id'              =>  $request->friend_id,
            'city_id'                =>  $request->city_id,
            'type_comment'           =>  $request->type_comment,
            'music_fon_id'           =>  $request->music_fon_id,
            'video'                  =>  $request->video,
            'image'                  =>  $image_new_name,
            'name'                   =>  $request->name,
            'date'                   =>  $request->date,
            'position'               =>  $request->position,
            'biography'              =>  $request->biography,
            'other'                  =>  $request->other,
            'speech'                 =>  $request->speech,
            'images'                 =>  $request->images,
            'family'                 =>  $request->family,
            'gender'                 =>  $request->gender,
            'publish'                =>  $request->publish,
        );


        Post::create($form_data);

        return redirect()->route('posts.index', compact('image_path','image_new_name'))
            ->with('message', "Contact has been updated successfully");

//        dd($request->all());
//        dd($request->only('first_name', 'last_name'));
//        dd($request->except('first_name', 'last_name'));

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id')->prepend('All Cities', '');
        $music = Music::orderBy('name')->pluck('name', 'id');
        return view('admins.posts.show', compact('post', 'users', 'friends', 'cities', 'music')); // ['contact' => $contact]
    }

    public function people($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id');
        $music = Music::orderBy('name')->pluck('name', 'id');
        return view('people.show', compact('post', 'users', 'friends', 'cities', 'music')); // ['contact' => $contact]
    }

    public function home()
    {
        $posts = Post::orderBy('name')->pluck('name', 'id');
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id');
        $music = Music::orderBy('name')->pluck('name', 'id');
        return view('welcome', compact('posts', 'users', 'friends', 'cities', 'music')); // ['contact' => $contact]
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect()->route('posts.index')->with('message', "Contact has been deleted successfully");
    }
}
