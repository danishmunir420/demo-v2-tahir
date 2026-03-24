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
				Let’s Deliver <br>
				 Quality Together.
			</h2>

			<form class="tv-footer__form" action="#" method="post">
				<label class="visually-hidden" for="footerEmail" data-anim="fade-up"><?php esc_html_e( 'Email', 'hello-elementor' ); ?></label>

				<input data-anim="left" id="footerEmail" class="tv-footer__input" type="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'hello-elementor' ); ?>" required>

				<button data-anim="right" class="tv-footer__btn" type="submit">
					<?php esc_html_e( 'BOOK A CALL', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
				</button>
			</form>
		</div>

		<!-- Links grid -->
		<div class="row tv-footer__grid g-4" data-anim="cards">
			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title" data-anim="fade-up"><?php esc_html_e( 'ABOUT US', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li data-anim="fade-up"><a href="#"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="#"><?php esc_html_e( 'Why Choose Testiva?', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="#"><?php esc_html_e( 'Our Values', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 class="tv-footer__title" data-anim="fade-up"><?php esc_html_e( 'SERVICES', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/ai-driven-automation-testing/') ); ?>"><?php esc_html_e( 'AI Driven Automation Testing', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/automation-testing/') ); ?>"><?php esc_html_e( 'Automation Testing', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/performance-testing/') ); ?>"><?php esc_html_e( 'Performance Testing', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/mobile-app-testing/') ); ?>"><?php esc_html_e( 'Mobile App Testing', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/compatibility-testing/') ); ?>"><?php esc_html_e( 'Compatibility Testing', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 data-anim="fade-up" class="tv-footer__title"><?php esc_html_e( 'VERTICALS', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/healthcare-qa/') ); ?>"><?php esc_html_e( 'Healthcare QA', 'hello-elementor' ); ?></a></li>
					<li data-anim="fade-up"><a href="<?php echo esc_url( site_url('/wellness-app-testing/') ); ?>"><?php esc_html_e( 'Wellness Apps Testing', 'hello-elementor' ); ?></a></li>
				</ul>
			</div>

			<div class="col-12 col-lg-3">
				<h3 data-anim="fade-up" class="tv-footer__title"><?php esc_html_e( 'GET IN TOUCH', 'hello-elementor' ); ?></h3>
				<ul class="tv-footer__list">
					<li data-anim="fade-up"><a href="mailto:info@testiva.io">info@testiva.io</a></li>
					<li data-anim="fade-up"><a href="tel:+19237306357">+1(929)-730-635-7</a></li>
					<li data-anim="fade-up" class="tv-footer__plain">
						17 C, DHA Rahbar, Lahore,<br>
						Pakistan
					</li>
				</ul>

				<div class="tv-footer__social" data-anim="cards">
					<a data-anim="fade-up" target="_blank" href="https://www.facebook.com/share/1A733q8qww/" aria-label="<?php esc_attr_e( 'Facebook', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/fb-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Facebook', 'hello-elementor' ); ?>">
					</a>
					<a data-anim="fade-up" target="_blank" href="https://www.linkedin.com/company/testiva/?viewAsMember=true" aria-label="<?php esc_attr_e( 'Instagram', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/instagram-icon.svg' ); ?>" alt="<?php esc_attr_e( 'Instagram', 'hello-elementor' ); ?>">
					</a>
					<a data-anim="fade-up" target="_blank" href="https://x.com/sajidtestiva?t=M8tYCPj5yAwfekCmBkIFrA&s=09" aria-label="<?php esc_attr_e( 'X', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/x-icon.svg' ); ?>" alt="<?php esc_attr_e( 'X', 'hello-elementor' ); ?>">
					</a>
					<a data-anim="fade-up" target="_blank" href="#" aria-label="<?php esc_attr_e( 'YouTube', 'hello-elementor' ); ?>" class="tv-footer__icon">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/youTube-icon.svg' ); ?>" alt="<?php esc_attr_e( 'YouTube', 'hello-elementor' ); ?>">
					</a>
				</div>

				<div data-anim="fade-up" class="tv-footer__copy" data-anim="right">
					&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'hello-elementor' ); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Watermark text -->
	<div class="tv-footer__watermark d-none d-md-block" aria-hidden="true">
<!-- 		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/footer-logo.svg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" data-anim="image"> -->
		
		<div class="tv-logo-reveal" data-logo-reveal>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1920"
                    height="412"
                    viewBox="0 0 1920 412"
                    fill="none"
                    aria-hidden="true"
                >
                    <g opacity="0.1">
                    <path data-logo-letter d="M525.31 240.035C525.31 246.798 524.713 254.756 524.116 259.683H302.016C308.613 316.15 345.719 348.071 400.2 348.071C432.53 348.071 476.233 337.635 506.772 323.526V384.92C481.636 399.029 434.35 411.302 391.214 411.302C287.627 411.302 228.967 339.502 228.967 244.962C228.967 143.689 295.419 83.519 383.423 83.519C471.427 83.519 525.907 149.198 525.31 240.035ZM305.598 209.337H452.859C447.456 170.04 422.917 146.107 383.423 146.107C343.928 146.107 315.181 170.04 305.598 209.337Z" fill="white"/>
                    <path data-logo-letter d="M578.024 387.986V323.562C606.175 340.732 648.684 349.944 679.193 349.944C706.15 349.944 733.674 338.283 733.674 316.186C733.674 299.017 720.509 289.804 701.941 284.908L648.058 270.156C593.577 255.435 573.218 219.229 573.218 176.259C573.218 118.568 627.698 83.5859 697.134 83.5859C732.45 83.5859 768.989 92.186 787.527 103.847V167.077C761.794 152.325 724.688 146.204 696.537 146.204C671.402 146.204 649.222 155.417 649.222 178.126C649.222 194.071 661.79 203.283 681.552 208.792L731.226 223.544C793.497 240.714 809.647 276.92 809.647 317.441C809.647 381.253 752.182 411.338 680.328 411.338C641.998 411.338 597.1 400.29 577.935 387.986H578.024Z" fill="white"/>
                    <path data-logo-letter d="M1047.27 336.425V402.716C1029.89 408.225 1005.36 411.316 983.803 411.316C888.604 411.316 858.692 340.097 858.692 267.685V46.7151L928.128 1.29688H935.89V107.222L952.01 90.9092H1038.25V154.752H935.86V268.297C935.86 311.879 956.219 343.189 999.326 343.189C1015.51 343.189 1032.25 340.74 1047.21 336.425H1047.27Z" fill="white"/>
                    <path data-logo-letter d="M1195.54 90.8984H1118.32V403.929H1195.54V90.8984Z" fill="white"/>
                    <path data-logo-letter d="M1493.71 90.8984H1576.9V96.438L1425.43 403.96H1397.28L1245.22 96.438V90.8984H1327.85L1411.67 276.275L1493.71 90.8984Z" fill="white"/>
                    <path data-logo-letter d="M1842.18 90.8949H1920V403.926H1842.18V372.617C1818.83 395.969 1782.29 411.302 1743.39 411.302C1661.99 411.302 1593.72 348.071 1593.72 247.41C1593.72 146.75 1661.96 83.519 1743.39 83.519C1782.32 83.519 1818.83 98.8523 1842.18 122.174V90.8643V90.8949ZM1842.18 310.029V184.792C1820.03 163.307 1788.89 149.81 1760.14 149.81C1712.26 149.81 1670.91 186.659 1670.35 247.41C1670.94 308.162 1712.26 345.011 1760.14 345.011C1788.89 345.011 1820 331.514 1842.18 310.029Z" fill="white"/>
                    <path data-logo-letter d="M188.576 336.425V402.716C171.202 408.225 146.664 411.316 125.111 411.316C29.9119 411.316 6.10352e-05 340.098 6.10352e-05 267.685V46.7151L69.4362 1.29688H77.1978V107.222L93.318 90.9092H179.561V154.752H77.1679V268.297C77.1679 311.879 97.5271 343.189 140.634 343.189C156.814 343.189 173.561 340.74 188.517 336.425H188.576Z" fill="white"/>
                    <path data-logo-letter d="M1136.89 7.89617C1131.64 2.8769 1124.74 0.0612106 1117.55 0H1195.7V79.4819C1195.49 72.3509 1192.77 65.5259 1188.03 60.2924L1136.92 7.89617H1136.89Z" fill="white"/>
                    </g>
                </svg>
            </div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

