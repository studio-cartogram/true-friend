<?php

global $count;
global $countsections;
global $photo_size;

if ( has_post_thumbnail()) {
	$photo_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $photo_size); 
}  

if (get_the_content()) {
	
	echo '<section data-scroll-index="' . $countsections . '" id="' . $post->post_name  . '" class="anchor overlay cover-image content-section-' . $post->post_name  . '" style="background-image:url(' . $photo_url[0] . ');">';
			
			echo '<article class="content">';

				echo '<i class="visuallyhidden--portable icon content__icon icon-' .get_post_type() . '-' . $count .'"></i>';
				
					the_title('<h2>', '</h2>');
					
					the_content();
				
				echo '<i class="visuallyhidden--portable content__icon-arrow js-gotonext icon-arrow"></i>';

			echo '</article>';

	echo '</section>';

}

if ($photo_url) {
	$countsections++;
	echo '<section data-scroll-index="' . $countsections . '" class="cover-image  js-waypoint-' . $post->post_name  . '" style="background-image:url(' . $photo_url[0] . ');">';

	echo '</section>';

}

?>