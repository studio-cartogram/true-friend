<?php

global $count;
global $countsections;
global $countcasestudies;
global $photo_size;
$countcasestudies++;

if ( has_post_thumbnail()) {
	$photo_url = wp_get_attachment_image_src( get_post_thumbnail_id(), $photo_size); 
}  
echo '<section data-scroll-index="' . $countsections . '" id="' . $post->post_name  . '" style="background-image:url(' . $photo_url[0] . ');" class="anchor cover-image overlay content-section-' . $post->post_name  . ' js-waypoint-' . get_post_type()  . '">';
		
		echo '<article class="content">';

			echo '<i class="icon visuallyhidden--portable content__icon icon-' . get_post_type() . '"><span>' .$countcasestudies .'</span></i>';
				the_title('<h2>', '</h2>');
				the_content();
			echo "<i class='visuallyhidden--portable content__icon-arrow gotonextLink icon-arrow'></i>";

		echo '</article>';

echo '</section>';
$countsections++;
echo '<section class="cover-image" data-scroll-index="' . $countsections . '">';
	
	if(get_field('images')):

		echo '<div class="slides">'; 
 			

			
			echo '<ul class="slides-container">';
 		
			while(has_sub_field('images')): 
				
				echo '<li>';
					
					$attachment_id = get_sub_field('image');
					echo wp_get_attachment_image( $attachment_id, $photo_size );
					
				echo '</li>';
			
			endwhile;

			echo '</ul>';

			echo '<nav class="slides-navigation">';
			
				echo'<a href="#" class="next">Next</a>';
				echo '<a href="#" class="prev">Previous</a>';
			
			echo '</nav>';
			
			echo '<h3 class="casestudy-title">' . get_the_title() . '</h3>';
		
		echo '</div>';
 
 
	endif; 
	 
echo '</section>';

?>