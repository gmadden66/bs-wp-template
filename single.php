<?php
/**
 *  Theme: 
 *  File: single.php
 *  Author: Graham Madden
 */

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
	
	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>
	<?php comments_template(); ?>
				
<?php endwhile; ?>
<?php get_footer(); ?>
