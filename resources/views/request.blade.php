@extends('layouts/main_layouts')
@section('content')
    <!-- main -->
      <main class="container">
        <div class="card p-4 d-flex my-5 mx-auto" style="width: 32em;">
            <h2 class="fw-semibold text-center">Request a Movie</h2>
            <hr>
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="movieName" placeholder="All Quiet on The Westen Front" required>
                    <label for="movieName">Movie Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="releaseDate" name="releaseDate" placeholder="2022" required>
                    <label for="releaseDate">Release Date</label>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-primary">Request</button>
                  </div>
            </form>
        </div>
      </main>
@endsection