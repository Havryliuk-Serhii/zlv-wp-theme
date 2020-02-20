<!--
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
-->
<section class="comments">
            <?php if ( post_password_required() ) : ?>
                <p class="nopassword"><?php _e( 'Этот пост защищен паролем. Введите пароль чтоб посмотреть комментарии', 'zlv' ); ?></p>

            <?php
                    return;
                endif;
            ?>

            <?php if ( have_comments() ) : ?>
                        <h3 class="comments-title"> <?php _e('Комментарии','zlv')?></h3>

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                        <div class="navigation">
                            <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старі коментарі', 'zlv' ) ); ?></div>
                            <div class="nav-next"><?php next_comments_link( __( 'Новые комментарии <span class="meta-nav">&rarr;</span>', 'zlv' ) ); ?></div>
                        </div> <!-- .navigation -->
            <?php endif; // check for comment navigation ?>

            <div class="media-list">
                <?php
                    wp_list_comments(array(
                            'callback' => 'zlv_list_comment',
                    ));
                ?>                              
            </div>  

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                        <div class="navigation">
                            <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'zlv' ) ); ?></div>
                            <div class="nav-next"><?php next_comments_link( __( 'Новые комментарии <span class="meta-nav">&rarr;</span>', 'zlv' ) ); ?></div>
                        </div>
            <?php endif;  ?>

                <?php
                    $num_comments = get_comments_number();
                if ( ! comments_open() && $num_comments == 0 ) : ?>
                    <p class="nocomments"><?php _e( 'Комментарии закрыты' , 'zlv' ); ?></p>
                <?php endif;  ?>

            <?php endif; ?>
</section>
<section class="comments-form">
    <?php 
        $comments_args = array(
                    'fields' => array (
                            'author' => '<div class="form-field">' . '<input type="text" class="form-control" id="author" name="author" placeholder="Имя"' . esc_attr( $commenter['comment_author'] ) . $aria_req . $html_req . ' /></div>',
                            'email'  => '<div class="form-field">' . '<input id="email" name="email" class="form-control" placeholder="Email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_email'] ) . ' aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>',
                            ),
                    'comment_field'        => '<div class="form-textarea"><textarea id="comment" name="comment" cols="30" rows="7" class="form-control" placeholder="Повідомлення" aria-required="true" required="required"></textarea></div>',
                    'title_reply'          => __( 'Оставте комментарий' ),
                    'title_reply_before'   => '<h3 class="comments-title">',
                    'title_reply_after'    => '</h3>',
                    'submit_button'        => '<button class="btn-main">%1$s</button>',                     
        );
        comment_form($comments_args);
    ?>
</section> 