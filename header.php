<?php
/**
 * The header for our theme
 * @package Zlv Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo( 'name' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">  
  <link rel="stylesheet" href="css/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
      <a href="index.html" class="navbar-brand">Жмеринская лига волонтеров</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button> 
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Главная <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Ищут дом</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.html">Нужна помощь</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.html">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>  
  		<div class="video-background-container">
  			<video preload="auto" autoplay loop muted class="video-background">
  				<source type="video/mp4" src="videos/Puppy.mp4">
  			</video>
  		</div>
      </header>     
      <main class="main" id="main"> 