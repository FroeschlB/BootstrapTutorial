<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Bootstrap-Template">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <!-- Custom Template CSS !-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

    </header>
