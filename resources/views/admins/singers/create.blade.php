@extends('layouts.admin')
@section('title', 'Contact App | Add new contact')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Friend</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('friends.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('admins.friends._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
