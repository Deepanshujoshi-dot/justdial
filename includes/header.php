<header class="header">
        <div class="logo-container">
            <a href="index.php">
                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/jdrwd/jdlogosvg.svg" alt="JustDial" class="logo">
            </a>
        </div>

        <div class="mobile-header-actions">
            <button class="bell-icon-mobile" onclick="handleNotification()" aria-label="Notifications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/>
                </svg>
            </button>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Menu">
                ☰
            </button>
        </div>

        <div class="mobile-overlay" id="mobileOverlay" onclick="closeMobileMenu()"></div>

        <div class="nav-container" id="navContainer">
            <div class="mobile-header">
                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/jdrwd/jdlogosvg.svg" alt="JustDial" class="logo">
                <button class="mobile-close" onclick="closeMobileMenu()" aria-label="Close">×</button>
            </div>

            <nav>
                <ul class="nav-menu">
                    <li class="dropdown">
                        <button class="dropdown-toggle" onclick="toggleDropdown(event, 'langDropdown')" type="button">
                            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M3 9h18M9 21V9"/>
                            </svg>
                            EN
                        </button>
                        <div class="dropdown-menu" id="langDropdown">
                            <a href="#" class="dropdown-item" onclick="selectLanguage(event, 'English')">English</a>
                            <a href="#" class="dropdown-item" onclick="selectLanguage(event, 'हिंदी')">हिंदी</a>
                            <a href="#" class="dropdown-item" onclick="selectLanguage(event, 'मराठी')">मराठी</a>
                            <a href="#" class="dropdown-item" onclick="selectLanguage(event, 'தமிழ்')">தமிழ்</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">We are Hiring</a>
                    </li>
                    <li>
                        <a href="#">Investor Relations</a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                            Leads
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12"/>
                            </svg>
                            Advertise
                        </a>
                    </li>
                    <li>
                        <a href="#" class="free-listing-wrapper">
                            <span class="business-badge">Business</span>
                            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/>
                                <path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/>
                            </svg>
                            Free Listing
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <button class="login-btn" onclick="handleLogin()">Login / Sign Up</button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>