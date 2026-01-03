let currentBanner = 0;
const bannerTrack = document.getElementById('bannerTrack');
const totalBanners = document.querySelectorAll('.banner-slide').length;
const dots = document.querySelectorAll('.slider-dot');

function updateBanner() {
    const offset = -currentBanner * 100;
    bannerTrack.style.transform = `translateX(${offset}%)`;
    
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentBanner);
    });
}

function changeBanner(direction) {
    currentBanner = (currentBanner + direction + totalBanners) % totalBanners;
    updateBanner();
}

function goToBanner(index) {
    currentBanner = index;
    updateBanner();
}

setInterval(() => {
    changeBanner(1);
}, 5000);

const rotatingTexts = [
    "'4.9 Crore+' Businesses",
    "Hotels & Restaurants",
    "Home Services",
    "Beauty & Wellness",
    "Repairs & Services"
];

let textIndex = 0;
const rotatingElement = document.getElementById('rotatingText');

function rotateText() {
    rotatingElement.style.opacity = '0';
    
    setTimeout(() => {
        textIndex = (textIndex + 1) % rotatingTexts.length;
        rotatingElement.textContent = rotatingTexts[textIndex];
        rotatingElement.style.opacity = '1';
    }, 300);
}

if (rotatingElement) {
    rotatingElement.style.transition = 'opacity 0.3s ease';
    setInterval(rotateText, 3000);
}