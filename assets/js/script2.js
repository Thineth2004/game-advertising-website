const images = [
    'url("assets/images/bg1.jpg")', 
    'url("assets/images/bg2.jpg")', 
    'url("assets/images/bg3.jpg")', 
    'url("assets/images/bg4.jpg")', 
    'url("assets/images/bg5.jpg")'
];

let currentIndex = 0;
const body = document.body;

function preloadImages() {
    for (let i = 0; i < images.length; i++) {
        const img = new Image();
        img.src = images[i].replace('url("', '').replace('")', '');
    }
}

function changeBackground() {
    currentIndex = (currentIndex + 1) % images.length;
    body.style.backgroundImage = images[currentIndex];
}

window.onload = function() {
    preloadImages();
    body.style.backgroundImage = images[0];
    setInterval(changeBackground, 3000);
};