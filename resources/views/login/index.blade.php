@extends('layouts.main')

@section('container')

@if (session()->has('success'))
    <script>
      alert("{{ session('success') }}");
    </script>
@endif

@if (session()->has('loginError'))
    <script>
      alert("{{ session('loginError') }}");
    </script>
@endif

<div class="container">
  <div class="login">
      <form action="/login" method="POST">
          <h1>Login</h1>
          <hr>
          <p>Successful projects begin with good planning</p>
          @csrf
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <button type="submit">Login</button>
          <p>
              <a href="#">Forgot Password</a>    
          </p>
      </form>
  </div>
  <div class="right">
      <img src="/img/connected.png" alt="logo">
  </div>
</div>

{{-- <div class="row justify-content-center">
    <div class="col-lg-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-1">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
            </form>
        </main>
    </div>
</div> --}}

@endsection