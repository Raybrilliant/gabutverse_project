@extends('layouts/main_layouts')
@section('content')

    <!-- Video -->
    <div class="card" style="height: 100vh;">
        <div class="video-background">
            <iframe src="https://www.youtube.com/embed/{{ $data->trailer }}?autoplay=1&mute=1&controls=0&playlist={{ $data->trailer }}&loop=1 " frameborder="0"></iframe>
        </div>
    </div>

    <div class="position-relative">
        <div class="background-gradient position-absolute bottom-50 start-50 translate-middle "></div>
        <main class="container position-relative" style="margin-top: -10%;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto" style="width:18em;">
                        <img src="https://image.tmdb.org/t/p/w500{{ $data->posterPath }}" alt="img-missing" class="card-img object-fit-cover rounded-4">
                        <div class="my-3 text-center">
                            <p><span class="fw-semibold">{{ $data->popularity }}</span> Popularity</p>
                            <p><span class="fw-semibold"><i class="bi bi-star-fill"></i> {{ $data->rating }}</span> Rating</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-semibold name">{{ $data->movieName }}</h1>
                    <p>Original title : {{ $data->originalName }}</p>
                    <p class="fw-semibold">Movie <i class="bi bi-circle-fill"></i> <span id="count"> {{ $data->count }}</span> Views</p>
                    <div class="d-flex">
                        <button class="btn btn-primary me-2 watch-film" data-bs-toggle="modal" data-bs-target="#movieModal"> <i class="bi bi-play-fill"></i> Watch Movie</button>
                        {{-- <form action="{{ $data->downloadLink }}" method="get">
                           <button class="btn btn-primary"> <i class="bi bi-cloud-arrow-down-fill"></i> Download Movie</button>
                        </form> --}}
                    </div>
                    <article class="py-3">
                        {{ $data->overview }}
                    </article>
                    <h4 class="fw-semibold py-4">Details</h4>
                    <div class="d-flex">
                        <p class="fw-semibold">Genres</p>
                        <p class='fw-medium ms-auto'>
                        @php
                        $genres = explode(',', $data->genres);
                        foreach ($genres as $genre) {
                        echo "<span class='badge rounded-pill text-bg-primary'>$genre</span>";    
                        };
                        @endphp   
                        </p>                     
                    </div>
                    <hr>
                    <div class="d-flex">
                        <p class="fw-semibold">Original Language</p>
                        <p class="fw-medium ms-auto">{{ $data->language }}</p>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <p class="fw-semibold">Release Date</p>
                        <p class="fw-medium ms-auto">{{ date_format(date_create($data->movieYear), "d F Y") }}</p>
                    </div>
                    <hr>
                    <!-- Related -->
                    <h4 class="fw-semibold py-4">Related Movies</h4>
                    <div class="d-flex overflow-scroll">
                        @foreach ($related_movie as $item)
                        <a href="/overview/{{ $item->slug }}"><img src="https://image.tmdb.org/t/p/w500{{ $item->posterPath }}" alt="" class="card-img poster me-2"></a>                           
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
 
<div class="modal fade" id="movieModal" tabindex="-1" aria-labelledby="movieModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <button type="button" class="btn-close ms-auto me-5" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body img-fluid">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $data->watchLink }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
@endsection