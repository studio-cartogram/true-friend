<?php

global $loopCaseStudies; 

$loopCaseStudies = new WP_Query();
$loopCaseStudies->query( array(
	
	'post_type' => 'casestudies',
	'posts_per_page' => -1	
	
	));
?>