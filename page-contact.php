<?php
/*
Template Name: Contact Page
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
        
  <section id="contact">
    <div class="page-title">
      <h2><?php echo wp_get_document_title(); ?></h2>
      <p class="lead"><?php the_field('page-description'); ?></p>
    </div>
    <div class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">              
            <div class="contact-img">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/contact2.png" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <ul class="contact-list ">
              <li class="contact-item">
                <h5><?php echo get_option('first_person_name_field'); ?></h5>
                <p><?php echo get_option('first_person_phone_field'); ?></p>
              </li>
              <li class="contact-item">
                <h5><?php echo get_option('second_person_name_field'); ?></h5>
                <p><?php echo get_option('second_person_phone_field'); ?></p>                
              </li>
              <li class="contact-item">
                <h5><?php echo get_option('third_person_name_field'); ?></h5>
                <p><?php echo get_option('third_person_phone_field'); ?></p>                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact-form">   
      <div class="page-title">
        <h3><?php esc_html_e('Оставьте нам Ваше сообщение','zlv' ) ?></h3>
        <p class="lead"><?php esc_html_e('Мы ответим на все интересующие Вас вопросы','zlv' ) ?></p>
      </div>
    <div class="container">
      <div class="row">
        <?php if( isset( $_GET['msg'] ) ) {
                if( $_GET['msg'] == 'success' )
                  echo '<span>Сообщение успешно отправлено</span>';
                if( $_GET['msg'] == 'error' )
                echo '<span><strong>Ошибка:<strong> Проверьте правильность введённых вами данных.</span>'; 
              }             
        ?>
        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo site_url() ?>/send.php" <?php echo zlv_get_background('form_bg'); ?>>
          <div class="col-md-12">
            <div class="form-group">
                <div class="form-lable">
                    <label><?php esc_html_e('Имя *','zlv' ); ?></label>
                    <input type="text" name="name" class="form-control" required="true" placeholder="Введите Ваше Имя" >
                </div>
                <div class="form-lable">
                    <label><?php esc_html_e('Телефон *','zlv' ); ?></label>
                    <input type="text" name="phone" class="form-control" required="true" placeholder="Введите Ваш номер телефона" >
                </div>             
            </div>
           
          </div>
          <div class="col-md-12">
            <div class="form-lable-textarea">
              <label><?php esc_html_e('Сообщение *','zlv' ); ?></label>
              <textarea name="message" id="message" required="true" class="form-control" rows="8"placeholder="Оставте нам Ваше сообщение" ></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-submit" required="required"><?php esc_html_e('Отправить сообщение','zlv' ); ?></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  </article>
<?php
  get_footer();