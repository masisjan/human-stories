@extends('layouts.admin')

@section('title', 'Contact App | Update friend')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Update Singer</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('singers.update', $singer->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                @include('admins.singers._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
