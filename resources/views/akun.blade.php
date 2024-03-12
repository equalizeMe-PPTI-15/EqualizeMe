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
                    <div class="iconImageAkun">
                        <img src="../../Image/pencilIconAkun.png" alt="">
                    </div>
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
                            // alert('hai');
                            imageUrl = "{{ asset('storage/'. $akuns->picture) }}";
                        @else
                            imageUrl = "../../Image/{{ $akuns->picture }}";
                        @endif
                        
                        var existingImage = imageAkunContainer.getElementsByTagName('img')[0];
                        existingImage.src = imageUrl;
                    </script>

                    <script>
                        // Javascript supaya fotonya lgsg berubah sebelum dipencet simpan
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
                    <div class="w-100">
                        <label for="fname">Nama Lengkap</label>
                        <input type="text" id="fname" name="fname" value="{{ $akuns->name }}" class="form-control" disabled>
                        
                        <br>
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" value="{{ $akuns->nik }}" class="form-control" disabled>

                        <br>
                        <label for="notelp" class="label-form">No. Telp
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image" class='notelp'>
                        </label>
                        <input autocomplete="off" type="text" id="notelp" name="notelp" value="{{ $akuns->phoneNumber }}" placeholder="08XXXXXXXXXXX" class="form-control @error('notelp') is-invalid @enderror" disabled>
                        {{-- <p id="errorMsgNoTelp" style="color: red;"></p> --}}
                        @error('notelp')
                        <div class="invalid-feedback2">
                            {{ $message }}
                        </div>
                        @enderror
                        <br>
                        <label for="alamat" class="label-form">Alamat
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image" class='alamat'>
                        </label>
                        <input  type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $akuns->address }}" disabled>
                        
                        @error('alamat')
                        <div class="invalid-feedback2">
                            {{ $message }}
                        </div>
                        @enderror
                        
                        <br>
                        <label for="email" class="label-form">Email
                            <img src="../../Image/edit_pencil_icon_143022.png" alt="image" class='email' >
                        </label>
                        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $akuns->email }}" placeholder="@gmail.com" disabled>
                        {{-- <p id="errorMsgEmail" style="color: red;"></p> --}}
                        @error('email')
                        <div class="invalid-feedback2">
                            {{ $message }}
                        </div>
                        @enderror
                        {{-- <br> --}}
                        {{-- <div class="ubah-pass">
                        <a href="/sandi/{{ $akuns->id }}">Ubah Password</a>
                        </div> --}}
                        <br>
                        {{-- <button id="saveButton" type="submit">Simpan</button> --}}
                        <div class="button-simpan">
                            <!-- kalau ga bisa, apus disablednya dan apus comment ini -->
                            <button type="submit" id="simpan" disabled>Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        const submitButton = document.getElementById("simpan");
        const input = document.querySelectorAll('input');
        input.forEach((input) => {
            input.addEventListener('input', () => {
                if (input.value === '') {
                    submitButton.disabled = true;
                } else {
                    submitButton.disabled = false;
                }
            });
        });
    </script>

    <script>
        const submitButton2 = document.getElementById("simpan");
        const input2 = document.getElementById("notelp");
        const input3 = document.getElementById("email");
        const input4 = document.getElementById("alamat");
        input2.addEventListener("input", () => {
            if (input2.value === '' || input3.value === '' || input4.value === '') {
                submitButton2.disabled = true;
            } else {
                submitButton2.disabled = false;
            }
        });
        input3.addEventListener("input", () => {
            if (input2.value === '' || input3.value === '' || input4.value === '') {
                submitButton2.disabled = true;
            } else {
                submitButton2.disabled = false;
            }
        });
        input4.addEventListener("input", () => {
            if (input2.value === '' || input3.value === '' || input4.value === '') {
                submitButton2.disabled = true;
            } else {
                submitButton2.disabled = false;
            }
        });
    </script>

    <script>
        // Get the input element
        var notelp = document.getElementById('notelp');
        notelp.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length > 13) {
                this.value = this.value.slice(0, 13);
            }
        });
        // var errorMsgNoTelp = document.getElementById("errorMsgNoTelp");
        // var buttonn = document.getElementById("saveButton");
        // var minLength = 11;
        
        // var email = document.getElementById('email');
        // email.addEventListener('input', function () {
        //     this.value = this.value.replace(/[^a-zA-Z0-9@.]/g, '');
        // });

        // var errorMsgEmail = document.getElementById("errorMsgEmail");

        // var password = document.getElementById('password');
        // password.addEventListener('input', function () {
        //     this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
        //     if (this.value.length > 32) {
        //         this.value = this.value.slice(0, 32);
        //     }
        // });
        
        // buttonn.addEventListener("click", function() {
        //     if (!notelp.value.startsWith('08')){
        //         errorMsgNoTelp.textContent = "Phone number must starts with 08";
        //         event.preventDefault(); //disable form submission
        //     } else
        //     if (notelp.value.length < minLength) {
        //         errorMsgNoTelp.textContent = "Minimum length is " + minLength + " characters";
        //         event.preventDefault(); //disable form submission
        //     } else {
        //         errorMsgNoTelp.textContent = "";
        //     }

        //     if(!email.value.includes('@gmail.com')){
        //         errorMsgEmail.textContent = "Input must contain @gmail.com";
        //         event.preventDefault(); //disable form submission
        //     }else{
        //         errorMsgEmail.textContent = "";
        //     }
        // });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        // $("input").blur(function () {
        //     $(this).prop("enabled", false);
        // });
        
    
        $(document).ready(function () {

            // $(".label-form img").click(function () {
            //     let name = $(this).parent().attr('for');
            //     $(`input[name=${name}]`).removeAttr('disabled');
            //     $(`input[name=${name}]`).focus();
            // });
            $(".label-form img.email").click(function () {
                $(`input[name='email']`).removeAttr('disabled');
                $(`input[name='alamat']`).attr('disabled', 'disabled');
                $(`input[name='notelp']`).attr('disabled', 'disabled');
            });
            $(".label-form img.alamat").click(function () {
                $(`input[name='alamat']`).removeAttr('disabled');
                $(`input[name='email']`).attr('disabled', 'disabled');
                $(`input[name='notelp']`).attr('disabled', 'disabled');
            });
            $(".label-form img.notelp").click(function () {
                $(`input[name='notelp']`).removeAttr('disabled');
                $(`input[name='alamat']`).attr('disabled', 'disabled');
                $(`input[name='email']`).attr('disabled', 'disabled');
            });            

            // $(".label-form img").dblclick(function () {
            //     let name = $(this).parent().attr('for');
            //     $(`input[name=${name}]`).attr('disabled', 'disabled');
            // });
            
            
            // $("input").blur(function () {
            //     $(this).prop('disabled', false);
            // });

            $("input").keypress(function (e) {
                if (e.which === 13) {
                    $("input").attr('disabled', 'disabled');
                }
            });
        });
    </script>
</body>

</html>