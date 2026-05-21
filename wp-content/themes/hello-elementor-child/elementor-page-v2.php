<?php
/**
 * Template Name: Elementor Page V2
 * Description: General V2 page layout with V2.1 header, V2 footer, and Elementor content.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header( 'v2.1' );
?>

<main id="main">
	<section class="tv-faq tv-page-bg is-gradiant">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</section>
</main>

<?php
get_footer( 'v2' );
