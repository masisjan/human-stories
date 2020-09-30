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
                                <h2 class="mb-0">All Singers</h2>
                                <div class="ml-auto">
                                    <a href=" {{ route('singers.create') }} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admins.singers._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($singers->count())
                                    @foreach($singers as $index => $singer)
                                        <tr>
                                            <th scope="row"> {{ $index + 1 }} </th>
                                            <th scope="row"> {{ $index + $singers->firstItem() }} </th>
                                            <td> {{ $singer->name }} </td>
                                            <td width="150">
                                                <a href="{{ route('singers.edit', $singer->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('singers.destroy', $singer->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
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
                            {{ $singers->links() }}
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
