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
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
      <a href="" class="navbar-brand">Жмеринская лига волонтеров</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button> 
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Главная <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Ищут дом</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Нужна помощь</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>  