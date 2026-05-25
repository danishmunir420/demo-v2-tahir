<?php
/**
 * Template Name: Healthcare QA V2
 * Description: Healthcare QA landing page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'v2.1' );
?>

<main id="main">
	<section class="tv-healthcare-hero">
		<div class="container">
			<div class="tv-healthcare-hero__content">
				<h1 class="tv-healthcare-hero__title" data-anim="fade-up"><span class="tv-blue">Powering Safe HealthTech </span> with AI-Driven QA</h1>
				<p class="tv-healthcare-hero__subtitle" data-anim="fade-up">Helping healthtech organizations deliver safe, compliant, and reliable software through AI driven QA services.
</p>
				<ul class="tv-healthcare-hero__features">
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Healthtech-Specialized Testers</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Flexible Engagement Models</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Latest Testing Tools</li>
				</ul>
				<div class="tv-healthcare-hero__actions">
					<a href="#qa-services" class="tv-btn tv-btn--primary" data-anim="fade-up">BOOK A CALL <span class="tv-caret-white" aria-hidden="true"></span></a>
					<a href="#qa-plans" class="tv-btn tv-btn--outline-dark" data-anim="fade-up">VIEW PLANS <span class="tv-carter-black" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="tv-healthcare-hero__media" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/HealthCare-banner-img.jpg' ); ?>" alt="Healthcare QA team working on software testing">
			</div>
			<div class="tv-healthcare-hero__stats">
				<div class="tv-stat"><h3 data-anim="fade-up">20+</h3><p data-anim="fade-up">HealthTech Applications Tested</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">90%</h3><p data-anim="fade-up">Fewer Critical Bugs</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">3x</h3><p data-anim="fade-up">Faster Development Cycle</p></div>
			</div>
		</div>
	</section>

	<section class="tv-about-belief tv-health-about py-5" id="qa-services">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Independent QA Services for</span> Healthcare Startups</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We support every stage of product development with reliable, domain-aligned quality assurance.</p>
			</div>

			<!--Cards-->
        <div class="tv-healthcare-grid__wrap">

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.3">
			<a href="<?php echo esc_url( '/healthcare-qa/telemedicine-virtual-care/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-01.jpg' ); ?>" alt="Telemedicine & Virtual Care">

            <div class="tv-healthcare-card__title">Telemedicine &amp; Virtual Care</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.6">
			<a href="<?php echo esc_url( '/healthcare-qa/electronic-health-records-ehr-emr/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-02.jpg' ); ?>" alt="Electronic Health Records">
            <div class="tv-healthcare-card__title">Electronic Health Records (EHR/EMR)</div>
</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.9">
			<a href="<?php echo esc_url( '/healthcare-qa/medtech-and-medical-devices/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-03.jpg' ); ?>" alt="MedTech and Medical Devices">
            <div class="tv-healthcare-card__title">MedTech and Medical Devices</div>
</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.3">
			<a href="<?php echo esc_url( '/healthcare-qa/wellness-fitness-apps/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-04.jpg' ); ?>" alt="Wellness & Fitness Apps">
            <div class="tv-healthcare-card__title">Wellness &amp; Fitness Apps</div>
</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.6">
			<a href="<?php echo esc_url( '/healthcare-qa/home-healthcare-digital-care/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-05.jpg' ); ?>" alt="Home Healthcare & Digital Care">
            <div class="tv-healthcare-card__title">Home Healthcare &amp; Digital Care</div>
</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.9">
			<a href="<?php echo esc_url( '/healthcare-qa/remote-patient-monitoring/' ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/service-img-06.jpg' ); ?>" alt="Remote patient monitoring">
            <div class="tv-healthcare-card__title">Remote patient monitoring</div>
</a>
          </article>

        </div>
		</div>
	</section>

	<section class="tv-section tv-regulated-env">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Built for</span> Regulated<br>Environments</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We design QA that aligns with compliance requirements in healthcare.</p>
			</div>
			<div class="tv-regulated-env__logos">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/Hippa-logo.png' ); ?>" alt="HIPAA" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/GDPR-logo.png' ); ?>" alt="GDPR" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/FDA-logo.png' ); ?>" alt="FDA" data-anim="fade-up">
			</div>
		</div>
	</section>
	
	<!-- /How it work/ -->
    <section class="tv-process-steps">
      <div class="container">
        <div class="tv-process-steps__head">
          <span class="tv-process-steps__eyebrow" data-anim="fade-up">HOW IT WORKS</span>
          <h2 data-anim="fade-up">Up and running in 4 simple steps</h2>
          <p data-anim="fade-up">
            From first contact to your first test report — a process designed to be fast,
            transparent and low-friction.
          </p>
        </div>

        <div class="tv-process-steps__grid">
          <article class="tv-process-step">
            <div class="tv-process-step__icon">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dsicovery-icon.svg' ); ?>" alt="">
            </div>
            <h3>Discovery Call</h3>
            <p>We learn your platform, tech stack, and testing priorities in a focused 30-minute session.</p>
          </article>

          <article class="tv-process-step">
            <div class="tv-process-step__arrow"></div>
            <div class="tv-process-step__icon">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/QA-audit-icon.svg' ); ?>" alt="">
            </div>
            <h3>QA Audit &amp; Plan</h3>
            <p>We audit your current test coverage and deliver a tailored testing strategy and test case plan.</p>
          </article>

          <article class="tv-process-step">
            <div class="tv-process-step__arrow"></div>
            <div class="tv-process-step__icon">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/test-EX-icon.svg' ); ?>" alt="">
            </div>
            <h3>Test Execution</h3>
            <p>Our team runs manual and automated tests, logging every defect with full reproduction steps.</p>
          </article>

          <article class="tv-process-step">
            <div class="tv-process-step__arrow"></div>
            <div class="tv-process-step__icon">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/report-icon.svg' ); ?>" alt="">
            </div>
            <h3>Report &amp; Iterate</h3>
            <p>You receive a detailed report with severity ratings, trends, and recommendations for the next sprint.</p>
          </article>
        </div>
      </div>
    </section>

	<section class="tv-trusted" data-anim="section">
		<div class="container">
			<h2 class="tv-trusted__title text-center" data-anim="fade-up"><span class="tv-blue">Tools</span> We Use</h2>
			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-1.png' ); ?>" alt="Jira Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-2.png' ); ?>" alt="Notion Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-3.png' ); ?>" alt="Cpress logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-4.png' ); ?>" alt="Selenium Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-5.png' ); ?>" alt="Playwright logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-6.png' ); ?>" alt="Promoptfoo Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-7.png' ); ?>" alt="Deep L Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-8.png' ); ?>" alt="TestComplete logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-9.png' ); ?>" alt="Github"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-10.png' ); ?>" alt="JMeter Logo"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-values">
		<div class="container">
			<div class="row g-5 align-items-start">
				<div class="col-lg-6">
					<div class="tv-values__kicker mb-3" data-anim="fade-up">Why Testiva</div>
					<h2 class="tv-values__title mb-4" data-anim="fade-up">
						Testiva was built around one belief that HealthTech products deserve a QA partner who truly understands the industry.
					</h2>
					<p class="tv-values__text mb-0" data-anim="fade-up">
						Through deep HealthTech domain understanding, robust QA processes, and clear communication, we help teams deliver secure, compliant, and scalable applications that support better patient outcomes.

					</p>
				</div>
				<div class="col-lg-6">
					<div class="tv-values__scroll">
						<div class="tv-values__list">
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Expertise</h3><p class="tv-values-item__desc" data-anim="fade-up">HealthTech-focused QA powered by automation, modern tools, and regulatory-aware testing practices.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Customer-Centric Approach</h3><p class="tv-values-item__desc" data-anim="fade-up">Tailored QA solutions aligned with your workflows, ensuring seamless collaboration and transparency.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Commitment to Quality</h3><p class="tv-values-item__desc" data-anim="fade-up">Rigorous validation to ensure accuracy, reliability, and compliance in every release.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Integrity</h3><p class="tv-values-item__desc" data-anim="fade-up">Transparent processes and accountability to build long-term trust in regulated environments.</p></article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-section tv-selected-work">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Selected</span> Work</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We bring the industry’s best open-source and enterprise tools into your QA process.</p>
			</div>
			<div class="tv-selected-work__slider swiper">
				<div class="swiper-wrapper">

    <!-- 1. Machine Medicine Technologies (MMT) -->
    <div class="swiper-slide">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/machine-medicine-technologies/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-01.jpg' ); ?>" 
                     alt="Machine Medicine Technologies (MMT)">
            </a>
            <div class="tv-case-card__body">
                <h3 class="tv-case-card__title"><a href="<?php echo esc_url( home_url( '/projects/machine-medicine-technologies/' ) ); ?>">Machine Medicine Technologies (MMT)</a></h3>
                <p class="tv-case-card__text">Machine Medicine Technologies uses AI-powered video analysis to assess and track motor function for neurological conditions.</p>
                <ul class="tv-case-card__tags">
                    <li>Functional Testing</li>
                    <li>Automation Testing</li>
                    <li>Compatibility Testing</li>
                </ul>
            </div>
        </article>
    </div>

    <!-- 2. OMED -->
    <div class="swiper-slide">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/omed/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-02.jpg' ); ?>" alt="OMED">
            </a>
            <div class="tv-case-card__body">
                <h3 class="tv-case-card__title"><a href="<?php echo esc_url( home_url( '/projects/omed/' ) ); ?>">OMED</a></h3>
                <p class="tv-case-card__text">OMED Health provides digital health solutions for monitoring and managing gut health.</p>
                <ul class="tv-case-card__tags">
                    <li>Functional Testing</li>
                    <li>Mobile QA</li>
                    <li>Test Cases</li>
                </ul>
            </div>
        </article>
    </div>

    <!-- 3. YOU(th) Health App -->
    <div class="swiper-slide">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/youth-health-app/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-03.jpg' ); ?>" alt="YOU(th) Health App">
            </a>
            <div class="tv-case-card__body">
                <h3 class="tv-case-card__title"><a href="<?php echo esc_url( home_url( '/projects/youth-health-app/' ) ); ?>">YOU(th) Health App</a></h3>
                <p class="tv-case-card__text">YOU(th) Health provides AI-driven health assessments using smartphones for quick and comprehensive check-ups.</p>
                <ul class="tv-case-card__tags">
                    <li>Mobile App Testing</li>
                    <li>Test Cases</li>
                    <li>Jira</li>
                </ul>
            </div>
        </article>
    </div>

    <!-- 12. TCM Mobile App -->
    <div class="swiper-slide">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/tcm-mobile-app/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/05/Frame-70.png' ) ); ?>" alt="TCM Mobile App">
            </a>
            <div class="tv-case-card__body">
                <h3 class="tv-case-card__title"><a href="<?php echo esc_url( home_url( '/projects/tcm-mobile-app/' ) ); ?>">TCM Mobile App</a></h3>
                <p class="tv-case-card__text">TCM Mobile is a reference guide app for Traditional Chinese Medicine.</p>
                <ul class="tv-case-card__tags">
                    <li>Mobile App Testing</li>
                    <li>Usability Testing</li>
                    <li>Manual Testing</li>
                </ul>
            </div>
        </article>
    </div>

</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/v2/testimonial-slider' ); ?>

	<section class="tv-section tv-resource-plans" id="qa-plans">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Professional QA Resources</span><br>for Your Project</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">Choose the perfect QA solution for your needs. From part-time support to dedicated teams, we deliver quality assurance excellence.</p>
				<ul class="tv-resource-plans__badges">
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Certified QA Professionals</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Flexible Engagement Models</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Latest Testing Tools</li>
				</ul>
			</div>
			<div class="tv-resource-plans__grid">
				<article class="tv-plan-card">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Free QA Demo</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">A quick preview of how your product is tested and how we report real issues.</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$0</strong><span>/One-time trial</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Manual exploratory testing of 1 core workflow</li>
							<li data-anim="fade-up">Issue reproduction with annotated screenshots</li>
							<li data-anim="fade-up">Clear, actionable bug summary </li>
							<li data-anim="fade-up">Delivered within 48 hours</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3603" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Try Free QA Demo"]'); ?>
</div>
					</div>
				</article>

				<article class="tv-plan-card tv-plan-card--featured">
					<div class="tv-plan-card__badge" data-anim="fade-up">Most Popular</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Essential QA</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Focused on validating core functionality before release.</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$499</strong><span>/One-time engagement</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Functional testing of key features</li>
							<li data-anim="fade-up">Cross-browser & cross-device testing (mobile + desktop)</li>
							<li data-anim="fade-up">1 regression testing cycle</li>
							<li data-anim="fade-up">Structured bug reports with steps to reproduce</li>
							<li data-anim="fade-up">Summary report with recommendations</li>
							<li data-anim="fade-up">Delivered within 1 week</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3607" class="tv-plan-card__btn tv-plan-card__btn--primary" text="Start Essential QA"]'); ?></div>
					</div>
				</article>

				<article class="tv-plan-card">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Pro QA</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Comprehensive testing for production readiness.</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$1,999</strong><span>/Complete app evaluation</span></div>
						<ul class="tv-plan-card__list tv-plan-card__list--top">
							<li data-anim="fade-up">Comprehensive test coverage across all major user flows</li>
							<li data-anim="fade-up">Cross-browser & cross-device testing (mobile + desktop)</li>
							<li data-anim="fade-up">Real device testing + weak network simulation</li>
							<li data-anim="fade-up">Detailed reports with screenshots and screen recordings</li>
							<li data-anim="fade-up">2 full regression cycles</li>
							<li data-anim="fade-up">Priority issue tracking & validation</li>
							<li data-anim="fade-up">Dedicated QA support during the engagement</li>
							<li data-anim="fade-up">Delivered within 2 weeks</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3608" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Upgrade to Pro QA"]'); ?></div>
					</div>
				</article>

				<article class="tv-plan-card">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Dedicated QA Partner</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up"> A complete QA solution integrated into your development lifecycle.</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$3,999</strong><span>/Fully managed QA</span></div>
						<ul class="tv-plan-card__list tv-plan-card__list--top">
							<li data-anim="fade-up">Dedicated QA engineer aligned with your team</li>
							<li data-anim="fade-up">Full QA strategy (manual + automated testing)</li>
							<li data-anim="fade-up">Continuous testing integrated into CI/CD pipelines</li>
							<li data-anim="fade-up">Test automation for critical workflows</li>
							<li data-anim="fade-up">Compliance support (HIPAA / FDA / AI validation)</li>
							<li data-anim="fade-up">Traceability matrix + live reporting dashboard</li>
							<li data-anim="fade-up">Ongoing regression & release validation</li>
							<li data-anim="fade-up">Active participation in stand-ups, sprint planning & agile ceremonies</li>
							<li data-anim="fade-up">Availability tailored to your working hours</li>
							
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3609" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Book Dedicated QA Team" ]'); ?></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="tv-section tv-contact-cta">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Quality Isn’t Optional.</span><br>Let’s Talk.</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">From quick test coverage to full-scale QA teams, we<br>plug in exactly where you need us.</p>
			</div>

			<?php echo do_shortcode('[contact-form-7 id="51806b8" title="Let’s Talk for healthcare"]'); ?>
		</div>
	</section>
	<!-- <style>
		button.wpb-pcf-form-fire.wpb-pcf-btn-large.wpb-pcf-btn.wpb-pcf-btn-default {
    background-color: #2563EB !important;
    -webkit-transition-duration: 0.4s !important;
    transition-duration: 0.4s !important;
    -webkit-animation-duration: 0.4s !important;
    animation-duration: 0.4s !important;
    border-color: #E8E8E8 !important;
    border-style: none !important;
    border-radius: 8px 8px 8px 8px !important;
}

.book-dedicated-qa-contact-form h2 {
  font-weight: bold;
  margin-bottom: 25px;
  font-size: 22px;
}

.book-dedicated-qa-contact-form p {
  margin-bottom: 15px;
}

.elementor-2817 .elementor-element.elementor-element-75502d45 .wpcf7-text {
    width: 100% !important;
}

.book-dedicated-qa-contact-form input[type="text"],
.book-dedicated-qa-contact-form input[type="tel"],
.book-dedicated-qa-contact-form input[type="email"],
.book-dedicated-qa-contact-form textarea {
  width: 100%;
  padding: 12px;
  border-radius: 6px;
  border: 1px solid #d1d5db;
  color: #000000;
}

.book-dedicated-qa-contact-form input::placeholder,
.book-dedicated-qa-contact-form textarea::placeholder {
  color: #999;
  font-style: italic;
}

.book-dedicated-qa-contact-form .description {
  font-size: 13px;
  margin-top: 10px;
}

.book-dedicated-qa-contact-form input[type="submit"] {
  background-color: #357bff;
  color: #ffffff;
  font-weight: bold;
  padding: 14px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  width: 100%;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.book-dedicated-qa-contact-form input[type="submit"]:hover {
  background-color: #245fd6;
}

.wpcf7-response-output {
    margin: 0px !important;
    padding: 0px !important;
    color: #545454 !important;
}

.book-dedicated-qa-contact-form textarea {
  resize: vertical;
  min-height: 100px;
  max-height: 35px;
}

.swal2-popup.swal2-modal.swal2-show {
    padding: 0px !important;
}

button.swal2-close {
    background: none !important;
    border: none !important;
    color: #357bff !important;
}

.swal2-close:focus {
    box-shadow: none !important;
}

selector {
   margin-top: auto;
}
@media only screen and (min-width: 768px) {
#dedicatedBtn button.wpb-pcf-form-fire.wpb-pcf-btn-large.wpb-pcf-btn.wpb-pcf-btn-default {
    
    margin: 0px;
    margin-left: -30px;
}
}
	</style> -->
</main>

<?php
get_footer( 'v2' );

