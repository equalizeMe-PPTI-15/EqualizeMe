<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="Style/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        * {
            font-family: 'Quicksand', 'Amaranth', cursive, Arial, sans-serif;
        }
        
    </style>

    <link rel="website icon" type="png" href="Image/logo.jpg">
    <link rel="stylesheet" href="Style/RegisterLogin/regisnlogin.css"> 
        <title>EqualizeMe-Masuk</title>

</head>
<body>
    {{-- @if(Auth::check())
    @php
    $redirectTo = route('home');
    @endphp
    <script>window.location = "{{ $redirectTo }}";</script>
    @endif --}}

<div class="container">
    <h1>Masuk</h1>
    <form action="/login" method="post">
    @csrf
    
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="form-group">

        
    <label for="nik">NIK</label> 
    <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" autofocus required value="{{ old('nik') }}" placeholder="Wajib 16 digit angka">
        @error('nik')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror      
    </div>
          
    <div class="form-group">
    <label for="password">Sandi</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Min. 5">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
    </div>
    <div class="buttonsubmit">
        <button type="submit" class="btn btn-primary btn-temp">Masuk</button>
    </div>  
</form>
    <div class="divKata">
        <a class="kata">Tidak punya akun? </a>
        <a href="/register" class="kata-login">Daftar</a>
    </div>
    
  </div>
  <script>
    document.getElementById('nik').addEventListener('input', function (e) {
        if (this.value.length > 16) {
            this.value = this.value.slice(0, 16); 
        }
    });
    // create validation of nik input without e and -
    document.getElementById('nik').addEventListener('keypress', function (e) {
        if (e.key === 'e' || e.key === '-') {
            e.preventDefault();
        }
    });


  </script>
</body>
</html>