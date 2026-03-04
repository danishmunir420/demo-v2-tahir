<?php
/**
 * Template Name: Services V2
 * Description: Services page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'v2' );
?>

<main id="main">

	<!-- Inner Banner -->
	<section class="tv-about-banner">
		<div class="tv-banner-inner">
			<div class="tv-about-banner__image js-hero-bg">
				<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/banner-inner-img.png' ); ?>" alt="<?php esc_attr_e( 'Services Banner', 'hello-elementor' ); ?>">
			</div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1><?php esc_html_e( 'Services', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img banner-outer-img-02 js-hero-person">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-banner-img-01.png' ); ?>" alt="<?php esc_attr_e( 'Services visual', 'hello-elementor' ); ?>">
					</div>
					<h2>
						<?php esc_html_e( 'Unleashing Innovation,', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Delivering Results', 'hello-elementor' ); ?>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Strategy section -->
	<section class="tv-strategy py-5">
		<div class="container">
			<div class="text-center tv-strategy__head">
				<h2 class="tv-strategy__title mb-3" data-anim="fade">
					<span class="tv-strategy__blue"><?php esc_html_e( 'At Testiva,', 'hello-elementor' ); ?></span>
					<span class="tv-strategy__dark">
						<?php esc_html_e( 'Technology Meets Strategy To', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Drive Your Digital Growth.', 'hello-elementor' ); ?>
					</span>
				</h2>

				<p class="tv-strategy__line mb-0" data-anim="fade">
					<?php esc_html_e( 'Our commitment goes beyond being just a service provider; we are your partners in achieving digital excellence.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="row justify-content-center g-4 mt-4">
				<div class="col-md-12 col-lg-6">
					<article class="tv-strategy-card">
						<h3 class="tv-strategy-card__title" data-anim="fade">
							<?php esc_html_e( 'Tailor-made', 'hello-elementor' ); ?><br>
							<?php esc_html_e( 'Solutions', 'hello-elementor' ); ?>
						</h3>
						<p class="tv-strategy-card__text mb-0" data-anim="fade">
							<?php esc_html_e( 'Each strategy we devise is uniquely sculpted to align with your specific business objectives, ensuring impactful results.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>

				<div class="col-md-12 col-lg-6">
					<article class="tv-strategy-card">
						<h3 class="tv-strategy-card__title" data-anim="fade">
							<?php esc_html_e( 'Dedicated', 'hello-elementor' ); ?><br>
							<?php esc_html_e( 'Software Testing', 'hello-elementor' ); ?><br>
							<?php esc_html_e( 'Services', 'hello-elementor' ); ?>
						</h3>
						<p class="tv-strategy-card__text mb-0" data-anim="fade">
							<?php esc_html_e( 'End-to-end dedicated QA services that elevate your software’s reliability and user experience.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Testing Services stack slider -->
	<section class="tv-testing-slider py-5">
		<div class="container">
			<div class="text-center mb-5">
				<h2 class="tv-tslider__title" data-anim="fade">
					<span class="tv-tslider__blue"><?php esc_html_e( 'Testing Services', 'hello-elementor' ); ?></span><br>
					<span class="tv-tslider__dark"><?php esc_html_e( 'That Deliver Results', 'hello-elementor' ); ?></span>
				</h2>
			</div>

			<div class="tv-testing-wrap" id="tvTestingStack">
				<div class="tv-testing-left" aria-hidden="true"></div>

				<div class="tv-testing-right">
					<div class="tv-stack tv-stack--testing">

						<div class="tv-stack__cards">
							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'AI Driven', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'Automation Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Transform testing with our AI-driven automation services, powered by machine learning and advanced AI tech.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Performance', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Ensure your app remains fast and stable under real-world traffic, stress, and load conditions.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Mobile', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'App Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Verify usability, compatibility, and reliability across iOS and Android devices.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>
						</div>

						<div class="tv-stack__controls">
							<button class="tv-stack__arrow tv-stack__arrow--prev" aria-label="<?php esc_attr_e( 'Previous', 'hello-elementor' ); ?>">
								<span class="tv-arrow tv-arrow-left"></span>
							</button>

							<div class="tv-stack__dots"></div>

							<button class="tv-stack__arrow tv-stack__arrow--next" aria-label="<?php esc_attr_e( 'Next', 'hello-elementor' ); ?>">
								<span class="tv-arrow tv-arrow-right"></span>
							</button>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Testimonials -->
	<section class="tv-testimonials py-5">
		<div class="container">
			<h2 class="tv-testimonials__title text-center mb-5" data-anim="fade">
				<?php esc_html_e( 'What’s People Say’s', 'hello-elementor' ); ?>
			</h2>

			<div class="swiper tv-testimonials-swiper">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="<?php esc_attr_e( 'Client photo', 'hello-elementor' ); ?>" data-anim="image">
							</div>

							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade">
									<?php esc_html_e( '“Superior Space’s user-friendly design and robust features have empowered our team to create a site that truly stands out in our industry.”', 'hello-elementor' ); ?>
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade">Butterfly Studio</div>
									<div class="tv-testimonial__role" data-anim="fade"><?php esc_html_e( 'OUR ANOTHER TEMPLATE', 'hello-elementor' ); ?></div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="<?php esc_attr_e( 'Client photo', 'hello-elementor' ); ?>" data-anim="image">
							</div>

							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade">
									<?php esc_html_e( '“Testiva helped us release faster with fewer defects. Their process and reporting made QA predictable and reliable.”', 'hello-elementor' ); ?>
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade">David C.</div>
									<div class="tv-testimonial__role" data-anim="fade"><?php esc_html_e( 'PRODUCT LEAD', 'hello-elementor' ); ?></div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="tv-testimonials__dots"></div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer( 'v2' );

