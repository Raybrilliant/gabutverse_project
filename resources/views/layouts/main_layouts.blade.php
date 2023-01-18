<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <title>Gabutverse</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">Gabutverse</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-main">
            <div class="navbar-nav mx-auto">
              <a class="nav-link" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/#mostView">Most Viewed</a>
              <a class="nav-link" href="/#newRelease">New Release</a>
              <a class="nav-link" href="/#allMovies">Movies</a>
              <a class="nav-link disabled" href="request">Request</a>
            </div>
            <div>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
        </div>
      </nav>

      @yield('content')
      
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>