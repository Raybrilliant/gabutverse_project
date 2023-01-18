@extends('layouts/main_layouts')
@section('content')
    <!-- main -->
      <main class="container">
        <section class="py-4" id="home">
            <h1><span class="fw-semibold">Recomended</span> To You</h1>
            <!-- carousel -->
            <div class="owl-carousel owl-theme py-3">
                @if ($banner)
                @foreach ($banner as $item)
                <div class="item">
                    <div class="card text-bg-dark rounded-3 overflow-hidden">
                        <img src="https://image.tmdb.org/t/p/original{{ $item->backdropPath }}" class="card-img position-relative object-fit-cover" alt="thumb">
                        <div class="card-img-overlay">
                            <a href="/overview/{{ $item->slug }}"><button type="button" class="btn btn-primary rounded-pill position-absolute bottom-10 end-5"><i class="bi bi-play-fill"></i> Watch Trailer</button></a>
                        </div>
                      </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        <section class="py-4" id="mostView">
            <div class="d-flex">
                <h3 class="fw-semibold">Most Viewed</h3>
                <div class="ms-auto">
                    <a href="#" class="fw-semibold">View All</a>
                </div>
            </div>
            <div class="d-flex overflow-scroll">
                @if ($data)
                @foreach ($data as $item)
                <a href="/overview/{{ $item->slug }}" class="me-4 mt-2 text-decoration-none text-dark">
                    <div class="poster">
                        <img src="https://image.tmdb.org/t/p/w500{{ $item->posterPath }}" class="card-img rounded-4" alt="thumbnail">
                        <h5 class="my-2 fw-semibold" id="title">{{ $item->movieName }}</h5>
                        <div class="d-flex">
                            <p class="opacity-50 fw-semibold">{{ str_replace(",", " / ", $item->genres)}}</p>
                            <p class="ms-auto opacity-50"><i class="bi bi-star-fill"></i> {{ $item->rating }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </section>
        <section class="py-4" id="newRelease">
            <div class="d-flex">
                <h3 class="fw-semibold">New Release</h3>
                <div class="ms-auto">
                    <a href="#" class="fw-semibold">View All</a>
                </div>
            </div>
            <div class="d-flex overflow-scroll">
                @if ($data)
                @foreach ($data as $item)
                <a href="/overview/{{ $item->slug }}" class="me-4 mt-2 text-decoration-none text-dark">
                    <div class="poster">
                        <img src="https://image.tmdb.org/t/p/w500{{ $item->posterPath }}" class="card-img rounded-4" alt="thumbnail">
                        <h5 class="my-2 fw-semibold" id="title">{{ $item->movieName }}</h5>
                        <div class="d-flex">
                            <p class="opacity-50 fw-semibold">{{ str_replace(",", " / ", $item->genres)}}</p>
                            <p class="ms-auto opacity-50"><i class="bi bi-star-fill"></i> {{ $item->rating }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </section>
        <section class="py-4" id="allMovies">
            <h3 class="fw-semibold">Movies</h3>
            <div class="d-flex flex-wrap justify-content-between align-self-center">
                @if ($data)
                @foreach ($data as $item)
                <a href="/overview/{{ $item->slug }}" class="me-4 mt-2 text-decoration-none text-dark">
                    <div class="poster">
                        <img src="https://image.tmdb.org/t/p/w500{{ $item->posterPath }}" class="card-img rounded-4" alt="thumbnail">
                        <h5 class="my-2 fw-semibold" id="title">{{ $item->movieName }}</h5>
                        <div class="d-flex">
                            <p class="opacity-50 fw-semibold">{{ str_replace(",", " / ", $item->genres)}}</p>
                            <p class="ms-auto opacity-50"><i class="bi bi-star-fill"></i> {{ $item->rating }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </section>
      </main>
 @endsection