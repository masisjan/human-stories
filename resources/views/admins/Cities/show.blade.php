@extends('layouts.admin')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>City Details</strong>
                        </div>
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="city_id" class="col-md-3 col-form-label">Friend city</label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <p class="form-control-plaintext text-muted">{{ $friend->city->name }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="name" class="col-md-3 col-form-label">Name</label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <p class="form-control-plaintext text-muted">{{ $friend->name }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="tel" class="col-md-3 col-form-label">Tel</label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <p class="form-control-plaintext text-muted">{{ $friend->tel }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="email" class="col-md-3 col-form-label">Email</label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <p class="form-control-plaintext text-muted">{{ $friend->email }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="created_at" class="col-md-3 col-form-label">Created at</label>--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <p class="form-control-plaintext text-muted">{{ $friend->created_at }}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <hr>--}}
{{--                                    <div class="form-group row mb-0">--}}
{{--                                        <div class="col-md-9 offset-md-3">--}}
{{--                                            <a href="{{ route('friends.edit', $friend->id) }}" class="btn btn-info">Edit</a>--}}
{{--                                            @if(auth()->user()->type == 'admin')--}}
{{--                                            <a href="{{ route('friends.destroy', [$friend->id]) }}" class="btn btn-outline-danger">Delete</a>--}}
{{--                                            @endif--}}
{{--                                            <a href="{{ route('friends.index') }}" class="btn btn-delete btn-outline-secondary" >Cancel</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
