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

class AdminController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
//        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $users = User::latest()->paginate(1);
//        $user_id = auth()->user()->id;
//        $posts_user = Post::where('admin_id', $user_id);
//        $posts = Post::orderBy('name')->pluck('name', 'id');
        return view('admins.users.index', compact('users'));
    }
}
