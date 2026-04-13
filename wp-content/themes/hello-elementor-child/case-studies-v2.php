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
			<div class="sub-pg-video-banner">
					<video class="tv-banner__video" autoplay playsinline muted preload="metadata">
					<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/CaseStudies-banner.mp4' ); ?>" type="video/mp4">
					</video>
				</div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1><?php esc_html_e( 'Case Studies', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img banner-outer-img-03 js-hero-person">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-std-img-inner.png' ); ?>" alt="<?php esc_attr_e( 'Case study visual', 'hello-elementor' ); ?>" data-anim="image">
					</div>
					<h2 data-anim="fade-up">
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
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-01.jpg' ); ?>" alt="Freeadcopy.com" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Freeadcopy.com</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="saas">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-02.jpg' ); ?>" alt="dmuscle.com" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">dmuscle.com</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="dealership">
					<a class="tv-case__media" href="<?php echo esc_url(site_url('/projects/sun-communities')); ?>">
						<img src="<?php echo site_url('/wp-content/uploads/2025/05/Frame-68.png'); ?>" alt="Sun Communities" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Sun Communities</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Sun Communities is a real estate investment trust specializing in manufactured housing and RV communities.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Functional Testing</span><span>Automation Testing</span><span>Usability Testing</span><span>Mobile App Testing</span><span>Wrike</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-04.jpg' ); ?>" alt="India wide" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">India wide</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-05.jpg' ); ?>" alt="India wide" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">India wide</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="#">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-06.jpg' ); ?>" alt="India wide" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">India wide</h3>
					<p class="tv-case__desc" data-anim="fade-up"><?php esc_html_e( 'Provided advanced Quality Assurance solutions.', 'hello-elementor' ); ?></p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>UI/UX</span><span>Mobile App</span><span>Ecommerce</span>
					</div>
				</article>

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

