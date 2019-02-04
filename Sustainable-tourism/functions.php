<?php
	function stfiles(){
		wp_enqueue_style("font-awsom", "////maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");
		wp_enqueue_style("font-awsom", "//use.fontawesome.com/releases/v5.7.1/css/all.css");
		wp_enqueue_style('ststyle', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','stfiles');
?>

