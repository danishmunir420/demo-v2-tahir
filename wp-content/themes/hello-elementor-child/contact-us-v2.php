<?php
/**
 * Template Name: Contact Us V2
 * Description: Contact Us page using the V2 global design.
 *
 * @package HelloElementor
 */

get_header( 'contact-v2' );
?>

<main id="main">
	<section class="tv-contact-page tv-page-bg is-gradiant">
		<div class="container">
			<div class="tv-contact-page__head">
				<h1 class="tv-contact-page__title" data-anim="fade-up">
					<span class="tv-blue"><?php esc_html_e( 'Get', 'hello-elementor' ); ?></span> <?php esc_html_e( 'in Touch', 'hello-elementor' ); ?>
				</h1>
				<p class="tv-contact-page__subtitle" data-anim="fade-up">
					<?php esc_html_e( 'Have a project in mind? Let\'s discuss how our QA expertise can ensure your software delivers exceptional quality.', 'hello-elementor' ); ?>
				</p>
			</div>

			<div class="tv-contact-info">
				<div class="tv-contact-info__item">
					<h3 data-anim="fade-up"><?php esc_html_e( 'Email', 'hello-elementor' ); ?></h3>
					<p data-anim="fade-up"><a href="mailto:info@testiva.com">info@testiva.com</a></p>
				</div>

				<div class="tv-contact-info__item">
					<h3 data-anim="fade-up"><?php esc_html_e( 'Phone', 'hello-elementor' ); ?></h3>
					<p data-anim="fade-up"><a href="tel:+19237306357">+1(923)-730-635-7</a></p>
				</div>

				<div class="tv-contact-info__item">
					<h3 data-anim="fade-up"><?php esc_html_e( 'Main Office', 'hello-elementor' ); ?></h3>
					<p data-anim="fade-up">17 C, DHA Rahbar, Lahore,<br>Pakistan</p>
				</div>
			</div>

			<div class="tv-contact-form-wrap">
				<h2 class="tv-contact-form-wrap__title" data-anim="fade-up">
					<span class="tv-blue"><?php esc_html_e( 'Send Us', 'hello-elementor' ); ?></span> <?php esc_html_e( 'A Message', 'hello-elementor' ); ?>
				</h2>

				<div class="tv-contact-card">
					<form class="tv-contact-form" action="#" method="post">
						<div class="tv-contact-form__grid">
							<div class="tv-field">
								<label for="tvName" data-anim="fade-up"><?php esc_html_e( 'Name', 'hello-elementor' ); ?> *</label>
								<input data-anim="fade-up" id="tvName" name="name" type="text" placeholder="<?php esc_attr_e( 'Your full name', 'hello-elementor' ); ?>" required>
							</div>

							<div class="tv-field">
								<label for="tvEmail" data-anim="fade-up"><?php esc_html_e( 'Email', 'hello-elementor' ); ?> *</label>
								<input data-anim="fade-up" id="tvEmail" name="email" type="email" placeholder="<?php esc_attr_e( 'your.email@company.com', 'hello-elementor' ); ?>" required>
							</div>

							<div class="tv-field">
								<label for="tvPhone" data-anim="fade-up"><?php esc_html_e( 'Phone', 'hello-elementor' ); ?></label>
								<input data-anim="fade-up" id="tvPhone" name="phone" type="tel" placeholder="<?php esc_attr_e( '+1 (555) 000-0000', 'hello-elementor' ); ?>">
							</div>

							<div class="tv-field">
								<label for="tvCompany" data-anim="fade-up"><?php esc_html_e( 'Company', 'hello-elementor' ); ?></label>
								<input data-anim="fade-up" id="tvCompany" name="company" type="text" placeholder="<?php esc_attr_e( 'Your company name', 'hello-elementor' ); ?>">
							</div>
						</div>

						<div class="tv-field tv-field--full">
							<label data-anim="fade-up" for="tvMessage"><?php esc_html_e( 'Message', 'hello-elementor' ); ?></label>
							<textarea data-anim="fade-up" id="tvMessage" name="message" placeholder="<?php esc_attr_e( 'Tell us about your project', 'hello-elementor' ); ?>"></textarea>
						</div>

						<div class="tv-contact-form__actions">
							<button type="submit" class="tv-btn tv-btn--primary" data-anim="fade-up">
								<?php esc_html_e( 'SEND MESSAGE', 'hello-elementor' ); ?>
								<span data-anim="fade-up" class="tv-caret-white" aria-hidden="true"></span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer( 'v2' );

