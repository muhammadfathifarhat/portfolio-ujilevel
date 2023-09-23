@extends('layout.admin')
@section('title', 'Profile')
@section('profile', 'active')

@section('content')
    <div class="header">
        <h4 class="fw-bold">Profile</h4>
    </div>
    <hr>
    <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input type="text" value="{{ Auth::user()->name }}" name="name" id="name"
                        class="form-control form-control-sm">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="username">Username</label>
                    <input type="text" value="{{ Auth::user()->username }}" name="username" id="username"
                        class="form-control form-control-sm">
                    @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control form-control-sm">
                </div>
                <div class="mb-2">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2 text-lg-end">
                    <h5>Current Photo</h5>
                    <img class="rounded-circle" style="object-fit: cover;"
                        src="{{ Storage::url(Auth::user()->photo) }}" height="150px" width="150px" alt="">
                </div>
            </div>
        </div>
        <hr>
        <div class="text-end">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
@endsection
