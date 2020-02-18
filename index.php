<?php get_header(); ?>
<article class="content">
    <div class="breadcrumb-container">
    	<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            	<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Новости</li>
            </ol>
        </nav>
    </div>
    <div class="page-title">
        <h2><?php echo wp_get_document_title(); ?></h2>
        <p class="lead"><?php the_field('page-description'); ?></p>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <div class="card align-items-start">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', array('class' => 'card-img col-md-12 col-lg-6')); ?></a>
            <div class="card-body col-md-12">
                <h3 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <div class="aftertitle-meta">
                    <span class="author"><i class="fas fa-user-circle" aria-hidden="true"></i><?php the_author(); ?></span>
                    <span class="date"><i class="far fa-calendar-alt" aria-hidden="true"></i><?php the_time('j M, Y')?></span>
                    <span class="comments-link"><i class="far fa-comment" aria-hidden="true"></i><?php comments_number('Комментариев нет', '1 комментарий', '% комментариев')?></span>
                </div>
              <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" class="btn-post"><?php esc_html_e('Далее','zlv' ) ?></a>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?> 
	<!-- Pagination -->
	<section class="page-pagination">
        <h3 class="title-hidden">Pagination</h3>           
        <nav aria-label="page navigation">
    		<?php zlv_pagination(); ?>
    	</nav>
    </section>              
</article>
            
<?php
    get_sidebar();
    get_footer();