<?php
/**
 * Testimonial slider section (V2).
 *
 * @package HelloElementorChild
 *
 * @var array $args {
 *     @type string $section_classes Section wrapper classes (spacing e.g. py-5, py-10).
 *     @type string $container_class  Container class.
 *     @type string $title            Section heading text.
 *     @type string $title_classes    Heading classes.
 *     @type string $title_anim        data-anim value for heading.
 *     @type string $wrapper_anim     data-anim on swiper-wrapper; empty to omit.
 *     @type string $dots_anim        data-anim on dots; empty to omit.
 *     @type array  $slides           Slide data; empty uses inc/data/testimonials-default.php.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$defaults = array(
	'section_classes' => 'tv-testimonials py-5',
	'container_class' => 'container',
	'title'           => 'What’s People Say’s',
	'title_classes'   => 'tv-testimonials__title text-center mb-5',
	'title_anim'      => 'fade-up',
	'wrapper_anim'    => 'cards',
	'dots_anim'       => '',
	'slides'          => array(),
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( empty( $args['slides'] ) ) {
	if ( ! function_exists( 'hello_elementor_child_get_default_testimonials' ) ) {
		require_once get_stylesheet_directory() . '/inc/data/testimonials-default.php';
	}
	$args['slides'] = hello_elementor_child_get_default_testimonials();
}

$theme_uri = get_stylesheet_directory_uri();
?>
	<!-- Testimonial slider -->
	<section class="<?php echo esc_attr( $args['section_classes'] ); ?>">
		<div class="<?php echo esc_attr( $args['container_class'] ); ?>">
			<h2 class="<?php echo esc_attr( $args['title_classes'] ); ?>"<?php echo $args['title_anim'] ? ' data-anim="' . esc_attr( $args['title_anim'] ) . '"' : ''; ?>><?php echo esc_html( $args['title'] ); ?></h2>

			<div class="swiper tv-testimonials-swiper">
				<div class="swiper-wrapper"<?php echo $args['wrapper_anim'] ? ' data-anim="' . esc_attr( $args['wrapper_anim'] ) . '"' : ''; ?>>
					<?php
					$video_index = 0;
					foreach ( $args['slides'] as $slide ) :
						$type = isset( $slide['type'] ) ? $slide['type'] : 'image';

						if ( 'video' === $type ) :
							++$video_index;
							$video_url = $theme_uri . $slide['video_src'];
							?>
					<?php if ( 1 === $video_index ) : ?>
					<!-- Video 1-->
					<?php else : ?>
					<!--Video 2-->
					<?php endif; ?>
					<div class="swiper-slide">
                            <div class="tv-testimonial">
                                <!-- VIDEO SLIDE -->
                                <div class="tv-testimonial__media">
                                    <video class="tv-testimonial-video" muted controls playsinline preload="auto" autoplay>
                                    <source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
                                    </video>
                                </div>

                                <div class="tv-testimonial__card">
                                <p class="tv-testimonial__quote" data-anim="fade-up">
                                    <?php echo esc_html( $slide['quote'] ); ?>
                                </p>

                                <div class="tv-testimonial__footer">
                                    <div class="tv-testimonial__name" data-anim="fade-up"><?php echo esc_html( $slide['name'] ); ?></div>
                                    <div class="tv-testimonial__role" data-anim="fade-up"><?php echo esc_html( $slide['role'] ); ?></div>
                                </div>
                                </div>
                            </div>
                        </div>
							<?php
						else :
							$image_url    = $theme_uri . $slide['image_src'];
							$image_alt    = isset( $slide['image_alt'] ) ? $slide['image_alt'] : 'Client photo';
							$anim_first   = ! empty( $slide['quote_anim_first'] );
							$role_break   = ! empty( $slide['role_break'] );
							?>
					<div class="swiper-slide">
						<div class="tv-testimonial">
							<div class="tv-testimonial__media">
								<img data-anim="image" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
							</div>

							<div class="tv-testimonial__card">
								<?php if ( $anim_first ) : ?>
								<p data-anim="fade-up" class="tv-testimonial__quote">
									<?php echo esc_html( $slide['quote'] ); ?>
								</p>
								<?php else : ?>
								<p class="tv-testimonial__quote" data-anim="fade-up">
									<?php echo esc_html( $slide['quote'] ); ?>
								</p>
								<?php endif; ?>

								<div class="tv-testimonial__footer">
									<div class="tv-testimonial__name" data-anim="fade-up"><?php echo esc_html( $slide['name'] ); ?></div>
									<?php if ( $role_break ) : ?>
									<div class="tv-testimonial__role" data-anim="fade-up"><?php echo esc_html( $slide['role'] ); ?>

</div>
									<?php else : ?>
									<div class="tv-testimonial__role" data-anim="fade-up"><?php echo esc_html( $slide['role'] ); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
							<?php
						endif;
					endforeach;
					?>
				</div>

				<div class="tv-testimonials__dots"<?php echo $args['dots_anim'] ? ' data-anim="' . esc_attr( $args['dots_anim'] ) . '"' : ''; ?>></div>
			</div>
		</div>
	</section>
