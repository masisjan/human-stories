@extends('layouts.admin')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Music Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group row">
                                        <label for="singer_id" class="col-md-3 col-form-label">Singers name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $music->singer->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $music->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="path" class="col-md-3 col-form-label">Audio</label>
                                        <div class="col-md-9">
                                            <audio controls>
                                                <source src="{{ asset('storage/uploads/music/' . $music->path) }}" type="audio/ogg; codecs=vorbis">
                                                <source src="{{ asset('storage/uploads/music/' . $music->path) }}" type="audio/mpeg">
                                            </audio>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{ route('music.edit', $music->id) }}" class="btn btn-info">Edit</a>
                                            @if(auth()->user()->type == 'admin')
                                            <a href="{{ route('music.destroy', [$music->id]) }}" class="btn btn-delete btn-outline-danger">Delete</a>
                                            @endif
                                            <a href="{{ route('music.index') }}" class="btn btn-outline-secondary" >Cancel</a>
                                        </div>
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
