@extends('layout.admin')
@section('title', 'Project')
@section('projects', 'active')

@section('content')
    <div class="header">
        <h4 class="fw-bold">Edit Project</h4>
    </div>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input type="text" value="{{ $project->name }}" name="name" id="name"
                        class="form-control form-control-sm">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="category">Category</label>
                    <input type="text" value="{{ $project->category }}" name="category" id="category"
                        class="form-control form-control-sm">
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control form-control-sm">{{ $project->description }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">

                <div class="mb-2">
                    <label for="start_date">Start</label>
                    <input type="date" value="{{ $project->start_date }}" name="start_date" id="start_date"
                        class="form-control form-control-sm">
                    @error('start_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="finish_date">Finish</label>
                    <input type="date" value="{{ $project->finish_date }}" name="finish_date" id="finish_date"
                        class="form-control form-control-sm">
                    @error('finish_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- 
                <div class="mb-2 text-lg-end">
                    <h5>Current Thumbnail</h5>
                    <img style="object-fit: cover;"
                        src="{{ Storage::url($project->thumbnail) }}" height="150px" width="150px" alt="">
                </div> --}}
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

            <div class="row w-100 gy-2 mt-2">
                @foreach ($project->images as $item)
                    <div class=" col-md-3">
                        <div class="form-check input-img project-img">
                            <input class="form-check-input" type="checkbox" name="removed_img[]"
                                value="{{ $item->id }}" id="{{ $loop->iteration }}">
                            <label class="form-check-label" for="{{ $loop->iteration }}">
                                @if ($item->type == 'Image')
                                    <img src="{{ Storage::url($item->file) }}"
                                        class="w-100 rounded-2 border border-primary border-2" alt="...">
                                @else
                                    <video src="{{ Storage::url($item->file) }}"
                                        class="w-100 rounded-2 border border-primary border-2"></video>
                                @endif
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>

            @error('foto')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <button id="remove-btn" type="button" class="btn btn-sm btn-danger mt-2">Remove</button>
        </div>
        <hr>
        <div class="text-end">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>

    </form>

@endsection
