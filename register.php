<?php
/**
 * Template Name: Register Page
 * Description: Registration Portal for Ed-Tech Cybersecurity Symposium & Awards 2026
 * 
 * @package EdTech_2026
 */

$form_submitted = false;
$error_message  = '';
$ref_id         = '';

// Handle Form Submission (Zero Plugins Needed)
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_summit_registration'] ) ) {
    
    // Security Nonce Verification
    if ( ! isset( $_POST['summit_reg_nonce'] ) || ! wp_verify_nonce( $_POST['summit_reg_nonce'], 'summit_reg_action' ) ) {
        $error_message = 'Security validation failed. Please refresh and try again.';
    } else {
        // Collect & Sanitize Inputs
        $org_name = sanitize_text_field( $_POST['org_name'] ?? '' );
        $country  = sanitize_text_field( $_POST['country'] ?? '' );

        // If user selected "Other", use the custom typed country
        if ( $country === 'Other' && ! empty( $_POST['custom_country'] ) ) {
            $country = sanitize_text_field( $_POST['custom_country'] );
        }

        // Delegate 1 — Primary Contact
        $guest1_name  = sanitize_text_field( $_POST['guest1_name'] ?? '' );
        $guest1_email = sanitize_email( $_POST['guest1_email'] ?? '' );
        $guest1_phone = sanitize_text_field( $_POST['guest1_phone'] ?? '' );
        $guest1_title = sanitize_text_field( $_POST['guest1_title'] ?? '' );

        // Additional Delegates
        $additional_guests = array();
        if ( isset( $_POST['add_guests_toggle'] ) && $_POST['add_guests_toggle'] === 'yes' ) {
            if ( ! empty( $_POST['guests'] ) && is_array( $_POST['guests'] ) ) {
                if ( count( $_POST['guests'] ) > 10 ) {
                    $error_message = 'Maximum 10 additional delegates are allowed.';
                } else {
                    foreach ( $_POST['guests'] as $guest ) {
                        if ( ! is_array( $guest ) ) continue;

                        $g_name  = sanitize_text_field( $guest['name'] ?? '' );
                        $g_email = sanitize_email( $guest['email'] ?? '' );
                        $g_phone = sanitize_text_field( $guest['phone'] ?? '' );
                        $g_title = sanitize_text_field( $guest['title'] ?? '' );
                        $g_org   = sanitize_text_field( $guest['org'] ?? '' );

                        if ( ! empty( $g_name ) ) {
                            if ( ! empty( $g_email ) && ! is_email( $g_email ) ) {
                                $error_message = 'One of the additional delegate email addresses is invalid.';
                                break;
                            }

                            $additional_guests[] = array(
                                'name'  => $g_name,
                                'email' => $g_email,
                                'phone' => $g_phone,
                                'title' => $g_title,
                                'org'   => ! empty( $g_org ) ? $g_org : $org_name,
                            );
                        }
                    }
                }
            }
        }

        if ( empty( $error_message ) ) {
            $total_delegates = 1 + count( $additional_guests );
            $ref_id = 'ETC-2026-' . strtoupper( wp_generate_password( 8, false, false ) );

            // Compile complete delegates list (Primary + Additional)
            $all_delegates = array();
            $all_delegates[] = array(
                'delegate_num' => 1,
                'is_primary'   => true,
                'name'         => $guest1_name,
                'email'        => $guest1_email,
                'phone'        => $guest1_phone,
                'title'        => $guest1_title,
                'org'          => $org_name,
                'country'      => $country,
            );
            foreach ( $additional_guests as $idx => $g ) {
                $all_delegates[] = array(
                    'delegate_num' => $idx + 2,
                    'is_primary'   => false,
                    'name'         => $g['name'],
                    'email'        => $g['email'],
                    'phone'        => $g['phone'],
                    'title'        => $g['title'],
                    'org'          => $g['org'],
                    'country'      => $country,
                );
            }

            // Save to WordPress Database (Custom Post Type 'summit_registration' with private status)
            $post_id = wp_insert_post( array(
                'post_title'  => $org_name . ' (' . $guest1_name . ') - ' . $ref_id,
                'post_type'   => 'summit_registration',
                'post_status' => 'private',
            ) );

            if ( $post_id && ! is_wp_error( $post_id ) ) {
                // Preserved metadata keys
                update_post_meta( $post_id, '_ref_id', $ref_id );
                update_post_meta( $post_id, '_org_name', $org_name );
                update_post_meta( $post_id, '_country', $country );
                update_post_meta( $post_id, '_guest1_name', $guest1_name );
                update_post_meta( $post_id, '_guest1_email', $guest1_email );
                update_post_meta( $post_id, '_guest1_phone', $guest1_phone );
                update_post_meta( $post_id, '_guest1_title', $guest1_title );
                update_post_meta( $post_id, '_total_delegates', $total_delegates );
                update_post_meta( $post_id, '_additional_guests', $additional_guests );
                // Distinct per-delegate entity metadata
                update_post_meta( $post_id, '_all_delegates', $all_delegates );

                // Save individual delegate email meta for fast search indexing
                foreach ( $all_delegates as $del ) {
                    if ( ! empty( $del['email'] ) ) {
                        add_post_meta( $post_id, '_delegate_email', strtolower( $del['email'] ) );
                    }
                }

                // Email Notification via wp_mail()
                $admin_email = 'janani@guardianone.com';
                $subject     = "Summit Registration: [{$ref_id}] {$org_name}";
                
                $body  = "<h2>Ed-Tech Cybersecurity Symposium &amp; Awards 2026</h2>";
                $body .= "<p><strong>Reference ID:</strong> " . esc_html( $ref_id ) . "</p>";
                $body .= "<p><strong>Organisation:</strong> " . esc_html( $org_name ) . "</p>";
                $body .= "<p><strong>Country:</strong> " . esc_html( $country ) . "</p>";
                $body .= "<p><strong>Total Registered Delegates:</strong> " . absint( $total_delegates ) . "</p>";
                $body .= "<hr>";
                $body .= "<h3>Delegate 1 — Primary Contact</h3>";
                $body .= "<p><strong>Full Name:</strong> " . esc_html( $guest1_name ) . "</p>";
                $body .= "<p><strong>Organisation:</strong> " . esc_html( $org_name ) . "</p>";
                $body .= "<p><strong>Official Email:</strong> " . esc_html( $guest1_email ) . "</p>";
                $body .= "<p><strong>Mobile Number:</strong> " . esc_html( $guest1_phone ) . "</p>";
                $body .= "<p><strong>Job Title / Designation:</strong> " . esc_html( $guest1_title ) . "</p>";

                if ( ! empty( $additional_guests ) ) {
                    $body .= "<hr><h3>Additional Delegates:</h3>";
                    foreach ( $additional_guests as $idx => $g ) {
                        $num = $idx + 2;
                        $body .= "<p><strong>Delegate " . absint( $num ) . ":</strong> " . esc_html( $g['name'] ) . " (" . esc_html( $g['title'] ) . ")<br>";
                        $body .= "<strong>Organisation:</strong> " . esc_html( $g['org'] ) . "<br>";
                        $body .= "<strong>Email:</strong> " . esc_html( $g['email'] ) . " | <strong>Mobile:</strong> " . esc_html( $g['phone'] ) . "</p>";
                    }
                }

                $headers = array(
                    'Content-Type: text/html; charset=UTF-8',
                    'Reply-To: ' . $guest1_name . ' <' . $guest1_email . '>',
                );

                wp_mail( array( $admin_email, $guest1_email ), $subject, $body, $headers );

                $form_submitted = true;
            } else {
                $error_message = 'Database recording error. Please try again.';
            }
        }
    }
}

get_header();
$theme_uri = get_template_directory_uri();
?>

<!-- Embedded CSS for Registration Portal Layout -->
<style>
    :root {
        --color-primary: #002b5e;
        --color-secondary: #68BD46;
        --color-bg-primary: #f4f6f9;
        --color-text-main: #002b5e;
        --color-text-muted: #64748b;
        --color-border: #e2e8f0;
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Inter', sans-serif;
        --radius-sm: 10px;
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-full: 9999px;
    }

    body {
        background-color: var(--color-bg-primary);
        font-family: var(--font-body);
        color: var(--color-text-main);
        margin: 0;
        padding: 0;
    }

    /* 1. Hero Banner: Ample height and padding to prevent any pill clipping */
    .reg-hero-banner {
        position: relative;
        min-height: 480px;
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: flex-end;
        padding: 130px 40px 75px 40px;
        box-sizing: border-box;
        background-color: #02050a;
    }

    .reg-hero-banner .hero-video-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .reg-hero-banner .hero-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .hero-video-overlay-gradient {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 18, 42, 0.45) 0%, rgba(0, 18, 42, 0.2) 50%, rgba(0, 18, 42, 0.7) 85%, #f4f6f9 100%);
        z-index: 1;
        pointer-events: none;
    }

    .reg-hero-banner-content {
        position: relative;
        z-index: 5;
        width: 100%;
        max-width: 1220px;
        margin: 0 auto 25px auto;
        display: flex;
        justify-content: flex-end;
    }

    .hero-glass-details-right {
        position: relative;
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .hero-glass-detail-item {
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: var(--radius-full);
        padding: 8px 22px 8px 10px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
    }

    .detail-icon-wrap {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
    }

    .green-icon { background: rgba(104, 189, 70, 0.15); color: #2e6e14; }
    .gold-icon { background: rgba(234, 179, 8, 0.15); color: #b45309; }

    .detail-text-wrap { display: flex; flex-direction: column; }
    .detail-label { font-size: 0.68rem; font-weight: 800; color: var(--color-text-muted); text-transform: uppercase; letter-spacing: 0.06em; }
    .detail-val { font-size: 0.88rem; font-weight: 800; color: var(--color-primary); }
    .venue-sub { font-weight: 500; color: var(--color-text-muted); font-size: 0.8rem; }

    /* 2. Main Body Wrapper */
    .reg-body-wrapper {
        background-color: var(--color-bg-primary);
        padding: 0 20px 90px;
        position: relative;
        z-index: 10;
        margin-top: -35px;
    }

    .reg-content-container {
        max-width: 1220px;
        margin: 0 auto;
    }

    /* 3. Unified Form Sheet */
    .unified-form-sheet {
        background: #ffffff;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        box-shadow: 0 15px 45px rgba(0, 43, 94, 0.08);
        position: relative;
        overflow: hidden;
    }

    .unified-form-sheet::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-secondary) 100%);
        z-index: 2;
    }

    .sheet-header-block {
        padding: 38px 44px 28px;
        border-bottom: 1px solid var(--color-border);
        background: #ffffff;
    }

    .sheet-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(104, 189, 70, 0.12);
        color: #2e6e14;
        border: 1px solid rgba(104, 189, 70, 0.35);
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: var(--radius-full);
        margin-bottom: 12px;
    }

    .sheet-title {
        font-family: var(--font-heading);
        font-size: clamp(1.6rem, 3.2vw, 2.2rem);
        font-weight: 800;
        color: var(--color-primary);
        line-height: 1.25;
        margin: 0 0 6px 0;
        letter-spacing: -0.02em;
    }

    .sheet-subtitle {
        font-family: var(--font-heading);
        font-size: 1.12rem;
        font-weight: 700;
        color: var(--color-secondary);
        margin: 0;
    }

    .sheet-2col-layout {
        display: grid;
        grid-template-columns: 1.45fr 1fr;
        gap: 0;
        align-items: stretch;
    }

    .sheet-form-column {
        padding: 40px 44px;
        border-right: 1px solid var(--color-border);
        background: #ffffff;
    }

    .sheet-sidebar-column {
        padding: 40px 36px;
        background: #f8fafc;
        position: relative;
    }

    /* Form Section Dividers & Fields */
    .form-section-divider { margin-bottom: 32px; }
    .section-heading-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 1.5px solid #f1f5f9;
    }

    .section-heading-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--font-heading);
        font-size: 1.12rem;
        font-weight: 800;
        color: var(--color-primary);
    }
    .section-heading-title i { color: var(--color-secondary); font-size: 1.05rem; }

    .tag-pill {
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: var(--radius-full);
    }
    .tag-required { background: #fee2e2; color: #dc2626; border: 1px solid #fca5a5; }
    .tag-optional { background: #f1f5f9; color: #64748b; border: 1px solid #e2e8f0; }

    .form-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-label { font-size: 0.88rem; font-weight: 700; color: var(--color-primary); display: flex; align-items: center; gap: 4px; }
    .form-label .req { color: #dc2626; font-weight: 800; }
    .input-wrapper { position: relative; }
    .input-wrapper i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.92rem; pointer-events: none; }
    
    .form-control {
        width: 100%;
        padding: 13px 16px 13px 42px;
        background: #f8fafc;
        border: 1.5px solid #dbe2ea;
        border-radius: var(--radius-sm);
        color: var(--color-primary);
        font-size: 0.94rem;
        font-family: var(--font-body);
        font-weight: 500;
        transition: all 0.25s ease;
        outline: none;
        box-sizing: border-box;
    }
    .form-control:focus { border-color: var(--color-secondary); background: #ffffff; box-shadow: 0 0 0 4px rgba(104, 189, 70, 0.18); }

    /* Email Duplicate Notice & Prefill Pulse */
    .email-status-spinner {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--color-secondary);
        font-size: 0.95rem;
        display: none;
    }
    .email-registered-banner {
        display: none;
        margin-top: 8px;
        padding: 10px 14px;
        background: #f0fdf4;
        border: 1px solid #86efac;
        border-radius: var(--radius-sm);
        color: #166534;
        font-size: 0.84rem;
        line-height: 1.45;
        animation: bannerSlideIn 0.3s ease;
    }
    .email-registered-banner.show {
        display: flex;
        align-items: flex-start;
        gap: 8px;
    }
    .email-registered-banner i {
        color: #16a34a;
        font-size: 1rem;
        margin-top: 2px;
        flex-shrink: 0;
    }
    .field-prefill-glow {
        animation: prefillPulseAnim 1.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    @keyframes prefillPulseAnim {
        0% { background-color: rgba(104, 189, 70, 0.28); border-color: var(--color-secondary); box-shadow: 0 0 0 4px rgba(104, 189, 70, 0.25); }
        60% { background-color: rgba(104, 189, 70, 0.12); border-color: var(--color-secondary); }
        100% { background-color: #f8fafc; border-color: #dbe2ea; box-shadow: none; }
    }
    @keyframes bannerSlideIn {
        from { opacity: 0; transform: translateY(-4px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Additional Guests Prompt Strip */
    .guests-prompt-strip {
        background: #f1f8ee;
        border: 1px dashed rgba(104, 189, 70, 0.5);
        border-radius: var(--radius-md);
        padding: 16px 20px;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
    }

    .guests-prompt-left { display: flex; align-items: center; gap: 10px; color: #2e6e14; font-size: 0.92rem; font-weight: 700; }
    .guests-prompt-left i { font-size: 1.15rem; color: var(--color-secondary); }

    .guests-toggle-group {
        display: inline-flex;
        background: #ffffff;
        border: 1px solid rgba(104, 189, 70, 0.35);
        border-radius: var(--radius-full);
        padding: 3px;
        gap: 4px;
    }

    .toggle-option { cursor: pointer; position: relative; }
    .toggle-option input { position: absolute; opacity: 0; cursor: pointer; }
    .toggle-pill { display: block; padding: 6px 18px; font-size: 0.85rem; font-weight: 700; color: var(--color-text-muted); border-radius: var(--radius-full); transition: all 0.2s ease; }
    .toggle-option input:checked + .toggle-pill { background: var(--color-secondary); color: #002b5e; }

    /* Hidden by default since toggle is 'no' */
    #additionalGuestsWrapper {
        display: none;
    }

    .guest-item-card {
        background: #f8fafc;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-md);
        padding: 20px;
        margin-bottom: 16px;
    }

    .guest-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
        padding-bottom: 8px;
        border-bottom: 1px solid #e2e8f0;
    }

    .guest-card-title { display: flex; align-items: center; gap: 8px; font-family: var(--font-heading); font-weight: 700; color: var(--color-primary); font-size: 0.98rem; }
    .guest-remove-btn {
        background: #fee2e2;
        border: 1px solid #fca5a5;
        color: #dc2626;
        font-size: 0.78rem;
        font-weight: 700;
        cursor: pointer;
        padding: 4px 10px;
        border-radius: var(--radius-sm);
    }

    .btn-add-guest-dashed {
        width: 100%;
        padding: 13px;
        background: #ffffff;
        border: 2px dashed #cbd5e1;
        border-radius: var(--radius-md);
        color: var(--color-primary);
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 0.92rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.2s ease;
    }
    .btn-add-guest-dashed:hover { border-color: var(--color-secondary); color: var(--color-secondary); background: #f8fafc; }

    /* Submit Button & Compliance Notice */
    .btn-submit-registration {
        width: 100%;
        padding: 17px 32px;
        background: linear-gradient(135deg, var(--color-primary) 0%, #001f44 100%);
        color: #ffffff;
        border: none;
        border-radius: var(--radius-full);
        font-family: var(--font-heading);
        font-size: 1.05rem;
        font-weight: 800;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 8px 24px rgba(0, 43, 94, 0.25);
        transition: all 0.3s ease;
    }
    .btn-submit-registration:hover { background: var(--color-secondary); color: #002b5e; transform: translateY(-2px); box-shadow: 0 12px 28px rgba(104, 189, 70, 0.4); }

    .compliance-footer-note {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 0.82rem;
        color: var(--color-text-muted);
        margin-top: 16px;
        text-align: center;
    }
    .compliance-footer-note i { color: var(--color-secondary); }

    /* Sidebar Guidelines */
    .sidebar-sticky-box {
        position: -webkit-sticky;
        position: sticky;
        top: 100px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .guidelines-side-card {
        background: #ffffff;
        border: 1px solid var(--color-border);
        border-left: 4px solid var(--color-secondary);
        border-radius: var(--radius-md);
        padding: 26px 28px;
        box-shadow: 0 2px 10px rgba(0, 43, 94, 0.04);
    }

    .guidelines-side-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--font-heading);
        font-size: 1.08rem;
        font-weight: 800;
        color: var(--color-primary);
        margin: 0 0 16px 0;
        padding-bottom: 12px;
        border-bottom: 1px solid #f1f5f9;
    }
    .guidelines-side-title i { color: var(--color-secondary); font-size: 1.15rem; }

    .guidelines-side-list {
        list-style: none;
        padding: 0;
        margin: 0 0 18px 0;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }
    .guidelines-side-list li { position: relative; padding-left: 20px; color: var(--color-text-muted); font-size: 0.92rem; line-height: 1.55; }
    .guidelines-side-list li::before { content: "•"; position: absolute; left: 4px; color: var(--color-secondary); font-weight: 800; font-size: 1.25rem; line-height: 1; }

    .guidelines-side-closing {
        font-size: 0.9rem;
        font-weight: 600;
        color: #2e6e14;
        margin: 0;
        padding-top: 12px;
        border-top: 1px dashed #e2e8f0;
        line-height: 1.5;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .event-side-info-card {
        background: #ffffff;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-md);
        padding: 22px 26px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .side-info-row { display: flex; align-items: center; gap: 12px; }
    .side-info-icon {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(0, 43, 94, 0.06);
        color: var(--color-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }
    .side-info-text { display: flex; flex-direction: column; }
    .side-info-label { font-size: 0.74rem; font-weight: 700; text-transform: uppercase; color: var(--color-text-muted); }
    .side-info-val { font-size: 0.92rem; font-weight: 700; color: var(--color-primary); }

    /* Success Confirmation Box */
    .registration-success-state {
        background: #ffffff;
        border-radius: var(--radius-lg);
        border: 1.5px solid var(--color-secondary);
        padding: 60px 40px;
        text-align: center;
        box-shadow: 0 15px 45px rgba(0, 43, 94, 0.08);
    }
    .success-icon-badge {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(104, 189, 70, 0.12);
        color: var(--color-secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 38px;
        margin: 0 auto 24px;
    }
    .success-title { font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 10px; }
    .success-desc { color: var(--color-text-muted); font-size: 1rem; max-width: 580px; margin: 0 auto 26px; line-height: 1.6; }
    .success-summary-box { background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 22px 26px; max-width: 540px; margin: 0 auto 28px; text-align: left; }
    .summary-row { display: flex; justify-content: space-between; padding: 9px 0; border-bottom: 1px solid var(--color-border); font-size: 0.92rem; }
    .summary-row:last-child { border-bottom: none; }
    .summary-row .label { color: var(--color-text-muted); font-weight: 500; }
    .summary-row .val { color: var(--color-primary); font-weight: 700; }
    .btn-return-home { display: inline-flex; align-items: center; gap: 8px; padding: 13px 28px; background: var(--color-primary); color: #ffffff; font-family: var(--font-heading); font-weight: 700; border-radius: var(--radius-full); text-decoration: none; }

    @media (max-width: 991px) {
        .sheet-2col-layout { grid-template-columns: 1fr; }
        .sheet-form-column { border-right: none; border-bottom: 1px solid var(--color-border); padding: 28px 20px; }
        .sheet-sidebar-column { padding: 28px 20px; }
        .form-grid-2 { grid-template-columns: 1fr; }
        .reg-hero-banner { padding: 100px 20px 60px; min-height: 380px; }
        .sheet-header-block { padding: 28px 20px 20px; }
    }
</style>

<!-- 1. Registration Hero Banner -->
<div class="reg-hero-banner">
    <div class="hero-video-wrapper">
        <img src="<?php echo esc_url( file_exists( get_template_directory() . '/images/Option 8.jpg.jpeg' ) ? $theme_uri . '/images/Option 8.jpg.jpeg' : '/wp-content/uploads/2026/09/Option-8.jpg-1-scaled.jpeg' ); ?>" alt="Ed-Tech Cybersecurity Summit 2026" class="hero-bg-img">
        <div class="hero-video-overlay-gradient"></div>
    </div>
    <div class="reg-hero-banner-content">
        <div class="hero-glass-details-right">
            <div class="hero-glass-detail-item date-highlight-capsule">
                <div class="detail-icon-wrap green-icon"><i class="fas fa-calendar-days"></i></div>
                <div class="detail-text-wrap">
                    <span class="detail-label">EVENT DATE</span>
                    <span class="detail-val">30 October 2026</span>
                </div>
            </div>
            <div class="hero-glass-detail-item location-highlight-capsule">
                <div class="detail-icon-wrap gold-icon"><i class="fas fa-location-dot"></i></div>
                <div class="detail-text-wrap">
                    <span class="detail-label">LOCATION &amp; VENUE</span>
                    <span class="detail-val">Dubai <span class="venue-sub">| SHANGRI-LA DUBAI, UAE</span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2. Form & Guidelines Main Sheet -->
<main class="reg-body-wrapper">
    <div class="reg-content-container">
        
        <?php if ( $form_submitted ) : ?>
            <!-- Confirmation Success Screen -->
            <section class="registration-success-state" id="successState">
                <div class="success-icon-badge"><i class="fas fa-circle-check"></i></div>
                <h2 class="success-title">Registration Confirmed!</h2>
                <p class="success-desc">Our team will review your submission and share confirmation details with you shortly.</p>
                <div class="success-summary-box">
                    <div class="summary-row"><span class="label">Reference ID</span><span class="val"><?php echo esc_html( $ref_id ); ?></span></div>
                    <div class="summary-row"><span class="label">Organisation</span><span class="val"><?php echo esc_html( $org_name ); ?></span></div>
                    <div class="summary-row"><span class="label">Country</span><span class="val"><?php echo esc_html( $country ); ?></span></div>
                    <div class="summary-row"><span class="label">Primary Contact</span><span class="val"><?php echo esc_html( $guest1_name ); ?></span></div>
                    <div class="summary-row"><span class="label">Official Email</span><span class="val"><?php echo esc_html( $guest1_email ); ?></span></div>
                    <div class="summary-row"><span class="label">Total Delegates</span><span class="val"><?php echo esc_html( $total_delegates ); ?> registered</span></div>
                </div>
                <div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-return-home"><i class="fas fa-house"></i> Return to Summit Home</a></div>
            </section>

        <?php else : ?>
            <!-- Main Form Card -->
            <div class="unified-form-sheet" id="mainFormContainer">
                
                <!-- Header Block -->
                <div class="sheet-header-block">
                    <span class="sheet-badge"><i class="fas fa-shield-halved"></i> EVENT REGISTRATION</span>
                    <h1 class="sheet-title">Ed-Tech Cybersecurity Symposium &amp; Awards 2026</h1>
                    <p class="sheet-subtitle">Welcome to the Registration Portal</p>
                </div>

                <!-- 2-Column Layout -->
                <div class="sheet-2col-layout">
                    
                    <!-- Form Column -->
                    <div class="sheet-form-column">
                        <?php if ( ! empty( $error_message ) ) : ?>
                            <div style="background: #fee2e2; border: 1px solid #fca5a5; color: #dc2626; padding: 12px 18px; border-radius: 12px; margin-bottom: 24px; font-weight: 600;">
                                <?php echo esc_html( $error_message ); ?>
                            </div>
                        <?php endif; ?>

                        <form id="eventRegistrationForm" method="POST" action="" novalidate>
                            <?php wp_nonce_field( 'summit_reg_action', 'summit_reg_nonce' ); ?>

                            <!-- 1. Organisation Details (2 in a Line: Org Name & Country) -->
                            <div class="form-section-divider">
                                <div class="section-heading-row">
                                    <div class="section-heading-title">
                                        <i class="fas fa-building-columns"></i>
                                        <span>Organisation Details</span>
                                    </div>
                                    <span class="tag-pill tag-required">Required</span>
                                </div>

                                <div class="form-grid-2">
                                    <div class="form-group">
                                        <label class="form-label" for="orgName">Organisation / Institution Name <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="text" id="orgName" name="org_name" class="form-control" required>
                                            <i class="fas fa-building"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="orgCountry">Country <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <select id="orgCountry" name="country" class="form-control" required>
                                                <option value="" disabled selected>Select Country</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="India">India</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <i class="fas fa-globe"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dynamic Custom Country Field when "Other" is selected -->
                                <div class="form-group" id="customCountryGroup" style="display: none; margin-top: 14px;">
                                    <label class="form-label" for="customCountry">Please Specify Country <span class="req">*</span></label>
                                    <div class="input-wrapper">
                                        <input type="text" id="customCountry" name="custom_country" class="form-control">
                                        <i class="fas fa-earth-americas"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Delegate 1 — Primary Contact -->
                            <div class="form-section-divider">
                                <div class="section-heading-row">
                                    <div class="section-heading-title">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Delegate 1 — Primary Contact</span>
                                    </div>
                                    <span class="tag-pill tag-required">Primary Delegate *</span>
                                </div>

                                <div class="form-grid-2">
                                    <div class="form-group">
                                        <label class="form-label" for="guest1_name">Full Name <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="text" id="guest1_name" name="guest1_name" class="form-control" required>
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="guest1_email">Official Email Address <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="email" id="guest1_email" name="guest1_email" class="form-control" required autocomplete="email">
                                            <i class="fas fa-envelope"></i>
                                            <span class="email-status-spinner" id="emailCheckSpinner"><i class="fas fa-circle-notch fa-spin"></i></span>
                                        </div>
                                        <div id="emailRegisteredBanner" class="email-registered-banner">
                                            <i class="fas fa-circle-check"></i>
                                            <div class="email-banner-content">
                                                <strong>Email already registered:</strong> <span id="emailBannerRef"></span> Details have been automatically prefilled below.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="guest1_phone">Mobile Number <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="tel" id="guest1_phone" name="guest1_phone" class="form-control" required>
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="guest1_title">Job Title / Designation <span class="req">*</span></label>
                                        <div class="input-wrapper">
                                            <input type="text" id="guest1_title" name="guest1_title" class="form-control" required>
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Additional Delegates -->
                            <div class="form-section-divider">
                                <div class="section-heading-row">
                                    <div class="section-heading-title">
                                        <i class="fas fa-users-gear"></i>
                                        <span>Additional Delegates</span>
                                    </div>
                                    <span class="tag-pill tag-optional">Optional</span>
                                </div>

                                <div class="guests-prompt-strip">
                                    <div class="guests-prompt-left">
                                        <i class="fas fa-user-group"></i>
                                        <span>Would you like to register additional delegates?</span>
                                    </div>
                                    <div class="guests-toggle-group">
                                        <label class="toggle-option">
                                            <input type="radio" name="add_guests_toggle" id="addGuestsYes" value="yes">
                                            <span class="toggle-pill">Yes</span>
                                        </label>
                                        <label class="toggle-option">
                                            <input type="radio" name="add_guests_toggle" id="addGuestsNo" value="no" checked>
                                            <span class="toggle-pill">No</span>
                                        </label>
                                    </div>
                                </div>

                                <div id="additionalGuestsWrapper">
                                    <div id="additionalGuestsContainer">
                                        <!-- Delegate 2 -->
                                        <div class="guest-item-card" id="guestCard2">
                                            <div class="guest-card-top">
                                                <div class="guest-card-title"><i class="fas fa-user-plus" style="color: var(--color-secondary);"></i><span>Delegate 2</span></div>
                                                <button type="button" class="guest-remove-btn" onclick="removeGuestCard('guestCard2')"><i class="fas fa-trash-can"></i> Remove</button>
                                            </div>
                                            <div class="form-grid-2">
                                                <div class="form-group"><label class="form-label">Full Name</label><div class="input-wrapper"><input type="text" name="guests[2][name]" class="form-control"><i class="fas fa-user"></i></div></div>
                                                <div class="form-group">
                                                    <label class="form-label">Official Email Address</label>
                                                    <div class="input-wrapper">
                                                        <input type="email" name="guests[2][email]" class="form-control" autocomplete="email">
                                                        <i class="fas fa-envelope"></i>
                                                        <span class="email-status-spinner"><i class="fas fa-circle-notch fa-spin"></i></span>
                                                    </div>
                                                    <div class="email-registered-banner">
                                                        <i class="fas fa-circle-check"></i>
                                                        <div class="email-banner-content">
                                                            <strong>Delegate already registered:</strong> <span class="email-banner-ref"></span> Details prefilled below.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="form-label">Mobile Number</label><div class="input-wrapper"><input type="tel" name="guests[2][phone]" class="form-control"><i class="fas fa-phone"></i></div></div>
                                                <div class="form-group"><label class="form-label">Job Title / Designation</label><div class="input-wrapper"><input type="text" name="guests[2][title]" class="form-control"><i class="fas fa-briefcase"></i></div></div>
                                                <div class="form-group" style="grid-column: 1 / -1;"><label class="form-label">Organisation / Institution <span style="font-size: 0.8rem; color: #94a3b8; font-weight: 400;">(leave blank if same as primary)</span></label><div class="input-wrapper"><input type="text" name="guests[2][org]" class="form-control"><i class="fas fa-building"></i></div></div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn-add-guest-dashed" id="addGuestBtn">
                                        <i class="fas fa-plus-circle"></i> Add Another Delegate
                                    </button>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div style="margin-top: 36px;">
                                <button type="submit" name="submit_summit_registration" class="btn-submit-registration">
                                    <i class="fas fa-shield-halved"></i>
                                    <span>Submit Registration</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                                <div class="compliance-footer-note">
                                    <i class="fas fa-lock"></i>
                                    <span>Your data is confidential and protected in accordance with event compliance standards.</span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Guidelines Sidebar -->
                    <aside class="sheet-sidebar-column">
                        <div class="sidebar-sticky-box">
                            <div class="guidelines-side-card">
                                <h3 class="guidelines-side-title"><i class="fas fa-circle-info"></i> Registration Guidelines</h3>
                                <ul class="guidelines-side-list">
                                    <li>Please provide accurate details for each delegate attending.</li>
                                    <li>Delegate 1 will serve as the primary contact for the registration.</li>
                                    <li>You may add additional delegates using the delegate registration fields.</li>
                                    <li>Our team will review your submission and share confirmation details with you.</li>
                                </ul>
                                <p class="guidelines-side-closing">
                                    <i class="fas fa-handshake"></i>
                                    <span>We look forward to welcoming you to an engaging and insightful experience.</span>
                                </p>
                            </div>

                            <div class="event-side-info-card">
                                <div class="side-info-row">
                                    <div class="side-info-icon"><i class="fas fa-calendar-days"></i></div>
                                    <div class="side-info-text"><span class="side-info-label">Event Date</span><span class="side-info-val">30 October 2026</span></div>
                                </div>
                                <div class="side-info-row">
                                    <div class="side-info-icon"><i class="fas fa-location-dot"></i></div>
                                    <div class="side-info-text"><span class="side-info-label">Location</span><span class="side-info-val">Dubai, United Arab Emirates</span></div>
                                </div>
                                <div class="side-info-row">
                                    <div class="side-info-icon"><i class="fas fa-trophy"></i></div>
                                    <div class="side-info-text"><span class="side-info-label">Highlights</span><span class="side-info-val">10 Industry Awards &amp; Tech Zone</span></div>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        <?php endif; ?>

    </div>
</main>

<!-- Dynamic Multi-Guest, Live Email Check & Custom Country JS -->
<script>
    const summitAjaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';
    const summitCheckNonce = '<?php echo esc_attr( wp_create_nonce( 'summit_check_email_nonce' ) ); ?>';

    document.addEventListener('DOMContentLoaded', () => {
        // 1. Dynamic "Other" Custom Country Reveal
        const countrySelect = document.getElementById('orgCountry');
        const customCountryGroup = document.getElementById('customCountryGroup');
        const customCountryInput = document.getElementById('customCountry');

        if (countrySelect && customCountryGroup) {
            countrySelect.addEventListener('change', function () {
                if (this.value === 'Other') {
                    customCountryGroup.style.display = 'block';
                    if (customCountryInput) customCountryInput.required = true;
                } else {
                    customCountryGroup.style.display = 'none';
                    if (customCountryInput) {
                        customCountryInput.required = false;
                        customCountryInput.value = '';
                    }
                }
            });
        }

        // Helper: Highlight Prefilled Field with Visual Pulse
        function triggerFieldPulse(el) {
            if (!el) return;
            el.classList.remove('field-prefill-glow');
            void el.offsetWidth; // Force DOM reflow
            el.classList.add('field-prefill-glow');
        }

        // 2. Generic Email Verification & Auto-Prefill Controller (Primary & Delegates)
        function setupEmailAutoLookup(inputEl, contextType, containerEl) {
            if (!inputEl || !containerEl) return;

            const inputWrapper = inputEl.closest('.input-wrapper');
            const spinner = inputWrapper ? inputWrapper.querySelector('.email-status-spinner') : null;
            const banner = containerEl.querySelector('.email-registered-banner');
            const bannerRef = containerEl.querySelector('.email-banner-ref') || containerEl.querySelector('#emailBannerRef');

            let debounceTimer = null;
            let lastChecked = '';

            function performLookup() {
                const emailVal = inputEl.value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailVal || !emailRegex.test(emailVal)) {
                    if (banner) banner.classList.remove('show');
                    if (spinner) spinner.style.display = 'none';
                    return;
                }

                if (emailVal.toLowerCase() === lastChecked.toLowerCase()) {
                    return;
                }

                if (spinner) spinner.style.display = 'block';

                const formData = new FormData();
                formData.append('action', 'check_summit_email');
                formData.append('email', emailVal);
                formData.append('nonce', summitCheckNonce);

                fetch(summitAjaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(res => {
                    if (spinner) spinner.style.display = 'none';
                    lastChecked = emailVal;

                    if (res.success && res.data && res.data.registered) {
                        const data = res.data;

                        if (contextType === 'primary') {
                            const orgInput = document.getElementById('orgName');
                            const g1Name = document.getElementById('guest1_name');
                            const g1Phone = document.getElementById('guest1_phone');
                            const g1Title = document.getElementById('guest1_title');

                            if (data.org_name && orgInput) { orgInput.value = data.org_name; triggerFieldPulse(orgInput); }
                            if (data.name && g1Name) { g1Name.value = data.name; triggerFieldPulse(g1Name); }
                            if (data.phone && g1Phone) { g1Phone.value = data.phone; triggerFieldPulse(g1Phone); }
                            if (data.title && g1Title) { g1Title.value = data.title; triggerFieldPulse(g1Title); }

                            if (data.country && countrySelect) {
                                let found = false;
                                for (let i = 0; i < countrySelect.options.length; i++) {
                                    if (countrySelect.options[i].value.toLowerCase() === data.country.toLowerCase()) {
                                        countrySelect.selectedIndex = i;
                                        found = true;
                                        break;
                                    }
                                }
                                if (!found) {
                                    countrySelect.value = 'Other';
                                    if (customCountryGroup && customCountryInput) {
                                        customCountryGroup.style.display = 'block';
                                        customCountryInput.required = true;
                                        customCountryInput.value = data.country;
                                        triggerFieldPulse(customCountryInput);
                                    }
                                } else if (customCountryGroup) {
                                    customCountryGroup.style.display = 'none';
                                }
                                triggerFieldPulse(countrySelect);
                            }
                        } else if (contextType === 'delegate') {
                            const nameField = containerEl.querySelector('input[name*="[name]"]');
                            const phoneField = containerEl.querySelector('input[name*="[phone]"]');
                            const titleField = containerEl.querySelector('input[name*="[title]"]');
                            const orgField = containerEl.querySelector('input[name*="[org]"]');

                            if (data.name && nameField) { nameField.value = data.name; triggerFieldPulse(nameField); }
                            if (data.phone && phoneField) { phoneField.value = data.phone; triggerFieldPulse(phoneField); }
                            if (data.title && titleField) { titleField.value = data.title; triggerFieldPulse(titleField); }
                            if (data.org_name && orgField && !orgField.value) { orgField.value = data.org_name; triggerFieldPulse(orgField); }
                        }

                        if (banner) {
                            if (bannerRef) bannerRef.textContent = data.ref_id ? `[Ref: ${data.ref_id}]` : '';
                            banner.classList.add('show');
                        }
                    } else {
                        if (banner) banner.classList.remove('show');
                    }
                })
                .catch(err => {
                    if (spinner) spinner.style.display = 'none';
                    console.error('Email verify error:', err);
                });
            }

            inputEl.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(performLookup, 400);
            });
            inputEl.addEventListener('blur', performLookup);
            inputEl.addEventListener('change', performLookup);
        }

        // Initialize Delegate 1 Email Checker
        const guest1EmailInput = document.getElementById('guest1_email');
        const primaryContainer = guest1EmailInput ? guest1EmailInput.closest('.form-section-divider') : null;
        if (guest1EmailInput && primaryContainer) {
            setupEmailAutoLookup(guest1EmailInput, 'primary', primaryContainer);
        }

        // Initialize Delegate 2 Email Checker
        const card2 = document.getElementById('guestCard2');
        if (card2) {
            const email2 = card2.querySelector('input[name="guests[2][email]"]');
            if (email2) setupEmailAutoLookup(email2, 'delegate', card2);
        }

        // 3. Toggle additional guests view (Default: No)
        const addGuestBtn = document.getElementById('addGuestBtn');
        const guestsContainer = document.getElementById('additionalGuestsContainer');
        const guestsWrapper = document.getElementById('additionalGuestsWrapper');
        const addGuestsYes = document.getElementById('addGuestsYes');
        const addGuestsNo = document.getElementById('addGuestsNo');
        
        let guestCount = 2;

        if (addGuestsYes && addGuestsNo && guestsWrapper) {
            addGuestsYes.addEventListener('change', () => { 
                if (addGuestsYes.checked) guestsWrapper.style.display = 'block'; 
            });
            addGuestsNo.addEventListener('change', () => { 
                if (addGuestsNo.checked) guestsWrapper.style.display = 'none'; 
            });
        }

        // 4. Add additional guest card dynamically
        if (addGuestBtn && guestsContainer) {
            addGuestBtn.addEventListener('click', () => {
                guestCount++;
                const newGuestId = guestCount;
                const guestCard = document.createElement('div');
                guestCard.className = 'guest-item-card';
                guestCard.id = `guestCard${newGuestId}`;
                guestCard.innerHTML = `
                    <div class="guest-card-top">
                        <div class="guest-card-title"><i class="fas fa-user-plus" style="color: var(--color-secondary);"></i><span>Delegate ${newGuestId}</span></div>
                        <button type="button" class="guest-remove-btn" onclick="removeGuestCard('guestCard${newGuestId}')"><i class="fas fa-trash-can"></i> Remove</button>
                    </div>
                    <div class="form-grid-2">
                        <div class="form-group"><label class="form-label">Full Name</label><div class="input-wrapper"><input type="text" name="guests[${newGuestId}][name]" class="form-control"><i class="fas fa-user"></i></div></div>
                        <div class="form-group">
                            <label class="form-label">Official Email Address</label>
                            <div class="input-wrapper">
                                <input type="email" name="guests[${newGuestId}][email]" class="form-control" autocomplete="email">
                                <i class="fas fa-envelope"></i>
                                <span class="email-status-spinner"><i class="fas fa-circle-notch fa-spin"></i></span>
                            </div>
                            <div class="email-registered-banner">
                                <i class="fas fa-circle-check"></i>
                                <div class="email-banner-content">
                                    <strong>Delegate already registered:</strong> <span class="email-banner-ref"></span> Details prefilled below.
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="form-label">Mobile Number</label><div class="input-wrapper"><input type="tel" name="guests[${newGuestId}][phone]" class="form-control"><i class="fas fa-phone"></i></div></div>
                        <div class="form-group"><label class="form-label">Job Title / Designation</label><div class="input-wrapper"><input type="text" name="guests[${newGuestId}][title]" class="form-control"><i class="fas fa-briefcase"></i></div></div>
                        <div class="form-group" style="grid-column: 1 / -1;"><label class="form-label">Organisation / Institution <span style="font-size: 0.8rem; color: #94a3b8; font-weight: 400;">(leave blank if same as primary)</span></label><div class="input-wrapper"><input type="text" name="guests[${newGuestId}][org]" class="form-control"><i class="fas fa-building"></i></div></div>
                    </div>`;
                guestsContainer.appendChild(guestCard);

                // Bind live email verification to new delegate card
                const newEmailInput = guestCard.querySelector(`input[name="guests[${newGuestId}][email]"]`);
                if (newEmailInput) {
                    setupEmailAutoLookup(newEmailInput, 'delegate', guestCard);
                }
            });
        }
    });

    function removeGuestCard(cardId) {
        const card = document.getElementById(cardId);
        if (card) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(-8px)';
            setTimeout(() => card.remove(), 250);
        }
    }
</script>

<?php 
get_footer(); 
?>
