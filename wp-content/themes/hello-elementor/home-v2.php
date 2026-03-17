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

			<!-- <div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo">
						 <img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Free-Add-copy-150x150.png') ); ?>" alt="Free-Add">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Urban-dicionary-150x150.png') ); ?>" alt="Urban">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Big-family-150x150.png') ); ?>" alt="Big-family">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Naturaly-Chick-1-150x150.png') ); ?>" alt="Naturaly-Chick">

					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Nextiva-1-150x150.png') ); ?>" alt="Nextiva">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Sun-Communities-150x150.png') ); ?>" alt="Sun-Communities">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/INDIAWIDE-1-150x150.png') ); ?>" alt="INDIAWIDE">
					</div>
					<div class="swiper-slide tv-logo">
						<img src="<?php //echo esc_url( site_url('/wp-content/uploads/2025/04/Machine-Medicine-150x150.png') ); ?>" alt="Machine-Medicine">

					</div>
					
				</div>
			</div> -->
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
						<span class="tv-precision__accent">AI-Powered,</span><br>
						QA Services for,<br>
						Seamless User<br>
						Experiences.
					</h2>

					<p data-anim="right" class="tv-precision__text mb-4">
						We combine smart automation and comprehensive software testing services to ensure stable and high-quality software.
					</p>

					<a data-anim="right" class="tv-precision__btn" href="<?php echo esc_url( site_url('/about-us/') ); ?>">
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
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/automation-testing/') ); ?>">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-1.jpg' ); ?>" alt="AI Driven Automation Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Automation Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/functional-testing/') ); ?>">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Functional Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Functional & Usability Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/performance-testing/') ); ?>">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-1.jpg' ); ?>" alt="Performance Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Performance & Load Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Security Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Security & Compliance Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Security Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">AI/ML & LLM Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<img class="tv-service-card__img" src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/services-img-2.jpg' ); ?>" alt="Security Testing">
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">API & Integration Testing</h3>
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

	<!-- Why Choose Us Section (scroll animation + stack slider) -->
	<section class="tv-why" id="tvWhy">
		<div class="container">
			<div class="tv-why__head">
				<h1><?php esc_html_e( 'Why Choose Us', 'hello-elementor' ); ?></h1>
				<h2 class="tv-why__title">
					<span class="tv-blue"><?php esc_html_e( 'Let us raise the standard of your software quality,', 'hello-elementor' ); ?></span> <?php esc_html_e( 'and keep it there.', 'hello-elementor' ); ?>
				</h2>
				<p class="tv-why__sub">
					<?php esc_html_e( 'Partner with us for reliable, efficient, and expert QA solutions that elevate your software quality.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="tv-why__stage">
				<!-- Screen 1: Three cards (scroll into view) -->
				<div class="tv-why__cards">
					<article class="tv-card tv-card--left" id="tvCardLeft">
						<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Expertise', 'hello-elementor' ); ?>">
						<div class="tv-card__content">
							<h3><?php esc_html_e( 'Expertise', 'hello-elementor' ); ?></h3>
						</div>
					</article>

					<article class="tv-card tv-card--center" id="tvCardCenter">
						<img src="https://images.unsplash.com/photo-1633419461186-7d40a38105ec?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Cutting-Edge Tools', 'hello-elementor' ); ?>">
						<div class="tv-card__content">
							<h3><?php esc_html_e( 'Cutting-Edge', 'hello-elementor' ); ?><br><?php esc_html_e( 'Tools', 'hello-elementor' ); ?></h3>
							<p><?php esc_html_e( 'We leverage the latest testing tools and technologies to ensure maximum efficiency and accuracy.', 'hello-elementor' ); ?></p>
						</div>
					</article>

					<article class="tv-card tv-card--right" id="tvCardRight">
						<img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Customer-centric approach', 'hello-elementor' ); ?>">
						<div class="tv-card__content">
							<h3><?php esc_html_e( 'Customer-', 'hello-elementor' ); ?><br><?php esc_html_e( 'centric', 'hello-elementor' ); ?><br><?php esc_html_e( 'approach', 'hello-elementor' ); ?></h3>
						</div>
					</article>
				</div>

				<!-- Screen 2: Stack slider (revealed on scroll) -->
				<div class="tv-why__sliderWrap" id="tvWhySliderWrap">
					<div class="tv-stack" id="tvWhyStack">
						<div class="tv-stack__cards">

							<article class="tv-stack__card is-active">
								<div class="tv-slide2">
									<div class="tv-slide2__media">
										<div class="tv-mediaCard">
											<span class="tv-mediaCard__plate1"></span>
											<span class="tv-mediaCard__plate2"></span>
											<div class="tv-mediaCard__inner">
												<img src="https://images.unsplash.com/photo-1633419461186-7d40a38105ec?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Cutting-Edge Tools', 'hello-elementor' ); ?>">
												<div class="tv-mediaCard__content">
													<h3><?php esc_html_e( 'Cutting-Edge', 'hello-elementor' ); ?><br><?php esc_html_e( 'Tools', 'hello-elementor' ); ?></h3>
													<p><?php esc_html_e( 'We leverage the latest testing tools and technologies to ensure maximum efficiency and accuracy.', 'hello-elementor' ); ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="tv-slide2__content">
										<h3 class="tv-slide2__title">
											<span class="tv-blue"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></span>
											<?php esc_html_e( 'From Passion', 'hello-elementor' ); ?>
											<?php esc_html_e( 'To Precision', 'hello-elementor' ); ?>
										</h3>
										<p class="tv-slide2__text">
											<?php esc_html_e( 'What started as a small group of passionate testers has grown into a trusted QA team helping startups and enterprises deliver flawless software. We built our reputation on attention to detail, strong communication, and a commitment to continuous improvement.', 'hello-elementor' ); ?>
										</p>
										<a class="tv-cta-pill" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php esc_html_e( 'Learn More', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-slide2">
									<div class="tv-slide2__media">
										<div class="tv-mediaCard">
											<span class="tv-mediaCard__plate1"></span>
											<span class="tv-mediaCard__plate2"></span>
											<div class="tv-mediaCard__inner">
												<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Expertise', 'hello-elementor' ); ?>">
												<div class="tv-mediaCard__content">
													<h3><?php esc_html_e( 'Expertise', 'hello-elementor' ); ?></h3>
													<p><?php esc_html_e( 'Our experts combine domain knowledge and hands-on QA practices to improve stability and release confidence.', 'hello-elementor' ); ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="tv-slide2__content">
										<h3 class="tv-slide2__title">
											<span class="tv-blue"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></span>
											<?php esc_html_e( 'Built on', 'hello-elementor' ); ?>
											<?php esc_html_e( 'Expertise', 'hello-elementor' ); ?>
										</h3>
										<p class="tv-slide2__text">
											<?php esc_html_e( 'Our team blends structured QA strategy, automation thinking, exploratory testing, and strong communication to support both startups and enterprise delivery teams.', 'hello-elementor' ); ?>
										</p>
										<a class="tv-cta-pill" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php esc_html_e( 'Explore Expertise', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-slide2">
									<div class="tv-slide2__media">
										<div class="tv-mediaCard">
											<span class="tv-mediaCard__plate1"></span>
											<span class="tv-mediaCard__plate2"></span>
											<div class="tv-mediaCard__inner">
												<img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( 'Customer-centric approach', 'hello-elementor' ); ?>">
												<div class="tv-mediaCard__content">
													<h3><?php esc_html_e( 'Customer-', 'hello-elementor' ); ?><br><?php esc_html_e( 'centric', 'hello-elementor' ); ?><br><?php esc_html_e( 'approach', 'hello-elementor' ); ?></h3>
													<p><?php esc_html_e( 'We adapt our testing process around your goals, timelines, users, and product priorities.', 'hello-elementor' ); ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="tv-slide2__content">
										<h3 class="tv-slide2__title">
											<span class="tv-blue"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></span>
											<?php esc_html_e( 'Focused on', 'hello-elementor' ); ?>
											<?php esc_html_e( 'Your Success', 'hello-elementor' ); ?>
										</h3>
										<p class="tv-slide2__text">
											<?php esc_html_e( 'We collaborate closely with product and engineering teams to deliver practical QA support, transparent reporting, and solutions that match real business needs.', 'hello-elementor' ); ?>
										</p>
										<a class="tv-cta-pill" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php esc_html_e( 'See Approach', 'hello-elementor' ); ?> <span class="tv-caret" aria-hidden="true"></span>
										</a>
									</div>
								</div>
							</article>

						</div>
						<div class="tv-stack__dots" aria-label="<?php esc_attr_e( 'Slider dots', 'hello-elementor' ); ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest Insights -->
	<section class="tv-insights py-5">
		<div class="container">
			<h2 class="tv-insights__title text-center mb-5" data-anim="fade-up"><?php esc_html_e( 'Latest Insights', 'hello-elementor' ); ?></h2>

			<div class="row g-4" data-anim="cards">
				<?php
				$insights_query = new WP_Query(
					array(
						'post_type'           => 'post',
						'posts_per_page'      => 3,
						'post_status'         => 'publish',
						'ignore_sticky_posts' => true,
					)
				);

				if ( $insights_query->have_posts() ) :
					while ( $insights_query->have_posts() ) :
						$insights_query->the_post();

						if ( has_post_thumbnail() ) {
							$image_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
						} else {
							$image_url = HELLO_THEME_URL . '/html-v2/assets/images/insights-img-01.jpg';
						}
						?>
						<div class="col-md-6 col-lg-4">
							<article class="tv-insight">
								<a class="tv-insight__media" href="<?php echo esc_url( get_permalink() ); ?>">
									<img
										src="<?php echo esc_url( $image_url ); ?>"
										data-anim="image"
										alt="<?php echo esc_attr( get_the_title() ); ?>"
									>
								</a>

								<div class="tv-insight__meta mt-3">
									<span data-anim="fade-up">
										<?php echo esc_html( get_the_date( 'M d, Y' ) ); ?>
									</span>
									<span class="tv-insight__dot" data-anim="fade-up">|</span>
									<span data-anim="fade-up">
										<?php echo esc_html( get_the_author() ); ?>
									</span>
								</div>

								<h3 class="tv-insight__heading mt-2">
									<a class="tv-insight__link" href="<?php echo esc_url( get_permalink() ); ?>" data-anim="fade-up">
										<?php the_title(); ?>
									</a>
								</h3>
							</article>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
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
									<div class="tv-testimonial__name" data-anim="fade-up">Steve Brickman</div>
									<div class="tv-testimonial__role" data-anim="fade-up">Director of Technology @ mscripts</div>
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

