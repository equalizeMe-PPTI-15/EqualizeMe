<!DOCTYPE html> 
<html lang="en">
<!-- CARA MELINDUNGI DIRI DARI KEJAHATAN SEKS -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <!-- bootstrap -->
    <link href="../../Style/bootstrap/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../../Style/Quiz/Quiz-style.css">
    
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

        html {
            scroll-behavior: smooth;
        }
    </style>

    

    <link rel="website icon" type="png" href="../../Image/logo.jpg">

</head>

<body>
    <div class="icon-back-container w-100">
        <div class="temp-icon">
            <a href="../../HTML/Project-HTML/edu.html" class="icon-back">
                <i class="fa fa-arrow-left"></i>
            </a>
        </div>
    </div>

    <main class="container-quiz">
        <div class="main-container ">
            <div class="container-left">
                <section class="quiz-section">
                    <div class="quiz-box">
                        <h1>EqualizeMe Kuis</h1>
                        <div class="quiz-header">
                            <span>
                                STOP Kekerasan Seksual
                            </span>
                            <span class="header-score">
                                Nilai: 0/5
                            </span>
                        </div>
                        <div class="soal">
                            <!-- wajib 40words kureng -->
                            <h2 class="question-text">1.    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae at enim deleniti illo in voluptatum, incidunt quo maxime iste eligendi eaque ad voluptatibus architecto doloribus nihil, ex hic delectus nobis commodi error impedit voluptatem placeat corrupti. Ratione, laudantium veniam!</h2>
                        </div>
                        <div class="option-list">
                            <div class="option">
                                <span>
                                    A. Lorem, ipsum dolor sit amet consectetur
                                </span>     
                            </div>
                            <div class="option"><span>
                                B. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aut. 
                            </span></div>
                            <div class="option"><span>
                                C. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, ullam.
                            </span></div>
                            <div class="option"><span>
                                D. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, consectetur!
                            </span></div>
                        </div>
                        <div class="quiz-footer">
                            <span class="question-total">1 dari 5 Kuis</span>
                            <button class="next-button">Selanjutnya</button>
                        </div>
                    </div>
                        <div class="result-box">
                            <h2>Hasil!</h2>
                            <div class="percentage-container">
                                <div class="circular-progress">
                                    <span class="progress-value">0%</span>
                                </div>
                                <span class="score-text">Nilai 0 dari 5</span>
                            </div>
                            
                            <div class="buttonScore">
                                <button class="Ulangi-button">Ulangi</button>
                                <a href="../Project-HTML/edu.html">
                                <button class="kembaliHome-button">Kembali</button>
                                
                                </a>
                            </div>
                        </div>
                </section>
                <section class="home">
                    <div class="home-content">
                        <h1>
                            Kuis
                        </h1>
                        <div class="temp-p">
                            <!-- disini lu ngebacot sesuatu boleh tentang kuis konten atau mungkin lu mau berkeluh kesah. jangan lupa apus comment ini kalau udah selesai -->
                            <p>Ini merupakan penilaian terhadap pemahaman kalian mengenai materi edukasi "STOP Kekerasan Seksual" yang sudah dibaca. Kuis ini tidak memiliki batasan waktu, maka dari itu, harap dikerjakan dengan baik dan benar.</p>
                        </div>
                            <button class="start-button">Mulai</button>
                        </div>
                </section>
            </div>
        </div>
    </main>
    
        <div class="popup-info">
            <h2>Peraturan Kuis</h2>
            <div class="temp-popup-info">

                <span class="info">1. Harap membaca pertanyaan dengan seksama.</span>
                <br>
                <span class="info">2. Hanya dapat memilih satu jawaban.</span>
                <br>
                <span class="info">3. Apabila sudah memilih, tidak dapat memilih jawaban yang lain.</span>
                <br>
                <span class="info">4. Apabila sudah memilih, sistem akan menampilkan jawaban yang benar.</span>
                <br>
            </div>
            <div class="button-group">
                <button class="info-button exit-button">Keluar</button>
                <a href="#" class="info-button continue-button">Lanjutkan</a>
            </div>
        </div>

    <script src="../../JS/Quiz/script_quiz.js"></script>
    <script src="../../JS/Quiz/soal4.js"></script>
  
</body>

</html>