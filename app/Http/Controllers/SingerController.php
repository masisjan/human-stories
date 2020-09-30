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
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class SingerController extends Controller
{
    public function index()
    {
        DB::enableQueryLog();
        $singers = Singer::latest()->paginate(2);
        //        $user_id = auth()->user()->id;
        //        $posts_user = Post::where('admin_id', $user_id);
        //        $posts = Post::orderBy('name')->pluck('name', 'id');
        return view('admins.singers.index', compact('singers'));
    }

    public function create()
    {
        $singer = new Singer();
        return view('admins.singers.create', compact( 'singer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Singer::create($request->all());
        return redirect()->route('singers.index')
            ->with('message', "Contact has been updated successfully");
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $singer = Singer::findOrFail($id);
        $singer->update($request->all());
        return redirect()->route('singers.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $singer = Singer::findOrFail($id);
        return view('admins.singers.edit', compact('singer'));
    }

    public function destroy($id)
    {
        $singer = Singer::findOrFail($id)->delete();
        return redirect()->route('singers.index')->with('message', "Contact has been deleted successfully");
    }
}
