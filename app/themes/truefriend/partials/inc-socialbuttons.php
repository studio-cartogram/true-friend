

<?php 
	global $post;
	$url = urlencode(get_permalink());
	$title = urlencode(the_title());
	$photo_obj = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cartogram_large'); 
	$photo = $photo_obj[0];
	//http://atlchris.com/1665/how-to-create-custom-share-buttons-for-all-the-popular-social-services/
	$twitter = 'http://twitter.com/home?status=' . $title . '+' . $url;
	$pinterest = 'http://pinterest.com/pin/create/bookmarklet/?media=' . $photo . '&url=' . $url . '&is_video=false&description=' . $title;

	$linkedin =  'http://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title . '&source=' . $url;

	$facebook = 'http://www.facebook.com/share.php?u=' . $url . '&title='  . $title;
	$mail = 'mailto:?subject=' . $title . ' at ' . $url;
	?>
	<!-- Start Nav Structure -->
	<button class="cn-button" id="cn-button">+</button>
	<div class="cn-wrapper" id="cn-wrapper">
	    <ul>
	      <li><a href="<?php echo $facebook; ?>"><span class="icon-facebook"></span></a></li>
	      <li><a href="<?php echo $pinterest; ?>"><span class="icon-pinterest"></span></a></li>
	      <li><a href="<?php echo $linkedin; ?>"><span class="icon-linkedin"></span></a></li>
	      <li><a href="<?php echo $twitter; ?>"><span class="icon-twitter"></span></a></li>
	      <li><a href="<?php echo $mail; ?>"><span class="icon-mail"></span></a></li>
	     </ul>
	</div>
	<div id="cn-overlay" class="cn-overlay"></div>

