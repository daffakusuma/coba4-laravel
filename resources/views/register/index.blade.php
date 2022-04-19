<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">
    <link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Akan Nikah</title>
  </head>
  <body>
      <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Akan Nikah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#fitur">Fitur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tema">Tema</a>
              </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#login" class="nav-link active">Login</a>
            </li>
            </ul>
          </div>
        </div>
    </nav>
  </body>
      <!-- akhir navbar -->

{{-- Register --}}
<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
      <main class="form-registration">
          <h1 class="h3 mb-3 fw-normal text-center mt-5">Registration</h1>
        <form action="/register" method="post">
        @csrf
          <div class="form-floating mt-4">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value={{ old ('name') }}>
            <label for="name">Name</label>
          </div>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value={{ old ('usernmae') }}>
            <label for="floatingInput">Username</label>
          </div>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value={{ old ('email') }}>
            <label for="email">Email address</label>
          </div>
           @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          <div class="form-floating">
           <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
           @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>
        <small class="mt-3">Already Registered? <a href="/login">Login</a></small>
      </main>
    </div>
  </div>
{{-- Akhir Register --}}