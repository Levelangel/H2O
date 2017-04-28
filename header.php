<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"/> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 id="logo" class="grid_4"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
      <nav >
        <?php
          wp_nav_menu( array(
            'menu' => 'menu_top',
            'menu_class' => 'nav nav-tabs',
            'depth' => 1)
          );
        ?>
      </nav>
    </header>
