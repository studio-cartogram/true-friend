<?php $slides = new WP_Query();
$slides->query( array(
	'post_type' => 'slides'	
	));?>
<?php if ($slides->have_posts()) : ?>
<ul id="cbp-bislideshow" class="cbp-bislideshow">
	<?php while ($slides->have_posts()) : $slides->the_post(); ?>
		<li>
			<?php the_post_thumbnail() ?>
		</li>
	<?php endwhile; ?>
</ul>
<div id="cbp-bicontrols" class="cbp-bicontrols">
    <span class="cbp-biprev icon-arrow-left"></span>
    <span class="cbp-binext icon-arrow-right"></span>
</div>
<?php endif; 