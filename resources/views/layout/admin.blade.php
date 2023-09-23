@extends('layout.app')

<div class="wrapper min-vh-100">
    <div id="sidebar" class="sidebar bg-white offcanvas-lg offcanvas-start d-flex position-fixed h-100 flex-column flex-shrink-0 p-3 border-end "
        style="width: 260px;" bis_skin_checked="1">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4 fw-bold text-primary">Untitled UI</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link mb-1 link-dark @yield('dashboard')" aria-current="page">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('profile')}}" class="nav-link mb-1 link-dark @yield('profile')">
                    Profile
                </a>
            </li>
            <li>
                <a href="{{route('profiledtl')}}" class="nav-link mb-1 link-dark @yield('profiledtl')">
                    Profile Detail
                </a>
            </li>
            <li>
                <a href="{{route('projects')}}" class="nav-link mb-1 link-dark @yield('projects')">
                    Projects
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown" bis_skin_checked="1">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>{{ Auth::user()->name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
            </ul>
        </div>
    </div>
    <div class="app">
        <nav class="navbar border-bottom d-lg-none navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-primary" href="#">Untitled UI</a>
                <div class="ms-auto">
                    <button type="button" class="btn btn-sm" data-bs-toggle="offcanvas"
                        data-bs-target="#sidebar">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" class="ionicon" viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" d="M96 256h320M96 176h320M96 336h320" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </nav>
        <div class="content p-3">
            @yield('content')
        </div>
    </div>

</div>
