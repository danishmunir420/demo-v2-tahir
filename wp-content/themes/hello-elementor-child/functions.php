<?php
/**
 * Hello Elementor Child theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue parent and child styles.
 */
function hello_elementor_child_enqueue_styles() {
	$parent_style_handle = 'hello-elementor-style';

	wp_enqueue_style(
		$parent_style_handle,
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'hello-elementor' )->get( 'Version' )
	);

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style_handle ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles', 20 );

/**
 * Child override: enqueue assets for V2 templates in a way
 * that survives parent theme updates.
 */
function hello_elementor_child_setup_v2_assets() {
	// If the parent previously registered its own V2 enqueue function, unhook it.
	if ( function_exists( 'testiva_home_v2_assets' ) ) {
		remove_action( 'wp_enqueue_scripts', 'testiva_home_v2_assets' );
	}

	// Register the child-owned V2 assets loader.
	add_action( 'wp_enqueue_scripts', 'hello_elementor_child_v2_assets' );
}
add_action( 'after_setup_theme', 'hello_elementor_child_setup_v2_assets' );

/**
 * Enqueue assets for V2 templates (Home V2 design) from the child.
 *
 * Uses the same logic as the original parent implementation,
 * but loads all assets from the child theme so the html-v2 folder
 * is fully protected from parent updates.
 */
function hello_elementor_child_v2_assets() {
	// Only load on templates that explicitly use the V2 design.
	if (
		! is_page_template( 'home-v2.php' ) &&
		! is_page_template( 'services-v2.php' ) &&
		! is_page_template( 'about-v2.php' ) &&
		! is_page_template( 'case-studies-v2.php' ) &&
		! is_page_template( 'faqs-v2.php' ) &&
		! is_page_template( 'contact-us-v2.php' )
	) {
		return;
	}

	// Base URLs/paths: point to the CHILD so html-v2 lives in the child theme.
	$theme_url  = get_stylesheet_directory_uri();
	$theme_path = get_stylesheet_directory();

	// Google Font: Inter.
	wp_enqueue_style(
		'testiva-inter-font',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Bootstrap CSS (CDN).
	wp_enqueue_style(
		'testiva-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);

	// Swiper CSS.
	wp_enqueue_style(
		'testiva-swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
		array(),
		'11'
	);

	// Main CSS for the V2 design.
	$main_css_relative = '/html-v2/assets/css/main.css';
	$main_css_path     = $theme_path . $main_css_relative;

	wp_enqueue_style(
		'testiva-home-v2-main',
		$theme_url . $main_css_relative,
		array( 'testiva-bootstrap', 'testiva-swiper', 'testiva-inter-font' ),
		file_exists( $main_css_path ) ? filemtime( $main_css_path ) : ( defined( 'HELLO_ELEMENTOR_VERSION' ) ? HELLO_ELEMENTOR_VERSION : wp_get_theme( 'hello-elementor' )->get( 'Version' ) )
	);

	// Bootstrap JS bundle.
	wp_enqueue_script(
		'testiva-bootstrap-bundle',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.3',
		true
	);

	// Swiper JS.
	wp_enqueue_script(
		'testiva-swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
		array(),
		'11',
		true
	);

	// GSAP core.
	wp_enqueue_script(
		'testiva-gsap',
		'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
		array(),
		'3.12.5',
		true
	);

	// GSAP ScrollTrigger.
	wp_enqueue_script(
		'testiva-gsap-scrolltrigger',
		'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
		array( 'testiva-gsap' ),
		'3.12.5',
		true
	);

	// Main JS for V2.
	$main_js_relative = '/html-v2/assets/js/main.js';
	$main_js_path     = $theme_path . $main_js_relative;

	wp_enqueue_script(
		'testiva-home-v2-main',
		$theme_url . $main_js_relative,
		array( 'testiva-bootstrap-bundle', 'testiva-swiper', 'testiva-gsap', 'testiva-gsap-scrolltrigger' ),
		file_exists( $main_js_path ) ? filemtime( $main_js_path ) : ( defined( 'HELLO_ELEMENTOR_VERSION' ) ? HELLO_ELEMENTOR_VERSION : wp_get_theme( 'hello-elementor' )->get( 'Version' ) ),
		true
	);

	// Animation JS for V2.
	$animation_js_relative = '/html-v2/assets/js/animation.js';
	$animation_js_path     = $theme_path . $animation_js_relative;

	wp_enqueue_script(
		'testiva-home-v2-animation',
		$theme_url . $animation_js_relative,
		array( 'testiva-home-v2-main' ),
		file_exists( $animation_js_path ) ? filemtime( $animation_js_path ) : ( defined( 'HELLO_ELEMENTOR_VERSION' ) ? HELLO_ELEMENTOR_VERSION : wp_get_theme( 'hello-elementor' )->get( 'Version' ) ),
		true
	);
}

