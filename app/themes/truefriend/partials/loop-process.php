<?php

global $loopProcess; 

$loopProcess = new WP_Query();
$loopProcess->query( array(
	
	'post_type' => 'process',	
	'posts_per_page' => -1	
	
));
?>