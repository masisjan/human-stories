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
                                        <label for="admin_id" class="col-md-3 col-form-label">Admin</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="form-group row">
                                        <label for="friend_id" class="col-md-3 col-form-label">Friend</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->friend->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="city_id" class="col-md-3 col-form-label">City</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->city->name}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type_comment" class="col-md-3 col-form-label">Type comment</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->type_comment }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="music_fon_id" class="col-md-3 col-form-label">Music fon</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->music->name}}</p>
                                            <audio controls>
                                                <source src="{{ asset('storage/uploads/music/' . $post->music->path) }}" type="audio/ogg; codecs=vorbis">
                                                <source src="{{ asset('storage/uploads/music/' . $post->music->path) }}" type="audio/mpeg">
                                            </audio>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="video" class="col-md-3 col-form-label">Video</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->video }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-md-3 col-form-label">Image</label>
                                        <div class="col-md-9">
                                            <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $post->image) }}" style="width:150px" alt=""><br>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date" class="col-md-3 col-form-label">Date</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->date }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="position" class="col-md-3 col-form-label">Position</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->position }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="biography" class="col-md-3 col-form-label">Biography</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->biography }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="other" class="col-md-3 col-form-label">Other</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->other }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="speech" class="col-md-3 col-form-label">Speech</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->speech }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="images" class="col-md-3 col-form-label">Images</label>
                                        <div class="col-md-9">
                                            @if ($post->images)
                                                @foreach ($images as $image)
                                                <img src="{{ asset('storage/uploads/image/' . $post->friend_id . '/' . $image) }}" style="width:200px" alt="">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="family" class="col-md-3 col-form-label">Family</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->family }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender" class="col-md-3 col-form-label">Gender</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->gender }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="publish" class="col-md-3 col-form-label">Publish</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $post->publish }}</p>
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
