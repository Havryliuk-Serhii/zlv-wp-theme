<section class="comments">
            <?php if ( post_password_required() ) : ?>
                <p class="nopassword"><?php _e( 'Этот пост защищен паролем. Введите пароль чтоб посмотреть комментарии', 'zlv' ); ?></p>
            <?php
                    return;
                endif;
            ?>
            <?php if ( have_comments() ) : ?>
                        <h3 class="title-center"> <?php _e('Комментарии','zlv')?></h3>
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                        <div class="navigation">
                            <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'zlv' ) ); ?></div>
                            <div class="nav-next"><?php next_comments_link( __( 'Новые комментарии <span class="meta-nav">&rarr;</span>', 'zlv' ) ); ?></div>
                        </div> <!-- .navigation -->
            <?php endif; // check for comment navigation ?>

            <ul class="media-list">
                <?php
                    wp_list_comments(array(
                            'callback' => 'zlv_list_comment',
                    ));
                ?>                              
            </ul>  
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
                            'author' => '<div class="form-group"><div class="form-lable"><input type="text" class="form-control" id="author" name="author" placeholder="Имя"' . esc_attr( $commenter['comment_author'] ) . $aria_req . $html_req . ' /></div>',
                            'email'  => '<div class="form-lable"><input id="email" name="email" class="form-control" placeholder="Email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_email'] ) . ' aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div></div>',
                            ),
                    'comment_field'        => '<div class="col-md-12"><textarea name="comment" id="comment" cols="30" rows="7" class="form-control" placeholder="Сообщение"></textarea></div>',
                    'submit_button'        => '<div class="form-group"><button type="submit" name="submit" class="btn btn-submit"">%1$s</button></div>',                     
        );
        comment_form($comments_args);
    ?>
</section> 