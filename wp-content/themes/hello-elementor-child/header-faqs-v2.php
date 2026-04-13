<?php
/**
 * Header: FAQs V2
 *
 * Dedicated header for FAQs V2 page.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'hello-elementor' ); ?></a>

<header class="tv-header-wrap tv-header tv-header--contact tv-header-black-logo" id="tvHeader">
	<div class="container-xl container-full">
		<div class="tv-headerbar position-relative d-flex align-items-center justify-content-between">
			<button class="tv-icon-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="<?php esc_attr_e( 'Open menu', 'hello-elementor' ); ?>" data-anim="left">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/menu-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Open menu', 'hello-elementor' ); ?>" class="icon-menu-white">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/menu-icon-black.svg'); ?>" alt="Open menu" class="icon-black">
			</button>

			<a class="tv-brand position-absolute start-50 translate-middle-x" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/logo.svg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo-white" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/logo-black.svg'); ?>" alt="Testiva logo" class="logo-black" data-anim="fade-up">
			</a>

			<div class="d-flex align-items-center d-none d-md-block" data-anim="right">
				<a class="tv-cta-pill" href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>">
					<?php esc_html_e( 'Contact Us', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</div>

	<div class="offcanvas offcanvas-top tv-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenu">
		<div class="tv-menu__stripes">
			<span></span><span></span><span></span>
			<span></span><span></span><span></span>
			<span></span><span></span>
		</div>
		<div class="tv-menu__inner container-fluid">
			<button type="button" class="tv-menu__close" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e( 'Close menu', 'hello-elementor' ); ?>">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/close-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Close menu', 'hello-elementor' ); ?>" width="32">
			</button>

			<div class="row g-5 align-items-start tv-menu__grid">
				<div class="col-lg-5">
					<nav aria-label="<?php esc_attr_e( 'Primary', 'hello-elementor' ); ?>" class="tv-menu__nav">
						<a class="tv-menu__link" href="<?php echo esc_url( site_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'hello-elementor' ); ?></a>
						<a class="tv-menu__link" href="<?php echo esc_url( site_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'hello-elementor' ); ?></a>
						<a class="tv-menu__link" href="<?php echo esc_url( site_url( '/case-studies/' ) ); ?>"><?php esc_html_e( 'Case Studies', 'hello-elementor' ); ?></a>
						<a class="tv-menu__link" href="<?php echo esc_url( site_url( '/faqs/' ) ); ?>"><?php esc_html_e( 'Faqs', 'hello-elementor' ); ?></a>
						<a class="tv-menu__link" href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'hello-elementor' ); ?></a>
					</nav>
					<div class="tv-menu__contact">
						<a class="tv-menu__contact-item" href="tel:+92 300 7727644">
							<span class="tv-menu__icon" aria-hidden="true">
								<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/phone-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Phone Icon', 'hello-elementor' ); ?>">
							</span>
							<span>+92 300 7727644</span>
						</a>

						<a class="tv-menu__contact-item" href="mailto:info@testiva.io">
							<span class="tv-menu__icon" aria-hidden="true">
								<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/email-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Email Icon', 'hello-elementor' ); ?>">
							</span>
							<span>info@testiva.io</span>
						</a>
					</div>

					<!-- Right: CTA (mobile) -->
					<div class="d-flex align-items-center d-block d-md-none" data-anim="right">
						<a class="tv-cta-pill" href="#">
							<?php esc_html_e( 'Let’s Talk', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
						</a>
					</div>
				</div>

				<div class="col-lg-7 d-none d-md-block">
					<div class="row g-4">
						<div class="col-md-6">
							<a class="tv-menu-tile" href="<?php echo esc_url( site_url( '/healthcare-qa/#qa-services/' ) ); ?>">
								<div class="tv-menu-tile__imgWrap">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/menu-img-01.jpg' ); ?>" alt="<?php esc_attr_e( 'Healthcare QA', 'hello-elementor' ); ?>">
								</div>
								<div class="tv-menu-tile__label">
									<?php esc_html_e( 'Healthcare QA', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
								</div>
							</a>
						</div>

						<div class="col-md-6">
							<a class="tv-menu-tile" href="<?php echo esc_url( site_url( '/wellness-app-testing/' ) ); ?>">
								<div class="tv-menu-tile__imgWrap">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/menu-img-02.jpg' ); ?>" alt="<?php esc_attr_e( 'Wellness apps testing', 'hello-elementor' ); ?>">
								</div>
								<div class="tv-menu-tile__label">
									<?php esc_html_e( 'Wellness apps testing', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>
