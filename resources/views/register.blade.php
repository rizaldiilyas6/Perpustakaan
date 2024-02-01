<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
<div class="container login">


<h1 class="mt-5 text-center">Register</h1>
<div class="container register">
      <!-- {{-- Register Petugas --}} -->
      <form method="POST" action="" class="container mt-5">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama lengkap</label>
          <input type="text" class="form-control" name="namalengkap" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputall1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="rememberMe" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Register</button></center>
      </form>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


























