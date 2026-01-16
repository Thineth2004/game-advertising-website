document.addEventListener("DOMContentLoaded", function () {
    const images = [
        'assets/images/bg1.jpg',
        'assets/images/bg2.jpg',
        'assets/images/bg3.jpg',
		'assets/images/bg4.jpg',
		'assets/images/bg5.jpg'
    ];
    const intervalTime = 5000;
    
    const sliderContainer = document.getElementById('background-slider');
    let currentIndex = 0;

    images.forEach((src, index) => {
        const img = document.createElement('img');
        img.src = src;
        if (index === 0) img.classList.add('active');
        sliderContainer.appendChild(img);
    });

    const imgElements = sliderContainer.querySelectorAll('img');

    function changeBackground() {
        imgElements[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % imgElements.length;
        imgElements[currentIndex].classList.add('active');
    }

    setInterval(changeBackground, intervalTime);
});