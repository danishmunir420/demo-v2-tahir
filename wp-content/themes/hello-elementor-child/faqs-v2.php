<?php
/**
 * Template Name: FAQs V2
 * Description: FAQs page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'faqs-v2' );
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
						<span><?php esc_html_e( 'What services does Testiva offer?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Testiva provides end-to-end QA services for web, mobile, and desktop applications, including functional, automation, performance, usability, security, database, API, and AI/ML testing.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item is-open">
					<button class="tv-faq__question" type="button" aria-expanded="true" data-anim="fade-up">
						<span><?php esc_html_e( 'How can your QA services help my business?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'At Testiva, the team helps tech companies in preventing production issues, accelerating time-to-release and improving user experience. Our expertise ensures reliable software, helping you deliver high-quality applications your users can trust.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span>
								<?php 
								echo wp_kses(
									__( 'How do you ensure software quality for<br/> AI/LLM applications?', 'hello-elementor' ),
									array( 'br' => array() )
								); 
								?>
						</span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'At Testiva, AI and LLM applications for accuracy, reliability, safety, and performance. Our testing covers response correctness, hallucinations, bias, fairness, robustness, model drift, output consistency, and security, ensuring AI behaves reliably under real-world scenarios.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What industries do you specialize in?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Testiva provides QA services to companies across many industries, including Healthcare, AI/ML platforms, SaaS, PaaS, edtech, e-commerce, property and dealership management systems, and social media applications.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'How will I know the results of your QA?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Clients working with Testiva receive comprehensive QA reporting: Test plan,  detailed test cases for coverage, bug reporting with reproduction steps, and an overall summary highlighting software performance and key insights.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Which automation tools do you use?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Our team at Testiva leverages a wide range of automation tools, including Selenium, Cypress, Playwright, Appium, JMeter, and AI-assisted frameworks. We also adapt to your preferred tools or integrate automation into your existing CI/CD pipeline.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
					<span>
						<?php 
						echo wp_kses(
						__( 'Can you integrate with our existing development <br/> and CI/CD pipeline?', 'hello-elementor' ),
						array( 'br' => array() )
						); 
						?>
					</span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes. The team at Testiva can work alongside your DevOps or engineering teams, integrating QA processes into your CI/CD pipeline for continuous testing and faster deployments.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you offer a free QA trial or demo?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes. Testiva offers a Free QA Demo ($0, one-time) that includes:
- Testing of one core business workflow
- Bug reporting with reproduction steps and screenshots
- 40 hours turnaround
', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Why should I choose Testiva over other QA companies?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Testiva combines deep QA expertise, cutting-edge tools, and a client-centric approach. We deliver reliable, scalable, and tailored QA services, helping you release software confidently and on schedule.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What is your timezone?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'The Testiva team operates in GMT+5 (PKT) and coordinates with clients in Australia (AEST, GMT+10), the UK (GMT/UTC+0), and the US (EST, GMT-5 / PST, GMT-8) to ensure seamless communication and timely QA updates.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>
				<!--  -->

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you also provide development services?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes, Testiva has a development team under a separate entity that can support your development needs.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What does your QA process look like?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'At Testiva, the QA process follows a structured, end-to-end process: requirement analysis, test planning, test case design (manual & automated), execution, defect reporting and continuous feedback.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'What does the client need to provide for us to start?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'To begin QA work, Testiva typically requires project requirements, design documents, environment access, and any compliance or security guidelines necessary for effective QA.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>

				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Which test reporting or management tools do you use?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Our team at Testiva works with tools such as Jira, TestRail, Zephyr, Google docs, and more. We also offer an in-house test management system for clients who prefer a proprietary platform.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>


				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Are your QA engineers fluent in English?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Yes, The QA engineers at Testiva are fully fluent in English, ensuring clear communication, accurate reporting, and smooth collaboration with global teams.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>


				<div class="tv-faq__item">
					<button class="tv-faq__question" type="button" aria-expanded="false" data-anim="fade-up">
						<span><?php esc_html_e( 'Do you use real devices or virtual devices for testing?', 'hello-elementor' ); ?></span>
						<span class="tv-faq__icon" data-anim="fade-up" aria-hidden="true"></span>
					</button>
					<div class="tv-faq__answer">
						<div class="tv-faq__answer-inner" data-anim="fade-up">
							<?php esc_html_e( 'Testiva maintains an extensive collection of physical hardware devices, including iOS, Android, and desktop devices, along with other widely used devices. If a specific device or configuration is required that is not available in our lab, we can also arrange virtual devices to replicate the required setup and perform testing effectively.', 'hello-elementor' ); ?>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
</main>

<?php
get_footer( 'v2' );

