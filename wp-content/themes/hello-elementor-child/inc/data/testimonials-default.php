<?php
/**
 * Default testimonial slides for the V2 testimonial slider partial.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns the default testimonial slides (matches home-v2.php content).
 *
 * @return array<int, array<string, mixed>>
 */
function hello_elementor_child_get_default_testimonials() {
	$assets_base = '/html-v2/assets/';

	return array(
		array(
			'type'      => 'video',
			'video_src' => $assets_base . 'videos/TestivaTestimonial.mp4',
			'quote'     => '“Worked with Testiva for years in health tech; their thorough testing helped us deliver stable, high-quality software.Highly professional and easy to work with.”',
			'name'      => 'Francesco Guagliardo',
			'role'      => 'Lead Software Developer @ Owlstone Medical',
		),
		array(
			'type'      => 'video',
			'video_src' => $assets_base . 'videos/RokasMMT.mp4',
			'quote'     => '“Testiva improved our QA process and integrated smoothly with our workflow and testing stack. They delivered reliable UI testing and valuable tech recommendations.”',
			'name'      => 'Rokas Mackevičius',
			'role'      => 'Lead Software Engineer @ Machine Medicine',
		),
		array(
			'type'       => 'image',
			'image_src'  => $assets_base . 'images/steve.jpg',
			'image_alt'  => 'Client photo',
			'quote'      => '“Testiva is a great team to work with. I’ve hired them multiple times and recommended them to others, all impressed by their thorough work. Highly recommended for QA.”',
			'name'       => 'Steve Brickman',
			'role'       => 'Director of Technology @ mscripts',
			'role_break' => true,
		),
		array(
			'type'              => 'image',
			'image_src'         => $assets_base . 'images/chaya.jpg',
			'image_alt'         => 'Client photo',
			'quote'             => '“Testiva team is highly skilled and extremely thorough. I trust them for accurate and timely delivery. They are a reliable resource for any project.”',
			'name'              => 'Chaya Feigelstock',
			'role'              => 'Senior Marketing Coordinator @ Nextiva',
			'quote_anim_first'  => true,
		),
		array(
			'type'              => 'image',
			'image_src'         => $assets_base . 'images/hussien.jpg',
			'image_alt'         => 'Client photo',
			'quote'             => '“Testiva team delivered outstanding quality with great professionalism. Communication was excellent and delivery met expectations. Highly recommended.”',
			'name'              => 'Hussein Khazaal.',
			'role'              => 'Founder & CEO @ Feenix.ai',
			'quote_anim_first'  => true,
		),
		array(
			'type'              => 'image',
			'image_src'         => $assets_base . 'images/murry.jpg',
			'image_alt'         => 'Client photo',
			'quote'             => '“Excellent team worked well with minimal supervision and did a great job. Their work helped us improve the robustness of the platform.”',
			'name'              => 'Murray Bryant',
			'role'              => 'Co-Founder / CTO @ Global Recruit Co.',
			'quote_anim_first'  => true,
		),
	);
}
