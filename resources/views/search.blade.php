@extends('berita')

@section('content')

<div class="container-content-berita">

    <div class="h3-berita">
        <h3>Berita</h3>
    </div>

    <div class="container-berita">
        @foreach ($thenews as $news)

        <div class="content-berita">    
            <a href="#" onclick="showPopup({{ $news->idNews }})">
                {{-- <a href="{{ route("news", 1) }}"></a> --}}
                <div class="beritanya">
                    <img src={{$news->gambar}} alt="">
                    <div class="content-h6-berita">
                        <h6> {{$news->heading}} </h6>
                        <span class="baca-span" >baca selengkapnya...</span>
                    </div>
                </div>
            
                <div class="span-icon-date">
                    <span><img src="../../Image/favicon.ico" alt="icon binus"><h6>Binus University</h6> <p>2d</p></span>
                </div>
            </a>
            
        </div>
        @endforeach
        
    </div>
</div>

@endsection