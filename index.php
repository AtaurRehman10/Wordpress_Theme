
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Header Navigation -->
    <header class="header">
        <nav class="nav-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">SOVFund</a>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#vision">Vision</a></li>
                <li><a href="#investment">Investment</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#structure">Structure</a></li>
                <li><a href="#technology">Technology</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <main class="hero" id="home">
        <div class="main-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/icon.png" alt="" style="width:100px;"></div>
        <h1 class="hero-title">Unlock the Future of <br>Digital Finance</h1>
        <p class="hero-subtitle">Invest with Vision. Secure Your Digital Future.</p>
        <div class="cta-buttons">
            <a href="#contact" class="btn btn-primary">Connect With Us</a>
            <a href="#vision" class="btn btn-secondary">Discover Our Vision</a>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </main>

    <!-- Vision Section -->
    <section class="vision-section" id="vision">
        <div class="vision-container">
            <h2 class="vision-title">Our Vision: Pioneering Tomorrow's Digital Economy</h2>
            <div class="vision-divider"></div>
            <p class="vision-description">
                We are SOVFund, a hybrid VC & Digital Asset fund at the forefront of AI, FinTech, and Web3 innovation. Our mission is to empower the next generation of transformative technologies, driving decentralization and financial inclusion. We envision a future where these sectors redefine global industries, fostering a more open, secure, and user-driven digital economy.
            </p>
            <h3 class="core-values-title">Our Core Values</h3>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/zzzzzz icon.svg" alt="" style="width: 50px;"></div>
                    <h4 class="value-title">Innovation & Disruption</h4>
                    <p class="value-description">Game-changing ideas that transform industries and create new possibilities.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/planet-earth.png" alt="" style="width: 50px;"></div>
                    <h4 class="value-title">Long-Term Vision</h4>
                    <p class="value-description">Sustainable growth beyond market cycles, building lasting value.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/shield.png" alt="" style="width: 50px;"></div>
                    <h4 class="value-title">Integrity & <br>Responsibility</h4>
                    <p class="value-description">Upholding the highest ethical <br>standards in all our endeavors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Section -->
    <section class="investment-section" id="investment">
        <div class="investment-container">
            <h2 class="investment-title">Precision Investments in High-Conviction Sectors</h2>
            <div class="investment-divider"></div>
            <p class="investment-description">
                We strategically capitalize on the cyclical nature of emerging markets, investing in <br>undervalued, high-potential projects poised for exponential growth.
            </p>
            <h3 class="key-areas-title">Key Investment Areas</h3>
            <div class="areas-grid">
                <div class="area-card">
                    <div class="area-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/screen icon.svg" alt="" style="width:50px;"></div>
                    <h4 class="area-title">AI Infrastructure</h4>
                    <p class="area-description">Powering the next wave of intelligence through cutting-edge AI technologies and infrastructure.</p>
                </div>
                <div class="area-card">
                    <div class="area-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/dollar-coin-circle-with-symbol.png" alt="" style="width:50px;"></div>
                    <h4 class="area-title">FinTech Enablers</h4>
                    <p class="area-description">Redefining financial services through innovative technologies that enhance accessibility and efficiency.</p>
                </div>
                <div class="area-card">
                    <div class="area-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/globe.svg" alt="" style="width:50px;"></div>
                    <h4 class="area-title">Web3 Ecosystems</h4>
                    <p class="area-description">Building the decentralized internet through blockchain technologies and decentralized applications.</p>
                </div>
            </div>
            <h3 class="approach-title">Investment Approach</h3>
            <div class="approach-grid">
                <div class="approach-card">
                    <div class="approach-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/arrrw icon.svg" alt="" style="width:50px;"></div>
                    <h4 class="approach-card-title">Early-Stage Tokens</h4>
                    <p class="approach-card-description">Asymmetric risk-reward opportunities in high-potential assets with significant growth potential.</p>
                </div>
                <div class="approach-card">
                    <div class="approach-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/gift-box.png" alt="" style="width:50px;"></div>
                    <h4 class="approach-card-title">Pre-TGE & Private Sales</h4>
                    <p class="approach-card-description">Strategic entry into groundbreaking AI, FinTech, and Web3 startups before public market access.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="team">
        <div class="team-container">
            <h2 class="team-main-title">Expertise. Network. Unrivaled Access.</h2>
            <div class="team-divider"></div>
            <p class="team-subtitle">Our distinct advantages position SOVFund for unparalleled deal flow and maximized <br>returns.</p>
            <h2 class="team-title">Our Leadership Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="avatar">
                        <div class="avatar-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/huamna.svg" alt="" style="width:125px;"></div>
                    </div>
                    <h3 class="member-name">James Coughlan</h3>
                    <p class="member-title">Fund Partner</p>
                    <div class="social-links">
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">𝕏</a>
                    </div>
                </div>
                <div class="team-member">
                    <div class="avatar">
                        <div class="avatar-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/huamna.svg" alt="" style="width:125px;"></div>
                    </div>
                    <h3 class="member-name">Paul Dube</h3>
                    <p class="member-title">Fund Partner</p>
                    <div class="social-links">
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">𝕏</a>
                    </div>
                </div>
                <div class="team-member">
                    <div class="avatar">
                        <div class="avatar-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/huamna.svg" alt="" style="width:125px;"></div>
                    </div>
                    <h3 class="member-name">Syed Waji Bokhari</h3>
                    <p class="member-title">Title to be confirmed</p>
                    <div class="social-links">
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">𝕏</a>
                    </div>
                </div>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/line circle icon.png" alt="" style="width:50px;"></div>
                    <h3 class="feature-title">Veteran Leadership</h3>
                    <p class="feature-description">Over 100 years of combined expertise across banking, asset management, and digital assets.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/people.png" alt="" style="width:50px;"></div>
                    <h3 class="feature-title">Strategic Co-Investment</h3>
                    <p class="feature-description">Direct partnership with Nimbus Capital, managing $1.2B AUM across 70 Family Offices, ensuring access to elite, AI-vetted prospects.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/globe.svg" alt="" style="width:50px;"></div>
                    <h3 class="feature-title">Global Reach, Local Depth</h3>
                    <p class="feature-description">Strong presence and ties in Latin America, bridging traditional finance with new digital ventures.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/chip.png" alt="" style="width:50px;"></div>
                    <h3 class="feature-title">AI-Powered Insights</h3>
                    <p class="feature-description">Proprietary analytics and AI tools for superior due diligence and optimized timing.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/link.png" alt="" style="width:50px;"></div>
                    <h3 class="feature-title">Exclusive Network</h3>
                    <p class="feature-description">Early relationships across the crypto and FinTech ecosystem guarantee access to top-tier deals.</p>
                </div>
            </div>
            <h2 class="partners-title">Strategic Partners</h2>
            <div class="partners-grid">
                <div class="partner-logo">
                    <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/double arrow rec icon (1).svg" alt="" style="width:50px;"></div>
                    <p class="partner-name">Nimbus Capital</p>
                </div>
                <div class="partner-logo">
                    <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/plus circle icon.svg" alt="" style="width:50px;"></div>
                    <p class="partner-name">Sovera</p>
                </div>
                <div class="partner-logo">
                    <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/square cross icon.svg" alt="" style="width:50px;"></div>
                    <p class="partner-name">JJ Associates</p>
                </div>
                <div class="partner-logo">
                    <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/2 faces arrow icon.svg" alt="" style="width:50px;"></div>
                    <p class="partner-name">MJC Capital</p>
                </div>
                <div class="partner-logo">
                    <div class="logo-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/circle arroa weird.svg" alt="" style="width:50px;"></div>
                    <p class="partner-name">TroonLabs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Structure Section -->
    <section class="structure-section" id="structure">
        <div class="structure-container">
            <h2 class="structure-main-title">Structured Growth. Investor Flexibility.</h2>
            <div class="structure-divider"></div>
            <p class="structure-subtitle">We balance aggressive growth with robust investor protections and transparent liquidity.</p>
            <div class="content-grid">
                <div class="allocation-section">
                    <h2 class="section-title">Fund Allocation</h2>
                    <div class="chart-container">
                        <div class="donut-chart">
                            <div class="chart-center">Allocation</div>
                        </div>
                    </div>
                    <div class="allocation-items">
                        <div class="allocation-item">
                            <div class="color-indicator yellow"></div>
                            <div class="allocation-content">
                                <h3>50% Pre-TGE & Private Sale</h3>
                                <p>Core allocation for early-stage disruption.</p>
                            </div>
                        </div>
                        <div class="allocation-item">
                            <div class="color-indicator orange"></div>
                            <div class="allocation-content">
                                <h3>30% Early-Stage Liquid Tokens</h3>
                                <p>Targeting high-potential public assets.</p>
                            </div>
                        </div>
                        <div class="allocation-item">
                            <div class="color-indicator teal"></div>
                            <div class="allocation-content">
                                <h3>20% Operational & Reserve</h3>
                                <p>Ensuring stability and strategic agility.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="framework-section">
                    <h2 class="section-title">Investor Framework</h2>
                    <div class="framework-items">
                        <div class="framework-item">
                            <div class="framework-header">
                                <div class="framework-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/lock.png" alt="" style="width:40px;"></div>
                                <h3 class="framework-title">Initial Lock-in</h3>
                            </div>
                            <p class="framework-description">1-24 months to protect fund strategy and ensure optimal execution of investment thesis.</p>
                        </div>
                        <div class="framework-item">
                            <div class="framework-header">
                                <div class="framework-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/idk icon.png" alt="" style="width:40px;"></div>
                                <h3 class="framework-title">Gradual Vesting</h3>
                            </div>
                            <p class="framework-description">Eligible capital becomes accessible in tranches after lock-in, providing balanced liquidity.</p>
                        </div>
                        <div class="framework-item">
                            <div class="framework-header">
                                <div class="framework-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/dollar-coin-circle-with-symbol.png" alt="" style="width:40px;"></div>
                                <h3 class="framework-title">Flexible Payouts</h3>
                            </div>
                            <p class="framework-description">Options to reinvest gains for compounding growth or receive profit distributions based on investor preferences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section" id="technology">
        <div class="technology-container">
            <h2 class="technology-main-title">Sovera: Our Proprietary Technology Backbone</h2>
            <div class="technology-divider"></div>
            <p class="technology-subtitle">SOVFund is powered by Sovera, our in-house leading technology suite, providing secure and efficient fund management solutions.</p>
            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/slide arreo icon.png" alt="" style="width:40px;"></span>
                    <h3 class="feature-title">Private Exchange</h3>
                    <p class="feature-description">Seamless trading, custody, and client management with institutional-grade security protocols.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/card.png" alt="" style="width:40px;"></span>
                    <h3 class="feature-title">Enterprise Payments</h3>
                    <p class="feature-description">Global issuance of cards for effortless digital and real-world payments with seamless integration.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/lock.png" alt="" style="width:40px;"></span>
                    <h3 class="feature-title">Smart Treasury</h3>
                    <p class="feature-description">Secure and efficient global payments on and off-ramps with advanced risk management tools.</p>
                </div>
            </div>
            <p class="bottom-text">This integrated platform ensures robust operations, security, and superior investor experience across all fund activities.</p>
            <div class="platform-section">
                <span class="platform-icon"><img src="<?php echo get_template_directory_uri(); ?>/asset/Group 8.png" alt="" style="width:80px;"></span>
                <h2 class="platform-title">Sovera Platform Interface</h2>
                <p class="platform-description">Comprehensive dashboard for fund management and investor reporting</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="background-pattern"></div>
        <div class="contact-particles" id="contact-particles"></div>
        <div class="contact-container">
            <h2 class="contact-main-title">Partner with SOVFund. Secure Your Tomorrow.</h2>
            <div class="contact-divider"></div>
            <div class="contact-card">
                <h2 class="contact-title">Get in Touch</h2>
                <p class="contact-description">Ready to explore how SOVFund can elevate your portfolio in the fastest-growing digital sectors? Connect with our team to learn more about this exclusive opportunity.</p>
                <div class="contact-info">
                    <a href="mailto:info@troonlabs.io" class="contact-email">
                        <span class="contact-email-icon">📧</span>
                        <span class="contact-email-text">info@troonlabs.io</span>
                    </a>
                </div>
            </div>
            <!-- Location Section -->
            <div class="location-section">
                <h2 class="location-title">Our Global Presence</h2>
                <div class="locations-grid">
                    <div class="location-card">
                        <div class="location-image-placeholder">🏙️</div>
                        <h3 class="location-name">Panama</h3>
                        <p class="location-subtitle">Strategic Gateway to Latin America</p>
                    </div>
                    <div class="location-card">
                        <div class="location-image-placeholder">🏛️</div>
                        <h3 class="location-name">Abu Dhabi</h3>
                        <p class="location-subtitle">Middle East Financial Hub</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
