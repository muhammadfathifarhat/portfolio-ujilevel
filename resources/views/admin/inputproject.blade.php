@extends('layout.admin')
@section('title', 'Project')
@section('projects', 'active')

@section('content')
    <div class="header">
        <h4 class="fw-bold">Project</h4>
    </div>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" class="form-control form-control-sm">
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control form-control-sm"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="start_date">Start</label>
                    <input type="date" name="start_date" id="start_date" class="form-control form-control-sm">
                    @error('start_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="finish_date">Finish</label>
                    <input type="date" name="finish_date" id="finish_date" class="form-control form-control-sm">
                    @error('finish_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        <div class="mb-2" id="input-foto">
            <label for="foto">Foto & Video</label>
            <button type="button" id="add-photo" class="btn btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16" viewBox="0 0 512 512">
                    <title>Add</title>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M256 112v288M400 256H112" />
                </svg>
            </button>
            <div class="input-img">
                <input type="file" name="foto[]" accept=".jpeg, .jpg, .png, ." id="foto"
                    class="form-control form-control-sm mt-2">

            </div>

            @error('foto.*')
                <p class="text-danger">The Foto & Video field must be a file of type: image/jpeg, image/png, image/gif, video/mp4, video/avi.</p>
            @enderror
        </div>
        <hr>
        <div class="text-end">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
@endsection
