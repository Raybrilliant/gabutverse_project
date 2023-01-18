@extends('layouts/admin_layouts') 
@section('content') 
        <!-- Main -->
    <section class="container" id="dashboard" >
      <div class="row py-4">
        <div class="col-md-6">
          <h2>Configuration</h2>
          <hr>
          <p>Gunakan API dari TMDB untuk mendapatkan informasi mengenai movies / series yang akan ditambahkan secara otomatis</p>
          <label for="tokenApi" class="form-label">Token API</label>
          <div class="input-group">
            <input type="text" class="form-control" id="tokenApi" name="tokenApi" placeholder="8708b81c06bd4ed054aaatyrae169623ca" value="{{ $info->tokenApi ?? null }}">
            <button class="btn btn-primary" id="submitToken" type="submit">Submit</button>
          </div>
          <h2 class="mt-4">Add Movies</h2>
          <hr>
          <p>Masukan ID Movies yang akan ditambahkan dari IMDB, Setelah memasukan ID secara otomatis web akan mengenerate data movies tersebut</p>
          <label for="idMovie" class="form-label">Movie ID</label>
          <div class="input-group">
            <input type="text" class="form-control" id="idMovie" name="idMovie" placeholder="tt11564570">
            <button class="btn btn-primary" type="button" id="submitID">Submit</button>
          </div>
          <form action="/admin/store" method="post">
            @csrf
            <div class="row g-3">
              <div class="col-6">
                <label for="movieName" class="form-label mt-3">Movie Name</label>
                <input type="text" class="form-control" id="movieName" name="movieName" placeholder="All Quiet on The Western Front" required>
              </div>
              <div class="col-6">
                <label for="originalName" class="form-label mt-3">Original Title</label>
                <input type="text" class="form-control" id="originalName" name="originalName" placeholder="Im Westen nichts Neues" required>
              </div>
              <div class="col-6">
                <label for="movieYear" class="form-label mt-3">Movie Year</label>
                <input type="text" class="form-control" id="movieYear" name="movieYear" placeholder="2022-10-07" required>
              </div>
              <div class="col-6">
                <label for="rating" class="form-label mt-3">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" placeholder="7.768" required>
              </div>
            </div>
            <label for="popularity" class="form-label mt-3">Popularity</label>
            <input type="text" class="form-control" id="popularity" name="popularity" placeholder="437.813" required>
            <label for="genres" class="form-label mt-3">Genres</label>
            <input type="text" class="form-control" id="genres" name="genres" placeholder="Action, War" required>
            <label for="language" class="form-label mt-3">Language</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="de" required>
            <label for="overview" class="form-label mt-3">Overview</label>
            <textarea class="form-control" rows="3" id="overview" name="overview" placeholder="Paul Baumer and his friends Albert and Muller, egged on by romantic dreams of heroism, voluntarily enlist in the German army. Full of excitement and patriotic fervour, the boys enthusiastically march into a war they believe in. But once on the Western Front, they discover the soul-destroying horror of World War I."></textarea>
            <label for="posterPath" class="form-label mt-3">Poster Path</label>
            <input type="text" class="form-control" id="posterPath" name="posterPath" placeholder="/hYqOjJ7Gh1fbqXrxlIao1g8ZehF.jpg" required>
            <label for="backdropPath" class="form-label mt-3">Backdrop Path</label>
            <input type="text" class="form-control" id="backdropPath" name="backdropPath" placeholder="/mqsPyyeDCBAghXyjbw4TfEYwljw.jpg" required>
            <label for="trailer" class="form-label mt-3">Trailer</label>
            <input type="text" class="form-control" id="trailer" name="trailer" placeholder="qFqgmaO15x4" required>
            <label for="watchLink" class="form-label mt-3">Watch Link</label>
            <input type="text" class="form-control" id="watchLink" name="watchLink" placeholder="YqOjJ7Gh1fbqXrxlI" required>
            {{-- <div class="row g-3">
              <div class="col-6">
              </div>
              <div class="col-6">
                <label for="downloadLink" class="form-label mt-3">Download Link</label>
                <input type="text" class="form-control" id="downloadLink" name="downloadLink" placeholder="https://short.io" required>
              </div>
            </div> --}}
            <div class="d-grid my-3">
              <button type="submit" class="btn btn-primary">Add Movies</button>
            </div>
          </form>
        </div>
        {{-- Right Section --}}
        <div class="col-md-6">
          <h2>Banners</h2>
          <hr>
          <table class="table table-hover" id="bannerMovie" >
            <thead>
              <tr>
                <th>Movie Name</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if ($banner)    
              @foreach ($banner as $item)
              <tr>
                <td>{{ $item->movieName}}</td>
                <td>{{ $item->slug }}</td>
                <td><a href="/admin/delete/banner/{{ $item->id }}"><span class="badge text-bg-danger">Delete</span></a></td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
          <h2 class="mt-4">Most Viewed</h2>
          <hr>
          <table class="table table-hover" id="mostViewed" >
            <thead>
              <tr>
                <th>Movie Name</th>
                <th>Slug</th>
                <th>Genres</th>
                <th>Views</th>
              </tr>
            </thead>
            <tbody>
              @if ($data)    
              @foreach ($data as $item)
              <tr>
                <td>{{ $item->movieName}}</td>
                <td>{{ $item->slug }}</td>
                <td>
                  @php
                  $genres = explode(',',$item->genres);
                  foreach ($genres as $genre) {
                   echo "<span class='badge text-bg-primary me-2'>$genre</span>";    
                  };
                  @endphp
                </td>
                <td>{{ $item->count }}</a></td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
          <h2 class="mt-4">All Movies</h2>
          <hr>
          <table class="table table-hover" id="allMovies" >
            <thead>
              <tr>
                <th>Movie Name</th>
                <th>Slug</th>
                <th>Genres</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if ($data)    
              @foreach ($data as $item)
              <tr>
                <td>{{ $item->movieName}}</td>
                <td>{{ $item->slug }}</td>
                <td>
                  @php
                  $genres = explode(',',$item->genres);
                  foreach ($genres as $genre) {
                  echo "<span class='badge text-bg-primary me-2'>$genre</span>";    
                  };
                  @endphp
                </td>
                <td><a href="/admin/add/banner/{{ $item->id }}"><span class="badge text-bg-dark">Add Banner</span></a> <a href="/admin/delete/movie/{{ $item->id }}"><span class="badge text-bg-danger">Delete</span></td></a>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
          <h2 class="mt-4">Request</h2>
          <hr>
          <table class="table table-hover" id="allRequest" >
            <thead>
              <tr>
                <th>Movie Name</th>
                <th>Release Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>All Quiet on the Western Front</td>
                <td>2022</td>
                <td><a href="#"><span class="badge text-bg-success">Done</span></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endsection