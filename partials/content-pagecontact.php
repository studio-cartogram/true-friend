<?php

global $count;
global $countsections;

$workshop_title = get_field('workshop_title', 'option');
$hours_title = get_field('hours_title', 'option');
$social_title = get_field('social_title', 'option');

$phone = get_field('phone', 'option'); 
$email = get_field('email', 'option');
$address_line_1 = get_field('address_line_1', 'option');
$address_line_2 = get_field('address_line_2', 'option');

$directions_link = get_field('directions_link', 'option');
$directions_text = get_field('directions_text', 'option');

$hours = get_field('hours', 'option');

$twitter_link = get_field('twitter_link', 'option');
$facebook_link = get_field('facebook_link', 'option');

$form_title = get_field('form_title', 'option');


echo '<section data-scroll-index="' . $countsections . '" id="' . $post->post_name  . '" class="anchor cover-image content-section-' . $post->post_name  . ' js-waypoint-' . $post->post_name  . '">';
	
	echo '<div id="js-map" class="cover-image map"></div>';

	echo '<article class="content-contact js-contact-wrap">';

			echo '<div class="island soft--top--double ">';

				echo '<ul class="multi-list three-cols">';

					echo '<li>';
					
						echo '<h3>'. $workshop_title . '</h3>';
						
						echo '<ul>';
							echo '<li><strong>' . $hours . '</strong></li>';
							echo '<li>' . $phone . '</li>';
							echo '<li><a href="mailto:' . $email . '">' . $email . '</a></li>';
							
						echo '</ul>';

					echo '</li>';
					


					echo '<li>';
						echo '<h3>'. '&nbsp;' . '</h3>';

						echo '<ul>';
							echo '<li>' . $address_line_1 . '</li>';
							echo '<li>' . $address_line_2 . '</li>';
							echo '<li><a href="mailto:' . $directions_link . '">' . $directions_text . '</a></li>';
						echo '</ul>';
						
					echo '</li>';
					
					

					echo '<li>';
				
						echo '<h3>'. $social_title . '</h3>';

						echo '<ul class="nav nav--social">';
							echo '<li><a href="' . $facebook_link . '" class="icon icon-facebook"></a></li>';
							echo '<li><a href="' . $twitter_link . '" class="icon icon-twitter-2"></a></li>';
						echo '</ul>';

					echo '</li>';

					echo '<li class="all-cols">';

						echo '<a class="js-form-toggle btn btn--natural">'. $form_title . '</a>';
					
					echo '</li>';
				
				echo '</ul>';
					
			echo "</div>";
				
			echo '<div class="js-form island--hidden island">';
				
				//the_content();
				gravity_form(1, false, false, false, '', true, 12);

			echo '</div>'; 

	echo '</article>';

echo '</section>';





?>