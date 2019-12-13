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
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ищут дом</li>
                </ol>
            </nav>
        </div>
        <div class="page-title">
            <h2>Наши питомцы ищут дом</h2>
                <p class="lead">Возьмите хвостик, который подарит Вам радость и свою любовь</p>
        </div>
        <div class="album">
            <div class="container">            
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card-block photo">
                            <img class="card-block-img" src="img/portfolio-2.jpg" alt="card thumbnail" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <div class="card-info">
                                <h4 class="card-title-left">Васька</h4>  
                            </div>
                            <div class="overlay"></div>
                            <div class="photo-content">
                                <div class="photo-link">
                                    <a class="lightbox" href="./img/portfolio-2.jpg"><i class="fa fa-search"></i></a>    
                                </div>                                
                            </div>                                     
                        </div>                   
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card-block mb-6 photo">
                            <img class="card-block-img" src="img/portfolio-5.jpg" alt="card thumbnail" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <div class="card-info">
                                <h4 class="card-title-left">Пушок</h4>   
                            </div>
                            <div class="overlay"></div>
                            <div class="photo-content">
                                <div class="photo-link">
                                    <a class="lightbox" href="./img/portfolio-5.jpg"><i class="fa fa-search"></i></a>    
                                </div>                                
                            </div>                             
                        </div>                   
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card-block mb-6 photo">
                            <img class="card-block-img" src="img/portfolio-6.jpg" alt="card thumbnail" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <div class="card-info">
                                <h4 class="card-title-left">Жучка</h4>  
                            </div>
                            <div class="overlay"></div>
                            <div class="photo-content">
                                <div class="photo-link">
                                    <a class="lightbox" href="./img/portfolio-6.jpg"><i class="fa fa-search"></i></a>    
                                </div>                                
                            </div> 
                        </div>                   
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card-block mb-6 photo">
                            <img class="card-block-img" src="img/images (1).jpg" alt="card thumbnail" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <div class="card-info">
                                <h4 class="card-title-left">Дик</h4>  
                            </div>
                            <div class="overlay"></div>
                            <div class="photo-content">
                                <div class="photo-link">
                                    <a class="lightbox" href="./img/images (1).jpg"><i class="fa fa-search"></i></a>    
                                </div>                                
                            </div> 
                        </div>                   
                    </div>                    
                </div>
            </div>    
        </div>            
        </article>        
<?php
    get_sidebar();
    get_footer();