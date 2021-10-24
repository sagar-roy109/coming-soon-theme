<?php
/**
 * Template Name: Coming Soon Laning Page
*/
?>
    <?php 
        get_header();
        the_post();
    ?>
	<body <?php body_class(); ?>>
	<div class="fh5co-loader"></div>

	<?php get_template_part('template-parts/left-area'); ?>

	<?php get_template_part('template-parts/main-content') ?>

    <?php get_footer(); ?>
	
  