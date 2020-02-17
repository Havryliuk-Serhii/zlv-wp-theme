<?php get_header(); ?>
<article class="content">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="blog.html">Новости</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Статья</li>
                        </ol>
                    </nav>
                </div>

	<section class="post">
    <div class="post-title">
        <h2><?php the_title(); ?></h2>                    
    </div>
                    <div class="aftertitle-meta">
                    	<span class="author"><i class="fas fa-user-circle" aria-hidden="true"></i>Admin</span>
                    	<span class="date"><i class="far fa-calendar-alt" aria-hidden="true"></i>29 Ноября 2019</span>
						<span class="comments-link"><i class="far fa-comment" aria-hidden="true"></i>1 комментарий</span>				
                    </div>
                    <div class="post-content">
                        <div class="container">
                            <div class="row">
                                <p>Nihil officiis maiores porro blanditiis molestias necessitatibus saepe ducimus, aspernatur consequuntur deserunt aliquam voluptatem magni dolore, exercitationem labore. Tempore.</p>                               
                                <div class="col-xl-6 col-sm-12">
                                    <figure>
                                         <img src="./img/blog1.jpg" class="post-img" alt="">
                                    </figure>                                   
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur sint, nesciunt, recusandae mollitia modi. Cum molestiae distinctio ipsum, voluptatem laudantium repellat ipsam atque ex! Accusamus sunt, autem molestias et voluptatibus illo, impedit sequi aliquid cupiditate doloribus, quam perspiciatis dicta totam alias placeat eaque error eligendi fugiat sed incidunt voluptates!</p>
                                </div>                                
                                <div class="col-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi atque quod facilis aspernatur temporibus dolorem veniam quo dolores doloremque. Quaerat cupiditate, repudiandae error dignissimos eos fugit recusandae dolor iste dolore facilis necessitatibus nemo. Excepturi perferendis vel eaque totam suscipit qui corporis. Vero officiis magnam consequatur, nam. Amet tenetur et, quod nisi impedit maiores recusandae, veritatis quaerat necessitatibus voluptatum, beatae temporibus. Nam nostrum sit minus, vero doloribus a voluptatum vitae, impedit officia, recusandae odio similique officiis ipsum neque quod quo possimus ratione cum, hic aliquam explicabo molestias nemo. Officia totam atque architecto incidunt similique dolores quos nam blanditiis, neque. </p>
                                    <h3 class="title-center-black">Подзаголовок</h3>
                                    <p>Pariatur sunt ducimus odit eius placeat tenetur, laborum ad doloremque. Ex ipsam qui, quae laudantium nam assumenda, praesentium facilis cum ab impedit? Vero ex aliquid ipsum, impedit temporibus provident deserunt rerum, totam dolore nisi quae labore ea porro dolorem repudiandae, minus enim cumque mollitia tempora similique. Nemo ipsa adipisci dicta, nihil, minima officiis accusamus vel ullam id esse quis voluptatem dolores vero facere assumenda eius hic nostrum amet fugit consequatur doloremque et quod incidunt. Nesciunt neque, consequatur adipisci laborum soluta voluptatem molestiae tempore voluptas architecto! Recusandae similique commodi totam repellendus quae consectetur voluptatem nulla quasi enim neque, debitis et minima beatae rem, saepe. Quidem quae non id quas quisquam, perspiciatis! Laborum dolores, dolorem ea ab deleniti veritatis libero, dicta repellat quibusdam cupiditate enim nisi. Nihil officiis maiores porro blanditiis molestias necessitatibus saepe ducimus, aspernatur consequuntur deserunt aliquam voluptatem magni dolore, exercitationem labore. Tempore.</p>
                                    <blockquote>
                                        <p>&ldquo;Facere sequi velit aliquam, adipisci quidem doloremque excepturi, labore ratione qui placeat expedita quia consectetur accusamus laboriosam sint omnis non vel veritatis.&rdquo;</p>
                                        <cite>&mdash;J. Dow</cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>            
                </section>
                <section class="comments">
                    <h3 class="title-center">Комментарии</h3>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-img" src="img/avatar3.png" alt="avatar"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Дима<span class="comment-date">2 july 2014</span></h4>
                                    <p> Odit nostrum et debitis reiciendis ullam quam corrupti modi, porro similique, voluptatem cumque tempore, ratione libero harum pariatur error veritatis aliquid laboriosam.</p>
                                    <a href="#">Ответить</a>
                            </div>
                        </li>                                           
                    </ul>       
                </section>                    
                <section class="comment-form">
                    <h3 class="title-center-black">Оставте комментарий</h3>
                    <div class="form-group">    
                        <div class="form-lable">
                            <input type="text" class="form-control" placeholder="Имя">
                        </div>
                        <div class="form-lable">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea name="comment" id="comment" cols="30" rows="7" class="form-control" placeholder="Сообщение"></textarea>
                    </div>
                    <div class="form-group">                         
                        <button type="submit" name="submit" class="btn btn-submit">Отправить коментарий</button>                               
                    </div>
                </section>
            </article>               
<?php
    get_sidebar();
    get_footer();