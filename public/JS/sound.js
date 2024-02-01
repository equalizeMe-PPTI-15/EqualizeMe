const audio = new Audio("../../Sound/alarm.mp3");

function toggleAudio() {
    if (audio.paused) {
        audio.currentTime = 0;
        audio.volume = 1;
        audio.loop = true; 
        audio.play();
    } else {
        audio.pause();
        audio.loop = false; 
    }
}
