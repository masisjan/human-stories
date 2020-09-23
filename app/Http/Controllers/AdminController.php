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
        $users = User::latest()->paginate(1);
//        $user_id = auth()->user()->id;
//        $posts_user = Post::where('admin_id', $user_id);
//        $posts = Post::orderBy('name')->pluck('name', 'id');
        return view('admins.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admins.users.show', compact('user')); // ['contact' => $contact]
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admins.users.edit', compact('user'));

    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('message', "Contact has been updated successfully");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();

        return redirect()->route('users.index')->with('message', "Contact has been deleted successfully");
    }
}
