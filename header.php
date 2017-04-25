<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php if ( is_home() ) {
    bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
    single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
    single_post_title();
    } elseif (is_search() ) {
    echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
    echo '页面未找到!';
    } else {
    wp_title('',true);
    } ?></title>
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"/> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 id="logo" class="grid_4"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      <h2 class="grid_12 caption clearfix"><?php bloginfo('description'); ?></h2>
      <nav>
        <?php wp_nav_menu( array( 'menu' => 'menu_top', 'depth' => 1) ); ?>
      </nav>
    </header>
