<?php
/**
 * Template Name: Home
 */
global $is_iphone;
global $loopPageAbout;
global $loopPageProcess;
global $loopProcess; 
global $loopPageCasestudies;
global $loopCaseStudies; 
global $loopPageContact;
global $countsections;
global $photo_size;


if ( wp_is_mobile() ) {

	$photo_size = "cartogram_medium";
	
	if ( $is_iphone ) {
		$photo_size = "cartogram_small";
	}

} else {
	$photo_size = "cartogram_large";
};


get_template_part('partials/head'); 
get_template_part('partials/loop-page-about');
get_template_part('partials/loop-page-process');
get_template_part('partials/loop-process');
get_template_part('partials/loop-page-casestudies');
get_template_part('partials/loop-casestudies');
get_template_part('partials/loop-page-contact');


	
	echo '<div id="scroller" class="scroller container">';
		
		$count = 0;
		$countsections = 0;
		get_template_part('partials/content-landing');
		
		get_header();

		if ($loopPageAbout->have_posts()) : 

			while ($loopPageAbout->have_posts()) : $loopPageAbout->the_post(); $count++; $countsections++; 
				
				$slug = $post->post_name;

				get_template_part('partials/content', get_post_type() );
				
			endwhile;

		endif;

		if ($loopPageProcess->have_posts()) : 

			while ($loopPageProcess->have_posts()) : $loopPageProcess->the_post(); $count++; $countsections++; 

				$slug = $post->post_name;

				get_template_part('partials/content', get_post_type() );
				
			endwhile;

		endif;

		if ($loopProcess->have_posts()) : 

			while ($loopProcess->have_posts()) : $loopProcess->the_post(); $count++; $countsections++; 
				
				get_template_part('partials/content', get_post_type() );
				
			endwhile;

		endif;

		if ($loopPageCasestudies->have_posts()) : 

			while ($loopPageCasestudies->have_posts()) : $loopPageCasestudies->the_post(); $count++; $countsections++; 
				
				$slug = $post->post_name;

				get_template_part('partials/content', get_post_type());
				
			endwhile;

		endif;

		if ($loopCaseStudies->have_posts()) : 

			while ($loopCaseStudies->have_posts()) : $loopCaseStudies->the_post(); $count++; $countsections++; 
				
				get_template_part('partials/content', get_post_type() );	


				
			endwhile;

		endif;

		if ($loopPageContact->have_posts()) : 

			while ($loopPageContact->have_posts()) : $loopPageContact->the_post(); $count++; $countsections++; 
				
				$slug = $post->post_name;

				get_template_part('partials/content', get_post_type() . $slug );
				
			endwhile;

		endif;

	echo '</div>';

get_footer();
get_template_part('partials/foot');

