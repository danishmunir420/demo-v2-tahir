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
	<section class="tv-hero tvheromainsection">
		<div class="tv-hero-inner">
			<div class="tv-hero__wrap">

				<!-- Main Video Swiper -->
				<div class="swiper tv-hero-swiper">
					<div class="swiper-wrapper">
						<!-- Slide 1 -->
						<div class="swiper-slide">
							<video class="tv-hero__video" playsinline muted preload="metadata">
								<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/health.mp4' ); ?>" type="video/mp4">
							</video>
						</div>

						<!-- Slide 2 -->
						<div class="swiper-slide">
							<video class="tv-hero__video" playsinline muted preload="metadata">
								<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/ai.mp4' ); ?>" type="video/mp4">
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
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/v-slide-1-thumbnil.jpg' ); ?>" alt="">
								</span>
								<span class="tv-hero-thumb__progress" aria-hidden="true"></span>
							</button>
						</div>

						<div class="swiper-slide">
							<button class="tv-hero-thumb" type="button">
								<span class="tv-hero-thumb__title">AI/ML Models<br>Testing</span>
								<span class="tv-hero-thumb__arrow"></span>
								<span class="tv-hero-thumb__img">
									<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/v-slide-2-thumbnil.png' ); ?>" alt="">
								</span>
								<span class="tv-hero-thumb__progress" aria-hidden="true"></span>
							</button>
						</div>

					</div>
				</div>

				<!-- Optional badge bottom-right -->
				<a class="tv-hero__badge d-none d-md-block" data-anim="right" href="#" aria-label="Clutch badge">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/clutch-logo.png' ); ?>" alt="">
				</a>

			</div>
		</div>
	</section>

	<!-- Trusted clients logos -->
	<section class="tv-trusted" data-anim="section">
		<div class="container-fluid">
			<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="paddlrzero">
			<h2 class="tv-trusted__title text-center" data-anim="fade-up">
				Trusted by organizations <span class="text-black">that cannot afford mistakes.</span>
			</h2>
			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/freeaddcopy_logo.png' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/f_f_logo.png' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/nextiva_logo.png' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/sun_tm_logo.png' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/karenbody_logo.png' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/urban_logo.png' ); ?>" alt="Kobe">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/holistics_logo.png' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/MMTlogo.png' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/freeaddcopy_logo.png' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/f_f_logo.png' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/nextiva_logo.png' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/sun_tm_logo.png' ); ?>" alt="Kobe">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/karenbody_logo.png' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/urban_logo.png' ); ?>" alt="Kobe">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/holistics_logo.png' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/MMTlogo.png' ); ?>" alt="U-Turn">
					</div>
				</div>
				
			</div>
			
			
			<!--
			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/holistic.png' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/firex.png' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/mmt.png' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/nextiva.png' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/sun.png' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/karen.png' ); ?>" alt="Kobe">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/urban.png' ); ?>" alt="Rise">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/freeaddcopy.png' ); ?>" alt="U-Turn">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/nextiva-v2.png' ); ?>" alt="Oslo">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/holistic.png' ); ?>" alt="Barca">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/firex.png' ); ?>" alt="TH">
					</div>
					<div class="swiper-slide tv-logo" data-anim="fade-up">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/mmt.png' ); ?>" alt="Kobe">
					</div>
				</div>
				
			</div>
			-->

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
							<img data-anim="image" class="tv-precision__img" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/i-driven-img.png' ); ?>" alt="Abstract visual">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/shield-overlay-img.png' ); ?>" class="ai-top-img-1" alt="" data-anim="fade-up">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/person-overlay-40x40.png' ); ?>" class="ai-top-img-2" alt="" data-anim="right">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ai-drive-overlay-btm.png' ); ?>" class="ai-top-img-3" alt="" data-anim="left">
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<h2 data-anim="fade-up" class="tv-precision__title mb-3">
						<span class="tv-precision__accent">AI-Powered,</span><br>
						QA Services for,<br>
						Seamless User<br>
						Experiences.
					</h2>

					<p data-anim="fade-up" class="tv-precision__text mb-4">
						We combine smart automation and comprehensive software testing services to ensure stable and high-quality software.
					</p>

					<a data-anim="fade-up" class="tv-precision__btn" href="<?php echo esc_url( site_url('/about-us/') ); ?>">
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

				<a data-anim="fade-up" class="tv-services__viewall" href="<?php echo esc_url( site_url('/services/') ); ?>">
					View All <span class="tv-caret" aria-hidden="true"></span>
				</a>
			</div>

			<div class="tv-services__slider-wrap">
				<div class="swiper tv-services-swiper">
					<div class="swiper-wrapper" data-anim="cards">
						
						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/AI.mp4' ); ?>" type="video/mp4">
                                </video>
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">AI/ML & LLM Testing</h3>
								</div>
							</a>
						</div>
						

						<div class="swiper-slide">
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/automation-testing/') ); ?>">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/AutomationTesting.mp4' ); ?>" type="video/mp4">
                                </video>
                                <div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Automation Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/functional-testing/') ); ?>">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/FunctionalUsabilityTesting.mp4' ); ?>" type="video/mp4">
                                </video>
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Functional & Usability Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="<?php echo esc_url( site_url('/performance-testing/') ); ?>">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/PerformanceLoadTesting.mp4' ); ?>" type="video/mp4">
                                </video>
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Performance & Load Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/APITesting.mp4' ); ?>" type="video/mp4">
                                </video>
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">API & Integration Testing</h3>
								</div>
							</a>
						</div>

						<div class="swiper-slide">
							<a class="tv-service-card" href="#">
								<video class="tv-services__video" playsinline muted preload="auto">
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/Security.mp4' ); ?>" type="video/mp4">
                                </video>
								<div class="tv-service-card__overlay"></div>
								<div class="tv-service-card__content">
									<h3 class="tv-service-card__title" data-anim="fade-up">Security & Compliance Testing</h3>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="tv-slider-controls">
					<button class="tv-nav tv-nav-prev" aria-label="Previous slide" data-anim="fade-up">
						<span class="tv-arrow tv-arrow-left"></span>
					</button>

					<div class="tv-pagination" data-anim="fade-up"></div>

					<button class="tv-nav tv-nav-next" aria-label="Next slide" data-anim="fade-up">
						<span class="tv-arrow tv-arrow-right"></span>
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- TV Why Section -->
	<section class="tv-why" id="tvWhy">
		<div class="container">
			<div class="tv-why__head">
				<h1 data-anim="fade-up"><?php esc_html_e( 'Why Choose Us', 'hello-elementor' ); ?></h1>
				<h2 class="tv-why__title" data-anim="fade-up">
					<span class="tv-blue"><?php esc_html_e( 'Let us raise the standard of your software quality,', 'hello-elementor' ); ?></span> <?php esc_html_e( 'and keep it there.', 'hello-elementor' ); ?>
				</h2>
				<p class="tv-why__sub" data-anim="fade-up">
					<?php esc_html_e( 'Partner with us for reliable, efficient, and expert QA solutions that elevate your software quality.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="tv-why__stage" id="tvWhyStage">

				<!-- FIRST VIEW -->
				<div class="tv-why__cards" id="tvWhyCards">
					<article class="tv-whyCard tv-whyCard--left" id="tvWhyCardLeft">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chose-image-left.png' ); ?>" alt="Expertise">
						<div class="tv-whyCard__content">
							<h3><?php esc_html_e( 'Expertise', 'hello-elementor' ); ?></h3>
						</div>
					</article>

					<article class="tv-whyCard tv-whyCard--center" id="tvWhyCardCenter">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/why-chose-img-01.png' ); ?>" alt="Cutting-Edge Tools">
					<div class="tv-whyCard__content">
						<h3><?php esc_html_e( 'Customer-Centric Approach', 'hello-elementor' ); ?><br><?php esc_html_e( 'Tools', 'hello-elementor' ); ?></h3>
						<p><?php esc_html_e( 'Tailored QA services with transparent communication and collaboration.', 'hello-elementor' ); ?></p>
					</div>
					</article>

					<article class="tv-whyCard tv-whyCard--right" id="tvWhyCardRight">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chose-image-right.png' ); ?>" alt="Customer-centric approach">
					<div class="tv-whyCard__content">
						<h3><?php esc_html_e( 'Commitment to Quality', 'hello-elementor' ); ?><br><?php esc_html_e( 'centric', 'hello-elementor' ); ?></h3>
					</div>
					</article>
				</div>

				<!-- SECOND VIEW -->
				<div class="tv-why__sliderWrap" id="tvWhySliderWrap">
					<div class="tv-stack" id="tvWhyStack">
					<div class="tv-stack__cards">

						<article class="tv-stack__card">
						<div class="tv-slide2">
							<div class="tv-slide2__media">
							<div class="tv-mediaCard">
								<span class="tv-mediaCard__plate1"></span>
								<span class="tv-mediaCard__plate2"></span>
								<div class="tv-mediaCard__inner">
								<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/why-chose-img-01.png' ); ?>" alt="Commitment to Quality">
								<div class="tv-mediaCard__content">
									<h3>Commitment to Quality</h3>
									<p>Rigorous testing standards that ensure reliable and production-ready software.</p>
								</div>
								</div>
							</div>
							</div>

							<div class="tv-slide2__content">
							<h3 class="tv-slide2__title">
								<span class="tv-blue">Our Story</span>
								Driven by Quality
							</h3>
							<p class="tv-slide2__text">
								Quality is at the core of everything we do. Through thorough testing practices and continuous improvement, we ensure every release meets the highest standards of reliability and performance.
							</p>
							<a class="tv-cta-pill" href="#">
								Learn More <span class="tv-caret"></span>
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
								<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chose-image-left.png' ); ?>" alt="Expertise">
								<div class="tv-mediaCard__content">
									<h3>Expertise</h3>
									<p>Comprehensive QA powered by automation, modern tools, and proven testing practices.</p>
								</div>
								</div>
							</div>
							</div>

							<div class="tv-slide2__content">
							<h3 class="tv-slide2__title">
								<span class="tv-blue">Our Story</span>
								Built on
								Expertise
							</h3>
							<p class="tv-slide2__text">
								We combine proven testing practices, automation frameworks, and industry experience to deliver consistent and dependable software quality.
							</p>
							<a class="tv-cta-pill" href="#">
								Explore Expertise <span class="tv-caret"></span>
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
								<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chose-image-right.png' ); ?>" alt="Customer-centric approach">
								<div class="tv-mediaCard__content">
									<h3>Customer-<br>centric<br>approach</h3>
									<p>We adapt our testing process around your goals, timelines, users, and product priorities.</p>
								</div>
								</div>
							</div>
							</div>

							<div class="tv-slide2__content">
							<h3 class="tv-slide2__title">
								<span class="tv-blue">Our Story</span>
								Focused on
								Your Success
							</h3>
							<p class="tv-slide2__text">
								We work closely with product and engineering teams to deliver tailored QA services, meaningful testing insights, and clear, timely reporting that align with your business needs.
							</p>
							<a class="tv-cta-pill" href="#">
								See Approach <span class="tv-caret"></span>
							</a>
							</div>
						</div>
						</article>

					</div>

					<div class="tv-stack__controls">
						<button class="tv-stack__arrow tv-stack__arrow--prev" type="button" aria-label="Previous slide">
						<span class="tv-arrow tv-arrow-left"></span>
						</button>

						<div class="tv-stack__dots"></div>

						<button class="tv-stack__arrow tv-stack__arrow--next" type="button" aria-label="Next slide">
						<span class="tv-arrow tv-arrow-right"></span>
						</button>
					</div>
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
							$image_url = get_stylesheet_directory_uri() . '/html-v2/assets/images/insights-img-01.jpg';
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

	<?php get_template_part( 'template-parts/v2/testimonial-slider' ); ?>

</main>

<?php
get_footer( 'v2' );

