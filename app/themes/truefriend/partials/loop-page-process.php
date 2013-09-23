<?php 

global $loopPageProcess; 

$loopPageProcess = new WP_Query();
$loopPageProcess->query( array(

	'pagename' => 'process'
	
));