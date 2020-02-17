<?php get_header('main'); ?>
      
      <div class="text-center">
        <h1><?php bloginfo('description'); ?></h1>
          <div class="lead">
                <a class="btn btn-lg" href="<?php echo get_page_link( 11 ); ?>"><?php esc_html_e( 'Оказать помощь' , 'zlv' ); ?></a>
                <a class="btn btn-lg" href="<?php echo get_page_link( 9 ); ?>"><?php esc_html_e( 'Взять питомца' , 'zlv' ); ?></a>
          </div>
      </div>
      <div class="divider"></div>
<?php get_footer('main'); ?>