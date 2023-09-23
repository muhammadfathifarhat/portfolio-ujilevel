@extends('layout.admin')
@section('title', 'Project')
@section('projects', 'active')

@section('content')
    <div class="header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="fw-bold m-0">Projects</h4>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="{{ route('inputProjects') }}" class="btn btn-sm btn-primary">Input</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Thumbnail</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Start</th>
                            <th>Finish</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->images->first()->file) }}" width="150px" alt="">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->finish_date }}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <a href="{{ route('editProject', $item->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                        </div>
                                        <form action="{{ route('deleteProject', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
