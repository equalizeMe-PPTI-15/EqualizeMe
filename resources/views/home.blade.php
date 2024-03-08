<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

    <!-- bootstrap -->
    <link href="../../Style/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="../../Style/Beranda/Beranda_style.css">


    <link href="/your_path_to_version_6_files/css/all.css" rel="stylesheet">
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="../../Style/Template/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="../../Style/Template/carousell.css"> -->
    <link rel="stylesheet" href="../../Style/Beranda/carousell_beranda.css">

    <!-- popup -->
    <link rel="stylesheet" href="../../Style/Beranda/popup-beranda.css">

    <!-- scrollDowntoTop -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <style>
        * {
            font-family: 'Quicksand', 'Amaranth', cursive, Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        .btn-secondary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #65CAD1;
            --bs-btn-border-color: #65CAD1;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #57B2B8;
            --bs-btn-hover-border-color: #65CAD1;
            --bs-btn-focus-shadow-rgb: 130, 138, 145;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #57B2B8;
            --bs-btn-active-border-color: #65CAD1;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #6c757d;
            --bs-btn-disabled-border-color: #6c757d;
        }
    </style>

    <link rel="website icon" type="png" href="../../Image/logo.jpg">
</head>

<body>

    <!-- Navbar Atas -->
    <nav class="nav_atas">
        <div class="nav-inner-left">
            <div class="dflex nav-content-inner">
                <li>
                    <div class="icon-profile-r">
                        <div class="dropdown" id="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../../Image/akun.png" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/register">Register</a></li>
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                @auth 
                <li>
                    <div id="profile" class="icon-profile" style="display: none;">
                        <a href="/akun">
                            @if(auth()->user()->picture != 'akun1.png')
                                <img src="{{ asset('storage/'. auth()->user()->picture) }}" alt="">
                            @else
                                <img src="../../Image/akun.png" alt="">
                            @endif
                            
                        </a>
                    </div>
                </li>
                @endauth

                @guest
                <li>
                    <div id="profile" class="icon-profile" style="display: none;">
                        <a href="/akun">
                            <img src="../../Image/akun.png" alt="">
                        </a>
                    </div>
                </li>
                @endguest

                @auth
                <li>
                    <div class="nav-inner-span">
                        <span> Hi, {{ auth()->user()->name }} </span>
                    </div>
                </li>
                @endauth
                @guest
                <li>
                    <div class="nav-inner-span">   
                        <span> Hi, user! </span>
                    </div>
                </li>                
                @endguest

            </div>
        </div>
        <div class="nav-inner-right">
            <div class="dflex nav-content-inner-right">
                <li>
                    <!-- <div class="icon-profile-r"> -->
                    <div class="dropdown" id="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-gear" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                    </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <li><a class="dropdown-item" href="/sandi/{{ auth()->user()->id }}">Ubah Sandi</a></li>
                            {{-- <a href="/sandi/{{ $akuns->id }}">Ubah Password</a> --}}
                            <li>
                                <form action="/logout" method="POST" id="logoutForm" style="display: none;">
                                @csrf
                                    <button type="submit" class="dropdown-item" href="#">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- </div>  -->
                </li>
            </div>
        </div>
    </nav>

    {{-- <li> --}}
        {{-- <form action="/logout" method="POST" id="logoutForm">
            @csrf
            <button type="submit">Logout</button>
        </form> --}}
    {{-- </li> --}}

    <!-- content untuk shortcut alarm -->
    <div class="outter-banner-alarm dflex">
        <div class="banner-alarm dflex">
            <div class="logo-content-alarm dflex">
                <div class="alarm-button dflex">
                    <button id="btn" onclick="toggleAudio(); ">
                        <span>Click Me!</span>
                    </button>
                    <script type="text/javascript" src="../../JS/sound.js">

                    </script>
                </div>
            </div>
            <div class="text-content-alarm dflex">
                <div class="text-h3-alarm">
                    <h3>Alarm Bantuan!</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- carousell Berita -->
    <div class="tempat-carousell" style="margin-top: 3vh;">
        <div class="content-carousell">
            <div class="h3-carousell">
                <h3>Berita</h3>
            </div>
            <div class="slide-container swiper">
                <div class="slide-content">

                <div class="card-wrapper swiper-wrapper">
                        @foreach ($news as $new)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"> </span>
                                <div class="card-image">
                                    <img src="../../Image/{{ $new->gambar }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">{{ $new->newsTitle }}</h2>
                                <!-- lorem20 untuk p nya -->
                                <p class="description">{{ $new->heading }}</p>
                                <button class="button-selengkapnya" onclick="toggle_popup({{ $new->idNews }})">Baca Selengkapnya</button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- <div class="swiper-button-next swipper-navBtn"></div>
                <div class="swiper-button-prev swipper-navBtn"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>


        </div>

    </div>






    <!-- carousell Edukasi -->
    <div class="tempat-carousell" style="margin-bottom: 8vh;">
        <div class="content-carousell">
            <div class="h3-carousell">
                <h3>Edukasi</h3>
            </div>
            <div class="slide-container swiper">
                <div class="slide-content2">

                    <div class="card-wrapper swiper-wrapper">
                        @foreach($education as $edu)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"> </span>
                                <div class="card-image">
                                    <img src="../../Image/{{ $edu->gambarEducation }}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">{{ $edu->educationTitle }}</h2>
                                <p class="description">{{ $edu->headingEducation }}</p>
                                
                                    <button class="button-selengkapnya" onclick="toggle_popup_edu({{ $edu->idEducation }})">Baca Selengkapnya</button>
                            </div>
                        </div>
                        @endforeach

                        </div>
                    </div>

                </div>
                <!-- <div class="swiper-button-next2 swipper-navBtn"></div>
                <div class="swiper-button-prev2 swipper-navBtn"></div> -->
                <!-- <div class="swiper-pagination2"></div> -->
            </div>
            
            
        </div>
        
    </div>






    <!-- Navbar Bawah -->
    <nav class="navbar navbar-expand navbar-dark bg-primary text-white fixed-bottom">
        <ul class="navbar-nav nav-justified w-100 ">
            <li class="nav-item">
                <a href="/home" class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-house" viewBox="0 0 16 16" alt="Beranda">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                    </svg>
                    <h6>Beranda</h6>
                </a>
            </li>
            <li class="nav-item">
                <a href="/berita" class="nav-link">
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
                    <a href="/helpme" class="nav-link" style=" padding-bottom:0;">
                        <div class="nav-helpme" style=" width: 100%; height: 100%; ">
                            <img src="../../Image/helpme.png" width="70" height="40" alt="HelpMe" style="margin-top: 1%;">
                        </div>
                    </a>

                </div>
            </li>
            <li class="nav-item">
                <a href="/education" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-book" viewBox="0 0 16 16" alt="Edukasi">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg>
                    <h6>Edukasi</h6>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pengaduan" class="nav-link">
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


    <!-- popup berita -->
    @foreach ($news as $new)
    <div class="popup" id="popup{{ $new->idNews }}">
        <h2>{{ $new->newsTitle }}</h2>
        <div class="content-text-popup">
            <img src="../../Image/{{ $new->gambar }}" alt="">
            <p>{!! $new->newsContent !!}</p>
        </div>
        <button class="button-selengkapnya" onclick="toggle_popup({{ $new->idNews }})">Kembali</button>
    </div>
    @endforeach

        <!-- popup edu-->
        @foreach ($education as $edu)
        <div class="popup-edu" id="popup-edu{{ $edu->idEducation }}">
            <h2>{{ $edu->educationTitle }}</h2>
            <!-- <iframe src="../../Image/412503.jpg" ></iframe> -->
            <div class="content-text-popup-edu">
                <video controls="true">
                    <source src="../../Image/{{ $edu->videoEducation }}">
                </video>
                <!-- <img src="../../Image/412503.jpg" alt=""> -->
                <!-- <iframe src="https://www.youtube.com/watch?v=pQr4O1OITJo&t=196s" frameborder="0" width="400" height="200"></iframe> -->
                <!-- <iframe src="https://youtu.be/BFu8Kd_QfGI?si=TQ0k51ThlBIBFkl_" frameborder="0" width="100%" height="200" allowfullscreen></iframe> -->
                <p>
                    {!! $edu->educationContent !!}
                </p>
            </div>
            <div class="content-button">
    
                <button class="button-selengkapnya-edu" onclick="toggle_popup_edu({{ $edu->idEducation }})">Kembali</button>
    
    
                <a href="#">
                    <button class="button-quiz">Quiz</button>
                </a>
            </div>
        </div>
        @endforeach


    <button id="topBtn">
        <i class="fas fa-arrow-up"></i>
    </button>





</body>

<!-- script in html -->
<script type="text/javascript" src="../../JS/Template/scrolltopbtn.js"></script>
<script type="text/javascript">
    function toggle_popup(id) {
        var popup = document.getElementById('popup' + id)
        popup.classList.toggle('active')
    }
</script>
<script type="text/javascript">
    function toggle_popup_edu(id) {
        var popup = document.getElementById('popup-edu' + id)
        popup.classList.toggle('active')
    }
</script>

<!-- script register login -->
<script>
    
    @auth
        var dropdown = document.getElementById('dropdown');
        if (dropdown) {
            dropdown.style.display = 'none';
        }

        var profile = document.getElementById('profile');
        profile.style.display = 'block';

        var logout = document.getElementById('logoutForm');
        logout.style.display = 'block';

    @endauth
    
</script>

<!-- swipper js -->
<script src="../../JS/Template/carousel/swiper-bundle.min.js"></script>
<script src="../../JS/Template/carousel/carousel.js"></script>
<script src="../../JS/Template/carousel/carousell-edukasi-home.js"></script>

<!-- Bootstrap JS and Popper.js are required for dropdown functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>