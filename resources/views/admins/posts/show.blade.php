@extends('layouts.admin')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Post Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if(auth()->user()->type == 'admin')
                                    <div class="form-group row">
                                        <label for="admin_id" class="col-md-3 col-form-label">Տեղադրող</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="form-group row">
                                        <label for="friend_id" class="col-md-3 col-form-label">Ընկերը</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->friend->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="city_id" class="col-md-3 col-form-label">Քաղաքը</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->city->name}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type_comment" class="col-md-3 col-form-label">Կարծիք ստատուս</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext"  style=" @if ($post->type_comment == "yes") color:green @else color:red @endif">{{ $post->type_comment }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="music_fon_id" class="col-md-3 col-form-label">Ֆոնային երաժտություն</label>
                                        @if($post->music_fon_id)
                                            <div class="col-md-9">
                                                <p class="form-control-plaintext text-muted">{{ $post->music->name}}</p>
                                                <audio controls>
                                                    <source src="{{ asset('storage/uploads/music/' . $post->music->singer_id . "/" . $post->music->path) }}" type="audio/ogg; codecs=vorbis">
                                                    <source src="{{ asset('storage/uploads/music/' . $post->music->singer_id . "/" . $post->music->path) }}" type="audio/mpeg">
                                                </audio>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label for="video" class="col-md-3 col-form-label">Տեսանյութ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->video }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-md-3 col-form-label">Գլխավոր նկար</label>
                                        <div class="col-md-9">
                                            <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" style="width:150px" alt=""><br>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Անուն</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date" class="col-md-3 col-form-label">Ամսաթիվ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->date }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="position" class="col-md-3 col-form-label">Պաշտոն</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->position }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="biography" class="col-md-3 col-form-label">Կենսագրություն</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->biography }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="other" class="col-md-3 col-form-label">Այլ նշումներ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->other }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="speech" class="col-md-3 col-form-label">Խոսքեր</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->speech }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="images" class="col-md-3 col-form-label">Նկարներ</label>
                                        <div class="col-md-9">
                                            @if ($post->images)
                                                @foreach ($images as $image)
                                                    <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $image) }}" style="width:200px" alt="">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="family" class="col-md-3 col-form-label">Ընտանիք</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->family }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-md-3 col-form-label">Սեռ</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext" style="@if ($post->gender == "not") color:red @else color:green @endif">{{ $post->gender }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="publish" class="col-md-3 col-form-label">Հրապարակել</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext" style="@if ($post->publish == "not") color:red @else color:green @endif">{{ $post->publish }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="publish" class="col-md-3 col-form-label">QR ստատուս</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext" style="@if ($post->qr_cod == "not") color:red @else color:green @endif">{{ $post->qr_cod }}</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                                            @if(auth()->user()->type == 'admin')
                                            <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-delete btn-outline-danger">Delete</a>
                                            @endif
                                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary" >Cancel</a>
                                        </div>
                                        <form id="form-delete" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
