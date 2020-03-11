<?php
/*
Template Name: Gallery Page
*/
    get_header();
?>
<article class="content">
    <div class="breadcrumb-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php custom_breadcrumb(); ?>  
            </ol>
        </nav>
    </div>
    <div class="page-title">
        <h2><?php single_post_title(); ?></h2>
        <p class="lead"><?php the_field('page-description'); ?></p>
    </div>        
    <div class="album">
        <div class="container">            
            <div class="row">
                <?php 
                    $id = 4;
                    $args = array(
                        'cat' => $id,
                        'posts_per_page' => -1
                    );        
                    $gallery = new WP_Query($args);
                    if($gallery->have_posts()):
            
                    while($gallery->have_posts()): $gallery->the_post();            
                ?>                    
                <div class="col-lg-6 col-md-12">
                    <div class="card-block photo">
                        <?php if(has_post_thumbnail()) : 
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'portfolio-thumbnail'); ?>
                        <img class="card-block-img" src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>" focusable="false" role="img" aria-label="Placeholder: Thumbnail">         
                        <div class="card-info">
                            <h4 class="card-title-left"><?php the_title(); ?></h4>  
                        </div>
                        <div class="overlay"></div>
                        <div class="photo-content">
                            <div class="photo-link">
                                <a class="lightbox" href="<?php echo esc_url($image[0]); ?>"><i class="fa fa-search"></i></a>    
                            </div>                                
                        </div>                                     
                     </div>                   
                </div>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="<?php the_title(); ?>">                   
                <?php endif; ?>
                <?php
                    endwhile;
                        wp_reset_postdata();
                    endif;
                ?>                 
            </div>
        </div>    
    </div>  
</article>        
<?php
    get_sidebar();
    get_footer();