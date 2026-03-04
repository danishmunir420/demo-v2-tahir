<?php
/**
 * Template Name: Home V2
 * Description: Custom Home V2 layout based on html-v2 design.
 *
 * @package HelloElementor
 */

get_header( 'v2' );
?>

<main id="main">

	<!-- Hero Slider -->
	<section class="tv-hero">
		<div class="tv-hero-inner">
			<div class="tv-hero__wrap">

				<!-- Main Video Swiper -->
				<div class="swiper tv-hero-swiper">
					<div class="swiper-wrapper">
						<!-- Slide 1 -->
						<div class="swiper-slide">
							<video class="tv-hero__video" playsinline muted preload="metadata">
								<source src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/videos/health.mp4' ); ?>" type="video/mp4">
							</video>
						</div>

						<!-- Slide 2 -->
						<div class="swiper-slide">
							<video class="tv-hero__video" playsinline muted preload="metadata">
								<source src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/videos/ai.mp4' ); ?>" type="video/mp4">
							</video>
						</div>
					</div>
				</div>

				<!-- Thumbnails (bottom-left) -->
				<div class="swiper tv-hero-thumbs d-none d-md-block">
					<div class="swiper-wrapper" data-anim="cards">

						<div class="swiper-slide">
							<button class="tv-hero-thumb" type="button">
								<span class="tv-hero-thumb__title">Healthcare QA<br>Services</span>
								<span class="tv-hero-thumb__arrow"></span>
								<span class="tv-hero-thumb__img">
									<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/v-slide-1-thumbnil.jpg' ); ?>" alt="">
								</span>
								<span class="tv-hero-thumb__progress" aria-hidden="true"></span>
							</button>
						</div>

						<div class="swiper-slide">
							<button class="tv-hero-thumb" type="button">
								<span class="tv-hero-thumb__title">AI/ML Models<br>Testing</span>
								<span class="tv-hero-thumb__arrow"></span>
								<span class="tv-hero-thumb__img">
									<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/v-slide-2-thumbnil.png' ); ?>" alt="">
								</span>
								<span class="tv-hero-thumb__progress" aria-hidden="true"></span>
							</button>
						</div>

					</div>
				</div>

				<!-- Optional badge bottom-right -->
				<a class="tv-hero__badge d-none d-md-block" data-anim="right" href="#" aria-label="Clutch badge">
					<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/clutch-logo.png' ); ?>" alt="">
				</a>

			</div>
		</div>
	</section>

	<!-- Trusted clients logos -->
	<section class="tv-trusted" data-anim="section">
		<div class="container">
			<h2 class="tv-trusted__title text-center" data-anim="title">
				Trusted by organizations <span class="text-black">that cannot afford mistakes.</span>
			</h2>

			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/Rise-Client-Logo.svg' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/u-turn-Client-Logo.svg' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/oslo-Client-Logo.svg' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/barca-Client-Logo.svg' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/th-Client-Logo.svg' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/kobe-Client-Logo.svg' ); ?>" alt="Kobe">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/Rise-Client-Logo.svg' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/u-turn-Client-Logo.svg' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/oslo-Client-Logo.svg' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/barca-Client-Logo.svg' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/th-Client-Logo.svg' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/kobe-Client-Logo.svg' ); ?>" alt="Kobe">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- AI Driven Section -->
	<section class="tv-precision" data-anim="section">
		<div class="container">
			<div class="row align-items-center g-5">
				<div class="col-lg-6">
					<div class="tv-precision__visual position-relative">
						<div class="tv-precision__card">
							<img data-anim="image" class="tv-precision__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/i-driven-img.png' ); ?>" alt="Abstract visual">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/shield-overlay-img.png' ); ?>" class="ai-top-img-1" alt="" data-anim="fade-up">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/person-overlay-40x40.png' ); ?>" class="ai-top-img-2" alt="" data-anim="right">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/ai-drive-overlay-btm.png' ); ?>" class="ai-top-img-3" alt="" data-anim="left">
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<h2 data-anim="right" class="tv-precision__title mb-3">
						<span class="tv-precision__accent">AI-driven,</span><br>
						technically precise,<br>
						for systems that<br>
						cannot fail.
					</h2>

					<p data-anim="right" class="tv-precision__text mb-4">
						We have a myriad of gains in business development that make them a testament
						to our quality.
					</p>

					<a data-anim="right" class="tv-precision__btn" href="#">
						About Us <span class="tv-caret" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Slider -->
	<section class="tv-services">
		<div class="container">
			<div class="tv-services-txt d-flex align-items-start justify-content-between gap-3">
				<div>
					<h2 data-anim="fade-up" class="tv-services__title mb-2">
						Our <span class="tv-services__accent">Services</span>
					</h2>
					<p data-anim="fade-up" class="tv-services__subtitle mb-0">
						Ensuring Secure And Seamless Applications<br>
						Through Expert Testing Across Web, Mobile, And<br>
						Desktop Platforms.
					</p>
				</div>

				<a data-anim="right" class="tv-services__viewall" href="#">
					View All <span class="tv-caret" aria-hidden="true"></span>
				</a>
			</div>

			<div class="tv-services__slider-wrap">
				<div class="swiper tv-services-swiper">
					<div class="swiper-wrapper" data-anim="cards">
						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-1.jpg' ); ?>" alt="AI Driven Automation Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">AI Driven<br>Automation Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Functional Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Functional Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-1.jpg' ); ?>" alt="Performance Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Performance Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Security Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Security Testing</h3>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="tv-slider-controls" data-anim="fade-up">
					<button class="tv-nav tv-nav-prev" aria-label="Previous slide">
						<span class="tv-arrow tv-arrow-left"></span>
					</button>

					<div class="tv-pagination"></div>

					<button class="tv-nav tv-nav-next" aria-label="Next slide">
						<span class="tv-arrow tv-arrow-right"></span>
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Choose Section -->
	<section class="tv-choose py-5">
		<div class="container">
			<div class="text-center mb-4">
				<div data-anim="fade-up" class="tv-choose__kicker">Why Choose Us</div>

				<h2 data-anim="fade-up" class="tv-choose__headline mt-3 mb-3">
					<span class="tv-choose__blue">Let us raise the standard of<br>
					your software quality</span>, and<br>
					keep it there.
				</h2>

				<p data-anim="fade-up" class="tv-choose__sub mx-auto mb-0">
					Partner with us for reliable, efficient, and expert QA solutions that elevate your software quality.
				</p>
			</div>

			<div class="tv-choose__slider">
				<div class="swiper tv-choose-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<article class="tv-choose-card">
								<img class="tv-choose-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/choose-img.png' ); ?>" alt="Expertise">
								<div class="tv-choose-card__overlay"></div>
								<div class="tv-choose-card__content">
									<h3 class="tv-choose-card__title" data-anim="fade-up">Expertise</h3>
									<p class="tv-choose-card__text" data-anim="fade-up">
										Deep QA experience across web, mobile, and enterprise systems.
									</p>
								</div>
							</article>
						</div>

						<div class="swiper-slide">
							<article class="tv-choose-card">
								<img class="tv-choose-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/choose-img.png' ); ?>" alt="Cutting-Edge Tools">
								<div class="tv-choose-card__overlay"></div>
								<div class="tv-choose-card__content">
									<h3 class="tv-choose-card__title" data-anim="fade-up">Cutting-Edge<br>Tools</h3>
									<p class="tv-choose-card__text" data-anim="fade-up">
										We leverage the latest testing tools and technologies to ensure maximum efficiency and accuracy.
									</p>
								</div>
							</article>
						</div>

						<div class="swiper-slide">
							<article class="tv-choose-card">
								<img class="tv-choose-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/choose-img.png' ); ?>" alt="Customer-Centric approach">
								<div class="tv-choose-card__overlay"></div>
								<div class="tv-choose-card__content">
									<h3 class="tv-choose-card__title" data-anim="fade-up">Customer-<br>Centric<br>Approach</h3>
									<p class="tv-choose-card__text" data-anim="fade-up">
										We adapt to your process and goals, keeping quality measurable and predictable.
									</p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest Insights -->
	<section class="tv-insights py-5">
		<div class="container">
			<h2 class="tv-insights__title text-center mb-5" data-anim="fade-up">Latest Insights</h2>

			<div class="row g-4" data-anim="cards">
				<div class="col-md-6 col-lg-4">
					<article class="tv-insight">
						<a class="tv-insight__media" href="#">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/insights-img-01.jpg' ); ?>" data-anim="image" alt="Habit tracking and self-improvement apps testing">
						</a>

						<div class="tv-insight__meta mt-3">
							<span data-anim="fade-up">May 04, 2025</span>
							<span class="tv-insight__dot" data-anim="fade-up">|</span>
							<span data-anim="fade-up">David C.</span>
						</div>

						<h3 class="tv-insight__heading mt-2">
							<a class="tv-insight__link" href="#" data-anim="fade-up">
								Habit Tracking And Self-Improvement Apps Testing
							</a>
						</h3>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-insight">
						<a class="tv-insight__media" href="#">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/insights-img-02.jpg' ); ?>" data-anim="image" alt="Women’s health and reproductive wellness apps testing">
						</a>

						<div class="tv-insight__meta mt-3">
							<span data-anim="fade-up">May 06, 2025</span>
							<span class="tv-insight__dot" data-anim="fade-up">|</span>
							<span data-anim="fade-up">David C.</span>
						</div>

						<h3 class="tv-insight__heading mt-2">
							<a class="tv-insight__link" href="#" data-anim="fade-up">
								Women’s Health &amp; Reproductive Wellness Apps Testing
							</a>
						</h3>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-insight">
						<a class="tv-insight__media" href="#">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/insights-img-03.jpg' ); ?>" data-anim="image" alt="Holistic or integrative wellness apps testing">
						</a>

						<div class="tv-insight__meta mt-3">
							<span data-anim="fade-up">May 08, 2025</span>
							<span class="tv-insight__dot" data-anim="fade-up">|</span>
							<span data-anim="fade-up">David C.</span>
						</div>

						<h3 class="tv-insight__heading mt-2">
							<a class="tv-insight__link" href="#" data-anim="fade-up">
								Holistic Or Integrative Wellness Apps Testing
							</a>
						</h3>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial slider -->
	<section class="tv-testimonials py-5">
		<div class="container">
			<h2 class="tv-testimonials__title text-center mb-5" data-anim="fade-up">What’s People Say’s</h2>

			<div class="swiper tv-testimonials-swiper">
				<div class="swiper-wrapper" data-anim="cards">

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade-up">
									“Superior Space’s user-friendly design and robust features have empowered our team
									to create a site that truly stands out in our industry.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Butterfly Studio</div>
									<div class="tv-testimonial__role" data-anim="fade-up">OUR ANOTHER TEMPLATE</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p data-anim="fade-up" class="tv-testimonial__quote">
									“Testiva helped us release faster with fewer defects. Their process and reporting made
									QA predictable and reliable.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">David C.</div>
									<div class="tv-testimonial__role" data-anim="fade-up">PRODUCT LEAD</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="tv-testimonials__dots" data-anim="fade-up"></div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer( 'v2' );

