<?php
/**
 * Template Name: Healthcare Startups
 * Description: Healthcare Startups landing page using the V2 global design (same content as Healthcare AI).
 *
 * @package HelloElementor
 */

get_header( 'v2.1' );
?>

<style>
.faqmainsection.tv-faq{padding:100px 0;background:#fff;}
.tv-about-belief.tv-health-about.whyitmattersection{padding-top:80px;padding-bottom: 40px;}
.subpagesheromainsection.tv-healthcare-hero{padding-bottom: 120px;}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__title{ font-size:64px;line-height:74px;letter-spacing:-2px; color:#2F1F33;text-align:left;}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__subtitle{text-align:left}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__actions{justify-content: start;}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__actions .tv-btn{font-size:18px;gap:15px;padding:20px 30px;}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__actions .tv-btn.tv-btn--outline-dark{}
.subpagesheromainsection.tv-healthcare-hero .tv-healthcare-hero__actions .tv-btn.tv-btn--primary{}
.subpagesheromainsection.tv-healthcare-hero .herosectionmainwrapper{}
.subpagesheromainsection.tv-healthcare-hero .herosectionmainwrapper .tv-healthcare-hero__stats{}
.subpagesheromainsection.tv-healthcare-hero .herosectionmainwrapper .tv-healthcare-hero__stats .tv-stat{}
.subpagesheromainsection.tv-healthcare-hero .herosectionmainwrapper .tv-healthcare-hero__stats .tv-stat h3{font-size:38px;line-height:42px;color:rgba(20, 20, 20, 1);}
.subpagesheromainsection.tv-healthcare-hero .herosectionmainwrapper .tv-healthcare-hero__stats .tv-stat p{font-size:18px;line-height:22px;color:rgba(20, 20, 20, 1);}
.tv-process-steps__eyebrow.sectiontopsubheading{background:rgba(66, 66, 66, 1);color:#fff;text-transform:uppercase}

.twocolssectionofplatform{}
.twocolssectionofplatform .platformsfourrowssection{}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper:last-child {margin-bottom:0px;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper:first-child {margin-top:0px;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper{background: rgba(241, 231, 231, 1);border-radius: 20px;display: table;width: 100%;padding: 20px;margin: 20px 0px;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper .fourrowsrightcontent{width: 94%;float: left;padding-left: 15px;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper img{width: 20px;float: left;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper h6{font-size:18px;line-height:22px;color:rgba(0, 0, 0, 1);font-weight:700;margin-bottom: 10px;}
.twocolssectionofplatform .platformsfourrowssection .fourrowsswrapper p{font-size:16px;line-height:22px;color:rgba(0, 0, 0, 1);font-weight:400;margin:0px;}
.protectplatformsection{background:rgba(0, 82, 156, 1);border-radius:20px;padding:30px;}
.protectplatformsection h4{font-size:35px;line-height:42px;color:#fff;font-weight:600;letter-spacing:-0.5px;}
.protectplatformsection ul{list-style:none;padding:0px;margin:0px;}
.protectplatformsection ul li{background:url(https://testiva.io/wp-content/themes/hello-elementor-child/html-v2/assets/images/ticklisticon.svg); background-position:0px 4px;background-size:16px; background-repeat: no-repeat;  font-size:16px;line-height:25px; color:#fff;font-weight:500; letter-spacing:-0.5px; padding-left: 40px; margin-top: 26px;}
.protectplatformsection ul li strong{font-weight:700;}

.flip-card {perspective: 1000px;width: 100%;height: 280px;margin: 8px 0px;}
.flip-card-inner {position: relative;width: 100%;height: 100%;transition: transform 0.8s ease-in-out;transform-style: preserve-3d;}
.flip-card:hover .flip-card-inner {transform: rotateY(180deg);}
.flipeffectwrapperbefore, .flipeffectwrapperafter {position: absolute; width: 100%;height: 100%;border-radius: 15px;backface-visibility: hidden;-webkit-backface-visibility: hidden; display: flex;flex-direction: column;justify-content: center;align-items: center;padding: 25px;text-align: center;box-sizing: border-box;}
.flipeffectwrapperbefore{background: #fff;border-radius: 30px;border: 1px solid rgba(175, 175, 175, 1);box-shadow: none;padding-left: 60px;padding-right: 60px;}
.flipeffectwrapperbefore img {max-width: 80px;margin-bottom: 20px;}
.flipeffectwrapperbefore h6 {margin: 0;font-size: 20px;font-weight: 600;letter-spacing:-0.5px;}
.flipeffectwrapperafter {background: rgba(0, 82, 156, 1);color: #fff; transform: rotateY(180deg);border-radius: 30px;border: 1px solid rgba(0, 82, 156, 1);}
.flipeffectwrapperafter p {margin: 0;font-size: 18px;line-height: 24px;letter-spacing:-0.5px;}
.tv-plan-card.notfeaturedpackage{}
.tv-plan-card.notfeaturedpackage .tv-plan-card__badge{background:rgba(104, 104, 104, 1);}
.getintouchmainsection{background:rgba(65, 65, 65, 1);padding:80px 0px;}
.getintouchmainsection .getintouchmainwrapper{}
.getintouchmainsection .getintouchmainwrapper .getintouchleftcon{}
.getintouchmainsection .getintouchmainwrapper .getintouchleftcon h3{color:#fff;font-weight:600;font-size:48px;line-heiht:54px;margin-bottom:15px;letter-spacing:-1px;}
.getintouchmainsection .getintouchmainwrapper .getintouchleftcon p{color:#fff;font-weight:600;font-size:18px;line-heiht:26px;margin-bottom:15px;letter-spacing:-1px;}
.getintouchmainsection .tv-process-steps__eyebrow.sectiontopsubheading{background: #fff;
  color: rgb(65, 65, 65);}
.getintouchdetailscon{}
.getintouchdetailscon .gitdetailswrapper{display: table;width: 100%;padding: 20px;margin: 20px 0px;}
.getintouchdetailscon .gitdetailswrapper .getintouchicon{width: 48px;height:48px;background:rgba(0, 82, 156, 1);float: left;}
.getintouchdetailscon .gitdetailswrapper .getintouchicon img{}
.getintouchdetailscon .gitdetailswrapper .gitdetailcontent{width: 94%;float: left;padding-left: 15px;}
.getintouchdetailscon .gitdetailswrapper .gitdetailcontent h6{font-size:18px;line-height:18px;color:rgba(148, 148, 148, 1);font-weight:600;letter-spacing:-0.5px;margin:0px 0px 5px 0px;}
.getintouchdetailscon .gitdetailswrapper .gitdetailcontent p{font-size:18px;line-height:18px;color:#fff;font-weight:500;letter-spacing:-0.5px;margin:0px 0px 0px 0px;}
.getintouchdetailscon .gitdetailswrapper .gitdetailcontent p a{color:#fff;text-decoration:none;}




.slider-wrapper.herorightsliderwrapper {
    width: 100%;
    max-width: 900px;
    height: 420px;
    overflow: hidden;
    position: relative;
}

.slider-track { will-change: transform;
    display: flex;
    flex-direction: column;
    gap: 22px;
    transition: transform 0.8s ease-in-out;
}
.qa-card.active {
background: #fff;border:1px solid rgba(0, 82, 156, 0.66);opacity: 1;
box-shadow: 0 10px 30px rgba(79,137,187,0.08);}
.qa-card {min-height: auto;
    border:1px solid rgba(0, 82, 156, 0.66);
    border-radius: 20px;
    background: rgba(255,255,255,0.65);
    padding: 20px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: all 0.5s ease;
    opacity: 0.30;
}
.qa-card h2 {font-size: 20px;line-height:25px;font-weight: 700;letter-spacing:-0.48px; color: #000;margin-bottom: 10px;}
.qa-card p {font-size: 16px;line-height:24px;color: #000;margin:0px;letter-spacing:-0.48px;}
.qa-card.active h2 {color: #000;}
.qa-card.active p {color: #000;}

/* Mobile */
@media (max-width: 768px) {
    .slider-wrapper.herorightsliderwrapper {
        height: 500px;
    }

    .qa-card {
        min-height: 115px;
        padding: 24px;
        border-radius: 20px;
    }

    .qa-card h2 {
        font-size: 1.4rem;
    }

    .qa-card p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .slider-wrapper.herorightsliderwrapper {
        height: 440px;
    }

    .qa-card h2 {
        font-size: 1.1rem;
    }

    .qa-card p {
        font-size: 0.85rem;
    }
}


</style>
<main id="main">
	<section class="subpagesheromainsection tv-healthcare-hero">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="herosectionmainwrapper">
						<div class="row">
							<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
												
								<div class="tv-healthcare-hero__content">
									<h1 class="tv-healthcare-hero__title" data-anim="fade-up">Your app should <span class="tv-blue">perform</span> as hard as your users do</h1>
									<p class="tv-healthcare-hero__subtitle" data-anim="fade-up">Testiva delivers specialist QA for wellness and fitness platforms — from wearable sync to HIPAA compliance, we test every rep.</p>
								
									<div class="tv-healthcare-hero__actions">
										<a href="#qa-services" class="tv-btn tv-btn--primary" data-anim="fade-up">GET A FREE QA AUDIT <span class="tv-caret-white" aria-hidden="true"></span></a>
										<a href="#qa-plans" class="tv-btn tv-btn--outline-dark" data-anim="fade-up">VIEW PACKAGES <span class="tv-carter-black" aria-hidden="true"></span></a>
									</div>
								</div>
								
								<div class="tv-healthcare-hero__stats">
									<div class="tv-stat"><h3 data-anim="fade-up">90%</h3><p data-anim="fade-up">Fewer Critical Bugs</p></div>
									<div class="tv-stat"><h3 data-anim="fade-up">3x</h3><p data-anim="fade-up">Faster Release Cycles</p></div>
									<div class="tv-stat"><h3 data-anim="fade-up">40%</h3><p data-anim="fade-up">Lower Rework Costs</p></div>
								</div>	
							</div>
							<div class="col-xl-5 col-lg-4 col-md-6 col-sm-12 col-12"  data-anim="fade-up">

<div class="slider-wrapper herorightsliderwrapper">
    <div class="slider-track" id="sliderTrack">

        <div class="qa-card">
            <h2>Wearable Sync QA</h2>
            <p>Apple Health, Fitbit, Garmin — tested across all major platforms</p>
        </div>

        <div class="qa-card ">
            <h2>HIPAA Compliance Testing</h2>
            <p>PHI handling, audit trails and data encryption validated</p>
        </div>

        <div class="qa-card">
            <h2>Performance Under Load</h2>
            <p>Stress tested for peak moments — race days, challenge launches</p>
        </div>

        <div class="qa-card">
            <h2>AI/ML Output Validation</h2>
            <p>Health scores, risk predictions and recommendation engines verified</p>
        </div>

    </div>
</div>

							
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>



	<section class="tv-about-belief tv-health-about whyitmattersection" id="qa-services">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Why it matters</span>
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">What happens when wellness apps<br/>aren't tested properly</span></h2>
				<p class="tv-section__subtitle" data-anim="fade-up">In health and fitness, bugs aren't just inconvenient — they erode trust, lose users, and can carry real consequences.</p>
			</div>

			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="twocolssectionofplatform">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="platformsfourrowssection">
									<div class="fourrowsswrapper"  data-anim="fade-up" data-delay="0.1">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Inaccurate health data</h6>
											<p>Faulty calorie counts, wrong heart rate readings, or broken step counters damage user trust instantly.</p>
										</div>
									</div>
									<div class="fourrowsswrapper"  data-anim="fade-up" data-delay="0.3">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Wearable sync failures</h6>
											<p>Broken Apple Health or Garmin integrations leave users with incomplete workout data at critical moments.</p>
										</div>
									</div>
									<div class="fourrowsswrapper" data-anim="fade-up" data-delay="0.5">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Compliance violations</h6>
											<p>Mishandled PHI or broken consent flows can expose your platform to HIPAA penalties and reputational damage.</p>
										</div>
									</div>
									<div class="fourrowsswrapper" data-anim="fade-up" data-delay="0.7">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Crashes during peak moments</h6>
											<p>App failures during a fitness challenge launch or live class stream drive users straight to competitors.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="protectplatformsection" data-anim="fade-up" data-delay="0.3">
									<h4>How Testiva protects your platform</h4>
									<ul>
										<li><strong>Domain expertise —</strong> Our QA engineers specialise in wellness and fitness tech, not generic software testing.</li>
										<li><strong>Real device testing —</strong> We test on actual iOS and Android devices, not just simulators.</li>
										<li><strong>Wearable-first approach —</strong> Deep integration testing across all major fitness wearable ecosystems.</li>
										<li><strong>Compliance-ready —</strong> HIPAA, GDPR and app store guidelines built into every test cycle.</li>
										<li><strong>Shift-left testing —</strong> We catch bugs early in the cycle, reducing the cost of fixes by up to 10x.</li>
									</ul>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-section tv-regulated-env">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">What we test</span>
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Core areas of a wellness app we cover</span></h2>
				<p class="tv-section__subtitle" data-anim="fade-up">Every feature that matters to your users — validated, stress-tested, and verified across platforms.</p>
			</div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="flipeffectsection">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.1" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/core-health-tracking.png' ); ?>" alt="">
											<h6>Core health tracking</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Activity logging, calorie counting, step tracking, body metrics — accuracy tested against real device data.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.2" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/goal-settings-tracking.png' ); ?>" alt="">
											<h6>Goal setting & progress tracking</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Goal creation flows, milestone logic, streaks, habit tracking and gamification engine validation.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.3" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/social-engagements.png' ); ?>" alt="">
											<h6>Social & engagement</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Friend connections, group challenges, leaderboards, community feeds and in-app messaging QA.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.4" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/coaching-guidance.png' ); ?>" alt="">
											<h6>Coaching & guidance</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Workout plan logic, AI recommendation engines, live class streaming, coach portal and subscription flows.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.5" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/wearables-integrations.png' ); ?>" alt="">
											<h6>Wearables integration</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Apple Health, Fitbit, Garmin, Whoop and medical-grade device sync, real-time data accuracy and edge cases.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.6" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/notifications-alerts.png' ); ?>" alt="">
											<h6>Notifications & alerts</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Push delivery, smart triggers, streak-break alerts, clinical threshold notifications and multi-channel QA.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.7" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/data-insights.png' ); ?>" alt="">
											<h6>Data & insights</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Dashboard accuracy, trend analytics, population health reports, BI integrations and data lineage validation.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.8" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/compliance-health-regulations.png' ); ?>" alt="">
											<h6>Compliance with health regulations</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>HIPAA, GDPR, app store privacy rules, PHI handling, consent flows and data encryption testing.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.9" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/performance-reliablity.png' ); ?>" alt="">
											<h6>Performance & reliability</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Load testing up to unlimited users, stress tests during peak events, offline mode and sync resilience.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
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
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Testing packages</span>
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Choose the</span> right level of coverage</h2>
				<p class="tv-section__subtitle" data-anim="fade-up">Four tiers built for every stage — from early MVP validation to enterprise-grade QA partnerships.</p>
			</div>
			<div class="tv-resource-plans__grid">
				<article class="tv-plan-card notfeaturedpackage">
					<div class="tv-plan-card__badge" data-anim="fade-up">Starter</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">Vital Check</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Early-stage apps & MVP validation</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$2,500</strong><span>/month</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Functional & UI testing</li>
							<li data-anim="fade-up">Mobile testing — 2 devices</li>
							<li data-anim="fade-up">Core health tracking QA</li>
							<li data-anim="fade-up">Goal setting & progress flows</li>
							<li data-anim="fade-up">Notifications & alerts</li>
							<li data-anim="fade-up">Weekly defect report</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3603" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Started"]'); ?>
</div>
					</div>
				</article>

				<article class="tv-plan-card tv-plan-card--featured">
					<div class="tv-plan-card__badge" data-anim="fade-up">Most Popular</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">PulseGuard</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Scaling platforms with wearables & subscriptions</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$5,500</strong><span>/month</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Everything in Vital Check</li>
							<li data-anim="fade-up">API testing (REST & GraphQL)</li>
							<li data-anim="fade-up">Wearable device sync QA</li>
							<li data-anim="fade-up">Social & engagement testing</li>
							<li data-anim="fade-up">Coaching & recommendation QA</li>
							<li data-anim="fade-up">Data & analytics dashboards</li>
							<li data-anim="fade-up">Performance — 5K users</li>
							<li data-anim="fade-up">Jira / Linear integration</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3607" class="tv-plan-card__btn tv-plan-card__btn--primary" text="Get Started"]'); ?></div>
					</div>
				</article>
				
				<article class="tv-plan-card notfeaturedpackage">
					<div class="tv-plan-card__badge" data-anim="fade-up">Scale</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">CoreShield</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">HIPAA-compliant platforms with clinical data</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$9,500</strong><span>/month</span></div>
						<ul class="tv-plan-card__list tv-plan-card__list--top">
							<li data-anim="fade-up">Everything in PulseGuard</li>
							<li data-anim="fade-up">HIPAA compliance testing</li>
							<li data-anim="fade-up">Security & OWASP pen testing</li>
							<li data-anim="fade-up">EHR / FHIR integration QA</li>
							<li data-anim="fade-up">AI/ML output validation</li>
							<li data-anim="fade-up">Performance — 10K users</li>
							<li data-anim="fade-up">Dedicated QA lead</li>
							<li data-anim="fade-up">Compliance documentation</li>
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3608" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Started"]'); ?></div>
					</div>
				</article>

				<article class="tv-plan-card notfeaturedpackage">
					<div class="tv-plan-card__badge" data-anim="fade-up">Enterprise</div>
					<div class="tv-plan-card__inner">
						<h3 class="tv-plan-card__title" data-anim="fade-up">ApexQA Suite</h3>
						<p class="tv-plan-card__desc" data-anim="fade-up">Full-coverage QA for enterprise platforms</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>Custom</strong><span>/bespoke SLA</span></div>
						<ul class="tv-plan-card__list tv-plan-card__list--top">
							<li data-anim="fade-up">Everything in CoreShield</li>
							<li data-anim="fade-up">Embedded QA team on-demand</li>
							<li data-anim="fade-up">CI/CD pipeline integration</li>
							<li data-anim="fade-up">Full test automation build</li>
							<li data-anim="fade-up">FDA SaMD readiness</li>
							<li data-anim="fade-up">Unlimited load testing</li>
							<li data-anim="fade-up">24/7 critical defect SLA</li>
							<li data-anim="fade-up">Executive QA health report</li>
							
						</ul>
						<div class="tv-plan-card__footer"><?php echo do_shortcode('[wpb-pcf-button id="3609" class="tv-plan-card__btn tv-plan-card__btn--outline" text="Get Started" ]'); ?></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="tv-faq tv-page-bg faqmainsection">
		<div class="container">
		
			<div class="tv-faq__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Why it matters</span>
				<h2 class="tv-faq__title" data-anim="fade-up">
					<span class="tv-blue">Common questions</span>
				</h2>
			</div>

			<div class="tv-faq__list" id="tvFaqAccordion">
				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you sign NDAs before starting?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you test on real devices or emulators?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'How long does onboarding take?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Which tools do you use for bug tracking?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Can I upgrade or downgrade my package?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you offer one-time audits or project-based work?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'In health and fitness, bugs are not just inconvenient — they erode trust, lose users, and can carry real consequences.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				
			
			</div>
		</div>
	</section>


<section class="getintouchmainsection">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="getintouchmainwrapper">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="getintouchleftcon">
								<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Get in touch</span>
								<h3 data-anim="fade-up" data-delay="0.1">Start with a free QA audit</h3>
								<p data-anim="fade-up" data-delay="0.2">Tell us about your wellness platform and we'll map out exactly what testing you need — no obligation.</p>
								<div class="getintouchdetailscon">
									<div class="gitdetailswrapper"  data-anim="fade-up" data-delay="0.3">
										<div class="getintouchicon">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/emailus_icon.png' ); ?>" alt="">
										</div>
										<div class="gitdetailcontent">
											<h6>Email us</h6>
											<p><a href="mailto:hello@testiva.io">hello@testiva.io</a></p>
										</div>										
									</div>
									<div class="gitdetailswrapper"  data-anim="fade-up" data-delay="0.4">
										<div class="getintouchicon">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/emailus_icon.png' ); ?>" alt="">
										</div>
										<div class="gitdetailcontent">
											<h6>Book a call</h6>
											<p>30-minute discovery sessions available Mon–Fri</p>
										</div>										
									</div>
									<div class="gitdetailswrapper"  data-anim="fade-up" data-delay="0.5">
										<div class="getintouchicon">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/emailus_icon.png' ); ?>" alt="">
										</div>
										<div class="gitdetailcontent">
											<h6>Fast response</h6>
											<p>We reply to all enquiries within 1 business day</p>
										</div>										
									</div>
								</div>
								
							</div>
						</div>
					</div>	
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


<script>
const track = document.getElementById('sliderTrack');

// Duplicate cards
track.innerHTML += track.innerHTML;

const cards = document.querySelectorAll('.qa-card');
const originalCount = cards.length / 2;

let current = 0;
const cardHeight = 122;
let isResetting = false;

function setActive(index) {
    cards.forEach(card => card.classList.remove('active'));
    cards[index].classList.add('active');
    cards[index + originalCount].classList.add('active');
}

function slide() {
    if (isResetting) return;

    current++;
    track.style.transition = 'transform 0.8s ease-in-out';
    track.style.transform = `translateY(-${current * cardHeight}px)`;

    setActive(current % originalCount);

    // When reached duplicate set
    if (current === originalCount) {
        isResetting = true;

        setTimeout(() => {
            track.style.transition = 'none';
            current = 0;
            track.style.transform = `translateY(0px)`;

            // Force browser repaint
            track.offsetHeight;

            track.style.transition = 'transform 0.8s ease-in-out';
            isResetting = false;
        }, 800);
    }
}

// Start with first active
setActive(0);

setInterval(slide, 2500);
</script>


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

