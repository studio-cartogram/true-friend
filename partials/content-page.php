<?php

global $count;
global $countsections;
global $photo_size;

if ( has_post_thumbnail()) {
	$photo_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $photo_size); 
}  
if ($photo_url) {

	echo '<section data-scroll-index="' . $countsections . '" class="cover-image anchor js-waypoint-' . $post->post_name  . '" style="background-image:url(' . $photo_url[0] . ');">';

		the_title('<h1 class="giga center-vertical section-title"><a class="js-gotonext">', '<i class="icon-arrow visuallyhidden--portable content__icon-arrow"></i></a></h1>');

	echo '</section>';

}

if (get_the_content()) { $countsections++;

	echo '<section data-scroll-index="' . $countsections . '" id="' . $post->post_name  . '" class=" cover-image overlay content-section-' . $post->post_name  . ' " style="background-image:url(' . $photo_url[0] . ');">';
			
			echo '<article class="content js-gotonext">';

				echo '<i class="visuallyhidden--portable icon content__icon icon-' . $post->post_name . '"></i>';
					the_content();
				echo '<i class="visuallyhidden--portable content__icon-arrow  icon-arrow"></i>';

			echo '</article>';

	echo '</section>';
}

?>