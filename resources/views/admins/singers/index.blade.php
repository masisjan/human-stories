@extends('layouts.admin')
@section('title', 'Contact App | All contacts')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Friends</h2>
                                <div class="ml-auto">
                                    <a href=" {{ route('friends.create') }} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admins.friends._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">City name</th>
                                    <th scope="col">Tel</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($friends->count())
                                    @foreach($friends as $index => $friend)
                                        <tr>
                                            <th scope="row"> {{ $index + 1 }} </th>
                                            <th scope="row"> {{ $index + $friends->firstItem() }} </th>
                                            <td> {{ $friend->name }} </td>
{{--                                            <td> {{ $friend->cities->name }} </td>--}}
                                            <td> {{ $friend->tel }} </td>
                                            <td> {{ $friend->email }} </td>
                                            <td width="150">
                                                <a href="{{ route('friends.show' , [$friend->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('friends.edit', $friend->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('friends.destroy', $friend->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <form id="form-delete" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endif
                                </tbody>
                            </table>
                            {{ $friends->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
