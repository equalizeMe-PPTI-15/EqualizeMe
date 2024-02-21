let audioIndex = 0;
const audioElements = [
  { src: "/Sound/Recording.m4a", id: "audio-element-0" },
  { src: "/Sound/Recording (2).m4a", id: "audio-element-1" },
  { src: "/Sound/Recording (3).m4a", id: "audio-element-2" }
];
const playButton = document.getElementById("play-button");

playButton.addEventListener("click", () => {
  const audioElement = document.getElementById(audioElements[audioIndex].id);

  if (audioElement.paused || audioElement.ended) {
    audioElement.play();
    // playButton.innerHTML = "Pause Audio";
    audioIndex++;
    if (audioIndex >= audioElements.length) {
      audioIndex = 0;
    }
  }
});