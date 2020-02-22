<?php 
/**
 * Template Name: Search Page
 */
?> 
<?php get_header(); ?>
<article class="content">
    <div class="breadcrumb-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php custom_breadcrumb(); ?>               
            </ol>
        </nav>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-title">
        <h2>
        	<?php
				printf( esc_html__( 'Результаты поиска:', 'zlv' ),  get_search_query() );

			?>
		</h2>        
    </div>
    
    <?php
		while ( have_posts() ) :
				the_post();
	?>
    <section id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <div class="card align-items-start">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', array('class' => 'card-img col-md-12 col-lg-6')); ?></a>
            <div class="card-body col-md-12">
                <h3 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>                
              <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" class="btn-post"><?php esc_html_e('Далее','zlv' ) ?></a>
            </div>
        </div>
    </section>
    <?php endwhile;
    		the_posts_navigation();
		else :?>	
			<p>Ничего не найдено</p>
           
     <?php endif; ?>	              
</article>
<?php
    get_sidebar();
    get_footer();