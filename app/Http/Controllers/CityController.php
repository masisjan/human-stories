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

class CityController extends Controller
{
    public function index()
    {
        //        dd(request()->only('company_id'));
        DB::enableQueryLog();
        $cities = City::latest()->paginate(2);
        //        $user_id = auth()->user()->id;
        //        $posts_user = Post::where('admin_id', $user_id);
        //        $posts = Post::orderBy('name')->pluck('name', 'id');
        return view('admins.cities.index', compact('cities'));
    }

    public function create()
    {
        $city = new city();
        return view('admins.cities.create', compact( 'city'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        City::create($request->all());
        return redirect()->route('cities.index')
            ->with('message', "Contact has been updated successfully");
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $city = City::findOrFail($id);
        $city->update($request->all());
        return redirect()->route('cities.index')->with('message', "Contact has been updated successfully");
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('admins.cities.edit', compact('city'));

    }

    public function destroy($id)
    {
        $city = City::findOrFail($id)->delete();

        return redirect()->route('cities.index')->with('message', "Contact has been deleted successfully");
    }

    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('admins.cities.show', compact('city')); // ['contact' => $contact]
    }

}
