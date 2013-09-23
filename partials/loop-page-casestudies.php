<?php 

global $loopPageCasestudies; 

$loopPageCasestudies = new WP_Query();
$loopPageCasestudies->query( array(

	'pagename' => 'case-studies'
	
));