<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <div class="card">
    <div class="card-body">
        <form action="/register" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <div class="form-floating">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="name@example.com" value="{{ old('name')}}">
                <label for="name">Username</label>
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email')}}">
              <label for="email">Email</label>
              @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password')}}">
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        
            <div class="checkbox mb-3">
             
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          </form>
    </div>
  </div>
</main>


    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
