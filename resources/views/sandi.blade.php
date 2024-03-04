<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpMe-Ganti Sandi</title>
	<link rel="stylesheet" type="text/css" href={{ asset("Style/Akun/sandi-style.css") }}>
</head>
<body>
	<div class="container">
		<div class="back">
            <a href="/akun"><img src="{{ asset("Image/back.png") }}" alt=""></a>
        </div>
        @if(session('success'))
        <div class="alertsuccess alert-success">
            {{ session('success') }}
        </div>
    @endif
    <br>
    <br>
        <div class="nama">
            <p>{{ $akuns->name }}. EqualizeMe</p>
        </div>
        <div class="judul">
            <h2>Ubah Kata Sandi</h2>
        </div>
        <div class="isi">
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aperiam soluta vero eaque laboriosam necessitatibus incidunt veritatis eos, sed itaque.</p>
            <form method="post" action="/sandi/{{ $akuns->id }}">
            @csrf
                <label for="current-password">Kata Sandi Lama</label>
                <input type="password" id="current-password" placeholder="Kata Sandi Lama" 
                name="current-password" value="{{ old('current-password')}}" required>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                    <br><br>
                </div>
            @endif
                <label for="new-password">Sandi Baru</label>
                <input type="password" id="new-password" placeholder="Kata Sandi Baru" 
                name="new-password" value="{{ old('new-password') }}" class="form-control @error('new-password') is-invalid @enderror" required>
                @error('new-password')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror

                <label for="confirm-password">Tulis Ulang Kata Sandi Baru</label>
                <input type="password" id="confirm-password" placeholder="Tulis Ulang Kata Sandi Baru" 
                name="confirm-password" value="{{ old('confirm-password') }}" required>
                
                @if(session('different'))
                <div class="alert alert-danger">
                    {{ session('different') }}
                </div>
            @endif
                <!-- <p><a href="#">Lupa Kata Sandi?</a></p> -->
                <div class="buttonsubmit">
                    <button type="submit">Ubah Kata Sandi</button>
                </div>
                
            </form>
        </div>
	</div>
</body>
</html>