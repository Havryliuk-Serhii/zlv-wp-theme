<?php get_header(); ?>
<article class="content">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        	<?php custom_breadcrumb(); ?>                        	
                        </ol>    
                    </nav>
                </div>
	<?php while ( have_posts() ) : the_post();?>
	<section class="post">
	    <div class="post-title">
	        <h2><?php the_title(); ?></h2>                    
	    </div>
        <div class="aftertitle-meta">
          	<span class="author"><i class="fas fa-user-circle" aria-hidden="true"></i><?php the_author(); ?></span>
           	<span class="date"><i class="far fa-calendar-alt" aria-hidden="true"></i><?php the_time('j M, Y')?></span>
			<span class="comments-link"><i class="far fa-comment" aria-hidden="true"></i><?php comments_number('Комментариев нет', '1 комментарий', '% комментариев')?></span>				
        </div>
        <div class="post-content">
            <div class="container">
                <div class="row">
                    <?php the_content(); ?>
                    <div class="post-navigation">            	
       					<?php the_post_navigation(); ?>  
    				</div>
                </div>
            </div>
        </div>                         
    </section>
			
        <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
	<?php    endwhile; ?>
</article>               
<?php
    get_sidebar();
    get_footer();