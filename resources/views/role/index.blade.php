@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-success mb-3" href="{{ route('roles.create') }}">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>

                        @foreach($roles as $role)
                        <tbody>
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->slug }}</td>
                            <td>

                                <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                    <a type="button" class="btn btn-sm btn-info mr-2" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
