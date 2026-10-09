<?php
/**
 * Template Name: Front Page
 * Description: Homepage template for Ed-Tech Cybersecurity Symposium & Awards 2026
 * 
 * @package EdTech_2026
 */

get_header();

$theme_uri     = get_template_directory_uri();
$register_url  = home_url('/register');
?>

<!-- 2. Scroll-Driven Hero Sticky Wrapper (Provides headroom for cinematic parallax) -->
<div class="hero-scroll-container">
    <section class="summit-hero" id="hero">
        <!-- Full-screen Background Image Banner -->
        <div class="hero-video-wrapper">
            <img src="<?php echo esc_url( $theme_uri . '/images/Option 8.jpg.jpeg' ); ?>" alt="Ed-Tech Cybersecurity Summit 2026" class="hero-bg-img">
            <div class="hero-video-overlay"></div>
        </div>

        <!-- Floating Non-Intrusive Hero Glass Box (Bottom Left) -->
        <div class="hero-glass-box">
            <div class="hero-glass-badge">
                <span class="glass-glow-dot"></span>
                <span>CYBERSECURITY &amp; TECHNOLOGY SYMPOSIUM</span>
            </div>
            <h1 class="hero-glass-title">
                Where Education Leaders Meet <br><span>Cybersecurity, Technology &amp; Resilience</span>
            </h1>
        </div>

        <!-- Bottom Right Interactive Event Capsules -->
        <div class="hero-glass-details-right">
            <div class="hero-glass-detail-item date-highlight-capsule" role="button" tabindex="0">
                <div class="detail-icon-wrap green-icon"><i class="fas fa-calendar-days"></i></div>
                <div class="detail-text-wrap">
                    <span class="detail-label">EVENT DATE</span>
                    <span class="detail-val">30 October 2026</span>
                </div>
            </div>
            <div class="hero-glass-detail-item location-highlight-capsule" role="button" tabindex="0">
                <div class="detail-icon-wrap gold-icon"><i class="fas fa-location-dot"></i></div>
                <div class="detail-text-wrap">
                    <span class="detail-label">LOCATION &amp; VENUE</span>
                    <span class="detail-val">Dubai <span class="venue-sub">| Shangri-La Dubai</span></span>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- 3. Clean Stats & Performance Section -->
<section class="space-warp-section" id="warpSection">
    <div class="warp-section-content reveal-element reveal-fade-up">
        <!-- 4 Statistics Counters -->
        <div class="stats-counter-container" id="statsContainer">
            <div class="stat-counter-card">
                <div class="stat-number-wrap">
                    <span class="stat-number" data-target="100">0</span><span class="stat-suffix">+</span>
                </div>
                <span class="stat-label">Education Leaders</span>
            </div>

            <div class="stat-counter-card">
                <div class="stat-number-wrap">
                    <span class="stat-number" data-target="5">0</span><span class="stat-suffix">+</span>
                </div>
                <span class="stat-label">Expert Speakers</span>
            </div>

            <div class="stat-counter-card">
                <div class="stat-number-wrap">
                    <span class="stat-number" data-target="5">0</span><span class="stat-suffix">+</span>
                </div>
                <span class="stat-label">Sessions</span>
            </div>

            <div class="stat-counter-card">
                <div class="stat-number-wrap">
                    <span class="stat-number" data-target="10">0</span>
                </div>
                <span class="stat-label">Awards</span>
            </div>
        </div>

        <!-- Action CTAs -->
        <div class="warp-cta-group">
            <a href="<?php echo esc_url( $register_url ); ?>" class="warp-cta-btn primary" id="warpRequestBtn">
                <i class="fas fa-shield-halved"></i>
                <span>REGISTER EVENT</span>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#aboutSection" class="warp-cta-btn secondary">
                <span>EXPLORE THE SUMMIT</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Description -->
        <div class="box-description" style="margin-top: 24px;">
            <p>An exclusive cybersecurity and technology gathering for the education sector.</p>
        </div>
    </div>
</section>

<!-- 4. Premium Bright About Summit Section -->
<section class="about-summit-section" id="aboutSection">
    <div class="about-container">
        <div class="about-grid">
            
            <!-- Left Column: Content & Overview -->
            <div class="about-content-col">
                <span class="about-tag reveal-element reveal-fade-up">EVENT OVERVIEW</span>
                <h2 class="about-title reveal-element reveal-fade-up">The Future of Education<br><span>Must Be Secure</span></h2>
                <p class="about-desc reveal-element reveal-fade-up">
                    Ed-Tech Cybersecurity Symposium &amp; Awards 2026 brings together education leaders, cybersecurity experts, technology providers and key stakeholders to examine how schools and educational institutions can identify, manage and respond to cyber risk.
                </p>
            </div>
            
            <!-- Right Column: Premium Frame with images/new about.jpeg -->
            <div class="about-image-col">
                <div class="about-image-wrapper reveal-element reveal-image-mask">
                    <img src="<?php echo esc_url( $theme_uri . '/images/new about.jpeg' ); ?>" alt="Secure Foundations for Next-Gen Education" class="about-img">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 5. Official Government Crest & Regulatory Emblem Showcase Section -->
<section class="action-summit-section" id="actionSection">
    <div class="action-sticky-container">
        <div class="action-container">
            
            <!-- Section Header (Centered) -->
            <div class="governance-header reveal-element reveal-fade-up">
                <div class="action-subtitle-pill">
                    <span class="pulse-dot-gold"></span>
                    <span class="action-subtitle">STRATEGIC GOVERNANCE &amp; RESILIENCE</span>
                </div>
                <h2 class="governance-main-title">A Conversation That Goes <span class="action-title-highlight">Beyond Technology</span></h2>
                <p class="governance-lead-desc">Hear perspectives from key stakeholders shaping the future of education, safety, compliance and digital resilience.</p>
            </div>

            <!-- State-Level Government Crest & Authority Showcase Grid -->
            <div class="authority-crest-showcase reveal-element reveal-fade-up">
                <div class="authority-crest-grid">
                    
                    <!-- Emblem Card 1: KHDA -->
                    <div class="emblem-card crest-gold">
                        <div class="emblem-top-row">
                            <div class="emblem-icon-ring">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <span class="emblem-status-tag gold-status">Government Authority</span>
                        </div>
                        <div class="emblem-content">
                            <h3 class="emblem-title">KHDA</h3>
                            <span class="emblem-subtitle">Knowledge and Human Development Authority</span>
                            <p class="emblem-desc">Shaping quality education, governance, institutional standards, and academic excellence across Dubai.</p>
                        </div>
                        <div class="emblem-footer-strip">
                            <i class="fas fa-certificate"></i>
                            <span>Dubai Institutional Governance</span>
                        </div>
                    </div>

                    <!-- Emblem Card 2: Ministry of Education -->
                    <div class="emblem-card crest-cyan">
                        <div class="emblem-top-row">
                            <div class="emblem-icon-ring">
                                <i class="fas fa-building-columns"></i>
                            </div>
                            <span class="emblem-status-tag cyan-status">Federal Ministry</span>
                        </div>
                        <div class="emblem-content">
                            <h3 class="emblem-title">Ministry of Education</h3>
                            <span class="emblem-subtitle">United Arab Emirates</span>
                            <p class="emblem-desc">Establishing national digital resilience, cyber safety, and next-generation educational frameworks across the UAE.</p>
                        </div>
                        <div class="emblem-footer-strip">
                            <i class="fas fa-award"></i>
                            <span>UAE Federal Frameworks</span>
                        </div>
                    </div>

                    <!-- Emblem Card 3: Dubai Police -->
                    <div class="emblem-card crest-emerald">
                        <div class="emblem-top-row">
                            <div class="emblem-icon-ring">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <span class="emblem-status-tag emerald-status">Safety &amp; Compliance</span>
                        </div>
                        <div class="emblem-content">
                            <h3 class="emblem-title">Dubai Police</h3>
                            <span class="emblem-subtitle">Government of Dubai</span>
                            <p class="emblem-desc">Safeguarding digital infrastructure, student data protection, cyber safety enforcement, and sector compliance.</p>
                        </div>
                        <div class="emblem-footer-strip">
                            <i class="fas fa-user-shield"></i>
                            <span>Cyber Safety &amp; Enforcement</span>
                        </div>
                    </div>

                    <!-- Emblem Card 4: Sector Decision-Makers -->
                    <div class="emblem-card crest-purple">
                        <div class="emblem-top-row">
                            <div class="emblem-icon-ring">
                                <i class="fas fa-users-gear"></i>
                            </div>
                            <span class="emblem-status-tag purple-status">Sector Leaders</span>
                        </div>
                        <div class="emblem-content">
                            <h3 class="emblem-title">Sector Decision-Makers</h3>
                            <span class="emblem-subtitle">Institutional Leadership</span>
                            <p class="emblem-desc">Education Leaders, School Management, IT &amp; Security Heads, and Technology Compliance Teams driving transformation.</p>
                        </div>
                        <div class="emblem-footer-strip">
                            <i class="fas fa-network-wired"></i>
                            <span>Educational Leadership</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Audience / Attendee Flow Network -->
            <div class="attendee-pills-wrapper reveal-element reveal-fade-up">
                <!-- Central Node Badge with Outer Glowing Frame -->
                <div class="attendee-badge-node">
                    <div class="badge-outer-ring">
                        <span class="attendee-badge">IN THE PRESENCE OF &amp; JOINED BY</span>
                        <span class="badge-node-dot dot-top-1"></span>
                        <span class="badge-node-dot dot-top-2"></span>
                        <span class="badge-node-dot dot-top-3"></span>
                        <span class="badge-node-dot dot-top-4"></span>
                        <span class="badge-node-dot dot-top-5"></span>
                    </div>
                </div>

                <!-- Animated Flowing Glowing Lines Container -->
                <div class="attendee-flow-lines-wrapper">
                    <svg class="attendee-flow-svg" viewBox="0 0 1000 85" preserveAspectRatio="none">
                        <path class="flow-line-back" d="M 240 0 C 240 50, 100 30, 100 85" />
                        <path class="flow-line-back" d="M 370 0 C 370 55, 300 35, 300 85" />
                        <path class="flow-line-back" d="M 500 0 C 500 35, 500 55, 500 85" />
                        <path class="flow-line-back" d="M 630 0 C 630 55, 700 35, 700 85" />
                        <path class="flow-line-back" d="M 760 0 C 760 50, 900 30, 900 85" />

                        <path class="flow-line-pulse pulse-1" d="M 240 0 C 240 50, 100 30, 100 85" />
                        <path class="flow-line-pulse pulse-2" d="M 370 0 C 370 55, 300 35, 300 85" />
                        <path class="flow-line-pulse pulse-3" d="M 500 0 C 500 35, 500 55, 500 85" />
                        <path class="flow-line-pulse pulse-4" d="M 630 0 C 630 55, 700 35, 700 85" />
                        <path class="flow-line-pulse pulse-5" d="M 760 0 C 760 50, 900 30, 900 85" />
                    </svg>
                </div>

                <!-- 5 Attendee Items Row with Icon Circles -->
                <div class="attendee-pills-grid">
                    <div class="attendee-pill-card card-1">
                        <div class="attendee-pill">
                            <div class="pill-icon-circle"><i class="fas fa-graduation-cap"></i></div>
                            <span>Education Leaders</span>
                        </div>
                    </div>
                    <div class="attendee-pill-card card-2">
                        <div class="attendee-pill">
                            <div class="pill-icon-circle"><i class="fas fa-users"></i></div>
                            <span>School Management</span>
                        </div>
                    </div>
                    <div class="attendee-pill-card card-3">
                        <div class="attendee-pill">
                            <div class="pill-icon-circle"><i class="fas fa-user-shield"></i></div>
                            <span>IT &amp; Security Leaders</span>
                        </div>
                    </div>
                    <div class="attendee-pill-card card-4">
                        <div class="attendee-pill">
                            <div class="pill-icon-circle"><i class="fas fa-clipboard-check"></i></div>
                            <span>Compliance Teams</span>
                        </div>
                    </div>
                    <div class="attendee-pill-card card-5">
                        <div class="attendee-pill">
                            <div class="pill-icon-circle"><i class="fas fa-microchip"></i></div>
                            <span>Technology Decision-Makers</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 6. Interactive Event Partners Section -->
<section class="event-partners-section" id="eventPartnersSection">
    <div class="partners-container">
        <div class="partners-header reveal-element reveal-fade-up">
            <span class="partners-tag">EVENT PARTNERS</span>
            <h2 class="partners-title">Powered by <span>Industry Expertise</span></h2>
            <p class="partners-lead">Collaborating with global cybersecurity and technology pioneers to drive educational resilience.</p>
        </div>

        <!-- Dedicated Partner Ticker Marquee Strip -->
        <div class="partner-marquee-wrapper reveal-element reveal-fade-up">
            <div class="partner-marquee-track">
                <!-- Track Set 1 -->
                <div class="partner-scroll-card featured">
                    <span class="partner-card-badge">Co-Host</span>
                    <div class="partner-card-icon"><i class="fas fa-shield-halved"></i></div>
                    <span class="partner-card-name">Guardian One Technologies</span>
                </div>
                <div class="partner-scroll-card featured">
                    <span class="partner-card-badge">MDR Partner</span>
                    <div class="partner-card-icon"><i class="fas fa-network-wired"></i></div>
                    <span class="partner-card-name">Sangfor</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-print"></i></div>
                    <span class="partner-card-name">Epson</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-atom"></i></div>
                    <span class="partner-card-name">Quantum Edge</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-diagram-project"></i></div>
                    <span class="partner-card-name">TechBridge Distribution</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-cubes"></i></div>
                    <span class="partner-card-name">Mindware</span>
                </div>

                <!-- Track Set 2 (Exact Duplicate for Infinite Loop) -->
                <div class="partner-scroll-card featured">
                    <span class="partner-card-badge">Co-Host</span>
                    <div class="partner-card-icon"><i class="fas fa-shield-halved"></i></div>
                    <span class="partner-card-name">Guardian One Technologies</span>
                </div>
                <div class="partner-scroll-card featured">
                    <span class="partner-card-badge">MDR Partner</span>
                    <div class="partner-card-icon"><i class="fas fa-network-wired"></i></div>
                    <span class="partner-card-name">Sangfor</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-print"></i></div>
                    <span class="partner-card-name">Epson</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-atom"></i></div>
                    <span class="partner-card-name">Quantum Edge</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-diagram-project"></i></div>
                    <span class="partner-card-name">TechBridge Distribution</span>
                </div>
                <div class="partner-scroll-card">
                    <div class="partner-card-icon"><i class="fas fa-cubes"></i></div>
                    <span class="partner-card-name">Mindware</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 7. Premium Technology Experience Zone Section -->
<section class="performance-stats-section" id="statsPerformanceSection">
    <div class="exp-bg-blob-1"></div>
    <div class="exp-bg-blob-2"></div>
    
    <div class="exp-section-container">
        
        <!-- Top Grid: Left Copy & Right Double-Circle Composition -->
        <div class="exp-top-grid reveal-element reveal-fade-up">
            
            <!-- Left Column: Typography & Content -->
            <div class="exp-text-col">
                <div class="exp-tag-pill">
                    <span class="exp-tag-line"></span>
                    <span>LIVE EXPERIENCE / STALLS</span>
                </div>

                <h2 class="exp-hero-heading">
                    Experience the<br>
                    <span class="exp-green-highlight">Technology.</span><br>
                    Meet the Experts.
                </h2>

                <h3 class="exp-tagline-sub">The Technology Experience Zone</h3>

                <p class="exp-lead-text">
                    Step beyond the conference room. Meet our technology partners, explore live demonstrations and discover solutions designed to address real challenges across the education environment.
                </p>

                <p class="exp-bold-callout">
                    See the technology. Ask the questions. Explore the possibilities.
                </p>
            </div>

            <!-- Right Column: Dual Circle Composite Frame -->
            <div class="exp-visual-col">
                <div class="exp-composite-wrapper">
                    <div class="exp-green-arch-ring"></div>

                    <!-- Main Large Circle Frame -->
                    <div class="exp-main-circle-frame">
                        <img src="<?php echo esc_url( $theme_uri . '/images/Image 3.jpg' ); ?>" alt="Technology Experience Zone" class="exp-main-circle-img">
                    </div>

                    <!-- Secondary Overlapping Small Circle Frame -->
                    <div class="exp-secondary-circle-frame">
                        <img src="<?php echo esc_url( $theme_uri . '/images/Image 4.jpg' ); ?>" alt="Live Demos Showcase" class="exp-secondary-circle-img">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 8. Speakers Section -->
<section class="speakers-section" id="speakersSection">
    <div class="speakers-container">
        <!-- Section Header -->
        <div class="speakers-header reveal-element reveal-fade-up">
            <span class="speakers-tag">KEY NOTE &amp; PANELISTS</span>
            <h2 class="speakers-title">Meet the Experts <span>Shaping the Conversation</span></h2>
            <p class="speakers-lead">
                Different perspectives. One shared priority: building safer, more resilient education environments.
            </p>
        </div>

        <!-- Speaker Cards Grid -->
        <div class="speakers-grid reveal-element reveal-fade-up">
            <!-- Speaker Card 1 -->
            <div class="speaker-card demo-card">
                <div class="speaker-image-frame">
                    <div class="speaker-avatar-placeholder">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <span class="speaker-status-badge">Upcoming Speaker</span>
                </div>
                <div class="speaker-info">
                    <h3 class="speaker-name">Speaker Name</h3>
                    <p class="speaker-designation">Designation / Title</p>
                    <p class="speaker-org"><i class="fas fa-building-columns"></i> Organisation / Institution</p>
                </div>
            </div>

            <!-- Speaker Card 2 -->
            <div class="speaker-card demo-card">
                <div class="speaker-image-frame">
                    <div class="speaker-avatar-placeholder">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <span class="speaker-status-badge">Upcoming Speaker</span>
                </div>
                <div class="speaker-info">
                    <h3 class="speaker-name">Speaker Name</h3>
                    <p class="speaker-designation">Designation / Title</p>
                    <p class="speaker-org"><i class="fas fa-building-columns"></i> Organisation / Institution</p>
                </div>
            </div>

            <!-- Speaker Card 3 -->
            <div class="speaker-card demo-card">
                <div class="speaker-image-frame">
                    <div class="speaker-avatar-placeholder">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <span class="speaker-status-badge">Upcoming Speaker</span>
                </div>
                <div class="speaker-info">
                    <h3 class="speaker-name">Speaker Name</h3>
                    <p class="speaker-designation">Designation / Title</p>
                    <p class="speaker-org"><i class="fas fa-building-columns"></i> Organisation / Institution</p>
                </div>
            </div>
        </div>

        <!-- Footer Action & Coming Soon Tag -->
        <div class="speakers-footer reveal-element reveal-fade-up">
            <button class="speakers-cta-btn" id="exploreSpeakersBtn">
                <span>EXPLORE THE SPEAKERS</span>
                <i class="fas fa-arrow-right"></i>
            </button>
            <p class="speakers-coming-soon"><i class="fas fa-clock"></i> Speaker announcements coming soon.</p>
        </div>
    </div>
</section>

<!-- 9. Interactive Event Schedule Section -->
<section class="event-schedule-section" id="scheduleSection">
    <div class="schedule-container">
        <!-- Section Header -->
        <div class="schedule-header reveal-element reveal-fade-up">
            <span class="schedule-tag">PROGRAM &amp; HIGHLIGHTS</span>
            <h2 class="schedule-title">Event <span>Schedule</span></h2>
            <p class="schedule-lead">Click any topic below to explore keynote sessions, agenda, awards, and panel discussions.</p>
        </div>

        <!-- Centered Top Horizontal Pill Capsule Filter Bar & Click Callout -->
        <div class="schedule-capsule-wrapper reveal-element reveal-fade-up">
            <div class="schedule-click-hint">
                <span class="hint-pulse-dot"></span>
                <i class="fas fa-hand-pointer"></i>
                <span>CLICK ANY TAB BELOW TO VIEW DETAILS</span>
                <i class="fas fa-chevron-down hint-arrow-anim"></i>
            </div>

            <div class="schedule-top-capsule-bar">
                <button class="schedule-pill-btn" data-tab="agenda">
                    <span class="pill-icon-box"><i class="fas fa-calendar-check"></i></span>
                    <span class="pill-text">Agenda</span>
                    <span class="pill-open-icon"><i class="fas fa-up-right-from-square"></i></span>
                </button>
                <button class="schedule-pill-btn" data-tab="awards">
                    <span class="pill-icon-box"><i class="fas fa-trophy"></i></span>
                    <span class="pill-text">Awards</span>
                    <span class="pill-open-icon"><i class="fas fa-up-right-from-square"></i></span>
                </button>
                <button class="schedule-pill-btn" data-tab="panel-discussion">
                    <span class="pill-icon-box"><i class="fas fa-comments"></i></span>
                    <span class="pill-text">Panel Discussion</span>
                    <span class="pill-open-icon"><i class="fas fa-up-right-from-square"></i></span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Popup Modal Overlay for Schedule Content Panes -->
<div class="schedule-modal-overlay" id="scheduleModalOverlay" aria-hidden="true">
    <div class="schedule-modal-container">
        <button class="schedule-modal-close" id="scheduleModalClose" aria-label="Close popup modal">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="schedule-modal-body">
            <!-- Pane 1: AGENDA (Official Schedule) -->
            <div class="schedule-pane active" id="pane-agenda">
                <div class="coming-soon-teaser-card">

                    <div class="coming-soon-badge-ring">
                        <i class="fas fa-calendar-check"></i>
                    </div>

                    <h3 class="coming-soon-title">EVENT AGENDA</h3>

                    <p class="coming-soon-desc">
                        30 OCTOBER 2026, SHANGRI-LA DUBAI
                    </p>

                    <div class="event-agenda-list">

                        <div class="agenda-item">
                            <span class="agenda-time">3:00 PM - 4:00 PM</span>
                            <span class="agenda-title">NETWORKING &amp; REGISTRATION</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">4:00 PM - 4:05 PM</span>
                            <span class="agenda-title">WELCOME NOTE</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">4:10 PM - 4:25 PM</span>
                            <span class="agenda-title">PRESENTATION 1</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">4:30 PM - 4:45 PM</span>
                            <span class="agenda-title">PRESENTATION 2</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">4:45 PM - 4:50 PM</span>
                            <span class="agenda-title">SURPRISE TIME</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">4:50 PM - 5:10 PM</span>
                            <span class="agenda-title">PANEL DISCUSSION 1</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">5:40 PM - 5:55 PM</span>
                            <span class="agenda-title">PRESENTATION 3</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">6:00 PM - 6:30 PM</span>
                            <span class="agenda-title">
                                OFFICIAL LAUNCH<br>
                                GUARDIAN ONE WITH SANGFOR
                            </span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">6:30 PM - 7:00 PM</span>
                            <span class="agenda-title">AWARDS CEREMONY</span>
                        </div>

                        <div class="agenda-item">
                            <span class="agenda-time">7:00 PM</span>
                            <span class="agenda-title">DINNER</span>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Pane 2: AWARDS (10 Industry Awards Content & CTA) -->
            <div class="schedule-pane" id="pane-awards">
                <div class="awards-pane-wrapper">
                    <div class="awards-hero-card">
                        <div class="awards-trophy-ring">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="awards-main-title">10 Industry Awards</h3>
                        <p class="awards-main-desc">
                            Recognising institutions, professionals and technology-driven achievements across the education sector.
                        </p>
                        <button class="awards-cta-btn" id="viewAwardCategoriesBtn">
                            <span>VIEW AWARD CATEGORIES</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pane 3: PANEL DISCUSSION (Coming Soon) -->
            <div class="schedule-pane" id="pane-panel-discussion">
                <div class="coming-soon-teaser-card">
                    <div class="coming-soon-badge-ring">
                        <i class="fas fa-comments"></i>
                    </div>
                    <span class="coming-soon-pill">COMING SOON</span>
                    <h3 class="coming-soon-title">Panel Discussions</h3>
                    <p class="coming-soon-desc">Executive panel discussion lineups, moderator announcements, and topic breakdowns will be published soon.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 10. Ed-Tech Cybersecurity Symposium & Awards Section -->
<section class="mdr-video-section" id="mdrVideoSection">
    <div class="awards-split-container">
        <div class="awards-split-grid">
            
            <!-- Left Column: Image Showcase -->
            <div class="awards-image-col reveal-element reveal-fade-up">
                <div class="awards-image-wrapper">
                    <img src="<?php echo esc_url( $theme_uri . '/images/Image 7.7.png' ); ?>" alt="Ed-Tech Cybersecurity Symposium &amp; Awards 2026" class="awards-split-img">
                    <div class="awards-floating-badge">
                        <i class="fas fa-trophy"></i>
                        <span>10 INDUSTRY AWARDS</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Content & CTAs -->
            <div class="awards-content-col reveal-element reveal-fade-up">
                <div class="awards-tag-pill">
                    <span class="awards-tag-dot"></span>
                    <span class="awards-tag-text">10 INDUSTRY AWARDS</span>
                </div>

                <h2 class="awards-section-title">
                    Ed-Tech Cybersecurity<br>
                    <span>Symposium &amp; Awards</span> 2026
                </h2>

                <p class="awards-section-desc">
                    The awards celebrate the organisations, professionals and technology-driven initiatives making a meaningful difference across the education sector.
                </p>

                <p class="awards-section-desc">
                    From stronger cybersecurity practices and digital transformation to innovative technology adoption, these awards spotlight the achievements shaping safer, smarter and more resilient education environments.
                </p>

                <div class="awards-section-ctas">
                    <a href="#scheduleSection" class="awards-cta-primary">
                        <span>EXPLORE THE AWARDS</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <button class="awards-cta-secondary" id="nominateNowBtn">
                        <i class="fas fa-trophy"></i>
                        <span>NOMINATE NOW</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 11. Futuristic Cybersecurity / Education Section -->
<section class="cyber-risk-section" id="cyberRiskSection">
    <div class="cyber-risk-bg-spotlights"></div>
    <div class="section-wrapper">
        <div class="cyber-risk-img-container reveal-element reveal-fade-up revealed">
            <img src="<?php echo esc_url( $theme_uri . '/images/cyber-risk-section-img.png' ); ?>" alt="Ed-Tech Cybersecurity &amp; Technology Symposium 2026" class="cyber-risk-full-img">
        </div>
    </div>
</section>

<!-- 12. Centered Standalone FAQ Section -->
<section class="standalone-faq-section" id="faqSection">
    <canvas id="ceoWavyCanvas"></canvas>

    <div class="faq-bg-decorations" aria-hidden="true">
        <div class="faq-dot-grid top-left"></div>
        <div class="faq-dot-grid bottom-right"></div>
        <div class="faq-globe-watermark"></div>
    </div>

    <div class="faq-section-container">
        <!-- Centered Header -->
        <div class="faq-section-header reveal-element reveal-fade-up">
            <span class="faq-section-tag">FAQ</span>
            <h2 class="faq-section-title">Frequently Asked <span>Questions</span></h2>
            <p class="faq-section-subtitle">Find quick answers to common questions about the event.</p>
            <p class="faq-section-subhelp">Still need help? Feel free to contact our team.</p>
        </div>

        <!-- Centered Accordion FAQs List -->
        <div class="faq-centered-wrapper reveal-element reveal-fade-up">
            <div class="combined-faq-list">
                <!-- Item 1: Who can attend? -->
                <div class="faq-item bar-green">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-green">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <span class="faq-question">Who can attend?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>Ed-Tech Cybersecurity Symposium &amp; Awards 2026 is designed exclusively for education-sector professionals, decision-makers, technology leaders and relevant stakeholders.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2: When is the event? -->
                <div class="faq-item bar-green">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-blue">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <span class="faq-question">When is the event?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>30 October 2026.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Where is the event? -->
                <div class="faq-item bar-green">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-green">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="faq-question">Where is the event?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>Dubai | Shangri-La Dubai.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 4: How many people are expected? -->
                <div class="faq-item bar-blue">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-blue">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <span class="faq-question">How many people are expected?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>The symposium is expected to bring together 100+ attendees from across the education ecosystem.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Will there be live technology demonstrations? -->
                <div class="faq-item bar-green">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-green">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <span class="faq-question">Will there be live technology demonstrations?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>Yes. Attendees will have the opportunity to explore technology showcases and live experiences from participating event partners.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Will the event include awards? -->
                <div class="faq-item bar-blue">
                    <button class="faq-trigger" aria-expanded="false">
                        <div class="faq-card-icon icon-blue">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <span class="faq-question">Will the event include awards?</span>
                        <span class="faq-chevron-wrap">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner">
                            <p>Yes. The event will feature 10 awards recognising achievements and contributions across the education sector.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
