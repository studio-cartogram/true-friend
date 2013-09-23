<?php
/**
 * The template used for displaying post meta information
 *
 * @package mattbanks
 * @since mattbanks 2.5
 */
?>
<ul class="list-inline">
	<li><?php the_time('F jS, Y') ?></li>
	<?php if('photos'==get_post_type()) { ?> 
		<?php $categories_list = get_the_category_list(', ') ;
		if ($categories_list) { echo '<li><span>' . $categories_list . '</span></li>'; } ?>
		<li class="right"><a id="js-comment-link" class="comment-link" href="#respond"><span class="icon-comments"></span></a></li>
	<?php } else { ?>
		<?php echo get_the_tag_list('<li><strong>Tagged in</strong> <span>', ', ' , '</span></li>') ;
		

	} ?>
	
	
</ul>
