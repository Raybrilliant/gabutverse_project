<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
    <title>Admin | Gabutverse</title>
</head>
<body>

      <div class="container mt-5">
        <div class="d-flex card mx-auto p-4" style="width: 32em;">
          <h2 class="text-center fw-semibold">Need Login...</h2>
          <hr>
          <form action="/admin/login" method="post">
            @csrf
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="emain@example.com" required>
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <div class="d-grid my-4">
              <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
          </form>
        </div>
      </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>