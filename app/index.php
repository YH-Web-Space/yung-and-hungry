<?php
echo ('jopajopajopa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/maskinput.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width">

</head>
<body>
    <div class="shape">
        <header class="header" id="header">
            <div class="header__ellipse"><img src="img/header/ellipse.svg" alt="ellipse"></div>
            <div class="container">
                <div class="top-header df">
                    <div class="top-header__logo">
                        <img src="img/header/logo.png" alt="logo Y&H">
                    </div>
                    <div class="header-top__burger">
                        <span></span>
                    </div>
                </div>
                <div class="header-content df">
                    <div class="header-content__left df">
                        <h1 class="header-content__title">Dелаем сайты .</h1>
                        <p class="header-content__slogan">Получи <span
                                class="header-content__slogan_violet">бесплатный прототип </span> .</p>
                        <div class="main-btn">
                            <a class="main-btn__link btn-header" href="test.html">Получить</a>
                        </div>
                    </div>
                    <div class="header-content__right df">
                        <h1 class="neon-text">WEB <br> development &lt/&gt</h1>
                        <h1 class="neon-text">design</h1>
                        <h1 class="neon-text">studio</h1>
                    </div>
                </div>
            </div>
            <div class="header-top__burger-menu">
                <div class="header-top__menu">
                    <div class="container">
                        <nav>
                            <ul class="header-top__list anchor">
                                <li class="header-top__item">
                                    <a href="#services" class="header-top__link">Услуги</a>
                                </li>
                                <li class="header-top__item">
                                    <a href="#algorithm" class="header-top__link">Алгоритм работы</a>
                                </li>
                                <li class="header-top__item">
                                    <a href="#project" class="header-top__link">Портфолио</a>
                                </li>
                                <li class="header-top__item">
                                    <a href="#price" class="header-top__link">Прайс</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="menu__social-network">
                            <a href="https://www.instagram.com/yh.web/" target="_blank" class="menu-sn__link">
                                Instagram
                            </a>
                            <a href="https://www.facebook.com/yh.web.space/" target="_blank" class="menu-sn__link">
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="services" id="services">
            <div class="services__ellipse"><img src="img/header/ellipse.svg" alt="ellipse"></div>
            <div class="container">
                <p class="title title__services">У нас вы можете заказать</p>
                <div class="services-block slider df">
                    <div class="services__item ">
                        <div class="services-container df">
                            <p class="services__title">Разработка</p>
                            <hr class="services__line">
                            <p class="services__text">
                                Равным образом, курс на социально-ориентированный национальный проект
                                обеспечивает актуальность.
                            </p>
                            <hr class="services__line">
                            <p class="services__list">Корпоративных сайтов</p>
                            <p class="services__list">Интернет-магазинов</p>
                            <p class="services__list">Сайтов визиток</p>
                            <p class="services__list">Промо сайтов</p>
                            <p class="services__list">Лендингов</p>

                            <div class="main-btn services-btn btnPopUp" data-ser="Разработка">
                                <a class="main-btn__link main-btn__link_services" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item ">
                        <div class="services-container df">
                            <p class="services__title">Дизайн</p>
                            <hr class="services__line">
                            <p class="services__text">
                                Равным образом, курс на социально-ориентированный национальный проект обеспечивает
                                актуальность.
                            </p>
                            <hr class="services__line">
                            <p class="services__list">Фирменного стиля</p>
                            <p class="services__list">Юзабилити аудит</p>
                            <p class="services__list">Логотипов</p>
                            <p class="services__list">Баннеров</p>
                            <p class="services__list">Сайтов</p>

                            <div class="main-btn services-btn btnPopUp" data-ser="Дизайн">
                                <a class="main-btn__link main-btn__link_services" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item ">
                        <div class="services-container df">
                            <p class="services__title">Поддержка</p>
                            <hr class="services__line">
                            <p class="services__text">
                                Равным образом, курс на социально-ориентированный национальный проект обеспечивает
                                актуальность.
                            </p>
                            <hr class="services__line">
                            <p class="services__list">Графическое сопровождение</p>
                            <p class="services__list">Техническая поддержка</p>
                            <p class="services__list">Наполнение контентом</p>
                            <p class="services__list">Консультация</p>
                            <p class="services__list">Обучение</p>

                            <div class="main-btn services-btn btnPopUp" data-ser="Поддержка">
                                <a class="main-btn__link main-btn__link_services" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-back" id="call-back">
            <div class="call-back__ellipse"><img src="img/header/ellipse.svg" alt="ellipse"></div>
            <div class="container">
                <p class="title title__call-back">Хочешь обсудить проект ?</p>
                <form class="call-back__form df" action="telegram.php" method="post">
                    <div class="form-block">
                        <input name="user_name" type="text" placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-block">
                        <input class="form-phone" name="user_phone" type="text" placeholder="Введите ваш телефон" required>
                    </div>
                    <div class="form-block">
                        <input class="main-btn__link btn-form" type="submit" value="Обсудить со мной">
                    </div>
                </form>
            </div>
        </section >

        <section class="project" id="project">
            <div class="container">
                <p class="title">Наши проекты</p>
                <div class="slider project__block slider-project df">
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/kitchen.png" alt="kitchen">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/herbalive.png" alt="herbalive">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/rr.png" alt="rr">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/lodki24.png" alt="lodki24">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/avtomuving.png" alt="avtomuving">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/tomboat.png" alt="tomboat">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/chairman.png" alt="chairman">
                    </a>
                    <a class="project__item anim-items anim-project" href="">
                        <img src="img/project/onRoad.png" alt="onRoad">
                    </a>
                </div>
                <div class="main-btn project-btn btnPopUp" data-ser="Запросить портфолио">
                    <a class="main-btn__link" href="#">Запросить полное портфолио</a>
                </div>
            </div>
        </section>

        <section class="algorithm" id="algorithm">
            <div class="container">
                <p class="title">Какой порядок действий?</p>
                <div class="algorithm__lil-block df">
                    <div data-tab="tab-1" class="lil-block__item tab-active">
                        <p class="lil-tab__title">01</p>
                        <p class="lil-tab__text">Анализ</p>
                    </div>
                    <div data-tab="tab-2" class="lil-block__item">
                        <p class="lil-tab__title">02</p>
                        <p class="lil-tab__text">Прототип</p>
                    </div>
                    <div data-tab="tab-3" class="lil-block__item">
                        <p class="lil-tab__title">03</p>
                        <p class="lil-tab__text">SEO</p>
                    </div>
                    <div data-tab="tab-4" class="lil-block__item">
                        <p class="lil-tab__title">04</p>
                        <p class="lil-tab__text">Дизайн</p>
                    </div>
                    <div data-tab="tab-5" class="lil-block__item">
                        <p class="lil-tab__title">05</p>
                        <p class="lil-tab__text">Вёрстка</p>
                    </div>
                    <div data-tab="tab-6" class="lil-block__item">
                        <p class="lil-tab__title">06</p>
                        <p class="lil-tab__text">Контент</p>
                    </div>
                    <div data-tab="tab-7" class="lil-block__item">
                        <p class="lil-tab__title">07</p>
                        <p class="lil-tab__text">Запуск</p>
                    </div>
                </div>

                <div class="algorithm__big-block df">
                    <div id="1" class="big-block__item tab-active tab-1 ">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">01</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как позиционирует <br>
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/01.svg" alt="">
                        </div>
                    </div>
                    <div id="2" class="big-block__item tab-2">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">02</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/02.svg" alt="">
                        </div>
                    </div>
                    <div id="3" class="big-block__item tab-3">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">03</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/03.svg" alt="">
                        </div>
                    </div>
                    <div id="4" class="big-block__item tab-4">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">04</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/04.svg" alt="">
                        </div>
                    </div>
                    <div id="5" class="big-block__item tab-5">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">05</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/05.svg" alt="">
                        </div>
                    </div>
                    <div id="6" class="big-block__item tab-6">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">06</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/06.svg" alt="">
                        </div>
                    </div>
                    <div id="7" class="big-block__item tab-7">
                        <div class="big-tab__title">
                            <p class="big-tab__title-number">07</p>
                            <span class="big-tab__text-number">Сбор информации о <br> конкурентах</span>
                        </div>
                        <p class="big-tab__text">
                            Первым делом мы начинаем с того что смотрим как <br> позиционирует
                            себя ваши конкуренты, находим их сильные и слабые стороны
                        </p>
                        <ul class="tab-list">
                            <li class="tab-item"><span>01.1</span> Узнаем специфику вашего бизнеса</li>
                            <li class="tab-item"><span>01.2</span> Проводим исследование рынка</li>
                            <li class="tab-item"><span>01.3</span> Ставим конкретные цели</li>
                            <li class="tab-item"><span>01.4</span> Смотрим на решения конкурентов</li>
                            <li class="tab-item"><span>01.5</span> Формируем собственную стратегию</li>
                        </ul>
                        <div class="big-block__img">
                            <img src="img/algorithm/07.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="price" id="price">
            <div class="container">
                <p class="title">Стоимость наших услуг</p>
                <div class="price-block df">
                    <p class="price-title">
                        Стоимость вашего проекта обсуждается в индивидуальном порядке. <br>
                        <span class="price-title__green">Ориентировочная стоимость проекта:</span>
                    </p>
                    <div class="price-list">
                        <div class="price-list__item">
                            <p class="price-services"><span class="price-circle"></span>Корпоративный сайт</p>
                            <hr class="price-line">
                            <p class="min-price">от 12 000 грн</p>
                        </div>
                        <div class="price-list__item">
                            <p class="price-services"><span class="price-circle"></span>Интернет-магазин</p>
                            <hr class="price-line">
                            <p class="min-price">от 20 000 грн</p>
                        </div>
                        <div class="price-list__item">
                            <p class="price-services"><span class="price-circle"></span>Сайт-визитка</p>
                            <hr class="price-line">
                            <p class="min-price">от 6 000 грн</p>
                        </div>
                        <div class="price-list__item">
                            <p class="price-services"><span class="price-circle"></span>Промо-сайт</p>
                            <hr class="price-line">
                            <p class="min-price">от 10 000 грн</p>
                        </div>
                        <div class="price-list__item">
                            <p class="price-services"><span class="price-circle"></span>Лендинг</p>
                            <hr class="price-line">
                            <p class="min-price">от 7 000 грн</p>
                        </div>
                    </div>

                    <div class="price-buy df">
                        <img class="price-buy__img" src="img/price/bg.svg" alt="price">
                        <div class="main-btn btn-buy btnPopUp">
                            <a class="main-btn__link main-btn__link_buy" href="#">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer" id="footer">
            <div class="footer__ellipse"><img src="img/header/ellipse.svg" alt="ellipse"></div>
            <div class="container">
                <p class="title title__footer">Остались вопросы?</p>
                <form class="call-back__form df" action="telegram.php" method="post">
                    <div class="form-block">
                        <input name="user_name" type="text" placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-block">
                        <input class="form-phone" name="user_phone" type="text" placeholder="Введите ваш телефон" required>
                    </div>
                    <div class="form-block">
                        <input class="main-btn__link btn-form" type="submit" value="Обсудить со мной">
                    </div>
                </form>

                <div class="bottom-footer df">
                    <div class="logo">
                        <img src="img/header/logo.png" alt="Y&H logo">
                    </div>
                    <div class="footer-menu">
                        <ul class="footer-menu__list anim-menu anchor df">
                            <li class="footer-menu__item df">
                                <a href="#services" class="footer-menu__link">Услуги</a>
                            </li>
                            <li class="footer-menu__item df">
                                <a href="#project" class="footer-menu__link">Портфолио</a>
                            </li>
                            <li class="footer-menu__item df">
                                <a href="#algorithm" class="footer-menu__link">Алгоритм работы</a>
                            </li>
                            <li class="footer-menu__item df">
                                <a href="#price" class="footer-menu__link">Прайс</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social anim-menu df">
                        <a href="https://www.facebook.com/yh.web.space/" target="_blank">
                            <span class="footer-social__link">Facebook</span>
                            <img class="footer__img" src="img/footer/facebook.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/yh.web/" target="_blank">
                            <span class="footer-social__link">Instagram</span>
                            <img class="footer__img" src="img/footer/instagram.svg" alt="">
                        </a>
                    </div>
                </div>

                <p class="footer-span">© 2020. Все права защищены</p>
            </div>
        </footer>

        <div class="popUp">
            <div class="popUp__content">
                <div class="popUp__container">
                    <p class="popUp__title">
                        Давайте обсудим <br> вопросы
                    </p>
                    <form action="telegram.php" method="post" class="popUp__form df">
                        <input class="popUp__input" type="text" name="user_name" placeholder="Введите ваше имя" required>
                        <input class="popUp__input" type="text" name="user_phone" placeholder="Введите ваш телефон" required>
                        <input class="popUp__service" type="text" name="user_service" value="" hidden>
                        <input class="popUp__btn" type="submit" value="Отправить форму">
                    </form>
                    <span class="popUp__close">&#10006</span>
                </div>
            </div>
        </div>
    </div>

<script src="js/main.js"></script>
</body>
</html>