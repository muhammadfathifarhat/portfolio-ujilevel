@extends('layout.home')
@section('title', 'Designer')


@section('content')
    <div class="container py-3">

        <div class="row">
            <div class="col-md-6">

                <section id="preview">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner border rounded-3 border-3 border-primary">
                            @foreach ($project->images as $item)
                                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                    @if ($item->type == 'Image')
                                        <div class="image-container">

                                            <img src="{{ Storage::url($item->file) }}" class="d-block w-100" alt="...">
                                        </div>
                                    @else
                                        <div class="image-container">

                                            <video src="{{ Storage::url($item->file) }}" controls
                                                class="d-block w-100"></video>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>


                        <div class="carousel-indicators">
                            <div class="row overflow-x-auto flex-nowrap w-100">
                                @foreach ($project->images as $item)
                                    <div class="col-3 p-0 me-2">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $loop->iteration - 1 }}"
                                            class="{{ $loop->iteration == 1 ? 'active' : '' }} w-100" aria-current="true"
                                            aria-label="{{ $loop->iteration }}">
                                            @if ($item->type == 'Image')
                                                <div class="image-container border border-primary border-2 rounded-2">
                                                    <img src="{{ Storage::url($item->file) }}" class="d-block w-100"
                                                    alt="...">
                                                </div>
                                            @else
                                                <div class="image-container border border-primary border-2 rounded-2">

                                                    <video src="{{ Storage::url($item->file) }}"
                                                        class="d-block w-100"></video>
                                                </div>
                                            @endif
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <div class=" pt-5 pt-md-0">
                    <section id="title">
                        <h6>{{ $project->category }}</h6>
                        <h3 class="fw-bold">{{ $project->name }}</h3>
                    </section>
                    <section id="description">
                        {{ $project->description }}
                    </section>
                </div>
            </div>
        </div>


    </div>

@endsection
