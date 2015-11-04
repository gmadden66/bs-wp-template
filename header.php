<?php
/**
 *  Theme: 
 *  File: header.php
 *  Author: Graham Madden
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<meta name="geo.region" content="CA-QC" />
		<meta name="geo.placename" content="Rouyn-Noranda" />
		<meta name="geo.position" content="48.2398575;-79.0206458" />
		<meta name="ICBM" content="48.2398575, -79.0206458" />-->
		<link rel="icon" type="image/png" href="<?php bloginfo('url');?>/favicon.ico">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="container-fluid">
		<header id="header">
			<?php wp_nav_menu( array( 'container' => 'nav','container_id' => 'mainNav','container_class' => 'top-nav','theme_location' => 'main','menu_class'=>'list-inline' ) ); ?>
		</header>
		
		<main role="main">
