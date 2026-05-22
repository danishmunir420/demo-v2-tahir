<?php
/**
 * Template Name: Healthcare AI
 * Description: Healthcare AI landing page using the V2 global design (same content as Healthcare QA V2).
 *
 * @package HelloElementor
 */

get_header( 'v2.1' );
?>

<main id="main">
	<section class="tv-healthcare-hero">
		<div class="container">
			<div class="tv-healthcare-hero__content">
				<h1 class="tv-healthcare-hero__title" data-anim="fade-up"><span class="tv-blue">Ship Reliable AI, </span>Not Just Smart AI</h1>
				<p class="tv-healthcare-hero__subtitle" data-anim="fade-up">We help teams build trustworthy AI by testing  AI/LLM applications for hallucinations, accuracy, safety, and consistency, using automated evaluations and real-world scenarios.
</p>
				<ul class="tv-healthcare-hero__features">
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>LLM & GenAI Expertise</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Reduced AI Risk</li>
					<li data-anim="fade-up"><span class="tv-check-icon" aria-hidden="true"></span>Automated Evaluations</li>
				</ul>
				<div class="tv-healthcare-hero__actions">
					<a href="<?php echo esc_url( site_url( '/contact-us/' ) ); ?>" class="tv-btn tv-btn--primary" data-anim="fade-up">BOOK A CALL <span class="tv-caret-white" aria-hidden="true"></span></a>
					<a href="#qa-plans" class="tv-btn tv-btn--outline-dark" data-anim="fade-up">VIEW PLANS <span class="tv-carter-black" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="tv-healthcare-hero__media" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ai-services-banner.webp' ); ?>" alt="Healthcare QA team working on software testing">
			</div>
			<div class="tv-healthcare-hero__stats">
				<div class="tv-stat"><h3 data-anim="fade-up">10+</h3><p data-anim="fade-up">AI/LLM Applications Tested</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">95%</h3><p data-anim="fade-up">Output Accuracy Improvement</p></div>
				<div class="tv-stat"><h3 data-anim="fade-up">10+</h3><p data-anim="fade-up">Evaluation Pipelines Built</p></div>
			</div>
		</div>
	</section>


	<!-- Trusted clients logos -->
	<section class="tv-trusted" data-anim="section">
		<div class="container">
			<h2 class="tv-trusted__title text-center" data-anim="fade-up">
				Trusted by organizations <span class="text-black">that cannot afford mistakes.</span>
			</h2>

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

		</div>
	</section>


	<section class="tv-about-belief tv-health-about py-5" id="qa-services">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">End-to-End Testing for</span>  LLMs,<br/>RAG & AI Agents</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">From prompt design to production monitoring, we ensure your AI systems are accurate, safe, and consistent.</p>
			</div>

			<!--Cards-->
        <div class="tv-healthcare-grid__wrap">

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.3">
			<a href="<?php echo esc_url( home_url( '/ai-qa/llm-testing/' ) ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/llm-testing-banner.webp' ); ?>" alt="LLM Testing">
            <div class="tv-healthcare-card__title">LLM Testing</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.6">
		  <a href="<?php echo esc_url( home_url( '/ai-qa/chatbots-testing/' ) ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chatbot-testing-banner.webp' ); ?>" alt="Chatbots Testing">
            <div class="tv-healthcare-card__title">Chatbots Testing</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.9">
			<a href="<?php echo esc_url( home_url( '/ai-qa/rag-system-testing/' ) ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/rag-system-banner.webp' ); ?>" alt="RAG System Testing ">
            <div class="tv-healthcare-card__title">RAG System Testing</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.3">
			<a href="<?php echo esc_url( home_url( '/ai-qa/ai-agents-testing/' ) ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ai-agents-testing-banner.webp' ); ?>" alt="AI Agents Testing">
            <div class="tv-healthcare-card__title">AI Agents Testing</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.6">
            <a href="<?php echo esc_url( home_url( '/ai-qa/ai-voice-agents-testing/' ) ); ?>">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ai-voice-testing-banner.webp' ); ?>" alt="AI Voice Agents Testing">
            <div class="tv-healthcare-card__title">AI Voice Agents Testing</div>
			</a>
          </article>

          <article class="tv-healthcare-card" data-anim="fade-up" data-delay="0.9">
		  <a href="<?php echo esc_url( home_url( '/ai-qa/ai-note-taking-testing/' ) ); ?>">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ai-note-testing-banner.webp' ); ?>" alt="AI Note Taking Testing">
            <div class="tv-healthcare-card__title">AI Note Taking Testing</div>
			</a>
          </article>

        </div>
		</div>
	</section>

	<section class="tv-section tv-regulated-env">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Testing That Keeps Up</span> with AI<br>Regulations</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We design testing strategies that help your AI systems meet evolving compliance requirements for safety, transparency, and reliability.</p>
			</div>
			<div class="tv-regulated-env__logos" id="tv-regulated-env__logos">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/nust-logo.png' ); ?>" alt="NUST" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/iso-logo.png' ); ?>" alt="ISO" data-anim="fade-up">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/oecd-logo.png' ); ?>" alt="OECD" data-anim="fade-up">
			</div>
		</div>
	</section>
	
	<!-- /How it work/ -->
    <section class="tv-process-steps">
      <div class="container">
        <div class="tv-process-steps__head">
          <span class="tv-process-steps__eyebrow" data-anim="fade-up">HOW IT WORKS</span>
          <h2 data-anim="fade-up">Up and running in 4 simple steps</h2>
          <p data-anim="fade-up">From first contact to your first test report — a process designed to be fast, transparent and low-friction.</p>
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

	<section class="tv-trusted toolsweusesection" data-anim="section">
		<div class="container">
			<div class="tv-section__head headingtopsection">
			<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Tools</span> We Use</h2>
			<p class="tv-section__subtitle">We bring the industry’s best open-source and enterprise tools into your QA process.</p>
			</div>
			<div class="swiper tv-logo-slider">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/promptfoo_logo.png' ); ?>" alt="Prompt Foo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/d_logo.png' ); ?>" alt=""></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/ragas_logo.png' ); ?>" alt="Ragas"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/langchain_logo.png' ); ?>" alt="Lang Chain"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/github_logo.png' ); ?>" alt="Github"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/playwright_logo.png' ); ?>" alt="Play Wright"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-10.png' ); ?>" alt="JMeter Logo"></div>


					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-1.png' ); ?>" alt="Jira Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/notion_logo.png' ); ?>" alt="Notion"></div>

					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-3.png' ); ?>" alt="Cpress logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-4.png' ); ?>" alt="Selenium Logo"></div>
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/client-logo-8.png' ); ?>" alt="TestComplete logo"></div>
					
					<div class="swiper-slide tv-logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/slack_logo.png' ); ?>" alt="Slack"></div>
					
					
					
					
					
					
				</div>
			</div>
		</div>
	</section>

	<section class="tv-values">
		<div class="container">
			<div class="row g-5 align-items-start">
				<div class="col-lg-6">
					<div class="whytestivaleftsection">
					<div class="tv-values__kicker mb-3" data-anim="fade-up">Why Testiva</div>
					<h2 class="tv-values__title mb-4" data-anim="fade-up">Testiva exists to help teams make their AI systems reliable, accurate, and ready for real-world production.</h2>
					<p class="tv-values__text mb-0" data-anim="fade-up">We combine deep understanding of LLM systems with structured QA, evaluation frameworks, and continuous testing to help teams ship AI that is accurate, safe, and production-ready.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="tv-values__scroll">
						<div class="tv-values__list">
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Expertise</h3><p class="tv-values-item__desc" data-anim="fade-up">AI/LLM-focused QA powered by modern evaluation tools, automated testing, and real-world scenario validation.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Customer-Centric Approach</h3><p class="tv-values-item__desc" data-anim="fade-up">Flexible engagement models that fit fast-moving AI teams.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Commitment to Quality</h3><p class="tv-values-item__desc" data-anim="fade-up">Rigorous evaluation to reduce hallucinations, improve accuracy, and ensure consistent AI behavior.</p></article>
							<article class="tv-values-item"><h3 class="tv-values-item__title" data-anim="fade-up">Integrity</h3><p class="tv-values-item__desc" data-anim="fade-up">Transparent testing processes, clear reporting, and honest insights into AI limitations and risks.</p></article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-section tv-selected-work">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Selected</span> Work</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">We bring the industry’s best open-source and enterprise tools into your AI process.</p>
			</div>
			<div class="tv-selected-work__slider-s swiper-s">
				<div class="swiper-wrapper-s row justify-content-md-center align-items-center h-100">

    <!-- FreeAdCopy - AI -->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/freeadcopy/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-57.png' ) ); ?>" 
                     alt="FreeAdCopy">
            </a>
            <div class="tv-case-card__body">
                <h3 class="tv-case-card__title"><a href="<?php echo esc_url( home_url( '/projects/freeadcopy/' ) ); ?>">FreeAdCopy</a></h3>
                <p class="tv-case-card__text">FreeAdCopy is an AI-powered content generation platform designed to create high-converting ad copy efficiently.</p>
                <ul class="tv-case-card__tags">
                    <li>AI</li>
                    <li>Test Automation</li>
                    <li>API Testing</li>
                </ul>
            </div>
        </article>
    </div>

    <!-- 2. OMED -->
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
        <article class="tv-case-card">
            <a href="<?php echo esc_url( home_url( '/projects/youth-health-app/' ) ); ?>" class="tv-case-card__media">
                <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2025/04/Frame-66.jpg' ) ); ?>" alt="YOU(th) Health App">
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
					<!-- Video 1-->
					<div class="swiper-slide">
                            <div class="tv-testimonial">
                                <!-- VIDEO SLIDE -->
                                <div class="tv-testimonial__media">
                                    <video class="tv-testimonial-video" muted controls playsinline preload="auto" autoplay>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/TestivaTestimonial.mp4' ); ?>" type="video/mp4">
                                    </video>
                                </div>

                                <div class="tv-testimonial__card">
                                <p class="tv-testimonial__quote" data-anim="fade-up">
                                    “The QA services provided by Testiva have always been outstanding. ...they allowed us to release stable software when it counts the most.”
                                </p>

                                <div class="tv-testimonial__footer">
                                    <div class="tv-testimonial__name" data-anim="fade-up">Francesco</div>
                                    <div class="tv-testimonial__role" data-anim="fade-up">Our another template</div>
                                </div>
                                </div>
                            </div>
                        </div>
					<!--Video 2-->
					<div class="swiper-slide">
                            <div class="tv-testimonial">
                                <!-- VIDEO SLIDE -->
                                <div class="tv-testimonial__media">
                                    <video class="tv-testimonial-video" muted controls playsinline preload="auto" autoplay>
                                    <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/videos/RokasMMT.mp4' ); ?>" type="video/mp4">
                                    </video>
                                </div>

                                <div class="tv-testimonial__card">
                                <p class="tv-testimonial__quote" data-anim="fade-up">
                                    “The QA services provided by Testiva have always been outstanding. ...they allowed us to release stable software when it counts the most.”
                                </p>

                                <div class="tv-testimonial__footer">
                                    <div class="tv-testimonial__name" data-anim="fade-up">Francesco</div>
                                    <div class="tv-testimonial__role" data-anim="fade-up">Our another template</div>
                                </div>
                                </div>
                            </div>
                        </div>
					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/steve.jpg' ); ?>" alt="Client photo">
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
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/chaya.jpg' ); ?>" alt="Client photo">
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
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/hussien.jpg' ); ?>" alt="Client photo">
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
								<img data-anim="image" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/murry.jpg' ); ?>" alt="Client photo">
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

	<section class="tv-section tv-resource-plans" id="qa-plans">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">RAG Apps</span>  — Software<br>Testing Packages</h2>
		
			</div>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

						<div class="table-responsive comparison-wrapper" id="tablecomparisonwrapper">

						<table class="table align-middle tv-resource-plans__grid tvresourcemainsection">
						<thead>
						<tr>
							<th></th>
							<th>
							<article class="tv-plan-card tvplancardautoheight">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Starter</h3>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$0</strong><span>/month</span></div>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3603" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Starter"]'); ?>
</div>
					</div>
				</article>
							</th>
							<th>
							<article class="tv-plan-card tvplancardautoheight tv-plan-card--featured">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Professional</h3>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$499</strong><span>/month</span></div>
						
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3607" class="tv-plan-card__btn tv-plan-card__btn--primary" text="Get Professional"]'); ?></div>
					</div>
				</article>
							</th>
							<th>
							<article class="tv-plan-card tvplancardautoheight">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Enterprise</h3>
						
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$1,999</strong><span>/month</span></div>
						
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3608" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Enterprise"]'); ?></div>
					</div>
				</article>
							</th>
							<th>
							<article class="tv-plan-card tvplancardautoheight">
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Custom AI</h3>
			
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$3,999</strong><span>/month</span></div>
						
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3609" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Custom AI" ]'); ?></div>
					</div>
				</article>
							</th>
						</tr>
						</thead>

						<tbody>	
						<tr>
						<td colspan="5" class="text-start tdmain">CORE RAG FUNCTIONAL TESTING</td>
						</tr>
						
						
						<tr>
						<td class="feature-col">End-to-end retrieval & generation testing</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Indexing & ingestion pipeline testing</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Chunking strategy validation</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Vector store integration testing</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Concurrent query / load testing</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="text-center-custom">5K users</td>
						<td class="text-center-custom">10K users</td>
						<td class="text-center-custom">Unlimited</td>
						</tr>

						<tr>
						<td class="feature-col">Automated regression test suite</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="text-center-custom">Setup only</td>
						<td class="text-center-custom">Full build</td>
						</tr>

						<tr>
						<td class="feature-col">CI/CD pipeline integration</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						
						<tr>
						<td colspan="5" class="text-start tdmain">RAG-SPECIFIC TESTING</td>
						</tr>
						<tr>
						<td class="feature-col">Retrieval accuracy & recall</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Relevance ranking & reranking</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Answer groundedness & faithfulness</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Fallback when no context found</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Citation & source attribution</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Hybrid search (keyword + vector)</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Context window utilisation</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Embedding model & semantic scoring</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						
						<tr>
						<td colspan="5" class="text-start tdmain">AI QUALITY & SAFETY</td>
						</tr>
						
						<tr>
						<td class="feature-col">Hallucination & factual accuracy testing</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Bias & fairness evaluation</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Toxic & harmful output detection</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						<tr>
						<td class="feature-col">Prompt injection & jailbreak resistance</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						<tr>
						<td class="feature-col">Output consistency & regression</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						<tr>
						<td class="feature-col">Model version & rollback testing</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td colspan="5" class="text-start tdmain">SECURITY, PRIVACY & COMPLIANCE</td>
						</tr>
						<tr>
						<td class="feature-col">PII detection in retrieved documents</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Data access & permission QA</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">Audit logging & retrieval trail QA</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						<tr>
						<td class="feature-col">GDPR / CCPA compliance testing</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>
						<tr>
						<td class="feature-col">Enterprise SSO & access control testing</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						
						<tr>
						<td colspan="5" class="text-start tdmain">SUPPORT & REPORTING</td>
						</tr>
						<tr>
						<td class="feature-col">Dedicated QA lead</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">AI quality scorecard & weekly report</td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						<tr>
						<td class="feature-col">24/7 critical defect SLA</td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="dash"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/dashline_icon.png' ); ?>" alt=""/></td>
						<td class="check"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/greentick_icon.png' ); ?>" alt=""/></td>
						</tr>

						</tbody>

						</table>

						</div>
				
				</div>
			</div>
		</div>
	</section>

	<section class="tv-section tv-contact-cta">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Quality Isn’t Optional.</span><br>Let’s Talk.</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">From quick test coverage to full-scale AI teams, we<br>plug in exactly where you need us.</p>
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

