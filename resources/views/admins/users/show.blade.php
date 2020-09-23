@extends('layouts.admin')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Users Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="type" class="col-md-3 col-form-label">User type</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $user->type }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">User name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $user->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">User email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $user->email }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="created_at" class="col-md-3 col-form-label">User created</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{ $user->created_at }}</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('users.destroy', [$user->id]) }}" class="btn btn-outline-danger">Delete</a>
                                            <a href="{{ route('users.index') }}" class="btn btn-delete btn-outline-secondary" >Cancel</a>
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
