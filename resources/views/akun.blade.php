<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <!-- bootstrap -->
    <link href="../../Style/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        
        
    <link rel="stylesheet" href="../../Style/Akun/akun-style.css">

    <link rel="website icon" type="png" href="../../Image/logo.jpg">

</head>

<body>
    <div class="icon-back-container w-100">
        <div class="temp-icon">
            <a href="/home" class="icon-back">
                <i class="fa fa-arrow-left"></i>
            </a>
        </div>
    </div>

    <!-- content akun -->
    {{-- <div class="container-wrapper"
        style="box-sizing: border-box;  margin-bottom: 2vh;">
        <div class="search_wrap search_wrap_2" style="border:0.2px solid grey; border-radius: 3px;">
            <form action="/education">
                <div class="search_box">
                        <button class="btn btn_common" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    <input type="text" class="input" placeholder="Pencarian..." name="filtercari" 
                    value="{{ request('filtercari') }}">
                </div>
            </form>
        </div>
    </div> --}}
    <div class="container-akun w-100">
        <form method="post" class="dflex" action="/akun/{{ $akuns->id }}" enctype="multipart/form-data">
        @csrf 
            <div class="content-img-akun w-100">
                <label for="input-file-img" id="drop-area-img">
                    <!-- nanti di dalam input bisa ditambahin function value -->
                    <input class="form-control @error('imageAkun') is-invalid @enderror" type="file" 
                    accept="image/*" id="input-file-img" name="imageAkun" value="" hidden>

                    {{-- <img id="selected-image" src="#" alt="Selected Image"> --}}

                    @error('imageAkun')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <div id="imageAkunContainer" class="border-template">
                        <img id="selectedImageAkun" src="../../Image/{{ $akuns->picture }}" alt="Selected Image">
                    </div>

                    <script>
                        // Example JavaScript to update the image source dynamically
                        var imageAkunContainer = document.getElementById('imageAkunContainer');
                        var imageUrl;
                        
                        @if ($akuns->picture != 'akun1.png')
                            imageUrl = "{{ asset('storage/'. $akuns->picture) }}";
                        @else
                            imageUrl = "../../Image/{{ $akuns->picture }}";
                        @endif
                        
                        var existingImage = imageAkunContainer.getElementsByTagName('img')[0];
                        existingImage.src = imageUrl;
                    </script>

                    <script>
                        document.getElementById('input-file-img').addEventListener('change', function() {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('selectedImageAkun').src = e.target.result;
                            };
                            reader.readAsDataURL(this.files[0]);
                        });
                    </script>
                </label>
            </div>
            <div class="container-form">
                <div class="content-form">
                    <div>
                        <label for="fname">Nama Lengkap</label>
                        <input type="text" id="fname" name="fname" value="{{ $akuns->name }}" disabled>
                        <br>
                        <br>
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" value="{{ $akuns->nik }}" disabled>
                        <br>
                        <br>
                        <label for="notelp" class="label-form " disabled >No. Telp
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image">
                        </label>
                        <input autocomplete="off" type="text" id="notelp" name="notelp" value="{{ $akuns->phoneNumber }}" placeholder="08XXXXXXXXXXX" disabled>
                        <p id="errorMsgNoTelp" style="color: red;"></p>
                        <label for="alamat" class="label-form" disabled>Alamat
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image" >
                        </label>
                        <input type="text" id="alamat" name="alamat" value="{{ $akuns->address }}" disabled>
                        <br>
                        <br>
                        <label for="email" class="label-form" disabled>Email
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image" >
                        </label>
                        <input type="text" id="email" name="email" value="{{ $akuns->email }}" placeholder="@gmail.com" disabled>
                        <p id="errorMsgEmail" style="color: red;"></p>
                        <br>

                        <button id="saveButton" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the input element
        var notelp = document.getElementById('notelp');
        notelp.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length > 13) {
                this.value = this.value.slice(0, 13);
            }
        });
        var errorMsgNoTelp = document.getElementById("errorMsgNoTelp");
        var buttonn = document.getElementById("saveButton");
        var minLength = 11;
        
        var email = document.getElementById('email');
        email.addEventListener('input', function () {
            this.value = this.value.replace(/[^a-zA-Z0-9@.]/g, '');
        });

        var errorMsgEmail = document.getElementById("errorMsgEmail");

        var password = document.getElementById('password');
        password.addEventListener('input', function () {
            this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
            if (this.value.length > 32) {
                this.value = this.value.slice(0, 32);
            }
        });
        
        buttonn.addEventListener("click", function() {
            if (!notelp.value.startsWith('08')){
                errorMsgNoTelp.textContent = "Phone number must starts with 08";
                event.preventDefault(); //disable form submission
            } else
            if (notelp.value.length < minLength) {
                errorMsgNoTelp.textContent = "Minimum length is " + minLength + " characters";
                event.preventDefault(); //disable form submission
            } else {
                errorMsgNoTelp.textContent = "";
            }

            if(!email.value.includes('@gmail.com')){
                errorMsgEmail.textContent = "Input must contain @gmail.com";
                event.preventDefault(); //disable form submission
            }else{
                errorMsgEmail.textContent = "";
            }
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".label-form img").click(function () {
                let name = $(this).parent().attr('for');
                $(`input[name=${name}]`).removeAttr('disabled');
                $(`input[name=${name}]`).focus();
            });

            // $(".label-form img").dblclick(function () {
            //     let name = $(this).parent().attr('for');
            //     $(`input[name=${name}]`).attr('disabled', 'disabled');
            // });

            // $("input").blur(function () {
            //     $(this).attr('disabled', 'disabled');
            // });

            // $("input").keypress(function (e) {
            //     if (e.which === 13) {
            //         $("input").attr('disabled', 'disabled');
            //     }
            // });
        });
    </script>
</body>

</html>