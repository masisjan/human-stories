<?php

namespace App\Http\Controllers;

use App\City;
use App\Comment;
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

class CommentController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
        $comments = Comment::latest()->paginate(2);
        $posts = Post::orderBy('name')->pluck('name', 'id')->prepend('All Comments', '');
        return view('admins.comments.index', compact('comments', 'posts'));
    }

    public function create()
    {
        $comment = new Comment();
        $posts = Post::orderBy('name')->pluck('name', 'id')->prepend('All Comments', '');
        return view('admins.comments.create', compact('comment', 'posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Comment::create($request->all());
        return back()->with('message', "Contact has been updated successfully");
//        return redirect()->route('comments.index')
//            ->with('message', "Contact has been updated successfully");
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admins.comments.show', compact('comment'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return redirect()->route('comments.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $posts = Post::orderBy('name')->pluck('name', 'id')->prepend('All Friend', '');
        return view('admins.comments.edit', compact('posts', 'comment'));

    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id)->delete();
        return redirect()->route('comments.index')->with('message', "Contact has been deleted successfully");
    }
}
