// const dropArea = document.getElementById("drop-area");
// const inputFile = document.getElementById("input-file");
// const contentView = document.getElementById("img-view");

// inputFile.addEventListener("change", uploadImage);
// inputFile.addEventListener("change", uploadVideo);

// function uploadImage(){
//     let imgLink = URL.createObjectURL(inputFile.files[0]);
//     contentView.style.backgroundImage = `url(${imgLink})`;
//     contentView.style.backgroundSize = "cover";
//     contentView.style.backgroundPosition = "center";
//     contentView.style.backgroundRepeat = "no-repeat";
//     contentView.textContent = "";
//     contentView.style.border = 0;
// }
// function uploadVideo(){
//     let videoLink = URL.createObjectURL(inputFile.files[0]);
//     contentView.innerHTML = `<video src="${videoLink}" controls></video>`;
//     contentView.style.backgroundImage = "";
//     contentView.style.backgroundSize = "cover";
//     contentView.style.backgroundPosition = "center";
//     contentView.style.backgroundRepeat = "no-repeat";
//     contentView.style.border = 0;
// }

// dropArea.addEventListener("dragover", function(event){
//     event.preventDefault();
//     inputFile.files = event.dataTransfer.files;
// });
// dropArea.addEventListener("drop", function(event){
//     event.preventDefault();
//     inputFile.files = event.dataTransfer.files;
//     uploadImage();
// });

const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-file");
const contentView = document.getElementById("img-view");

inputFile.addEventListener("change", function() {
    if (inputFile.files[0].type.startsWith('image/')) {
        uploadImage();
    } else if (inputFile.files[0].type.startsWith('video/')) {
        uploadVideo();
    }
});

dropArea.addEventListener("dragover", function(event){
    event.preventDefault();
    inputFile.files = event.dataTransfer.files;
});

dropArea.addEventListener("drop", function(event){
    event.preventDefault();
    inputFile.files = event.dataTransfer.files;
    if (inputFile.files[0].type.startsWith('image/')) {
        uploadImage();
    } else if (inputFile.files[0].type.startsWith('video/')) {
        uploadVideo();
    }
});

function uploadImage(){
    let imgLink = URL.createObjectURL(inputFile.files[0]);
    contentView.style.backgroundImage = `url(${imgLink})`;
    // contentView.style.backgroundSize = "cover";
    // contentView.style.backgroundPosition = "center";
    // contentView.style.backgroundRepeat = "no-repeat";
    contentView.textContent = "";
    contentView.style.border = 0;
}

function uploadVideo(){
    let videoLink = URL.createObjectURL(inputFile.files[0]);
    contentView.innerHTML = `<video style="width:100%; background-position:center; background-size:cover; height:100%;" src="${videoLink}" controls></video>`;
    contentView.style.backgroundImage = "";
    // contentView.style.backgroundSize = "cover";
    // contentView.style.backgroundPosition = "center";
    // contentView.style.backgroundRepeat = "no-repeat";
    contentView.style.border = 0;
}

// Get textarea element
const textarea = document.getElementById('deskripsi');

// Check if a previous value exists in local storage
const storedValue = localStorage.getItem('textareaValue');
if (storedValue) {
  // If exists, set the textarea value
  textarea.value = storedValue;
}

// Add event listener to textarea for changes
textarea.addEventListener('keyup', () => {
  // Save the new value to local storage
  localStorage.setItem('textareaValue', textarea.value);
});


// `<video style="width:100%; background-position:center; background-size:cover; height:100%;" src="${videoLink}" controls></video>`;

