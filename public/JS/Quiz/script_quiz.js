const startBtn = document.querySelector('.start-button');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-button');
const main = document.querySelector('.container-quiz');
const continueBtn = document.querySelector('.continue-button');
const quizSection = document.querySelector('.quiz-section');
const quizBox = document.querySelector('.quiz-box');
const resultBox = document.querySelector('.result-box');
const tryAgainBtn = document.querySelector('.Ulangi-button');

startBtn.onclick = () => {
    popupInfo.classList.add('active');
    main.classList.add('active');
}
exitBtn.onclick = () => {
    popupInfo.classList.remove('active');
    main.classList.remove('active');
}

continueBtn.onclick = () => {
    quizSection.classList.add('active');
    popupInfo.classList.remove('active');
    main.classList.remove('active');
    quizBox.classList.add('active');

    showQuestion(0);
    questionCounter(1);
    headerScore();
}
tryAgainBtn.onclick = () => {
    quizBox.classList.add('active');
    nextBtn.classList.remove('active');
    resultBox.classList.remove('active');

    questionCount = 0;
    questionNumb = 1;
    userScore = 0;

    showQuestion(questionCount);
    questionCounter(questionNumb);

    headerScore();

}

let questionCount = 0;
let questionNumb = 1;
let userScore = 0;

const nextBtn = document.querySelector('.next-button');

nextBtn.onclick = () => {
    if (questionCount < questions.length - 1) {
        questionCount++;
        showQuestion(questionCount);
        questionNumb++;
        questionCounter(questionNumb);
        nextBtn.classList.remove('active');
    } else {
        // console.log('Soal Selesai');
        showResultBox();
    }
}

const optionList = document.querySelector('.option-list');

// getting question and options from array
function showQuestion(count) {
    const questionText = document.querySelector('.question-text');
    questionText.textContent = `${questions[count].numb}. ${questions[count].question}`;

    let optionTag = '';
    for (let i = 0; i < 4; i++) {
        optionTag += `<div class="option"><span>${questions[count].options[i]}</span></div>`;
    }
    optionList.innerHTML = optionTag;

    const option = optionList.querySelectorAll('.option');
    for (let i = 0; i < option.length; i++) {
        option[i].addEventListener('click', () => optionSelected(option[i]));
    }
}

function optionSelected(answer) {
    let userAns = answer.textContent;
    let correctAns = questions[questionCount].answer;
    let allOptions = optionList.children.length;

    if (userAns == correctAns) {
        console.log('Jawaban Benar');
        answer.classList.add('correct');
        userScore += 1;
        headerScore();
    } else {
        console.log('Jawaban Salah');
        answer.classList.add('incorrect');

        // if answer incorrect then automatically select the correct answer
        for (let i = 0; i < allOptions; i++) {
            if (optionList.children[i].textContent == correctAns) {
                optionList.children[i].classList.add('correct');
            }
        }
    }

    for (let i = 0; i < allOptions; i++) {
        optionList.children[i].classList.add('disabled');
    }

    nextBtn.classList.add('active');
}

function questionCounter(index) {
    const questionTotal = document.querySelector('.question-total');
    questionTotal.textContent = `${index} dari ${questions.length} Soal`;
}

function headerScore() {
    const headerScore = document.querySelector('.header-score');
    headerScore.textContent = `Nilai: ${userScore} / ${questions.length}`;
}

function showResultBox(){
    quizBox.classList.remove('active');
    resultBox.classList.add('active');

    const scoreText = document.querySelector('.score-text');
    scoreText.textContent = `Benar ${userScore} dari ${questions.length} Soal`;

    const circularProgress = document.querySelector('.circular-progress');
    const progressValue = document.querySelector('.progress-value');
    let progressStartValue = -1;
    let progressEndValue = (userScore / questions.length) * 100;
    let speed = 15;

    let progress = setInterval(() => {
        progressStartValue++;

        progressValue.textContent = `${progressStartValue}%`;
        // circularProgress.style.strokeDashoffset = progressStartValue;
        circularProgress.style.background = `conic-gradient(#00464d ${progressStartValue}%, #fff ${progressStartValue}%)`;

        if (progressStartValue == progressEndValue) {
            clearInterval(progress);

        }


    },speed);
}
