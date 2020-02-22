<?php
/*
Template Name: Page Help
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
        <h2><?php echo wp_get_document_title(); ?></h2>
        <p class="lead"><?php the_field('page-description'); ?></p>
    </div> 
    <?php
        $id = 3; 
        $posts_accordion = new WP_Query(array('cat' => $id, 'posts_per_page' => 1, 'order' => 'ASC'));
    ?>           
    <div class="container">
        <div class="row">
            
            <div class="feature-tab">
                <?php if ( $posts_accordion->have_posts() ) : ?> 
                <?php while ( $posts_accordion->have_posts() ) : $posts_accordion->the_post(); ?>
                <div class="col-lg-6 col-md-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="housing">
                            <?php the_post_thumbnail(); ?>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card-accordion">
                            <div class="card-header" id="headingOne" role="presentation">
                                <a href="<?php the_permalink(); ?>" role="tab" data-toggle="tab" >
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php the_title(); ?></button>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show active" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body single-feature">                                           
                                    <?php the_content(); ?>
                                </div>                                            
                            </div>
                        </div>   
                    </div>
                </div>
            <?php
                endwhile;
                    wp_reset_postdata();
                endif;
            ?>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="help-action">
                    <p class="lead">Средства просим перечислять на карту Приватбанка №12345 на имя ....<br>Если у Вас есть возможность помочь нам помещением, едой и лекарствами для животных то обращайтесь по телефонам и адресам на странице Контакты</p>
                </div>
            </div>
        </div>
    </div>
</article>          
<?php
    get_sidebar();
    get_footer();