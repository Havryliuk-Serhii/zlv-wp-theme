<?php
/**
 * The template for displaying the footer
 * @package Zlv Theme
 */

?>
</main>             
  </div>
  <footer class="footer bg-dark">
    <div class="footer-content">
    <div class="copyright">
      <p class="text-block">&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>    