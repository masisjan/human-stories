<?php

namespace App\Http\Controllers;

use App\Citypost;
use App\Music;
use App\Post;
use App\Friend;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
//        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $posts = Post::latest()->paginate(10);
        return view('admins.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        $users = User::orderBy('name')->pluck('name', 'id')->prepend('All Admin', '');
        $friends = Friend::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        $cityposts = Citypost::orderBy('name')->pluck('name', 'id')->prepend('All City', '');
        $musics = Music::orderBy('name')->pluck('name', 'id')->prepend('All Music', '');
        return view('admins.create', compact('post', 'users', 'friends', 'cityposts', 'musics'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
//            'company_id' => 'required|exists:companies,id'
        ]);

        Post::create($request->all());
        return redirect()->route('admins.index')->with('message', "Contact has been add successfully");

//        dd($request->all());
//        dd($request->only('first_name', 'last_name'));
//        dd($request->except('first_name', 'last_name'));

    }
}
