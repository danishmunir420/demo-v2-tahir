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
					<video class="tv-banner__video" autoplay playsinline muted loop preload="metadata">
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

					<button class="tv-cases__tab" type="button" data-filter="healthcare" role="tab" aria-selected="false">
						<?php esc_html_e( 'Healthcare', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					<button class="tv-cases__tab" type="button" data-filter="ai" role="tab" aria-selected="false">
						<?php esc_html_e( 'AI', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					

					<button class="tv-cases__tab" type="button" data-filter="saas" role="tab" aria-selected="false">
						<?php esc_html_e( 'SaaS', 'hello-elementor' ); ?>
					</button>
					<span class="tv-cases__sep">|</span>

					
				</div>
			</div>

			<div class="tv-cases__grid">

				<!-- Machine Medicine Technologies (MMT) - Healthcare -->
				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/machine-medicine-technologies/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-60-1.jpg' ) ); ?>" alt="Machine Medicine Technologies (MMT)" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Machine Medicine Technologies (MMT)</h3>
					<p class="tv-case__desc" data-anim="fade-up">Machine Medicine Technologies uses AI-powered video analysis to assess and track motor function for neurological conditions.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Functional Testing</span><span>Automation Testing</span><span>Compatibility Testing</span>
					</div>
				</article>

				<!-- OMED - Healthcare -->
				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/omed/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-62.jpg' ) ); ?>" alt="OMED" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">OMED</h3>
					<p class="tv-case__desc" data-anim="fade-up">OMED Health provides digital health solutions for monitoring and managing gut health.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Functional Testing</span><span>Mobile QA</span><span>Test Cases</span>
					</div>
				</article>

				<!-- YOU(th) Health App - Healthcare + AI -->
				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/youth-health-app/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-66.jpg' ) ); ?>" alt="YOU(th) Health App" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">YOU(th) Health App</h3>
					<p class="tv-case__desc" data-anim="fade-up">YOU(th) Health provides AI-driven health assessments using smartphones for quick and comprehensive check-ups.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Mobile App Testing</span><span>Test Cases</span><span>Jira</span>
					</div>
				</article>
				
				<!-- FreeAdCopy - AI -->
				<article class="tv-case" data-category="ai">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/freeadcopy/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-57.png' ) ); ?>" alt="FreeAdCopy" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">FreeAdCopy</h3>
					<p class="tv-case__desc" data-anim="fade-up">FreeAdCopy is an AI-powered content generation platform designed to create high-converting ad copy efficiently.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>AI</span><span>Test Automation</span><span>API Testing</span>
					</div>
				</article>
				

				

				<!-- FLEXiSKiP -->
				<article class="tv-case" data-category="all">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/flexiskip/' ) ); ?>">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-05.jpg' ); ?>" alt="FLEXiSKiP" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">FLEXiSKiP</h3>
					<p class="tv-case__desc" data-anim="fade-up">FlexiSkip is a waste management service providing on-demand skip bin delivery and collection through a digital platform.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Automation Testing</span><span>Usability Testing</span><span>Manual Testing</span>
					</div>
				</article>

				<!-- Workshift - SaaS -->
				<article class="tv-case" data-category="saas">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/workshift/' ) ); ?>">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-06.jpg' ); ?>" alt="Workshift" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Workshift</h3>
					<p class="tv-case__desc" data-anim="fade-up">WorkShift is a scheduling platform that helps businesses manage employee shifts and workforce planning efficiently.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Mobile App Testing</span><span>Web Testing</span><span>Bug Reporting</span>
					</div>
				</article>

				<!-- Kido Protect - Healthcare -->
				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/kido-protect/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-58.png' ) ); ?>" alt="Kido Protect" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Kido Protect</h3>
					<p class="tv-case__desc" data-anim="fade-up">Kido Protect offers digital identity protection and online safety solutions for children.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Mobile Apps Testing</span><span>Manual Testing</span><span>Bug Reporting</span>
					</div>
				</article>

				<!-- Sun Communities - Dealership add it all-->
				<article class="tv-case" data-category="all">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/sun-communities/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/05/Frame-68.png' ) ); ?>" alt="Sun Communities" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Sun Communities</h3>
					<p class="tv-case__desc" data-anim="fade-up">Sun Communities is a real estate investment trust specializing in manufactured housing and RV communities.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Functional Testing</span><span>Automation Testing</span><span>Usability Testing</span>
					</div>
				</article>

				<!-- Nextiva -->
				<article class="tv-case" data-category="all">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/nextiva/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-61.jpg' ) ); ?>" alt="Nextiva" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Nextiva</h3>
					<p class="tv-case__desc" data-anim="fade-up">Nextiva is a cloud-based platform offering VoIP, video conferencing, and customer engagement tools for businesses.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Functional Testing</span><span>Compatibility Testing</span><span>Bug Reporting</span>
					</div>
				</article>

				<!-- MAVEN X -->
				<article class="tv-case" data-category="all">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/maven-x/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/05/Frame-72.png' ) ); ?>" alt="MAVEN X" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">MAVEN X</h3>
					<p class="tv-case__desc" data-anim="fade-up">MENA’s Premier Live Streaming Platform for Gamers.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Performance Testing</span><span>Functional Testing</span><span>API Testing</span>
					</div>
				</article>

				<!-- Loadster -->
				<article class="tv-case" data-category="all">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/loadster/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/05/Frame-73.png' ) ); ?>" alt="Loadster" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">Loadster</h3>
					<p class="tv-case__desc" data-anim="fade-up">Loadster is a cloud-based load testing tool for web apps and APIs.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Performance Testing</span><span>Quality Assurance</span>
					</div>
				</article>

				<!-- TCM Mobile App - Healthcare -->
				<article class="tv-case" data-category="healthcare">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/tcm-mobile-app/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/05/Frame-70.png' ) ); ?>" alt="TCM Mobile App" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">TCM Mobile App</h3>
					<p class="tv-case__desc" data-anim="fade-up">TCM Mobile is a reference guide app for Traditional Chinese Medicine.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Mobile App Testing</span><span>Usability Testing</span><span>Manual Testing</span>
					</div>
				</article>

				<!-- SaaS Application Automation - SaaS -->
				<article class="tv-case" data-category="saas">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/saas-application-automation/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-64.png' ) ); ?>" alt="SaaS Application Automation" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">SaaS Application Automation</h3>
					<p class="tv-case__desc" data-anim="fade-up">Automated SaaS web app with Cypress + JavaScript in a DDT framework.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Automation Testing</span><span>CI/CD</span><span>JavaScript</span>
					</div>
				</article>
				<article class="tv-case" data-category="ai">
					<a class="tv-case__media" href="<?php echo esc_url( home_url( '/projects/youth-health-app/' ) ); ?>">
						<img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-66.jpg' ) ); ?>" alt="YOU(th) Health App" data-anim="fade-up">
					</a>
					<h3 class="tv-case__title" data-anim="fade-up">YOU(th) Health App</h3>
					<p class="tv-case__desc" data-anim="fade-up">YOU(th) Health provides AI-driven health assessments using smartphones for quick and comprehensive check-ups.</p>
					<div class="tv-case__tags" data-anim="fade-up">
						<span>Mobile App Testing</span><span>Test Cases</span><span>Jira</span>
					</div>
				</article>

			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/v2/testimonial-slider' ); ?>
</main>

<?php
get_footer( 'v2' );

