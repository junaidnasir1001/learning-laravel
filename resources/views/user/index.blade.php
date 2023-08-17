@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-success mb-3" href="{{ route('users.create') }}">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>

                        @foreach($users as $user)
                        <tbody>
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->mobile_number }}</td>
                            <td>

                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                    <a type="button" class="btn btn-sm btn-primary mr-2" href="{{ route('users.show',$user->id) }}">View</a>
                                    <a type="button" class="btn btn-sm btn-info mr-2" href="{{ route('users.edit', $user->id) }}">Edit</a>
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
