<?php
/**
 * Template Name: About V2
 * Description: About Us page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'v2' );
?>

<main id="main">

	<!-- Inner Banner -->
	<section class="tv-about-banner">
		<div class="tv-banner-inner">
			<div class="tv-about-banner__image  js-hero-bg">
				<div class="sub-pg-video-banner">
					
					
					<video
						class="tv-banner__video"
						autoplay
						playsinline
						muted
						loop
						preload="auto"
						poster="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/banner-img.jpg' ); ?>"
					  >
						<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/AboutBanner.mp4' ); ?>" type="video/mp4">
					  </video>
				</div>
			  </div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1 data-anim="title"><?php esc_html_e( 'About Us', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img js-hero-person">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/banner-person-img.png' ); ?>" alt="<?php esc_attr_e( 'About us Banner', 'hello-elementor' ); ?>" data-anim="image">
					</div>
					<h2 class="js-hero-sub" data-anim="fade-up">
						<?php esc_html_e( 'Committed to Excellence,', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Driven by Quality', 'hello-elementor' ); ?>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Belief section -->
	<section class="tv-about-belief py-5">
		<div class="container">
			<div class="tv-about-belief__mark mb-4" aria-hidden="true">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/top-section-icon.svg' ); ?>" alt="" data-anim="fade-up">
			</div>

			<div class="text-center">
				<h2 class="tv-about-belief__title mb-3" data-anim="fade-up">
					<span class="tv-about-belief__blue" data-anim="fade-up"><?php esc_html_e( 'At Testiva, We Believe', 'hello-elementor' ); ?></span>
					<span class="tv-about-belief__dark" data-anim="fade-up">
						<?php esc_html_e( 'Quality Is', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'The Foundation Of Success.', 'hello-elementor' ); ?>
					</span>
				</h2>

				<p class="tv-about-belief__text mx-auto mb-5" data-anim="fade-up">
					<?php esc_html_e( 'Our experienced QA team combines deep technical expertise with proven testing practices to ensure your software performs flawlessly. From manual and automation testing to performance and security, we deliver QA services tailored to your needs.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="left">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-01.svg' ); ?>" alt="" data-anim="fade-up">
						</div>
						<p class="tv-about-belief-card__text" data-anim="fade-up">
							<?php esc_html_e( 'We provide a full range of top-tier testing services under one roof.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="zoom">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-02.svg' ); ?>" alt="" data-anim="fade-up">
						</div>
						<p class="tv-about-belief-card__text" data-anim="fade-up">
							<?php esc_html_e( 'Our team of professionals brings a wealth of industry experience.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="right">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-03.svg' ); ?>" alt="" data-anim="fade-up">
						</div>
						<p class="tv-about-belief-card__text" data-anim="fade-up">
							<?php esc_html_e( 'We are dedicated to delivering superior quality in every project.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Story -->
	<section class="tv-story py-5 tv-story-block">
		<div class="container">
			<div class="text-center tv-story__head">
				<h2 class="tv-story__title mb-3" data-anim="fade-up">
					<span class="tv-story__blue" data-anim="fade-up"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></span>
					<span class="tv-story__dark" data-anim="fade-up">
						<?php esc_html_e( 'From', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Passion to Precision', 'hello-elementor' ); ?>
					</span>
				</h2>

				<p class="tv-story__lead mx-auto" data-anim="fade-up">
					<?php esc_html_e( 'What started as a small group of passionate testers has grown into a trusted QA team helping startups and enterprises deliver flawless software. We built our reputation on attention to detail, strong communication, and a commitment to continuous improvement.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="tv-story-grid">
				<div class="tv-col-left">
					<h3 class="tv-story-title" data-anim="left"><?php esc_html_e( 'Our Mission', 'hello-elementor' ); ?></h3>
					<p class="tv-story-text" data-anim="left">
						<?php esc_html_e( 'We aim to bridge the gap between development and quality by becoming a trusted QA partner for startups and enterprises seeking software excellence.', 'hello-elementor' ); ?>
					</p>

					<div class="tv-story-card tv-story-card--small position-relative">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/our-story-01.png' ); ?>" alt="<?php esc_attr_e( 'Team working', 'hello-elementor' ); ?>" data-anim="right">
						<span class="tv-story-accent" aria-hidden="true">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/story-corner-icon.svg' ); ?>" alt="" data-anim="right">
						</span>
					</div>
				</div>

				<div class="tv-col-right">
					<div class="tv-story-card tv-story-card--big position-relative">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/story-img-01.png' ); ?>" alt="<?php esc_attr_e( 'Team discussion', 'hello-elementor' ); ?>" data-anim="left">
						<div class="tv-story-mark-bottom" aria-hidden="true">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/story-corner-black.svg' ); ?>" alt="" data-anim="left">
						</div>
					</div>

					<div class="tv-story-vision">
						<h3 class="tv-story-title" data-anim="right"><?php esc_html_e( 'Our Vision', 'hello-elementor' ); ?></h3>
						<p class="tv-story-text" data-anim="right">
							<?php esc_html_e( 'To empower businesses worldwide by ensuring every digital experience is seamless, secure, and user-centric.', 'hello-elementor' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Benefits stack -->
	<section class="tv-benefits">
		<div class="container">
			<div class="tv-stack" id="tvBenefitsStack">
				<div class="tv-stack__cards">
					<article class="tv-stack__card is-active">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Why choose us?', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Proven Expertise', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Our team combines years of QA experience with AI-powered testing and modern tools to ensure flawless software.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Why choose us?', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Faster, Smarter Testing', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'We use streamlined processes and intelligent automation to reduce time-to-release without sacrificing quality.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Why choose us?', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Reliable Results', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Comprehensive testing ensures fewer bugs, stable releases, and minimized production risks.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Why choose us?', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Release with Confidence', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Clear insights and reporting empower teams to make confident decisions.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>
				</div>

				<div class="tv-stack__dots" aria-label="<?php esc_attr_e( 'Benefits pagination', 'hello-elementor' ); ?>" data-anim="fade-up"></div>
			</div>
		</div>
	</section>

	<!-- Our Values -->
	<section class="tv-values">
		<div class="container">
			<div class="row g-5 align-items-start">
				<div class="col-lg-6">
					<div class="tv-values__kicker mb-3" data-anim="left"><?php esc_html_e( 'Our Values', 'hello-elementor' ); ?></div>

					<h2 class="tv-values__title mb-4" data-anim="left">
						<?php esc_html_e( 'At Testiva, We Are Committed To Delivering Excellence And Quality In Every Test We Conduct.', 'hello-elementor' ); ?>
					</h2>

					<p class="tv-values__text mb-0" data-anim="left">
						<?php esc_html_e( 'Through clear communication, innovation, and robust infrastructure, we ensure seamless results. Our collaborative approach helps us exceed client expectations and drive success.', 'hello-elementor' ); ?>
					</p>
				</div>

				<div class="col-lg-6">
					<div class="tv-values__scroll">
						<div class="tv-values__list" data-anim="right">
							<article class="tv-values-item">
								<h3 class="tv-values-item__title" data-anim="fade-up"><?php esc_html_e( 'Excellence', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc" data-anim="fade-up">
									<?php esc_html_e( 'We are committed to delivering exceptional results on every project.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title" data-anim="fade-up"><?php esc_html_e( 'Integrity', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc" data-anim="fade-up">
									<?php esc_html_e( 'We operate with transparency and accountability, building trust with our clients.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title" data-anim="fade-up"><?php esc_html_e( 'Continuous Learning', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc" data-anim="fade-up">
									<?php esc_html_e( 'We are always seeking new ways to improve and innovate, ensuring we provide the best services.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title" data-anim="fade-up"><?php esc_html_e( 'Collaboration', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc" data-anim="fade-up">
									<?php esc_html_e( 'We collaborate closely with our partners to understand their goals and deliver beyond expectations.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title" data-anim="fade-up"><?php esc_html_e( 'Effective Communication', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc" data-anim="fade-up">
									<?php esc_html_e( 'We maintain transparent, timely communication to keep you informed and involved, ensuring reliable results.', 'hello-elementor' ); ?>
								</p>
							</article>

						</div>
					</div>
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
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade-up">
									“Testiva is a great team to work with. I’ve hired them multiple times and recommended them to others, all impressed by their thorough work. Highly recommended for QA.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Steve Brickman</div>
									<div class="tv-testimonial__role" data-anim="fade-up">Director of Technology @ mscripts
</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p data-anim="fade-up" class="tv-testimonial__quote">
									“Testiva team is highly skilled and extremely thorough. I trust them for accurate and timely delivery. They are a reliable resource for any project.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Chaya Feigelstock</div>
									<div class="tv-testimonial__role" data-anim="fade-up">Senior Marketing Coordinator @ Nextiva</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p data-anim="fade-up" class="tv-testimonial__quote">
									“Testiva team delivered outstanding quality with great professionalism. Communication was excellent and delivery met expectations. Highly recommended.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Hussein Khazaal.</div>
									<div class="tv-testimonial__role" data-anim="fade-up">Founder & CEO @ Feenix.ai</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo">
							</div>

							<div class="tv-testimonial__card">
								<p data-anim="fade-up" class="tv-testimonial__quote">
									“Excellent team worked well with minimal supervision and did a great job. Their work helped us improve the robustness of the platform.”
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Murray Bryant</div>
									<div class="tv-testimonial__role" data-anim="fade-up">Co-Founder / CTO @ Global Recruit Co.</div>
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

