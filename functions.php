<?php
/**
 * Ed-Tech Cybersecurity Summit 2026 - Theme Functions
 *
 * @package EdTech_2026
 */

// 1. SECURITY: Block Direct Access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 2. Theme Setup
 */
function edtech2026_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );
}
add_action( 'after_setup_theme', 'edtech2026_theme_setup' );

/**
 * 3. Enqueue Styles & Scripts Cleanly
 */
function edtech2026_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' ) ?: '1.0.0';

    // Google Fonts: Inter & Plus Jakarta Sans
    wp_enqueue_style(
        'edtech-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome 6.4.0 Icons
    wp_enqueue_style(
        'edtech-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Odometer Minimal CSS
    wp_enqueue_style(
        'edtech-odometer-css',
        'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css',
        array(),
        '0.4.8'
    );

    // Main Theme Stylesheet (style.css)
    wp_enqueue_style(
        'edtech-main-style',
        get_stylesheet_uri(),
        array( 'edtech-google-fonts', 'edtech-font-awesome' ),
        $theme_version
    );

    // Smooth Scroll Engine (Lenis)
    wp_enqueue_script(
        'edtech-lenis',
        'https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js',
        array(),
        '1.0.33',
        true
    );

    // Odometer JS
    wp_enqueue_script(
        'edtech-odometer-js',
        'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js',
        array(),
        '0.4.8',
        true
    );

    // Main Theme Script (app.js)
    if ( file_exists( get_template_directory() . '/app.js' ) ) {
        wp_enqueue_script(
            'edtech-app-js',
            get_template_directory_uri() . '/app.js',
            array( 'edtech-lenis', 'edtech-odometer-js' ),
            $theme_version,
            true
        );

        wp_localize_script( 'edtech-app-js', 'edtechData', array(
            'siteUrl'  => home_url(),
            'themeUrl' => get_template_directory_uri(),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'edtech2026_enqueue_assets' );

/**
 * 4. Custom Post Type: Event Registrations (summit_registration)
 */
function edtech2026_register_cpt() {
    register_post_type( 'summit_registration', array(
        'labels' => array(
            'name'               => 'Event Registrations',
            'singular_name'      => 'Registration',
            'menu_name'          => 'Registrations',
            'all_items'          => 'All Registrations',
            'view_item'          => 'View Registration',
            'search_items'       => 'Search Registrations',
            'not_found'          => 'No registrations found',
            'not_found_in_trash' => 'No registrations in trash',
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 26,
        'menu_icon'           => 'dashicons-id-alt',
        'supports'            => array( 'title' ),
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
    ) );
}
add_action( 'init', 'edtech2026_register_cpt' );

/**
 * 5. WP-Admin Custom Columns for Registrations
 */
function edtech2026_registration_columns( $columns ) {
    return array(
        'cb'            => '<input type="checkbox" />',
        'title'         => 'Organisation / Primary Contact',
        'ref_id'        => 'Ref ID',
        'contact_email' => 'Email',
        'contact_phone' => 'Phone',
        'country'       => 'Country',
        'delegates'     => 'Total Delegates',
        'date'          => 'Registered Date',
    );
}
add_filter( 'manage_summit_registration_posts_columns', 'edtech2026_registration_columns' );

function edtech2026_registration_custom_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'ref_id':
            echo esc_html( get_post_meta( $post_id, '_ref_id', true ) ?: '—' );
            break;
        case 'contact_email':
            $email = get_post_meta( $post_id, '_guest1_email', true );
            echo $email ? '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>' : '—';
            break;
        case 'contact_phone':
            echo esc_html( get_post_meta( $post_id, '_guest1_phone', true ) ?: '—' );
            break;
        case 'country':
            echo esc_html( get_post_meta( $post_id, '_country', true ) ?: '—' );
            break;
        case 'delegates':
            echo '<span class="badge" style="background:#e0f2fe; color:#0369a1; padding:3px 8px; border-radius:10px; font-weight:700;">' . esc_html( get_post_meta( $post_id, '_total_delegates', true ) ?: '1' ) . ' Delegates</span>';
            break;
    }
}
add_action( 'manage_summit_registration_posts_custom_column', 'edtech2026_registration_custom_column_data', 10, 2 );

/**
 * 6. WP-Admin Meta Box: Detailed Attendee Dossier
 */
function edtech2026_add_registration_meta_box() {
    add_meta_box(
        'edtech_registration_details_box',
        '📋 Complete Registration & Attendee Dossier',
        'edtech2026_render_registration_meta_box',
        'summit_registration',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'edtech2026_add_registration_meta_box' );

function edtech2026_render_registration_meta_box( $post ) {
    $ref_id            = get_post_meta( $post->ID, '_ref_id', true );
    $org_name          = get_post_meta( $post->ID, '_org_name', true );
    $country           = get_post_meta( $post->ID, '_country', true );
    $guest1_name       = get_post_meta( $post->ID, '_guest1_name', true );
    $guest1_email      = get_post_meta( $post->ID, '_guest1_email', true );
    $guest1_phone      = get_post_meta( $post->ID, '_guest1_phone', true );
    $guest1_title      = get_post_meta( $post->ID, '_guest1_title', true );
    $total_delegates   = get_post_meta( $post->ID, '_total_delegates', true ) ?: '1';
    $additional_guests = get_post_meta( $post->ID, '_additional_guests', true );
    ?>
    <style>
        .edtech-admin-dossier { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; color: #1e293b; line-height: 1.5; }
        .edtech-meta-header { display: flex; justify-content: space-between; align-items: center; background: #002b5e; color: #fff; padding: 18px 24px; border-radius: 8px 8px 0 0; }
        .edtech-meta-header h2 { margin: 0; font-size: 1.25rem; color: #fff; }
        .edtech-meta-badge { background: #68BD46; color: #002b5e; font-weight: 800; font-size: 0.85rem; padding: 4px 12px; border-radius: 20px; }
        .edtech-meta-body { background: #fff; border: 1px solid #e2e8f0; border-top: none; padding: 24px; border-radius: 0 0 8px 8px; }
        .edtech-summary-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px; }
        .edtech-summary-card { background: #f8fafc; border: 1px solid #e2e8f0; padding: 14px 18px; border-radius: 6px; }
        .edtech-summary-label { font-size: 0.75rem; text-transform: uppercase; font-weight: 700; color: #64748b; margin-bottom: 4px; }
        .edtech-summary-val { font-size: 1.05rem; font-weight: 700; color: #002b5e; }
        .edtech-section-title { font-size: 1.05rem; font-weight: 800; color: #002b5e; margin: 24px 0 12px 0; padding-bottom: 8px; border-bottom: 2px solid #f1f5f9; display: flex; align-items: center; gap: 8px; }
        .edtech-guest-table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 0.92rem; }
        .edtech-guest-table th { background: #f1f5f9; color: #475569; font-weight: 700; text-align: left; padding: 10px 14px; border: 1px solid #e2e8f0; font-size: 0.8rem; text-transform: uppercase; }
        .edtech-guest-table td { padding: 12px 14px; border: 1px solid #e2e8f0; vertical-align: middle; }
        .edtech-guest-table tr:nth-child(even) { background: #fafbfc; }
        .primary-badge { background: #fee2e2; color: #dc2626; font-size: 0.72rem; font-weight: 800; padding: 2px 8px; border-radius: 12px; margin-left: 6px; border: 1px solid #fca5a5; }
    </style>

    <div class="edtech-admin-dossier">
        <!-- Header Banner -->
        <div class="edtech-meta-header">
            <div>
                <h2><?php echo esc_html( $org_name ?: 'Organisation Registration' ); ?></h2>
                <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;">Registered on: <?php echo esc_html( get_the_date( 'F j, Y, g:i a', $post->ID ) ); ?></div>
            </div>
            <span class="edtech-meta-badge"><?php echo esc_html( $ref_id ); ?></span>
        </div>

        <div class="edtech-meta-body">
            <!-- Summary Stats -->
            <div class="edtech-summary-grid">
                <div class="edtech-summary-card">
                    <div class="edtech-summary-label">Organisation / Institution</div>
                    <div class="edtech-summary-val"><?php echo esc_html( $org_name ?: '—' ); ?></div>
                </div>
                <div class="edtech-summary-card">
                    <div class="edtech-summary-label">Country</div>
                    <div class="edtech-summary-val"><?php echo esc_html( $country ?: '—' ); ?></div>
                </div>
                <div class="edtech-summary-card">
                    <div class="edtech-summary-label">Total Registered Attendees</div>
                    <div class="edtech-summary-val"><?php echo esc_html( $total_delegates ); ?> Delegate<?php echo $total_delegates > 1 ? 's' : ''; ?></div>
                </div>
            </div>

            <!-- All Attendees Table -->
            <div class="edtech-section-title">
                <span>👥 All Registered Attendees &amp; Delegates</span>
            </div>

            <table class="edtech-guest-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">Role</th>
                        <th>Full Name</th>
                        <th>Job Title / Designation</th>
                        <th>Official Email</th>
                        <th>Mobile Number</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Guest 1: Primary Contact -->
                    <tr>
                        <td><strong style="color: #002b5e;">Guest 1</strong><br><span class="primary-badge">PRIMARY</span></td>
                        <td><strong><?php echo esc_html( $guest1_name ?: '—' ); ?></strong></td>
                        <td><?php echo esc_html( $guest1_title ?: '—' ); ?></td>
                        <td>
                            <?php if ( $guest1_email ) : ?>
                                <a href="mailto:<?php echo esc_attr( $guest1_email ); ?>" style="color: #0284c7; text-decoration: none; font-weight: 600;">
                                    <?php echo esc_html( $guest1_email ); ?>
                                </a>
                            <?php else : ?>—<?php endif; ?>
                        </td>
                        <td>
                            <?php if ( $guest1_phone ) : ?>
                                <a href="tel:<?php echo esc_attr( $guest1_phone ); ?>" style="color: #002b5e; text-decoration: none;">
                                    <?php echo esc_html( $guest1_phone ); ?>
                                </a>
                            <?php else : ?>—<?php endif; ?>
                        </td>
                    </tr>

                    <!-- Additional Guests (Guest 2, 3, 4...) -->
                    <?php if ( ! empty( $additional_guests ) && is_array( $additional_guests ) ) : ?>
                        <?php foreach ( $additional_guests as $idx => $guest ) : ?>
                            <tr>
                                <td><strong>Guest <?php echo esc_html( $idx + 2 ); ?></strong></td>
                                <td><strong><?php echo esc_html( $guest['name'] ?? '—' ); ?></strong></td>
                                <td><?php echo esc_html( $guest['title'] ?? '—' ); ?></td>
                                <td>
                                    <?php if ( ! empty( $guest['email'] ) ) : ?>
                                        <a href="mailto:<?php echo esc_attr( $guest['email'] ); ?>" style="color: #0284c7; text-decoration: none;">
                                            <?php echo esc_html( $guest['email'] ); ?>
                                        </a>
                                    <?php else : ?>—<?php endif; ?>
                                </td>
                                <td>
                                    <?php if ( ! empty( $guest['phone'] ) ) : ?>
                                        <a href="tel:<?php echo esc_attr( $guest['phone'] ); ?>" style="color: #002b5e; text-decoration: none;">
                                            <?php echo esc_html( $guest['phone'] ); ?>
                                        </a>
                                    <?php else : ?>—<?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
}

/**
 * 7. SECURITY HARDENING: Disable XML-RPC, Hide Generator, Block Enumeration
 */
// Disable XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove WordPress Version from <head>
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// Block User Enumeration (?author=1)
function edtech2026_block_author_enumeration() {
    if ( ! is_admin() && isset( $_REQUEST['author'] ) ) {
        wp_die( 'Direct user queries are restricted on this summit portal.', 'Forbidden', array( 'response' => 403 ) );
    }
}
add_action( 'init', 'edtech2026_block_author_enumeration' );

/**
 * 8. AJAX Endpoint: Live Email Duplicate Check & Auto-Prefill (Primary & All Delegates)
 */
function edtech2026_check_email_registration() {
    // 1. Verify Nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'summit_check_email_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security validation expired. Please refresh the page.' ), 403 );
    }

    // 2. Validate & Sanitize Email
    $email = sanitize_email( $_POST['email'] ?? '' );
    if ( empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email format.' ), 400 );
    }

    $email_lower = strtolower( $email );

    // 3. Query summit_registration posts for this email across primary & additional delegates
    $query = new WP_Query( array(
        'post_type'      => 'summit_registration',
        'post_status'    => array( 'publish', 'private', 'draft' ),
        'posts_per_page' => 20,
        'meta_query'     => array(
            'relation' => 'OR',
            array(
                'key'     => '_guest1_email',
                'value'   => $email,
                'compare' => '='
            ),
            array(
                'key'     => '_delegate_email',
                'value'   => $email_lower,
                'compare' => '='
            ),
            array(
                'key'     => '_all_delegates',
                'value'   => $email,
                'compare' => 'LIKE'
            ),
            array(
                'key'     => '_additional_guests',
                'value'   => $email,
                'compare' => 'LIKE'
            ),
        )
    ) );

    if ( $query->have_posts() ) {
        foreach ( $query->posts as $post ) {
            $post_id  = $post->ID;
            $ref_id   = get_post_meta( $post_id, '_ref_id', true );
            $org_name = get_post_meta( $post_id, '_org_name', true );
            $country  = get_post_meta( $post_id, '_country', true );

            // Check if matches Primary Delegate
            $g1_email = strtolower( get_post_meta( $post_id, '_guest1_email', true ) );
            if ( $g1_email === $email_lower ) {
                wp_send_json_success( array(
                    'registered' => true,
                    'ref_id'     => $ref_id,
                    'org_name'   => $org_name,
                    'country'    => $country,
                    'name'       => get_post_meta( $post_id, '_guest1_name', true ),
                    'phone'      => get_post_meta( $post_id, '_guest1_phone', true ),
                    'title'      => get_post_meta( $post_id, '_guest1_title', true ),
                    'message'    => 'Email already registered. Details have been prefilled.',
                ) );
                return;
            }

            // Check in _all_delegates list
            $all_delegates = get_post_meta( $post_id, '_all_delegates', true );
            if ( is_array( $all_delegates ) ) {
                foreach ( $all_delegates as $del ) {
                    if ( ! empty( $del['email'] ) && strtolower( $del['email'] ) === $email_lower ) {
                        wp_send_json_success( array(
                            'registered' => true,
                            'ref_id'     => $ref_id,
                            'org_name'   => ! empty( $del['org'] ) ? $del['org'] : $org_name,
                            'country'    => ! empty( $del['country'] ) ? $del['country'] : $country,
                            'name'       => $del['name'] ?? '',
                            'phone'      => $del['phone'] ?? '',
                            'title'      => $del['title'] ?? '',
                            'message'    => 'Delegate email already registered. Details have been prefilled.',
                        ) );
                        return;
                    }
                }
            }

            // Check in _additional_guests list
            $additional_guests = get_post_meta( $post_id, '_additional_guests', true );
            if ( is_array( $additional_guests ) ) {
                foreach ( $additional_guests as $del ) {
                    if ( ! empty( $del['email'] ) && strtolower( $del['email'] ) === $email_lower ) {
                        wp_send_json_success( array(
                            'registered' => true,
                            'ref_id'     => $ref_id,
                            'org_name'   => ! empty( $del['org'] ) ? $del['org'] : $org_name,
                            'country'    => $country,
                            'name'       => $del['name'] ?? '',
                            'phone'      => $del['phone'] ?? '',
                            'title'      => $del['title'] ?? '',
                            'message'    => 'Delegate email already registered. Details have been prefilled.',
                        ) );
                        return;
                    }
                }
            }
        }
    }

    wp_send_json_success( array(
        'registered' => false,
        'message'    => 'Email is available.',
    ) );
}
add_action( 'wp_ajax_check_summit_email', 'edtech2026_check_email_registration' );
add_action( 'wp_ajax_nopriv_check_summit_email', 'edtech2026_check_email_registration' );


