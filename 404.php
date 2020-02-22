<?php get_header(); ?>
<article class="content">
    <div class="breadcrumb-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php custom_breadcrumb(); ?>               
            </ol>
        </nav>
    </div>
    <div class="page-title">
        <h2>404</h2>
        <p><?php esc_html_e('Упсс...  попробуйте снова','zlv' ); ?></p>
    </div>
    
</article>
<?php
    get_sidebar();
    get_footer();