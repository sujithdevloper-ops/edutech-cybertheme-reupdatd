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

    // Warp Section Request Invitation CTA trigger
    const warpRequestBtn = document.getElementById('warpRequestBtn');
    if (warpRequestBtn) {
        warpRequestBtn.addEventListener('click', () => {
            const reqBtn = document.getElementById('requestInvitationBtn');
            if (reqBtn) reqBtn.click();
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
                    scheduleModalOverlay.classList.add('active');
                    scheduleModalOverlay.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden'; // Lock background scroll
                }
            });
        });
    }

    // Modal Close Function
    function closeScheduleModal() {
        if (scheduleModalOverlay) {
            scheduleModalOverlay.classList.remove('active');
            scheduleModalOverlay.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = ''; // Restore background scroll
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

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && scheduleModalOverlay && scheduleModalOverlay.classList.contains('active')) {
            closeScheduleModal();
        }
    });

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


