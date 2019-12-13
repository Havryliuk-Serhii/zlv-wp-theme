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
                      <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                  </ol>
              </nav>
            </div>
        
  <section id="contact">
    <div class="page-title">
      <h2>Связаться с нами</h2>
      <p class="lead">Мы всегда рады и открыты к общению, сотрудничеству и помощи</p>
    </div>
    <div class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">              
            <div class="contact-img">
              <img src="img/contact2.png" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <ul class="contact-list ">
              <li class="contact-item">
                <h5>ФИО 1</h5>
                <p>тел:670-898-2847</p>
              </li>
              <li class="contact-item">
                <h5>ФИО 2</h5>
                <p>тел:670-898-2847</p>                
              </li>
              <li class="contact-item">
                <h5>ФИО 3</h5>
                <p>тел:670-898-2847</p>                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact-form">   
      <div class="page-title">
        <h3>Оставьте нам Ваше сообщение</h3>
        <p class="lead">Мы ответим на все интересующие Вас вопросы</p>
      </div>
    <div class="container">
      <div class="row">
        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#">
          <div class="col-md-12">
            <div class="form-group">
                <div class="form-lable">
                    <label>Имя *</label>
                    <input type="text" name="name" class="form-control" required="required" placeholder="Введите Ваше Имя" >
                </div>
                <div class="form-lable">
                    <label>Телефон *</label>
                    <input type="text" class="form-control" required="required" placeholder="Введите Ваш номер телефона" >
                </div>             
            </div>
           
          </div>
          <div class="col-md-12">
            <div class="form-lable-textarea">
              <label>Сообщение *</label>
              <textarea name="message" id="message" required="required" class="form-control" rows="8"placeholder="Оставте нам Ваше сообщение" ></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-submit" required="required">Отправить сообщение</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  </article>
<?php
  get_footer();