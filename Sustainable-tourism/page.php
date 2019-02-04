<?php 
	while (have_posts()) {
		<h1>page</h1>
			the_post(); ?>
	<h2><?php the_title();?></h2>
		<?php the_content();?>
		<?php 
	}
	get_footer();
 ?>