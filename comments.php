<?php
/**
 *  Theme: 
 *  File: comments.php
 *  Author: Graham Madden
 */
 ?>
 
<?php comment_form( $args, $post_id ); ?>
<?php wp_list_comments( $args, $comments ); ?>
