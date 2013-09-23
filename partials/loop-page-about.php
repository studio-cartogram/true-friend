<?php 

global $loopPageAbout; 

$loopPageAbout = new WP_Query();
$loopPageAbout->query( array(

	'pagename' => 'about'
	
));