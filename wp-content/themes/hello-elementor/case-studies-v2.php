<?php
/**
 * Template Name: Case Studies V2
 * Description: Case studies page using the V2 global design.
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
				<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/banner-inner-img.png' ); ?>" alt="<?php esc_attr_e( 'Case Studies Banner', 'hello-elementor' ); ?>">
			</div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1><?php esc_html_e( 'Case Studies', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img banner-outer-img-03 js-hero-person">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-std-img-inner.png' ); ?>" alt="<?php esc_attr_e( 'Case study visual', 'hello-elementor' ); ?>">
					</div>
					<h2>
						<?php esc_html_e( 'Excellence in every test.', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Quality in every result.', 'hello-elementor' ); ?>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Case studies grid with filter -->
	<section class="tv-cases py-5">
		<div class="container">

			<div class="tv-cases__filter">
				<span class="tv-cases__filterLabel"><?php esc_html_e( 'FILTER', 'hello-elementor' ); ?></span>

				<div class="tv-cases__tabs" role="tablist" aria-label="<?php esc_attr_e( 'Case study filter', 'hello-elementor' ); ?>">
					<button class="tv-cases__tab is-active" type="button" data-filter="all" role="tab" aria-selected="true">
						<?php esc_html_e( 'All', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					<button class="tv-cases__tab" type="button" data-filter="ai" role="tab" aria-selected="false">
						<?php esc_html_e( 'AI', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					<button class="tv-cases__tab" type="button" data-filter="healthcare" role="tab" aria-selected="false">
						<?php esc_html_e( 'Healthcare', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					<button class="tv-cases__tab" type="button" data-filter="saas" role="tab" aria-selected="false">
						<?php esc_html_e( 'SaaS', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					<button class="tv-cases__tab" type="button" data-filter="dealership" role="tab" aria-selected="false">
						<?php esc_html_e( 'Dealership', 'hello-elementor' ); ?>
					</button>
				</div>
			</div>

			<div class="tv-cases__grid">
				<article class="tv-case" data-category="ai">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-01.jpg' ); ?>" alt="Freeadcopy.com">
					</a>
					<h3 class="tv-case__title">Freeadcopy.com</h3>
					<p class="tv-case__desc"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="saas">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-02.jpg' ); ?>" alt="dmuscle.com">
					</a>
					<h3 class="tv-case__title" data-anim="fade">dmuscle.com</h3>
					<p class="tv-case__desc" data-anim="fade"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="dealership">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-03.jpg' ); ?>" alt="Loadster.app">
					</a>
					<h3 class="tv-case__title" data-anim="fade">Loadster.app</h3>
					<p class="tv-case__desc" data-anim="fade"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-04.jpg' ); ?>" alt="India wide">
					</a>
					<h3 class="tv-case__title" data-anim="fade">India wide</h3>
					<p class="tv-case__desc" data-anim="fade"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-05.jpg' ); ?>" alt="India wide">
					</a>
					<h3 class="tv-case__title" data-anim="fade">India wide</h3>
					<p class="tv-case__desc" data-anim="fade"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/case-study-06.jpg' ); ?>" alt="India wide">
					</a>
					<h3 class="tv-case__title" data-anim="fade">India wide</h3>
					<p class="tv-case__desc" data-anim="fade"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

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

