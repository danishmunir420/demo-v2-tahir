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
			<div class="sub-pg-video-banner">
					<video class="tv-banner__video" autoplay playsinline muted preload="metadata">
					<source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/AboutBanner.mp4' ); ?>" type="video/mp4">
					</video>
				</div>
			<div class="tv-about-banner__wrap">
				<div class="tv-about-banner__tagline js-hero-bg">
					<h1><?php esc_html_e( 'Services', 'hello-elementor' ); ?></h1>
				</div>
				<div class="tv-about-banner__content">
					<div class="banner-outer-img banner-outer-img-02 js-hero-person">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/services-banner-img-01.png' ); ?>" alt="<?php esc_attr_e( 'Services visual', 'hello-elementor' ); ?>" data-anim="image">
					</div>
					<h2 data-anim="fade-up">
						<?php esc_html_e( 'Next- QAGen,', 'hello-elementor' ); ?><br>
						<?php esc_html_e( 'Flawless Software', 'hello-elementor' ); ?>
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
				<div class="tv-testing-left">
					<div class="tv-testing-media is-active">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/AutomationTesting.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>

					<div class="tv-testing-media">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/FunctionalUsabilityTesting.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>

					<div class="tv-testing-media">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/PerformanceLoadTesting.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>
					<div class="tv-testing-media">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/Security.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>
					<div class="tv-testing-media">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/AI.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>
					<div class="tv-testing-media">
					  <video class="tv-services__video" playsinline muted preload="auto" loop>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/services/APITesting.mp4' ); ?>" type="video/mp4">
                      </video>
					</div>
				 </div>

				<div class="tv-testing-right">
					<div class="tv-stack tv-stack--testing">

						<div class="tv-stack__cards">
							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Automation Testing', 'hello-elementor' ); ?></span>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Automate repetitive tests with intelligent, AI-powered solutions.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Functional &', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'useability Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Ensure every feature works correctly and delivers a smooth user experience.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Performance &', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'Load Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Measure speed, stability, and scalability under real-world conditions.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>

							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'Security &', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'Compliance Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Detect vulnerabilities and ensure regulatory compliance.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>
							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'AI/ML &', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( 'AI/ML & LLM Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Validate model accuracy, reliability, and safety for AI systems.', 'hello-elementor' ); ?>
									</p>
								</div>
							</article>
							<article class="tv-stack__card">
								<div class="tv-testing-inner text-center">
									<h3 class="tv-testing-title" data-anim="fade">
										<span class="tv-testing-blue"><?php esc_html_e( 'API &', 'hello-elementor' ); ?></span><br>
										<?php esc_html_e( '& Integration Testing', 'hello-elementor' ); ?>
									</h3>
									<p class="tv-testing-text" data-anim="fade">
										<?php esc_html_e( 'Verify seamless communication between systems and services.', 'hello-elementor' ); ?>
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

