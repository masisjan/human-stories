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
                                <h2 class="mb-0">All Posts</h2>
                                <div class="ml-auto">
                                    <a href=" {{ route('posts.create') }} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admins.posts._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col">Friend</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(auth()->user()->type == 'user' ? $posts = $posts_users : true)
                                @endif
                                @if($posts->count())
                                    @foreach($posts as $index => $post)
                                        <tr>
                                            <th scope="row"> {{ $index + 1 }} </th>
                                            <th scope="row"> {{ $index + $posts->firstItem() }} </th>
                                            <td> {{ $post->name }} </td>
                                            <td> {{ auth()->user()->name }} </td>
                                            <td> {{ $post->friend->name }} </td>
                                            <td style=" @if ($post->publish == "not") color: red; @else color: green; @endif}}"> {{ $post->publish }} </td>
                                            <td width="150">
                                                <a href="{{ route('posts.show' , [$post->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                @if(auth()->user()->type == 'admin')
                                                <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                                                @endif
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
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
