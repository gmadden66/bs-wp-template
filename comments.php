<?php
/**
 *  Theme: 
 *  File: comments.php
 *  Author: the Guaranteed SEO team
 */
 ?>
 
<?php comment_form( $args, $post_id ); ?>
<?php wp_list_comments( $args, $comments ); ?>