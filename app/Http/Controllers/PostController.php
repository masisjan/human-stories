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
use Illuminate\Support\Facades\Storage;
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
        $posts_users = Post::orderBy('name')->where('admin_id', $user_id)->paginate(5);

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

        $post = Post::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'date' => 'required',
//            'image' => 'required|mimes:jpeg,png,jpg',
//            'company_id' => 'required|exists:companies,id'
        ]);

        $img_name = $request->friend_id;
        $admin_id = auth()->user()->id;

//        glxavor nkar@ sarqelu hamar

        $image_new_name = "";
        if ($request->file('image')) {
            $image_new_name = date('Y-m-d-H-i-s') . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = $request->file('image')->storeAs('uploads/image/' . $img_name, $image_new_name, 'public');
        }

        if (!$request->file('image')) {
            $image_new_name = $post->image;
        }

//        nkarner@ sarqelu hamar

        $img_arr_string = "";
        if ($request->file('images')) {
            $img_arr = array();
            foreach ($request->File('images') as $img) {
                $imgs_new_name = rand(111111, 999999) . '.' . $img->getClientOriginalExtension();
                $imgs_path = $img->storeAs('uploads/image/' . $img_name, $imgs_new_name, 'public');
                array_push($img_arr, "$imgs_new_name");
            }
            $img_arr_string = implode(",", $img_arr);
        }

        if (!$request->file('images')) {
            $img_arr_string = $post->images;
        }

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
            'images'                 =>  $img_arr_string,
            'family'                 =>  $request->family,
            'gender'                 =>  $request->gender,
            'publish'                =>  $request->publish,
        );


        $post->update($form_data);
        return redirect()->route('posts.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $friends = Friend::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        $city = City::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $music = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');

        $images = explode(',', $post->images);

        return view('admins.posts.edit', compact('post', 'users', 'friends', 'city', 'music', 'images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
//            'image' => 'required|mimes:jpeg,png,jpg',
//            'company_id' => 'required|exists:companies,id'
        ]);

        $img_name = $request->friend_id;
        $admin_id = auth()->user()->id;

//        glxavor nkar@ sarqelu hamar

        $image_new_name = "";
        $image_path = "";
        if ($request->file('image')) {
            $image_new_name = date('Y-m-d-H-i-s') . '.' . $request->file('image')->getClientOriginalExtension();
            $image_path = $request->file('image')->storeAs('uploads/image/' . $img_name, $image_new_name, 'public');
        }

//        nkarner@ sarqelu hamar

        $img_arr_string = "";
        $imgs_new_name = "";
        $imgs_path = "";
        if ($request->file('images')) {
            $img_arr = array();
            foreach ($request->File('images') as $img) {
                $imgs_new_name = rand(111111, 999999) . '.' . $img->getClientOriginalExtension();
                $imgs_path = $img->storeAs('uploads/image/' . $img_name, $imgs_new_name, 'public');
                array_push($img_arr, "$imgs_new_name");
            }
            $img_arr_string = implode(",", $img_arr);
        }

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
            'images'                 =>  $img_arr_string,
            'family'                 =>  $request->family,
            'gender'                 =>  $request->gender,
            'publish'                =>  $request->publish,
        );


        Post::create($form_data);

        return redirect()->route('posts.index', compact('image_path','image_new_name', 'imgs_path','imgs_new_name'))
            ->with('message', "Contact has been updated successfully");
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id')->prepend('All Cities', '');
        $music = Music::orderBy('name')->pluck('name', 'id');

        $images = explode(',', $post->images);

        return view('admins.posts.show', compact('post', 'users', 'friends', 'cities', 'music', 'images')); // ['contact' => $contact]
    }

    public function people($id)
    {
        $post = Post::findOrFail($id);
        $users = User::orderBy('name')->pluck('name', 'id');
        $friends = Friend::orderBy('name')->pluck('name', 'id');
        $cities = City::orderBy('name')->pluck('name', 'id');
        $music = Music::orderBy('name')->pluck('name', 'id');

        $videos = explode(',', $post->video);

//                                                             SLAYDSHOW
        $images = explode(',', $post->images);
        $i = 1;
        $j = 1;

        return view('people.show', compact('post', 'users', 'friends', 'cities', 'music', 'images', 'i', 'j', 'videos')); // ['contact' => $contact]
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
        $post = Post::findOrFail($id);
        $img_folder = $post->friend_id;
        Storage::disk('public')->delete('uploads/image/' . $img_folder . '/' . $post->image);
        $post = Post::findOrFail($id)->delete();
        return redirect()->route('posts.index')->with('message', "Contact has been deleted successfully");
    }
}
