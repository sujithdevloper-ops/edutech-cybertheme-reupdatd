<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <style>
    :root {
        --color-primary: #002b5e;
        --color-secondary: #68BD46;
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Inter', sans-serif;
        --radius-full: 9999px;
    }

    .custom-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        padding: 24px 40px;
        display: flex;
        justify-content: center;
        box-sizing: border-box;
        pointer-events: none;
    }

    .header-inner {
        pointer-events: auto;
        background-color: rgba(255, 255, 255, 0.96);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border: 1px solid #e2e8f0;
        border-radius: var(--radius-full);
        padding: 8px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1360px;
        box-shadow: 0 4px 14px rgba(0, 43, 94, 0.05);
        position: relative;
        transition: all 0.3s ease;
    }

    .header-left {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .summit-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .header-logo-img {
        height: 44px;
        width: auto;
        max-width: 220px;
        object-fit: contain;
        display: block;
    }

    /* Desktop Navigation: Agenda & Gallery */
    .nav-direct-links {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .nav-pill-link {
        background: #f1f5f9;
        border: 1.5px solid #e2e8f0;
        border-radius: var(--radius-full);
        padding: 7px 18px;
        color: var(--color-primary) !important;
        text-decoration: none;
        font-family: var(--font-heading);
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .nav-pill-link:hover {
        background-color: var(--color-primary);
        color: #ffffff !important;
        border-color: var(--color-primary);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 43, 94, 0.15);
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* High-Contrast Register Event CTA Capsule */
    .cta-capsule {
        background: #002b5e;
        border: 1.5px solid #002b5e;
        border-radius: var(--radius-full);
        display: inline-flex;
        align-items: center;
        padding: 5px 18px 5px 6px;
        gap: 10px;
        font-family: var(--font-heading);
        font-size: 13.5px;
        font-weight: 800;
        color: #ffffff !important;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(0, 43, 94, 0.18);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .cta-capsule .cta-text {
        color: #ffffff !important;
        transition: color 0.3s ease;
    }

    .cta-icon-circle {
        background-color: #68BD46;
        color: #002b5e;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        transition: all 0.3s ease;
    }

    .cta-icon-circle i {
        color: #002b5e !important;
        transition: color 0.3s ease;
    }

    .cta-capsule:hover {
        background: #68BD46;
        border-color: #68BD46;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(104, 189, 70, 0.4);
    }

    .cta-capsule:hover .cta-text {
        color: #002b5e !important;
    }

    .cta-capsule:hover .cta-icon-circle {
        background-color: #002b5e;
    }

    .cta-capsule:hover .cta-icon-circle i {
        color: #68BD46 !important;
    }

    /* Mobile Hamburger Trigger */
    .mobile-hamburger-btn {
        display: none;
        background: #f1f5f9;
        border: 1.5px solid #e2e8f0;
        border-radius: var(--radius-full);
        padding: 7px 14px;
        align-items: center;
        gap: 8px;
        color: var(--color-primary);
        font-family: var(--font-heading);
        font-size: 13px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.25s ease;
    }

    .mobile-hamburger-btn:hover,
    .mobile-hamburger-btn:active {
        background: var(--color-primary);
        color: #ffffff;
        border-color: var(--color-primary);
    }

    .hamburger-icon-wrap {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 3.5px;
        width: 16px;
        height: 14px;
    }

    .hamburger-icon-wrap span {
        display: block;
        width: 100%;
        height: 2px;
        background-color: currentColor;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    /* Mobile Minimal Dropdown Menu */
    .mobile-dropdown-menu {
        display: none;
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        width: 240px;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: 12px;
        box-shadow: 0 15px 35px rgba(0, 43, 94, 0.15);
        flex-direction: column;
        gap: 8px;
        z-index: 1001;
        opacity: 0;
        transform: translateY(-8px);
        pointer-events: none;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .mobile-dropdown-menu.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .mobile-menu-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 11px 16px;
        background: #f8fafc;
        border: 1px solid #f1f5f9;
        border-radius: 12px;
        color: var(--color-primary) !important;
        font-family: var(--font-heading);
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        width: 100%;
        box-sizing: border-box;
        text-align: left;
        transition: all 0.2s ease;
    }

    .mobile-menu-item:hover,
    .mobile-menu-item:active {
        background: #002b5e;
        color: #ffffff !important;
        border-color: #002b5e;
    }

    .mobile-menu-item.cta-item {
        background: #002b5e;
        color: #ffffff !important;
        border-color: #002b5e;
        margin-top: 4px;
    }

    .mobile-menu-item.cta-item:hover,
    .mobile-menu-item.cta-item:active {
        background: #68BD46;
        color: #002b5e !important;
        border-color: #68BD46;
    }

    .mobile-menu-item.cta-item .cta-mini-icon {
        background: #68BD46;
        color: #002b5e;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
    }

    @media (max-width: 991px) {
        .custom-header {
            padding: 14px 20px;
        }
        .header-logo-img {
            height: 38px;
        }
        .nav-direct-links {
            display: none;
        }
        .cta-capsule {
            display: none;
        }
        .mobile-hamburger-btn {
            display: inline-flex;
        }
        .mobile-dropdown-menu {
            display: flex;
        }
    }

    @media (max-width: 480px) {
        .custom-header {
            padding: 10px 14px;
        }
        .header-logo-img {
            height: 32px;
        }
        .header-inner {
            padding: 6px 14px;
        }
        .mobile-dropdown-menu {
            right: 0;
            width: calc(100vw - 28px);
            max-width: 260px;
        }
    }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Navigation Component -->
<header class="custom-header">
    <div class="header-inner">
        <!-- Logo -->
        <div class="header-left">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="summit-logo">
                <img 
                    src="https://lightcoral-shark-376863.hostingersite.com/wp-content/uploads/2026/09/Ed-Tech-Cybersecurity-Logo.svg" 
                    alt="Ed-Tech Cybersecurity" 
                    class="header-logo-img"
                >
            </a>
            
            <!-- Desktop Navigation: Agenda and Gallery -->
            <div class="nav-direct-links">
                <a href="<?php echo esc_url(home_url('/#scheduleSection')); ?>" class="nav-pill-link" id="menuAgendaLink">Agenda</a>
                <button type="button" class="nav-pill-link" id="galleryBtn">Gallery</button>
            </div>
        </div>

        <!-- Desktop Action & Mobile Trigger -->
        <div class="header-right">
            <!-- Desktop CTA -->
            <a href="<?php echo esc_url(home_url('/register')); ?>" class="cta-capsule">
                <span class="cta-icon-circle"><i class="fas fa-shield-halved"></i></span>
                <span class="cta-text">Register Event</span>
            </a>

            <!-- Mobile Hamburger Button -->
            <button type="button" class="mobile-hamburger-btn" id="mobileMenuBtn" aria-label="Toggle menu" aria-expanded="false">
                <div class="hamburger-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span>Menu</span>
            </button>

            <!-- Mobile Dropdown Menu: Exactly the 3 Desktop Items -->
            <div class="mobile-dropdown-menu" id="mobileDropdownMenu">
                <a href="<?php echo esc_url(home_url('/#scheduleSection')); ?>" class="mobile-menu-item" id="mobileAgendaLink">
                    <span>Agenda</span>
                    <i class="fas fa-arrow-right" style="font-size: 11px; opacity: 0.7;"></i>
                </a>
                <button type="button" class="mobile-menu-item" id="mobileGalleryBtn">
                    <span>Gallery</span>
                    <i class="fas fa-images" style="font-size: 12px; color: var(--color-secondary);"></i>
                </button>
                <a href="<?php echo esc_url(home_url('/register')); ?>" class="mobile-menu-item cta-item">
                    <span>Register Event</span>
                    <span class="cta-mini-icon"><i class="fas fa-shield-halved"></i></span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Navigation Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileDropdownMenu');
    const mobileGallery = document.getElementById('mobileGalleryBtn');
    const mobileAgenda = document.getElementById('mobileAgendaLink');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            const isOpen = mobileMenu.classList.toggle('active');
            mobileBtn.setAttribute('aria-expanded', isOpen);
        });

        document.addEventListener('click', function (e) {
            if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
                mobileMenu.classList.remove('active');
                mobileBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Handle Mobile Agenda click
    if (mobileAgenda && mobileMenu) {
        mobileAgenda.addEventListener('click', function (e) {
            mobileMenu.classList.remove('active');
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

    // Trigger Gallery popup from mobile menu
    if (mobileGallery && mobileMenu) {
        mobileGallery.addEventListener('click', function (e) {
            e.preventDefault();
            mobileMenu.classList.remove('active');
            const desktopGalleryBtn = document.getElementById('galleryBtn');
            if (desktopGalleryBtn) {
                desktopGalleryBtn.click();
            } else {
                const galleryModal = document.getElementById('galleryModal');
                const galleryBackdrop = document.getElementById('galleryModalBackdrop');
                if (galleryModal && galleryBackdrop) {
                    galleryModal.classList.add('active');
                    galleryBackdrop.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            }
        });
    }
});
</script>
