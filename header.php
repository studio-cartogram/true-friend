<?php 

/**
 *	Template for Fixed header Bar
 */


global $loopPageAbout;
global $loopPageProcess;
global $loopProcess; 
global $loopPageCasestudies;
global $loopCaseStudies; 
global $loopPageContact;

$count = 0;
$countcasestudies = 0;

echo '<nav class="js-nav-fixed fixed--bottom fixed--fit bar">';
	
	echo '<span class="js-nav-trigger nav-trigger" ></span>';
	
	echo '<ul class="nav nav--banner js-trigger-scroll">';


		echo '<li class="float--left logo--small "><a class="home" href="#home"></a> </li>';

		if ($loopPageAbout->have_posts()) : 
		
			while ($loopPageAbout->have_posts()) : $loopPageAbout->the_post(); $count++;
				
				echo '<li class="link-pageabout"><a href="' . $post->post_name . '">' . get_the_title() . '</a></li>';
			
			endwhile;
		
		endif;

		if ($loopPageProcess->have_posts()) : 
		
			while ($loopPageProcess->have_posts()) : $loopPageProcess->the_post(); $count++; 
				
				echo '<li class="link-pageprocess"><a href="' . $post->post_name . '">' . get_the_title() . '</a></li>';
			
			endwhile;
		
		endif;

		if ($loopProcess->have_posts()) : $count = 0;
			
		
				while ($loopProcess->have_posts()) : $loopProcess->the_post(); $count++; 
					
					echo '<li class="link-process"><a href="' . $post->post_name . '">' . $count . '</a></li>';
				
				endwhile;


		
		endif;

		if ($loopPageCasestudies->have_posts()) : 
		
			while ($loopPageCasestudies->have_posts()) : $loopPageCasestudies->the_post(); $count++;
				
				echo '<li class="link-pagecasestudy"><a href="' . $post->post_name . '">' . get_the_title() . '</a></li>';
			
			endwhile;
		
		endif;

		if ($loopCaseStudies->have_posts()) : $count = 0;
		
			while ($loopCaseStudies->have_posts()) : $loopCaseStudies->the_post(); $count++; $countcasestudies++; 
				
				echo '<li class="link-casestudies"><a href="' . $post->post_name . '">' . $countcasestudies . '</a></li>';
			
			endwhile;
		
		endif;

		if ($loopPageContact->have_posts()) : 
			
			while ($loopPageContact->have_posts()) : $loopPageContact->the_post(); $count++;
				
				echo '<li class="link-pagecontact"><a href="' . $post->post_name . '">' . get_the_title() . '</a></li>';
			
			endwhile;
		
		endif;

	echo '</ul>';

echo '</nav>';