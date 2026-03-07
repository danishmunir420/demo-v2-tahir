<?php
/**
 * Template Name: FAQs V2
 * Description: FAQs page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'v2' );
?>

<main id="main">
	<section class="tv-faq tv-page-bg is-gradiant">
		<div class="container">
			<div class="tv-faq__head">
				<h2 class="tv-faq__title" data-anim="fade-up">
					<span class="tv-blue"><?php esc_html_e( 'Frequently', 'hello-elementor' ); ?></span> <?php esc_html_e( 'Asked Questions', 'hello-elementor' ); ?>
				</h2>
				<p class="tv-faq__subtitle" data-anim="fade-up">
					<?php esc_html_e( 'Find answers to common questions about our quality assurance services. Can\'t find what you\'re looking for? Contact our team for personalized assistance.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="tv-faq__list" id="tvFaqAccordion">
				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What is Quality Assurance (QA) and why is it important?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Quality Assurance (QA) is the process of testing and reviewing software to ensure it performs correctly, securely, and consistently before release. It helps identify bugs early, improves user experience, reduces development risks, and ensures your product meets both technical and business requirements.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item is-open">
					<button class="tv-faq__question" type="button" aria-expanded="true" data-anim="fade-up">
						<span><?php esc_html_e( 'What types of testing services do you offer?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'We provide comprehensive testing services including functional testing, regression testing, performance testing, security testing, usability testing, API testing, mobile app testing, and automated testing. Our team customizes testing strategies based on your specific project requirements, technology stack, and business goals.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'How long does a typical QA project take?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'The timeline depends on the size, complexity, and scope of the project. Smaller QA engagements may take a few days, while larger projects or ongoing support can span several weeks or months. After reviewing your requirements, we can provide a more accurate timeline.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you offer automated testing services?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes, we offer automated testing services to improve efficiency, consistency, and long-term reliability. Automation is especially useful for regression testing, repetitive workflows, and continuous integration pipelines.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Can you work with our existing development team?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes, we can work as an extension of your existing team. We collaborate closely with developers, product managers, and stakeholders to align testing efforts with your development process and support faster, more reliable releases.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What is the difference between manual and automated testing?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Manual testing is performed by QA specialists who interact with the application from a user perspective. Automated testing uses scripts and tools to execute predefined test cases repeatedly. Both approaches are valuable and are often used together for better coverage.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'How do you ensure the security of our application?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'We follow structured QA practices to identify vulnerabilities, risks, and weak points during testing. Depending on the project, this may include authentication checks, input validation, API validation, and coordination with security-focused reviews where needed.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What deliverables can we expect from your QA services?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Our deliverables may include test plans, test cases, bug reports, execution summaries, QA status updates, regression reports, and recommendations for improvement. We keep reporting clear and actionable for both technical and non-technical stakeholders.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'How much do your QA services cost?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'The cost depends on the project scope, required testing type, duration, and level of support needed. We offer flexible engagement models based on your business needs and can provide a tailored estimate after understanding your requirements.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you provide support after the testing phase is complete?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes, we can provide post-testing support depending on your needs. This may include retesting fixes, regression validation, release support, and ongoing QA assistance to help ensure your product remains stable.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer( 'v2' );
