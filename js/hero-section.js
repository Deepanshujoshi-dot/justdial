let currentBanner = 0;
        const totalBanners = 4;
        const bannerTrack = document.getElementById('bannerTrack');
        const dots = document.querySelectorAll('.slider-dot');

        function updateBanner() {
            bannerTrack.style.transform = `translateX(-${currentBanner * 100}%)`;
            
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
        }, 4000);

        const rotatingTexts = [
            "'4.9 Crore+' Businesses",
            "'5.9 Crore+' Products & Services"
        ];
        let currentTextIndex = 0;
        const rotatingTextElement = document.getElementById('rotatingText');

        function rotateText() {
            currentTextIndex = (currentTextIndex + 1) % rotatingTexts.length;
            rotatingTextElement.textContent = rotatingTexts[currentTextIndex];
        }

        setInterval(rotateText, 3000);