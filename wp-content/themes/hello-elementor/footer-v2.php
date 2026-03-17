<?php
/**
 * Footer: V2
 *
 * Custom footer for V2 templates (e.g. Home V2).
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<footer class="tv-footer">
	<div class="container">
		<!-- CTA -->
		<div class="tv-footer__cta text-center">
			<h2 class="tv-footer__headline" data-anim="fade-up">
				Demand better<br>
				software quality.
			</h2>

			<form class="tv-footer__form" action="#" method="post">
				<label class="visually-hidden" for="footerEmail"><?php esc_html_e( 'Email', 'hello-elementor' ); ?></label>

				<input data-anim="left" id="footerEmail" class="tv-footer__input" type="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'hello-elementor' ); ?>" required>

				<button data-anim="right" class="tv-footer__btn" type="submit">
					<?php esc_html_e( 'BOOK A CALL', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
				</button>
			</form>
		</div>

		<!-- Links grid -->
		<div class="row tv-footer__grid g-4" data-anim="cards">
			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title"><?php esc_html_e( 'ABOUT US', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li><a href="#"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Why Choose Testiva?', 'hello-elementor' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Our Values', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title"><?php esc_html_e( 'SERVICES', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li><a href="<?php echo esc_url( site_url('/ai-driven-automation-testing/') ); ?>"><?php esc_html_e( 'AI Driven Automation Testing', 'hello-elementor' ); ?></a></li>
					<li><a href="<?php echo esc_url( site_url('/automation-testing/') ); ?>"><?php esc_html_e( 'Automation Testing', 'hello-elementor' ); ?></a></li>
					<li><a href="<?php echo esc_url( site_url('/performance-testing/') ); ?>"><?php esc_html_e( 'Performance Testing', 'hello-elementor' ); ?></a></li>
					<li><a href="<?php echo esc_url( site_url('/mobile-app-testing/') ); ?>"><?php esc_html_e( 'Mobile App Testing', 'hello-elementor' ); ?></a></li>
					<li><a href="<?php echo esc_url( site_url('/compatibility-testing/') ); ?>"><?php esc_html_e( 'Compatibility Testing', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title"><?php esc_html_e( 'VERTICALS', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li><a href="<?php echo esc_url( site_url('/healthcare-qa/') ); ?>"><?php esc_html_e( 'Healthcare QA', 'hello-elementor' ); ?></a></li>
					<li><a href="<?php echo esc_url( site_url('/wellness-app-testing/') ); ?>"><?php esc_html_e( 'Wellness Apps Testing', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title"><?php esc_html_e( 'GET IN TOUCH', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li><a href="mailto:info@testiva.io">info@testiva.io</a></li>
					<li><a href="tel:+19237306357">+1(929)-730-635-7</a></li>
					<li class="tv-footer__plain">
						17 C, DHA Rahbar, Lahore,<br>
						Pakistan
					</li>
				</ul>

				<div class="tv-footer__social" data-anim="cards">
					<a  target="_blank" href="https://www.facebook.com/share/1A733q8qww/" aria-label="<?php esc_attr_e( 'Facebook', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/fb-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Facebook', 'hello-elementor' ); ?>">
					</a>
					<a target="_blank" href="https://www.linkedin.com/company/testiva/?viewAsMember=true" aria-label="<?php esc_attr_e( 'Instagram', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/instagram-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Instagram', 'hello-elementor' ); ?>">
					</a>
					<a target="_blank" href="https://x.com/sajidtestiva?t=M8tYCPj5yAwfekCmBkIFrA&s=09" aria-label="<?php esc_attr_e( 'X', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/x-icon.svg' ); ?>" alt="<?php esc_attr_e( 'X', 'hello-elementor' ); ?>">
					</a>
					<a target="_blank" href="#" aria-label="<?php esc_attr_e( 'YouTube', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/youTube-icon.svg' ); ?>" alt="<?php esc_attr_e( 'YouTube', 'hello-elementor' ); ?>">
					</a>
				</div>

				<div class="tv-footer__copy" data-anim="right">
					&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'hello-elementor' ); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Watermark text -->
	<div class="tv-footer__watermark d-none d-md-block" aria-hidden="true">
		<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/footer-logo.svg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" data-anim="image">
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

