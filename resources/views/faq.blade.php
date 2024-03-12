<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EqualizeMe-FAQ</title>
    <link rel="stylesheet" href="{{ asset('Style/Faq/faq.css') }}">
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
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="buttonback">
                <a href="/home">
                    <img src="{{ asset('Image/back.png') }}" alt="">
                </a>
            </div>
            <p>Bantuan</p>
        </div>
        <div class="title">
            <h2>Pertanyaan yang sering<br>diajukan</h2>   
        </div>
    </div>
    <div class="faq">
        @foreach($faqs as $faq)
        <article>
        <div class="contentBx">
            <div class="label">
               <p>{{$faq->pertanyaan}}</p>
            </div>
            <div class="content">  
                <p>{{$faq->jawaban}}</p>
            </div>
        </div>
        </article>
        @endforeach
    </div>
    <script>
        const faq = document.getElementsByClassName('contentBx');

        for(i = 0; i<faq.length; i++){
            faq[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
</body>
</html>