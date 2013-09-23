<?php 

global $loopPageContact; 

$loopPageContact = new WP_Query();
$loopPageContact->query( array(

	'pagename' => 'contact'
	
));