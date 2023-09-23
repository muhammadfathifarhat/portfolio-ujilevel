@extends('layout.home')
@section('title', 'Designer')


@section('content')
    <div class="banner-gradient"></div>
    <div class="container">
        <section id="profile" class="py-3">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="w-100">
                                <img src="{{ Storage::url($user->photo) }}"
                                    class="profile-img bg-white rounded-circle shadow border border-5 border-white" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="profile-detail pt-lg-5 pt-4 mt-lg-3">
                                <h4 class="fw-bold">Rumah Project</h4>
                                <p class="text-muted">{{ $user->detail->short_description  }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row gy-3 d-md-none">
            <div class="col-md-3">
                <h6 class="fw-bold">Location</h6>
                <a class="text-primary">{{ $user->detail->location }}</a>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Website</h6>
                <a target="_blank" href="{{ $user->detail->website_url }}"
                    class="text-primary">{{ $user->detail->website_domain }}</a>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Instagram</h6>
                <a target="_blank" href="{{ $user->detail->instagram_url }}"
                    class="text-primary">{{ '@' . $user->detail->instagram_id }}</a>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Email</h6>
                <a target="_blank" href="{{ $user->detail->email_url }}"
                    class="text-primary">{{ $user->detail->email_address }}</a>
            </div>
        </div>
        <hr>
        <section id="about-me">
            <div class="row gy-2">
                <div class="col-md-3">
                    <h5 class="fw-bold">About Me</h5>
                </div>
                <div class="col-md-9">
                    <p class="text-muted" style="white-space: pre-line;">{{ $user->detail->about }}</p>
                    <div class="card d-none d-md-block">
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-3">
                                    <h6 class="fw-bold">Location</h6>
                                    <a class="text-primary">{{ $user->detail->location }}</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="fw-bold">Website</h6>
                                    <a target="_blank" href="{{ $user->detail->website_url }}"
                                        class="text-primary">{{ $user->detail->website_domain }}</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="fw-bold">Instagram</h6>
                                    <a target="_blank" href="{{ $user->detail->instagram_url }}"
                                        class="text-primary">{{ '@' . $user->detail->instagram_id }}</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="fw-bold">Email</h6>
                                    <a href="{{ $user->detail->email_url }}"
                                        class="text-primary">{{ $user->detail->email_address }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="project">
            <h5 class="fw-bold">Projects</h5>
            <div class="row gy-3 mt-2">
                @foreach ($project as $item)
                    <div class="col-md-4 col-6">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="image-container overflow-hidden border border-1 rounded-1 shadow-sm">
                                    <img src="{{ Storage::url($item->images->first()->file) }}" class="" alt="">
                                </div>
                                <a href="{{route('show', $item->id)}}" class="projects text-decoration-none w-100">
                                    <div class=" d-inline-flex align-items-center mt-3 mb-0 w-100">
                                        <h6 class="fw-bold mb-0">{{ $item->name }}</h6>
                                        <svg aria-hidden="true" fill="none" height="24"
                                            shape-rendering="geometricPrecision" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M7 17L17 7"></path>
                                            <path d="M10 7h7v7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="text-muted fs-14 fw-medium">{{ $item->category }}</span>
                                    </div>
                                </a>
                                {{-- <hr class="mb-2">
                                            <div class="text-end">
                                                <button class="btn border-0 p-0 text-primary fs-14 fw-bold"
                                                    data-bs-toggle="modal" data-bs-target="#{{ $item->id }}">View
                                                    Project</button>
                                            </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
