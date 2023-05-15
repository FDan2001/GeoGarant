<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ГеоГарант</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="fonts/fontawesome-free-6.4.0-web/css/all.min.css">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="icon" href="img/i.png" type="image/x-icon">

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery-3.6.4.min.js"></script>

</head>

<body>

<div id="msg" class="msg">
  <div id="content-msg" class="content-msg">
    <h3 id="header-msg">Успешная отправка!</h3>
    <p id="opis-msg">Мы свяжемся с вами в ближайшее время</p>
    <button id="close" onclick="msgclose();" class="close"><i class="fa-solid fa-xmark"></i></button>
  </div>
</div>

  <!-- Header -->
  <header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="logo-container">
            <!--<a href="index.html" class="logo"><img class="logo-img" src="img/растр.png" alt=""></a>-->
            <!-- E1 style -->
            <a href="index.html" class="logo"><img style="width: auto;
    height: 200px;
    margin-top: 25px;
    margin-bottom: 25px;
    margin-left: 50px;
    margin-right: 50px;" src="img/g652.png" alt=""></a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- E1 style -->
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="top: 35px; right: 24px; position: absolute; ">
            <div class="navbar-nav">
              <a class="nav-link scrollto active" href="#hero">Главная</a>
              <a class="nav-link scrollto" href="#about">О нас</a>
              <a class="nav-link scrollto" href="#work">Услуги</a>
              <a class="nav-link scrollto " href="#portfolio">Портфолио</a>
              <a class="nav-link scrollto" href="#team">Команда</a>
              <a class="nav-link scrollto" href="#contact">Контакты</a>
            </div>
          </div>
        </div>
      </nav>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container main-slang col-lg-7 col-md-12 wow animate__animated animate__backInUp">
        <!--<h1><img src="img/Текст лого.png" alt=""></h1>-->
        <h1>Приветствуем в <b><span>ГЕО</span>ГАРАНТ</b></h1>
        <!--<h1 id="nomberh1">Приветствуем в <img class="h1-img" src="img/Текст лого.png" alt=""></h1>-->
        <h2>Наша команда готова помочь вам</h2>
        <div class="d-flex">
          <a href="#contact" class="btn-get-started scrollto">Оставить заявку</a>
        </div>
    </div>
  </section>

    <!-- About Section -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="wow animate__animated animate__fadeInDown">Узнать больше о <b><span>ГЕО</span>ГАРАНТ<b></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="img/fon/Geo1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Молодая, перспективная компания, в составе высококвалифицированных специалистов, готова обеспечить выполнение работ любой сложности.</h3>
            <p class="fst-italic">
              С перечнем выполняемых работ можно ознакомиться <a href="#work">здесь</a>
            </p>
            <ul>
              <li>
                <div>
                  <h5>Благодаря слаженной работе нашей <a href="#team">команды</a>, все заказы выполняются, в соответствии с нормативно-правовыми актами РФ, качественно и в установленные сроки</h5>
                </div>
              </li>
              <li>
                <div>
                  <h5>Точность наших работ гарантирует современное профессиональное оборудование. <a href="#portfolio">Подробнее</a></h5>
                </div>
              </li>
              <li>
                <div>
                  <h5>Для заказа работы и дальнейшего сотрудничества свяжитесь с нами любым удобным для вас способом <a target="_blank" href="mailto:geogarant73@mail.ru"><i class="fa-regular fa-envelope"></i></a><a target="_blank" href="viber://add?number=79278183979"><i class="fa-brands fa-viber"></i></a><a target="_blank" href="https://skobelkin.ru/whatsapp/79278183979?text=Здравствуйте,+пишу+с+сайта,"><i class="fa-brands fa-whatsapp"></i></a><a target="_blank" href="https://t.me/+79278183979"><i class="fa-brands fa-telegram"></i></a> или оставьте свои контактные данные на нашем сайте, и мы вам перезвоним</h5>
                </div>
              </li>
              <li>
                <div>
                  <a href="#work" class="btn-na-zaivk">Заполнить заявку</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="row text-center">
            <p style="position: relative!important; font-size: 24px;" class="lozung">
              "Ваша уверенность-наша гарантия"
            </p>
          </div>
        </div>

      </div>
    </section>



    <!-- Work Section -->
    <section id="work" class="work">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3 class="wow animate__animated animate__fadeInDown">Перечень <span>услуг</span></h3>
        </div>
        <div class="container text-center">
          <div class="row justify-content-around">
          
            <div class="wow animate__animated animate__backInLeft kart col-lg-5">
              <div class="icon">
                <img class="teodolit" src="img/Теодолит.png" alt="">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 -10 300 320" xml:space="preserve">
                  <polygon points="22.3,223.7 22.3,76.3 150,2.5 277.7,76.3 277.7,223.7 150,297.5"/>
                  <path d="M150,4.8l125.7,72.6v145.2L150,295.2L24.3,222.6V77.4L150,4.8 M150,0.2L20.3,75.1v149.8L150,299.8l129.7-74.9V75.1L150,0.2 L150,0.2z"/>            
                  </svg>
              </div>
              <h3>Инженерно-геодезические работы</h3>
              <li class="li-work"><i class="fa fa-check"></i>Топографические съемки</li>
              <li class="li-work"><i class="fa fa-check"></i>Исполнительные съемки инженерных сетей (газопровода, водопровода, канализации, электрокабеля и пр.)</li>
              <li class="li-work"><i class="fa fa-check"></i>Инженерно-геодезическое сопровождение строительных объектов</li>
              <li class="li-work"><i class="fa fa-check"></i>Вынос в натуру границы земельного участка</li>            </div>

            <div class="wow animate__animated animate__backInRight kart col-lg-5">
              <div class="icon">
                <img src="img/Домик.png" alt="">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 -10 300 320" xml:space="preserve">
                  <polygon points="22.3,223.7 22.3,76.3 150,2.5 277.7,76.3 277.7,223.7 150,297.5"/>
                  <path d="M150,4.8l125.7,72.6v145.2L150,295.2L24.3,222.6V77.4L150,4.8 M150,0.2L20.3,75.1v149.8L150,299.8l129.7-74.9V75.1L150,0.2 L150,0.2z"/>            
                  </svg>
              </div>
              <h3>Кадастровые работы</h3>
              <li class="li-work"><i class="fa fa-check"></i>Подготовка межевого плана</li>
              <li class="li-work"><i class="fa fa-check"></i>Подготовка технического плана</li>
              <li class="li-work"><i class="fa fa-check"></i>Подготовка схем на КПТ</li>
            </div>

            <div class="wow animate__animated animate__backInLeft kart col-lg-5">
              <div class="icon">
                <img style="width: 50px; height: 50px;" src="img/Дерево.png" alt="">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 -10 300 320" xml:space="preserve">
                  <polygon points="22.3,223.7 22.3,76.3 150,2.5 277.7,76.3 277.7,223.7 150,297.5"/>
                  <path d="M150,4.8l125.7,72.6v145.2L150,295.2L24.3,222.6V77.4L150,4.8 M150,0.2L20.3,75.1v149.8L150,299.8l129.7-74.9V75.1L150,0.2 L150,0.2z"/>            
                  </svg>
              </div>
              <h3>Инженерно-экологические изыскания</h3>

<li class="li-work"><i class="fa fa-check"></i>Маршрутные наблюдения с описанием природной среды и ландшафтов, растительности и животного мира</li>

<li class="li-work"><i class="fa fa-check"></i>Рекогносцировочное обследование территории</li>

<li class="li-work"><i class="fa fa-check"></i>Экологическое опробование отдельных компонентов окружающей среды</li>

<li class="li-work"><i class="fa fa-check"></i>Лабораторные химико-аналитические и санитарно-гигиенические исследования проб атмосферного воздуха, почв, грунтов, подземных и поверхностных вод, донных отложений</li>

<li class="li-work"><i class="fa fa-check"></i>Лабораторные исследования и оценка радиационной обстановки и физического загрязнения (шум, электромагнитные волны)</li>

<li class="li-work"><i class="fa fa-check"></i>Газохимические исследования грунтов (при необходимости)</li>

<li class="li-work"><i class="fa fa-check"></i>Систематизация фондовой информации о состоянии окружающей среды, в том числе сведений о наличии на выбранном участке зон с особыми режимами использования, возможных источников загрязнения компонентов окружающей среды</li>

<li class="li-work"><i class="fa fa-check"></i>Камеральная обработка материалов, составление отчета</li>

            </div>
            <div class="wow animate__animated animate__backInRight kart col-lg-5">
              <div class="icon">
                <img style="width: 50px; height: 50px;" src="img/Камень.png" alt="">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 -10 300 320" xml:space="preserve">
                  <polygon points="22.3,223.7 22.3,76.3 150,2.5 277.7,76.3 277.7,223.7 150,297.5"/>
                  <path d="M150,4.8l125.7,72.6v145.2L150,295.2L24.3,222.6V77.4L150,4.8 M150,0.2L20.3,75.1v149.8L150,299.8l129.7-74.9V75.1L150,0.2 L150,0.2z"/>            
                  </svg>
              </div>
              <h3>Инженерно-геологические изыскания</h3>

<li class="li-work"><i class="fa fa-check"></i>Сбор и анализ имеющихся геологических материалов</li>
<li class="li-work"><i class="fa fa-check"></i>Дешифрование космо- и аэрофотоматериалов</li>
<li class="li-work"><i class="fa fa-check"></i>Маршрутные наблюдения, буровые и горнопроходческие работы</li>
<li class="li-work"><i class="fa fa-check"></i>Геофизические исследования</li>
<li class="li-work"><i class="fa fa-check"></i>Опытные полевые работы</li>
<li class="li-work"><i class="fa fa-check"></i>Стационарные наблюдения</li>
<li class="li-work"><i class="fa fa-check"></i>Лабораторные исследования</li>
<li class="li-work"><i class="fa fa-check"></i>Камеральная обработка собранных материалов и составление отчета</li>
            </div>

          </div>
        </div>

      </div>
    </section>
<!-- Team -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h3 class="wow animate__animated animate__fadeInDown">Наша <span>команда</span></h3>
        </div>

        <div class="container">
          <div class="row">
            <div class="cart-team text-center">
              <img src="img/Кузнецов Анатолий Владиславович.jpg">
              <h3>Кузнецов Анатолий Владиславович</h3>
              <p>должность: Директор</p><br>
            </div>
            <div class="cart-team text-center">
              <img src="img/Санчилеев Рамиль Ринадович.JPG">
              <h3>Санчилеев Рамиль Ринадович</h3>
              <p>должность: Инженер-геодезист</p><br>
            </div>
            <div class="cart-team text-center">
              <img src="img/Сёмочкин Александр Олегович.jpeg">
              <h3>Сёмочкин Александр Олегович</h3>
              <p>должность: Инженер по охране окружающей среды (Эколог)</p>
            </div>
            <div class="cart-team text-center">
              <img src="img/Плеханов Антон Александрович (Вариант2).jpg">
              <h3>Плеханов Антон Александрович</h3>
              <p>должность: Техник-геодезист</p><br>
            </div>
            <div class="cart-team text-center">
              <img src="img/Шлычкина Людмила Геннадьевна.JPG">
              <h3>Шлычкина Людмила Геннадьевна</h3>
              <p>должность: Кадастровый инженер</p><br>
            </div>
            <div class="cart-team text-center">
              <img src="img/Гулина Евгения Алексеевна.jpg">
              <h3>Гулина Евгения Алексеевна</h3>
              <p>должность: Кадастровый инженер</p><br>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title" data-aos="zoom-out">
          <h3 class="wow animate__animated animate__fadeInDown">Наше <span>портфолио</span></h3>
        </div>
      <div class="container-fluid text-center">
          <button class="btn-portfolio" onclick="Prev();"><i class="fa-solid fa-circle-chevron-left"></i></button>

            <input type="radio" class="rad-input" name="rad">

            <input type="radio" class="rad-input" name="rad">

            <input type="radio" class="rad-input" name="rad" checked>

            <input type="radio" class="rad-input" name="rad">

            <input type="radio" class="rad-input" name="rad">

          <button class="btn-portfolio" onclick="Next();"><i class="fa-solid fa-circle-chevron-right"></i></button>
        <main id="carousel">

            <img class="item" src="img/Portfolio/от ООО СМК Энергоспецмонтаж.png" alt="">

            <img class="item" src="img/Portfolio/от ООО ИНТЕКО МС.png" alt="">

            <img class="item" src="img/Portfolio/от УЛГАУ.png" alt="">

            <img class="item" src="img/Portfolio/от ООО ИНТЕКО МС.png" alt="">

            <img class="item" src="img/Portfolio/от ООО ИНТЕР-ГРУПП.png" alt="">

        <main>
      </div>

      </div>
    </section><!-- End Contact Section -->

<!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h3 class="wow animate__animated animate__fadeInDown"><span>Связаться</span> с нами</h3>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4 wow animate__animated animate__backInLeft" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i><img class="contact-img" src="img/mark.png" alt=""></i>
                <h4>Мы находимся:</h4>
                <p>ул. Врача Михайлова, д. 51, этаж 3, офис 315</p>
              </div>

              <div class="phone">
                <i><img style="width: 26px!important;" class="contact-img" src="img/phone.png" alt=""></i>
                <h4>Звоните:</h4>
                <p>+7 (905) 036-36-36</p>
                <p>+7 (927) 818-39-79</p>
              </div>

              <div class="email">
                <i><img style="width: 30px!important;" class="contact-img" src="img/email.png" alt=""></i>
                <h4>Email:</h4>
                <p>geogarant73.mail.ru</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 wow animate__animated animate__backInRight" data-aos="fade-left">

            <form id="form" name="form" class="info php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name" class="form-label">Ваше имя</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="phone" class="form-label">Ваш номер</label>
                  <input onclick="iphone()" class="form-control" type="phone" name="phone" id="phone" maxlength="50"
                         required="required"
                         value="+7(___)___-__-__"
                         pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                         placeholder="+7(___)___-__-__">
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="email" class="form-label">Ваша почта</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" required>
              </div>
              <div class="form-group mt-3">
                <label for="message" class="form-label">Обращение</label>
                <textarea id="message" class="form-control" name="message" rows="5" placeholder="" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Оставить заявку</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section class="map">
      <div class="row row-map-otz">
    <div class="map-yandex col-lg-6 col-md-6">
      <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/geo_garant/22744405995/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Гео Гарант</a><a href="https://yandex.ru/maps/195/ulyanovsk/category/cadastral_works/32562640747/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Кадастровые работы в Ульяновске</a><a href="https://yandex.ru/maps/195/ulyanovsk/category/survey_works/184107603/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Изыскательские работы в Ульяновске</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUvVYbAPB" width="100%" height="650" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>

      <div class="otz col-lg-6 col-md-6">
      <div style="width:100%; max-width: 759px;height:650px;overflow:hidden;position:relative;"><iframe style="width:100%;height:100%;border:0px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/22744405995?comments"></iframe><a href="https://yandex.ru/maps/org/geo_garant/22744405995/" target="_blank" style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Гео Гарант на карте Ульяновска — Яндекс Карты</a></div>
      </div>
  </div>
    </section>
<!-- widget
<div class="container">
  <script src="https://res.smartwidgets.ru/app.js" defer></script>
  <div class="sw-app" data-app="d6fa0a127c851f8b4ff103449907c997">
</div>
-->

<!-- Cart 

<div class="container">
  <div class="row">
    
    <div class="col-lg-6">
      <div style="width:560px;height:800px;overflow:hidden;position:relative;"><iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/22744405995?comments"></iframe><a href="https://yandex.ru/maps/org/geo_garant/22744405995/" target="_blank" style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Гео Гарант на карте Ульяновска — Яндекс Карты</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/geo_garant/22744405995/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Гео Гарант</a><a href="https://yandex.ru/maps/195/ulyanovsk/category/cadastral_works/32562640747/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Кадастровые работы в Ульяновске</a><a href="https://yandex.ru/maps/195/ulyanovsk/category/survey_works/184107603/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Изыскательские работы в Ульяновске</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUvFFvALC" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
      </div>
    </div>
    
  </div>
</div>
-->


  <footer>
    <div class="container">
      <div class="footer-blok col-12">
        <!--<h3>&#169;<span>Гео</span>гарант</h3>-->
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>