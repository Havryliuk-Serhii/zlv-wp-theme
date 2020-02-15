<?php get_header(); ?>
      <div class="video-background-container">
  			<video preload="auto" autoplay loop muted class="video-background">
  				<source type="video/mp4" src="<?php bloginfo('template_url'); ?>/videos/Puppy.mp4">
  			</video>
  		</div>
      </header>     
      <main class="main" id="main"> 
      <div class="text-center">
        <h1><?php bloginfo('description'); ?></h1>
          <div class="lead">
                <a class="btn btn-lg" href="<?php echo get_page_link( 11 ); ?>"><?php esc_html_e( 'Оказать помощь' , 'zlv' ); ?></a>
                <a class="btn btn-lg" href="<?php echo get_page_link( 9 ); ?>"><?php esc_html_e( 'Взять питомца' , 'zlv' ); ?></a>
          </div>
      </div>
      <div class="divider"></div>
<?php get_footer();