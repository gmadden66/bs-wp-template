<?php
/**
 *  Theme: Lofa Sofa Custom Theme
 *  File: searchpage.php
 *  Author: Graham Madden
 */

get_header(); ?>
			
Search results for: <?php echo get_query_var('s'); ?>


<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		
		<?php the_title(); ?>
		<?php the_excerpt(); ?>
		
	<?php endwhile; ?>
<?php else: ?>
	<p>No results found.</p>
<?php endif; ?>
			
<?php get_footer(); ?>
