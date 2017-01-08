<?php
/**
 * The Header template for our theme
 *
 *
 * @subpackage FreeTpl
 * @since FreeTpl 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset');?>" />
		<meta name="description" content="<?php bloginfo('description')?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/image/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<!-- ▼JavaScript▼ -->
		<script src="<?php bloginfo('template_directory')?>/js/jquery.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/function.js"></script>
		<!-- ▲JavaScript▲ -->
		<!--[if lt IE 8]>
			<script type="text/javascript" src="<?php bloginfo('template_directory')?>/jshtml5.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php bloginfo('template_directory')?>/jshtml5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
<body <?php body_class();?>>
<div id="container">
	<header id="header">
		<div id="headerInner" class="clearfix">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
			<p class="caption"><?php bloginfo('description');?></p>
			<?php if(get_header_image()): ?>
			 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			 <?php endif; ?>
		</div><!-- /#headerInner .clearfix -->
			<nav role="navgation">
			<?php wp_nav_menu(array(
					'menu'=>'',
					'container_id'=>'mainMenu',
					'menu_id'=>'mainMmenu',
					'theme_location'=>''
			));?>
			 </nav>
	</header><!-- /#header -->
	<div id="wrap" class="clearfix">