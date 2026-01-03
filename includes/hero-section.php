<section class="hero-section">
        <div class="hero-container">
            <h1 class="hero-title">Search across <span class="rotating-text" id="rotatingText">'4.9 Crore+' Businesses</span></h1>

            <div class="search-section">
                <div class="location-input-wrapper">
                    <svg class="location-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <input type="text" class="location-input" value="Shiv Colony-Faridabad Sec" readonly>
                </div>

                <div class="search-wrapper">
                    <input type="text" class="search-input" placeholder="Search for Spa & Salons">
                    <button class="voice-btn" aria-label="Voice Search">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3z"/>
                            <path d="M17 11c0 2.76-2.24 5-5 5s-5-2.24-5-5H5c0 3.53 2.61 6.43 6 6.92V21h2v-3.08c3.39-.49 6-3.39 6-6.92h-2z"/>
                        </svg>
                    </button>
                    <button class="search-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="cards-section">
                <div class="cards-container">
                    <div class="banner-slider">
                        <button class="slider-arrow prev" onclick="changeBanner(-1)">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="15 18 9 12 15 6"/>
                            </svg>
                        </button>
                        <button class="slider-arrow next" onclick="changeBanner(1)">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </button>
                        
                        <div class="banner-track" id="bannerTrack">
                            <div class="banner-slide">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/banner_loans_2024.webp" alt="Loans">
                            </div>
                            <div class="banner-slide">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/banner_hotels_2024.webp" alt="Hotels">
                            </div>
                            <div class="banner-slide">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/banner_packersmovers_2024.webp" alt="Packers & Movers">
                            </div>
                            <div class="banner-slide">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/banner_cctv_2024.webp" alt="CCTV">
                            </div>
                        </div>

                        <div class="slider-dots">
                            <span class="slider-dot active" onclick="goToBanner(0)"></span>
                            <span class="slider-dot" onclick="goToBanner(1)"></span>
                            <span class="slider-dot" onclick="goToBanner(2)"></span>
                            <span class="slider-dot" onclick="goToBanner(3)"></span>
                        </div>
                    </div>

                    <div class="service-card" style="background-color: #0d6efd;">
                        <div class="card-content">
                            <h3>B2B</h3>
                            <p>Quick</p>
                            <p class="subtitle">Quotes</p>
                            <img class="card-image" src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/b2b_square_hotkey.webp?w=1920&q=75" alt="B2B">
                        </div>
                        <div class="explore-btn">
                            Explore
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </div>
                    </div>

                    <div class="service-card" style="background-color: #1e3a8a;">
                        <div class="card-content">
                            <h3>REPAIRS &</h3>
                            <h3>SERVICES</h3>
                            <p class="subtitle">Get<br>Nearest<br>Vendor</p>
                            <img class="card-image" src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/repair_square_hotkey.webp?w=1920&q=75" alt="Repairs & Services">
                        </div>
                        <div class="explore-btn">
                            Explore
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </div>
                    </div>

                    <div class="service-card" style="background-color: #7c3aed;">
                        <div class="card-content">
                            <h3>REAL ESTATE</h3>
                            <p class="subtitle">Finest<br>Agents</p>
                            <img class="card-image" src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/realestate_square_hotkey.webp?w=1200&q=75" alt="Real Estate">
                        </div>
                        <div class="explore-btn">
                            Explore
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </div>
                    </div>

                    <div class="service-card" style="background-color: #059669;">
                        <div class="card-content">
                            <h3>DOCTORS</h3>
                            <p class="subtitle">Book<br>Now</p>
                            <img class="card-image" src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/doctor_square_hotkey.webp?w=1920&q=75" alt="Doctors">
                        </div>
                        <div class="explore-btn">
                            Explore
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button class="advertise-button">Advertise</button>
    <button class="free-listing-button">Free Listing</button>


<section class="categories-section">
        <div class="categories-container">
            <div class="categories-grid">
                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <circle cx="32" cy="28" r="8" fill="#FF6B6B"/>
                            <path d="M32 38c-8 0-16 4-16 8v4h32v-4c0-4-8-8-16-8z" fill="#FF6B6B"/>
                            <path d="M20 22h24v4H20z" fill="#FFB84D"/>
                        </svg>
                    </div>
                    <div class="category-name">Restaurants</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="16" y="24" width="32" height="24" fill="#4ECDC4" rx="2"/>
                            <rect x="20" y="28" width="6" height="8" fill="#95E1D3"/>
                            <rect x="29" y="28" width="6" height="8" fill="#95E1D3"/>
                            <rect x="38" y="28" width="6" height="8" fill="#95E1D3"/>
                            <path d="M16 24l16-8 16 8" fill="#37C7BD"/>
                        </svg>
                    </div>
                    <div class="category-name">Hotels</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <circle cx="32" cy="26" r="8" fill="#FFB6C1"/>
                            <path d="M32 36c-6 0-12 3-12 6v4h24v-4c0-3-6-6-12-6z" fill="#FFB6C1"/>
                            <circle cx="26" cy="24" r="2" fill="#FF69B4"/>
                            <circle cx="38" cy="24" r="2" fill="#FF69B4"/>
                        </svg>
                    </div>
                    <div class="category-name">Beauty Spa</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="18" y="20" width="12" height="16" fill="#87CEEB"/>
                            <rect x="34" y="20" width="12" height="16" fill="#87CEEB"/>
                            <path d="M32 42V36h-6v6h-8v6h28v-6h-8v-6z" fill="#4682B4"/>
                            <circle cx="24" cy="28" r="1.5" fill="#4169E1"/>
                        </svg>
                    </div>
                    <div class="category-name">Home Decor</div>
                </div>

                <div class="category-item">
                    <div class="category-icon" style="background: linear-gradient(135deg, #ff6b9d 0%, #c06c84 100%); border: none;">
                        <svg viewBox="0 0 64 64" fill="white">
                            <path d="M32 20l-4 8h8l-4-8z"/>
                            <circle cx="24" cy="32" r="4"/>
                            <circle cx="40" cy="32" r="4"/>
                            <path d="M20 38c0 6.627 5.373 12 12 12s12-5.373 12-12" stroke="white" stroke-width="2" fill="none"/>
                            <rect x="30" y="16" width="4" height="6" rx="2"/>
                        </svg>
                    </div>
                    <div class="category-name">Wedding Planning</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="20" y="28" width="24" height="3" fill="#4CAF50"/>
                            <path d="M32 18l8 10H24l8-10z" fill="#4CAF50"/>
                            <rect x="30" y="31" width="4" height="14" fill="#8BC34A"/>
                            <circle cx="32" cy="32" r="2" fill="#FFC107"/>
                        </svg>
                    </div>
                    <div class="category-name">Education</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <path d="M32 20c-8 0-14 4-14 8v8c0 4 6 8 14 8s14-4 14-8v-8c0-4-6-8-14-8z" fill="#9C27B0"/>
                            <ellipse cx="32" cy="28" rx="14" ry="4" fill="#BA68C8"/>
                            <path d="M22 32v-2l10-4 10 4v2" fill="#7B1FA2"/>
                        </svg>
                    </div>
                    <div class="category-name">Rent & Hire</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="18" y="22" width="28" height="22" fill="#FF5252" rx="2"/>
                            <rect x="22" y="26" width="6" height="6" fill="#FFCDD2"/>
                            <rect x="36" y="26" width="6" height="6" fill="#FFCDD2"/>
                            <rect x="29" y="35" width="6" height="6" fill="#FFCDD2"/>
                            <path d="M32 22V18h-4v4h-4v4h4v-4h8v4h4v-4h-4v-4h-4v4z" fill="#EF5350"/>
                        </svg>
                    </div>
                    <div class="category-name">Hospitals</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="20" y="28" width="24" height="16" fill="#FFB74D"/>
                            <circle cx="26" cy="22" r="4" fill="#FFA726"/>
                            <path d="M28 26l-4 2v4h4v-6z" fill="#FB8C00"/>
                            <rect x="24" y="36" width="4" height="8" fill="#F57C00"/>
                            <rect x="34" y="30" width="8" height="3" fill="#8D6E63"/>
                        </svg>
                    </div>
                    <div class="category-name">Contractors</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <circle cx="28" cy="28" r="6" fill="#8D6E63"/>
                            <ellipse cx="28" cy="36" rx="8" ry="6" fill="#A1887F"/>
                            <path d="M22 26c0-2 2-4 4-4" stroke="#6D4C41" stroke-width="1.5" fill="none"/>
                            <circle cx="26" cy="27" r="1" fill="#3E2723"/>
                            <path d="M36 28c2 0 4 1 4 3v2h-8v-2c0-2 2-3 4-3z" fill="#BCAAA4"/>
                        </svg>
                    </div>
                    <div class="category-name">Pet Shops</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="20" y="26" width="24" height="18" fill="#7E57C2" rx="1"/>
                            <rect x="24" y="30" width="5" height="6" fill="#9575CD"/>
                            <rect x="35" y="30" width="5" height="6" fill="#9575CD"/>
                            <rect x="29" y="38" width="6" height="4" fill="#5E35B1"/>
                            <path d="M20 26h24l-4-6H24l-4 6z" fill="#673AB7"/>
                        </svg>
                    </div>
                    <div class="category-name">PG/Hostels</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="18" y="24" width="28" height="20" fill="#42A5F5" rx="1"/>
                            <rect x="22" y="28" width="6" height="7" fill="#90CAF9"/>
                            <rect x="36" y="28" width="6" height="7" fill="#90CAF9"/>
                            <rect x="29" y="38" width="6" height="6" fill="#1E88E5"/>
                            <path d="M18 24l14-8 14 8" fill="#1976D2"/>
                        </svg>
                    </div>
                    <div class="category-name">Estate Agent</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <path d="M32 20c-6 0-10 4-10 8v4h20v-4c0-4-4-8-10-8z" fill="#26C6DA"/>
                            <rect x="28" y="32" width="8" height="12" fill="#00ACC1" rx="1"/>
                            <rect x="30" y="36" width="4" height="2" fill="white"/>
                            <rect x="30" y="40" width="4" height="2" fill="white"/>
                            <circle cx="32" cy="24" r="3" fill="#00BCD4"/>
                        </svg>
                    </div>
                    <div class="category-name">Dentists</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="24" y="22" width="4" height="20" fill="#66BB6A" rx="2"/>
                            <circle cx="26" cy="20" r="3" fill="#81C784"/>
                            <rect x="36" y="28" width="4" height="14" fill="#66BB6A" rx="2"/>
                            <circle cx="38" cy="26" r="3" fill="#81C784"/>
                            <path d="M20 42h24v2H20z" fill="#4CAF50"/>
                        </svg>
                    </div>
                    <div class="category-name">Gym</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <circle cx="32" cy="28" r="10" fill="#FFA726"/>
                            <path d="M27 28h10M32 23v10" stroke="white" stroke-width="2"/>
                            <rect x="26" y="38" width="12" height="6" fill="#FF9800" rx="1"/>
                            <path d="M28 38v-4h8v4" fill="#FB8C00"/>
                        </svg>
                    </div>
                    <div class="category-name">Loans</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <path d="M24 20l8 8 8-8v8l-8 8-8-8v-8z" fill="#EC407A"/>
                            <circle cx="32" cy="28" r="4" fill="#F48FB1"/>
                            <path d="M20 36h24l-4 8H24l-4-8z" fill="#E91E63"/>
                            <rect x="30" y="38" width="4" height="4" fill="#C2185B"/>
                        </svg>
                    </div>
                    <div class="category-name">Event Organisers</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <circle cx="28" cy="26" r="6" fill="#5C6BC0"/>
                            <ellipse cx="32" cy="36" rx="12" ry="6" fill="#7986CB"/>
                            <rect x="26" y="32" width="4" height="4" fill="#3F51B5"/>
                            <circle cx="28" cy="26" r="4" stroke="#3949AB" stroke-width="1.5" fill="none"/>
                            <path d="M38 30h4v8h-4z" fill="#9FA8DA"/>
                        </svg>
                    </div>
                    <div class="category-name">Driving Schools</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="20" y="26" width="24" height="16" fill="#FF7043" rx="2"/>
                            <rect x="18" y="32" width="4" height="6" fill="#5D4037" rx="1"/>
                            <rect x="42" y="32" width="4" height="6" fill="#5D4037" rx="1"/>
                            <circle cx="20" cy="38" r="3" fill="#424242"/>
                            <circle cx="44" cy="38" r="3" fill="#424242"/>
                            <rect x="24" y="30" width="6" height="5" fill="#FFCCBC"/>
                        </svg>
                    </div>
                    <div class="category-name">Packers & Movers</div>
                </div>

                <div class="category-item">
                    <div class="category-icon">
                        <svg viewBox="0 0 64 64" fill="none">
                            <rect x="20" y="24" width="20" height="16" fill="#8D6E63" rx="1"/>
                            <rect x="24" y="28" width="4" height="3" fill="#A1887F"/>
                            <rect x="30" y="28" width="4" height="3" fill="#A1887F"/>
                            <path d="M28 34l4 4 4-4" stroke="#6D4C41" stroke-width="2" fill="none"/>
                            <circle cx="42" cy="30" r="4" fill="#FF5252"/>
                        </svg>
                    </div>
                    <div class="category-name">Courier Service</div>
                </div>

                <div class="category-item">
                    <div class="category-icon" style="background-color: #0d6efd; border: none;">
                        <svg viewBox="0 0 24 24" fill="white" style="width: 40px; height: 40px;">
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                        </svg>
                    </div>
                    <div class="category-name">Popular Categories</div>
                </div>
            </div>
        </div>
    </section>

<section class="services-section">
        <div class="services-container">
            <div class="services-grid">
                <div class="service-group">
                    <h2 class="service-group-title">Wedding Requisites</h2>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/banquethalls_rectangle_2024.webp?w=256&q=75" alt="Banquet Halls">
                            </div>
                            <div class="service-label">Banquet Halls</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bridalrequisite_rectangle_2024.webp?w=256&q=75" alt="Bridal Requisite">
                            </div>
                            <div class="service-label">Bridal Requisite</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/caterers_rectangle_2024.webp?w=640&q=75" alt="Caterers">
                            </div>
                            <div class="service-label">Caterers</div>
                        </div>
                    </div>
                </div>

                <div class="service-group">
                    <h2 class="service-group-title">Beauty & Spa</h2>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/beautyparlours_rectangle_2024.webp?w=640&q=75" alt="Beauty Parlours">
                            </div>
                            <div class="service-label">Beauty Parlours</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/spamassages_rectangle_2024.webp?w=256&q=75" alt="Spa & Massages">
                            </div>
                            <div class="service-label">Spa & Massages</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/salons_rectangle_2024.webp?w=256&q=75" alt="Salons">
                            </div>
                            <div class="service-label">Salons</div>
                        </div>
                    </div>
                </div>

                <div class="service-group">
                    <h2 class="service-group-title">Repairs & Services</h2>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/hkim_acrepair.png?w=256&q=75" alt="AC Service">
                            </div>
                            <div class="service-label">AC Service</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/carservice_rectangle_2024.webp?w=256&q=75" alt="Car Service">
                            </div>
                            <div class="service-label">Car Service</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bikeservice_rectangle_2024.webp?w=256&q=75" alt="Bike Service">
                            </div>
                            <div class="service-label">Bike Service</div>
                        </div>
                    </div>
                </div>

                <div class="service-group">
                    <h2 class="service-group-title">Daily Needs</h2>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/hkim_movies.png?w=640&q=75" alt="Movies">
                            </div>
                            <div class="service-label">Movies</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/grocery_rectangle_2024.webp?w=256&q=75" alt="Grocery">
                            </div>
                            <div class="service-label">Grocery</div>
                        </div>
                        <div class="service-item">
                            <div class="service-image">
                                <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/electricians_rectangle_2024.webp?w=256&q=75" alt="Electricians">
                            </div>
                            <div class="service-label">Electricians</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="utilities-section">
        <div class="utilities-container">
            <div class="utility-group">
                <div class="sgadfja">
                    <div class="afjakf">
                        <div class="utility-header">
                            <div class="utility-title-wrapper">
                                <div class="ksadf">
                                    <div class="hsdk">
                                        <h2>Bills & Recharge</h2>
                                    </div>
                                    <div class="kgsak">
                                        <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bharat_billpay_Newlogo.svg" alt="Bharat BillPay" class="utility-logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="utility-subtitle">Pay your bills & recharge instantly with Justdial</p>
                        <a href="#" class="utility-link">Explore More</a>
                    </div>
                    <div class="afjakf">
                        <div class="utility-items" style="margin-top: 20px;">
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_mobile.svg?w=64&q=75" alt="Mobile">
                                </div>
                                <div class="utility-label">Mobile</div>
                            </div>
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_electricity.svg?w=128&q=75" alt="Electricity">
                                </div>
                                <div class="utility-label">Electricity</div>
                            </div>
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_dth.svg?w=128&q=75" alt="DTH">
                                </div>
                                <div class="utility-label">DTH</div>
                            </div>
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_water.svg?w=128&q=75" alt="Water">
                                </div>
                                <div class="utility-label">Water</div>
                            </div>
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_gas.svg?w=128&q=75" alt="Gas">
                                </div>
                                <div class="utility-label">Gas</div>
                            </div>
                            <div class="utility-item">
                                <div class="utility-icon-wrapper">
                                    <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_insurance.svg?w=128&q=75" alt="Insurance">
                                </div>
                                <div class="utility-label">Insurance</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="utility-group">
                <div class="sgadfja">
                    <div class="afjakf">
                        <div class="utility-header">
                            <div class="utility-title-wrapper">
                                <h2>Travel Bookings</h2>
                            </div>
                        </div>
                        <p class="utility-subtitle">Instant ticket bookings for your best travel experience</p>
                        <a href="#" class="utility-link">Explore More</a>
                    </div>
                <div class="afjakf">
                    <div class="utility-items" style="margin-top: 20px;">
                    <div class="utility-item">
                        <div class="utility-icon-wrapper">
                            <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_flight.svg?w=128&q=75" alt="Flight">
                        </div>
                        <div class="utility-label">Flight</div>
                        <div class="utility-sublabel">Powered By<br>Easemytrip.com</div>
                    </div>
                    <div class="utility-item">
                        <div class="utility-icon-wrapper">
                            <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_bus.svg?w=64&q=75" alt="Bus">
                        </div>
                        <div class="utility-label">Bus</div>
                        <div class="utility-sublabel">Affordable Rides</div>
                    </div>
                    <div class="utility-item">
                        <div class="utility-icon-wrapper">
                            <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_train.svg?w=128&q=75" alt="Train">
                        </div>
                        <div class="utility-label">Train</div>
                    </div>
                    <div class="utility-item">
                        <div class="utility-icon-wrapper">
                            <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_hotels.svg?w=64&q=75" alt="Hotel">
                        </div>
                        <div class="utility-label">Hotel</div>
                        <div class="utility-sublabel">Budget-friendly Stay</div>
                    </div>
                    <div class="utility-item">
                        <div class="utility-icon-wrapper">
                            <img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/bt_carhire.svg?w=64&q=75" alt="Car Rentals">
                        </div>
                        <div class="utility-label">Car Rentals</div>
                        <div class="utility-sublabel">Drive Easy Anywhere</div>
                    </div>
                </div>
                                </div>
                </div>
            </div>
        </div>
    </section>