<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package EdTech_2026
 */

get_header();
?>

<style>
/* ==========================================================================
   404 Cyber Portal Styles
   ========================================================================== */
.cyber-404-section {
    position: relative;
    min-height: 85vh;
    padding: 160px 24px 100px 24px;
    background: radial-gradient(circle at 50% 25%, rgba(104, 189, 70, 0.06) 0%, rgba(255, 255, 255, 1) 60%), #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    box-sizing: border-box;
    text-align: center;
}

/* Background Cyber Grid lines */
.cyber-404-bg-grid {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(0, 43, 94, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 43, 94, 0.03) 1px, transparent 1px);
    background-size: 50px 50px;
    background-position: center center;
    pointer-events: none;
    z-index: 1;
}

.cyber-404-container {
    position: relative;
    z-index: 2;
    max-width: 820px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Radar & Shield Visual Animation */
.cyber-404-visual-wrap {
    position: relative;
    width: 180px;
    height: 180px;
    margin: 0 auto 25px auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cyber-404-outer-ring {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px dashed rgba(104, 189, 70, 0.35);
    animation: rotate404Ring 20s linear infinite;
}

.cyber-404-pulse-ring {
    position: absolute;
    inset: 15px;
    border-radius: 50%;
    border: 1.5px solid rgba(0, 43, 94, 0.12);
    animation: pulse404Glow 3s ease-in-out infinite;
}

.cyber-404-icon-box {
    width: 90px;
    height: 90px;
    border-radius: 28px;
    background: linear-gradient(135deg, #002b5e 0%, #001f44 100%);
    border: 2px solid #68BD46;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 38px;
    color: #68BD46;
    box-shadow: 0 10px 30px rgba(0, 43, 94, 0.25), 0 0 25px rgba(104, 189, 70, 0.35);
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease;
}

.cyber-404-icon-box:hover {
    transform: scale(1.05);
}

@keyframes rotate404Ring {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes pulse404Glow {
    0%, 100% {
        transform: scale(1);
        opacity: 0.5;
        border-color: rgba(0, 43, 94, 0.12);
    }
    50% {
        transform: scale(1.08);
        opacity: 0.9;
        border-color: rgba(104, 189, 70, 0.6);
        box-shadow: 0 0 20px rgba(104, 189, 70, 0.2);
    }
}

/* 404 Status Pill Badge */
.cyber-404-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(104, 189, 70, 0.1);
    border: 1.5px solid rgba(104, 189, 70, 0.4);
    padding: 6px 18px;
    border-radius: 30px;
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 11.5px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #002b5e;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.cyber-404-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #ef4444;
    box-shadow: 0 0 10px #ef4444;
    animation: blink404Dot 1.2s infinite ease-in-out;
}

@keyframes blink404Dot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.3; transform: scale(0.8); }
}

/* Giant 404 Typography */
.cyber-404-glitch-title {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 96px;
    font-weight: 900;
    line-height: 0.95;
    letter-spacing: -3px;
    color: #002b5e;
    margin: 0 0 16px 0;
    background: linear-gradient(135deg, #002b5e 40%, #68BD46 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 10px 40px rgba(0, 43, 94, 0.08);
}

.cyber-404-heading {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 28px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 14px 0;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

.cyber-404-desc {
    font-family: var(--font-body, 'Inter', sans-serif);
    font-size: 16px;
    line-height: 1.65;
    color: #5e7290;
    max-width: 580px;
    margin: 0 auto 36px auto;
}

/* Action Buttons Group */
.cyber-404-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.cyber-404-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 30px;
    border-radius: 50px;
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
    box-sizing: border-box;
}

.cyber-404-btn.primary {
    background: #002b5e;
    color: #ffffff;
    border: 2px solid #002b5e;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.2);
}

.cyber-404-btn.primary:hover {
    background: #68BD46;
    border-color: #68BD46;
    color: #002b5e;
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(104, 189, 70, 0.35);
}

.cyber-404-btn.secondary {
    background: #ffffff;
    color: #002b5e;
    border: 2px solid rgba(0, 43, 94, 0.15);
    box-shadow: 0 4px 14px rgba(0, 43, 94, 0.05);
}

.cyber-404-btn.secondary:hover {
    border-color: #68BD46;
    color: #002b5e;
    background: rgba(104, 189, 70, 0.06);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 43, 94, 0.08);
}

.cyber-404-btn i {
    font-size: 14px;
    transition: transform 0.3s ease;
}

.cyber-404-btn:hover i {
    transform: translateX(4px);
}

.cyber-404-btn.primary:hover i {
    color: #002b5e;
}

/* Quick Helpful Portal Links */
.cyber-404-quick-links {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    padding-top: 24px;
    border-top: 1px solid rgba(0, 43, 94, 0.08);
    width: 100%;
    max-width: 550px;
}

.cyber-404-quick-label {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 12px;
    font-weight: 800;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.cyber-404-pill-link {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 12px;
    font-weight: 700;
    color: #002b5e;
    background: rgba(0, 43, 94, 0.04);
    padding: 6px 14px;
    border-radius: 20px;
    border: 1px solid rgba(0, 43, 94, 0.08);
    text-decoration: none;
    transition: all 0.25s ease;
}

.cyber-404-pill-link:hover {
    background: #002b5e;
    color: #ffffff;
    border-color: #002b5e;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .cyber-404-section {
        padding: 130px 20px 80px 20px;
        min-height: 75vh;
    }
    .cyber-404-glitch-title {
        font-size: 72px;
    }
    .cyber-404-heading {
        font-size: 22px;
    }
    .cyber-404-desc {
        font-size: 14.5px;
    }
    .cyber-404-actions {
        flex-direction: column;
        width: 100%;
    }
    .cyber-404-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<main id="primary" class="site-main">
    <section class="cyber-404-section">
        <div class="cyber-404-bg-grid"></div>

        <div class="cyber-404-container">
            <!-- Animated Radar / Cyber Shield -->
            <div class="cyber-404-visual-wrap">
                <div class="cyber-404-outer-ring"></div>
                <div class="cyber-404-pulse-ring"></div>
                <div class="cyber-404-icon-box">
                    <i class="fas fa-shield-virus"></i>
                </div>
            </div>

            <!-- Status Indicator Badge -->
            <div class="cyber-404-badge">
                <span class="cyber-404-dot"></span>
                <span>STATUS: 404 // COORDINATE NOT FOUND</span>
            </div>

            <!-- Main Heading -->
            <h1 class="cyber-404-glitch-title">404</h1>
            <h2 class="cyber-404-heading">Access Node Unreachable</h2>
            <p class="cyber-404-desc">
                The URL coordinate you requested does not exist, has been relocated, or is restricted. Return to the main portal or register for the summit below.
            </p>

            <!-- Navigation Buttons -->
            <div class="cyber-404-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cyber-404-btn primary">
                    <i class="fas fa-home"></i>
                    <span>Return to Homepage</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/register' ) ); ?>" class="cyber-404-btn secondary">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Register for Summit</span>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="cyber-404-quick-links">
                <span class="cyber-404-quick-label">Quick Links:</span>
                <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="cyber-404-pill-link">About Summit</a>
                <a href="<?php echo esc_url( home_url( '/#schedule' ) ); ?>" class="cyber-404-pill-link">Agenda</a>
                <a href="<?php echo esc_url( home_url( '/#speakers' ) ); ?>" class="cyber-404-pill-link">Speakers</a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="cyber-404-pill-link">Contact</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
