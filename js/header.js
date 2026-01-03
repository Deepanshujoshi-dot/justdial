function toggleDropdown(event, dropdownId) {
            event.preventDefault();
            event.stopPropagation();
            
            const dropdown = document.getElementById(dropdownId);
            const allDropdowns = document.querySelectorAll('.dropdown-menu');
            
            allDropdowns.forEach(menu => {
                if (menu.id !== dropdownId) {
                    menu.classList.remove('show');
                }
            });
            
            dropdown.classList.toggle('show');
        }

        function selectLanguage(event, language) {
            event.preventDefault();
            console.log('Language selected:', language);
            
            const allDropdowns = document.querySelectorAll('.dropdown-menu');
            allDropdowns.forEach(menu => {
                menu.classList.remove('show');
            });
        }

        function toggleMobileMenu() {
            const navContainer = document.getElementById('navContainer');
            const overlay = document.getElementById('mobileOverlay');
            
            navContainer.classList.add('mobile-active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            const navContainer = document.getElementById('navContainer');
            const overlay = document.getElementById('mobileOverlay');
            
            navContainer.classList.remove('mobile-active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
            
            const allDropdowns = document.querySelectorAll('.dropdown-menu');
            allDropdowns.forEach(menu => {
                menu.classList.remove('show');
            });
        }

        function handleLogin() {
            console.log('Login clicked');
        }

        function handleNotification() {
            console.log('Notification clicked');
        }

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                const allDropdowns = document.querySelectorAll('.dropdown-menu');
                allDropdowns.forEach(menu => {
                    menu.classList.remove('show');
                });
            }
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
            }
        });