@extends('layouts.admin')
@section('title', 'Contact App | Add new cities')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Music</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admins.music._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
