<?php 
	global $photo_size;

	$rows = get_field('landing_images', option ); // get all the rows
	if ($rows) {
		$rand_row = $rows[ array_rand( $rows ) ]; // get the first row
	}	
	$rand_row_image = $rand_row['landing_image' ]; // get the sub field value 
	
	// Note
	// $first_row_image = 123 (image ID)
	$image = wp_get_attachment_image_src( $rand_row_image, $photo_size );
	// url = $image[0];
	// width = $image[1];
	// height = $image[2];
?>

<section id="home" data-scroll-index="<?php echo '0' ?>" class="cover-image anchor" style=" background-image:url(<?php echo $image[0]; ?>)">
	<div class="logo">
		
	</div>
	<div class="logo logo__part--1">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="374.624px" height="374.624px" viewBox="0 0 374.624 374.624" enable-background="new 0 0 374.624 374.624"
	 xml:space="preserve">
			<g>
			<polygon class="logo-primary" fill="#E75300" points="83.25,332.999 97.125,319.124 97.125,346.874 	"/>
			<polygon class="logo-primary" fill="#E75300" points="97.125,305.249 83.25,291.374 83.25,249.749 97.125,263.624 	"/>
			<polygon class="logo-primary" fill="#E75300" points="0,291.374 13.874,305.249 13.874,360.749 0,374.624 	"/>
			<polygon class="logo-primary" fill="#E75300" points="332.999,41.625 346.874,27.75 346.874,55.5 	"/>
			<polygon class="logo-primary" fill="#E75300" points="249.749,124.875 249.749,0 263.624,13.875 263.624,111 	"/>
			<polygon class="logo-primary" fill="#E75300" points="138.749,360.749 124.875,374.624 124.875,249.749 138.749,263.624 	"/>
			<polygon class="logo-primary" fill="#E75300" points="124.875,208.125 138.749,194.249 138.749,221.999 	"/>
			<polygon class="logo-primary" fill="#E75300" points="55.5,235.875 41.624,249.749 41.624,124.875 55.5,138.749 	"/>
			<polygon class="logo-primary" fill="#E75300" points="97.125,180.375 97.125,194.249 83.25,208.125 83.25,166.499 	"/>
			<polygon class="logo-primary" fill="#E75300" points="138.749,111 124.875,124.875 124.875,0 138.749,13.875 	"/>
			<polygon class="logo-primary" fill="#E75300" points="208.125,124.875 221.999,111 221.999,69.375 208.125,83.25 	"/>
			<polygon class="logo-primary" fill="#E75300" points="180.375,138.749 180.375,152.625 166.499,166.499 166.499,124.875 	"/>
			<polygon class="logo-primary" fill="#E75300" points="166.499,166.499 180.375,180.375 180.375,235.875 166.499,249.749 	"/>
			<polygon class="logo-primary" fill="#E75300" points="221.999,235.875 208.125,249.749 208.125,124.875 221.999,138.749 	"/>
			<polygon class="logo-primary" fill="#E75300" points="249.749,374.624 249.749,249.749 263.624,263.624 263.624,360.749 	"/>
			<polygon class="logo-primary" fill="#E75300" points="13.874,13.875 13.874,27.75 0,41.625 0,0 	"/>
			<polygon class="logo-primary" fill="#E75300" points="55.5,111 55.5,27.75 41.624,41.625 41.624,124.875 	"/>
			<polygon class="logo-primary" fill="#E75300" points="346.874,346.874 346.874,360.749 332.999,374.624 332.999,332.999 	"/>
			</g>
		</svg>
	</div>
	<div class="logo logo__part--2">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="374.624px" height="374.624px" viewBox="0 0 374.624 374.624" enable-background="new 0 0 374.624 374.624"
		 xml:space="preserve">
			<g>
				<polygon class="logo-light" fill="#F3783C" points="97.125,346.874 27.75,346.874 41.624,332.999 83.25,332.999 	"/>
				<polygon class="logo-light" fill="#F3783C" points="111,263.624 97.125,263.624 83.25,249.749 124.875,249.749 	"/>
				<polygon class="logo-light" fill="#F3783C" points="97.125,305.249 13.874,305.249 0,291.374 83.25,291.374 	"/>
				<polygon class="logo-light" fill="#F3783C" points="360.749,13.875 263.624,13.875 249.749,0 374.624,0 	"/>
				<polygon class="logo-light" fill="#F3783C" points="360.749,97.125 277.499,97.125 291.374,83.25 374.624,83.25 	"/>
				<polygon class="logo-light" fill="#F3783C" points="346.874,55.5 277.499,55.5 291.374,41.625 332.999,41.625 	"/>
				<polygon class="logo-light" fill="#F3783C" points="235.875,263.624 138.749,263.624 124.875,249.749 249.749,249.749 	"/>
				<polygon class="logo-light" fill="#F3783C" points="235.875,346.874 152.625,346.874 166.499,332.999 249.749,332.999 	"/>
				<polygon class="logo-light" fill="#F3783C" points="235.875,305.249 152.625,305.249 166.499,291.374 249.749,291.374 	"/>
				<polygon class="logo-light" fill="#F3783C" points="152.625,138.749 55.5,138.749 41.624,124.875 166.499,124.875 	"/>
				<polygon class="logo-light" fill="#F3783C" points="138.749,221.999 69.374,221.999 83.25,208.125 124.875,208.125 	"/>
				<polygon class="logo-light" fill="#F3783C" points="152.625,180.375 97.125,180.375 83.25,166.499 166.499,166.499 	"/>
				<polygon class="logo-light" fill="#F3783C" points="152.625,13.875 138.749,13.875 124.875,0 166.499,0 	"/>
				<polygon class="logo-light" fill="#F3783C" points="152.625,55.5 235.875,55.5 249.749,41.625 166.499,41.625 	"/>
				<polygon class="logo-light" fill="#F3783C" points="194.249,138.749 180.375,138.749 166.499,124.875 208.125,124.875 	"/>
				<polygon class="logo-light" fill="#F3783C" points="194.249,180.375 180.375,180.375 166.499,166.499 208.125,166.499 	"/>
				<polygon class="logo-light" fill="#F3783C" points="235.875,138.749 221.999,138.749 208.125,124.875 249.749,124.875 	"/>
				<polygon class="logo-light" fill="#F3783C" points="319.124,221.999 235.875,221.999 249.749,208.125 332.999,208.125 	"/>
				<polygon class="logo-light" fill="#F3783C" points="263.624,263.624 249.749,249.749 374.624,249.749 360.749,263.624 	"/>
				<polygon class="logo-light" fill="#F3783C" points="111,13.875 124.875,0 0,0 13.874,13.875 	"/>
				<polygon class="logo-light" fill="#F3783C" points="360.749,346.874 346.874,346.874 332.999,332.999 374.624,332.999 	"/>
			</g>
		</svg>
	</div>
	<div class="logo logo__part--3">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="374.624px" height="374.624px" viewBox="0 0 374.624 374.624" enable-background="new 0 0 374.624 374.624"
	 xml:space="preserve">
			<g>
				<polygon class="logo-lighter" fill="#FD9B6C" points="83.25,332.999 41.624,332.999 27.75,319.124 97.125,319.124 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="124.875,374.624 0,374.624 13.874,360.749 111,360.749 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="374.624,83.25 291.374,83.25 277.499,69.375 360.749,69.375 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="332.999,41.625 291.374,41.625 277.499,27.75 346.874,27.75 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="374.624,124.875 249.749,124.875 263.624,111 360.749,111 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="249.749,374.624 124.875,374.624 138.749,360.749 235.875,360.749 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="249.749,332.999 166.499,332.999 152.625,319.124 235.875,319.124 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="249.749,291.374 166.499,291.374 152.625,277.499 235.875,277.499 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="166.499,249.749 41.624,249.749 55.5,235.875 152.625,235.875 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="124.875,208.125 83.25,208.125 97.125,194.249 138.749,194.249 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="166.499,166.499 83.25,166.499 69.374,152.625 152.625,152.625 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="166.499,124.875 124.875,124.875 138.749,111 152.625,111 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="249.749,124.875 208.125,124.875 221.999,111 235.875,111 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="208.125,83.25 166.499,83.25 152.625,69.375 221.999,69.375 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="208.125,166.499 166.499,166.499 180.375,152.625 194.249,152.625 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="208.125,249.749 166.499,249.749 180.375,235.875 194.249,235.875 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="332.999,249.749 208.125,249.749 221.999,235.875 319.124,235.875 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="249.749,374.624 263.624,360.749 277.499,360.749 291.374,374.624 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="360.749,277.499 374.624,291.374 291.374,291.374 277.499,277.499 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="69.374,111 83.25,124.875 41.624,124.875 55.5,111 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="124.875,41.625 111,27.75 69.374,27.75 83.25,41.625 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="55.5,27.75 41.624,41.625 0,41.625 13.874,27.75 	"/>
				<polygon class="logo-lighter" fill="#FD9B6C" points="374.624,374.624 332.999,374.624 346.874,360.749 360.749,360.749 	"/>
			</g>
		</svg>
	</div>
	<div class="logo logo__part--4">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="374.624px" height="374.624px" viewBox="0 0 374.624 374.624" enable-background="new 0 0 374.624 374.624"
	 xml:space="preserve">
			<g>
				<polygon class="logo-dark" fill="#B9643C" points="41.624,332.999 27.75,346.874 27.75,319.124 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="111,263.624 124.875,249.749 124.875,374.624 111,360.749 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="360.749,69.375 374.624,83.25 374.624,0 360.749,13.875 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="291.374,83.25 277.499,97.125 277.499,69.375 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="374.624,83.25 374.624,124.875 360.749,111 360.749,97.125 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="291.374,41.625 277.499,55.5 277.499,27.75 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="249.749,332.999 235.875,319.124 235.875,305.249 249.749,291.374 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="249.749,291.374 235.875,277.499 235.875,263.624 249.749,249.749 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="166.499,332.999 152.625,346.874 152.625,319.124 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="249.749,374.624 235.875,360.749 235.875,346.874 249.749,332.999 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="166.499,291.374 152.625,305.249 152.625,277.499 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="166.499,249.749 152.625,235.875 152.625,180.375 166.499,166.499 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="166.499,166.499 152.625,152.625 152.625,138.749 166.499,124.875 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="83.25,208.125 69.374,221.999 69.374,152.625 83.25,166.499 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="235.875,111 249.749,124.875 249.749,41.625 235.875,55.5 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="166.499,124.875 152.625,111 152.625,69.375 166.499,83.25 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="152.625,55.5 166.499,41.625 166.499,0 152.625,13.875 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="208.125,124.875 208.125,166.499 194.249,152.625 194.249,138.749 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="194.249,180.375 208.125,166.499 208.125,249.749 194.249,235.875 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="332.999,249.749 319.124,235.875 319.124,221.999 332.999,208.125 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="235.875,138.749 249.749,124.875 249.749,208.125 235.875,221.999 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="277.499,360.749 277.499,277.499 291.374,291.374 291.374,374.624 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="360.749,277.499 360.749,263.624 374.624,249.749 374.624,291.374 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="124.875,0 124.875,41.625 111,27.75 111,13.875 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="83.25,41.625 83.25,124.875 69.374,111 69.374,27.75 	"/>
				<polygon class="logo-dark" fill="#B9643C" points="374.624,332.999 374.624,374.624 360.749,360.749 360.749,346.874 	"/>
			</g>
		</svg>
	</div>
</section>