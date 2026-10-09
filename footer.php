<!-- Common Footer Component with Embedded Styles & Modals -->
<style>
/* Footer & Contact Section */
.contact-footer-section {
    position: relative;
    background-color: #050b14;
    padding: 120px 40px 80px 40px;
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
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #68BD46;
    margin-bottom: 15px;
    display: inline-block;
}

.contact-title {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 46px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -2px;
    line-height: 1.15;
    margin: 0 0 25px 0;
}

.contact-title span {
    background: linear-gradient(135deg, #ffffff 40%, #68BD46);
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
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
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
    background-color: #68BD46;
    color: #002b5e;
    padding: 16px 36px;
    border-radius: 30px;
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
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

.linkedin-follow-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #cbd5e1;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.linkedin-follow-btn:hover {
    color: #68BD46;
}

@media (max-width: 991px) {
    .contact-footer-section {
        padding: 90px 24px 60px 24px;
    }
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }
    .contact-title {
        font-size: 36px;
    }
}

/* Modals Styling */
.ri-backdrop, .gallery-modal-backdrop {
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
.ri-backdrop.ri-open, .gallery-modal-backdrop.active { opacity: 1; pointer-events: all; }

.ri-modal, .gallery-coming-soon-modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -46%) scale(0.95);
    width: min(600px, 94vw);
    max-height: 90vh;
    overflow-y: auto;
    background: #ffffff;
    border-radius: 24px;
    padding: 44px;
    box-shadow: 0 40px 100px -20px rgba(0,43,94,0.28);
    z-index: 9999;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease, transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-sizing: border-box;
}
.ri-modal.ri-open, .gallery-coming-soon-modal.active {
    opacity: 1;
    pointer-events: all;
    transform: translate(-50%, -50%) scale(1);
}

.ri-close, .gallery-modal-close {
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
.ri-close:hover, .gallery-modal-close:hover { background: rgba(0,43,94,0.08); color: #002b5e; }

.ri-modal-tag, .gallery-modal-tag {
    display: inline-block;
    font-size: 10px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    color: #68BD46;
    border: 1px solid rgba(104,189,70,0.3);
    background: rgba(104,189,70,0.07);
    padding: 4px 14px; border-radius: 30px;
    margin-bottom: 14px;
}

.ri-modal-title, .gallery-modal-title {
    font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
    font-size: 28px; font-weight: 800;
    color: #002b5e; margin: 0 0 8px; line-height: 1.2;
}

.ri-modal-sub, .gallery-modal-text { font-size: 14px; color: #6b7280; margin: 0 0 24px 0; line-height: 1.6; }

.ri-form { display: flex; flex-direction: column; gap: 18px; }
.ri-field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.ri-field { display: flex; flex-direction: column; gap: 6px; }
.ri-label { font-size: 13px; font-weight: 600; color: #374151; }
.ri-req { color: #ef4444; }

.ri-input {
    width: 100%; box-sizing: border-box;
    padding: 12px 16px;
    border: 1.5px solid rgba(0,43,94,0.12);
    border-radius: 12px;
    font-size: 14px; color: #111827; background: #f9fafb;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.ri-input:focus {
    border-color: #68BD46; background: #fff;
    box-shadow: 0 0 0 3px rgba(104,189,70,0.12);
}

.ri-submit, .gallery-modal-btn {
    display: flex; align-items: center; justify-content: center; gap: 10px;
    width: 100%; padding: 15px 28px;
    background: #002b5e;
    color: #fff; border: none; border-radius: 50px;
    font-size: 15px; font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s, background 0.2s;
    box-shadow: 0 8px 24px rgba(0,43,94,0.22);
}
.ri-submit:hover, .gallery-modal-btn:hover { background: #68BD46; transform: translateY(-2px); }

.ri-success {
    display: none; flex-direction: column;
    align-items: center; text-align: center;
    padding: 20px 0 10px; gap: 12px;
}
.ri-success-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(104,189,70,0.1);
    color: #68BD46; display: flex; align-items: center; justify-content: center;
    font-size: 28px;
}
</style>

    <!-- Footer Contact Section -->
    <section class="contact-footer-section" id="contactSection">
        <canvas id="wavingDotCanvas" class="waving-dot-canvas"></canvas>
        <div class="contact-container">
            <div class="contact-grid">
                <div class="contact-left-col">
                    <span class="contact-tag">Stay Connected</span>
                    <h2 class="contact-title">Connect With<br><span>Cybersecurity Leaders</span></h2>
                    <p class="contact-desc">Explore insights, expert perspectives, and real-world strategies shaping the future of cybersecurity in education.</p>
                </div>
                
                <div class="contact-right-col">
                    <span class="contact-tag">Don't Miss What's Next</span>
                    <h3 class="contact-cta-title">Stay ahead. Get in touch with our team and be part of the cybersecurity movement in education.</h3>
                    
                    <div class="contact-actions-wrap">
                        <a href="https://wa.me/971522352059" target="_blank" rel="noopener noreferrer" class="premium-contact-btn">
                            <span>Get in Touch</span>
                            <svg class="contact-btn-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/guardianone/" target="_blank" rel="noopener noreferrer" class="linkedin-follow-btn">
                            <i class="fab fa-linkedin"></i>
                            <span>Follow on LinkedIn for updates</span>
                            <i class="fas fa-arrow-up-right-from-square" style="font-size: 11px; opacity: 0.85;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Request Invitation Modal -->
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

    <!-- Gallery Coming Soon Modal -->
    <div class="gallery-modal-backdrop" id="galleryModalBackdrop"></div>
    <div class="gallery-coming-soon-modal" id="galleryModal" role="dialog" aria-modal="true" aria-labelledby="galleryModalTitle">
        <button class="gallery-modal-close" id="galleryModalClose" aria-label="Close">&times;</button>
        <div class="gallery-modal-icon"><i class="fas fa-images"></i></div>
        <span class="gallery-modal-tag">COMING SOON</span>
        <h3 class="gallery-modal-title" id="galleryModalTitle">Event Gallery</h3>
        <p class="gallery-modal-text">Photos, session recordings, and event highlights from the <strong>Ed-Tech Cybersecurity Symposium &amp; Awards 2026</strong> will be published here after the event.</p>
        <button type="button" class="gallery-modal-btn" id="galleryModalOk">Got it</button>
    </div>

    <!-- External Script Dependencies -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <script src="app.js"></script>

    <script>
    (function () {
        const btn = document.getElementById('requestInvitationBtn');
        const modal = document.getElementById('riModal');
        const backdrop = document.getElementById('riBackdrop');
        const closeBtn = document.getElementById('riClose');
        const form = document.getElementById('riForm');
        const success = document.getElementById('riSuccess');

        function openModal(e) {
            if (btn && btn.getAttribute('href') === 'register.php') return;
            if (e) e.preventDefault();
            if (modal && backdrop) {
                modal.classList.add('ri-open');
                backdrop.classList.add('ri-open');
                document.body.style.overflow = 'hidden';
            }
        }
        function closeModal() {
            if (modal && backdrop) {
                modal.classList.remove('ri-open');
                backdrop.classList.remove('ri-open');
                document.body.style.overflow = '';
                setTimeout(() => {
                    if (form) { form.reset(); form.style.display = ''; }
                    if (success) success.style.display = 'none';
                }, 400);
            }
        }

        closeBtn && closeBtn.addEventListener('click', closeModal);
        backdrop && backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

        form && form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!form.checkValidity()) { form.reportValidity(); return; }
            form.style.display = 'none';
            if (success) success.style.display = 'flex';
        });

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
    <?php wp_footer(); ?>
</body>
</html>
