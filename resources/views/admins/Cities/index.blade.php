@extends('layouts.admin')
@section('title', 'Contact App | All cities')
@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Cities</h2>
                                <div class="ml-auto">
                                    <a href=" {{ route('cities.create') }} " class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admins.cities._filter')
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
                                @if($cities->count())
                                    @foreach($cities as $index => $city)
                                        <tr>
                                            <th scope="row"> {{ $index + 1 }} </th>
                                            <th scope="row"> {{ $index + $cities->firstItem() }} </th>
                                            <td> {{ $city->name }} </td>
                                            <td width="150">
                                                <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('cities.destroy', $city->id) }}" class="btn btn-delete btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
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
                            {{ $cities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
