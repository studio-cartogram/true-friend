<?php 
$loopProcess = new WP_Query();
$loopProcess->query( array(
	'post_type' = 'process',
	'posts_per_page' = -1	
	));
	if ($loopProcess->have_posts()) : ?>
	<div class="row ">
		<div class="columns twelve">
			<?php while ($loopProcess->have_posts()) : $loopProcess->the_post(); ?>
				<?php get_template_part('parts/content/content', get_post_format() ); ?>	
			<?php endwhile; ?>
		</div>	
	</div>		
	<?php endif; 
?>