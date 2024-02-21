<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpMe-Discussion</title>
    <link rel="stylesheet" href={{ asset("Style/Helpme/helpme2.css") }}>

     <!-- bootstrap -->
     <link href="../../Style/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>
    <body>
    <div class="back">
        <div class="buttonback">
            <a href="/helpme">
                <img src="{{ asset('Image/back.png') }}" alt="tombol_back">
            </a>
        </div>        
    </div>

    <div class="judul">
        <!-- <p>Percakapan saat berada di taksi online</p> -->
        <p>{{$dialog->judul}}</p>
    </div>

    <hr class="hr_class">

    <div class="containerDialog">
        <div class="judulDialog">
            <p>Dialog</p>
        </div>
        <article>
        <div class="isiDialog">
            <p>{!! $dialog->isi !!}</p>
        </div>
        </article>
    </div>

    <div class="playbutton" id="play-button" >
        <img src="{{ asset('Image/playbutton.png') }}" alt="PLAYBUTTON">
        @foreach ($lokasi as $path)
        <audio id="audio-element-{{ $loop->index }}" src="{{$path}}"></audio>
        @endforeach
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-primary text-white fixed-bottom">
        <ul class="navbar-nav nav-justified w-100 ">
            <li class="nav-item">
                <a href="../../HTML/Project-HTML/Beranda.html" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-house" viewBox="0 0 16 16" alt="Beranda">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                    </svg>
                    <h6>Beranda</h6>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-newspaper" viewBox="0 0 16 16" alt="Berita">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                        <path
                            d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                    </svg>
                    <h6>Berita</h6>
                </a>
            </li>
            <li class="nav-item" style="display: flex; align-items: start; ">
                <div class="nav-help">
                    <a href="#" class="nav-link" style=" padding-bottom:0;">
                        <div class="nav-helpme" style=" width: 100%; height: 100%; ">
                            <img src="../../Image/helpme.png" width="70" height="40" alt="HelpMe"
                                style="margin-top: 1%;">
                        </div>
                    </a>

                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-book" viewBox="0 0 16 16" alt="Edukasi">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg>
                    <h6>Edukasi</h6>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-exclamation-octagon" viewBox="0 0 16 16" alt="Pengaduan">
                        <path
                            d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" />
                        <path
                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    <h6>Pengaduan</h6>
                </a>
            </li>
        </ul>
    </nav>

    <script type="text/javascript" src="/JS/helpme.js"></script>
    <script type="text/javascript" src="/JS/Template/scrolltopbtn.js"></script>
</body>
</html>