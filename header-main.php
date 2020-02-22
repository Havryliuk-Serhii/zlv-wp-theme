<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo( 'name' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top" id="nav">
        <a href="<?php echo home_url(); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button> 
        <div id="my-nav" class="collapse navbar-collapse">
          <?php 
              wp_nav_menu( [
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-auto">%3$s</ul>',
                    'depth' => 0,
                    'walker' => new Bootstrap_Menu_Walker(),
              ] );
          ?>
        </div>
      </nav>
      <div class="video-background-container">
        <video preload="auto" autoplay loop muted class="video-background">
          <source type="video/mp4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/Puppy.mp4">
        </video>
      </div>
    </header>     
    <main class="main" id="main">   