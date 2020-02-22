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
    <div class="container">
                    <div class="row">
                        <div class="feature-tab">
                            <div class="col-lg-6 col-md-12">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="housing">
                                        <img src="img/DogHotel.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="feed">
                                        <img src="img/Dog-cat-Organic.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="medicines">
                                        <img src="img/contfile.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                  <div class="accordion" id="accordionExample">
                                    <div class="card-accordion">
                                        <div class="card-header" id="headingOne" role="presentation">
                                            <a href="#housing" role="tab" data-toggle="tab" >
                                                <div class="mb-0">
                                                    <div role="link" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Передержка животных</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show active" aria-labelledby="headingOne" data-parent="#accordionExample">                              
                                            <div class="card-body single-feature">                                
                                                <p>У нас очень много животных, но мало места. Мы вынуждены просить друзей и знакомых разместить на некоторое время у себя хотя-бы пару хвостов.</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="card-accordion">
                                        <div class="card-header" id="headingTwo" role="presentation">
                                            <a href="#feed" role="tab" data-toggle="tab">
                                                <div class="mb-0">
                                                    <div role="link" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Корма для животных</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body single-feature">                               
                                                <p>К нам постоянно попадают все новые и новые жильцы у которых отменный аппетит вызванный уличным недоеданием.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-accordion">
                                        <div class="card-header" id="headingThree" role="presentation">
                                            <a href="#medicines" role="tab" data-toggle="tab">
                                                <div class="mb-0">
                                                    <div role="link" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Лекарства для животных</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">                                          
                                            <div class="card-body single-feature">
                                                <p>Всех животных мы лечим и обязательно обрабатываем от блох, глистов и стерилизуем.</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
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