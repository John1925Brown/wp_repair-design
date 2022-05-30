<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head(); ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/animate.compat.css">
  <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="menu">
        <div class="logo menu__logo wow backInLeft">Repair Design Project</div>
        <nav class="nav menu__nav">
          <a href="#!" class="nav__item">Главная</a>
          <a href="#!" class="nav__item">Проекты</a>
          <a href="#!" class="nav__item">Замер</a>
          <a href="#!" class="nav__item">Команда</a>
          <a href="#!" class="nav__item">Отзывы</a>
          <a href="#!" class="nav__item">Контакты</a>
        </nav>
        <div class="contacts menu__contacts">
          <a href="#!" class="phone contacts__phone">+7 (999) 768-32-99</a>
          <button class="button contacts__button button--primary" data-toggle="modal">Заказать звонок</button>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </header>
  <main>
    <section class="hero">
      <div class="insagram hero__instagram">
        <a href="#!" class="insagram__link">Instagram</a>
      </div>
      <div class="container">
        <div class="hero__content">
          <h1 class="title hero__title wow fadeInRight" data-wow-delay="0.1s"> турецкий ремонт в&nbsp;<span
              class=" title--primary">Ростове-на-дону</span>
          </h1>
          <p class="hero__text wow fadeInRight" data-wow-delay="0.3s">Получите готовый ремонт под ключ в срок с
            экономией рабочего времени до
            45 дней и
            20% от стоимости материалов за счет организации работы</p>
          <button class="button hero__button button--primary wow fadeInRight" data-wow-delay="0.5s">Рассчитать
            стоимость</button>
          <button class="button hero__button button--outline wow fadeInRight" data-wow-delay="0.5s">Отправить
            заявку</button>
        </div>
      </div>
      <!-- /.container -->
      <a href="#!" class="hero__scroll-down">листайте вниз</a>
    </section>
    <section class="section section--dark projects">
      <div class="container">
        <div class="row">
          <div class="column-50 column-50--projects">
            <div class="section-title section-title--left wow fadeInUp">
              <h2 class="section-title__heading section-title__heading--primary">Завершенные
                <span class="section-title__word">проекты</span>
              </h2>
              <p class="section-title__text">
                На сайте представлена ​​лишь небольшая часть работ, выполняемых нашей компанией. За 14 лет работы на
                строительном рынке мы осчастливили более 1000 семей
              </p>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper swiper-no-swiping">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide--projects">
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Город:
                    </h3>
                    <span class="swiper-slide__value">
                      Ростове-на-дону
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Площадь:
                    </h3>
                    <span class="swiper-slide__value">
                      81 м2
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Срок ремонта:
                    </h3>
                    <span class="swiper-slide__value">
                      3,5 месяца
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Стоимость:
                    </h3>
                    <span class="swiper-slide__value">
                      По запросу
                    </span>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide--projects">
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Город:
                    </h3>
                    <span class="swiper-slide__value">
                      Ростове-на-дону
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Площадь:
                    </h3>
                    <span class="swiper-slide__value">
                      81 м2
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Срок ремонта:
                    </h3>
                    <span class="swiper-slide__value">
                      3,5 месяца
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Стоимость:
                    </h3>
                    <span class="swiper-slide__value">
                      По запросу
                    </span>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide--projects">
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Город:
                    </h3>
                    <span class="swiper-slide__value">
                      Ростове-на-дону
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Площадь:
                    </h3>
                    <span class="swiper-slide__value">
                      81 м2
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Срок ремонта:
                    </h3>
                    <span class="swiper-slide__value">
                      3,5 месяца
                    </span>
                  </div>
                  <div class="swiper-slide__text">
                    <h3 class="swiper-slide__heading">
                      Стоимость:
                    </h3>
                    <span class="swiper-slide__value">
                      По запросу
                    </span>
                  </div>
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="column-50">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper swiper-no-swiping">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();?>/img/project.jpg" alt="project">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();?>/img/project.jpg" alt="project">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();?>/img/project.jpg" alt="project">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section class="section control">
      <div class="container control__container">
        <div class="section-title control__section-title section-title--light">
          <h2 class="section-title__heading">Онлайн контроль</h2>
          <div class="section-title__image">
            <img src="<?php echo get_template_directory_uri();?>/img/svg/video.svg" alt="video">
          </div>
        </div>
        <div class="control__video video" id="player">
          <script src="https://www.youtube.com/iframe_api"></script>
          <img src="<?php echo get_template_directory_uri();?>/img/svg/play.svg" alt="play" class="video__play">
        </div>
        <p class="control__text">
          На каждом объекте установлена ​​камера, которая транслирует ход работы на часах. В любой момент вы можете
          зайти на наш сайт и следить за ходом работы в вашей квартире. Посмотрите прямую трансляцию с одного из наших
          объектов! Оставьте заявку ниже чтобы получить ссылку на трансляцию.
        </p>
        <form action="send.php" class="form control__form">
          <div class="control__input-group">
            <label for="control-user-name" class="label form__label ">Имя</label>
            <input placeholder="Как вас зовут:" maxlength="15" type="text" class="input control__input"
              id="control-user-name">
          </div>
          <div class="control__input-group">
            <label for="control-user-phone" class="label form__label ">Телефон</label>
            <input placeholder="Ваш номер телефона:" type="tel" class="input control__input" id="control-user-phone">
          </div>
          <button class="button button--primary control__button">
            Отправить
          </button>
          <div class="policy control__policy">
            <input type="checkbox" name="policy-checkbox" id="checkbox" class="policy__checkbox">
            <label for="checkbox" class="policy__label control__policy-label">Я соглашаюсь с обработкой данных</label>
          </div>
        </form>
      </div>
      <!-- /.container -->
    </section>
    <section class="section types">
      <div class="container">
        <div class="section-title types__section-title">
          <h2 class="section-title__heading">Виды ремонта</h2>
          <div class="section-title__image">
            <img src="<?php echo get_template_directory_uri();?>/img/svg/video.svg" alt="video">
          </div>
        </div>
        <div class="row">
          <div class="column-30 wow fadeInUp">
            <div class="card types__card">
              <img src="<?php echo get_template_directory_uri();?>/img/types/type-1.jpg" alt="Косметический ремонт" class="card__image">
              <div class="card__text">
                <h3 class="card__title">Косметический ремонт</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Демонтаж старых покрытий</li>
                  <!-- /.card__item -->
                  <li class="card__item">Поклейка обоев</li>
                  <!-- /.card__item -->
                  <li class="card__item">Роспись стен и потолков</li>
                  <!-- /.card__item -->
                  <li class="card__item">Укладка полов</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена сантехники</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена розеток и выключателей</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена дверей</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag">
                  от 900 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
          <div class="column-30 wow fadeInDown">
            <div class="card types__card">
              <img src="<?php echo get_template_directory_uri();?>/img/types/type-2.jpg" alt="Капитальный ремонт" class="card__image">
              <div class="card__text">
                <h3 class="card__title">Капитальный ремонт</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Демонтаж старых покрытий</li>
                  <!-- /.card__item -->
                  <li class="card__item">Поклейка обоев</li>
                  <!-- /.card__item -->
                  <li class="card__item">Роспись стен и потолков</li>
                  <!-- /.card__item -->
                  <li class="card__item">Укладка полов</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена сантехники</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена розеток и выключателей</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена дверей</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag">
                  от 1800 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
          <div class="column-30 wow fadeInUp">
            <div class="card types__card">
              <img src="<?php echo get_template_directory_uri();?>/img/types/type-3.jpg" alt="Дизайнерский ремонт" class="card__image">
              <div class="card__text">
                <h3 class="card__title">Дизайнерский ремонт</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Демонтаж старых покрытий</li>
                  <!-- /.card__item -->
                  <li class="card__item">Поклейка обоев</li>
                  <!-- /.card__item -->
                  <li class="card__item">Роспись стен и потолков</li>
                  <!-- /.card__item -->
                  <li class="card__item">Укладка полов</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена сантехники</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена розеток и выключателей</li>
                  <!-- /.card__item -->
                  <li class="card__item">Замена дверей</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag">
                  от 4000 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <section class="section design">
      <div class="container">
        <div class="section-title design__section-title">
          <h2 class="section-title__heading">Дизайн проект</h2>
          <div class="section-title__image">
            <img src="<?php echo get_template_directory_uri();?>/img/svg/Design.svg" alt="design">
          </div>
          <div class="section__subtitle design__section-subtitle">
            Дизайн-проект не только помогает сделать ремонт вашей квартиры более современным, но и значительно
            удешевляет материалы и сокращает время ремонтных работ
          </div>
        </div>
        <div class="row">
          <div class="column-30">
            <div class="card design__card">
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri();?>/img/design/design-img-1.jpg" alt="Минимальный" class="">
              </div>
              <div class="card__text">
                <h3 class="card__title">Минимальный</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Измерительные чертежи</li>
                  <!-- /.card__item -->
                  <li class="card__item">Перепланировка</li>
                  <!-- /.card__item -->
                  <li class="card__item">Планировка мебели</li>
                  <!-- /.card__item -->
                  <li class="card__item">Сантехнический план</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag pricetag--design">
                  150 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
          <div class="column-30">
            <div class="card design__card">
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri();?>/img/design/design-img-2.jpg" alt="Стандартный" class="">
              </div>
              <div class="card__text">
                <h3 class="card__title">Стандартный</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Измерительные чертежи</li>
                  <!-- /.card__item -->
                  <li class="card__item">Перепланировка</li>
                  <!-- /.card__item -->
                  <li class="card__item">Планировка мебели</li>
                  <!-- /.card__item -->
                  <li class="card__item">План потолков</li>
                  <!-- /.card__item -->
                  <li class="card__item">План этажей</li>
                  <!-- /.card__item -->
                  <li class="card__item">План электрики</li>
                  <!-- /.card__item -->
                  <li class="card__item">План света</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag pricetag--design">
                  400 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
          <div class="column-30">
            <div class="card design__card">
              <div class="card__image">
                <img src="<?php echo get_template_directory_uri();?>/img/design/design-img-3.jpg" alt="Полный" class="">
              </div>
              <div class="card__text">
                <h3 class="card__title">Полный</h3>
                <!-- /.card__title -->
                <ul class="card__list">
                  <li class="card__item">Измерительные чертежи</li>
                  <!-- /.card__item -->
                  <li class="card__item">Перепланировка</li>
                  <!-- /.card__item -->
                  <li class="card__item">Планировка мебели</li>
                  <!-- /.card__item -->
                  <li class="card__item">План потолков</li>
                  <!-- /.card__item -->
                  <li class="card__item">План этажей</li>
                  <!-- /.card__item -->
                  <li class="card__item">План электрики</li>
                  <!-- /.card__item -->
                  <li class="card__item">План света</li>
                  <!-- /.card__item -->
                  <li class="card__item">Стенные развертки</li>
                  <!-- /.card__item -->
                  <li class="card__item">3D визуализация</li>
                  <!-- /.card__item -->
                  <li class="card__item">Смета на материалы</li>
                  <!-- /.card__item -->
                  <li class="card__item">Выезд на подбор материалов</li>
                  <!-- /.card__item -->
                  <li class="card__item">Выбор мебели</li>
                  <!-- /.card__item -->
                </ul>
                <!-- /.card__list -->
                <strong class="card__pricetag pricetag--design">
                  900 руб / m<sup>2</sup>
                </strong>
              </div>
              <!-- /.card__text -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.column -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <section class="section section--dark steps">
      <div class="container">
        <div class="row">
          <div class="column--steps">
            <div class="section-title section-title--left">
              <p class="section-title__subtitle">как мы работаем</p>
              <h2 class="section-title__heading section-title__heading--primary">6 шагов
                <span class="section-title__word">до цели</span>
              </h2>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper swiper-no-swiping">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      1/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>

                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      2/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      3/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      4/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      5/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide__text">
                    <p class="swiper-slide__number">
                      6/6
                    </p>
                    <h3 class="swiper-slide__heading">
                      Выезд на замеры помещения</h3>
                    <div class="swiper-slide__info">
                      <p>После вашего звонка мы идем к вам, чтобы проконсультироваться и измерить помещения вашей
                        квартиры. Во время нашей встречи вы можете задать абсолютно любые вопросы, касаемо ремонта.
                      </p>
                      <p>
                        Оценщик приходит, чтобы измерить комнату. Он проконсультирует вас по вопросам техники ремонта,
                        дизайна квартиры, сроков ремонта квартиры в целом и отдельных ее этапов.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination swiper-pagination--steps"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="column-61">
            <div class="swiper-slide__nav">
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">01</div>
                <div class="swiper-slide__item--info">Выезд на замер помещения</div>
              </div>
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">02</div>
                <div class="swiper-slide__item--info">Составление сметы</div>
              </div>
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">03</div>
                <div class="swiper-slide__item--info">Разработка дизайн проекта</div>
              </div>
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">04</div>
                <div class="swiper-slide__item--info">Закупка расходных материалов</div>
              </div>
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">05</div>
                <div class="swiper-slide__item--info">Ремонтно-отделочные работы</div>
              </div>
              <div class="swiper-slide__item">
                <div class="swiper-slide__item--number">06</div>
                <div class="swiper-slide__item--info">Приемка-сдача работ</div>
              </div>
            </div>
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper swiper-no-swiping">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps1.jpg" alt="steps1">
                </div>
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps2.jpg" alt="steps2.jpg">
                </div>
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps3.jpg" alt="steps3.jpg">
                </div>
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps4.jpg" alt="steps4.jpg">
                </div>
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps5.jpg" alt="steps5.jpg">
                </div>
                <div class="swiper-slide swiper-slide--steps">
                  <img src="<?php echo get_template_directory_uri();?>/img/steps6.jpg" alt="steps6.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section class="section team">
      <div class="container">
        <div class="section-title team__section-title section-title--light">
          <h2 class="section-title__heading team__heading">Наша команда</h2>
          <div class="section-title__image">
            <img src="<?php echo get_template_directory_uri();?>/img/svg/team.svg" alt="Team">
          </div>
          <div class="section-title__subtitle team__section--subtitle">
            Наша команда помогла стать счастливее более чем 500 семьям, и мы не собираемся останавливаться
          </div>
        </div>
        <div class="cards team__cards">
          <div class="card team__card">
            <div class="card__image--corner">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/team-card-onCorner1.svg" alt="">
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri();?>/img/team1.jpg" alt="Алексей">
              <div class="team__info">
                <p class="team__info--name">Алексей Колмаков</p>
                <p class="team__info--post">Проектный менеджер</p>
                <p class="team__info--exp">Опыт работы 8 лет</p>
              </div>
            </div>
          </div>
          <div class="card team__card">
            <div class="card__image--corner">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/team-card-onCorner2.svg" alt="">
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri();?>/img/team2.jpg" alt="Алиса">
            </div>
            <div class="team__info">
              <p class="team__info--name">Алиса Сухорукова</p>
              <p class="team__info--post">Дизайнер</p>
              <p class="team__info--exp">Опыт работы 6 лет</p>
            </div>
          </div>
          <div class="card team__card">
            <div class="card__image--corner">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/team-card-onCorner3.svg" alt="">
            </div>
            <div class="card__image">
              <img src="<?php echo get_template_directory_uri();?>/img/team3.jpg" alt="Давид">
            </div>
            <div class="team__info">
              <p class="team__info--name">Давид Волынев</p>
              <p class="team__info--post">Бригадир</p>
              <p class="team__info--exp">Опыт работы 7 лет</p>
            </div>
          </div>
        </div>
        <p class="team__text">
          Каждый сотрудник нашей компании является квалифицированным штатным специалистом с опытом работы от 6 лет. У
          нас нет гастарбайтеров, каждый сотрудник выполняет работу, соответствующую его специальности.
        </p>
      </div>
    </section>
    <section class="section clients">
      <div class="container">
        <div class="section-title clients__section-title">
          <h2 class="section-title__heading">Наши клиенты</h2>
          <div class="section-title__image">
            <img src="<?php echo get_template_directory_uri();?>/img/svg/Clients-title.svg" alt="Clients">
          </div>
          <div class="section__subtitle clients__section-subtitle">
            80% наших клиентов рекомендуют нас своим знакомым и друзьям
          </div>
        </div>
        <div class="cards clients__cards">
          <?php
              $my_posts = get_posts( array(
                'numberposts' => 3,
                'category_name'    => 'clients',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true,
              ) );

              foreach( $posts as $post ){
                setup_postdata($post);
                    ?>
                    <div class="card clients__card">
                          <div class="clients__card--title">
                            <div class="clients__card--image">
                              <img src="<?php the_post_thumbnail_url();?>" alt="Екатерина">
                            </div>
                            <div class="clients__card--name"> <?php the_title(); ?> </div>
                          </div>
                          <div class="clients__card--text">
                            Я хочу поблагодарить ребят за их работу. Они вложили душу в ремонт. Я очень благодарна, что сделали как
                            для самих себя. Большое спасибо, я выражаю проектному менеджеру за его профессионализм и подход. Процесс
                            ремонта был завершен быстрее, чем ожидалось. Команда мобильная и профессиональная. Работы выполнены
                            качественно без нареканий. Цены демократические. Я рекомендую этих мастеров.
                          </div>
                          <div class="clients__card--footer">
                            <div class="clients__card--footer--square">
                              <div>
                                <img src="<?php echo get_template_directory_uri();?>/img//clients-footer-square.svg" alt="Square">
                              </div>
                              <div class="clients__card--footer--square-info"> 40 М<sup>2</sup></div>
                            </div>
                            <div class="clients__card--footer--term">
                              <div>
                                <img src="<?php echo get_template_directory_uri();?>/img//clients-footer-term.svg" alt="Term">
                              </div>
                              <div class="clients__card--footer--term-info"> 48 дней</div>
                            </div>
                          </div>
                      </div>
                        <?php 
                    }
                    wp_reset_postdata(); 
                    ?>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer section--dark">
    <div class="container">
      <div class="footer__wrap">
        <h3 class="footer__title">Остались вопросы?</h3>
        <form action="send.php" class="form footer__form">
          <div class="input-group footer__input-group">
            <label for="footer-user-name" class="label form__label label--light">Имя</label>
            <input placeholder="Как вас зовут:" maxlength="15" type="text" class="input footer__input"
              id="footer-user-name">
          </div>
          <div class="input-group footer__input-group">
            <label for="footer-user-phone" class="label form__label label--light">Телефон</label>
            <input placeholder="Ваш номер телефона:" type="tel" class="input footer__input" id="footer-user-phone">
          </div>
          <div class="input-group footer__input-group footer__input-group--full-width">
            <label for="user-question" class="label form__label label--light">Вопрос</label>
            <input placeholder="Я хочу спросить:" type="text" class="input footer__input" id="user-question">
          </div>
          <div class="policy footer__policy">
            <input type="checkbox" name="policy-checkbox" id="checkbox-policy" class="policy__checkbox">
            <label for="checkbox-policy" class="policy__label policy__label--center">Я соглашаюсь с обработкой
              данных</label>
          </div>
          <button class="button button--primary footer__button">
            Отправить
          </button>
        </form>
      </div>
      <div class="map footer__map">
        <div class="footer__map--title">
          <h2 class="footer__map--heading">
            Ростов на дону, Торговый центр Plaza
            Прямой телефон +7 (999) 768 32 99
          </h2>
        </div>
        <div class="footer__map--yandex-map">
          <script async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8881ce2fce7ee51e5c7e7d9f873eacae3d695f18408fcad182260cca0abb4db0&amp;width=100%25&amp;height=465&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
    </div>
    <div class="footer__menu">
      <div class="container">
        <div class="menu">
          <div class="logo menu__logo wow backInLeft">Repair Design Project</div>
          <nav class="nav menu__nav">
            <a href="#!" class="nav__item">Главная</a>
            <a href="#!" class="nav__item">Проекты</a>
            <a href="#!" class="nav__item">Замер</a>
            <a href="#!" class="nav__item">Команда</a>
            <a href="#!" class="nav__item">Отзывы</a>
            <a href="#!" class="nav__item">Контакты</a>
          </nav>
          <div class="contacts menu__contacts">
            <a href="#!" class="phone contacts__phone">+7 (999) 768-32-99</a>
            <button class="button contacts__button button--primary" data-toggle="modal">Заказать звонок</button>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal">
    <div class="modal__dialog">
      <button class="modal__close"></button>
      <h3 class="modal__title">Оставьте заявку и наш менеджер свяжется с вами</h3>
      <form action="send.php" method="POST" class="form modal__form">
        <div class="input-group modal__input-group">
          <label for="modal-user-name" class="label form__label label--light">Имя</label>
          <input placeholder="Как вас зовут:" maxlength="15" name="userName" type="text" class="input modal__input"
            id="modal-user-name">
        </div>
        <div class="input-group modal__input-group">
          <label for="modal-user-phone" class="label form__label label--light">Телефон</label>
          <input placeholder="Ваш номер телефона:" name="userPhone" type="tel" class="input modal__input"
            id="modal-user-phone">
        </div>
        <div class="input-group modal__input-group">
          <label for="modal-user-email" class="label form__label label--light">Email</label>
          <input placeholder="Ваш email" name="userEmail" type="email" class="input modal__input" id="modal-user-email">
        </div>
        <div class="policy modal__policy">
          <input type="checkbox" name="policy-checkbox" id="checkbox-modal" class="policy__checkbox">
          <label for="checkbox-modal" class="policy__label policy__label--center">Я соглашаюсь с обработкой
            данных</label>
        </div>
        <button class="button button--primary modal__button">
          Отправить заявку
        </button>
      </form>
    </div>
    <!-- /.modal__dialog -->
  </div>
  <!-- /.modal -->
  <a class="arrow__top">Вверх ↑</a>

  <?php wp_footer() ?>
</body>
</html>