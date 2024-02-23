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
            <img src="{{ asset("Image/back.png") }}" alt="">
        </div>
        <div class="nama">
            <p>user. Helpme</p>
        </div>
        <div class="judul">
            <h2>Ubah Kata Sandi</h2>
        </div>
        <div class="isi">
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aperiam soluta vero eaque laboriosam necessitatibus incidunt veritatis eos, sed itaque.</p>
            <form action="#">
                <label for="current-password">Kata Sandi Lama</label>
                <input type="password" id="current-password" placeholder="Kata Sandi Lama" name="current-password" required>
                <label for="new-password">Sandi Baru</label>
                <input type="password" id="new-password" placeholder="Kata Sandi Baru" name="new-password" required>
                <label for="confirm-password">Tulis Ulang Kata Sandi Baru</label>
                <input type="password" id="confirm-password" placeholder="Tulis Ulang Kata Sandi Baru" name="confirm-password" required>
                <!-- <p><a href="#">Lupa Kata Sandi?</a></p> -->
                <div class="buttonsubmit">
                    <button type="submit">Ubah Kata Sandi</button>
                </div>
                
            </form>
        </div>
	</div>
</body>
</html>