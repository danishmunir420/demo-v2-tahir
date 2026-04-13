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
				<h1 class="tv-healthcare-hero__title" data-anim="fade-up"><span class="tv-blue">Built for Healthcare,</span> Trusted for Quality</h1>
				<p class="tv-healthcare-hero__subtitle" data-anim="fade-up">Helping healthcare startups ship safer, faster, and more reliable software through expert QA and automation.</p>
				<ul class="tv-healthcare-hero__features">
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Certified QA Professionals</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Flexible Engagement Models</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Latest Testing Tools</li>
				</ul>
				<div class="tv-healthcare-hero__actions">
					<a href="#qa-services" class="tv-btn tv-btn--primary" data-anim="fade-up">QA FEATURES <span class="tv-caret-white" aria-hidden="true"></span></a>
					<a href="#qa-plans" class="tv-btn tv-btn--outline-dark" data-anim="fade-up">VIEW PLANS <span class="tv-carter-black" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="tv-healthcare-hero__media" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/HealthCare-banner-img.jpg' ); ?>" alt="Healthcare QA team working on software testing">
			</div>
			<div class="tv-healthcare-hero__stats">
				<div class="tv-stat"><h3 data-anim="fade-up">90%</h3><p data-anim="fade-up">Fewer Critical Bugs</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">3x</h3><p data-anim="fade-up">Faster Release Cycles</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">40%</h3><p data-anim="fade-up">Lower Rework Costs</p></div>
			</div>
		</div>
	</section>

	<section class="tv-about-belief tv-health-about py-5" id="qa-services">
		<div class="container">
			<div class="tv-section__head">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Independent QA Services for</span> Healthcare Startups</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We support every stage of product development with reliable, domain-aligned quality assurance.</p>
			</div>

			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="left">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-01.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">We provide a full range of<br>top-tier testing services<br>under one roof.</p>
					</article>
				</div>
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="zoom">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-02.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">Our team of professionals<br>brings a wealth of industry<br>experience.</p>
					</article>
				</div>
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="right">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-03.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">We are dedicated to<br>delivering superior quality in<br>every project.</p>
					</article>
				</div>
			</div>

			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="left">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-01.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">We provide a full range of<br>top-tier testing services<br>under one roof.</p>
					</article>
				</div>
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="zoom">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-02.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">Our team of professionals<br>brings a wealth of industry<br>experience.</p>
					</article>
				</div>
				<div class="col-md-6 col-lg-4">
					<article class="tv-about-belief-card" data-anim="right">
						<div class="tv-about-belief-card__icon" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/b-icon-03.svg' ); ?>" alt=""></div>
						<p class="tv-about-belief-card__text">We are dedicated to<br>delivering superior quality in<br>every project.</p>
					</article>
				</div>
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

	<section class="tv-trusted" data-anim="section">
		<div class="container">
			<h2 class="tv-trusted__title text-center" data-anim="fade-up"><span class="tv-blue">Tools</span> We Use</h2>
			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/Rise-Client-Logo.svg' ); ?>" alt="Rise"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/u-turn-Client-Logo.svg' ); ?>" alt="U-Turn"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/oslo-Client-Logo.svg' ); ?>" alt="Oslo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/barca-Client-Logo.svg' ); ?>" alt="Barca"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/th-Client-Logo.svg' ); ?>" alt="TH"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/kobe-Client-Logo.svg' ); ?>" alt="Kobe"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/Rise-Client-Logo.svg' ); ?>" alt="Rise"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/u-turn-Client-Logo.svg' ); ?>" alt="U-Turn"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/oslo-Client-Logo.svg' ); ?>" alt="Oslo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/barca-Client-Logo.svg' ); ?>" alt="Barca"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/th-Client-Logo.svg' ); ?>" alt="TH"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/kobe-Client-Logo.svg' ); ?>" alt="Kobe"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-values">
		<div class="container">
			<div class="row g-5 align-items-start">
				<div class="col-lg-6">
					<div class="tv-values__kicker mb-3" data-anim="fade-up">Our Values</div>
					<h2 class="tv-values__title mb-4" data-anim="fade-up">
						At Testiva, We Are Committed To Delivering Excellence And Quality<br>
						In Every Test We Conduct.
					</h2>
					<p class="tv-values__text mb-0" data-anim="fade-up">
						Through clear communication, innovation, and robust infrastructure, we ensure seamless results.
						Our collaborative approach helps us exceed client expectations and drive success.
					</p>
				</div>
				<div class="col-lg-6">
					<div class="tv-values__scroll">
						<div class="tv-values__list">
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Excellence</h3><p class="tv-values-item__desc" data-anim="fade-up">We are committed to delivering exceptional results on every project.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Integrity</h3><p class="tv-values-item__desc" data-anim="fade-up">We operate with transparency and accountability, building trust with our clients.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Continuous Learning</h3><p class="tv-values-item__desc" data-anim="fade-up">We are always seeking new ways to improve and innovate, ensuring we provide the best services.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Collaboration</h3><p class="tv-values-item__desc" data-anim="fade-up">We collaborate closely with our partners to understand their goals and deliver beyond expectations.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Effective Communication</h3><p class="tv-values-item__desc" data-anim="fade-up">We maintain transparent, timely communication to keep you informed and involved, ensuring reliable results.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Robust Infrastructure</h3><p class="tv-values-item__desc" data-anim="fade-up">With cutting-edge remote tools, we deliver efficient, secure, and globally accessible testing services anytime, anywhere.</p></article>
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
					<div class="swiper-slide"><article class="tv-case-card"><a href="#" class="tv-case-card__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-01.jpg' ); ?>" alt="dmuscle.com project"></a><div class="tv-case-card__body"><h3 class="tv-case-card__title"><a href="#">dmuscle.com</a></h3><p class="tv-case-card__text">Provided advanced Quality Assurance solutions.</p><ul class="tv-case-card__tags"><li>UI/UX</li><li>Mobile App</li><li>Ecommerce</li></ul></div></article></div>
					<div class="swiper-slide"><article class="tv-case-card"><a href="#" class="tv-case-card__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-02.jpg' ); ?>" alt="Loadster.app project"></a><div class="tv-case-card__body"><h3 class="tv-case-card__title"><a href="#">Loadster.app</a></h3><p class="tv-case-card__text">Provided advanced Quality Assurance solutions.</p><ul class="tv-case-card__tags"><li>UI/UX</li><li>Mobile App</li><li>Ecommerce</li></ul></div></article></div>
					<div class="swiper-slide"><article class="tv-case-card"><a href="#" class="tv-case-card__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-03.jpg' ); ?>" alt="India wide project"></a><div class="tv-case-card__body"><h3 class="tv-case-card__title"><a href="#">India wide</a></h3><p class="tv-case-card__text">Provided advanced Quality Assurance solutions.</p><ul class="tv-case-card__tags"><li>UI/UX</li><li>Mobile App</li><li>Ecommerce</li></ul></div></article></div>
					<div class="swiper-slide"><article class="tv-case-card"><a href="#" class="tv-case-card__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/case-study-04.jpg' ); ?>" alt="Project four"></a><div class="tv-case-card__body"><h3 class="tv-case-card__title"><a href="#">Project Four</a></h3><p class="tv-case-card__text">Provided advanced Quality Assurance solutions.</p><ul class="tv-case-card__tags"><li>UI/UX</li><li>Mobile App</li><li>Ecommerce</li></ul></div></article></div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-testimonials py-5">
		<div class="container">
			<h2 class="tv-testimonials__title text-center mb-5" data-anim="fade-up">What’s People Say’s</h2>
			<div class="swiper tv-testimonials-swiper">
				<div class="swiper-wrapper" data-anim="cards">
					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media"><img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo"></div>
							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade-up">“Superior Space’s user-friendly design and robust features have empowered our team to create a site that truly stands out in our industry.”</p>
								<div class="tv-testimonial__footer"><div class="tv-testimonial__name" data-anim="fade-up">Butterfly Studio</div><div class="tv-testimonial__role" data-anim="fade-up">OUR ANOTHER TEMPLATE</div></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media"><img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/testimonial-img.jpg' ); ?>" alt="Client photo"></div>
							<div class="tv-testimonial__card">
								<p class="tv-testimonial__quote" data-anim="fade-up">“Testiva helped us release faster with fewer defects. Their process and reporting made QA predictable and reliable.”</p>
								<div class="tv-testimonial__footer"><div class="tv-testimonial__name" data-anim="fade-up">David C.</div><div class="tv-testimonial__role" data-anim="fade-up">PRODUCT LEAD</div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tv-testimonials__dots"></div>
			</div>
		</div>
	</section>

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
						<h3 class="tv-plan-card__title" data-anim="fade-up">Part Time Resource</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Perfect for ongoing projects that need flexible QA support</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$40</strong><span>/hour</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Up to 20 hours per week</li>
							<li data-anim="fade-up">Manual & automated testing</li>
							<li data-anim="fade-up">Test case documentation</li>
							<li data-anim="fade-up">Bug tracking & reporting</li>
							<li data-anim="fade-up">Weekly status reports</li>
							<li data-anim="fade-up">Email support</li>
							<li data-anim="fade-up">Flexible scheduling</li>
						</ul>
						<div class="tv-plan-card__footer"><a href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>" class="tv-plan-card__btn tv-plan-card__btn--outline">Get Started</a></div>
					</div>
				</article>

				<article class="tv-plan-card tv-plan-card--featured">
					<div class="tv-plan-card__badge" data-anim="fade-up">Most Popular</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Full-Time Resource</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Dedicated QA professional fully committed to your project</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$6,000</strong><span>/month</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">160+ hours per month</li>
							<li data-anim="fade-up">Complete testing coverage</li>
							<li data-anim="fade-up">Test automation framework</li>
							<li data-anim="fade-up">CI/CD integration</li>
							<li data-anim="fade-up">Performance & security testing</li>
							<li data-anim="fade-up">Daily standups & reporting</li>
							<li data-anim="fade-up">Direct communication</li>
							<li data-anim="fade-up">Long-term commitment</li>
						</ul>
						<div class="tv-plan-card__footer"><a href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>" class="tv-plan-card__btn tv-plan-card__btn--primary">Get Started</a></div>
					</div>
				</article>

				<article class="tv-plan-card">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Need a Team</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Comprehensive QA team solution for enterprise projects</p>
						<ul class="tv-plan-card__list tv-plan-card__list--top">
							<li data-anim="fade-up">Multiple QA specialists</li>
							<li data-anim="fade-up">QA Lead & test manager</li>
							<li data-anim="fade-up">End-to-end testing strategy</li>
							<li data-anim="fade-up">Custom automation framework</li>
							<li data-anim="fade-up">All testing types covered</li>
							<li data-anim="fade-up">Dedicated project manager</li>
							<li data-anim="fade-up">Priority support</li>
							<li data-anim="fade-up">Scalable team size</li>
						</ul>
						<div class="tv-plan-card__footer"><a href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>" class="tv-plan-card__btn tv-plan-card__btn--outline">Get Started</a></div>
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

			<div class="tv-contact-cta__form-wrap">
				<form class="tv-contact-cta__form" action="#" method="post">
					<div class="tv-contact-cta__grid">
						<div class="tv-field"><label for="tvQaName" data-anim="fade-up">Name *</label><input id="tvQaName" name="name" type="text" placeholder="Your full name" required data-anim="fade-up"></div>
						<div class="tv-field"><label for="tvQaEmail" data-anim="fade-up">Email *</label><input id="tvQaEmail" name="email" type="email" placeholder="your.email@company.com" required data-anim="fade-up"></div>
						<div class="tv-field"><label for="tvQaPhone" data-anim="fade-up">Phone</label><input id="tvQaPhone" name="phone" type="tel" placeholder="+1 (555) 000-0000" data-anim="fade-up"></div>
						<div class="tv-field"><label for="tvQaCompany" data-anim="fade-up">Company</label><input id="tvQaCompany" name="company" type="text" placeholder="Your company name" data-anim="fade-up"></div>
						<div class="tv-field tv-field--full"><label for="tvQaMessage" data-anim="fade-up">Message *</label><textarea id="tvQaMessage" name="message" placeholder="Tell us about your project and QA needs..." required data-anim="fade-up"></textarea></div>
					</div>
					<div class="tv-contact-cta__actions"><button type="submit" class="tv-btn tv-btn--primary" data-anim="fade-up">SEND MESSAGE</button></div>
				</form>
			</div>
		</div>
	</section>
</main>

<?php
get_footer( 'v2' );

