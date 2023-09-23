@extends('layout.admin')
@section('title', 'Profile Detail')
@section('profiledtl', 'active')

@section('content')
    <div class="header">
        <h4 class="fw-bold">Profile Detail</h4>
    </div>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="location">Location</label>
                    <input type="text" value="{{Auth::user()->detail->location}}" name="location" id="location" class="form-control">
                    @error('location')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="website_url">Website URL</label>
                    <input type="text" value="{{Auth::user()->detail->website_url}}" name="website_url" id="website_url" class="form-control">
                    @error('website_url')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="website_domain">Website Domain</label>
                    <input type="text" name="website_domain" value="{{Auth::user()->detail->website_domain}}" id="website_domain" class="form-control">
                    @error('website_domain')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="instagram_url">Instagram URL</label>
                    <input type="text" name="instagram_url" value="{{Auth::user()->detail->instagram_url}}" id="instagram_url" class="form-control">
                    @error('instagram_url')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="instagram_id">Instagram ID</label>
                    <input type="text" name="instagram_id" value="{{Auth::user()->detail->instagram_id}}" id="instagram_id" class="form-control">
                    @error('instagram_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email_url">Email URL</label>
                    <input type="text" name="email_url" value="{{Auth::user()->detail->email_url}}" id="email_url" class="form-control">
                    @error('email_url')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email_address">Email Address</label>
                    <input type="text" name="email_address" value="{{Auth::user()->detail->email_address}}" id="email_address" class="form-control">
                    @error('email_address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="short_description">Description</label>
                    <textarea name="short_description" id="short_description" class="form-control" cols="30" rows="10">{{Auth::user()->detail->short_description}}</textarea>
                    @error('short_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="about">About</label>
                    <textarea name="about" id="about" class="form-control" cols="30" rows="10">{{Auth::user()->detail->about}}</textarea>
                    @error('about')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <hr>
        <div class="text-end">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
@endsection
