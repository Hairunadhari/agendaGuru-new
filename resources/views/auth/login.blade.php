<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <div class="card">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-body">
        <form method="post" action="/proseslogin">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <div class="form-floating">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name..."  >
              <label for="name">Username</label>
              @error('name')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" >
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <p href="">belum punya akun?<a href="/register">register disini</a></p>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
    </div>
  </div>
</main>


    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
