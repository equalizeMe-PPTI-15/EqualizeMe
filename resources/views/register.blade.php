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

    <link rel="website icon" type="png" href="../Image/logo.jpg">
    <link rel="stylesheet" href="Style/RegisterLogin/regisnlogin.css"> 
        <title>EqualizeMe-Daftar</title>

    
</head>
<body>
    <div class="container">
        <h1>Masuk</h1>
        <form action="/register" method="post">
        @csrf
    <div class="form-group">   
    <label for="name">Nama Lengkap</label> 
    <input autocomplete="off" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" placeholder="Nama Lengkap">
        @error('name')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
          </div>
    
          
    <div class="form-group">
    
            
    <label for="nik">NIK</label> 
    <input autocomplete="off" type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik') }}" placeholder="Wajib 16 digit angka">
        @error('nik')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
          
    </div>
    
          
    <div class="form-group">
    
            
    <label for="phoneNumber">No. telp</label>
    <input autocomplete="off" type="number" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber" required value="{{ old('phoneNumber') }}" placeholder="08xxxxxxxxxxx [10 - 13 digit angka]">
        @error('phoneNumber')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
          
    </div>
          
    <div class="form-group">   
    <label for="email">Email</label> 
    <input autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}" placeholder="mengandung @">
    @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
          
    <div class="form-group">
    
            
    <label for="address">Alamat</label>
    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" required>
        {{ trim(htmlspecialchars(old('address', ''))) }}
    </textarea>




    @error('address')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-group">
    <label for="password">Sandi</label>
    <input autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Min. 5">
    @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="btn btn-primary w-100 py-2 temp-hover-signin" type="submit">Daftar</button>
        </form>
        <div class="divKata">
            <a class="kata">Sudah punya akun? </a>
            <a href="/login" class="kata-login">Masuk</a>
        </div>
        
      </div>

      <script>
        const nik = document.getElementById('nik');
        nik.addEventListener('input', function() {
            if (nik.value.length > 16) {
                nik.value = nik.value.slice(0, 16);
            }
        });
        const phoneNumber = document.getElementById('phoneNumber');
        phoneNumber.addEventListener('input', function() {
            if (phoneNumber.value.length > 13) {
                phoneNumber.value = phoneNumber.value.slice(0, 13);
            }
            if (phoneNumber.value.length === 1 && phoneNumber.value !== '0') {
                phoneNumber.value = '';
            }
            if (phoneNumber.value.length === 2 && phoneNumber.value !== '08') {
                phoneNumber.value = phoneNumber.value.slice(0, 1);
            }
        });
        
      </script>
    </body>
    </html>
