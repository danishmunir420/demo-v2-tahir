<?php
/**
 * Template Name: Electronic Health Records Startups
 * Description: EHR and clinical data platforms — V2 landing template with QA copy for charts, orders, FHIR, and regulated workflows.
 *
 * @package HelloElementor
 */

get_header( 'v2.1' );
?>


<main id="main">
	<section class="subpagesheromainsection tv-healthcare-herosection paddingleftright">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="herosectionmainwrapper">
						<div class="row">
							<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
												
								<div class="tv-healthcare-hero__content">
									<h1 class="tv-healthcare-hero__title" data-anim="fade-up">Clinical data should be <span class="tv-blue">trustworthy</span> at every click</h1>
									<p class="tv-healthcare-hero__subtitle" data-anim="fade-up">Testiva delivers specialist QA for EHR and clinical documentation platforms — charts, orders, FHIR APIs, and role-based access tested like production depends on it.</p>
								
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
            <h2>FHIR &amp; API interoperability</h2>
            <p>Resources, bundles, subscriptions, and error handling across vendor boundaries</p>
        </div>

        <div class="qa-card ">
            <h2>Orders, results &amp; CPOE</h2>
            <p>Medication, lab, and imaging workflows — dosing, duplicates, and sign-off rules</p>
        </div>

        <div class="qa-card">
            <h2>RBAC &amp; break-glass</h2>
            <p>Role matrices, emergency access, and immutable audit trails validated</p>
        </div>

        <div class="qa-card">
            <h2>Clinical documentation</h2>
            <p>Notes, templates, problem lists, and data integrity from capture to archive</p>
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



	<section class="tv-about-belief tv-health-about whyitmattersection paddingleftright" id="qa-services">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Why it matters</span>
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">What happens when EHR/EMR systems<br/>aren't tested properly</span></h2>
				<p class="tv-section__subtitle" data-anim="fade-up">In clinical records, a single data error isn't just a software bug, it's a misdiagnosis risk, a compliance violation, or a patient safety incident with lasting consequences.</p>
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
											<h6>Clinical data entry &amp; display errors</h6>
											<p>Incorrect rendering of lab results, medication dosages or allergy flags in the patient record can directly influence clinical decisions with serious downstream consequences.</p>
										</div>
									</div>
									<div class="fourrowsswrapper"  data-anim="fade-up" data-delay="0.3">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Interoperability failures</h6>
											<p>Broken HL7 or FHIR integrations cause patient data to arrive incomplete, out of sequence or not at all — leaving clinicians working with an incomplete picture.</p>
										</div>
									</div>
									<div class="fourrowsswrapper" data-anim="fade-up" data-delay="0.5">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Audit trail gaps</h6>
											<p>Missing or inaccurate access logs, incomplete change histories and broken e-signature workflows expose platforms to HIPAA enforcement and legal liability.</p>
										</div>
									</div>
									<div class="fourrowsswrapper" data-anim="fade-up" data-delay="0.7">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/markicon.png' ); ?>" alt="">
										<div class="fourrowsrightcontent">
											<h6>Workflow &amp; role permission errors</h6>
											<p>Misconfigured access controls that expose sensitive records to the wrong clinical roles, or block the right ones, disrupt care delivery and create compliance incidents simultaneously.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="protectplatformsection" data-anim="fade-up" data-delay="0.3">
									<h4>How Testiva protects your platform</h4>
									<ul>
	<li data-anim="fade-up" data-delay="0.1">
		<strong>Clinical systems expertise —</strong> Our QA engineers specialise in EHR workflows and health data standards, not generic enterprise software testing repurposed for healthcare.
	</li>

	<li data-anim="fade-up" data-delay="0.2">
		<strong>HL7 &amp; FHIR validation —</strong> We test message structure, resource completeness, data type fidelity and integration correctness across all major health information exchange standards.
	</li>

	<li data-anim="fade-up" data-delay="0.3">
		<strong>Role-based access testing —</strong> Clinician, nurse, administrator and patient portal permission boundaries tested exhaustively across every record type and workflow state.
	</li>

	<li data-anim="fade-up" data-delay="0.4">
		<strong>Data integrity &amp; audit QA —</strong> End-to-end traceability of every record creation, modification, deletion and access event validated against compliance requirements.
	</li>

	<li data-anim="fade-up" data-delay="0.5">
		<strong>Compliance-first approach —</strong> HIPAA, HITECH, ONC certification criteria and state-specific health data regulations built into every test cycle by default.
	</li>
</ul>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tv-section s-tv-regulated-env paddingleftright">
		<div class="container">
			<div class="tv-section__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">What we test</span>
				<h2 class="tv-section__title" data-anim="fade-up"><span class="tv-blue">Electronic Health Records (EHR/EMR) Testing</span></h2>
				<p class="tv-section__subtitle" data-anim="fade-up">Core areas of an EHR/EMR system we cover Sub: Every workflow your clinicians, administrators and patients depend on is validated, stress-tested, and verified across roles, integrations and regulatory requirements.
</p>
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
											<h6>Patient record creation &amp; management</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Demographics capture accuracy, duplicate record detection, record merge logic, MRN assignment and patient matching algorithm correctness across registration workflows.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.2" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/goal-settings-tracking.png' ); ?>" alt="">
											<h6>Clinical documentation &amp; charting</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>SOAP note workflows, structured data entry, template logic, auto-population accuracy, co-signature routing and document version control testing.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.3" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/social-engagements.png' ); ?>" alt="">
											<h6>Medication management &amp; e-prescribing</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Medication order accuracy, drug-drug and drug-allergy interaction alert logic, formulary checking, controlled substance workflows and pharmacy routing correctness.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.4" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/coaching-guidance.png' ); ?>" alt="">
											<h6>Lab &amp; diagnostic result management</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Result ingestion accuracy, critical value alert delivery, abnormal flag rendering, result acknowledgement workflows and historical trend display correctness.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xl-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.5" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/wearables-integrations.png' ); ?>" alt="">
											<h6>HL7 &amp; FHIR interoperability</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Message structure validation, resource completeness, data type fidelity, ADT event handling and integration correctness across connected health systems.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.6" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/notifications-alerts.png' ); ?>" alt="">
											<h6>Role-based access &amp; permission control</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Clinician, nurse, administrator and patient portal access boundary testing, break-glass access logging and minimum necessary access enforcement.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.7" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/data-insights.png' ); ?>" alt="">
											<h6>Audit trail &amp; compliance logging</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Record access logging completeness, modification history accuracy, e-signature integrity, consent documentation and HIPAA audit report correctness.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.8" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/compliance-health-regulations.png' ); ?>" alt="">
											<h6>Billing, coding &amp; revenue cycle</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>ICD and CPT code assignment accuracy, claim generation correctness, insurance eligibility verification, prior authorisation workflows and denial handling logic.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"  data-anim="fade-up" data-delay="0.9" >
								<div class="flip-card">
									<div class="flip-card-inner">
										<div class="flipeffectwrapperbefore">
											<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/performance-reliablity.png' ); ?>" alt="">
											<h6>Performance &amp; data integrity under load</h6>
										</div>
										<div class="flipeffectwrapperafter">
											<p>Concurrent user stress testing, large patient panel load performance, bulk data import integrity and system behaviour during peak clinical workflow periods.</p>
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


	<?php get_template_part( 'template-parts/v2/testimonial-slider' ); ?>

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
						<p class="tv-plan-card__desc" data-anim="fade-up">New EHR modules &amp; MVP chart features</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$2,500</strong><span>/month</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Functional &amp; UI testing</li>
							<li data-anim="fade-up">Mobile testing — 2 devices</li>
							<li data-anim="fade-up">Patient chart &amp; registration flows</li>
							<li data-anim="fade-up">Basic orders &amp; results viewing</li>
							<li data-anim="fade-up">Role-based smoke coverage</li>
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
						<p class="tv-plan-card__desc" data-anim="fade-up">Scaling EHRs with FHIR &amp; multi-role workflows</p>
						<div class="tv-plan-card__price" data-anim="fade-up"><strong>$5,500</strong><span>/month</span></div>
						<ul class="tv-plan-card__list">
							<li data-anim="fade-up">Everything in Vital Check</li>
							<li data-anim="fade-up">API testing (REST &amp; FHIR)</li>
							<li data-anim="fade-up">Clinical documentation &amp; templates</li>
							<li data-anim="fade-up">CPOE &amp; results acknowledgement QA</li>
							<li data-anim="fade-up">CDS &amp; rules engine scenarios</li>
							<li data-anim="fade-up">Reporting &amp; registry extracts</li>
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
						<p class="tv-plan-card__desc" data-anim="fade-up">Enterprise EHR depth — security, CDS, and bulk interop</p>
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
		
			<div class="tv-section__head s-tv-faq__head headingtopsection">
				<span class="tv-process-steps__eyebrow sectiontopsubheading" data-anim="fade-up">Why it matters</span>
				<h2 class="tv-section__title -tv-faq__title" data-anim="fade-up">
					<span class="tv-blue">Common questions</span>
				</h2>
			</div>

			<div class="tv-faq__list" id="tvFaqAccordion">
				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'Do you sign NDAs before starting?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes. We execute mutual NDAs before accessing your environments, PHI, or proprietary workflows. For regulated workloads we align with your vendor security packet and BAA process.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'Do you test on real devices or emulators?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'We prioritise real clinical workstations, tablets, and phones — plus real browsers and identity integrations. Simulators supplement coverage but never replace OS-level behaviour for clinical clients.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'How long does onboarding take?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Most teams move from kickoff to first test cycle within one to two weeks, depending on environment access, test accounts, and integration readiness with your EHR or identity provider.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'Which tools do you use for bug tracking?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'We meet you where you work: Jira, Linear, Azure DevOps, GitHub Issues, or your internal tracker. Every defect ships with reproduction steps, evidence, severity, and environment notes.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'Can I upgrade or downgrade my package?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes. Coverage tiers flex as your roadmap changes. We will right-size the plan against release risk, integrations, and compliance needs — with clear notice on scope adjustments.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<div class="tv-faq__item ">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span class="questionofdiv"><?php esc_html_e( 'Do you offer one-time audits or project-based work?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes. We run focused QA audits, hardening sprints before launches, and fixed-scope engagements — in addition to monthly partnership tiers — when you need a time-boxed assessment.', 'hello-elementor' ); ?>
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
								<p data-anim="fade-up" data-delay="0.2">Tell us about your EHR or clinical data product and we'll map out exactly what testing you need — no obligation.</p>
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
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/phoneacall_icon.png' ); ?>" alt="">
										</div>
										<div class="gitdetailcontent">
											<h6>Book a call</h6>
											<p>30-minute discovery sessions available Mon–Fri</p>
										</div>										
									</div>
									<div class="gitdetailswrapper"  data-anim="fade-up" data-delay="0.5">
										<div class="getintouchicon">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/html-v2/assets/images/fastresponse_icon.png' ); ?>" alt="">
										</div>
										<div class="gitdetailcontent">
											<h6>Fast response</h6>
											<p>We reply to all enquiries within 1 business day</p>
										</div>										
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<?php echo do_shortcode('[contact-form-7 id="2cd6e70" title="Get in Touch"]'); ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
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

