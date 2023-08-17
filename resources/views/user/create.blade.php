@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button class="btn btn-primary">Click Me</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your Last name">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your Mobile Number">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
