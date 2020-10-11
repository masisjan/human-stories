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
                                <h2 class="mb-0">All Users</h2>
                                <div class="ml-auto">
                                    <a href=" {{ route('register') }} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admins.users._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @if(auth()->user()->type == 'user')--}}
{{--                                {{$posts = $posts_user}}--}}
{{--                                @endif--}}
                                @if($users->count())
                                    @foreach($users as $index => $user)
                                        <tr>
                                            <th scope="row"> {{ $index + 1 }} </th>
                                            <th scope="row"> {{ $index + $users->firstItem() }} </th>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->type }} </td>
                                            <td width="150">
                                                <a href="{{ route('users.show' , [$user->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
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

                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

{{--    <script>--}}
{{--        document.querySelectorAll('.btn-delete').forEach((button) => {--}}

{{--            button.addEventListener('click', function (event) {--}}
{{--                event.preventDefault();--}}
{{--                if (confirm('Are you sure?')) {--}}
{{--                    let action = this.getAttribute('href');--}}
{{--                    let form = document.querySelector('#form-delete');--}}
{{--                    form.setAttribute('action', action);--}}
{{--                    form.submit();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
