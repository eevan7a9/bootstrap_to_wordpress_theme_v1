<!doctype html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta name="author" content="">
  <title><?php bloginfo("name");?> |
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
  </title>
  <!-- Bootstrap core CSS -->
   <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
  <!-- fontawesome this template -->
  <link href="<?php bloginfo('template_url');?>/css/fontawesome_5/css/all.css" rel="stylesheet">
   <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <?php wp_head();?>
    <style>
        .navbar-dark .navbar-nav .nav-link {
            color: <?php echo get_theme_mod('nav_link_color', '#fff') ?>;
        }
        .navbar-dark .navbar-nav .active > .nav-link{
            color: <?php echo get_theme_mod('nav_link_color', '#fff') ?>;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark e7a9_navbar" style="background-color: <?php echo get_theme_mod('navigation_bg_color', '#4a087c') ?>">
  <div class="container">

    <a class="navbar-brand font-weight-bold" href="#" style="color: <?php echo get_theme_mod('site_name', '#fff') ?>"><?php bloginfo('name');?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <?php
wp_nav_menu(array(
	'menu' => 'primary',
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => 'div',
	// 'container_class' => 'collapse navbar-collapse',
	// 'container_id' => 'bs-example-navbar-collapse-1',
	'menu_class' => 'nav navbar-nav',
	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
	'walker' => new WP_Bootstrap_Navwalker())
);
?>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
