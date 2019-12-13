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
                            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Нужна помощь</li>
                        </ol>
                    </nav>
                </div>
            <div class="page-title">
                    <h2>Нужна помощь</h2>
                    <p class="lead">В данном разделе Мы просим всех отзывчивых людей оказать нам помощь</p>
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
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Передержка животных</button>
                                                </h5>
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
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Корма для животных</button>
                                                </h5>
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
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Лекарства для животных</button>
                                                </h5>
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
            <aside class="sidebar">
                <section class="search-form">
                   <form class="form-inline">
                     <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-submit" type="submit"><i class="fas fa-search"></i></button>
                </form> 
                </section>
                <section class="widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
                        <li class="widget-item"><a href="#">Название карточки2</a></li>
                        <li class="widget-item"><a href="blog-item.html" aria-current="page">Название карточки1!</a></li>
                    </ul>
                </section>
            </aside>
<?php
    get_sidebar();
    get_footer();