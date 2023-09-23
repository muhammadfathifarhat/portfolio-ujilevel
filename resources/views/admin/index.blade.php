@extends('layout.admin')
@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')
    <div class="header">
        <h4 class="fw-bold">Dashboard</h4>
    </div>
    <hr>
    <div class="greetings d-flex align-items-center">
        <img class="rounded-circle me-2" src="{{ Storage::url(Auth::user()->photo) }}" width="32px" alt="">
        <h6 class="fw-medium m-0">Selamat Datang, {{ Auth::user()->name }}</h6>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="m-0 fw-bold">Your Profile</h5>
            <hr>
            <div class="row gy-4">
                <div class="col-md-3">
                    <img class="rounded-2 w-100" src="{{ Storage::url(Auth::user()->photo) }}" alt="">
                </div>
                <div class="col-md-9">
                    <div class="mb-2">
                        <h6 class="fw-bold">Name</h6>
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div class="mb-2">
                        <h6 class="fw-bold">Description</h6>
                        <p>{{ Auth::user()->detail->short_description }}</p>
                    </div>
                    <div class="mb-2">
                        <h6 class="fw-bold">About Me</h6>
                        <p>{{ Auth::user()->detail->about }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-md-3">
                    <h6 class="fw-bold">Location</h6>
                    <a class="text-primary">{{ Auth::user()->detail->location }}</a>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Website</h6>
                    <a target="_blank" href="{{ Auth::user()->detail->website_url }}"
                        class="text-primary">{{ Auth::user()->detail->website_domain }}</a>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Instagram</h6>
                    <a target="_blank" href="{{ Auth::user()->detail->instagram_url }}"
                        class="text-primary">{{ '@' . Auth::user()->detail->instagram_id }}</a>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Email</h6>
                    <a href="{{ Auth::user()->detail->email_url }}" class="text-primary">{{ Auth::user()->detail->email_address }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection
