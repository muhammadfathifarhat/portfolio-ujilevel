@extends('layout.app')
@section('title', 'Login')

@section('body')
    <div class="min-vh-100 w-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="header">
                            <h4 class="text-center fw-bold">Untitled UI</h4>
                            <hr>
                            <form action="" method="post">
                                @csrf
                                @if ($errors->has('loginError'))
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <div>
                                            {{ $errors->first('loginError') }}
                                        </div>
                                    </div>
                                    <div class="error"></div>
                                @endif
                                <div class="mb-2">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username"
                                        class="form-control form-control-sm">
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-sm">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn fw-bold w-100 btn-primary mt-5 rounded-1">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
