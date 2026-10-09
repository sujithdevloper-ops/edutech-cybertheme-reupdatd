<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edtech security Summit 2026 - Bridging the gap between defense and innovation.">
    <title>Edtech security Summit 2026</title>
    <!-- FontAwesome for Premium Tech Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Odometer CSS for Falling Numbers -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css">
    <!-- Custom Style Sheet -->
    <style>
/* 
   EduCyberSecurity Summit 2026 - Modern CSS Design System
   Primary Color: #002b5e (Deep Navy Blue)
   Secondary Color: #68BD46 (Vibrant Green)
*/

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

:root {
    /* Color Palette */
    --color-primary: #002b5e;
    --color-primary-rgb: 0, 43, 94;
    --color-secondary: #68BD46;
    --color-secondary-rgb: 104, 189, 70;
    
    /* Bright Theme Neutrals */
    --color-bg-primary: #ffffff;
    --color-bg-secondary: #f8fafc;
    --color-bg-tertiary: #f1f5f9;
    --color-text-main: #002b5e;
    --color-text-muted: #5e7290;
    --color-text-light: #94a3b8;
    --color-border: #e2e8f0;
    
    /* Layout & Styling Tokens */
    --font-heading: 'Plus Jakarta Sans', sans-serif;
    --font-body: 'Inter', sans-serif;
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 20px;
    --radius-full: 9999px;
    
    /* Shadows */
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 10px rgba(0, 43, 94, 0.04);
    --shadow-lg: 0 10px 25px rgba(0, 43, 94, 0.06);
    --shadow-glow: 0 0 25px rgba(104, 189, 70, 0.3);
    
    /* Transitions */
    --transition-fast: 0.2s ease;
    --transition-normal: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    --transition-slow: 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
}

/* ==========================================================================
   0. Lenis Smooth Scroll Engine Support Styles
   ========================================================================== */
html.lenis {
    height: auto;
}

.lenis.lenis-smooth {
    scroll-behavior: auto !important;
}

.lenis.lenis-smooth [data-lenis-prevent] {
    overflow: clip;
}

.lenis.lenis-stopped {
    overflow: hidden;
}

.lenis.lenis-scrolling iframe {
    pointer-events: none;
}

/* 1. Base Reset & Typography */
*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

body {
    font-family: var(--font-body);
    background-color: var(--color-bg-primary);
    color: var(--color-text-main);
    line-height: 1.5;
    overflow-x: hidden;
    height: 100vh;
}

a, button, .cta-capsule, input[type="submit"], input[type="button"], select, .action-card {
    cursor: pointer;
}

a {
    color: inherit;
    text-decoration: none;
    transition: var(--transition-fast);
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

/* 2. Premium Capsule Navigation (Header) */
.custom-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    padding: 30px 40px;
    display: flex;
    justify-content: center;
    box-sizing: border-box;
}

.header-inner {
    background-color: #ffffff;
    backdrop-filter: blur(20px) saturate(180%);
    -webkit-backdrop-filter: blur(20px) saturate(180%);
    border: 1px solid #e2e8f0;
    border-radius: var(--radius-full);
    padding: 10px 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1400px;
    box-shadow: var(--shadow-md);
    transition: var(--transition-normal);
}

.header-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.summit-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
}

/* Logo image sizing */
.header-logo-img {
    height: 47px;
    width: auto;
    max-width: 240px;
    object-fit: contain;
    display: block;
}

/* Pill-Shaped Active Menu Button */
.menu-capsule {
    display: flex;
    align-items: center;
}

.menu-pill-btn {
    background-color: var(--color-primary);
    color: #ffffff;
    border: 1px solid var(--color-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    padding: 4px 18px 4px 4px;
    gap: 10px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: var(--transition-normal);
}

.menu-pill-btn:hover {
    background-color: var(--color-secondary);
    border-color: var(--color-secondary);
    color: var(--color-primary);
    box-shadow: var(--shadow-glow);
}

.plus-circle {
    background-color: #ffffff;
    color: var(--color-primary);
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    transition: var(--transition-normal);
}

.menu-pill-btn:hover .plus-circle {
    background-color: var(--color-primary);
    color: #ffffff;
}

/* Meta Data Detail Capsules */
.info-capsules-group {
    display: flex;
    gap: 8px;
}

.info-capsule {
    background-color: rgba(241, 245, 249, 0.7);
    border: 1px solid rgba(226, 232, 240, 0.6);
    color: var(--color-primary);
    border-radius: var(--radius-full);
    padding: 8px 18px;
    font-size: 12px;
    font-weight: 600;
    font-family: var(--font-heading);
}

/* Right Header CTA Capsule */
.header-right {
    display: flex;
    align-items: center;
}

.cta-capsule {
    background-color: rgba(241, 245, 249, 0.7);
    border: 1px solid rgba(226, 232, 240, 0.6);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    padding: 4px 20px 4px 4px;
    gap: 10px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    color: var(--color-primary);
    box-shadow: var(--shadow-sm);
    transition: var(--transition-normal);
    cursor: pointer;
    text-decoration: none;
}

.cta-capsule:hover {
    background-color: var(--color-primary);
    color: #ffffff;
    border-color: var(--color-primary);
}

.cta-icon-circle {
    background-color: var(--color-primary);
    color: var(--color-secondary);
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    transition: var(--transition-normal);
}

.cta-capsule:hover .cta-icon-circle {
    background-color: #ffffff;
    color: var(--color-primary);
}

@media (max-width: 991px) {
    .custom-header {
        padding: 15px;
    }
    .info-capsules-group {
        display: none; /* Hide for cleaner mobile viewing */
    }
}

/* 3. Re-imagined Interactive Hero Section */
.hero-scroll-container {
    position: relative;
    height: 110vh; /* Just enough for a brief sticky pin before scrolling past */
    background-color: #000000;
}

.summit-hero {
    position: sticky;
    top: 0;
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background-color: transparent;
    padding: 0 40px;
    box-sizing: border-box;
}

/* Hero Video Background */
.hero-video-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0; /* Behind everything */
    overflow: hidden;
    background-color: #02050a; /* Dark auditorium match */
}

.hero-bg-video,
.hero-bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 1; /* Fully clear image/video */
}

.hero-video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: transparent; /* No overlay */
    z-index: 2;
    pointer-events: none;
}

/* Floating Glassmorphic Box in Hero (Bottom Left Position) */
.hero-glass-box {
    position: absolute;
    bottom: 45px;
    left: 45px;
    transform: none;
    width: calc(100% - 90px);
    max-width: 384px;
    background: rgba(0, 18, 42, 0.55);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 
        0 20px 50px rgba(0, 0, 0, 0.5),
        inset 0 1px 0 rgba(255, 255, 255, 0.25);
    border-radius: 24px;
    padding: 20px 24px;
    text-align: left;
    z-index: 5;
    box-sizing: border-box;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.hero-glass-box:hover {
    border-color: rgba(90, 185, 71, 0.6);
    box-shadow: 
        0 25px 60px rgba(0, 0, 0, 0.6),
        0 0 35px rgba(90, 185, 71, 0.2);
    transform: translateY(-4px);
}

.hero-glass-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(90, 185, 71, 0.15);
    border: 1px solid rgba(90, 185, 71, 0.3);
    color: #5ab947;
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 4px 14px;
    border-radius: 20px;
    margin-bottom: 14px;
}

.glass-glow-dot {
    width: 6px;
    height: 6px;
    background-color: #5ab947;
    border-radius: 50%;
    box-shadow: 0 0 8px #5ab947;
    animation: pulseGlow 2s infinite;
}

.hero-glass-title {
    font-family: var(--font-heading);
    font-size: 21px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -0.5px;
    line-height: 1.35;
    margin: 0;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
}

.hero-glass-title span {
    color: #5ab947;
}

.hero-glass-details-right {
    display: flex;
    flex-direction: column;
    gap: 12px;
    position: absolute;
    bottom: 45px;
    right: 45px;
    width: 380px;
    max-width: calc(100% - 90px);
    z-index: 10;
}

.hero-glass-detail-item {
    display: flex;
    align-items: center;
    gap: 16px;
    background: rgba(4, 16, 32, 0.75);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1.5px solid rgba(255, 255, 255, 0.15);
    padding: 12px 20px;
    border-radius: 20px;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}

.hero-glass-detail-item:hover {
    transform: translateY(-3px) scale(1.02);
}

.date-highlight-capsule {
    border: 2px solid #68BD46 !important;
    background: rgba(3, 22, 14, 0.92) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6), 0 0 25px rgba(104, 189, 70, 0.4) !important;
}

.location-highlight-capsule {
    border: 2px solid #f59e0b !important;
    background: rgba(28, 18, 3, 0.92) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6), 0 0 25px rgba(245, 158, 11, 0.4) !important;
}

.detail-icon-wrap {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
    flex-shrink: 0;
}

.detail-icon-wrap.green-icon {
    background: #68BD46;
    color: #ffffff;
    box-shadow: 0 0 12px rgba(104, 189, 70, 0.5);
}

.detail-icon-wrap.gold-icon {
    background: #f59e0b;
    color: #002b5e;
    box-shadow: 0 0 12px rgba(245, 158, 11, 0.5);
}

.detail-text-wrap {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.detail-label {
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #94a3b8;
    text-transform: uppercase;
}

.detail-val {
    font-family: var(--font-heading);
    font-size: 15.5px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -0.2px;
}

.detail-val .venue-sub {
    font-size: 12.5px;
    font-weight: 600;
    color: #cbd5e1;
}

@media (max-width: 991px) {
    .hero-glass-box {
        bottom: 175px;
        max-width: 100%;
        left: 20px;
        width: calc(100% - 40px);
        padding: 18px 20px;
    }
    .hero-glass-title {
        font-size: 17px;
    }
    .hero-glass-details-right {
        bottom: 20px;
        left: 20px;
        right: 20px;
        width: calc(100% - 40px);
        max-width: calc(100% - 40px);
        gap: 8px;
    }
    .hero-glass-detail-item {
        padding: 10px 14px;
    }
}

/* Staggered Smooth Page-Load Transitions */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(60px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    0% {
        opacity: 0;
        transform: translateX(-160px) translateY(-50%);
    }
    100% {
        opacity: 1;
        transform: translateX(0) translateY(-50%);
    }
}

@keyframes slideInRight {
    0% {
        opacity: 0;
        transform: translateX(160px) translateY(-50%);
    }
    100% {
        opacity: 1;
        transform: translateX(0) translateY(-50%);
    }
}

/* Central Typography Layer */
.hero-center-content {
    position: relative;
    z-index: 2; /* Sandwiched perfectly between backdrops and floating hands */
    text-align: center;
    max-width: 1100px;
    user-select: none;
    animation: fadeInUp 1.8s cubic-bezier(0.16, 1, 0.3, 1) both;
    overflow: visible !important;
}

/* Mirror Text Containers for Hero */
.mirror-text-container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.mirror-reflection {
    position: absolute;
    top: 92%; /* Sit beautifully directly underneath the main text */
    left: 0;
    right: 0;
    transform: scaleY(-0.6) skewX(1deg); /* Vertically flipped, scaled down and skewed */
    opacity: 0.12; /* Elegant transparent reflection */
    pointer-events: none;
    user-select: none;
    filter: blur(1.5px); /* Soft organic digital blur */
    margin: 0 !important;
    padding: 0 !important;
    mask-image: linear-gradient(to top, transparent 15%, rgba(0, 0, 0, 0.8) 100%);
    -webkit-mask-image: linear-gradient(to top, transparent 15%, rgba(0, 0, 0, 0.8) 100%);
    z-index: 1;
}

.hero-title-main {
    font-family: var(--font-heading);
    font-size: 92px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -3px;
    line-height: 0.95;
    margin: 0;
    text-shadow: 0 10px 40px rgba(0, 43, 94, 0.03);
}

.hero-title-sub {
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 600;
    color: #000000;
    padding: 8px 24px;
    border-radius: 50px; /* Pill shape */
    letter-spacing: 1px;
    line-height: 1.1;
    margin-bottom: 24px; /* Space above main title */
    display: inline-block;
    text-transform: uppercase;
    
    /* Invisible by default */
    background: transparent;
    border: 1px solid transparent;
    box-shadow: none;
    backdrop-filter: blur(0px);
    transition: background 0.8s ease, border 0.8s ease, box-shadow 0.8s ease, backdrop-filter 0.8s ease;
}

/* Active state for the pill when text is present */
.hero-title-sub.pill-active {
    background: rgba(255, 255, 255, 0.85);
    border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    backdrop-filter: blur(8px);
}

/* Particle-like dissolve fade out animation */
.fade-out-particles {
    opacity: 0 !important;
    filter: blur(12px);
    transform: scale(1.05) translateY(-20px);
    transition: opacity 1.8s ease-out, filter 1.8s ease-out, transform 1.8s ease-out;
}

/* Responsive adjustments for headers and hands positioning */
@media (max-width: 1200px) {
    .hero-title-main { font-size: 72px; letter-spacing: -2px; }
    .hero-title-sub { font-size: 48px; letter-spacing: -1.5px; }
    .hand-wrapper { width: 48vw; } /* Retain screen-relative width for touch */
}

@media (max-width: 991px) {
    .hero-title-main { font-size: 58px; }
    .hero-title-sub { font-size: 38px; }
    .hand-wrapper {
        width: 48vw; /* Retain screen-relative width for touch */
        opacity: 0.85; /* Soft blend on smaller viewports */
    }
}

@media (max-width: 768px) {
    .summit-hero {
        padding: 0 20px;
    }
    .hero-title-main { font-size: 44px; letter-spacing: -1px; }
    .hero-title-sub { font-size: 28px; letter-spacing: -1px; }
    .hand-wrapper {
        position: relative;
        width: 96px; /* 20% smaller (from 1200px/120px) */
        top: auto;
        transform: none !important;
        margin: 20px auto;
        opacity: 0.9;
    }
    .summit-hero {
        flex-direction: column;
        justify-content: center;
    }
    .left-hand-wrap { order: 1; left: auto; }
    .hero-center-content { order: 2; margin: 30px 0; }
    .right-hand-wrap { order: 3; right: auto; }
    .robot-hand { transform: scaleX(1); }
}

/* Hero Footer Fade-In Keyframe */
@keyframes footerFadeIn {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* 4. Bottom Hero Footer Layout (Exact Match of Reference) */
.hero-footer {
    position: absolute;
    bottom: 40px;
    left: 0;
    width: 100%;
    padding: 0 60px;
    box-sizing: border-box;
    z-index: 4;
    animation: footerFadeIn 1.8s cubic-bezier(0.16, 1, 0.3, 1) 0.6s both;
}

.hero-footer-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1400px;
    margin: 0 auto;
    width: 100%;
}

.hero-footer-left {
    display: flex;
    flex-direction: column;
    gap: 5px;
    max-width: 340px;
}

.footer-small-label {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--color-text-light);
}

.footer-vision-text {
    font-size: 15px;
    line-height: 1.4;
    color: var(--color-primary);
    font-weight: 600;
    margin: 0;
}

.hero-footer-divider {
    border-left: 1px solid var(--color-border);
    height: 50px;
    margin: 0 40px;
}

.hero-footer-right {
    display: flex;
    gap: 10px;
    align-items: center;
    flex-wrap: wrap;
}

.outline-pill {
    border: 1px solid var(--color-border);
    border-radius: var(--radius-full);
    padding: 8px 24px;
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 700;
    color: var(--color-primary);
    background: transparent;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: default;
    white-space: nowrap;
}

.outline-pill:hover {
    border-color: var(--color-secondary);
    color: var(--color-secondary);
    transform: translateY(-2px);
    background-color: rgba(104, 189, 70, 0.06);
    box-shadow: 0 4px 12px rgba(104, 189, 70, 0.1);
}

/* Primary CTA Popup Button Styling */
.interactive-popup-btn {
    background-color: var(--color-primary);
    color: #ffffff !important;
    border-color: var(--color-primary);
    box-shadow: 0 4px 15px rgba(0, 43, 94, 0.15);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.interactive-popup-btn:hover {
    background-color: var(--color-secondary) !important;
    border-color: var(--color-secondary) !important;
    color: #ffffff !important;
    box-shadow: 0 8px 25px rgba(104, 189, 70, 0.3) !important;
    transform: translateY(-3px) scale(1.03);
}
@media (max-width: 991px) {
    .hero-footer {
        position: relative;
        bottom: auto;
        margin-top: 40px;
        padding: 0 20px;
    }
    .hero-footer-inner {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    .hero-footer-divider {
        display: none;
    }
    .hero-footer-left {
        max-width: 100%;
    }
    .hero-footer-right {
        justify-content: center;
    }
}

/* High-fidelity Canvas Particle System Behind Title */
#particleCanvas {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 660px;
    height: 660px;
    z-index: 1.5; /* Sandwiched behind typography (2) but in front of gradient orb (1) */
    pointer-events: none;
    opacity: 0;
    will-change: opacity;
}

/* 6. Infinite Horizontal Text Marquee Styles (White Background) */
.ticker-marquee-section {
    position: relative;
    background-color: #ffffff;
    padding: 35px 0;
    border-top: 1px solid rgba(0, 43, 94, 0.08);
    border-bottom: 1px solid rgba(0, 43, 94, 0.08);
    overflow: hidden;
    z-index: 15; /* Sits cleanly between scroll wrapper and space-warp section */
    width: 100%;
}

.ticker-wrapper {
    display: flex;
    width: 100%;
    overflow: hidden;
}

.ticker-track {
    display: flex;
    align-items: center;
    white-space: nowrap;
    animation: scrollMarquee 38s linear infinite;
    will-change: transform;
}

.ticker-item {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 800;
    text-transform: uppercase;
    color: var(--color-primary); /* Deep Navy #002b5e */
    letter-spacing: -1.5px;
    padding: 0 40px;
    display: inline-block;
    /* Soft cybernetic ambient shadow by default */
    text-shadow: 0 2px 10px rgba(0, 43, 94, 0.05);
    transition: text-shadow 0.4s ease, transform 0.4s ease;
}

/* Accent highlight color for staggered words with gorgeous, dedicated glow filters! */
.ticker-item:nth-child(4n) {
    color: var(--color-secondary); /* Neon Green #68BD46 */
    text-shadow: 
        0 0 8px rgba(104, 189, 70, 0.28), 
        0 0 20px rgba(104, 189, 70, 0.14);
}

.ticker-item:nth-child(4n+2) {
    color: var(--color-text-muted); /* Sophisticated Slate */
    text-shadow: 0 2px 8px rgba(75, 85, 99, 0.08);
}

/* Add custom glow on hover for an interactive micro-touch! */
.ticker-item:hover {
    transform: scale(1.03) translateY(-1px);
    cursor: pointer;
}

.ticker-item:nth-child(4n):hover {
    text-shadow: 
        0 0 15px rgba(104, 189, 70, 0.45), 
        0 0 30px rgba(104, 189, 70, 0.22);
}

.ticker-dot {
    width: 12px;
    height: 12px;
    background-color: var(--color-secondary);
    border-radius: 50%;
    display: inline-block;
    /* Bright volumetric glowing box-shadow for the spacer dots! */
    box-shadow: 
        0 0 10px rgba(104, 189, 70, 0.6), 
        0 0 20px rgba(104, 189, 70, 0.3);
    margin: 0 10px;
}

@keyframes scrollMarquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%); /* Moves exactly half the track length for seamless loop */
    }
}

/* Responsive adjustments for ticker marquee */
@media (max-width: 768px) {
    .ticker-marquee-section {
        padding: 20px 0;
    }
    .ticker-item {
        font-size: 28px;
        padding: 0 25px;
    }
    .ticker-dot {
        width: 8px;
        height: 8px;
    }
}

/* 7. Clean Stats Section (Image 1.1.jpg.jpeg Full Cover Background - Clean Light Theme) */
.space-warp-section {
    position: relative;
    padding: 80px 24px 70px 24px;
    width: 100%;
    background: url('images/Image 1.1.jpg.jpeg') center/cover no-repeat !important;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 20;
    box-sizing: border-box;
}

.space-warp-section .box-description p {
    color: #475569 !important;
    font-weight: 600;
    font-size: 16px;
    text-shadow: none !important;
    margin: 0;
}

#warpCanvas {
    display: none !important;
}

.warp-section-content {
    position: relative;
    z-index: 5;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 1200px;
    text-align: center;
}

.stats-counter-container {
    position: relative;
    z-index: 5;
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 30px;
    max-width: 1050px;
    width: 100%;
    padding: 20px 10px;
    box-sizing: border-box;
    margin-bottom: 34px;
    flex-wrap: wrap;
}

.stat-counter-card {
    background: transparent !important;
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 12px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: none !important;
    flex: 1;
    min-width: 160px;
    position: relative;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.stat-counter-card:hover {
    transform: translateY(-4px);
    box-shadow: none !important;
}

/* Elegant light vertical separator lines between stats */
.stat-counter-card:not(:last-child)::after {
    content: '';
    position: absolute;
    right: -15px;
    top: 20%;
    height: 60%;
    width: 1.5px;
    background: linear-gradient(180deg, transparent, rgba(0, 43, 94, 0.15), transparent);
}

.stat-number-wrap {
    font-family: var(--font-heading);
    font-size: 56px;
    font-weight: 900;
    line-height: 1;
    color: #002b5e !important;
    letter-spacing: -1.5px;
    display: flex;
    align-items: baseline;
    justify-content: center;
    margin-bottom: 8px;
    text-shadow: none !important;
}

.stat-number {
    color: #002b5e !important;
    text-shadow: none !important;
}

.stat-suffix {
    color: #5ab947 !important;
    font-size: 40px;
    margin-left: 2px;
    font-weight: 800;
    text-shadow: none !important;
}

.stat-label {
    font-family: var(--font-heading);
    font-size: 12.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.8px;
    color: #002b5e !important;
    text-shadow: none !important;
    margin-top: 2px;
}

/* CTA Buttons inside Warp Section */
.warp-cta-group {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
    margin-bottom: 28px;
    flex-wrap: wrap;
    z-index: 6;
}

.warp-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 34px;
    border-radius: 50px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Primary Button: #002b5e Navy Blue */
.warp-cta-btn.primary {
    background: #002b5e !important;
    color: #ffffff !important;
    border: none !important;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.25) !important;
}

.warp-cta-btn.primary:hover {
    background: #001f44 !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0, 43, 94, 0.4) !important;
    color: #ffffff !important;
}

.warp-cta-btn.primary i,
.warp-cta-btn.primary span {
    color: #ffffff !important;
}

/* Secondary Button: Cyber Green #5ab947 */
.warp-cta-btn.secondary {
    background: #5ab947 !important;
    color: #ffffff !important;
    border: none !important;
    box-shadow: 0 8px 24px rgba(90, 185, 71, 0.3) !important;
}

.warp-cta-btn.secondary:hover {
    background: #4ea83c !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(90, 185, 71, 0.45) !important;
    color: #ffffff !important;
}

.warp-cta-btn.secondary i,
.warp-cta-btn.secondary span {
    color: #ffffff !important;
}

/* Tagline Subtitle Styling */
.warp-corner-text {
    position: relative;
    max-width: 650px;
    text-align: center;
    z-index: 5;
}

.warp-corner-text p {
    font-family: var(--font-body);
    font-size: 15px;
    line-height: 1.6;
    color: #475569 !important;
    margin: 0 0 18px 0;
    font-weight: 600;
    letter-spacing: 0.2px;
}

.stats-shield-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    max-width: 320px;
    margin: 0 auto;
}

.stats-shield-divider .line-green {
    height: 2px;
    flex: 1;
    background: linear-gradient(90deg, transparent, #36b856);
    border-radius: 2px;
}

.stats-shield-divider .line-blue {
    height: 2px;
    flex: 1;
    background: linear-gradient(90deg, #0284c7, transparent);
    border-radius: 2px;
}

.stats-shield-divider .shield-icon-circle {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: 1.5px solid #0284c7;
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    background: #ffffff;
}

/* Responsive adjustments for space warp stats */
@media (max-width: 991px) {
    .stats-counter-container {
        gap: 40px;
    }
    .stat-number-wrap {
        font-size: 56px;
    }
    .stat-suffix {
        font-size: 40px;
    }
}

}

@media (max-width: 768px) {
    .space-warp-section {
        height: auto;
        padding: 80px 20px;
    }
    .stats-counter-container {
        flex-direction: column;
        gap: 50px;
    }
    .warp-corner-text {
        position: relative;
        bottom: auto;
        right: auto;
        max-width: 90%;
        margin: 40px auto 0 auto;
        text-align: center;
    }
}

/* 8. Premium Bright About Summit Section Styles */
.about-summit-section {
    position: relative;
    background: url('images/Image 1.1.1.jpg.jpeg') center/cover no-repeat !important;
    padding: 100px 60px 40px 60px;
    width: 100%;
    box-sizing: border-box;
    z-index: 25;
    overflow: hidden;
}

/* Matching-color glowing cyber orbs pulsing underneath the text */
.about-summit-section::before {
    content: '';
    position: absolute;
    top: -15%;
    left: -15%;
    width: 50%;
    height: 50%;
    background: radial-gradient(circle, rgba(104, 189, 70, 0.04) 0%, transparent 70%); /* Pulsing Neon Green orb */
    pointer-events: none;
    z-index: 1;
    animation: slowGlowPulse 18s ease-in-out infinite alternate;
}

.about-summit-section::after {
    content: '';
    position: absolute;
    bottom: -15%;
    right: -15%;
    width: 50%;
    height: 50%;
    background: radial-gradient(circle, rgba(14, 165, 233, 0.045) 0%, transparent 70%); /* Pulsing Cyber Cyan orb */
    pointer-events: none;
    z-index: 1;
    animation: slowGlowPulse 18s ease-in-out infinite alternate-reverse;
}

@keyframes softGridScrolling {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 120px 120px;
    }
}

@keyframes slowGlowPulse {
    0% {
        transform: scale(0.9) translate(0, 0);
        opacity: 0.65;
    }
    100% {
        transform: scale(1.1) translate(40px, 40px);
        opacity: 1;
    }
}

.about-container {
    max-width: 1400px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2; /* Sandwiched perfectly on top of animated background orbs */
    padding: 0 20px;
    box-sizing: border-box;
}

.about-grid {
    display: grid;
    grid-template-columns: 55fr 45fr;
    gap: 45px;
    align-items: center;
}

.about-content-col {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.about-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-secondary); /* Neon Green */
    margin-bottom: 15px;
    display: inline-block;
}

.about-title {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 800;
    color: var(--color-primary); /* Navy Blue */
    letter-spacing: -2px;
    line-height: 1.15;
    margin: 0 0 25px 0;
}

.about-title span {
    background: linear-gradient(135deg, var(--color-primary) 40%, var(--color-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.about-desc {
    font-size: 16px;
    line-height: 1.6;
    color: #4b5563; /* Readable soft dark slate */
    margin: 0 0 35px 0;
    font-weight: 400;
}

/* Dynamic Interactive Tabs Navigation */
.tabs-nav {
    display: flex;
    gap: 15px;
    border-bottom: 2px solid rgba(0, 43, 94, 0.06);
    padding-bottom: 12px;
    margin-bottom: 30px;
    width: 100%;
}

.tab-btn {
    background: transparent;
    border: none;
    padding: 8px 16px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 700;
    color: rgba(0, 43, 94, 0.6);
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    display: flex;
    align-items: center;
    gap: 8px;
    outline: none;
}

.tab-btn:hover {
    color: var(--color-primary);
}

.tab-btn.active {
    color: var(--color-primary);
}

.tab-btn::after {
    content: '';
    position: absolute;
    bottom: -14px;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: var(--color-secondary); /* Neon Green Active Bar */
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.tab-btn.active::after {
    transform: scaleX(1);
}

/* Dynamic Content Panes */
.tabs-panes {
    position: relative;
    min-height: 160px;
}

.tab-pane {
    display: none;
    opacity: 0;
    transform: translateY(15px);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.tab-pane.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.pane-split {
    display: flex;
    gap: 30px;
    align-items: flex-start;
}

.date-badge {
    background: rgba(0, 43, 94, 0.03);
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: var(--radius-md);
    padding: 12px 18px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-width: 90px;
    height: 90px;
    box-sizing: border-box;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.02);
    flex-shrink: 0;
}

.date-month {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    color: var(--color-secondary);
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.date-day {
    font-family: var(--font-heading);
    font-size: 38px;
    font-weight: 800;
    color: var(--color-primary);
    line-height: 1;
    margin-top: 3px;
}

.venue-badge, .awaits-badge {
    background: rgba(0, 43, 94, 0.03);
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: var(--radius-md);
    width: 90px;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-secondary);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.02);
    flex-shrink: 0;
    box-sizing: border-box;
}

.venue-badge svg, .awaits-badge svg {
    stroke-width: 1.8;
}

.pane-text {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.pane-text h4 {
    font-family: var(--font-heading);
    font-size: 19px;
    font-weight: 700;
    color: var(--color-primary);
    margin: 0 0 10px 0;
    letter-spacing: -0.5px;
}

.pane-text p {
    font-size: 15px;
    line-height: 1.5;
    color: #4b5563;
    margin: 0;
    font-weight: 400;
}

.tab-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 20px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--color-primary);
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
}

.tab-cta-btn:hover {
    color: var(--color-secondary);
}

.cta-arrow {
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.tab-cta-btn:hover .cta-arrow {
    transform: translateX(5px);
}

/* Right Column: Premium Frame with image */
.about-image-col {
    display: flex;
    justify-content: center;
    position: relative;
}

.about-image-col::before {
    content: '';
    position: absolute;
    top: -30px;
    right: -30px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(104, 189, 70, 0.1), transparent 70%);
    filter: blur(40px);
    z-index: 1;
    pointer-events: none;
}

.about-image-wrapper {
    position: relative;
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: 
        0 25px 50px -15px rgba(0, 43, 94, 0.12),
        0 0 30px rgba(104, 189, 70, 0.05);
    border: 1px solid rgba(0, 43, 94, 0.08);
    background: #ffffff;
    z-index: 2;
    width: 100%;
    max-width: 100%;
    display: flex;
}

.about-img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    object-fit: cover;
}

.about-image-wrapper:hover .about-img {
    transform: scale(1.04);
}

.about-img-tag {
    position: absolute;
    bottom: 25px;
    left: 25px;
    background: rgba(0, 43, 94, 0.85);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-sm);
    padding: 8px 16px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #ffffff;
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.tag-glow-dot {
    width: 6px;
    height: 6px;
    background-color: var(--color-secondary);
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 8px var(--color-secondary);
    animation: pulseGlow 2s infinite;
}

@keyframes pulseGlow {
    0% { transform: scale(1); opacity: 0.8; }
    50% { transform: scale(1.3); opacity: 1; }
    100% { transform: scale(1); opacity: 0.8; }
}

/* Responsive configurations for About section */
@media (max-width: 991px) {
    .about-summit-section {
        padding: 90px 40px;
    }
    .about-grid {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    .about-title {
        font-size: 38px;
    }
    .about-image-col {
        order: -1; /* Place image on top in tablet/mobile layouts */
    }
}

@media (max-width: 768px) {
    .about-summit-section {
        padding: 70px 20px;
    }
    .tabs-nav {
        flex-wrap: wrap;
        gap: 5px;
    }
    .tab-btn {
        padding: 8px 12px;
        font-size: 13px;
    }
    .pane-split {
        flex-direction: column;
        gap: 20px;
    }
}

/* 9. Scroll Reveal Animations (Hardware Accelerated Transitions) */
.reveal-element {
    opacity: 0;
    will-change: transform, opacity;
}

.reveal-fade-up {
    transform: translateY(40px);
    transition: 
        opacity 1.0s cubic-bezier(0.16, 1, 0.3, 1),
        transform 1.0s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Threat row: starts hidden off-screen right, uses keyframe elastic animation */
.reveal-fade-left {
    transform: translateX(120vw);
    /* No transition here — animation is applied on .revealed */
}

/* When triggered, play the keyframe elastic stretch animation */
.reveal-fade-left.revealed {
    opacity: 1 !important;
    transform: none !important;
    animation: threatSlideIn 1.4s cubic-bezier(0.16, 1, 0.3, 1) both;
}

/* Elastic Stretch Keyframe:
   - Starts far right (off screen)
   - Slides left smoothly
   - On arrival: left side overshoots/stretches (scaleX > 1, origin right)
   - Snaps back to normal size */
@keyframes threatSlideIn {
    0% {
        opacity: 0;
        transform: translateX(120vw) scaleX(1);
        transform-origin: right center;
    }
    60% {
        opacity: 1;
        transform: translateX(0) scaleX(1);
        transform-origin: right center;
    }
    75% {
        transform: translateX(0) scaleX(1.08);
        transform-origin: right center;
    }
    85% {
        transform: translateX(0) scaleX(0.97);
        transform-origin: right center;
    }
    93% {
        transform: translateX(0) scaleX(1.03);
        transform-origin: right center;
    }
    100% {
        opacity: 1;
        transform: translateX(0) scaleX(1);
        transform-origin: right center;
    }
}

.reveal-image-mask {
    transform: translateY(50px) scale(0.96);
    transition: 
        opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.3s,
        transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.3s;
}

/* Revealed Active State (for non-keyframe elements) */
.reveal-element.revealed {
    opacity: 1;
    transform: translate(0, 0) scale(1);
}

/* ==========================================================================
   10. Premium Cinematic Action Section (3D Fanned-Out Cards)
   ========================================================================== */
/* ==========================================================================
   10. Premium Cinematic Action Section (Sticky Scroll Stack & Fan)
   ========================================================================== */
.action-summit-section {
    position: relative;
    background-color: #ffffff;
    width: 100%;
    padding-bottom: 40px;
    box-sizing: border-box;
    z-index: 24;
}

.action-sticky-container {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding-top: 60px;
    box-sizing: border-box;
    overflow: visible;
    z-index: 24;
    background-image:
        linear-gradient(rgba(0, 43, 94, 0.015) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 43, 94, 0.015) 1px, transparent 1px);
    background-size: 60px 60px;
    background-position: center;
    border-top: 1px solid rgba(0, 43, 94, 0.05);
}

.action-spiral-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Mouse interactions pass through seamlessly to cards */
    z-index: 1;
    opacity: 0.8; /* Perfectly balanced for bright premium theme */
}

.action-container {
    max-width: 1300px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
    padding: 0 40px;
    box-sizing: border-box;
}

/* Governance Section Header & 4-Column Grid Layout */
.governance-header {
    text-align: center;
    margin-bottom: 45px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.governance-main-title {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 800;
    color: #002b5e;
    letter-spacing: -1.5px;
    margin: 10px 0 14px 0;
    line-height: 1.25;
}

.governance-lead-desc {
    font-family: var(--font-body);
    font-size: 16.5px;
    line-height: 1.6;
    color: #475569;
    max-width: 780px;
    margin: 0 auto;
    font-weight: 400;
}

/* State-Level Government Crest & Authority Showcase */
.authority-crest-showcase {
    max-width: 1280px;
    margin: 0 auto 60px auto;
    width: 100%;
}

.authority-crest-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.emblem-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 28px;
    padding: 36px 32px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    box-shadow: 0 12px 35px rgba(0, 43, 94, 0.04);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}

.emblem-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    background: #002b5e;
    transition: width 0.3s ease;
}

.emblem-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 55px rgba(0, 43, 94, 0.12);
    border-color: #002b5e;
}

.emblem-card:hover::before {
    width: 8px;
}

.emblem-top-row {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
}

.emblem-icon-ring {
    width: 64px;
    height: 64px;
    border-radius: 20px;
    background: rgba(0, 43, 94, 0.05);
    border: 1.5px solid rgba(0, 43, 94, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #002b5e;
    box-shadow: 0 6px 18px rgba(0, 43, 94, 0.04);
    transition: all 0.35s ease;
}

.emblem-card:hover .emblem-icon-ring {
    transform: scale(1.1) rotate(4deg);
}

.emblem-status-tag {
    font-family: var(--font-heading);
    font-size: 11.5px;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 30px;
}

.gold-status { background: rgba(245, 158, 11, 0.1); color: #d97706; border: 1px solid rgba(245, 158, 11, 0.3); }
.cyan-status { background: rgba(2, 132, 199, 0.1); color: #0284c7; border: 1px solid rgba(2, 132, 199, 0.3); }
.emerald-status { background: rgba(90, 185, 71, 0.1); color: #5ab947; border: 1px solid rgba(90, 185, 71, 0.3); }
.purple-status { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; border: 1px solid rgba(139, 92, 246, 0.3); }

.emblem-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 24px;
    flex-grow: 1;
}

.emblem-title {
    font-family: var(--font-heading);
    font-size: 26px;
    font-weight: 900;
    color: #002b5e;
    margin: 0 0 4px 0;
    letter-spacing: -0.5px;
}

.emblem-subtitle {
    font-family: var(--font-heading);
    font-size: 12.5px;
    font-weight: 700;
    color: #64748b;
    margin-bottom: 12px;
    letter-spacing: 0.5px;
}

.emblem-desc {
    font-family: var(--font-body);
    font-size: 15px;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

.emblem-footer-strip {
    width: 100%;
    padding-top: 14px;
    border-top: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 700;
    color: #002b5e;
    margin-top: auto;
}

.emblem-footer-strip i {
    color: #5ab947;
    font-size: 14px;
}

/* Specific Emblem Accents */
.emblem-card.crest-gold::before { background: #f59e0b; }
.emblem-card.crest-gold:hover .emblem-icon-ring { background: #f59e0b; color: #ffffff; border-color: #f59e0b; }
.emblem-card.crest-gold:hover { border-color: #f59e0b; }

.emblem-card.crest-cyan::before { background: #0284c7; }
.emblem-card.crest-cyan:hover .emblem-icon-ring { background: #0284c7; color: #ffffff; border-color: #0284c7; }
.emblem-card.crest-cyan:hover { border-color: #0284c7; }

.emblem-card.crest-emerald::before { background: #5ab947; }
.emblem-card.crest-emerald:hover .emblem-icon-ring { background: #5ab947; color: #ffffff; border-color: #5ab947; }
.emblem-card.crest-emerald:hover { border-color: #5ab947; }

.emblem-card.crest-purple::before { background: #8b5cf6; }
.emblem-card.crest-purple:hover .emblem-icon-ring { background: #8b5cf6; color: #ffffff; border-color: #8b5cf6; }
.emblem-card.crest-purple:hover { border-color: #8b5cf6; }

@media (max-width: 991px) {
    .authority-crest-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

.presence-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 20px;
    padding: 32px 24px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 43, 94, 0.04);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.presence-card:hover {
    transform: translateY(-6px);
    border-color: #5ab947;
    box-shadow: 0 18px 40px rgba(90, 185, 71, 0.15);
}

.presence-icon-box {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    background: rgba(90, 185, 71, 0.08);
    color: #5ab947;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 18px;
    transition: all 0.3s ease;
}

.presence-card:hover .presence-icon-box {
    background: #5ab947;
    color: #ffffff;
}

.presence-name {
    font-family: var(--font-heading);
    font-size: 19px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 8px 0;
}

.presence-desc {
    font-size: 13.5px;
    color: #6b7280;
    margin: 0;
    line-height: 1.4;
}

/* Flowing Glowing Network Lines - Attendee Section */
.attendee-pills-wrapper {
    margin-top: 55px;
    text-align: center;
    position: relative;
}

.attendee-badge-node {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, rgba(0, 43, 94, 0.06) 0%, rgba(90, 185, 71, 0.08) 100%);
    border: 1.5px solid rgba(90, 185, 71, 0.5);
    padding: 12px 28px;
    border-radius: 40px;
    position: relative;
    z-index: 3;
    overflow: hidden;
    animation: badgePulseGlow 3s infinite ease-in-out;
}

@keyframes badgePulseGlow {
    0%, 100% {
        border-color: rgba(90, 185, 71, 0.45);
        box-shadow: 0 0 15px rgba(90, 185, 71, 0.25), inset 0 0 10px rgba(90, 185, 71, 0.1);
    }
    50% {
        border-color: rgba(90, 185, 71, 0.9);
        box-shadow: 0 0 35px rgba(90, 185, 71, 0.55), 0 0 18px rgba(104, 189, 70, 0.45), inset 0 0 20px rgba(90, 185, 71, 0.2);
    }
}

/* Glancing Shimmer Beam Sweep Across Badge */
.attendee-badge-node::after {
    content: '';
    position: absolute;
    top: 0;
    left: -120%;
    width: 70%;
    height: 100%;
    background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.65) 50%, transparent 100%);
    transform: skewX(-25deg);
    animation: glanceSweep 3s infinite ease-in-out;
    pointer-events: none;
}

@keyframes glanceSweep {
    0% {
        left: -120%;
    }
    30%, 100% {
        left: 140%;
    }
}

.badge-node-glow {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #5ab947;
    box-shadow: 0 0 12px #5ab947, 0 0 24px #5ab947;
    animation: pulseDot 1.6s infinite ease-in-out;
}

@keyframes pulseDot {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.6);
        opacity: 0.5;
    }
}

.attendee-badge {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 2.8px;
    color: #002b5e;
    text-transform: uppercase;
    margin: 0;
    position: relative;
    z-index: 2;
    animation: badgeTextGlow 3s infinite ease-in-out;
}

@keyframes badgeTextGlow {
    0%, 100% {
        text-shadow: 0 0 0px transparent;
    }
    50% {
        color: #001f44;
        text-shadow: 0 0 12px rgba(90, 185, 71, 0.4), 0 0 20px rgba(90, 185, 71, 0.2);
    }
}

/* Flowing SVG Container */
.attendee-flow-lines-wrapper {
    width: 100%;
    max-width: 1050px;
    height: 55px;
    margin: -3px auto -3px auto;
    position: relative;
    z-index: 1;
}

.attendee-flow-svg {
    width: 100%;
    height: 100%;
    overflow: visible;
}

/* SVG Line Styles */
.flow-line-back {
    stroke: rgba(90, 185, 71, 0.25);
    stroke-width: 2.5px;
    fill: none;
}

.flow-line-pulse {
    stroke: #5ab947;
    stroke-width: 3.5px;
    fill: none;
    stroke-dasharray: 25 100;
    stroke-linecap: round;
    animation: flowPulse 2s linear infinite;
    filter: drop-shadow(0px 0px 6px rgba(90, 185, 71, 0.9));
}

@keyframes flowPulse {
    0% {
        stroke-dashoffset: 125;
    }
    100% {
        stroke-dashoffset: 0;
    }
}

/* Grid for 5 Connected Pill Cards */
.attendee-pills-grid {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
    max-width: 1150px;
    margin: 0 auto;
    position: relative;
    z-index: 3;
}

.attendee-pill-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}

.pill-connector-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #5ab947;
    box-shadow: 0 0 10px #5ab947;
    margin-bottom: 6px;
    transition: all 0.3s ease;
}

.attendee-pill {
    background: #ffffff;
    border: 1.5px solid rgba(0, 43, 94, 0.12);
    color: var(--color-primary);
    padding: 12px 22px;
    border-radius: 40px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 6px 18px rgba(0, 43, 94, 0.05);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.attendee-pill i {
    color: #5ab947;
    font-size: 15px;
    transition: transform 0.3s ease;
}

.attendee-pill-card:hover .attendee-pill {
    border-color: #5ab947;
    transform: translateY(-4px);
    background: #002b5e;
    color: #ffffff;
    box-shadow: 0 12px 30px rgba(90, 185, 71, 0.25);
}

.attendee-pill-card:hover .attendee-pill i {
    color: #ffffff;
    transform: scale(1.2);
}

.attendee-pill-card:hover .pill-connector-dot {
    transform: scale(1.6);
    background: #a3e635;
    box-shadow: 0 0 16px #a3e635;
}

@media (max-width: 991px) {
    .attendee-flow-lines-wrapper {
        display: none;
    }
    .pill-connector-dot {
        display: none;
    }
    .attendee-pills-grid {
        gap: 12px;
    }
}

@media (max-width: 991px) {
    .presence-cards-grid {
        grid-template-columns: repeat(1, 1fr);
    }
}

/* 3D Cards grid wrapper */
.action-cards-grid {
    position: relative;
    width: 100%;
    max-width: 1200px;
    height: 420px;
    margin: 15px auto 0 auto;
    display: block;
    perspective: 1200px;
    transform-style: preserve-3d;
    will-change: transform;
}

.action-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.07);
    border-radius: 24px;
    padding: 25px 24px 20px 24px; /* Optimized padding to give inner contents more vertical room */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.04);
    
    width: 270px; /* Narrower horizontal width prevents left/right clipping */
    height: 380px; /* Taller vertical height provides ample space for text content */
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 0; /* Centering offset handled dynamically by transform calc(-50%) */
    margin-left: 0; /* Centering offset handled dynamically by transform calc(-50%) */
    
    transform-style: preserve-3d;
    will-change: transform;
    transition: 
        transform 0.9s cubic-bezier(0.25, 1, 0.3, 1),
        border-color 0.4s ease,
        box-shadow 0.4s ease;
    box-sizing: border-box;
    z-index: 1;
}

/* Default: stacked 3D isometric */
.action-card:nth-child(1) {
    transform: translate3d(calc(-50% + 50px), calc(-50% + 30px), -24px) rotateX(55deg) rotateZ(-45deg);
    z-index: 1;
}
.action-card:nth-child(2) {
    transform: translate3d(calc(-50% + 63px), calc(-50% + 10px), -8px) rotateX(55deg) rotateZ(-45deg);
    z-index: 2;
}
.action-card:nth-child(3) {
    transform: translate3d(calc(-50% + 77px), calc(-50% - 10px), 8px) rotateX(55deg) rotateZ(-45deg);
    z-index: 3;
}
.action-card:nth-child(4) {
    transform: translate3d(calc(-50% + 90px), calc(-50% - 30px), 24px) rotateX(55deg) rotateZ(-45deg);
    z-index: 4;
}

/* ── Carousel positions: cards placed around a circle, grid spins ── */
.action-summit-section.carousel-active .action-card {
    transition: transform 0.8s cubic-bezier(0.25, 1, 0.3, 1);
    backface-visibility: hidden;
}
.action-summit-section.carousel-active .action-card:nth-child(1) {
    transform: translateX(-50%) translateY(-50%) rotateY(0deg)   translateZ(360px);
}
.action-summit-section.carousel-active .action-card:nth-child(2) {
    transform: translateX(-50%) translateY(-50%) rotateY(90deg)  translateZ(360px);
}
.action-summit-section.carousel-active .action-card:nth-child(3) {
    transform: translateX(-50%) translateY(-50%) rotateY(180deg) translateZ(360px);
}
.action-summit-section.carousel-active .action-card:nth-child(4) {
    transform: translateX(-50%) translateY(-50%) rotateY(270deg) translateZ(360px);
}

/* Spin the entire grid 360deg automatically, with a slight tilt for 3D realism */
@keyframes spin3DCarousel {
    0%   { transform: rotateX(8deg) rotateY(0deg); }
    100% { transform: rotateX(8deg) rotateY(360deg); }
}
.action-summit-section.carousel-active .action-cards-grid {
    animation: spin3DCarousel 3.5s cubic-bezier(0.3, 0, 0.2, 1) forwards;
}

/* ── Spread: flat horizontal row ── */
/* Transition: Spread-active (flat, horizontal row of 4 stacks side-by-side) */
.action-summit-section.spread-active .action-card:nth-child(1) {
    transform: translate3d(calc(-50% - min(36vw, 420px)), -50%, 0) rotateX(0deg) rotateZ(0deg) !important;
    z-index: 10 !important;
}
.action-summit-section.spread-active .action-card:nth-child(2) {
    transform: translate3d(calc(-50% - min(12vw, 140px)), -50%, 0) rotateX(0deg) rotateZ(0deg) !important;
    z-index: 10 !important;
}
.action-summit-section.spread-active .action-card:nth-child(3) {
    transform: translate3d(calc(-50% + min(12vw, 140px)), -50%, 0) rotateX(0deg) rotateZ(0deg) !important;
    z-index: 10 !important;
}
.action-summit-section.spread-active .action-card:nth-child(4) {
    transform: translate3d(calc(-50% + min(36vw, 420px)), -50%, 0) rotateX(0deg) rotateZ(0deg) !important;
    z-index: 10 !important;
}

/* Tech Icon wrap */
.action-card-icon-wrap {
    width: 48px;
    height: 48px;
    background: rgba(90, 185, 71, 0.12);
    border: 1px solid rgba(90, 185, 71, 0.3);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.action-card-emoji {
    font-size: 22px;
    line-height: 1;
}

.action-card-title {
    font-family: var(--font-heading);
    font-size: 16.5px;
    font-weight: 800;
    color: var(--color-primary);
    line-height: 1.3;
    margin: 0 0 8px 0;
    letter-spacing: -0.5px;
    height: auto;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}

.action-card-desc {
    font-size: 13.5px;
    line-height: 1.5;
    color: #4b5563;
    margin: 0 0 15px 0;
    font-weight: 400;
    flex-grow: 1;
}

.action-card-footer {
    width: 100%;
    border-top: 1px solid rgba(0, 43, 94, 0.08);
    padding-top: 14px;
    margin-top: auto;
}

.card-tech-tag {
    font-family: var(--font-heading);
    font-size: 10.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #5ab947;
    background: rgba(90, 185, 71, 0.12);
    border: 1px solid rgba(90, 185, 71, 0.35);
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    box-shadow: 0 4px 12px rgba(90, 185, 71, 0.15);
    transition: all 0.3s ease;
}

/* Interactive Hover Glow & Tag Highlight for Action Cards */
.action-card:hover {
    border-color: #5ab947 !important;
    box-shadow: 0 30px 60px -10px rgba(0, 43, 94, 0.18), 0 0 35px rgba(90, 185, 71, 0.2) !important;
}

.action-card:hover .action-card-icon-wrap {
    background: #002b5e;
    border-color: #5ab947;
    transform: scale(1.08);
}

.action-card:hover .card-tech-tag {
    background: #5ab947;
    color: #ffffff;
    border-color: #5ab947;
    box-shadow: 0 6px 18px rgba(90, 185, 71, 0.35);
    transform: scale(1.04);
}

/* Responsive Styles for Action Section */
@media (max-width: 991px) {
    .action-summit-section {
        height: auto !important; /* Disable scroll track pin on mobile/tablet */
    }
    
    .action-sticky-container {
        position: relative !important;
        height: auto !important;
        padding: 80px 20px !important;
        border-top: none;
    }
    
    .action-container {
        padding: 0;
    }
    
    .action-cards-grid {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 30px !important;
        height: auto !important;
        margin-top: 50px !important;
    }
    
    .action-card {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        margin: 0 !important;
        width: 100% !important;
        height: auto !important;
        transform: none !important;
        z-index: 1 !important;
        padding: 30px 24px !important;
    }
    
    .action-card-title {
        height: auto;
        -webkit-line-clamp: unset;
    }
}

@media (max-width: 768px) {
    .action-sticky-container {
        padding: 60px 15px !important;
    }
    
    .action-title {
        font-size: 34px;
    }
    
    .action-cards-grid {
        grid-template-columns: 1fr !important;
        gap: 25px !important;
    }
}

.performance-stats-section {
    position: relative;
    background-color: #f8fafc;
    background: linear-gradient(180deg, #ffffff 0%, #f4f8fb 100%);
    padding: 100px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 23;
    overflow: hidden;
    border-top: 1px solid rgba(0, 43, 94, 0.05);
}

.exp-bg-blob-1 {
    position: absolute;
    top: -100px;
    left: -100px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(90, 185, 71, 0.06) 0%, rgba(255, 255, 255, 0) 70%);
    pointer-events: none;
    z-index: 1;
}

.exp-bg-blob-2 {
    position: absolute;
    bottom: -100px;
    right: -100px;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(0, 43, 94, 0.04) 0%, rgba(255, 255, 255, 0) 70%);
    pointer-events: none;
    z-index: 1;
}

.exp-section-container {
    max-width: 1320px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

/* Top Split Grid */
.exp-top-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 60px;
    align-items: center;
    margin-bottom: 60px;
}

/* Left Column */
.exp-text-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.exp-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #5ab947;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.exp-tag-line {
    width: 24px;
    height: 3px;
    background-color: #5ab947;
    border-radius: 2px;
    display: inline-block;
}

.exp-hero-heading {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 900;
    color: var(--color-primary);
    line-height: 1.12;
    letter-spacing: -1.8px;
    margin: 0 0 18px 0;
}

.exp-green-highlight {
    color: #5ab947;
}

.exp-tagline-sub {
    font-family: var(--font-heading);
    font-size: 21px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 16px 0;
    letter-spacing: -0.5px;
}

.exp-lead-text {
    font-size: 16px;
    line-height: 1.6;
    color: #4b5563;
    margin: 0 0 16px 0;
    max-width: 560px;
}

.exp-bold-callout {
    font-size: 16.5px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0;
    line-height: 1.4;
}

/* Right Column: Visual Composite Composition */
.exp-visual-col {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.exp-composite-wrapper {
    position: relative;
    width: 100%;
    max-width: 520px;
    height: 440px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Main Circle Frame */
.exp-main-circle-frame {
    width: 380px;
    height: 380px;
    border-radius: 50%;
    border: 8px solid #ffffff;
    box-shadow: 0 20px 50px rgba(0, 43, 94, 0.12);
    overflow: hidden;
    position: relative;
    z-index: 2;
    background-color: #ffffff;
    transition: transform 0.5s ease;
}

.exp-composite-wrapper:hover .exp-main-circle-frame {
    transform: scale(1.02);
}

.exp-main-circle-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.exp-stand-title-tag {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 43, 94, 0.85);
    backdrop-filter: blur(8px);
    color: #ffffff;
    padding: 8px 18px;
    border-radius: 20px;
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Outer Green Arch Stroke */
.exp-green-arch-ring {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 424px;
    height: 424px;
    border-radius: 50%;
    border: 6px solid transparent;
    border-top-color: #5ab947;
    border-left-color: #5ab947;
    z-index: 1;
    pointer-events: none;
    transform: translate(-50%, -50%) rotate(-25deg);
}

/* Speech Bubble Top-Right */
.exp-speech-bubble-wrap {
    position: absolute;
    top: 5px;
    right: 25px;
    z-index: 5;
}

.exp-speech-bubble {
    background: #dcfce7;
    border: 1px solid rgba(90, 185, 71, 0.4);
    color: #15803d;
    padding: 12px 20px;
    border-radius: 25px 25px 5px 25px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    line-height: 1.25;
    box-shadow: 0 10px 25px rgba(90, 185, 71, 0.2);
    position: relative;
}

/* Stacked Meta Keywords Top Right */
.exp-meta-keywords {
    position: absolute;
    top: 110px;
    right: -10px;
    display: flex;
    flex-direction: column;
    gap: 4px;
    font-family: var(--font-heading);
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: rgba(0, 43, 94, 0.35);
    text-transform: uppercase;
    z-index: 3;
}

/* Secondary Circle Frame (Bottom-Right Overlap) */
.exp-secondary-circle-frame {
    position: absolute;
    bottom: 10px;
    right: 30px;
    width: 190px;
    height: 190px;
    border-radius: 50%;
    border: 6px solid #ffffff;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.16);
    overflow: hidden;
    z-index: 4;
    background-color: #ffffff;
    transition: transform 0.5s ease;
}

.exp-composite-wrapper:hover .exp-secondary-circle-frame {
    transform: translateY(-6px) scale(1.04);
}

.exp-secondary-circle-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.exp-live-demos-badge {
    position: absolute;
    top: 16px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--color-primary);
    color: #ffffff;
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 800;
    padding: 5px 14px;
    border-radius: 20px;
    letter-spacing: 1.2px;
    white-space: nowrap;
    box-shadow: 0 4px 12px rgba(0, 43, 94, 0.3);
}

/* Bottom Horizontal Feature Card (4 Columns 1 Row) */
.exp-horizontal-features-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 24px;
    padding: 32px 24px;
    box-shadow: 0 10px 35px rgba(0, 43, 94, 0.03);
}

.exp-features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
}

.exp-feature-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0 24px;
    border-right: 1px solid rgba(0, 43, 94, 0.08);
}

.exp-feature-item:last-child {
    border-right: none;
}

.exp-icon-circle {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
    transition: transform 0.3s ease;
}

.exp-feature-item:hover .exp-icon-circle {
    transform: scale(1.1);
}

.exp-icon-circle.green-bg {
    background: rgba(90, 185, 71, 0.12);
    color: #5ab947;
}

.exp-icon-circle.blue-bg {
    background: rgba(0, 43, 94, 0.08);
    color: var(--color-primary);
}

.exp-feature-title {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 6px 0;
    letter-spacing: -0.4px;
}

.exp-feature-desc {
    font-size: 13.5px;
    line-height: 1.5;
    color: #4b5563;
    margin: 0;
}

/* Bottom CTA Wrap */
.exp-cta-bottom-wrap {
    text-align: center;
    margin-top: 40px;
}

.exp-cta-navy-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background-color: var(--color-primary);
    color: #ffffff;
    padding: 16px 36px;
    border-radius: 40px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    box-shadow: 0 10px 25px rgba(0, 43, 94, 0.2);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.exp-cta-navy-btn:hover {
    background-color: #5ab947;
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(90, 185, 71, 0.35);
}

.exp-cta-navy-btn i {
    transition: transform 0.3s ease;
}

.exp-cta-navy-btn:hover i {
    transform: translateX(4px);
}

/* Responsive queries */
@media (max-width: 1100px) {
    .exp-top-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .exp-text-col {
        text-align: center;
        align-items: center;
    }
    .exp-features-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
    .exp-feature-item {
        border-right: none;
        padding: 0;
    }
}

@media (max-width: 600px) {
    .exp-hero-heading {
        font-size: 34px;
    }
    .exp-features-grid {
        grid-template-columns: 1fr;
    }
    .exp-composite-wrapper {
        height: 360px;
    }
    .exp-main-circle-frame {
        width: 290px;
        height: 290px;
    }
    .exp-green-arch-ring {
        width: 330px;
        height: 330px;
    }
    .exp-secondary-circle-frame {
        width: 140px;
        height: 140px;
    }
}

@media (max-width: 991px) {
    .experience-content-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}

@media (max-width: 576px) {
    .experience-cards-grid {
        grid-template-columns: 1fr;
    }
}

/* Side-by-side Layout Grid - Balanced 50/50 Split for wider image presentation */
.performance-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 75px;
    align-items: center;
}

.performance-left-col {
    display: flex;
    flex-direction: column;
    overflow: visible; /* allow toggles to animate from right column across */
}

.performance-rows {
    display: flex;
    flex-direction: column;
    gap: 0;
    overflow: visible; /* allow toggle animation to cross columns */
}

/* Compact grid row layout */
/* Subtle pulse to attract clicks to the rows */
@keyframes rowAttractPulse {
    0%, 100% {
        box-shadow: inset 0 0 0 rgba(104, 189, 70, 0);
        background-color: transparent;
    }
    50% {
        box-shadow: inset 4px 0 12px rgba(104, 189, 70, 0.08);
        background-color: rgba(104, 189, 70, 0.015);
    }
}

.performance-row {
    display: grid;
    grid-template-columns: 200px 50px 1fr; /* Custom partition for threat panel */
    align-items: center;
    padding: 32px 10px; /* Increased padding for larger buttons */
    border-bottom: 1px solid rgba(0, 43, 94, 0.06);
    transition: background-color 0.4s ease, transform 0.3s ease;
    cursor: pointer;
    animation: rowAttractPulse 3.5s infinite ease-in-out;
}

.performance-row:hover {
    background-color: rgba(0, 43, 94, 0.02);
    transform: translateX(4px);
}

.performance-row:last-child {
    border-bottom: none;
}

/* Left Stat Column */
.performance-stat-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.simulator-panel-header {
    margin-bottom: 30px;
    text-align: left;
}

.simulator-badge {
    font-family: var(--font-heading);
    font-size: 9px;
    font-weight: 800;
    color: var(--color-secondary); /* Neon Green */
    letter-spacing: 1.5px;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 10px;
    border: 1px solid rgba(104, 189, 70, 0.22);
    background: rgba(104, 189, 70, 0.05);
    padding: 4px 12px;
    border-radius: 30px;
}

.simulator-panel-title {
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    color: var(--color-primary); /* Navy Blue */
    letter-spacing: 0.2px;
    text-transform: uppercase;
    margin: 0;
    line-height: 1.3;
}

.threat-info-wrap {
    display: flex;
    align-items: center;
    gap: 14px;
}

.threat-emoji {
    font-size: 32px;
    line-height: 1;
}

.threat-details {
    display: flex;
    flex-direction: column;
}

.threat-name {
    font-family: var(--font-heading);
    font-size: 22px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0;
    line-height: 1.1;
    margin-bottom: 2px;
}

.threat-status {
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 4px;
}

.status-vulnerable {
    color: #ef4444; /* Neon Red */
}

/* Center Tech Dot Column */
.performance-dot-col {
    display: flex;
    justify-content: center;
    align-items: center;
}

.performance-tech-dot-wrap {
    width: 32px;
    height: 32px;
    border: 1px solid rgba(0, 43, 94, 0.07);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.performance-tech-dot {
    width: 5px;
    height: 5px;
    background-color: rgba(0, 43, 94, 0.25);
    border-radius: 50%;
}

/* Right Slider Button Column */
.performance-slider-col {
    display: flex;
    justify-content: flex-start;
    padding-left: 20px;
    overflow: visible; /* allow toggle to travel in from right column */
}

.performance-toggle-track {
    position: relative;
    width: 100%;
    max-width: 280px;
    height: 58px;
    border-radius: 29px;
    padding: 6px;
    box-sizing: border-box;
    box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.03);
    overflow: hidden;
}

/* Toggle track stretch animation — starts from right column, travels left, elastic snap */
.toggle-stretch-anim {
    transform-origin: right center;
    transform: translateX(55vw) scaleX(0.4);
    opacity: 0;
}

/* Triggered when section reveals */
.toggle-stretch-anim.toggle-active {
    animation: toggleStretchIn 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes toggleStretchIn {
    0% {
        opacity: 0;
        transform: translateX(55vw) scaleX(0.4);
        transform-origin: right center;
    }
    55% {
        opacity: 1;
        transform: translateX(0) scaleX(1.12);
        transform-origin: right center;
    }
    72% {
        transform: translateX(0) scaleX(0.95);
        transform-origin: right center;
    }
    88% {
        transform: translateX(0) scaleX(1.03);
        transform-origin: right center;
    }
    100% {
        opacity: 1;
        transform: translateX(0) scaleX(1);
        transform-origin: right center;
    }
}

/* Reference color gradients for tracks */
.track-silver {
    background: linear-gradient(90deg, #f3f4f6 0%, #e5e7eb 100%);
}

.track-cyan {
    background: linear-gradient(90deg, #e0f2fe 0%, #bae6fd 100%);
}

.track-purple {
    background: linear-gradient(90deg, #f3e8ff 0%, #e9d5ff 100%);
}

/* Rounded Slider Knob */
.performance-toggle-knob {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 46px;
    height: 46px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 
        0 4px 10px rgba(0, 43, 94, 0.08),
        0 1px 3px rgba(0, 0, 0, 0.05);
    transition: left 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: left, opacity;
}

/* Knob is hidden while its track is still animating in */
.toggle-stretch-anim .performance-toggle-knob {
    opacity: 0;
    transition: opacity 0.4s ease, left 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Knob fades in AFTER track has landed — transform is handled by nth-child rules */
.toggle-stretch-anim .performance-toggle-knob.knob-visible {
    opacity: 1;
}

/* 
   Slider Active Coordinate Physics (Fluid Width Support):
   We use 'left' instead of 'transform' to allow the track to stretch to any width.
   Knob is 46px, Padding 6px. Right position is calc(100% - 52px).
*/
.performance-row:nth-child(1) .performance-toggle-knob {
    left: calc(100% - 52px); /* Starts on the right side */
}

.performance-row:nth-child(2) .performance-toggle-knob {
    left: 6px; /* Starts on the left side */
}

.performance-row:nth-child(3) .performance-toggle-knob {
    left: calc(100% - 52px); /* Starts on the right side */
}

/* Staggered elastic swipe-in delays per row */
.performance-rows .performance-row.reveal-fade-left.revealed:nth-child(1) {
    animation-delay: 0s;
}
.performance-rows .performance-row.reveal-fade-left.revealed:nth-child(2) {
    animation-delay: 0.35s;
}
.performance-rows .performance-row.reveal-fade-left.revealed:nth-child(3) {
    animation-delay: 0.7s;
}

/* VIEWPORT REVEAL STATE ACTIVATION */
.performance-stats-section.revealed .performance-row:nth-child(1) .performance-toggle-knob {
    left: 6px; /* Slides smoothly to the left! */
}

.performance-stats-section.revealed .performance-row:nth-child(2) .performance-toggle-knob {
    left: calc(100% - 52px); /* Slides smoothly to the right! */
}

.performance-stats-section.revealed .performance-row:nth-child(3) .performance-toggle-knob {
    left: 6px; /* Slides smoothly to the left! */
}

/* MICRO INTERACTIVE HOVER TRIGGERS (Plays with knob position when hovered!) */
.performance-row:nth-child(1):hover .performance-toggle-knob {
    left: calc(100% - 52px);
}

.performance-row:nth-child(2):hover .performance-toggle-knob {
    left: 6px;
}

.performance-row:nth-child(3):hover .performance-toggle-knob {
    left: calc(100% - 52px);
}

/* Right Column: Visual Frame with live.jpeg */
.performance-right-col {
    display: flex;
    justify-content: center;
    align-items: center;
}

.performance-image-wrapper {
    position: relative;
    width: 100%;
    max-width: 520px; /* Enlarged from 440px to showcase full live zone mockup */
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 30px 60px -10px rgba(0, 43, 94, 0.12);
    border: 1px solid rgba(0, 43, 94, 0.05);
    aspect-ratio: 16 / 11;
    display: flex;
    background-color: #fafafa;
    
    /* Custom, highly cinematic viewport reveal transitions */
    opacity: 0;
    transform: scale(0.95) translateY(30px);
    transition: 
        opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1),
        transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: transform, opacity;
}

.performance-stats-section.revealed .performance-image-wrapper {
    opacity: 1;
    transform: scale(1) translateY(0);
}

.performance-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.performance-image-wrapper:hover .performance-img {
    transform: scale(1.04);
}

/* Cyber overlay tag */
.performance-img-tag {
    position: absolute;
    bottom: 22px;
    left: 22px;
    background: rgba(11, 19, 43, 0.78);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 8px 18px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #ffffff;
    font-family: var(--font-heading);
    font-size: 9.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.performance-glow-dot {
    width: 6px;
    height: 6px;
    background-color: var(--color-secondary); /* Neon Green */
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 8px var(--color-secondary), 0 0 16px var(--color-secondary);
    animation: tagGlow 1.8s infinite alternate;
}

@keyframes tagGlow {
    0% { opacity: 0.45; }
    100% { opacity: 1; }
}

/* ==========================================================================
   13. Interactive Simulator HUD & Toggle Physics overrides
   ========================================================================== */

/* Toggle knob overrides when a threat simulation is ACTIVE.
   Row 1 idle=left(0), active=right(82). Row 2 idle=right(82), active=left(0). Row 3 idle=left(0), active=right(82). */
.performance-row:nth-child(1).sim-active .performance-toggle-knob {
    opacity: 1 !important;
    left: calc(100% - 52px) !important;
}

.performance-row:nth-child(2).sim-active .performance-toggle-knob {
    opacity: 1 !important;
    left: 6px !important;
}

.performance-row:nth-child(3).sim-active .performance-toggle-knob {
    opacity: 1 !important;
    left: calc(100% - 52px) !important;
}

/* Make row background color glow when simulation is active */
.performance-row.sim-active {
    background-color: rgba(0, 43, 94, 0.02);
    cursor: pointer;
}

/* Custom threat status states */
.status-scanning {
    color: #f59e0b; /* Cyber Amber */
    animation: statusBlink 1s infinite alternate;
}

.status-secured {
    color: var(--color-secondary); /* Neon Green */
    text-shadow: 0 0 10px rgba(104, 189, 70, 0.3);
}

@keyframes statusBlink {
    0% { opacity: 0.5; }
    100% { opacity: 1; }
}

/* Simulator HUD Overlays */
.scanner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 5;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    background: rgba(11, 19, 43, 0.2);
}

/* Image wrapper gets scanning class from Javascript when threat is simulated */
.performance-image-wrapper.scanning .scanner-overlay {
    opacity: 1;
}

.scanner-grid {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: 30px 30px;
    background-image: 
        linear-gradient(to right, rgba(104, 189, 70, 0.08) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(104, 189, 70, 0.08) 1px, transparent 1px);
    z-index: 1;
}

.scanner-line {
    position: absolute;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, transparent, var(--color-secondary), transparent);
    box-shadow: 
        0 0 15px var(--color-secondary), 
        0 0 30px var(--color-secondary);
    z-index: 2;
    animation: scannerSweep 2.2s infinite ease-in-out;
}

@keyframes scannerSweep {
    0% { top: 0%; }
    50% { top: 100%; }
    100% { top: 0%; }
}

.scanner-glow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at center, rgba(104, 189, 70, 0.12), transparent 75%);
    z-index: 1;
}

.scanner-status-panel {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(11, 19, 43, 0.88);
    border: 1px solid rgba(104, 189, 70, 0.3);
    padding: 6px 14px;
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    gap: 6px;
    color: var(--color-secondary);
    font-family: var(--font-heading);
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    z-index: 3;
}

.performance-footer-text {
    margin-top: 0;
    margin-bottom: 50px;
    padding-top: 0;
    position: relative;
    z-index: 2; /* Sit cleanly on top of the globe canvas */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 20px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.performance-footer-p {
    font-family: var(--font-body);
    font-size: 14.5px;
    line-height: 1.65;
    color: var(--color-text-muted);
    margin: 0;
    font-weight: 400;
}

/* RESPONSIVE CONFIGURATIONS */
@media (max-width: 991px) {
    .performance-grid {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    .performance-right-col {
        order: -1; /* Display image at top on tablets/mobile */
        margin-bottom: 20px;
    }
    .performance-image-wrapper {
        max-width: 500px;
    }
}

@media (max-width: 768px) {
    .performance-stats-section {
        padding: 80px 20px 40px 20px;
    }
    .performance-row {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
        padding: 30px 0;
    }
    .performance-stat-col {
        align-items: center;
    }
    .performance-dot-col {
        display: none; /* Hide center dot on mobile */
    }
    .performance-slider-col {
        padding-left: 0;
        justify-content: center;
    }
    .performance-title {
        font-size: 34px;
    }
    .performance-footer-text {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
        margin-top: 30px;
        padding-top: 20px;
    }
}

/* ==========================================================================
   8. Combined CEO Vision & FAQs Section (Bright White Theme)
   ========================================================================== */

/* ==========================================================================
   Section 10: Ed-Tech Cybersecurity Symposium & Awards Split Showcase
   ========================================================================== */
.mdr-video-section {
    position: relative;
    width: 100%;
    background-color: #ffffff;
    background-image:
        linear-gradient(rgba(0, 43, 94, 0.015) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 43, 94, 0.015) 1px, transparent 1px);
    background-size: 60px 60px;
    padding: 90px 40px;
    box-sizing: border-box;
    overflow: hidden;
    z-index: 20;
    border-top: 1px solid rgba(0, 43, 94, 0.08);
    border-bottom: 1px solid rgba(0, 43, 94, 0.08);
}

.awards-split-container {
    max-width: 1240px;
    margin: 0 auto;
    width: 100%;
}

.awards-split-grid {
    display: grid;
    grid-template-columns: 1.05fr 1fr;
    gap: 60px;
    align-items: stretch;
}

/* Left Image Column */
.awards-image-col {
    width: 100%;
    position: relative;
    display: flex;
}

.awards-image-wrapper {
    position: relative;
    width: 100%;
    min-height: 540px;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 43, 94, 0.08);
    border: 1.5px solid #e2e8f0;
    background: #f8fafc;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    display: flex;
}

.awards-image-wrapper:hover {
    transform: translateY(-6px);
    box-shadow: 0 30px 65px rgba(0, 43, 94, 0.14), 0 0 30px rgba(245, 158, 11, 0.2);
    border-color: #f59e0b;
}

.awards-split-img {
    width: 100%;
    height: 100%;
    min-height: 540px;
    object-fit: cover;
    object-position: center center;
    display: block;
    transition: transform 0.6s ease;
}

.awards-image-wrapper:hover .awards-split-img {
    transform: scale(1.03);
}

.awards-floating-badge {
    position: absolute;
    bottom: 24px;
    left: 24px;
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1.5px solid #e2e8f0;
    padding: 10px 22px;
    border-radius: 30px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #002b5e;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1px;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.1);
}

.awards-floating-badge i {
    font-size: 16px;
    color: #d97706;
}

/* Right Content Column */
.awards-content-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    justify-content: center;
}

.awards-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(90, 185, 71, 0.1);
    border: 1px solid rgba(90, 185, 71, 0.35);
    padding: 6px 16px;
    border-radius: 30px;
    margin-bottom: 20px;
}

.awards-tag-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #5ab947;
    box-shadow: 0 0 10px #5ab947;
    animation: pulseDot 2s infinite;
}

.awards-tag-text {
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #5ab947;
    text-transform: uppercase;
}

.awards-section-title {
    font-family: var(--font-heading);
    font-size: 40px;
    font-weight: 800;
    line-height: 1.25;
    color: #002b5e !important;
    text-shadow: none !important;
    margin: 0 0 24px 0;
}

.awards-section-title span {
    color: #5ab947 !important;
    background: none !important;
    -webkit-text-fill-color: #5ab947 !important;
    text-shadow: none !important;
}

.awards-section-desc {
    font-family: var(--font-body);
    font-size: 16.5px;
    font-weight: 400;
    line-height: 1.7;
    color: #475569 !important;
    margin: 0 0 16px 0;
}

.awards-section-ctas {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-top: 28px;
    flex-wrap: wrap;
}

.awards-cta-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #002b5e !important;
    color: #ffffff !important;
    padding: 15px 30px;
    border-radius: 12px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-decoration: none;
    border: none !important;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.25) !important;
    transition: all 0.3s ease;
}

.awards-cta-primary:hover {
    background: #001f44 !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0, 43, 94, 0.4) !important;
    color: #ffffff !important;
}

.awards-cta-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #5ab947 !important;
    color: #ffffff !important;
    padding: 15px 30px;
    border-radius: 12px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 0.5px;
    border: none !important;
    cursor: pointer;
    box-shadow: 0 8px 24px rgba(90, 185, 71, 0.3) !important;
    transition: all 0.3s ease;
}

.awards-cta-secondary:hover {
    background: #4ea83c !important;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(90, 185, 71, 0.45) !important;
    color: #ffffff !important;
}

.awards-cta-primary span,
.awards-cta-primary i,
.awards-cta-secondary span,
.awards-cta-secondary i {
    color: #ffffff !important;
}

@media (max-width: 991px) {
    .awards-split-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .awards-image-wrapper,
    .awards-split-img {
        min-height: 360px;
    }
    .awards-section-title {
        font-size: 32px;
    }
    .mdr-video-section {
        padding: 70px 24px;
    }
}

/* ==========================================================================
   8. Combined CEO Vision & FAQs Section (Bright White Theme)
   ========================================================================== */
.ceo-faq-section {
    padding: 60px 60px 120px 60px;
    background-color: #ffffff;
    position: relative;
    border-bottom: 1px solid rgba(0, 43, 94, 0.05);
    width: 100%;
    box-sizing: border-box;
    overflow: hidden; /* Prevent waving canvas overflows */
}

/* Background Wavy Lines Canvas */
#ceoWavyCanvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

/* Background Dotted Spinning Cyber Globe Canvas */
#globeDotCanvas {
    position: absolute;
    top: -30px; /* Centered perfectly behind callout text and CEO header! */
    left: 50%;
    transform: translateX(-50%);
    width: 650px;
    height: 650px;
    pointer-events: none;
    z-index: 1; /* Underneath text columns, on top of any flat background */
    opacity: 0.9;
    will-change: transform;
}

/* Adjust size on smaller screens to ensure premium responsiveness */
@media (max-width: 991px) {
    #globeDotCanvas {
        top: -10px;
        width: 480px;
        height: 480px;
        opacity: 0.8;
    }
}

@media (max-width: 768px) {
    #globeDotCanvas {
        top: 10px;
        width: 360px;
        height: 360px;
        opacity: 0.7;
    }
}

.ceo-faq-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2; /* Lift above background wavy lines */
}

.ceo-faq-grid {
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 80px;
    align-items: flex-start;
}

/* Left Column: CEO message */
.ceo-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.combined-section-header {
    text-align: center;
    margin-bottom: 70px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.combined-section-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-secondary); /* Neon Green */
    margin-bottom: 12px;
    display: inline-block;
}

.combined-section-title {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 800;
    color: var(--color-primary); /* Navy Blue */
    letter-spacing: -2px;
    margin: 0;
    line-height: 1.2;
}

.combined-section-title span {
    color: var(--color-text-muted);
    font-weight: 400;
}

.combined-ceo-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    max-width: 480px;
    margin: 0 auto;
    position: relative;
}

.combined-ceo-image-wrapper {
    width: 240px;
    height: 240px;
    margin: 0 auto 30px auto;
    position: relative;
    transition: width 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275), height 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275), margin-bottom 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.combined-ceo-image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #ffffff;
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.1);
    position: relative;
    z-index: 2;
    transition: border-width 0.7s ease, box-shadow 0.7s ease;
}

.combined-ceo-image-ring {
    position: absolute;
    top: -8px;
    left: -8px;
    right: -8px;
    bottom: -8px;
    border-radius: 50%;
    border: 2px dashed rgba(104, 189, 70, 0.35); /* Dashed Neon Green ring */
    animation: rotate-ring-clockwise 24s linear infinite;
    z-index: 1;
}

@keyframes rotate-ring-clockwise {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Revealed active states */
.combined-ceo-card.vision-revealed .combined-ceo-image-wrapper {
    width: 130px;
    height: 130px;
    margin-bottom: 25px;
}

.combined-ceo-card.vision-revealed .combined-ceo-image {
    border-width: 4px;
    box-shadow: 0 10px 25px rgba(0, 43, 94, 0.08);
}

/* Reveal CTA Button */
.ceo-reveal-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--color-primary); /* Navy Blue */
    color: #ffffff;
    border: none;
    border-radius: 40px;
    padding: 16px 32px;
    font-family: var(--font-heading);
    font-size: 14.5px;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 12px 30px rgba(0, 43, 94, 0.16);
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    margin-top: 10px;
    outline: none;
    z-index: 3;
    position: relative;
}

.ceo-reveal-btn:hover {
    background: var(--color-secondary); /* Neon Green */
    box-shadow: 0 15px 35px rgba(104, 189, 70, 0.28);
    transform: translateY(-3px);
}

.ceo-reveal-btn:active {
    transform: translateY(-1px);
}

.reveal-btn-arrow {
    transition: transform 0.3s ease;
}

.ceo-reveal-btn:hover .reveal-btn-arrow {
    transform: translateX(4px);
}

.combined-ceo-card.vision-revealed .ceo-reveal-btn {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    max-height: 0;
    margin: 0;
    padding: 0;
    transform: scale(0.9);
}

/* Quotation body smooth expand transitions */
.combined-ceo-body {
    position: relative;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    max-height: 0;
    overflow: hidden;
    transform: translateY(25px);
    transition: opacity 0.7s ease, max-height 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.combined-ceo-card.vision-revealed .combined-ceo-body {
    opacity: 1;
    visibility: visible;
    max-height: 500px;
    transform: translateY(0);
}

.combined-ceo-quote-icon {
    font-family: var(--font-heading);
    font-size: 80px;
    font-weight: 800;
    color: rgba(104, 189, 70, 0.12); /* Soft green quotation mark */
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translateX(-50%);
    line-height: 1;
}

.combined-ceo-text {
    font-family: var(--font-body);
    font-size: 18px;
    line-height: 1.6;
    color: var(--color-primary); /* Navy Blue quote text */
    font-weight: 500;
    font-style: italic;
    margin: 0 0 25px 0;
    letter-spacing: -0.3px;
    position: relative;
    z-index: 2;
}

.combined-ceo-name {
    font-family: var(--font-heading);
    font-size: 19px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 4px 0;
}

.combined-ceo-role {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--color-secondary); /* Neon Green role tag */
    margin: 0;
}

/* Right Column: FAQs Accordion */
.faq-column {
    display: flex;
    flex-direction: column;
}

.combined-faq-list {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.faq-item {
    border-bottom: 1px solid rgba(0, 43, 94, 0.08);
    padding: 4px 0;
}

.faq-trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: none;
    border: none;
    padding: 22px 0;
    text-align: left;
    cursor: pointer;
    outline: none;
}

.faq-question {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 700;
    color: var(--color-primary);
    transition: color 0.4s ease, opacity 0.4s ease, transform 0.4s ease;
    letter-spacing: -0.3px;
    padding-right: 20px;
}

.faq-trigger:hover .faq-question {
    color: var(--color-secondary);
}

.faq-icon-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    flex-shrink: 0;
}

.faq-tick-icon {
    color: var(--color-primary); /* Navy Blue by default */
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), color 0.4s ease, filter 0.4s ease;
    transform: scale(0.9);
}

.faq-trigger:hover .faq-tick-icon {
    color: var(--color-secondary); /* Neon Green on hover */
}

/* Active FAQ Item styling - checkmark turns neon green, scales, and glows */
.faq-item.active .faq-tick-icon {
    color: var(--color-secondary);
    transform: scale(1.15) rotate(360deg); /* Modern tech rotation */
    filter: drop-shadow(0 0 6px rgba(104, 189, 70, 0.4)); /* Premium glow */
}

.faq-item.active .faq-question {
    color: var(--color-secondary);
    opacity: 0.15; /* Soft, high-tech ghost state */
    transform: translateY(-4px);
}

.faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.faq-content-inner {
    padding: 0 0 20px 0;
    text-align: left;
}

.faq-content-inner p {
    font-family: var(--font-body);
    font-size: 14.5px;
    line-height: 1.6;
    color: #4b5563;
    margin: 0;
    font-weight: 400;
}

/* RESPONSIVE MEDIA OVERRIDES */
@media (max-width: 991px) {
    .ceo-faq-section {
        padding: 40px 40px 90px 40px;
    }
    .ceo-faq-grid {
        grid-template-columns: 1fr;
        gap: 70px;
    }
    .combined-faq-header {
        text-align: center;
    }
    .combined-faq-hotline {
        margin: 0 auto 30px auto;
    }
    .faq-trigger {
        padding: 20px 0;
    }
}

@media (max-width: 768px) {
    .ceo-faq-section {
        padding: 30px 20px 70px 20px;
    }
    .combined-title {
        font-size: 32px;
    }
    .combined-ceo-text {
        font-size: 16px;
    }
    .faq-question {
        font-size: 15px;
    }
}

/* ==========================================================================
   12. Premium Dark Footer & Get in Touch Section
   ========================================================================== */
.contact-footer-section {
    position: relative;
    background-color: #050b14; /* Deep Cyber Navy Black */
    padding: 140px 60px 100px 60px; /* Symmetrical padding now that deep footer copyright bar is removed */
    width: 100%;
    box-sizing: border-box;
    z-index: 23;
    overflow: hidden;
    color: #ffffff;
}

.waving-dot-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Let all mouse and scroll events pass through */
    z-index: 1;
    opacity: 0.65;
}

.contact-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 80px;
    align-items: flex-start;
}

.contact-left-col {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.contact-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-secondary); /* Neon Green tag */
    margin-bottom: 15px;
    display: inline-block;
}

.contact-title {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -2px;
    line-height: 1.15;
    margin: 0 0 25px 0;
}

.contact-title span {
    background: linear-gradient(135deg, #ffffff 40%, var(--color-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact-desc {
    font-size: 16px;
    line-height: 1.6;
    color: #a1a8b5;
    margin: 0;
    font-weight: 400;
}

.contact-right-col {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.contact-cta-title {
    font-family: var(--font-heading);
    font-size: 20px;
    font-weight: 500;
    color: #cbd5e1;
    line-height: 1.5;
    margin: 0 0 40px 0;
    letter-spacing: -0.5px;
}

.contact-actions-wrap {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
}

.premium-contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background-color: var(--color-secondary); /* Neon green button background */
    color: var(--color-primary); /* Navy text */
    padding: 16px 36px;
    border-radius: 30px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    text-decoration: none;
    box-shadow: 0 10px 30px rgba(104, 189, 70, 0.25);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
}

.premium-contact-btn:hover {
    transform: translateY(-3px) scale(1.02);
    background-color: #ffffff;
    box-shadow: 0 15px 35px rgba(104, 189, 70, 0.45);
}

.contact-btn-arrow {
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.premium-contact-btn:hover .contact-btn-arrow {
    transform: translateX(6px);
}

.linkedin-follow-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #a1a8b5;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.linkedin-follow-link:hover {
    color: var(--color-secondary);
}

.linkedin-follow-link svg {
    transition: transform 0.3s ease;
}

.linkedin-follow-link:hover svg {
    transform: scale(1.15) rotate(5deg);
}

/* Footer Bottom Copyright Bar */
.deep-footer-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding-top: 40px;
    margin-top: 80px;
}

.footer-logo-text {
    font-family: var(--font-heading);
    font-size: 16px;
    font-weight: 900;
    letter-spacing: 1px;
    color: #ffffff;
}

.footer-logo-text span {
    color: var(--color-secondary);
}

.copyright-text {
    font-size: 13px;
    color: rgba(161, 168, 181, 0.5);
    margin: 0;
    font-weight: 400;
}

/* RESPONSIVE CONFIGURATIONS FOR CONTACT FOOTER */
@media (max-width: 991px) {
    .contact-footer-section {
        padding: 100px 40px 40px 40px;
    }
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }
    .deep-footer-bar {
        flex-direction: column;
        gap: 20px;
        text-align: center;
        margin-top: 60px;
    }
}

@media (max-width: 768px) {
    .contact-footer-section {
        padding: 80px 20px 40px 20px;
    }
    .contact-title {
        font-size: 36px;
    }
    .contact-cta-title {
        font-size: 17px;
    }
}

/* ==========================================================================
   16. Bulletproof Premium Vertical Center Split Reveal Spells
   ========================================================================== */
.center-reveal-text {
    /* 100% visible by default - no hidden opacity or clip-path blocks */
    will-change: clip-path, transform;
}

.center-reveal-text.revealed {
    animation: 
        centerVerticalSplitOpen 2.2s cubic-bezier(0.16, 1, 0.3, 1) both,
        textGlowBloom 2.6s cubic-bezier(0.16, 1, 0.3, 1) both;
}

/* Specific intense glow bloom for active spans */
.center-reveal-text.revealed span {
    animation: spanGlowBloom 2.8s cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes centerVerticalSplitOpen {
    0% {
        clip-path: polygon(0 50%, 100% 50%, 100% 50%, 0 50%); /* Thin central horizontal line */
        transform: translateY(8px);
    }
    100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); /* Opens up perfectly to the top and bottom */
        transform: translateY(0);
    }
}

@keyframes textGlowBloom {
    0% {
        text-shadow: 0 0 0 rgba(104, 189, 70, 0);
    }
    30% {
        /* Soft glowing green aura */
        text-shadow: 
            0 0 10px rgba(104, 189, 70, 0.35),
            0 0 20px rgba(104, 189, 70, 0.15);
    }
    100% {
        /* Settles down to a sleek, readable contrast shadow */
        text-shadow: 0 2px 10px rgba(0, 43, 94, 0.02);
    }
}

@keyframes spanGlowBloom {
    0% {
        text-shadow: 0 0 0 rgba(104, 189, 70, 0);
    }
    30% {
        /* Intense volumetric glowing aura specifically for highlighted tags */
        text-shadow: 
            0 0 15px rgba(104, 189, 70, 0.65),
            0 0 30px rgba(104, 189, 70, 0.35),
            0 0 45px rgba(104, 189, 70, 0.15);
    }
    100% {
        /* Sleek green ambient drop glow */
        text-shadow: 0 0 8px rgba(104, 189, 70, 0.22);
    }
}

/* ==========================================================================
   17. Custom Modifications (Submenu, Highlight, Glowing Text)
   ========================================================================== */
.sub-menu-dropdown {
    position: absolute;
    top: 60px;
    left: 0;
    background: rgba(11, 19, 43, 0.95);
    border: 1px solid rgba(104, 189, 70, 0.2);
    border-radius: 12px;
    padding: 10px 0;
    display: flex;
    flex-direction: column;
    min-width: 150px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 100;
}

.sub-menu-dropdown.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.sub-menu-item {
    color: #ffffff;
    text-decoration: none;
    padding: 10px 20px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.sub-menu-item:hover {
    background: rgba(104, 189, 70, 0.1);
    color: #68BD46;
}

/* Minimal Highlight with Attention-Grabbing Pulse */
@keyframes highlightNoticePulse {
    0%, 100% {
        text-shadow: 0 0 8px rgba(104, 189, 70, 0.3);
        transform: scale(1);
    }
    50% {
        text-shadow: 0 0 16px rgba(104, 189, 70, 0.8), 0 0 30px rgba(104, 189, 70, 0.5);
        transform: scale(1.05);
        color: #8ce865;
    }
}

.highlight-simple {
    color: #68BD46;
    font-weight: 600;
    display: inline-block; /* Required for transform */
    animation: highlightNoticePulse 2s infinite ease-in-out;
}

/* Glowing text for ticker items */
.glowing-text {
    text-shadow: 0 0 10px #68BD46, 0 0 20px rgba(104, 189, 70, 0.5);
    color: #ffffff;
}

/* Odometer Fixes */
.stat-number.odometer {
    letter-spacing: normal;
    line-height: 1.15;
}
.odometer .odometer-digit {
    padding: 0 2px;
}
.odometer .odometer-digit-inner {
    overflow: visible;
}

/* Menu Wrapper */
.menu-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
}

/* Inline Submenu Styles - Smooth Horizontal Slide to Right */
.sub-menu-inline {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 8px;
    opacity: 0;
    visibility: hidden;
    max-width: 0;
    overflow: hidden;
    transform: translateX(-12px);
    transition: max-width 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                opacity 0.35s ease, 
                transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                visibility 0.35s ease;
    white-space: nowrap;
}

.sub-menu-inline.show {
    opacity: 1;
    visibility: visible;
    max-width: 400px;
    transform: translateX(0);
}

.sub-menu-inline-item {
    background: rgba(241, 245, 249, 0.85);
    border: 1px solid rgba(226, 232, 240, 0.8);
    border-radius: var(--radius-full);
    padding: 6px 16px;
    color: var(--color-primary);
    text-decoration: none;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    backdrop-filter: blur(8px);
    transition: var(--transition-normal);
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
}

.sub-menu-inline-item:hover {
    border-color: var(--color-secondary);
    background: var(--color-primary);
    color: #ffffff;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0, 43, 94, 0.12);
}

/* ==========================================================================
   Request Invitation Modal
   ========================================================================== */
.ri-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(0, 8, 24, 0.65);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    z-index: 9998;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease;
}
.ri-backdrop.ri-open { opacity: 1; pointer-events: all; }

.ri-modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -46%) scale(0.95);
    width: min(600px, 94vw);
    max-height: 90vh;
    overflow-y: auto;
    background: #ffffff;
    border-radius: 24px;
    padding: 48px 44px 44px;
    box-shadow: 0 40px 100px -20px rgba(0,43,94,0.28), 0 0 0 1px rgba(0,43,94,0.06);
    z-index: 9999;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease, transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}
.ri-modal.ri-open {
    opacity: 1;
    pointer-events: all;
    transform: translate(-50%, -50%) scale(1);
}

.ri-close {
    position: absolute;
    top: 18px; right: 18px;
    width: 36px; height: 36px;
    border-radius: 50%;
    border: 1px solid rgba(0,43,94,0.1);
    background: rgba(0,43,94,0.04);
    cursor: pointer;
    font-size: 20px;
    color: #6b7280;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s, color 0.2s;
}
.ri-close:hover { background: rgba(0,43,94,0.08); color: #002B5E; }

.ri-modal-header { margin-bottom: 32px; }
.ri-modal-tag {
    display: inline-block;
    font-size: 10px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    color: #68BD46;
    border: 1px solid rgba(104,189,70,0.3);
    background: rgba(104,189,70,0.07);
    padding: 4px 14px; border-radius: 30px;
    margin-bottom: 14px;
}
.ri-modal-title {
    font-family: var(--font-heading, 'Inter', sans-serif);
    font-size: 28px; font-weight: 800;
    color: #002B5E; margin: 0 0 8px; line-height: 1.2;
}
.ri-modal-sub { font-size: 14px; color: #6b7280; margin: 0; }

.ri-form { display: flex; flex-direction: column; gap: 20px; }
.ri-field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.ri-field { display: flex; flex-direction: column; gap: 7px; }
.ri-label { font-size: 13px; font-weight: 600; color: #374151; }
.ri-req { color: #ef4444; margin-left: 2px; }
.ri-optional { color: #9ca3af; font-weight: 400; font-size: 12px; margin-left: 4px; }

.ri-input {
    width: 100%; box-sizing: border-box;
    padding: 13px 16px;
    border: 1.5px solid rgba(0,43,94,0.12);
    border-radius: 12px;
    font-size: 14px; font-family: inherit;
    color: #111827; background: #f9fafb;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}
.ri-input:focus {
    border-color: #68BD46; background: #fff;
    box-shadow: 0 0 0 3px rgba(104,189,70,0.12);
}
.ri-input::placeholder { color: #9ca3af; }
.ri-textarea { resize: vertical; min-height: 100px; }

.ri-submit {
    display: flex; align-items: center; justify-content: center; gap: 10px;
    width: 100%; padding: 15px 28px;
    background: linear-gradient(135deg, #002B5E 0%, #004494 100%);
    color: #fff; border: none; border-radius: 50px;
    font-size: 15px; font-weight: 700; font-family: inherit;
    cursor: pointer; letter-spacing: 0.3px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 8px 24px rgba(0,43,94,0.22);
    margin-top: 4px;
}
.ri-submit:hover { transform: translateY(-2px); box-shadow: 0 14px 32px rgba(0,43,94,0.3); }

.ri-success {
    display: none; flex-direction: column;
    align-items: center; text-align: center;
    padding: 20px 0 10px; gap: 12px;
}
.ri-success-icon {
    width: 72px; height: 72px; border-radius: 50%;
    background: rgba(104,189,70,0.08);
    border: 2px solid rgba(104,189,70,0.3);
    display: flex; align-items: center; justify-content: center;
    font-size: 32px; color: #68BD46; margin-bottom: 8px;
}
.ri-success h3 { font-size: 22px; font-weight: 800; color: #002B5E; margin: 0; }
.ri-success p { font-size: 14px; color: #6b7280; margin: 0; max-width: 320px; }

@media (max-width: 560px) {
    .ri-modal { padding: 36px 24px 32px; }
    .ri-field-row { grid-template-columns: 1fr; }
    .ri-modal-title { font-size: 22px; }
}

/* ==========================================================================
   Interactive Event Partners Section Styles
   ========================================================================== */
.event-partners-section {
    position: relative;
    background-color: #fafbfd;
    padding: 90px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    overflow: hidden;
    border-top: 1px solid rgba(0, 43, 94, 0.06);
    border-bottom: 1px solid rgba(0, 43, 94, 0.06);
}

.partners-container {
    max-width: 1250px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

.partners-header {
    text-align: center;
    margin-bottom: 45px;
}

.partners-tag {
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: #5ab947;
    text-transform: uppercase;
    background: rgba(90, 185, 71, 0.08);
    border: 1px solid rgba(90, 185, 71, 0.2);
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 16px;
}

.partners-title {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -1.5px;
    margin: 0 0 14px 0;
    line-height: 1.2;
}

.partners-title span {
    color: #5ab947;
}

.partners-lead {
    font-size: 16px;
    color: #6b7280;
    max-width: 620px;
    margin: 0 auto;
    line-height: 1.5;
}

/* Dedicated Partner Ticker Marquee Strip */
.partner-marquee-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding: 15px 0;
    margin-top: 15px;
    mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);
}

.partner-marquee-track {
    display: flex;
    align-items: center;
    gap: 24px;
    white-space: nowrap;
    width: max-content;
    animation: partnerMarqueeScroll 28s linear infinite;
}

.partner-marquee-wrapper:hover .partner-marquee-track {
    animation-play-state: paused;
}

.partner-scroll-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 20px;
    padding: 20px 30px;
    display: inline-flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
    position: relative;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.partner-scroll-card.featured {
    border-color: rgba(90, 185, 71, 0.35);
    background: linear-gradient(135deg, #ffffff 0%, rgba(90, 185, 71, 0.04) 100%);
}

.partner-scroll-card:hover {
    transform: translateY(-4px);
    border-color: #5ab947;
    box-shadow: 0 14px 30px rgba(90, 185, 71, 0.15);
}

.partner-card-badge {
    background: #5ab947;
    color: #ffffff;
    font-family: var(--font-heading);
    font-size: 9.5px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 3px 9px;
    border-radius: 12px;
}

.partner-card-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: rgba(0, 43, 94, 0.05);
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    transition: all 0.3s ease;
}

.partner-scroll-card:hover .partner-card-icon {
    background: #5ab947;
    color: #ffffff;
}

.partner-card-name {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -0.3px;
}

@keyframes partnerMarqueeScroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* ==========================================================================
   Meet the Experts Shaping the Conversation Section (Reference Design Alignment)
   ========================================================================== */
.speakers-section {
    position: relative;
    background: 
        linear-gradient(180deg, rgba(2, 10, 22, 0.7) 0%, rgba(2, 10, 22, 0.82) 100%),
        url('images/Image 5.jpg') center/cover no-repeat !important;
    padding: 100px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    overflow: hidden;
}

.speakers-section::before,
.speakers-section::after {
    display: none;
}

.speakers-container {
    max-width: 1250px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

.speakers-header {
    text-align: center;
    margin-bottom: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.speakers-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 3px;
    color: #68BD46;
    text-transform: uppercase;
    background: rgba(2, 20, 38, 0.75);
    border: 1.5px solid rgba(104, 189, 70, 0.6);
    padding: 8px 24px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 22px;
    box-shadow: 0 0 25px rgba(104, 189, 70, 0.25), inset 0 0 15px rgba(14, 165, 233, 0.2);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.speakers-title {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -1.5px;
    margin: 0 0 18px 0;
    line-height: 1.25;
    text-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);
}

.speakers-title span {
    color: #68BD46;
    background: linear-gradient(135deg, #68BD46 0%, #7ee352 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 30px rgba(104, 189, 70, 0.4);
}

.speakers-lead {
    font-size: 18px;
    color: #e2e8f0;
    max-width: 720px;
    margin: 0 auto;
    line-height: 1.6;
    font-weight: 500;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
}

.speakers-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    max-width: 1200px;
    margin: 0 auto 55px auto;
}

.speaker-card {
    background: linear-gradient(135deg, rgba(3, 20, 42, 0.92) 0%, rgba(2, 10, 22, 0.95) 100%);
    border: 1.5px solid rgba(104, 189, 70, 0.45);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border-radius: 28px;
    padding: 40px 26px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 20px;
    box-shadow: 
        0 0 35px rgba(104, 189, 70, 0.25),
        inset 0 0 25px rgba(104, 189, 70, 0.15),
        0 20px 50px rgba(0, 0, 0, 0.8);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}

.speaker-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(104, 189, 70, 0.08) 0%, rgba(255, 255, 255, 0) 100%);
    pointer-events: none;
}

.speaker-card:hover {
    transform: translateY(-8px);
    background: linear-gradient(135deg, rgba(104, 189, 70, 0.2) 0%, rgba(2, 10, 22, 0.98) 100%);
    border-color: #68BD46;
    box-shadow: 
        0 0 50px rgba(104, 189, 70, 0.45),
        inset 0 0 30px rgba(104, 189, 70, 0.3),
        0 30px 65px rgba(0, 0, 0, 0.85);
}

.speaker-image-frame {
    position: relative;
    flex-shrink: 0;
}

.speaker-avatar-placeholder {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: rgba(104, 189, 70, 0.15);
    border: 2px solid #68BD46;
    color: #68BD46;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 44px;
    transition: all 0.3s ease;
    box-shadow: 0 0 25px rgba(104, 189, 70, 0.35);
}

.speaker-card:hover .speaker-avatar-placeholder {
    background: rgba(104, 189, 70, 0.3);
    border-color: #7ee352;
    color: #ffffff;
    transform: scale(1.05);
    box-shadow: 0 0 35px rgba(104, 189, 70, 0.55);
}

.speaker-status-badge {
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #68BD46 0%, #4da52c 100%);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.3);
    font-family: var(--font-heading);
    font-size: 9.5px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 14px;
    border-radius: 12px;
    white-space: nowrap;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
}

.speaker-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.speaker-name {
    font-family: var(--font-heading);
    font-size: 24px;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 6px 0;
    letter-spacing: -0.5px;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
}

.speaker-designation {
    font-size: 15.5px;
    font-weight: 700;
    color: #68BD46;
    margin: 0 0 8px 0;
    text-shadow: 0 2px 6px rgba(0, 0, 0, 0.8);
}

.speaker-org {
    font-size: 14px;
    color: #cbd5e1;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-shadow: 0 2px 6px rgba(0, 0, 0, 0.8);
}

.speaker-org i {
    color: #68BD46;
}

.speakers-footer {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
}

.speakers-cta-btn {
    background: linear-gradient(135deg, #68BD46 0%, #5ab947 100%);
    color: #ffffff !important;
    border: none;
    border-radius: 50px;
    padding: 18px 44px;
    font-family: var(--font-heading);
    font-size: 15px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 0 35px rgba(104, 189, 70, 0.5), 0 10px 30px rgba(0, 0, 0, 0.4);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.speakers-cta-btn span,
.speakers-cta-btn i {
    color: #ffffff !important;
}

.speakers-cta-btn:hover {
    background: linear-gradient(135deg, #7ee352 0%, #68BD46 100%);
    color: #ffffff !important;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 0 50px rgba(104, 189, 70, 0.7), 0 15px 35px rgba(0, 0, 0, 0.5);
}

.speakers-cta-btn i {
    transition: transform 0.3s ease;
}

.speakers-cta-btn:hover i {
    transform: translateX(6px);
}

.speakers-coming-soon {
    font-size: 18px;
    color: #d97706;
    font-weight: 700;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.speakers-coming-soon i {
    color: #d97706;
}

@media (max-width: 1024px) {
    .speakers-title {
        font-size: 38px;
    }
    .speakers-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }
}

@media (max-width: 768px) {
    .speakers-section {
        padding: 80px 20px;
    }
    .speakers-grid {
        grid-template-columns: 1fr;
    }
    .speaker-card {
        padding: 32px 24px;
    }
}

/* ==========================================================================
   Event Schedule Section (Left Side-Nav Tabs & Dynamic Right Panes)
   ========================================================================== */
.event-schedule-section {
    position: relative;
    background-color: #fafbfd;
    padding: 100px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    border-top: 1px solid rgba(0, 43, 94, 0.06);
    border-bottom: 1px solid rgba(0, 43, 94, 0.06);
}

.schedule-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
}

.schedule-header {
    text-align: center;
    margin-bottom: 50px;
}

.schedule-tag {
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: #5ab947;
    text-transform: uppercase;
    background: rgba(90, 185, 71, 0.08);
    border: 1px solid rgba(90, 185, 71, 0.2);
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 16px;
}

.schedule-title {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -1.5px;
    margin: 0 0 14px 0;
    line-height: 1.2;
}

.schedule-title span {
    color: #5ab947;
}

.schedule-lead {
    font-size: 16.5px;
    color: #4b5563;
    max-width: 650px;
    margin: 0 auto;
    line-height: 1.5;
}

/* Side-by-side Tab Layout */
.schedule-tab-layout {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 40px;
    align-items: start;
    background: #ffffff;
    border-radius: 28px;
    padding: 36px;
    box-shadow: 0 15px 45px rgba(0, 43, 94, 0.04);
    border: 1px solid rgba(0, 43, 94, 0.08);
}

.schedule-nav-sidebar {
    display: flex;
    flex-direction: column;
    gap: 12px;
    position: sticky;
    top: 110px;
    align-self: flex-start;
    z-index: 5;
}

.schedule-nav-btn {
    background: rgba(0, 43, 94, 0.03);
    border: 1px solid rgba(0, 43, 94, 0.06);
    border-radius: 16px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 14px;
    text-align: left;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    width: 100%;
    box-sizing: border-box;
}

.schedule-nav-btn .nav-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: #ffffff;
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
    flex-shrink: 0;
}

.schedule-nav-btn .nav-text {
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: 0.5px;
    flex-grow: 1;
}

.schedule-nav-btn .nav-arrow {
    font-size: 12px;
    color: rgba(0, 43, 94, 0.3);
    transition: transform 0.3s ease, color 0.3s ease;
}

.schedule-nav-btn:hover {
    background: rgba(90, 185, 71, 0.06);
    border-color: rgba(90, 185, 71, 0.2);
    transform: translateX(4px);
}

.schedule-nav-btn.active {
    background: var(--color-primary);
    border-color: var(--color-primary);
    box-shadow: 0 10px 25px rgba(0, 43, 94, 0.15);
}

.schedule-nav-btn.active .nav-icon {
    background: #5ab947;
    color: #ffffff;
}

.schedule-nav-btn.active .nav-text {
    color: #ffffff;
}

.schedule-nav-btn.active .nav-arrow {
    color: #5ab947;
    transform: translateX(3px);
}

/* Right Content Panes (Scrollable Container) */
.schedule-content-panes {
    position: relative;
    max-height: 560px;
    overflow-y: auto;
    padding-right: 14px;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

/* Custom Sleek Scrollbar for Schedule Content */
.schedule-content-panes::-webkit-scrollbar {
    width: 6px;
}

.schedule-content-panes::-webkit-scrollbar-track {
    background: rgba(0, 43, 94, 0.04);
    border-radius: 10px;
}

.schedule-content-panes::-webkit-scrollbar-thumb {
    background: #5ab947;
    border-radius: 10px;
}

.schedule-content-panes::-webkit-scrollbar-thumb:hover {
    background: var(--color-primary);
}

.schedule-pane {
    display: none;
    opacity: 0;
    transform: translateY(15px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.schedule-pane.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.pane-header-box {
    margin-bottom: 28px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(0, 43, 94, 0.08);
}

.pane-title {
    font-family: var(--font-heading);
    font-size: 24px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 8px 0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.pane-title i {
    color: #5ab947;
}

.pane-desc {
    font-size: 14.5px;
    color: #4b5563;
    margin: 0;
    line-height: 1.5;
}

/* Timeline Styling */
.schedule-timeline {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.timeline-item {
    display: grid;
    grid-template-columns: 160px 1fr;
    gap: 20px;
    padding: 18px 20px;
    background: rgba(0, 43, 94, 0.02);
    border: 1px solid rgba(0, 43, 94, 0.06);
    border-radius: 16px;
    align-items: start;
    transition: all 0.3s ease;
}

.timeline-item:hover {
    background: #ffffff;
    border-color: #5ab947;
    box-shadow: 0 8px 20px rgba(90, 185, 71, 0.1);
}

.timeline-time {
    font-family: var(--font-heading);
    font-size: 12.5px;
    font-weight: 800;
    color: var(--color-primary);
    background: rgba(0, 43, 94, 0.05);
    padding: 6px 12px;
    border-radius: 10px;
    text-align: center;
    display: inline-block;
}

.timeline-content {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.timeline-badge {
    font-family: var(--font-heading);
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 3px 8px;
    border-radius: 8px;
    display: inline-block;
    width: fit-content;
}

.agenda-badge { background: rgba(0, 43, 94, 0.08); color: var(--color-primary); }
.panel-badge { background: rgba(14, 165, 233, 0.12); color: #0284c7; }
.awards-badge { background: rgba(90, 185, 71, 0.12); color: #5ab947; }

.timeline-title {
    font-family: var(--font-heading);
    font-size: 16.5px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 4px 0 2px 0;
}

.timeline-desc {
    font-size: 13px;
    color: #6b7280;
    margin: 0;
    line-height: 1.4;
}

/* Agenda Cards */
.agenda-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.agenda-card {
    display: flex;
    gap: 20px;
    padding: 20px;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 18px;
    background: #ffffff;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0, 43, 94, 0.02);
}

.agenda-time-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: var(--color-primary);
    color: #ffffff;
    padding: 12px 18px;
    border-radius: 14px;
    min-width: 90px;
}

.agenda-time {
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
}

.agenda-duration {
    font-family: var(--font-heading);
    font-size: 9px;
    font-weight: 700;
    color: #5ab947;
    letter-spacing: 1px;
    margin-top: 2px;
}

.agenda-details {
    display: flex;
    flex-direction: column;
}

.agenda-title {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 6px 0;
}

.agenda-desc {
    font-size: 13.5px;
    color: #4b5563;
    margin: 0;
}

/* Awards Pane Box */
.awards-pane-content {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.awards-hero-box {
    background: linear-gradient(135deg, var(--color-primary) 0%, #001d42 100%);
    border-radius: 24px;
    padding: 40px;
    text-align: center;
    color: #ffffff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.2);
}

.awards-trophy-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(90, 185, 71, 0.15);
    border: 2px solid #5ab947;
    color: #5ab947;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin: 0 auto 20px auto;
}

.awards-main-title {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 800;
    margin: 0 0 12px 0;
    letter-spacing: -1px;
}

.awards-main-desc {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.85);
    max-width: 580px;
    margin: 0 auto 24px auto;
    line-height: 1.5;
}

.awards-cta-btn {
    background: #5ab947;
    color: #ffffff;
    border: none;
    border-radius: 50px;
    padding: 16px 36px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 10px 25px rgba(90, 185, 71, 0.3);
    transition: all 0.3s ease;
}

.awards-cta-btn:hover {
    background: #ffffff;
    color: var(--color-primary);
    transform: translateY(-3px);
}

.awards-grid-preview {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.award-preview-card {
    background: rgba(0, 43, 94, 0.03);
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 16px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 14px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 700;
    color: var(--color-primary);
}

.award-preview-card i {
    color: #5ab947;
    font-size: 18px;
}

/* Panel Discussion Cards */
.panel-cards-wrap {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.panel-topic-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 20px;
    padding: 28px 24px;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.03);
    transition: all 0.3s ease;
}

.panel-topic-card:hover {
    transform: translateY(-4px);
    border-color: #5ab947;
    box-shadow: 0 14px 30px rgba(90, 185, 71, 0.12);
}

.panel-tag {
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #5ab947;
    background: rgba(90, 185, 71, 0.08);
    padding: 4px 12px;
    border-radius: 10px;
    display: inline-block;
    margin-bottom: 12px;
}

.panel-topic-title {
    font-family: var(--font-heading);
    font-size: 19px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 10px 0;
    letter-spacing: -0.5px;
}

.panel-topic-desc {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.5;
    margin: 0 0 16px 0;
}

.panel-speakers-teaser {
    border-top: 1px solid rgba(0, 43, 94, 0.06);
    padding-top: 12px;
    font-size: 12.5px;
    font-weight: 600;
    color: var(--color-primary);
    display: flex;
    align-items: center;
    gap: 8px;
}

@media (max-width: 991px) {
    .schedule-tab-layout {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}

@media (max-width: 600px) {
    .timeline-item {
        grid-template-columns: 1fr;
    }
    .awards-grid-preview {
        grid-template-columns: 1fr;
    }
}

/* Awards Section Custom Left-Aligned Styling */
.awards-tag-wrap {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 24px;
}

.awards-tag-line {
    width: 40px;
    height: 1.5px;
    background: linear-gradient(90deg, #d4af37, #5ab947);
}

.awards-section-tag {
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 3.5px;
    color: #e5c158;
    text-transform: uppercase;
    background: transparent;
    border: none;
    padding: 0;
    margin-bottom: 0;
}

.awards-section-title {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -1.5px;
    margin: 0 0 24px 0;
    line-height: 1.2;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
}

.awards-section-title span {
    color: #5ab947;
    background: linear-gradient(135deg, #68BD46 0%, #a3e635 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.awards-section-ctas {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 20px;
    margin-top: 32px;
    flex-wrap: wrap;
}

.awards-cta-primary {
    background: #5ab947;
    color: #ffffff;
    border: none;
    border-radius: 50px;
    padding: 16px 36px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 10px 25px rgba(90, 185, 71, 0.35);
    transition: all 0.3s ease;
}

.awards-cta-primary:hover {
    background: #ffffff;
    color: var(--color-primary);
    transform: translateY(-3px);
}

.awards-cta-secondary {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    padding: 16px 36px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.awards-cta-secondary:hover {
    background: #ffffff;
    color: var(--color-primary);
    border-color: #ffffff;
    transform: translateY(-3px);
}

/* Cyber Ownership Card Styling */
.cyber-ownership-card {
    background: linear-gradient(135deg, #ffffff 0%, rgba(0, 43, 94, 0.03) 100%);
    border: 1px solid rgba(0, 43, 94, 0.1);
    border-radius: 28px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 15px 40px rgba(0, 43, 94, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
    height: 100%;
    box-sizing: border-box;
    transition: all 0.4s ease;
}

.cyber-ownership-card:hover {
    transform: translateY(-6px);
    border-color: #5ab947;
    box-shadow: 0 20px 45px rgba(90, 185, 71, 0.12);
}

.cyber-ownership-icon-wrap {
    width: 70px;
    height: 70px;
    border-radius: 22px;
    background: rgba(90, 185, 71, 0.1);
    color: #5ab947;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(90, 185, 71, 0.15);
}

.cyber-ownership-tag {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #5ab947;
    text-transform: uppercase;
    background: rgba(90, 185, 71, 0.08);
    border: 1px solid rgba(90, 185, 71, 0.2);
    padding: 4px 14px;
    border-radius: 20px;
    margin-bottom: 16px;
}

.cyber-ownership-title {
    font-family: var(--font-heading);
    font-size: 26px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -1px;
    line-height: 1.25;
    margin: 0 0 16px 0;
    text-transform: uppercase;
}

.cyber-ownership-title span {
    color: #5ab947;
}

.cyber-ownership-sub {
    font-size: 17px;
    font-weight: 600;
    color: #4b5563;
    margin: 0 0 24px 0;
    line-height: 1.5;
}

.cyber-ownership-date-pill {
    background: var(--color-primary);
    color: #ffffff;
    font-family: var(--font-heading);
    font-size: 13.5px;
    padding: 12px 24px;
    border-radius: 40px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: auto;
    box-shadow: 0 8px 20px rgba(0, 43, 94, 0.15);
}

.cyber-ownership-date-pill i {
    color: #5ab947;
}

/* ==========================================================================
   11. WHY ATTEND Section Styling (6-Pillar Sci-Fi Card Grid)
   ========================================================================== */
.why-attend-section {
    position: relative;
    background-color: #ffffff;
    padding: 100px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    border-top: 1px solid rgba(0, 43, 94, 0.06);
    overflow: hidden;
}

.why-container {
    max-width: 1440px;
    margin: 0 auto;
    width: 100%;
}

.why-header {
    text-align: center;
    margin-bottom: 50px;
}

.why-tag {
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: #5ab947;
    text-transform: uppercase;
    background: rgba(90, 185, 71, 0.08);
    border: 1px solid rgba(90, 185, 71, 0.2);
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 16px;
}

.why-title {
    font-family: var(--font-heading);
    font-size: 38px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -1.5px;
    margin: 0 0 14px 0;
    line-height: 1.25;
}

.why-title span {
    color: #5ab947;
}

.why-lead {
    font-size: 16px;
    color: #4b5563;
    max-width: 680px;
    margin: 0 auto;
    line-height: 1.5;
}

.why-pillars-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 14px;
}

.why-pillar-card {
    background: #ffffff;
    border: 1px solid rgba(0, 43, 94, 0.08);
    border-radius: 20px;
    padding: 24px 16px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 43, 94, 0.03);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.pillar-step-number {
    position: absolute;
    top: 10px;
    right: 12px;
    font-family: var(--font-heading);
    font-size: 34px;
    font-weight: 900;
    color: rgba(0, 43, 94, 0.05);
    line-height: 1;
    pointer-events: none;
    transition: color 0.4s ease;
}

.why-pillar-card:hover .pillar-step-number {
    color: rgba(90, 185, 71, 0.15);
}

.pillar-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(0, 43, 94, 0.04);
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    margin-bottom: 16px;
    transition: all 0.3s ease;
}

.why-pillar-card:hover {
    transform: translateY(-8px);
    border-color: #5ab947;
    box-shadow: 0 20px 45px rgba(90, 185, 71, 0.14);
}

.why-pillar-card:hover .pillar-icon-box {
    background: #5ab947;
    color: #ffffff;
    transform: scale(1.08);
}

.pillar-action-title {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 800;
    color: var(--color-primary);
    margin: 0 0 8px 0;
    letter-spacing: -0.4px;
    line-height: 1.25;
}

.pillar-desc {
    font-size: 13px;
    line-height: 1.45;
    color: #4b5563;
    margin: 0;
}

.pillar-glow-accent {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, transparent, #5ab947, transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.why-pillar-card:hover .pillar-glow-accent {
    opacity: 1;
}

@media (max-width: 1100px) {
    .why-pillars-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }
}

@media (max-width: 768px) {
    .why-pillars-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
    }
}

@media (max-width: 540px) {
    .why-pillars-grid {
        grid-template-columns: 1fr;
    }
}

/* ==========================================================================
   12. Who Owns Cyber Risk Highlight Section
   ========================================================================== */
.cyber-risk-section {
    position: relative;
    background-color: #fafbfd;
    padding: 100px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    border-top: 1px solid rgba(0, 43, 94, 0.06);
}

.cyber-risk-container {
    max-width: 950px;
    margin: 0 auto;
    width: 100%;
}

.cyber-risk-header {
    text-align: center;
    margin-bottom: 45px;
}

.cyber-risk-tag {
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: #5ab947;
    text-transform: uppercase;
    background: rgba(90, 185, 71, 0.08);
    border: 1px solid rgba(90, 185, 71, 0.2);
    padding: 6px 18px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 16px;
}

.cyber-risk-section-title {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 800;
    color: var(--color-primary);
    letter-spacing: -1.5px;
    margin: 0;
    line-height: 1.2;
}

.cyber-risk-section-title span {
    color: #5ab947;
}

.cyber-ownership-hero-card-wrapper {
    position: relative;
    width: 100%;
}

.cyber-hand-left {
    position: absolute;
    top: 50%;
    left: -130px;
    transform: translateY(-50%) rotate(4deg);
    height: 380px;
    width: auto;
    z-index: 10;
    pointer-events: none;
    filter: drop-shadow(0 15px 35px rgba(0, 43, 94, 0.35));
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.cyber-hand-right {
    position: absolute;
    top: 50%;
    right: -130px;
    transform: translateY(-50%) rotate(-4deg);
    height: 380px;
    width: auto;
    z-index: 10;
    pointer-events: none;
    filter: drop-shadow(0 15px 35px rgba(0, 43, 94, 0.35));
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.cyber-ownership-hero-card-wrapper:hover .cyber-hand-left {
    transform: translateY(-52%) rotate(1deg) scale(1.04);
}

.cyber-ownership-hero-card-wrapper:hover .cyber-hand-right {
    transform: translateY(-52%) rotate(-1deg) scale(1.04);
}

@media (max-width: 1200px) {
    .cyber-hand-left {
        left: -80px;
        height: 300px;
    }
    .cyber-hand-right {
        right: -80px;
        height: 300px;
    }
}

@media (max-width: 992px) {
    .cyber-hand-left {
        left: -40px;
        height: 240px;
        opacity: 0.85;
    }
    .cyber-hand-right {
        right: -40px;
        height: 240px;
        opacity: 0.85;
    }
}

@media (max-width: 768px) {
    .cyber-hand-left,
    .cyber-hand-right {
        display: none;
    }
}

.cyber-ownership-hero-card {
    position: relative;
    background: url('images/bg-image.png') center/cover no-repeat;
    border: 1.5px solid rgba(90, 185, 71, 0.4);
    border-radius: 32px;
    padding: 60px 40px;
    text-align: center;
    box-shadow: 0 25px 60px rgba(0, 43, 94, 0.25);
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.cyber-ownership-hero-card::before {
    display: none;
}

.cyber-ownership-hero-card:hover {
    transform: translateY(-8px);
    border-color: #5ab947;
    box-shadow: 0 30px 70px rgba(90, 185, 71, 0.3);
}

.cyber-ownership-hero-card .cyber-ownership-icon-wrap {
    width: 84px;
    height: 84px;
    border-radius: 24px;
    background: rgba(90, 185, 71, 0.15);
    border: 1.5px solid rgba(90, 185, 71, 0.4);
    color: #5ab947;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    margin-bottom: 24px;
    box-shadow: 0 10px 25px rgba(90, 185, 71, 0.25);
    position: relative;
    z-index: 2;
}

.cyber-ownership-hero-card .cyber-ownership-title {
    font-family: var(--font-heading);
    font-size: 36px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -1.2px;
    line-height: 1.25;
    margin: 0 0 18px 0;
    text-transform: uppercase;
    position: relative;
    z-index: 2;
}

.cyber-ownership-hero-card .cyber-ownership-title span {
    color: #5ab947;
    background: linear-gradient(135deg, #68BD46 0%, #a3e635 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.cyber-ownership-hero-card .cyber-ownership-sub {
    font-size: 21px;
    font-weight: 700;
    color: #e2e8f0;
    margin: 0 0 32px 0;
    line-height: 1.5;
    position: relative;
    z-index: 2;
}

.cyber-ownership-hero-card .cyber-ownership-date-pill {
    position: relative;
    z-index: 2;
    background: #5ab947;
    color: #002b5e;
    font-family: var(--font-heading);
    font-size: 14.5px;
    font-weight: 800;
    padding: 14px 30px;
    border-radius: 40px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 0 25px rgba(54, 184, 86, 0.55);
    transition: all 0.3s ease;
}

.cyber-ownership-hero-card .cyber-ownership-date-pill i {
    color: #002b5e;
    font-size: 16px;
}

.cyber-ownership-hero-card .cyber-ownership-date-pill:hover {
    background: #ffffff;
    color: #002b5e;
    transform: translateY(-2px);
    box-shadow: 0 0 35px rgba(255, 255, 255, 0.6);
}

/* ==========================================================================
   12. Futuristic Cybersecurity / Education Section (Robot Hand Content Box)
   ========================================================================== */
.cyber-risk-section {
    position: relative;
    background: url('images/cyber-risk-section-img.png') center/cover no-repeat !important;
    padding: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box;
    z-index: 24;
    overflow: hidden;
}

.cyber-risk-bg-spotlights {
    display: none;
}

.cyber-risk-section .section-wrapper {
    position: relative;
    max-width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    z-index: 2;
}

.cyber-risk-img-container {
    position: relative;
    width: 100% !important;
    max-width: 100% !important;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 0 !important;
    overflow: hidden;
    box-shadow: none !important;
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.cyber-risk-img-container:hover {
    transform: none;
    box-shadow: none !important;
}

.cyber-risk-full-img {
    width: 100% !important;
    height: auto;
    display: block;
    border-radius: 0 !important;
    object-fit: cover;
}

.box-content {
    position: relative;
    z-index: 6;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* 4 Statistics Cards Inside Box */
.content-box .stats-counter-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    width: 100%;
    max-width: 880px;
    margin-bottom: 36px;
    flex-wrap: wrap;
}

.content-box .stat-counter-card {
    background: transparent !important;
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 12px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: none !important;
    flex: 1;
    min-width: 160px;
    transition: transform 0.3s ease;
}

.content-box .stat-counter-card:hover {
    transform: translateY(-4px);
    box-shadow: none !important;
}

.content-box .stat-number-wrap {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 800;
    line-height: 1;
    color: #ffffff !important;
    letter-spacing: -1px;
    display: flex;
    align-items: baseline;
    justify-content: center;
    margin-bottom: 6px;
}

.content-box .stat-number {
    color: #ffffff !important;
}

.content-box .stat-suffix {
    color: #68BD46 !important;
    font-size: 34px;
    margin-left: 2px;
    font-weight: 800;
}

.content-box .stat-label {
    font-family: var(--font-heading);
    font-size: 11.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: rgba(255, 255, 255, 0.85) !important;
    margin-top: 2px;
}

/* 2 Buttons Inside Box */
.content-box .warp-cta-group {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
    margin-bottom: 28px;
    flex-wrap: wrap;
    z-index: 6;
}

.content-box .warp-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 34px;
    border-radius: 50px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.content-box .warp-cta-btn.primary {
    background: #68BD46 !important;
    color: #002b5e !important;
    border: 1.5px solid #68BD46 !important;
    box-shadow: 0 0 25px rgba(104, 189, 70, 0.55) !important;
}

.content-box .warp-cta-btn.primary:hover {
    background: #79d255 !important;
    color: #002b5e !important;
    transform: translateY(-2px);
    box-shadow: 0 0 35px rgba(104, 189, 70, 0.75) !important;
}

.content-box .warp-cta-btn.secondary {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
    border: 1.5px solid rgba(255, 255, 255, 0.3) !important;
    backdrop-filter: blur(8px);
}

.content-box .warp-cta-btn.secondary:hover {
    background: rgba(255, 255, 255, 0.22) !important;
    border-color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.3) !important;
}

/* Description Text Inside Box */
.content-box .box-description p {
    font-family: var(--font-body);
    font-size: 16px;
    line-height: 1.6;
    color: #e2e8f0;
    margin: 0;
    font-weight: 600;
    letter-spacing: 0.2px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
}

/* Responsive hand anchoring test for 1920, 1440, 1280, 1024, 768, 480, 390 */
@media (max-width: 1024px) {
    .left-robot-hand {
    position: absolute;
    left: clamp(-110px, -5.5vw, -45px);
    bottom: clamp(-70px, -4vw, -25px);
    width: clamp(240px, 24vw, 360px);
    transform: rotate(2deg);
    z-index: 20;
    pointer-events: none;
    filter: drop-shadow(-15px 15px 35px rgba(0, 0, 0, 0.85));
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    -webkit-mask-image: linear-gradient(45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
    mask-image: linear-gradient(45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
}
    .right-robot-hand {
    position: absolute;
    right: clamp(-110px, -5.5vw, -45px);
    bottom: clamp(-70px, -4vw, -25px);
    width: clamp(240px, 24vw, 360px);
    transform: rotate(-2deg);
    z-index: 20;
    pointer-events: none;
    filter: drop-shadow(15px 15px 35px rgba(0, 0, 0, 0.85));
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    -webkit-mask-image: linear-gradient(-45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
    mask-image: linear-gradient(-45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
}
}

@media (max-width: 650px) {
    .left-robot-hand,
    .right-robot-hand {
    position: absolute;
    right: clamp(-110px, -5.5vw, -45px);
    bottom: clamp(-70px, -4vw, -25px);
    width: clamp(240px, 24vw, 360px);
    transform: rotate(-2deg);
    z-index: 20;
    pointer-events: none;
    filter: drop-shadow(15px 15px 35px rgba(0, 0, 0, 0.85));
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    -webkit-mask-image: linear-gradient(-45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
    mask-image: linear-gradient(-45deg, transparent 0%, transparent 12%, #000 35%, #000 100%);
}
}

/* ==========================================================================
   13. Standalone Centered FAQ Section
   ========================================================================== */
/* ==========================================================================
   13. Standalone Centered FAQ Section with Animated Background Canvas
   ========================================================================== */
.standalone-faq-section {
    position: relative;
    background: linear-gradient(180deg, #f4fbf7 0%, #edf9f3 50%, #f4fbf7 100%);
    padding: 100px 24px;
    width: 100%;
    box-sizing: border-box;
    z-index: 24;
    overflow: hidden;
}

#ceoWavyCanvas {
    display: none !important;
}

.faq-bg-decorations {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
}

.faq-dot-grid {
    position: absolute;
    width: 220px;
    height: 220px;
    background-image: radial-gradient(#3acb85 1.5px, transparent 1.5px);
    background-size: 16px 16px;
    opacity: 0.28;
}

.faq-dot-grid.top-left {
    top: 30px;
    left: 30px;
}

.faq-dot-grid.bottom-right {
    bottom: 30px;
    right: 30px;
}

.faq-globe-watermark {
    position: absolute;
    bottom: -60px;
    left: -60px;
    width: 340px;
    height: 340px;
    background: radial-gradient(circle, rgba(2, 132, 199, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
    border-radius: 50%;
    border: 1.5px dashed rgba(2, 132, 199, 0.15);
    pointer-events: none;
}

.faq-section-container {
    max-width: 860px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

.faq-section-header {
    text-align: center;
    margin-bottom: 45px;
}

.faq-section-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: #ffffff;
    background: #3acb85;
    padding: 6px 20px;
    border-radius: 999px;
    display: inline-block;
    margin-bottom: 20px;
    box-shadow: 0 4px 14px rgba(58, 203, 133, 0.3);
}

.faq-section-title {
    font-family: var(--font-heading);
    font-size: 44px;
    font-weight: 800;
    color: #0f2249;
    letter-spacing: -1.2px;
    margin: 0 0 14px 0;
    line-height: 1.2;
}

.faq-section-title span {
    color: #2db84c;
}

.faq-section-subtitle,
.faq-section-subhelp {
    font-family: var(--font-body);
    font-size: 16px;
    font-weight: 500;
    color: #64748b;
    margin: 0 0 4px 0;
    line-height: 1.5;
}

.faq-section-subhelp {
    margin-bottom: 0;
}

.faq-centered-wrapper {
    width: 100%;
}

.standalone-faq-section .combined-faq-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.standalone-faq-section .faq-item {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid rgba(15, 34, 73, 0.06);
    border-bottom: none; /* override old border-bottom */
    padding: 0;
    box-shadow: 0 4px 16px rgba(15, 34, 73, 0.03);
    overflow: hidden;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
    position: relative;
}

.standalone-faq-section .faq-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(15, 34, 73, 0.08);
}

.standalone-faq-section .faq-item.bar-green {
    border-left: 5px solid #2db84c;
}

.standalone-faq-section .faq-item.bar-blue {
    border-left: 5px solid #0284c7;
}

.standalone-faq-section .faq-trigger {
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    text-align: left;
    gap: 16px;
}

.standalone-faq-section .faq-card-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
    transition: transform 0.3s ease;
}

.standalone-faq-section .faq-card-icon.icon-green {
    background: #eafaf1;
    color: #2db84c;
}

.standalone-faq-section .faq-card-icon.icon-blue {
    background: #e0f2fe;
    color: #0284c7;
}

.standalone-faq-section .faq-question {
    font-family: var(--font-heading);
    font-size: 18px;
    font-weight: 700;
    color: #0f2249;
    flex: 1;
    margin: 0;
    padding-right: 0;
    opacity: 1;
    transform: none;
}

.standalone-faq-section .faq-item.active .faq-question {
    color: #0f2249;
    opacity: 1;
    transform: none;
}

.standalone-faq-section .faq-chevron-wrap {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0f2249;
    font-size: 14px;
    flex-shrink: 0;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background 0.3s ease, color 0.3s ease;
}

.standalone-faq-section .faq-item.active .faq-chevron-wrap {
    transform: rotate(180deg);
    background: #0f2249;
    color: #ffffff;
}

.standalone-faq-section .faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.standalone-faq-section .faq-content-inner {
    padding: 0 24px 22px 84px;
    text-align: left;
}

.standalone-faq-section .faq-content-inner p {
    font-family: var(--font-body);
    font-size: 15.5px;
    line-height: 1.65;
    color: #475569;
    margin: 0;
}

.standalone-faq-section .faq-content-inner p {
    font-family: var(--font-body);
    font-size: 15.5px;
    line-height: 1.65;
    color: #475569;
    margin: 0;
}

/* ==========================================================================
   Section 7: Strategic Governance & Stakeholder Boxless Interactive Showcase
   ========================================================================== */
.action-summit-section,
.action-summit-section.carousel-active,
.action-summit-section.spread-active {
    position: relative;
    padding: 40px 40px 80px 40px !important;
    background: #ffffff !important;
    overflow: hidden;
    z-index: 20;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}

.action-summit-section::before {
    content: '';
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 900px;
    height: 500px;
    background: radial-gradient(ellipse at center, rgba(104, 189, 70, 0.06) 0%, rgba(255, 255, 255, 0) 70%);
    pointer-events: none;
    z-index: 1;
}

.action-container {
    max-width: 1300px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* Split Boxless Layout (2 Columns: Left Hero + Right List) */
.action-split-showcase {
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 65px;
    align-items: center;
    margin-bottom: 75px;
    text-align: left;
}

.action-left-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.action-subtitle-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #fff8f0;
    border: 1.5px solid rgba(217, 119, 6, 0.35);
    padding: 8px 24px;
    border-radius: 30px;
    margin-bottom: 22px;
    box-shadow: 0 4px 15px rgba(217, 119, 6, 0.08);
}

.pulse-dot-gold {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #d97706;
    box-shadow: 0 0 10px #d97706;
    animation: goldPulse 2s infinite ease-in-out;
}

@keyframes goldPulse {
    0%, 100% { opacity: 0.4; transform: scale(0.9); }
    50% { opacity: 1; transform: scale(1.3); }
}

.action-subtitle {
    font-family: var(--font-heading);
    font-size: 12.5px;
    font-weight: 800;
    letter-spacing: 2.5px;
    color: #d97706;
    text-transform: uppercase;
}

.action-title {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 800;
    color: #002b5e;
    letter-spacing: -1.5px;
    margin: 0 0 20px 0;
    line-height: 1.2;
}

.action-title-highlight {
    background: linear-gradient(135deg, #d97706 0%, #68BD46 50%, #0284c7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
}

.action-lead {
    font-size: 18px;
    color: #475569;
    line-height: 1.65;
    font-weight: 400;
    margin-bottom: 30px;
}

.action-pillars-count-badge {
    display: inline-flex;
    align-items: center;
    gap: 16px;
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    padding: 16px 26px;
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
}

.count-badge-icon {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: rgba(2, 132, 199, 0.1);
    border: 1px solid #0284c7;
    color: #0284c7;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 4px 12px rgba(2, 132, 199, 0.15);
}

.count-badge-text {
    display: flex;
    flex-direction: column;
}

.count-num {
    font-family: var(--font-heading);
    font-size: 16px;
    font-weight: 800;
    color: #002b5e;
    letter-spacing: -0.3px;
}

.count-sub {
    font-size: 13px;
    color: #64748b;
}

/* Right Bright Pillar Cards List */
.boxless-pillars-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    position: relative;
}

.boxless-pillar-item {
    position: relative;
    padding: 24px 28px;
    display: flex;
    align-items: flex-start;
    gap: 24px;
    background: #f8fafc !important;
    border: 1.5px solid #e2e8f0 !important;
    border-radius: 20px !important;
    box-shadow: 0 6px 20px rgba(0, 43, 94, 0.04) !important;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.boxless-pillar-item:hover {
    background: #ffffff !important;
    border-color: #002b5e !important;
    transform: translateX(6px);
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.08) !important;
}

.pillar-num-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.pillar-num {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -1px;
}

.item-gold .pillar-num { color: #d97706; }
.item-cyan .pillar-num { color: #0284c7; }
.item-emerald .pillar-num { color: #68BD46; }
.item-purple .pillar-num { color: #9333ea; }

.pillar-content-wrap {
    flex-grow: 1;
}

.pillar-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    margin-bottom: 8px;
    flex-wrap: wrap;
}

.pillar-item-title {
    font-family: var(--font-heading);
    font-size: 22px;
    font-weight: 800;
    color: #002b5e;
    letter-spacing: -0.5px;
    margin: 0;
}

.pillar-inline-tag {
    font-family: var(--font-heading);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 20px;
}

.gold-tag {
    color: #d97706;
    background: rgba(217, 119, 6, 0.1);
    border: 1px solid rgba(217, 119, 6, 0.3);
}

.cyan-tag {
    color: #0284c7;
    background: rgba(14, 165, 233, 0.1);
    border: 1px solid rgba(14, 165, 233, 0.3);
}

.emerald-tag {
    color: #5ab947;
    background: rgba(104, 189, 70, 0.1);
    border: 1px solid rgba(104, 189, 70, 0.3);
}

.purple-tag {
    color: #9333ea;
    background: rgba(147, 51, 234, 0.1);
    border: 1px solid rgba(147, 51, 234, 0.3);
}

.pillar-item-desc {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
}

.pillar-hover-laser {
    display: none;
}

/* Responsive Layout */
@media (max-width: 992px) {
    .action-split-showcase {
        grid-template-columns: 1fr;
        gap: 45px;
    }
}

@media (max-width: 640px) {
    .action-title {
        font-size: 34px;
    }
    .boxless-pillar-item {
        padding: 20px 16px;
        gap: 16px;
    }
    .pillar-num {
        font-size: 26px;
    }
    .pillar-item-title {
        font-size: 19px;
    }
}

/* Hide background revolving spiral canvas */
#actionSpiralCanvas,
.action-spiral-canvas {
    display: none !important;
}

@keyframes attendeeGlowPulse {
    0%, 100% {
        box-shadow: 0 0 20px rgba(104, 189, 70, 0.45), 0 10px 30px rgba(0, 43, 94, 0.25) !important;
        border-color: rgba(104, 189, 70, 0.6) !important;
        transform: scale(1);
    }
    50% {
        box-shadow: 0 0 38px rgba(104, 189, 70, 0.85), 0 0 55px rgba(0, 43, 94, 0.4) !important;
        border-color: #68BD46 !important;
        transform: scale(1.02);
    }
}

/* "IN THE PRESENCE OF & JOINED BY" Badge & Outer Capsule Frame (Exactly 2 Borders) */
.attendee-badge-node {
    margin: 45px auto 15px auto;
    display: inline-block;
    position: relative;
    z-index: 10;
}

.badge-outer-ring {
    position: relative;
    padding: 10px 18px;
    border-radius: 50px;
    border: 1.5px solid rgba(104, 189, 70, 0.75);
    background: rgba(104, 189, 70, 0.03);
    box-shadow: 0 0 22px rgba(104, 189, 70, 0.2);
    display: inline-block;
}

.attendee-badge {
    color: #ffffff !important;
    font-family: var(--font-heading);
    font-size: 16.5px !important;
    font-weight: 800 !important;
    letter-spacing: 2.5px !important;
    text-transform: uppercase;
    background: linear-gradient(135deg, #002b5e 0%, #001a38 100%) !important;
    border: 2px solid #68BD46 !important;
    padding: 14px 40px !important;
    border-radius: 40px !important;
    display: inline-block;
    animation: attendeeGlowPulse 2.5s infinite ease-in-out !important;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

.badge-node-dot {
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #68BD46;
    box-shadow: 0 0 10px #68BD46, 0 0 18px #68BD46;
    z-index: 12;
}

.dot-top-1 { left: 24%; bottom: -4px; }
.dot-top-2 { left: 37%; bottom: -4px; }
.dot-top-3 { left: 50%; bottom: -4px; transform: translateX(-50%); }
.dot-top-4 { left: 63%; bottom: -4px; }
.dot-top-5 { left: 76%; bottom: -4px; }


.attendee-pills-wrapper {
    position: relative;
    width: 100%;
    margin-top: 10px;
    text-align: center;
}

.attendee-flow-lines-wrapper {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto -6px auto;
}

.attendee-flow-svg {
    width: 100%;
    height: 80px;
    display: block;
}

.flow-line-back {
    fill: none;
    stroke: rgba(104, 189, 70, 0.4);
    stroke-width: 2;
}

.flow-line-pulse {
    fill: none;
    stroke: #68BD46;
    stroke-width: 3.5;
    stroke-linecap: round;
    stroke-dasharray: 40, 220;
    filter: drop-shadow(0px 0px 6px #68BD46);
    animation: flowPulseLineWave 3.5s infinite linear;
}

.pulse-1 { animation-delay: 0s; }
.pulse-2 { animation-delay: 0.7s; }
.pulse-3 { animation-delay: 1.4s; }
.pulse-4 { animation-delay: 2.1s; }
.pulse-5 { animation-delay: 2.8s; }

@keyframes flowPulseLineWave {
    0% { stroke-dashoffset: 260; }
    100% { stroke-dashoffset: 0; }
}

.attendee-pills-grid {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 10px;
    gap: 12px;
}

.attendee-pill-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    max-width: 235px;
}

.pill-connector-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #68BD46;
    margin-bottom: 8px;
    box-shadow: 0 0 10px rgba(104, 189, 70, 0.6);
    transition: all 0.3s ease;
}

.attendee-pill {
    background: #ffffff;
    border: 2px solid rgba(245, 158, 11, 0.55);
    color: #002b5e;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 700;
    padding: 12px 18px 12px 12px;
    border-radius: 40px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.08), 0 0 20px rgba(245, 158, 11, 0.3);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    width: 100%;
    justify-content: flex-start;
}

.pill-icon-circle {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(245, 158, 11, 0.16);
    color: #d97706;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.attendee-pill span {
    font-size: 15px;
    line-height: 1.25;
    color: #002b5e;
    text-align: left;
    font-weight: 800;
}

/* Sequential Synchronized Glow Effect when Flow Reaches each Card */
.card-1 { animation: cardGlowFlow 3.5s infinite linear 0.5s; }
.card-2 { animation: cardGlowFlow 3.5s infinite linear 1.2s; }
.card-3 { animation: cardGlowFlow 3.5s infinite linear 1.9s; }
.card-4 { animation: cardGlowFlow 3.5s infinite linear 2.6s; }
.card-5 { animation: cardGlowFlow 3.5s infinite linear 3.3s; }

@keyframes cardGlowFlow {
    0%, 100% {
        transform: translateY(0);
    }
    15% {
        transform: translateY(-5px);
    }
    30% {
        transform: translateY(0);
    }
}

.card-1 .attendee-pill { animation: pillGlowFlow 3.5s infinite linear 0.5s; }
.card-2 .attendee-pill { animation: pillGlowFlow 3.5s infinite linear 1.2s; }
.card-3 .attendee-pill { animation: pillGlowFlow 3.5s infinite linear 1.9s; }
.card-4 .attendee-pill { animation: pillGlowFlow 3.5s infinite linear 2.6s; }
.card-5 .attendee-pill { animation: pillGlowFlow 3.5s infinite linear 3.3s; }

.card-1 .pill-connector-dot { animation: dotGlowFlow 3.5s infinite linear 0.5s; }
.card-2 .pill-connector-dot { animation: dotGlowFlow 3.5s infinite linear 1.2s; }
.card-3 .pill-connector-dot { animation: dotGlowFlow 3.5s infinite linear 1.9s; }
.card-4 .pill-connector-dot { animation: dotGlowFlow 3.5s infinite linear 2.6s; }
.card-5 .pill-connector-dot { animation: dotGlowFlow 3.5s infinite linear 3.3s; }

@keyframes pillGlowFlow {
    0%, 100% {
        border-color: rgba(245, 158, 11, 0.55);
        box-shadow: 0 8px 24px rgba(0, 43, 94, 0.08), 0 0 16px rgba(245, 158, 11, 0.25);
        background: #ffffff;
    }
    15% {
        border-color: #f59e0b;
        box-shadow: 0 0 32px rgba(245, 158, 11, 0.9), 0 0 16px rgba(104, 189, 70, 0.45), 0 10px 25px rgba(0, 43, 94, 0.15);
        background: #ffffff;
    }
    30% {
        border-color: rgba(245, 158, 11, 0.55);
        box-shadow: 0 8px 24px rgba(0, 43, 94, 0.08), 0 0 16px rgba(245, 158, 11, 0.25);
        background: #ffffff;
    }
}

@keyframes dotGlowFlow {
    0%, 100% {
        transform: scale(1);
        background: #68BD46;
        box-shadow: 0 0 10px rgba(104, 189, 70, 0.6);
    }
    15% {
        transform: scale(1.6);
        background: #7ee352;
        box-shadow: 0 0 20px #68BD46, 0 0 35px #68BD46;
    }
    30% {
        transform: scale(1);
        background: #68BD46;
        box-shadow: 0 0 10px rgba(104, 189, 70, 0.6);
    }
}

.attendee-pill-card:hover .attendee-pill {
    background: #002b5e !important;
    border-color: #f59e0b !important;
    transform: translateY(-5px) scale(1.03) !important;
    box-shadow: 0 0 35px rgba(245, 158, 11, 0.75), 0 14px 30px rgba(0, 43, 94, 0.4) !important;
}

.attendee-pill-card:hover .attendee-pill span {
    color: #ffffff !important;
}

.attendee-pill-card:hover .pill-icon-circle {
    background: #f59e0b !important;
    box-shadow: 0 0 18px rgba(245, 158, 11, 0.9) !important;
    color: #002b5e !important;
}

.attendee-pill-card:hover .pill-icon-circle i,
.attendee-pill-card:hover .attendee-pill i {
    color: #002b5e !important;
}


/* ==========================================================================
   Section 10: Event Schedule Cyber Timeline Showcase
   ========================================================================== */
/* ==========================================================================
   Section 10: Event Schedule White Theme Showcase
   ========================================================================== */
.event-schedule-section {
    position: relative;
    padding: 110px 40px;
    background: #ffffff !important;
    overflow: hidden;
    z-index: 22;
}

.event-schedule-section::before {
    content: '';
    position: absolute;
    top: 30%;
    right: 10%;
    width: 600px;
    height: 400px;
    background: radial-gradient(ellipse at center, rgba(104, 189, 70, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
    pointer-events: none;
    z-index: 1;
}

.schedule-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.schedule-header {
    text-align: center;
    margin-bottom: 45px;
}

.schedule-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 3px;
    color: #68BD46;
    text-transform: uppercase;
    background: #f1f5f9;
    border: 1.5px solid rgba(104, 189, 70, 0.5);
    padding: 8px 24px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 20px;
    box-shadow: 0 4px 15px rgba(104, 189, 70, 0.12);
}

.schedule-title {
    font-family: var(--font-heading);
    font-size: 46px;
    font-weight: 800;
    color: #002b5e;
    letter-spacing: -1.5px;
    margin: 0 0 16px 0;
}

.schedule-title span {
    color: #68BD46;
}

.schedule-lead {
    font-size: 18px;
    color: #475569;
    max-width: 720px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Top Horizontal Filter Pills Capsule Track (High-Contrast Selection) */
.schedule-filter-track {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin: 0 auto 50px auto;
    background: #f1f5f9;
    padding: 8px;
    border-radius: 50px;
    border: 1.5px solid #e2e8f0;
    max-width: flex;
    width: fit-content;
    box-shadow: 0 6px 20px rgba(0, 43, 94, 0.05);
}

.schedule-nav-btn {
    background: transparent;
    border: none;
    color: #5e7290;
    padding: 12px 28px;
    border-radius: 40px;
    font-family: var(--font-heading);
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.schedule-nav-btn:hover {
    color: #002b5e;
    background: rgba(0, 43, 94, 0.06);
}

.schedule-nav-btn.active {
    background: #002b5e !important;
    color: #ffffff !important;
    box-shadow: 0 6px 18px rgba(0, 43, 94, 0.22) !important;
}

.schedule-nav-btn .nav-icon {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    background: #ffffff;
    color: #002b5e;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.schedule-nav-btn.active .nav-icon {
    background: #68BD46 !important;
    color: #ffffff !important;
    box-shadow: 0 2px 10px rgba(104, 189, 70, 0.4) !important;
}

.schedule-nav-btn.active .nav-icon i {
    color: #ffffff !important;
}

/* Content Panes Toggle */
.schedule-pane {
    display: none;
    animation: fadeInPane 0.4s ease forwards;
}

.schedule-pane.active {
    display: block;
}

.pane-header-box {
    text-align: center;
    margin-bottom: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.pane-title {
    font-family: var(--font-heading);
    font-size: 26px;
    font-weight: 800;
    color: #002b5e;
    margin-bottom: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-align: center;
}

.pane-title i {
    color: #68BD46;
    margin-right: 0;
}

.pane-desc {
    font-size: 15.5px;
    color: #475569;
    max-width: 680px;
    margin: 0 auto;
    text-align: center;
}

/* White Theme Cyber Timeline (Pane 1: ALL TOPICS) */
.schedule-cyber-timeline {
    position: relative;
    max-width: 900px;
    margin: 0 auto;
    padding-left: 45px;
}

.timeline-laser-track {
    position: absolute;
    top: 15px;
    bottom: 15px;
    left: 14px;
    width: 3px;
    background: linear-gradient(180deg, #68BD46 0%, #002b5e 100%);
    border-radius: 3px;
}

.timeline-cyber-item {
    position: relative;
    margin-bottom: 30px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.timeline-node-dot {
    position: absolute;
    left: -45px;
    top: 24px;
    transform: translateX(8px);
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #68BD46;
    border: 3.5px solid #ffffff;
    box-shadow: 0 0 12px rgba(104, 189, 70, 0.5);
    z-index: 2;
}

.timeline-time-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    color: #ffffff;
    background: #002b5e;
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(0, 43, 94, 0.15);
}

.timeline-card-content {
    width: 100%;
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px 30px;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
}

.timeline-cyber-item:hover .timeline-card-content {
    background: #ffffff;
    border-color: #68BD46;
    transform: translateX(8px);
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.08);
}

.timeline-tag {
    font-family: var(--font-heading);
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 10px;
}

.green-tag { color: #5ab947; background: rgba(104, 189, 70, 0.1); border: 1px solid rgba(104, 189, 70, 0.3); }
.cyan-tag { color: #0284c7; background: rgba(14, 165, 233, 0.1); border: 1px solid rgba(14, 165, 233, 0.3); }
.gold-tag { color: #d97706; background: rgba(245, 158, 11, 0.1); border: 1px solid rgba(245, 158, 11, 0.3); }

.timeline-card-title {
    font-family: var(--font-heading);
    font-size: 21px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 8px 0;
    letter-spacing: -0.4px;
}

.timeline-card-desc {
    font-size: 15px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
}

/* Agenda Grid (Pane 2: AGENDA) */
.agenda-cyber-grid {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

.agenda-cyber-card {
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px 30px;
    display: flex;
    align-items: center;
    gap: 30px;
    transition: all 0.35s ease;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
}

.agenda-cyber-card:hover {
    background: #ffffff;
    border-color: #68BD46;
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 43, 94, 0.08);
}

.agenda-time-pill {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #002b5e;
    border: 1.5px solid #002b5e;
    padding: 12px 20px;
    border-radius: 16px;
    flex-shrink: 0;
    min-width: 110px;
}

.time-main {
    font-family: var(--font-heading);
    font-size: 18px;
    font-weight: 800;
    color: #ffffff;
}

.time-sub {
    font-size: 11px;
    font-weight: 800;
    color: #68BD46;
    letter-spacing: 1px;
}

.agenda-card-title {
    font-family: var(--font-heading);
    font-size: 20px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 6px 0;
}

.agenda-card-desc {
    font-size: 14.5px;
    color: #475569;
    margin: 0;
    line-height: 1.5;
}

/* Awards Pane (Pane 3: AWARDS) */
.awards-pane-wrapper {
    max-width: 950px;
    margin: 0 auto;
    text-align: center;
}

.awards-hero-card {
    background: #f8fafc;
    border: 1.5px solid #f59e0b;
    border-radius: 28px;
    padding: 45px 35px;
    margin-bottom: 35px;
    box-shadow: 0 12px 35px rgba(245, 158, 11, 0.12);
}

.awards-trophy-ring {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(245, 158, 11, 0.15);
    border: 2px solid #f59e0b;
    color: #f59e0b;
    font-size: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px auto;
}

.awards-main-title {
    font-family: var(--font-heading);
    font-size: 36px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 12px 0;
}

.awards-main-desc {
    font-size: 16.5px;
    color: #475569;
    max-width: 600px;
    margin: 0 auto 28px auto;
    line-height: 1.6;
}

.awards-cta-btn {
    background: linear-gradient(135deg, #68BD46 0%, #5ab947 100%);
    color: #ffffff;
    border: none;
    padding: 16px 36px;
    border-radius: 40px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 8px 24px rgba(104, 189, 70, 0.35);
    transition: all 0.3s ease;
}

.awards-cta-btn:hover {
    background: linear-gradient(135deg, #7ee352 0%, #68BD46 100%);
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(104, 189, 70, 0.5);
}

.awards-grid-preview {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.award-preview-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 18px;
    padding: 22px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
    text-align: left;
    color: #002b5e;
    font-family: var(--font-heading);
    font-size: 15px;
    font-weight: 700;
    box-shadow: 0 6px 18px rgba(0, 43, 94, 0.04);
}

.award-preview-card i {
    font-size: 24px;
    color: #f59e0b;
}

/* Panel Discussion Grid (Pane 4) */
.panel-cards-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    max-width: 950px;
    margin: 0 auto;
}

.panel-topic-card {
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 24px;
    padding: 32px 28px;
    text-align: left;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
    transition: all 0.35s ease;
}

.panel-topic-card:hover {
    background: #ffffff;
    border-color: #002b5e;
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.08);
}

.panel-num-tag {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #002b5e;
    background: #e2e8f0;
    padding: 4px 14px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 14px;
}

.panel-topic-title {
    font-family: var(--font-heading);
    font-size: 21px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 10px 0;
    line-height: 1.3;
}

.panel-topic-desc {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 20px;
}

.panel-speakers-teaser {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    color: #002b5e;
    padding-top: 14px;
    border-top: 1px solid #e2e8f0;
}

@media (max-width: 768px) {
    .schedule-cyber-timeline {
        padding-left: 30px;
    }
    .timeline-node-dot {
        left: -30px;
    }
    .awards-grid-preview,
    .panel-cards-grid {
        grid-template-columns: 1fr;
    }
}


.timeline-card-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 10px;
    flex-wrap: wrap;
}

.timeline-speakers-pill {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 700;
    color: #cbd5e1;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 4px 12px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.timeline-speakers-pill i {
    color: #68BD46;
}

.highlight-gold-card {
    border-color: rgba(245, 158, 11, 0.4) !important;
}

.highlight-gold-card:hover {
    border-color: #f59e0b !important;
    box-shadow: 0 0 35px rgba(245, 158, 11, 0.35), 0 20px 45px rgba(0, 0, 0, 0.8) !important;
}

/* Split Layout & Side Navigation for Event Schedule */
.schedule-split-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
    align-items: start;
    margin-top: 20px;
}

.schedule-sidenav {
    display: flex;
    flex-direction: column;
    gap: 12px;
    position: sticky;
    top: 100px;
    background: #f8fafc;
    padding: 16px;
    border-radius: 24px;
    border: 1.5px solid #e2e8f0;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.04);
}

.schedule-sidenav .schedule-nav-btn {
    width: 100%;
    justify-content: flex-start;
    padding: 14px 20px;
    border-radius: 16px;
    border: 1.5px solid transparent;
    background: transparent;
    color: #475569;
    font-size: 13.5px;
    font-weight: 800;
    letter-spacing: 1.2px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    text-align: left;
}

.schedule-sidenav .schedule-nav-btn:hover {
    background: #ffffff;
    border-color: #cbd5e1;
    color: #002b5e;
    transform: translateX(4px);
}

.schedule-sidenav .schedule-nav-btn.active {
    background: #002b5e !important;
    color: #ffffff !important;
    border-color: #002b5e !important;
    box-shadow: 0 8px 22px rgba(0, 43, 94, 0.18) !important;
    transform: translateX(0);
}

.schedule-sidenav .schedule-nav-btn .nav-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #ffffff;
    color: #002b5e;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.schedule-sidenav .schedule-nav-btn.active .nav-icon {
    background: #68BD46 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(104, 189, 70, 0.4) !important;
}

.schedule-sidenav .schedule-nav-btn.active .nav-icon i {
    color: #ffffff !important;
}

/* Coming Soon Teaser Cards for AGENDA & PANEL DISCUSSION */
.coming-soon-teaser-card {
    background: #f8fafc;
    border: 1.5px dashed #cbd5e1;
    border-radius: 28px;
    padding: 65px 40px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.03);
    transition: all 0.35s ease;
}

.coming-soon-teaser-card:hover {
    background: #ffffff;
    border-color: #68BD46;
    border-style: solid;
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.08);
}

.coming-soon-badge-ring {
    width: 74px;
    height: 74px;
    border-radius: 50%;
    background: rgba(0, 43, 94, 0.06);
    border: 2px solid #002b5e;
    color: #002b5e;
    font-size: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.coming-soon-teaser-card:hover .coming-soon-badge-ring {
    background: #002b5e;
    color: #ffffff;
    transform: scale(1.08) rotate(5deg);
}

.coming-soon-pill {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #68BD46;
    background: rgba(104, 189, 70, 0.12);
    border: 1px solid rgba(104, 189, 70, 0.35);
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 16px;
    text-transform: uppercase;
}

.coming-soon-title {
    font-family: var(--font-heading);
    font-size: 30px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 12px 0;
    letter-spacing: -0.5px;
}

.coming-soon-desc {
    font-size: 16px;
    color: #64748b;
    max-width: 540px;
        padding-left: 30px;
    }
    .timeline-node-dot {
        left: -30px;
    }
    .awards-grid-preview,
    .panel-cards-grid {
        grid-template-columns: 1fr;
    }
}


.timeline-card-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 10px;
    flex-wrap: wrap;
}

.timeline-speakers-pill {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 700;
    color: #cbd5e1;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 4px 12px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.timeline-speakers-pill i {
    color: #68BD46;
}

.highlight-gold-card {
    border-color: rgba(245, 158, 11, 0.4) !important;
}

.highlight-gold-card:hover {
    border-color: #f59e0b !important;
    box-shadow: 0 0 35px rgba(245, 158, 11, 0.35), 0 20px 45px rgba(0, 0, 0, 0.8) !important;
}

/* Centered Capsule Track & Interactive Click Callout */
.schedule-capsule-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin: 15px auto 0 auto;
}

.schedule-click-hint {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-heading);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #68BD46;
    background: rgba(104, 189, 70, 0.1);
    border: 1px solid rgba(104, 189, 70, 0.35);
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 16px;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(104, 189, 70, 0.12);
}

.hint-pulse-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #68BD46;
    box-shadow: 0 0 10px #68BD46, 0 0 18px #68BD46;
    animation: hintDotPulse 1.8s infinite ease-in-out;
}

@keyframes hintDotPulse {
    0%, 100% { transform: scale(1); opacity: 0.8; }
    50% { transform: scale(1.4); opacity: 1; }
}

.hint-arrow-anim {
    animation: bounceDown 1.5s infinite;
}

@keyframes bounceDown {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(3px); }
}

.schedule-top-capsule-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background: #f1f5f9;
    padding: 10px 14px;
    border-radius: 50px;
    border: 1.5px solid #e2e8f0;
    box-shadow: 0 8px 25px rgba(0, 43, 94, 0.06);
    flex-wrap: wrap;
    margin: 0 auto;
}

.schedule-pill-btn {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    color: #002b5e;
    padding: 10px 22px;
    border-radius: 40px;
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 3px 10px rgba(0, 43, 94, 0.04);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.schedule-pill-btn:hover {
    color: #002b5e;
    background: #ffffff;
    border-color: #68BD46;
    transform: translateY(-3px);
    box-shadow: 0 8px 22px rgba(104, 189, 70, 0.25);
}

.schedule-pill-btn.active {
    background: #002b5e !important;
    color: #ffffff !important;
    border-color: #002b5e !important;
    box-shadow: 0 10px 25px rgba(0, 43, 94, 0.28) !important;
}

.pill-icon-box {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    background: #f1f5f9;
    color: #002b5e;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.schedule-pill-btn:hover .pill-icon-box {
    background: #68BD46;
    color: #ffffff;
}

.schedule-pill-btn.active .pill-icon-box {
    background: #68BD46 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(104, 189, 70, 0.4) !important;
}

.schedule-pill-btn.active .pill-icon-box i {
    color: #ffffff !important;
}



.pill-open-icon {
    font-size: 11px;
    opacity: 0.6;
    transition: all 0.3s ease;
    margin-left: 2px;
}

.schedule-pill-btn:hover .pill-open-icon {
    opacity: 1;
    color: #68BD46;
    transform: scale(1.15);
}

.schedule-pill-btn.active .pill-open-icon {
    opacity: 1;
    color: #68BD46;
}


/* Schedule Popup Modal Overlay (Bulletproof Scroll Container) */
.schedule-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 43, 94, 0.75);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease, visibility 0.35s ease;
    visibility: hidden;
    padding: 30px 20px;
}

.schedule-modal-overlay.active {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
}

.schedule-modal-container {
    background: #ffffff;
    width: 100%;
    max-width: 900px;
    max-height: 85vh;
    border-radius: 32px;
    position: relative;
    box-shadow: 0 25px 60px rgba(0, 43, 94, 0.3);
    transform: scale(0.92) translateY(20px);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    border: 1.5px solid #e2e8f0;
    margin: auto;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    pointer-events: auto;
}

.schedule-modal-overlay.active .schedule-modal-container {
    transform: scale(1) translateY(0);
}

.schedule-modal-body {
    padding: 45px 35px 35px 35px;
    overflow-y: auto !important;
    max-height: calc(85vh - 20px);
    overscroll-behavior: contain;
    -webkit-overflow-scrolling: touch;
    touch-action: pan-y;
}

.schedule-modal-body::-webkit-scrollbar {
    width: 8px;
    display: block !important;
}

.schedule-modal-body::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 10px;
}

.schedule-modal-body::-webkit-scrollbar-thumb {
    background: #002b5e;
    border-radius: 10px;
}

.schedule-modal-body::-webkit-scrollbar-thumb:hover {
    background: #68BD46;
}

body.modal-open {
    overflow: hidden !important;
}



.schedule-modal-close {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: #f1f5f9;
    border: 1.5px solid #e2e8f0;
    color: #002b5e;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.25s ease;
    z-index: 10;
}

.schedule-modal-close:hover {
    background: #002b5e;
    color: #ffffff;
    border-color: #002b5e;
    transform: rotate(90deg);
}

/* Coming Soon Teaser Cards for AGENDA & PANEL DISCUSSION */
.coming-soon-teaser-card {
    background: #f8fafc;
    border: 1.5px dashed #cbd5e1;
    border-radius: 28px;
    padding: 65px 40px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 24px rgba(0, 43, 94, 0.03);
    transition: all 0.35s ease;
}

.coming-soon-teaser-card:hover {
    background: #ffffff;
    border-color: #68BD46;
    border-style: solid;
    box-shadow: 0 15px 35px rgba(0, 43, 94, 0.08);
}

.coming-soon-badge-ring {
    width: 74px;
    height: 74px;
    border-radius: 50%;
    background: rgba(0, 43, 94, 0.06);
    border: 2px solid #002b5e;
    color: #002b5e;
    font-size: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.coming-soon-teaser-card:hover .coming-soon-badge-ring {
    background: #002b5e;
    color: #ffffff;
    transform: scale(1.08) rotate(5deg);
}

.coming-soon-pill {
    font-family: var(--font-heading);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #68BD46;
    background: rgba(104, 189, 70, 0.12);
    border: 1px solid rgba(104, 189, 70, 0.35);
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 16px;
    text-transform: uppercase;
}

.coming-soon-title {
    font-family: var(--font-heading);
    font-size: 30px;
    font-weight: 800;
    color: #002b5e;
    margin: 0 0 12px 0;
    letter-spacing: -0.5px;
}

.coming-soon-desc {
    font-size: 16px;
    color: #64748b;
    max-width: 540px;
    line-height: 1.6;
    margin: 0;
}

@media (max-width: 991px) {
    .custom-header {
        padding: 12px 16px;
    }
    .header-inner {
        padding: 8px 16px;
    }
    .header-logo-img {
        height: 38px;
        max-width: 160px;
    }
    .menu-pill-btn {
        padding: 4px 14px 4px 4px;
        font-size: 12px;
    }
    .cta-capsule {
        padding: 4px 16px 4px 4px;
        font-size: 12px;
    }
    .hero-glass-box {
        bottom: 160px;
        left: 20px;
        width: calc(100% - 40px);
        max-width: 100%;
        padding: 18px 20px;
    }
    .hero-glass-title {
        font-size: 17px;
    }
    .hero-glass-details-right {
        bottom: 20px;
        left: 20px;
        right: 20px;
        width: calc(100% - 40px);
        max-width: calc(100% - 40px);
        gap: 8px;
    }
    .hero-glass-detail-item {
        padding: 10px 14px;
    }
    .attendee-flow-lines-wrapper {
        display: none !important;
    }
    .pill-connector-dot {
        display: none !important;
    }
}

@media (max-width: 768px) {
    .custom-header {
        padding: 10px 12px;
    }
    .header-inner {
        padding: 6px 12px;
    }
    .header-logo-img {
        height: 34px;
        max-width: 130px;
    }
    .menu-pill-btn {
        padding: 3px 10px 3px 3px;
        font-size: 11.5px;
    }
    .plus-circle {
        width: 22px;
        height: 22px;
        font-size: 9px;
    }
    .cta-capsule {
        padding: 3px 12px 3px 3px;
        font-size: 11.5px;
        gap: 6px;
    }
    .cta-icon-circle {
        width: 22px;
        height: 22px;
        font-size: 9px;
    }
    .attendee-pills-grid {
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }
    .attendee-pill-card {
        max-width: 100%;
        flex: 1 1 calc(50% - 12px);
        min-width: 180px;
    }
    .schedule-top-capsule-bar {
        border-radius: 30px;
        padding: 6px 8px;
        gap: 8px;
        justify-content: center;
    }
    .schedule-pill-btn {
        padding: 8px 14px;
        font-size: 12px;
    }
    .schedule-modal-overlay {
        padding: 14px;
    }
    .schedule-modal-container {
        padding: 0;
        border-radius: 22px;
        max-height: 88vh;
        width: 100%;
    }
    .schedule-modal-body {
        padding: 40px 18px 20px 18px;
        max-height: calc(88vh - 10px);
    }
    .schedule-modal-close {
        top: 12px;
        right: 12px;
        width: 34px;
        height: 34px;
        font-size: 15px;
    }
}

@media (max-width: 576px) {
    .hero-glass-box {
        bottom: 142px;
        left: 14px;
        width: calc(100% - 28px);
        padding: 14px 16px;
        border-radius: 18px;
    }
    .hero-glass-badge {
        font-size: 8.5px;
        padding: 3px 10px;
        margin-bottom: 8px;
    }
    .hero-glass-title {
        font-size: 15px;
        line-height: 1.3;
    }
    .hero-glass-details-right {
        bottom: 14px;
        left: 14px;
        right: 14px;
        width: calc(100% - 28px);
        max-width: calc(100% - 28px);
        gap: 6px;
    }
    .hero-glass-detail-item {
        padding: 8px 12px;
        border-radius: 14px;
        gap: 10px;
    }
    .detail-icon-wrap {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        font-size: 13px;
    }
    .detail-label {
        font-size: 8.5px;
        letter-spacing: 1px;
    }
    .detail-val {
        font-size: 13px;
    }
    .detail-val .venue-sub {
        font-size: 11px;
    }
    .attendee-pill-card {
        flex: 1 1 100%;
        max-width: 100%;
    }
    .attendee-pill {
        padding: 10px 16px;
    }
    .exp-composite-wrapper {
        height: 300px;
        max-width: 100%;
    }
    .exp-main-circle-frame {
        width: 250px;
        height: 250px;
        max-width: 80vw;
        max-height: 80vw;
    }
    .exp-green-arch-ring {
        width: 280px;
        height: 280px;
        max-width: 88vw;
        max-height: 88vw;
    }
    .exp-secondary-circle-frame {
        width: 120px;
        height: 120px;
    }
    .awards-hero-card {
        padding: 24px 16px !important;
    }
    .awards-main-title {
        font-size: 20px !important;
    }
    .awards-main-desc {
        font-size: 13px !important;
    }
}

@media (max-width: 380px) {
    .header-logo-img {
        max-width: 110px;
        height: 28px;
    }
    .cta-text {
        display: none;
    }
    .cta-capsule {
        padding: 3px 6px;
    }
    .hero-glass-title {
        font-size: 13.5px;
    }
}


/* Gallery Coming Soon Modal */
.gallery-modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(0, 18, 42, 0.6);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    z-index: 99998;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
}

.gallery-modal-backdrop.active {
    opacity: 1;
    pointer-events: all;
}

.gallery-coming-soon-modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -46%) scale(0.95);
    width: min(440px, 92vw);
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: 36px 32px 30px;
    box-shadow: 0 25px 60px rgba(0, 43, 94, 0.25);
    z-index: 99999;
    opacity: 0;
    pointer-events: none;
    text-align: center;
    transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
                transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.gallery-coming-soon-modal.active {
    opacity: 1;
    pointer-events: all;
    transform: translate(-50%, -50%) scale(1);
}

.gallery-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 1px solid #e2e8f0;
    background: #f8fafc;
    color: #64748b;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}

.gallery-modal-close:hover {
    background: #fee2e2;
    color: #dc2626;
    border-color: #fca5a5;
}

.gallery-modal-icon {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    background: rgba(104, 189, 70, 0.12);
    border: 2px solid rgba(104, 189, 70, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: var(--color-secondary);
    margin: 0 auto 16px;
}

.gallery-modal-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #2e6e14;
    background: rgba(104, 189, 70, 0.12);
    border: 1px solid rgba(104, 189, 70, 0.3);
    padding: 3px 12px;
    border-radius: 9999px;
    margin-bottom: 10px;
}

.gallery-modal-title {
    font-family: var(--font-heading);
    font-size: 22px;
    font-weight: 800;
    color: var(--color-primary);
    margin-bottom: 10px;
}

.gallery-modal-text {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.6;
    margin-bottom: 24px;
}

.gallery-modal-btn {
    width: 100%;
    padding: 12px 24px;
    background: var(--color-primary);
    color: #ffffff;
    border: none;
    border-radius: 9999px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(0, 43, 94, 0.15);
}

.gallery-modal-btn:hover {
    background: var(--color-secondary);
    box-shadow: 0 6px 20px rgba(104, 189, 70, 0.3);
}

/* ==========================================================================
   Premium Dark Footer & Get in Touch Section (With Enhanced LinkedIn Button)
   ========================================================================== */
.contact-footer-section {
    position: relative;
    background-color: #050b14;
    padding: 120px 40px 90px 40px;
    width: 100%;
    box-sizing: border-box;
    z-index: 23;
    overflow: hidden;
    color: #ffffff;
}

.waving-dot-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.65;
}

.contact-container {
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 2;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 80px;
    align-items: flex-start;
}

.contact-left-col {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.contact-tag {
    font-family: var(--font-heading);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-secondary);
    margin-bottom: 15px;
    display: inline-block;
}

.contact-title {
    font-family: var(--font-heading);
    font-size: clamp(32px, 4vw, 46px);
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -1.5px;
    line-height: 1.15;
    margin: 0 0 22px 0;
}

.contact-title span {
    background: linear-gradient(135deg, #ffffff 40%, var(--color-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact-desc {
    font-size: 16px;
    line-height: 1.65;
    color: #a1a8b5;
    margin: 0;
    font-weight: 400;
}

.contact-right-col {
    display: flex;
    flex-direction: column;
    text-align: left;
}

.contact-cta-title {
    font-family: var(--font-heading);
    font-size: 20px;
    font-weight: 500;
    color: #cbd5e1;
    line-height: 1.5;
    margin: 0 0 35px 0;
    letter-spacing: -0.5px;
}

.contact-actions-wrap {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 16px;
}

.premium-contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, #68BD46 0%, #4da02f 100%);
    color: #ffffff;
    padding: 14px 32px;
    border-radius: 9999px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    box-shadow: 0 8px 25px rgba(104, 189, 70, 0.35);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
}

.premium-contact-btn:hover {
    transform: translateY(-3px) scale(1.02);
    background: #ffffff;
    color: var(--color-primary);
    box-shadow: 0 12px 35px rgba(104, 189, 70, 0.55);
}

.contact-btn-arrow {
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.premium-contact-btn:hover .contact-btn-arrow {
    transform: translateX(5px);
}

/* Enhanced Standout LinkedIn Button */
.linkedin-follow-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, rgba(0, 119, 181, 0.25) 0%, rgba(0, 119, 181, 0.45) 100%);
    border: 1.5px solid #0077b5;
    color: #ffffff;
    padding: 13px 26px;
    border-radius: 9999px;
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    backdrop-filter: blur(8px);
    box-shadow: 0 6px 20px rgba(0, 119, 181, 0.3);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
}

.linkedin-follow-btn .linkedin-icon {
    font-size: 18px;
    color: #38bdf8;
    transition: transform 0.3s ease, color 0.3s ease;
}

.linkedin-follow-btn:hover {
    background: #0077b5;
    color: #ffffff;
    border-color: #38bdf8;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 10px 30px rgba(0, 119, 181, 0.55);
}

.linkedin-follow-btn:hover .linkedin-icon {
    color: #ffffff;
    transform: scale(1.2) rotate(6deg);
}

@media (max-width: 991px) {
    .contact-footer-section {
        padding: 90px 30px 60px 30px;
    }
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }
}

@media (max-width: 768px) {
    .contact-footer-section {
        padding: 70px 20px 40px 20px;
    }
    .contact-actions-wrap {
        flex-direction: column;
        align-items: stretch;
    }
    .premium-contact-btn, .linkedin-follow-btn {
        justify-content: center;
        width: 100%;
        box-sizing: border-box;
    }
}

</style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- 2. Scroll-Driven Hero Sticky Wrapper (Provides headroom for cinematic parallax) -->
    <div class="hero-scroll-container">
        <section class="summit-hero" id="hero">
            <!-- Full-screen Background Image Banner -->
            <div class="hero-video-wrapper">
                <img src="images/Option 8.jpg.jpeg" alt="Ed-Tech Cybersecurity Summit 2026" class="hero-bg-img">
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

            <!-- Bottom Right Interactive Event Capsules (Matching media reference) -->
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
                        <span class="detail-val">Dubai <span class="venue-sub">| Venue to be announced</span></span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 2nd Section: Clean Stats & Performance Section with 2ndbg.png Background -->
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
                <a href="register.html" class="warp-cta-btn primary" id="warpRequestBtn">
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

    <!-- 6. Premium Bright About Summit Section (Guardian EdShield Launch & Interactive Tabs) -->
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
                        <img src="images/new about.jpeg" alt="Secure Foundations for Next-Gen Education" class="about-img">
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 7. Official Government Crest & Regulatory Emblem Showcase Section -->
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

                    <!-- Animated Flowing Glowing Lines Container (Organic Bezier Curves) -->
                    <div class="attendee-flow-lines-wrapper">
                        <svg class="attendee-flow-svg" viewBox="0 0 1000 85" preserveAspectRatio="none">
                            <!-- Background Organic Curved Tracks -->
                            <path class="flow-line-back" d="M 240 0 C 240 50, 100 30, 100 85" />
                            <path class="flow-line-back" d="M 370 0 C 370 55, 300 35, 300 85" />
                            <path class="flow-line-back" d="M 500 0 C 500 35, 500 55, 500 85" />
                            <path class="flow-line-back" d="M 630 0 C 630 55, 700 35, 700 85" />
                            <path class="flow-line-back" d="M 760 0 C 760 50, 900 30, 900 85" />

                            <!-- Animated Glowing Flow Pulses -->
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

    <!-- 8. Interactive Event Partners Section -->
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

    <!-- 8. Premium Stats Performance Section (Toggle Slider & Live Zone Image) -->
    <!-- 8. Premium Technology Experience Zone Section (Matching Reference Design) -->
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

                <!-- Right Column: Dual Circle Composite Frame (Clean Image Showcase) -->
                <div class="exp-visual-col">
                    <div class="exp-composite-wrapper">
                        
                        <!-- Outer Decorative Arch stroke accent -->
                        <div class="exp-green-arch-ring"></div>

                        <!-- Main Large Circle Frame -->
                        <div class="exp-main-circle-frame">
                            <img src="images/Image 3.jpg" alt="Technology Experience Zone" class="exp-main-circle-img">
                        </div>

                        <!-- Secondary Overlapping Small Circle Frame (Bottom Right) -->
                        <div class="exp-secondary-circle-frame">
                            <img src="images/Image 4.jpg" alt="Live Demos Showcase" class="exp-secondary-circle-img">
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 9. Speakers Section: Meet the Experts Shaping the Conversation -->
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

            <!-- Speaker Cards Grid (3 Vertical Speaker Cards) -->
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

    <!-- 10. Interactive Event Schedule Section (Top Capsule Filter Track & Popup Modal) -->
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
                <!-- Eye-Catching Click Prompt Badge -->
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
                
                <!-- Pane 1: AGENDA (Coming Soon) -->
                <div class="schedule-pane" id="pane-agenda">
                    <div class="coming-soon-teaser-card">
                        <div class="coming-soon-badge-ring">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <span class="coming-soon-pill">COMING SOON</span>
                        <h3 class="coming-soon-title">Symposium Agenda</h3>
                        <p class="coming-soon-desc">Detailed session breakdown, keynote topics, and speaker schedules for October 30, 2026 in Dubai, UAE will be revealed soon.</p>
                    </div>
                </div>

                <!-- Pane 2: AWARDS (Active Default with 10 Industry Awards Content & CTA) -->
                <div class="schedule-pane active" id="pane-awards">
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

    <!-- Ed-Tech Cybersecurity Symposium & Awards Section (2-Column Split Showcase) -->
    <section class="mdr-video-section" id="mdrVideoSection">
        <div class="awards-split-container">
            <div class="awards-split-grid">
                
                <!-- Left Column: Image Showcase -->
                <div class="awards-image-col reveal-element reveal-fade-up">
                    <div class="awards-image-wrapper">
                        <img src="images/Image 7.7.png" alt="Ed-Tech Cybersecurity Symposium &amp; Awards 2026" class="awards-split-img">
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



    <!-- 12. Futuristic Cybersecurity / Education Section -->
    <section class="cyber-risk-section" id="cyberRiskSection">
        <div class="cyber-risk-bg-spotlights"></div>
        <div class="section-wrapper">
            <div class="cyber-risk-img-container reveal-element reveal-fade-up revealed">
                <img src="images/cyber-risk-section-img.png" alt="Ed-Tech Cybersecurity &amp; Technology Symposium 2026" class="cyber-risk-full-img">
            </div>
        </div>
    </section>

    <!-- 13. Centered Standalone FAQ Section -->
    <section class="standalone-faq-section" id="faqSection">
        <!-- Dynamic Volumetric Wavy Lines Background Canvas -->
        <canvas id="ceoWavyCanvas"></canvas>

        <!-- Decorative Matrix Grid & Globe Elements -->
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
                                <p>Dubai. The venue will be announced shortly.</p>
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

    <?php include 'footer.php'; ?>

    <!-- Apple-Like Buttery Smooth Scroll Engine (Lenis) -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
    <!-- Odometer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <!-- Core Interactions Script -->
    <script>
// EduCyberSecurity Summit 2026 - Core Interactions & Scroll-Driven Parallax Scrollytelling

// --------------------------------------------------------------------------
// Apple-Like Buttery Smooth Scroll Engine (Lenis) Initialization
// --------------------------------------------------------------------------
let lenisInstance;
if (typeof Lenis !== 'undefined') {
    lenisInstance = new Lenis({
        duration: 1.2, // Perfect duration for buttery momentum
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Apple product page easing (exponential ease-out)
        direction: 'vertical',
        gestureDirection: 'vertical',
        smooth: true,
        mouseMultiplier: 1.0, // High-performance scroll sensitivity
        smoothTouch: false, // Standard natural mobile momentum
        touchMultiplier: 2.0,
        infinite: false
    });

    function lenisRaf(time) {
        lenisInstance.raf(time);
        requestAnimationFrame(lenisRaf);
    }
    requestAnimationFrame(lenisRaf);
}

document.addEventListener('DOMContentLoaded', () => {
    const heroSection = document.getElementById('hero');
    const heroCenterContent = document.querySelector('.hero-center-content');
    const heroFooter = document.querySelector('.hero-footer');

    // 1. 5s Video Pause, Typewriter Title Animation, and Particle Fade Loop
    const heroVideo = document.querySelector('.hero-bg-video');

    const titleMain = document.getElementById('heroTitleMain');
    const titleMainReflect = document.getElementById('heroTitleMainReflect');
    const titleSub = document.getElementById('heroTitleSub');
    const titleSubReflect = document.getElementById('heroTitleSubReflect');

    if (heroVideo && titleMain) {
        heroVideo.removeAttribute('loop'); // We control the loop manually
        
        const subText = "Connect • Secure • Educate";
        const mainText = "EDTECH SECURITY\nSUMMIT 2026";
        
        let isWaiting = false;

        function clearText() {
            titleMain.innerHTML = '';
            if (titleMainReflect) titleMainReflect.innerHTML = '';
            titleSub.innerHTML = '';
            titleSub.classList.remove('pill-active');
            if (titleSubReflect) {
                titleSubReflect.innerHTML = '';
                titleSubReflect.classList.remove('pill-active');
            }
        }
        
        // Typewriter effect function supporting new lines and particle spans
        function typeWriter(element, elementReflect, text, speed, callback) {
            let i = 0;
            function type() {
                if (i < text.length) {
                    const char = text.charAt(i);
                    if (char === '\n') {
                        element.appendChild(document.createElement('br'));
                        if (elementReflect) elementReflect.appendChild(document.createElement('br'));
                    } else if (char === ' ') {
                        element.appendChild(document.createTextNode(' '));
                        if (elementReflect) elementReflect.appendChild(document.createTextNode(' '));
                    } else {
                        // Main character
                        const span = document.createElement('span');
                        span.className = 'particle-char';
                        span.style.display = 'inline-block';
                        span.style.transition = 'transform 2.5s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 2.0s ease-out, filter 2.0s ease';
                        span.textContent = char;
                        element.appendChild(span);
                        
                        // Reflection character
                        if (elementReflect) {
                            const reflectSpan = document.createElement('span');
                            reflectSpan.className = 'particle-char';
                            reflectSpan.style.display = 'inline-block';
                            reflectSpan.style.transition = 'transform 2.5s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 2.0s ease-out, filter 2.0s ease';
                            reflectSpan.textContent = char;
                            elementReflect.appendChild(reflectSpan);
                        }
                    }
                    i++;
                    setTimeout(type, speed);
                } else if (callback) {
                    callback();
                }
            }
            type();
        }

        // Smooth particle drift fade effect
        function explodeText() {
            // Fade out the pill background
            titleSub.classList.remove('pill-active');
            if (titleSubReflect) titleSubReflect.classList.remove('pill-active');
            
            const chars = document.querySelectorAll('.particle-char');
            chars.forEach(char => {
                const tx = (Math.random() - 0.5) * 40; // Gentle horizontal drift
                const ty = -(40 + Math.random() * 80); // Gentle float upwards
                const rot = (Math.random() - 0.5) * 45; // Slow rotation
                
                // Trigger CSS smooth drift
                char.style.transform = `translate(${tx}px, ${ty}px) rotate(${rot}deg) scale(0.9)`;
                char.style.opacity = '0';
                char.style.filter = 'blur(6px)';
            });
        }

        // Decouple text animation from the video so the video can play and loop seamlessly
        function startTextAnimationLoop() {
            // Show pill background only if subText is not empty
            if (subText.trim() !== '') {
                titleSub.classList.add('pill-active');
                if (titleSubReflect) titleSubReflect.classList.add('pill-active');
            }
            
            // 1. Start typing the subtitle (Pill box), then the main title
            typeWriter(titleSub, titleSubReflect, subText, 40, () => {
                typeWriter(titleMain, titleMainReflect, mainText, 60, () => {
                    
                    // 2. Text has finished appearing. Wait 5 seconds here.
                    setTimeout(() => {
                        // 3. Trigger the shattered text particle explosion (fades away)
                        explodeText();
                        
                        // Restart the video exactly when the text begins to fade away
                        heroVideo.currentTime = 0;
                        heroVideo.play().catch(e => console.log('Playback error', e));
                        
                        // 4. Wait for the explosion animation to settle before resetting text
                        setTimeout(() => {
                            clearText();
                            // Wait 5 seconds (while the 5s video plays) before typing the text again
                            setTimeout(startTextAnimationLoop, 5000);
                        }, 1800);
                        
                    }, 5000);
                    
                });
            });
        }

        // Start the very first animation cycle 5 seconds after page loads
        setTimeout(startTextAnimationLoop, 5000);
    }

    // 5. '+' Menu toggle animation and submenu
    const menuToggle = document.getElementById('menuToggle');
    const subMenuDropdown = document.getElementById('subMenuDropdown');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            const plusIcon = menuToggle.querySelector('.plus-circle i');
            if (plusIcon) {
                plusIcon.style.transition = 'transform 0.4s ease';
                if (plusIcon.style.transform === 'rotate(45deg)') {
                    plusIcon.style.transform = 'rotate(0deg)';
                    menuToggle.style.borderColor = 'var(--color-border)';
                    if (subMenuDropdown) {
                        subMenuDropdown.classList.remove('show');
                    }
                } else {
                    plusIcon.style.transform = 'rotate(45deg)';
                    menuToggle.style.borderColor = 'var(--color-secondary)';
                    if (subMenuDropdown) {
                        subMenuDropdown.classList.add('show');
                    }
                }
            }
        });
    }

    // 6. Interactive 3D Cyber-Grid Space Tunnel Canvas (Volumetric Sci-Fi Video Parallax)
    const warpCanvas = document.getElementById('warpCanvas');
    if (warpCanvas) {
        const wCtx = warpCanvas.getContext('2d');
        
        let wWidth = 0;
        let wHeight = 0;
        
        function resizeWarpCanvas() {
            wWidth = warpCanvas.clientWidth;
            wHeight = warpCanvas.clientHeight;
            warpCanvas.width = wWidth * (window.devicePixelRatio || 1);
            warpCanvas.height = wHeight * (window.devicePixelRatio || 1);
        }
        
        window.addEventListener('resize', resizeWarpCanvas);
        resizeWarpCanvas();

        const numRings = 24; // 3D structural concentric rings
        const maxDepth = 1000;
        const fov = 350;
        const rings = [];

        // Initialize 3D concentric structural ribs with individual panels
        for (let i = 0; i < numRings; i++) {
            rings.push({
                z: (i / numRings) * maxDepth, // Evenly distributed depths
                rotSpeed: (Math.random() - 0.5) * 0.008, // Slow organic rotation speed
                angleOffset: Math.random() * Math.PI * 2,
                // Multiple curved panels on each structural ring with custom color weights
                panels: [
                    { start: 0, length: 0.6 + Math.random() * 1.4, color: '#68BD46' }, // Lime green accent
                    { start: 2.2, length: 0.4 + Math.random() * 1.0, color: '#38bdf8' }, // Cyan light
                    { start: 4.4, length: 0.5 + Math.random() * 1.5, color: '#38bdf8' }
                ]
            });
        }

        // Scroll Velocity Tracker for dynamic warp speed triggering
        let lastScrollY = window.scrollY;
        let scrollSpeed = 0;
        let baseSpeed = 1.6; // Constant calm forward drift speed
        let targetWarpSpeed = baseSpeed;
        let currentWarpSpeed = baseSpeed;

        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;
            scrollSpeed = Math.abs(currentScroll - lastScrollY);
            lastScrollY = currentScroll;

            // Elevate warp speed directly proportional to scroll speed
            targetWarpSpeed = baseSpeed + Math.min(scrollSpeed * 0.85, 45); // Cap max speed to maintain visual cohesion
        });

        function animateWarp() {
            const internalScale = window.devicePixelRatio || 1;
            const wCenterX = (warpCanvas.width / 2);
            const wCenterY = (warpCanvas.height / 2);

            // Transparent white canvas overlay to build smooth glowing trails on white background
            const trailAlpha = currentWarpSpeed > 5 ? 0.15 : 0.3;
            wCtx.fillStyle = `rgba(255, 255, 255, ${trailAlpha})`;
            wCtx.fillRect(0, 0, warpCanvas.width, warpCanvas.height);

            // Interpolate speed smoothly for ultra-premium easing
            currentWarpSpeed += (targetWarpSpeed - currentWarpSpeed) * 0.08;
            
            // Decelerate speed target back to calm base speed
            targetWarpSpeed += (baseSpeed - targetWarpSpeed) * 0.05;

            // Draw glowing cosmic core horizon
            wCtx.save();
            wCtx.beginPath();
            const horizonGlow = 100 + currentWarpSpeed * 4;
            const coreGrad = wCtx.createRadialGradient(wCenterX, wCenterY, 5, wCenterX, wCenterY, horizonGlow * internalScale);
            coreGrad.addColorStop(0, 'rgba(56, 189, 248, 0.12)');
            coreGrad.addColorStop(0.5, 'rgba(104, 189, 70, 0.06)');
            coreGrad.addColorStop(1, 'rgba(255,255,255,0)');
            wCtx.fillStyle = coreGrad;
            wCtx.arc(wCenterX, wCenterY, horizonGlow * internalScale, 0, Math.PI * 2);
            wCtx.fill();
            wCtx.restore();

            // Perspective longitudinal structural grid lines (Perspective spokes)
            wCtx.save();
            wCtx.strokeStyle = 'rgba(56, 189, 248, 0.05)';
            wCtx.lineWidth = 1 * internalScale;
            wCtx.beginPath();
            const numSpokes = 16;
            for (let i = 0; i < numSpokes; i++) {
                const angle = (i / numSpokes) * Math.PI * 2;
                wCtx.moveTo(wCenterX, wCenterY);
                wCtx.lineTo(wCenterX + Math.cos(angle) * wWidth * internalScale, wCenterY + Math.sin(angle) * wHeight * internalScale);
            }
            wCtx.stroke();
            wCtx.restore();

            // Draw Concentric Ribs & Rotating Panel Layers
            rings.forEach(ring => {
                // Zoom forward
                ring.z -= currentWarpSpeed;

                // Reset depth once it passes the camera viewport plane
                if (ring.z <= 0) {
                    ring.z = maxDepth;
                    ring.angleOffset = Math.random() * Math.PI * 2;
                }

                // Smooth panel rotation drift, scaling slightly under velocity
                ring.angleOffset += ring.rotSpeed * (1 + currentWarpSpeed * 0.04);

                // Project depth coordinate to screen radius
                const zVal = Math.max(1, ring.z);
                const baseRadius = 240; // Core radius
                const radius = (baseRadius / zVal) * fov * internalScale;

                // Compute depth alpha fading (bell curve to keep center clean and outer edges soft)
                const depthRatio = (1 - (ring.z / maxDepth)); 
                const alpha = Math.sin(depthRatio * Math.PI) * (0.15 + (currentWarpSpeed * 0.007));

                // Draw rib panels if they sit within viewport boundaries
                if (radius > 5 && radius < wWidth * internalScale) {
                    wCtx.save();
                    wCtx.shadowBlur = 10 + (depthRatio * 15);
                    wCtx.lineWidth = (2 + depthRatio * 6) * internalScale; // Panel lines get thicker as they zoom closer!
                    wCtx.lineCap = 'round';

                    ring.panels.forEach(p => {
                        wCtx.strokeStyle = p.color;
                        wCtx.shadowColor = p.color;
                        wCtx.globalAlpha = Math.max(0.02, Math.min(0.85, alpha));

                        // Draw curved segment representing reflective cyber metal panels
                        wCtx.beginPath();
                        const sAngle = p.start + ring.angleOffset;
                        const eAngle = sAngle + p.length;
                        wCtx.arc(wCenterX, wCenterY, radius, sAngle, eAngle);
                        wCtx.stroke();
                    });

                    wCtx.restore();
                }
            });

            if (isWarpVisible) {
                warpAnimId = requestAnimationFrame(animateWarp);
            }
        }

        let isWarpVisible = false;
        let warpAnimId = null;

        const warpObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isWarpVisible = entry.isIntersecting;
                if (isWarpVisible) {
                    if (!warpAnimId) animateWarp();
                } else {
                    if (warpAnimId) {
                        cancelAnimationFrame(warpAnimId);
                        warpAnimId = null;
                    }
                }
            });
        }, { threshold: 0.05 });

        warpObserver.observe(warpCanvas);
    }

    // 7. Intersection Observer for Stat Counters Count Up Animation (Odometer Falling Effect)
    const statsSection = document.getElementById('warpSection');
    const statNumbers = document.querySelectorAll('.stat-number');
    
    if (statsSection && statNumbers.length > 0) {
        let animated = false;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true; // Trigger only once when visible
                    
                    statNumbers.forEach(num => {
                        const target = parseInt(num.getAttribute('data-target'), 10);
                        
                        // Add odometer class for CSS styles
                        num.classList.add('odometer');
                        
                        // Initialize Odometer for slot machine falling effect
                        const od = new Odometer({
                            el: num,
                            value: 0,
                            format: 'd', // 'd' format removes commas
                            theme: 'minimal',
                            duration: 2500 // 2.5s falling duration
                        });
                        
                        // Small delay to ensure render
                        setTimeout(() => {
                            num.innerHTML = target;
                        }, 200);
                    });
                }
            });
        }, { threshold: 0.15 }); // Trigger when 15% of the stats section enters the viewport
        
        observer.observe(statsSection);
    }

    // 8. Dynamic Tabs Switch Logic (About EduCyberSecurity Section)
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    if (tabBtns.length > 0 && tabPanes.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.getAttribute('data-tab');
                
                // Active button toggle
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Active pane switch with animation timing
                tabPanes.forEach(pane => {
                    pane.classList.remove('active');
                    if (pane.id === `pane-${targetTab}`) {
                        pane.classList.add('active');
                    }
                });
            });
        });
    }

    // 9. Precise Scroll Reveal Stagger Logic
    const revealElements = document.querySelectorAll('.reveal-element');
    
    if (revealElements.length > 0) {
        let staggerTimer = null;
        let elementsToReveal = [];

        // Observe elements with lower threshold (0.15) for responsive triggering on tall sections
        const revealObserver = new IntersectionObserver((entries) => {
            let newlyIntersecting = [];

            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Find all reveal-elements inside this intersecting container
                    const targets = entry.target.querySelectorAll('.reveal-element:not(.revealed)');
                    targets.forEach(t => {
                        if (!newlyIntersecting.includes(t)) newlyIntersecting.push(t);
                    });
                    
                    // Also check if the entry target itself is a reveal element
                    if (entry.target.classList.contains('reveal-element') && !entry.target.classList.contains('revealed')) {
                        if (!newlyIntersecting.includes(entry.target)) newlyIntersecting.push(entry.target);
                    }
                    
                    revealObserver.unobserve(entry.target);
                }
            });

            if (newlyIntersecting.length > 0) {
                elementsToReveal = elementsToReveal.concat(newlyIntersecting);
                
                if (!staggerTimer) {
                    staggerTimer = setTimeout(() => {
                        elementsToReveal.forEach((el, index) => {
                            setTimeout(() => {
                                el.classList.add('revealed');
                            }, index * 80);
                        });
                        elementsToReveal = [];
                        staggerTimer = null;
                    }, 30);
                }
            }
        }, { threshold: 0.1 }); // Lower threshold so tall sections trigger immediately when scrolled into view
        
        // Observe sections, containers, and reveal-elements directly
        document.querySelectorAll('section, .reveal-element, .performance-left-col, .performance-right-col').forEach(container => {
            revealObserver.observe(container);
        });
    }

    // 10. Action Section — auto 3D carousel (2 rounds) then spread
    const actionSection = document.getElementById('actionSection');
    if (actionSection) {
        const cardsGrid = actionSection.querySelector('.action-cards-grid');
        let hasAnimated = false;

        function triggerCarousel() {
            if (hasAnimated || window.innerWidth <= 991) return;
            hasAnimated = true;

            // Step 1: snap cards into carousel circle positions
            actionSection.classList.remove('spread-active');
            actionSection.classList.add('carousel-active');

            // Step 2: when spin animation ends → spread
            cardsGrid.addEventListener('animationend', () => {
                cardsGrid.style.transform = ''; // reset grid rotation
                actionSection.classList.remove('carousel-active');
                // Small pause then spread so it feels intentional
                setTimeout(() => {
                    actionSection.classList.add('spread-active');
                }, 120);
            }, { once: true });
        }

        const carouselObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    triggerCarousel();
                    carouselObserver.unobserve(actionSection);
                }
            });
        }, { threshold: 0.4 });

        carouselObserver.observe(actionSection);
    }

    // 10b. Cybernetic Animated Spiral Background Engine (IntersectionObserver Powered)
    const spiralCanvas = document.getElementById('actionSpiralCanvas');
    if (spiralCanvas && actionSection) {
        const ctx = spiralCanvas.getContext('2d');
        let animationFrameId;
        let rotationAngle = 0;
        let isVisible = false;

        // Resize handler with DPR backing for retina/4k visual clarity
        function resizeCanvas() {
            const rect = spiralCanvas.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            spiralCanvas.width = rect.width * dpr;
            spiralCanvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        // Spiral drawing properties
        const spiralArms = 3;
        const baseOffset = 0.055; // Tightness of the logarithmic spiral
        let points = [];
        
        // Generate static nodes along spiral paths for consistent fluid flow
        for (let arm = 0; arm < spiralArms; arm++) {
            const startAngle = (arm * Math.PI * 2) / spiralArms;
            for (let i = 0; i < 60; i++) {
                const theta = i * 0.18; // Angular step
                const r = 20 * Math.pow(Math.E, baseOffset * i); // Logarithmic radius
                points.push({
                    arm: arm,
                    theta: startAngle + theta,
                    r: r,
                    baseAlpha: 0.15 + (1 - i / 60) * 0.45, // Brighter in the center, soft at edges
                    size: 1 + Math.random() * 2.0
                });
            }
        }

        function drawSpiral() {
            if (!isVisible) return;

            const rect = spiralCanvas.getBoundingClientRect();
            const width = rect.width;
            const height = rect.height;
            const centerX = width / 2;
            const centerY = height / 2 + 10; // Centered behind fanned cards

            ctx.clearRect(0, 0, width, height);

            rotationAngle += 0.0015; // Slowly rotate the entire radar coordinate system

            // 1. Draw subtle rotating concentric orbital cyber-rings
            ctx.strokeStyle = 'rgba(0, 43, 94, 0.04)';
            ctx.lineWidth = 1;
            const rings = [180, 320, 480];
            rings.forEach((radius, idx) => {
                ctx.beginPath();
                ctx.arc(centerX, centerY, radius, 0, Math.PI * 2);
                ctx.stroke();

                // Draw rotating cyber ticks along the rings
                ctx.save();
                ctx.translate(centerX, centerY);
                ctx.rotate(rotationAngle * (idx % 2 === 0 ? 1.2 : -1.2));
                ctx.strokeStyle = 'rgba(104, 189, 70, 0.12)';
                ctx.setLineDash([4, 60]);
                ctx.beginPath();
                ctx.arc(0, 0, radius, 0, Math.PI * 2);
                ctx.stroke();
                ctx.restore();
            });

            // 2. Draw rotating logarithmic spiral arms (Cyber Secure Data Flow)
            points.forEach(pt => {
                // Flow nodes outwards dynamically by adding offset to theta
                const currentTheta = pt.theta + rotationAngle * 1.5;
                const x = centerX + Math.cos(currentTheta) * pt.r;
                const y = centerY + Math.sin(currentTheta) * pt.r;

                if (x >= 0 && x <= width && y >= 0 && y <= height) {
                    ctx.fillStyle = `rgba(104, 189, 70, ${pt.baseAlpha})`;
                    ctx.shadowColor = 'rgba(104, 189, 70, 0.25)';
                    ctx.shadowBlur = 4;
                    ctx.beginPath();
                    ctx.arc(x, y, pt.size, 0, Math.PI * 2);
                    ctx.fill();
                    ctx.shadowBlur = 0; // Reset shadow for performance
                }
            });

            // 3. Draw cyber scanning threat sweep wave (soft green sweeping line)
            ctx.save();
            ctx.translate(centerX, centerY);
            ctx.rotate(rotationAngle * 2);
            
            const scanGrad = ctx.createRadialGradient(0, 0, 0, 0, 0, 600);
            scanGrad.addColorStop(0, 'rgba(104, 189, 70, 0.05)');
            scanGrad.addColorStop(1, 'rgba(104, 189, 70, 0)');
            
            ctx.fillStyle = scanGrad;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.arc(0, 0, 600, 0, Math.PI * 0.22); // Narrow radar sweep sector
            ctx.lineTo(0, 0);
            ctx.fill();
            ctx.restore();

            animationFrameId = requestAnimationFrame(drawSpiral);
        }

        // Intersection Observer to run canvas drawing loop ONLY when section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isVisible = entry.isIntersecting;
                if (isVisible) {
                    cancelAnimationFrame(animationFrameId);
                    drawSpiral();
                } else {
                    cancelAnimationFrame(animationFrameId);
                }
            });
        }, { threshold: 0.05 });
        
        observer.observe(actionSection);
    }

    // 11. Scroll Observer for Stats Performance Sliders & Live Simulation
    const statsPerformanceSection = document.getElementById('statsPerformanceSection');
    if (statsPerformanceSection) {
        const statsPerfObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    statsPerformanceSection.classList.add('revealed');
                    
                    // Trigger elastic toggle stretch animation on each track with its inline delay
                    const toggleTracks = statsPerformanceSection.querySelectorAll('.toggle-stretch-anim');
                    const TRACK_DURATION = 900; // 0.9s track animation duration in ms

                    toggleTracks.forEach(track => {
                        const trackDelay = parseFloat(track.style.animationDelay || '0') * 1000;
                        const knob = track.querySelector('.performance-toggle-knob');

                        // Step 1: animate the track after its delay
                        setTimeout(() => {
                            track.classList.add('toggle-active');
                        }, trackDelay);

                        // Step 2: reveal the knob only AFTER the track has fully landed
                        if (knob) {
                            setTimeout(() => {
                                knob.classList.add('knob-visible');
                            }, trackDelay + TRACK_DURATION);
                        }
                    });

                    statsPerfObserver.unobserve(statsPerformanceSection);
                }
            });
        }, { threshold: 0.6 }); // Only when user is fully at the section
        
        statsPerfObserver.observe(statsPerformanceSection);

        // Cyber Simulation Interaction Script
        const performanceRows = statsPerformanceSection.querySelectorAll('.performance-row');
        const imgWrapper = statsPerformanceSection.querySelector('.performance-image-wrapper');
        const hudIcon = statsPerformanceSection.querySelector('.scan-alert-icon');
        const hudText = statsPerformanceSection.querySelector('.scan-alert-text');

        performanceRows.forEach(row => {
            row.addEventListener('click', () => {
                const threatType = row.getAttribute('data-threat');
                const statusEl = row.querySelector('.threat-status');
                
                // Clear any running timeouts on this specific row to prevent animation overlaps
                if (row.simTimeout) clearTimeout(row.simTimeout);
                if (row.hudTimeout) clearTimeout(row.hudTimeout);

                // If this specific threat is already actively mitigated, reset it!
                if (row.classList.contains('sim-active')) {
                    row.classList.remove('sim-active');
                    statusEl.textContent = 'Ready to test';
                    statusEl.className = 'threat-status status-vulnerable';
                    
                    // Hide scanning HUD only if no other rows are currently scanning
                    const anyScanning = Array.from(performanceRows).some(r => r.querySelector('.threat-status').classList.contains('status-scanning'));
                    if (!anyScanning) {
                        imgWrapper.classList.remove('scanning');
                    }
                    return;
                }

                // Activate this threat simulation independently (other rows stay exactly as they are!)
                row.classList.add('sim-active');
                imgWrapper.classList.add('scanning');
                
                // Set HUD Threat Text
                let threatActionText = 'ANALYZING THREAT...';
                let hudIconSymbol = '⚠️';
                if (threatType === 'ransomware') {
                    threatActionText = 'ISOLATING PAYLOAD...';
                    hudIconSymbol = '☣️';
                } else if (threatType === 'exfil') {
                    threatActionText = 'BLOCKING DB EXFILTRATION...';
                    hudIconSymbol = '📡';
                } else if (threatType === 'zeroday') {
                    threatActionText = 'PREVENTING OVERFLOW...';
                    hudIconSymbol = '🛡️';
                }

                if (hudIcon) hudIcon.textContent = hudIconSymbol;
                if (hudText) hudText.textContent = threatActionText;
                
                // Change row status to active simulation
                statusEl.textContent = 'Simulating threat...';
                statusEl.className = 'threat-status status-scanning';

                // Simulate progress timing (2 seconds scan, then contain threat!)
                row.simTimeout = setTimeout(() => {
                    if (row.classList.contains('sim-active')) {
                        statusEl.textContent = 'Endpoint Secured';
                        statusEl.className = 'threat-status status-secured';
                        
                        if (hudIcon) hudIcon.textContent = '✅';
                        if (hudText) hudText.textContent = 'MITIGATION SUCCESSFUL';
                        
                        // Briefly pulse HUD green, then fade it back out to restore normal live feed
                        row.hudTimeout = setTimeout(() => {
                            if (row.classList.contains('sim-active')) {
                                // Only hide scanning overlay if no other row is currently scanning
                                const anyScanning = Array.from(performanceRows).some(r => r.querySelector('.threat-status').classList.contains('status-scanning'));
                                if (!anyScanning) {
                                    imgWrapper.classList.remove('scanning');
                                }
                            }
                        }, 1200);
                    }
                }, 2000);
            });
        });
    }

    // 12. Premium Waving Dotted Surface 3D Canvas Background Engine
    const dotCanvas = document.getElementById('wavingDotCanvas');
    const contactSection = document.getElementById('contactSection');
    if (dotCanvas && contactSection) {
        const ctx = dotCanvas.getContext('2d');
        let animationFrameId;
        let phase = 0;
        let isVisible = false;

        // Resize handler with High-DPR backing for Retina visual precision
        function resizeDotCanvas() {
            const rect = dotCanvas.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            dotCanvas.width = rect.width * dpr;
            dotCanvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        }
        window.addEventListener('resize', resizeDotCanvas);
        resizeDotCanvas();

        // 3D Grid constants
        const rows = 28;
        const cols = 45;
        const spacingX = 42;
        const spacingZ = 36;
        const focalLength = 340; // Depth perspective multiplier
        const rotX = 1.05; // 60-degree back-tilt for panoramic landscape horizon

        function drawWavingSurface() {
            if (!isVisible) return;

            const rect = dotCanvas.getBoundingClientRect();
            const width = rect.width;
            const height = rect.height;
            const centerX = width / 2;
            const centerY = height / 2 - 20;

            ctx.clearRect(0, 0, width, height);

            phase += 0.015; // Animation speed tick

            // Slow swaying yaw angle (radar breathing drift)
            const rotY = 0.06 * Math.sin(phase * 0.2);

            // Double loop to project grid coordinates (col, row)
            for (let r = 0; r < rows; r++) {
                for (let c = 0; c < cols; c++) {
                    // 1. Calculate base 3D coordinates relative to center
                    const x3d = (c - cols / 2) * spacingX;
                    const z3d = (r - rows / 2) * spacingZ;
                    
                    // Height elevation maps double-sinusoidal wave equations
                    const y3d = Math.sin(c * 0.15 + phase) * Math.cos(r * 0.12 + phase) * 36;

                    // 2. Perform 3D rotations
                    // Rotate on X axis (tilt backwards)
                    const rotY1 = y3d * Math.cos(rotX) - z3d * Math.sin(rotX);
                    const rotZ1 = y3d * Math.sin(rotX) + z3d * Math.cos(rotX);

                    // Rotate on Y axis (slow sway)
                    const rotX2 = x3d * Math.cos(rotY) - rotZ1 * Math.sin(rotY);
                    const rotZ2 = x3d * Math.sin(rotY) + rotZ1 * Math.cos(rotY);

                    // 3. Project to 2D screen coordinate space with perspective division
                    // Shift coordinate grid depth offset of 380px to center it in distance
                    const depth = rotZ2 + 380;
                    if (depth > 0) {
                        const scale = focalLength / depth;
                        const screenX = centerX + rotX2 * scale;
                        
                        // Push projected coordinates vertically to sit perfectly at bottom of canvas
                        const screenY = centerY + rotY1 * scale + 140;

                        if (screenX >= 0 && screenX <= width && screenY >= 0 && screenY <= height) {
                            // Depth calculations for fog-of-war fading
                            const depthRatio = Math.max(0, Math.min(1, (depth - 150) / 700));
                            const alpha = (1 - depthRatio) * 0.65; // Soft glow fading into distant horizon
                            
                            // Depth calculations for perspective particle sizing
                            const size = (1 - depthRatio) * 2.0;

                            if (alpha > 0.02) {
                                ctx.fillStyle = `rgba(255, 255, 255, ${alpha})`; // Glowing Widescreen White Dots
                                ctx.beginPath();
                                ctx.arc(screenX, screenY, size, 0, Math.PI * 2);
                                ctx.fill();
                            }
                        }
                    }
                }
            }

            animationFrameId = requestAnimationFrame(drawWavingSurface);
        }

        // Intersection Observer to run drawing loop ONLY when section is visible
        const dotObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isVisible = entry.isIntersecting;
                if (isVisible) {
                    cancelAnimationFrame(animationFrameId);
                    drawWavingSurface();
                } else {
                    cancelAnimationFrame(animationFrameId);
                }
            });
        }, { threshold: 0.05 });

        dotObserver.observe(contactSection);
    }

    // 12b. FAQ Section Animated Wave & Particle Canvas Engine (#ceoWavyCanvas)
    const ceoWavyCanvas = document.getElementById('ceoWavyCanvas');
    const faqSection = document.getElementById('faqSection');
    if (ceoWavyCanvas && faqSection) {
        const ctx = ceoWavyCanvas.getContext('2d');
        let animationFrameId;
        let t = 0;
        let isFaqVisible = false;

        function resizeFaqCanvas() {
            const rect = faqSection.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            ceoWavyCanvas.width = rect.width * dpr;
            ceoWavyCanvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        }
        window.addEventListener('resize', resizeFaqCanvas);
        resizeFaqCanvas();

        // Particles array for ambient ambient cyber float
        const particles = Array.from({ length: 35 }, () => ({
            x: Math.random(),
            y: Math.random(),
            radius: 1.5 + Math.random() * 2.5,
            speedX: (Math.random() - 0.5) * 0.0006,
            speedY: (Math.random() - 0.5) * 0.0006,
            alpha: 0.15 + Math.random() * 0.35,
            color: Math.random() > 0.5 ? 'rgba(54, 184, 86,' : 'rgba(2, 132, 199,'
        }));

        function drawFaqBackground() {
            if (!isFaqVisible) return;
            const width = faqSection.clientWidth;
            const height = faqSection.clientHeight;

            ctx.clearRect(0, 0, width, height);

            t += 0.008;

            // Flowing animated sine wave network in top right
            const lines = [
                { color: 'rgba(54, 184, 86, 0.18)', amp: 35, freq: 0.004, phase: t, yOffset: height * 0.15 },
                { color: 'rgba(2, 132, 199, 0.15)', amp: 45, freq: 0.003, phase: t * 1.2, yOffset: height * 0.2 },
                { color: 'rgba(54, 184, 86, 0.12)', amp: 25, freq: 0.005, phase: t * 0.8, yOffset: height * 0.25 },
                { color: 'rgba(2, 132, 199, 0.10)', amp: 55, freq: 0.002, phase: t * 1.5, yOffset: height * 0.3 }
            ];

            lines.forEach(line => {
                ctx.beginPath();
                ctx.strokeStyle = line.color;
                ctx.lineWidth = 1.5;
                for (let x = width * 0.15; x <= width + 60; x += 10) {
                    const y = line.yOffset + Math.sin(x * line.freq + line.phase) * line.amp + Math.cos(x * 0.002 + line.phase) * 15;
                    if (x === width * 0.15) ctx.moveTo(x, y);
                    else ctx.lineTo(x, y);
                }
                ctx.stroke();
            });

            // Update & draw ambient glowing particles
            particles.forEach(p => {
                p.x += p.speedX;
                p.y += p.speedY;

                if (p.x < 0) p.x = 1;
                if (p.x > 1) p.x = 0;
                if (p.y < 0) p.y = 1;
                if (p.y > 1) p.y = 0;

                const px = p.x * width;
                const py = p.y * height;

                ctx.beginPath();
                ctx.fillStyle = `${p.color} ${p.alpha})`;
                ctx.arc(px, py, p.radius, 0, Math.PI * 2);
                ctx.fill();
            });

            animationFrameId = requestAnimationFrame(drawFaqBackground);
        }

        const faqObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isFaqVisible = entry.isIntersecting;
                if (isFaqVisible) {
                    cancelAnimationFrame(animationFrameId);
                    drawFaqBackground();
                } else {
                    cancelAnimationFrame(animationFrameId);
                }
            });
        }, { threshold: 0.05 });

        faqObserver.observe(faqSection);
    }

    // 13. Interactive FAQ Accordion Trigger Handler with Question Fade & Typewriter Answers
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-trigger');
        const content = item.querySelector('.faq-content');
        const contentText = item.querySelector('.faq-content-inner p');

        if (trigger && content && contentText) {
            // Save initial answer text to attribute for typing reference
            const fullAnswer = contentText.textContent.trim();
            item.setAttribute('data-fullanswer', fullAnswer);

            trigger.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Clear any running typing loop for this item
                if (item.typingInterval) {
                    clearInterval(item.typingInterval);
                }

                // Close all other active FAQ items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherText = otherItem.querySelector('.faq-content-inner p');
                        if (otherContent) {
                            otherContent.style.maxHeight = null;
                            otherItem.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
                        }
                        if (otherText) {
                            otherText.textContent = otherItem.getAttribute('data-fullanswer') || '';
                        }
                        if (otherItem.typingInterval) {
                            clearInterval(otherItem.typingInterval);
                        }
                    }
                });

                // Toggle logic
                if (isActive) {
                    item.classList.remove('active');
                    content.style.maxHeight = null;
                    trigger.setAttribute('aria-expanded', 'false');
                    
                    // Reset answer back to complete state when fully closed
                    setTimeout(() => {
                        contentText.textContent = fullAnswer;
                    }, 400);
                } else {
                    item.classList.add('active');
                    
                    // Pre-clear text for clean typing start
                    contentText.textContent = '';
                    content.style.maxHeight = '200px'; // Give sufficient immediate space to prevent jumpiness
                    trigger.setAttribute('aria-expanded', 'true');
                    
                    // Type out characters progressively
                    let index = 0;
                    item.typingInterval = setInterval(() => {
                        if (index < fullAnswer.length) {
                            contentText.textContent += fullAnswer.charAt(index);
                            index++;
                            // Scale container size dynamically with dynamic scrollHeight adjustments!
                            content.style.maxHeight = content.scrollHeight + 'px';
                        } else {
                            clearInterval(item.typingInterval);
                        }
                    }, 10); // Ultra-responsive, slick 10ms typing tick
                }
            });
        }
    });

    // 14. CEO Vision Reveal & Typing Animation
    const ceoCard = document.getElementById('ceoCard');
    const ceoRevealBtn = document.getElementById('ceoRevealBtn');
    const ceoQuoteText = document.getElementById('ceoQuoteText');
    
    if (ceoCard && ceoRevealBtn && ceoQuoteText) {
        let isTypingStarted = false;
        
        const revealVision = () => {
            if (isTypingStarted) return;
            isTypingStarted = true;
            
            // Add revealed class to shrink image, fade out button, and slide up content container
            ceoCard.classList.add('vision-revealed');
            
            // Start character-by-character typing animation after visual shrink transition is underway
            setTimeout(() => {
                const fullText = ceoQuoteText.getAttribute('data-fulltext') || '';
                ceoQuoteText.textContent = '';
                
                let index = 0;
                const typingInterval = setInterval(() => {
                    if (index < fullText.length) {
                        ceoQuoteText.textContent += fullText.charAt(index);
                        index++;
                    } else {
                        clearInterval(typingInterval);
                    }
                }, 15); // ~15ms per character creates a clean, elegant corporate typewriter feel
            }, 600);
        };
        
        ceoRevealBtn.addEventListener('click', revealVision);
        
        // Also allow clicking the image wrapper itself for a premium interactive vibe!
        const imgWrap = ceoCard.querySelector('.combined-ceo-image-wrapper');
        if (imgWrap) {
            imgWrap.style.cursor = 'pointer';
            imgWrap.addEventListener('click', revealVision);
        }
    }

    // 15. Typing Mirror Effect for Hero Headings
    const mainTitle = document.getElementById('heroTitleMain');
    const mainTitleReflect = document.getElementById('heroTitleMainReflect');
    const subTitle = document.getElementById('heroTitleSub');
    const subTitleReflect = document.getElementById('heroTitleSubReflect');
    
    if (mainTitle && mainTitleReflect && subTitle && subTitleReflect) {
        const textMain = mainTitle.getAttribute('data-text') || '';
        const textSub = subTitle.getAttribute('data-text') || '';
        
        // Wipe pre-rendered fallback text as soon as JS successfully initializes to run the typewriter effect
        mainTitle.textContent = '';
        mainTitleReflect.textContent = '';
        subTitle.textContent = '';
        subTitleReflect.textContent = '';
        
        let indexMain = 0;
        let indexSub = 0;
        
        // Type out main title character-by-character
        const mainInterval = setInterval(() => {
            if (indexMain < textMain.length) {
                const char = textMain.charAt(indexMain);
                mainTitle.textContent += char;
                mainTitleReflect.textContent += char;
                indexMain++;
            } else {
                clearInterval(mainInterval);
                
                // Start typing subtitle after main title finishes!
                setTimeout(() => {
                    const subInterval = setInterval(() => {
                        if (indexSub < textSub.length) {
                            const char = textSub.charAt(indexSub);
                            subTitle.textContent += char;
                            subTitleReflect.textContent += char;
                            indexSub++;
                        } else {
                            clearInterval(subInterval);
                        }
                    }, 40); // authoritative, smooth cadence for sub-text
                }, 150);
            }
        }, 55); // beautiful, authoritative cadence for main text
    }

    // 16. Premium Vertical Center Split Text Reveal Scroll Engine
    const centerRevealTargets = document.querySelectorAll('.about-title, .action-title, .performance-title, .combined-section-title, .contact-title');
    
    // Automatically apply center-reveal class hooks safely
    centerRevealTargets.forEach(target => {
        target.classList.add('center-reveal-text');
    });

    const centerRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // Trigger if element enters viewport OR is already scrolled above/near the top fold
            if (entry.isIntersecting || entry.boundingClientRect.top < 0) {
                entry.target.classList.add('revealed');
                centerRevealObserver.unobserve(entry.target); // Unobserve once fully revealed for maximum scroll efficiency
            }
        });
    }, {
        threshold: 0.01, // Low threshold so even a tiny portion visible fires instantly
        rootMargin: '0px 0px 80px 0px' // Pre-trigger unfolding 80px before entering screen
    });

    centerRevealTargets.forEach(target => {
        centerRevealObserver.observe(target);
    });

    // 17. Volumetric Trigonometric Wavy Sine-Line Background Engine (IntersectionObserver Enabled)
    const wavyCanvas = document.getElementById('ceoWavyCanvas');
    const ceoFaqSection = document.getElementById('ceoFaqSection');
    
    if (wavyCanvas && ceoFaqSection) {
        const ctx = wavyCanvas.getContext('2d');
        let animationFrameId;
        let phase = 0;
        let isVisible = false;

        // Vector sharp High-DPR backing scale handler
        function resizeWavyCanvas() {
            const rect = wavyCanvas.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            wavyCanvas.width = rect.width * dpr;
            wavyCanvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        }

        // Draw multiple overlaid waving waves
        function drawWaves() {
            if (!isVisible) return;
            
            const w = wavyCanvas.width / (window.devicePixelRatio || 1);
            const h = wavyCanvas.height / (window.devicePixelRatio || 1);
            
            ctx.clearRect(0, 0, w, h);
            
            // Define a highly vibrant, 6-wave multicolor holographic laser system
            const waves = [
                // Wave 1: Navy Blue (Primary Deep Base) - thick, slow flowing base wave
                {
                    amplitude: 45,
                    frequency: 0.002,
                    speed: 0.005,
                    color: 'rgba(0, 43, 94, 0.09)',
                    lineWidth: 3.5
                },
                // Wave 2: Neon Green (Grass Secondary Accent) - highly rich and organic
                {
                    amplitude: 32,
                    frequency: 0.004,
                    speed: 0.010,
                    color: 'rgba(104, 189, 70, 0.17)',
                    lineWidth: 2.8
                },
                // Wave 3: Electric Cyber Cyan (High-Tech Accent) - gorgeous blue glow
                {
                    amplitude: 24,
                    frequency: 0.006,
                    speed: 0.007,
                    color: 'rgba(14, 165, 233, 0.16)',
                    lineWidth: 2.2
                },
                // Wave 4: Glowing Amber Gold (Warm Corporate Accent) - bright golden thread
                {
                    amplitude: 18,
                    frequency: 0.007,
                    speed: 0.013,
                    color: 'rgba(245, 158, 11, 0.13)',
                    lineWidth: 1.8
                },
                // Wave 5: Neon Green (Grass Secondary Accent) - quick energetic overlay
                {
                    amplitude: 15,
                    frequency: 0.009,
                    speed: 0.016,
                    color: 'rgba(104, 189, 70, 0.12)',
                    lineWidth: 1.5
                },
                // Wave 6: Deep Navy Blue (Primary Accent) - dense high frequency backdrop
                {
                    amplitude: 10,
                    frequency: 0.005,
                    speed: 0.011,
                    color: 'rgba(0, 43, 94, 0.06)',
                    lineWidth: 1.2
                }
            ];
            
            phase += 0.5; // Base timing index

            waves.forEach((wave) => {
                ctx.beginPath();
                ctx.strokeStyle = wave.color;
                ctx.lineWidth = wave.lineWidth;
                ctx.lineCap = 'round';
                
                // Draw trigonometric sine curve horizontally across canvas
                for (let x = 0; x < w; x += 3) {
                    // Combine sine wave math anchored near the bottom: y = vertical_bottom + sin(x * freq + phase * speed) * amplitude
                    const y = (h * 0.92) + Math.sin(x * wave.frequency + phase * wave.speed) * wave.amplitude 
                              + Math.cos(x * 0.0015 - phase * 0.004) * (wave.amplitude * 0.3); // secondary modulator for organic variation
                    
                    if (x === 0) {
                        ctx.moveTo(x, y);
                    } else {
                        ctx.lineTo(x, y);
                    }
                }
                ctx.stroke();
            });
            
            animationFrameId = requestAnimationFrame(drawWaves);
        }

        // Window resize observer
        window.addEventListener('resize', () => {
            resizeWavyCanvas();
        });
        
        // Trigger initial resize scale
        resizeWavyCanvas();

        // High performance IntersectionObserver triggers animation loop only when visible
        const wavyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isVisible = entry.isIntersecting;
                if (isVisible) {
                    drawWaves();
                } else {
                    cancelAnimationFrame(animationFrameId);
                }
            });
        }, { threshold: 0.05 });

        wavyObserver.observe(ceoFaqSection);
    }

    // 16. Real-Time 3D Dotted Spinning Cyber Globe Background Engine
    const globeCanvas = document.getElementById('globeDotCanvas');
    if (globeCanvas) {
        const ctx = globeCanvas.getContext('2d');
        let globeAnimationFrameId;
        let globePhase = 0;
        let isGlobeVisible = false;

        // High-DPI backing context for crisp Retina lines and dots
        function resizeGlobeCanvas() {
            const rect = globeCanvas.getBoundingClientRect();
            const dpr = window.devicePixelRatio || 1;
            globeCanvas.width = rect.width * dpr;
            globeCanvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        }
        window.addEventListener('resize', resizeGlobeCanvas);
        resizeGlobeCanvas();

        // 3D Procedural Continent Mapping Check
        function isLand(lat, lon) {
            // Rough mathematical boundary boxes of Earth's main landmasses with high-frequency coastline noise
            const noise = Math.sin(lat * 0.35) * Math.cos(lon * 0.35) * 3 + Math.sin(lon * 0.8) * 1.5;
            
            // 1. North America
            if (lat > 15 + noise * 0.3 && lat < 78 && lon > -168 && lon < -52 + noise * 0.4) {
                // Exclude Gulf of Mexico / Caribbean area
                if (lat < 30 && lon > -95) return false;
                return true;
            }
            
            // 2. South America
            if (lat > -56 && lat <= 15 + noise * 0.3 && lon > -82 + noise * 0.2 && lon < -34 + noise * 0.3) {
                if (lat > 8 && lon < -76) return false;
                return true;
            }
            
            // 3. Africa
            if (lat > -35 && lat < 37 + noise * 0.2 && lon > -18 + noise * 0.3 && lon < 51 + noise * 0.2) {
                if (lat > 12 && lon > 43) return false; // Red Sea / Arabia split
                if (lat > 18 && lon < -12) return false; // Bulge trim
                return true;
            }
            
            // 4. Eurasia (Europe + Asia)
            if (lat > 5 + noise * 0.2 && lat < 76 && lon > -10 + noise * 0.2 && lon < 180) {
                if (lat < 30 && lon > 34 && lon < 60) return false; // Arabian Peninsula separation
                if (lat < 15 && lon > 60 && lon < 78) return false; // India ocean separation
                if (lat < 10 && lon > 100) return true; // Southeast Asia
                return true;
            }
            
            // 5. Australia
            if (lat > -44 && lat < -10 + noise * 0.4 && lon > 112 && lon < 154) {
                return true;
            }
            
            // 6. Greenland
            if (lat > 60 && lat < 85 && lon > -75 && lon < -15) {
                return true;
            }
            
            // 7. Antarctica
            if (lat < -62 + noise * 0.5) {
                return true;
            }

            // 8. Island chains (Japan, Indonesia, Iceland, Great Britain)
            if (lat > 30 && lat < 46 && lon > 129 && lon < 146) return true; // Japan
            if (lat > -10 && lat < 10 && lon > 95 && lon < 141) return true; // Indonesia
            if (lat > 50 && lat < 61 && lon > -10 && lon < 2) return true; // Great Britain
            if (lat > 63 && lat < 67 && lon > -25 && lon < -13) return true; // Iceland
            
            return false;
        }

        // Generate points evenly spaced on a 3D sphere shell
        const spherePoints = [];
        const latSegments = 40; // Dense latitude rings
        const lonSegments = 85; // Dense longitude columns

        for (let i = 0; i < latSegments; i++) {
            const phi = (i / latSegments) * Math.PI; // 0 to PI
            const lat = 90 - (i / latSegments) * 180; // 90 to -90
            
            // Scale longitude columns by sine of latitude to keep coordinate density perfectly uniform
            const currentLonSegments = Math.round(lonSegments * Math.sin(phi));
            for (let j = 0; j < currentLonSegments; j++) {
                const theta = (j / currentLonSegments) * Math.PI * 2; // 0 to 2PI
                const lon = (j / currentLonSegments) * 360 - 180; // -180 to 180
                
                const land = isLand(lat, lon);
                
                // Assign a color theme type (navy blue base, green/cyan accents)
                let colorType = 'navy';
                const rand = Math.random();
                if (rand > 0.85) {
                    colorType = 'green';
                } else if (rand > 0.7) {
                    colorType = 'cyan';
                }

                spherePoints.push({
                    x: Math.sin(phi) * Math.cos(theta),
                    y: Math.sin(phi) * Math.sin(theta),
                    z: Math.cos(phi),
                    isLand: land,
                    colorType: colorType
                });
            }
        }

        // 3D Tilted orbit angle and spin constants
        const rotationSpeedY = 0.005; // Elegant rotation speed
        const tiltX = 0.42; // ~24 degree static tilt for beautiful perspective angle
        const cosTiltX = Math.cos(tiltX);
        const sinTiltX = Math.sin(tiltX);

        function draw3DGlobe() {
            if (!isGlobeVisible) return;

            const rect = globeCanvas.getBoundingClientRect();
            const width = rect.width;
            const height = rect.height;
            const centerX = width / 2;
            const centerY = height / 2;
            const sphereRadius = Math.min(width, height) * 0.42;

            ctx.clearRect(0, 0, width, height);

            globePhase += rotationSpeedY;

            // Pre-calculate rotation matrices
            const cosRotY = Math.cos(globePhase);
            const sinRotY = Math.sin(globePhase);

            // 1. Rotate, project and compile points
            const projectedPoints = [];

            for (let i = 0; i < spherePoints.length; i++) {
                const pt = spherePoints[i];

                // Spin around Y axis (Globe rotation)
                const xRotY = pt.x * cosRotY - pt.z * sinRotY;
                const zRotY = pt.x * sinRotY + pt.z * cosRotY;

                // Static tilt around X axis
                const yRotX = pt.y * cosTiltX - zRotY * sinTiltX;
                const zRotX = pt.y * sinTiltX + zRotY * cosTiltX;

                // Perspective projection factor (Camera distance of 3.0 sphere diameters)
                const cameraDistance = 3.0;
                const perspective = cameraDistance / (cameraDistance + zRotX);

                const screenX = centerX + xRotY * sphereRadius * perspective;
                const screenY = centerY + yRotX * sphereRadius * perspective;

                projectedPoints.push({
                    x: screenX,
                    y: screenY,
                    depth: zRotX,
                    isLand: pt.isLand,
                    colorType: pt.colorType
                });
            }

            // 2. Sort points by depth (Painter's algorithm: draw back-to-front!)
            projectedPoints.sort((a, b) => b.depth - a.depth);

            // 3. Render points
            for (let i = 0; i < projectedPoints.length; i++) {
                const pt = projectedPoints[i];

                // Opacity mapping based on depth coordinates (back of sphere has lower opacity)
                const depthFactor = (pt.depth + 1.0) / 2.0; // Normalized 0.0 to 1.0
                
                // If it is land: render highly opaque, beautifully distinct theme dots!
                if (pt.isLand) {
                    const alpha = 0.95 - (depthFactor * 0.7); // Front: 0.95, Back: 0.25
                    const size = 3.5 - (depthFactor * 2.2); // Front: 3.5px, Back: 1.3px

                    // Map matching colors
                    let dotColor = `rgba(0, 43, 94, ${alpha * 0.4})`; // Navy Blue Continent dots
                    if (pt.colorType === 'green') {
                        dotColor = `rgba(104, 189, 70, ${alpha * 0.9})`; // Neon Green Continent dots
                    } else if (pt.colorType === 'cyan') {
                        dotColor = `rgba(14, 165, 233, ${alpha * 0.85})`; // Cyber Cyan Continent dots
                    }

                    ctx.beginPath();
                    ctx.fillStyle = dotColor;
                    ctx.arc(pt.x, pt.y, size, 0, Math.PI * 2);
                    ctx.fill();

                    // Beautiful foreground green halo
                    if (pt.colorType === 'green' && depthFactor < 0.2) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(104, 189, 70, ${alpha * 0.25})`;
                        ctx.lineWidth = 0.5;
                        ctx.arc(pt.x, pt.y, size * 2.5, 0, Math.PI * 2);
                        ctx.stroke();
                    }
                } else {
                    // If it is ocean: draw extremely faint, tiny points to softly define the sphere boundaries!
                    // This creates that exact high-end translucent dotted blueprint sphere style!
                    const alpha = 0.08 - (depthFactor * 0.06); // Front: 0.08, Back: 0.02
                    const size = 0.8; // Faint tiny dots

                    // Ocean color is faint navy/cyan blend
                    ctx.beginPath();
                    ctx.fillStyle = `rgba(0, 43, 94, ${alpha})`;
                    ctx.arc(pt.x, pt.y, size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            globeAnimationFrameId = requestAnimationFrame(draw3DGlobe);
        }

        // High performance IntersectionObserver triggers animation loop only when visible
        const globeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isGlobeVisible = entry.isIntersecting;
                if (isGlobeVisible) {
                    cancelAnimationFrame(globeAnimationFrameId);
                    draw3DGlobe();
                } else {
                    cancelAnimationFrame(globeAnimationFrameId);
                }
            });
        }, { threshold: 0.05 });

        globeObserver.observe(globeCanvas);
    }

    // Lazy-load MDR section background video on scroll
    const mdrVideo = document.getElementById('mdrVideoBg');
    const mdrSection = document.getElementById('mdrVideoSection');
    if (mdrVideo && mdrSection) {
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (mdrVideo.paused) {
                        mdrVideo.play().catch(e => console.log('MDR Video autoplay notice:', e));
                    }
                } else {
                    if (!mdrVideo.paused) {
                        mdrVideo.pause();
                    }
                }
            });
        }, { threshold: 0.05 });
        videoObserver.observe(mdrSection);
    }

    // Event Schedule Top Pill Capsule Buttons & Popup Modal Controller
    const schedulePillBtns = document.querySelectorAll('.schedule-pill-btn, .schedule-nav-btn');
    const schedulePanes = document.querySelectorAll('.schedule-pane');
    const scheduleModalOverlay = document.getElementById('scheduleModalOverlay');
    const scheduleModalClose = document.getElementById('scheduleModalClose');

    if (schedulePillBtns.length > 0) {
        schedulePillBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const targetTab = btn.getAttribute('data-tab');

                // Update active state on buttons
                schedulePillBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Update active state on content panes inside modal
                schedulePanes.forEach(pane => {
                    pane.classList.remove('active');
                    if (pane.id === `pane-${targetTab}`) {
                        pane.classList.add('active');
                    }
                });

                // Open Popup Modal Overlay
                if (scheduleModalOverlay) {
                    const modalBody = scheduleModalOverlay.querySelector('.schedule-modal-body');
                    if (modalBody) modalBody.scrollTop = 0;
                    scheduleModalOverlay.classList.add('active');
                    scheduleModalOverlay.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('modal-open');
                }
            });
        });
    }

    // Modal Close Function
    function closeScheduleModal() {
        if (scheduleModalOverlay) {
            scheduleModalOverlay.classList.remove('active');
            scheduleModalOverlay.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('modal-open');
        }
    }

    if (scheduleModalClose) {
        scheduleModalClose.addEventListener('click', closeScheduleModal);
    }

    if (scheduleModalOverlay) {
        scheduleModalOverlay.addEventListener('click', (e) => {
            if (e.target === scheduleModalOverlay) {
                closeScheduleModal();
            }
        });
    }

    // Modal Mouse Wheel Scroll Guarantee
    const scheduleModalBody = document.querySelector('.schedule-modal-body');
    if (scheduleModalBody) {
        scheduleModalBody.addEventListener('wheel', (e) => {
            const scrollTop = scheduleModalBody.scrollTop;
            const scrollHeight = scheduleModalBody.scrollHeight;
            const height = scheduleModalBody.clientHeight;
            const delta = e.deltaY;
            const up = delta < 0;

            if (scrollHeight > height) {
                const isAtTop = scrollTop === 0 && up;
                const isAtBottom = Math.ceil(scrollTop + height) >= scrollHeight && !up;

                if (!isAtTop && !isAtBottom) {
                    scheduleModalBody.scrollTop += delta;
                    e.preventDefault();
                }
            }
        }, { passive: false });
    }



    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && scheduleModalOverlay && scheduleModalOverlay.classList.contains('active')) {
            closeScheduleModal();
        }
    });

    // Menu Agenda Click Handler
    const menuAgendaLink = document.getElementById('menuAgendaLink');
    if (menuAgendaLink) {
        menuAgendaLink.addEventListener('click', (e) => {
            const scheduleSec = document.getElementById('scheduleSection');
            if (scheduleSec) {
                e.preventDefault();
                scheduleSec.scrollIntoView({ behavior: 'smooth' });
                const agendaPill = document.querySelector('.schedule-pill-btn[data-tab="agenda"]');
                if (agendaPill) {
                    setTimeout(() => agendaPill.click(), 400);
                }
            }
        });
    }

    // View Award Categories CTA Handler
    const viewAwardCategoriesBtn = document.getElementById('viewAwardCategoriesBtn');
    if (viewAwardCategoriesBtn) {
        viewAwardCategoriesBtn.addEventListener('click', () => {
            closeScheduleModal();
            const nominationSection = document.getElementById('nominateSection') || document.getElementById('awardsSection') || document.getElementById('registrationSection');
            if (nominationSection) {
                nominationSection.scrollIntoView({ behavior: 'smooth' });
            } else {
                const registrationBtn = document.querySelector('.hero-cta-btn, .nav-cta-btn, #requestInvitationBtn');
                if (registrationBtn) registrationBtn.click();
            }
        });
    }
});



</script>

    <!-- ===================== Request Invitation Modal ===================== -->
    <div class="ri-backdrop" id="riBackdrop"></div>
    <div class="ri-modal" id="riModal" role="dialog" aria-modal="true" aria-labelledby="riModalTitle">
        <button class="ri-close" id="riClose" aria-label="Close">&times;</button>

        <div class="ri-modal-header">
            <span class="ri-modal-tag">Edtech security Summit 2026</span>
            <h2 class="ri-modal-title" id="riModalTitle">Request Your Invitation</h2>
            <p class="ri-modal-sub">Fill in your details and we'll get back to you shortly.</p>
        </div>

        <form class="ri-form" id="riForm" novalidate>
            <div class="ri-field-row">
                <div class="ri-field">
                    <label class="ri-label" for="riName">Full Name <span class="ri-req">*</span></label>
                    <input class="ri-input" type="text" id="riName" name="name" placeholder="John Smith" required>
                </div>
                <div class="ri-field">
                    <label class="ri-label" for="riEmail">Email Address <span class="ri-req">*</span></label>
                    <input class="ri-input" type="email" id="riEmail" name="email" placeholder="john@example.com" required>
                </div>
            </div>
            <div class="ri-field">
                <label class="ri-label" for="riPhone">Phone Number <span class="ri-req">*</span></label>
                <input class="ri-input" type="tel" id="riPhone" name="phone" placeholder="+971 50 000 0000" required>
            </div>

            <button type="submit" class="ri-submit">
                <i class="fas fa-shield-halved"></i>
                <span>Submit Request</span>
            </button>
        </form>

        <div class="ri-success" id="riSuccess">
            <div class="ri-success-icon"><i class="fas fa-circle-check"></i></div>
            <h3>Request Sent!</h3>
            <p>Thank you, we'll be in touch with your invitation details soon.</p>
        </div>
    </div>

    <script>
    (function () {
        const btn    = document.getElementById('requestInvitationBtn');
        const modal  = document.getElementById('riModal');
        const backdrop = document.getElementById('riBackdrop');
        const closeBtn = document.getElementById('riClose');
        const form   = document.getElementById('riForm');
        const success = document.getElementById('riSuccess');

        function openModal() {
            modal.classList.add('ri-open');
            backdrop.classList.add('ri-open');
            document.body.style.overflow = 'hidden';
        }
        function closeModal() {
            modal.classList.remove('ri-open');
            backdrop.classList.remove('ri-open');
            document.body.style.overflow = '';
            setTimeout(() => {
                form.reset();
                form.style.display = '';
                success.style.display = 'none';
            }, 400);
        }

        closeBtn && closeBtn.addEventListener('click', closeModal);
        backdrop && backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

        form && form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!form.checkValidity()) { form.reportValidity(); return; }
            form.style.display = 'none';
            success.style.display = 'flex';
        });

        // Gallery Coming Soon Modal Handler
        const galleryBtn = document.getElementById('galleryBtn');
        const galleryModal = document.getElementById('galleryModal');
        const galleryBackdrop = document.getElementById('galleryModalBackdrop');
        const galleryClose = document.getElementById('galleryModalClose');
        const galleryOk = document.getElementById('galleryModalOk');

        function openGalleryModal() {
            galleryModal && galleryModal.classList.add('active');
            galleryBackdrop && galleryBackdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        function closeGalleryModal() {
            galleryModal && galleryModal.classList.remove('active');
            galleryBackdrop && galleryBackdrop.classList.remove('active');
            document.body.style.overflow = '';
        }

        galleryBtn && galleryBtn.addEventListener('click', openGalleryModal);
        galleryClose && galleryClose.addEventListener('click', closeGalleryModal);
        galleryOk && galleryOk.addEventListener('click', closeGalleryModal);
        galleryBackdrop && galleryBackdrop.addEventListener('click', closeGalleryModal);
    })();
    </script>

    <!-- Gallery Coming Soon Modal -->
    <div class="gallery-modal-backdrop" id="galleryModalBackdrop"></div>
    <div class="gallery-coming-soon-modal" id="galleryModal" role="dialog" aria-modal="true" aria-labelledby="galleryModalTitle">
        <button class="gallery-modal-close" id="galleryModalClose" aria-label="Close">&times;</button>
        <div class="gallery-modal-icon">
            <i class="fas fa-images"></i>
        </div>
        <span class="gallery-modal-tag">COMING SOON</span>
        <h3 class="gallery-modal-title" id="galleryModalTitle">Event Gallery</h3>
        <p class="gallery-modal-text">
            Photos, session recordings, and event highlights from the <strong>Ed-Tech Cybersecurity Symposium &amp; Awards 2026</strong> will be published here after the event.
        </p>
        <button type="button" class="gallery-modal-btn" id="galleryModalOk">Got it</button>
    </div>
</body>
</html>

