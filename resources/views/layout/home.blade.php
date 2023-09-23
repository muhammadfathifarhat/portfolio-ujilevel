@extends('layout.app')

@section('body')
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid py-1">
            <a class="navbar-brand fw-bold" href="{{route('home')}}">Untitled UI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" class="ionicon" viewBox="0 0 512 512">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M96 256h320M96 176h320M96 336h320" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Tasks</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Reporting</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link active" href="#">Designer</a>
                    </li>
                </ul>
                <hr class="d-lg-none">
                <div class="d-flex justify-content-md-end justify-content-start">
                    <button class="btn btn-sm">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="ionicon" viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </div>
                    </button>
                    <button class="btn btn-sm">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-gear"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                        </div>
                    </button>
                    <button class="btn btn-sm">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-bell"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </div>
                    </button>
                    <div class="flex-grow-1 d-flex justify-content-end">
                        <button class="btn btn-sm ">
                            <img class="rounded-circle mini-profile" src="{{ Storage::url($user->photo) }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <hr class="mt-5">
    <section id="footer" class="px-md-5 py-2">
        <div class="container-fluid">
            <div class="row gy-3">
                <div class="col-md-6">
                    <h4 class="fw-bold">Untitled UI</h4>
                    <div class="d-flex">
                        <a href="#" class="btn py-2 btn-light border-light me-2">
                            <div class="d-flex h-100 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </div>
                        </a>

                        <a href="#" class="btn py-2 btn-light border-light me-2">
                            <div class="d-flex h-100 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                            </div>
                        </a>

                        <a href="#" class="btn py-2 btn-light border-light me-2">
                            <div class="d-flex h-100 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="fw-medium mb-2 text-muted">Product</h6>
                            <ul class=" list-unstyled">
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Overview</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Features</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Solution</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Tutorials</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Pricing</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Releases</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h6 class="fw-medium mb-2 text-muted">Company</h6>
                            <ul class=" list-unstyled">
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">About
                                        Us</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Careers</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Press</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">News</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Media
                                        Kit</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h6 class="fw-medium mb-2 text-muted">Resources</h6>
                            <ul class=" list-unstyled">
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Blog</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Newsletter</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Events</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Help Centre</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Tutorials</a></li>
                                <li class="mb-1"><a href="#"
                                        class="text-dark mb-1 fw-medium text-decoration-none">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold">Move faster with Untitled UI</h5>
                    <p>Save countless hours of design and ship great looking designs faster.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex h-100 justify-content-end align-items-end">
                        <p class="text-muted">&copy; Untitled UI. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
