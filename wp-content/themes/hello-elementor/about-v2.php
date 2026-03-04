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
			<div class="tv-about-banner__image js-hero-bg">
				<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/banner-inner-img.png' ); ?>" alt="<?php esc_attr_e( 'About us Banner', 'hello-elementor' ); ?>">
			</div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1 data-anim="title"><?php esc_html_e( 'About Us', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img js-hero-person">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/banner-person-img.png' ); ?>" alt="<?php esc_attr_e( 'About us Banner', 'hello-elementor' ); ?>" data-anim="image">
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
				<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/top-section-icon.svg' ); ?>" alt="" data-anim="image">
			</div>

			<div class="text-center">
				<h2 class="tv-about-belief__title mb-3" data-anim="title">
					<span class="tv-about-belief__blue"><?php esc_html_e( 'At Testiva, We Believe', 'hello-elementor' ); ?></span>
					<span class="tv-about-belief__dark">
						<?php esc_html_e( 'That Quality Is', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'The Foundation Of Success.', 'hello-elementor' ); ?>
					</span>
				</h2>

				<p class="tv-about-belief__text mx-auto mb-5" data-anim="fade-up">
					<?php esc_html_e( 'Our expert team brings years of experience and deep technical knowledge to every project, ensuring that your software performs flawlessly. From manual testing to automation, performance testing to security, we offer a wide range of services tailored to meet your unique needs.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="left">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/b-icon-01.svg' ); ?>" alt="">
						</div>
						<p class="tv-about-belief-card__text">
							<?php esc_html_e( 'We provide a full range of top-tier testing services under one roof.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="zoom">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/b-icon-02.svg' ); ?>" alt="">
						</div>
						<p class="tv-about-belief-card__text">
							<?php esc_html_e( 'Our team of professionals brings a wealth of industry experience.', 'hello-elementor' ); ?>
						</p>
					</article>
				</div>

				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="right">
						<div class="tv-about-belief-card__icon" aria-hidden="true">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/b-icon-03.svg' ); ?>" alt="">
						</div>
						<p class="tv-about-belief-card__text">
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
					<span class="tv-story__blue"><?php esc_html_e( 'Our Story', 'hello-elementor' ); ?></span>
					<span class="tv-story__dark">
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
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/our-story-01.png' ); ?>" alt="<?php esc_attr_e( 'Team working', 'hello-elementor' ); ?>" data-anim="right">
						<span class="tv-story-accent" aria-hidden="true">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/story-corner-icon.svg' ); ?>" alt="" data-anim="right">
						</span>
					</div>
				</div>

				<div class="tv-col-right">
					<div class="tv-story-card tv-story-card--big position-relative">
						<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/story-img-01.png' ); ?>" alt="<?php esc_attr_e( 'Team discussion', 'hello-elementor' ); ?>" data-anim="left">
						<div class="tv-story-mark-bottom" aria-hidden="true">
							<img src="<?php echo esc_url( HELLO_THEME_URL . '/html-v2/assets/images/story-corner-black.svg' ); ?>" alt="" data-anim="left">
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
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Key Benefits', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Expertise', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Our experts bring a broad range of experience and industry insights.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Key Benefits', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Efficiency', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Streamlined processes reduce time-to-release without compromising quality.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Key Benefits', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Reliability', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Consistent coverage ensures stable releases and fewer production issues.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>

					<article class="tv-stack__card">
						<div class="tv-benefits-inner text-center">
							<div class="tv-benefits-kicker" data-anim="fade-up"><?php esc_html_e( 'Key Benefits', 'hello-elementor' ); ?></div>
							<h2 class="tv-benefits-title" data-anim="fade-up"><?php esc_html_e( 'Confidence', 'hello-elementor' ); ?></h2>
							<p class="tv-benefits-text" data-anim="fade-up">
								<?php esc_html_e( 'Clear reporting helps teams ship with certainty.', 'hello-elementor' ); ?>
							</p>
						</div>
					</article>
				</div>

				<div class="tv-stack__dots" aria-label="<?php esc_attr_e( 'Benefits pagination', 'hello-elementor' ); ?>"></div>
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
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Excellence', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'We are committed to delivering exceptional results on every project.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Integrity', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'We operate with transparency and accountability, building trust with our clients.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Continuous Learning', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'We are always seeking new ways to improve and innovate, ensuring we provide the best services.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Collaboration', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'We collaborate closely with our partners to understand their goals and deliver beyond expectations.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Effective Communication', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'We maintain transparent, timely communication to keep you informed and involved, ensuring reliable results.', 'hello-elementor' ); ?>
								</p>
							</article>

							<article class="tv-values-item">
								<h3 class="tv-values-item__title"><?php esc_html_e( 'Robust Infrastructure', 'hello-elementor' ); ?></h3>
								<p class="tv-values-item__desc">
									<?php esc_html_e( 'With cutting-edge remote tools, we deliver efficient, secure, and globally accessible testing services anytime, anywhere.', 'hello-elementor' ); ?>
								</p>
							</article>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials -->
	<section class="tv-testimonials py-5">
		<div class="container">
			<h2 class="tv-testimonials__title text-center mb-5" data-anim="fade-up">
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
								<p class="tv-testimonial__quote" data-anim="fade-up">
									<?php esc_html_e( '“Superior Space’s user-friendly design and robust features have empowered our team to create a site that truly stands out in our industry.”', 'hello-elementor' ); ?>
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">Butterfly Studio</div>
									<div class="tv-testimonial__role" data-anim="fade-up"><?php esc_html_e( 'OUR ANOTHER TEMPLATE', 'hello-elementor' ); ?></div>
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
								<p class="tv-testimonial__quote" data-anim="fade-up">
									<?php esc_html_e( '“Testiva helped us release faster with fewer defects. Their process and reporting made QA predictable and reliable.”', 'hello-elementor' ); ?>
								</p>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up">David C.</div>
									<div class="tv-testimonial__role" data-anim="fade-up"><?php esc_html_e( 'PRODUCT LEAD', 'hello-elementor' ); ?></div>
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

