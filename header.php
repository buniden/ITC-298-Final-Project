<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title><?php bloginfo("name") . wp_title("|"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
	
	 <!--add gradient support with rounded corners for ie9-->
	 <!--[if gt IE 8]>
	  <style type="text/css">
	    #wrapper {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">

<header id="primary_header">
	<div id="branding">
		<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Lari Peterson" /></a></h1>
	</div>
	
	  <?php
	  $main_menu = array(
	  	'theme_location'  => '',
	  		'menu'            => '',
	  		'container'       => 'nav',
	  		'container_class' => '',
	  		'container_id'    => 'primary_navigation',
	  		'menu_class'      => 'menu',
	  		'menu_id'         => '',
	  		'echo'            => true,
	  		'fallback_cb'     => 'wp_page_menu',
	  		'before'          => '',
	  		'after'           => '',
	  		'link_before'     => '',
	  		'link_after'      => '',
	  		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	  		'depth'           => 0,
	  		'walker'          => '' 	
	  );
	  wp_nav_menu( $main_menu );
	  ?>
	  
	  <div class="clear"></div>  
	
	</header> <!--end primary header-->