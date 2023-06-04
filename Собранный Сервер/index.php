<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
include_once $ROOT . 'version.php';


?>
<!DOCTYPE html>
<html>

<head>
    <?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
    <?php else : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] ?>">
    <?php endif; ?>

    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Университет «Синергия» | Центр довузовской подготовки | Топ-10 ошибок на ЕГЭ">
    <meta property="og:description" content="ТОП-10 ОШИБОК НА ЕГЭ | САМЫЙ УВЛЕКАТЕЛЬНЫЙ И ПОЛЕЗНЫЙ КУРС">
    <meta property="og:url" content="http://егэ.рф">
    <meta property="og:image" content="http://egemetr.ru/lp/top10/v2//img/share.jpg">
    <meta property="og:domain" content="website.com" />

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- <link href="css/Raleway/stylesheet.css" rel="stylesheet"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet"> -->

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M62HCD');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M62HCD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    

    <div class="wrapper">
        

        <header>
    <div class="container">
        <div class="header__info">
            <div class="header__logo"><img src="img/header/logo.svg" alt="Synergy Logo"></div>
            <div class="header__contacts">
                <img src="img/header/phone.svg" alt="phone">
                <a href="tel:<?= $phone__link ?>"><?= $phone ?></a>
                <a href="#form">Поступить</a>
            </div>
            <a class="header__burger" href="#popup-burger" data-fancybox>
                <div class="header__burger-line1"></div>
            </a>
        </div>
        <div class="header__nav">
            <nav>
                <a href="#program" class="point">Направления</a>
                <a href="#education" class="point">Формы обучения</a>
                <a href="#speakers" class="point">Преподаватели</a>
                <a href="#univer" class="point">Об университете</a>
                <a href="#partners" class="">Партнеры</a>
            </nav>
        </div>
    </div>
</header>

        <section class="main">
  <div class="container">

    <div class="main__content">

      <h1 class="main__title"> <?= $title_h1 ?> </h1>
      <div class="main__title2"> <?= $title_h2 ?> </div>
      <img src="img/main/vectors.png" alt="vecktor">
    </div>
    <div class="main__form">

      
<form action="<?=$action?>&form=" class="form horizontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Заполните заявку на консультацию и мы расскажем вам, как поступить на программу</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить заявку &gt;</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo;</div>
            </label>
        </div>
    </div>
</form>


    </div>

  </div>
</section>

        
<section class="program" id="program">
    <div class="container">
        <div class="program__title">
            <h2>Программы обучения</h2>
            <div class="program__logo"><img src="img/program/logo-runes.png" alt=""></div>
        </div>
        <div class="program__tabs">
            <div class="program__tabs-buttons">
                <div class="program__tabs-button active" type="button" data-tab="#tab_1">Колледж</div>
                <div class="program__tabs-button" data-tab="#tab_2">Бакалавриат</div>
                <div class="program__tabs-button" data-tab="#tab_3">Магистратура</div>
                <div class="program__tabs-button" data-tab="#tab_4">MBA</div>
            </div>
            <div class="program__tabs-content">
                <div class="program__tabs-item active" id="tab_1">
                    
                    <div class="program__block">
                        <p class="program__block-title">Коммерция (по отраслям)</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                </div>
                <div class="program__tabs-item" id="tab_2">
                    
                    <div class="program__block">
                        <p class="program__block-title">Проектный менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Кадровый менеджмент</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Маркетинг</p>
                        <img class="program__block-img" src="img/program/vector3.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Финансовый менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Психология</p>
                        <img class="program__block-img" src="img/program/vector3.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Государственное и муниципальное управление</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Торговое дело</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Менеджмент в премиум-сегменте</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                </div>
                <div class="program__tabs-item" id="tab_3">
                    
                    <div class="program__block">
                        <p class="program__block-title">Проектный менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Система государственного и муниципального управления</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Стратегический менеджмент</p>
                        <img class="program__block-img" src="img/program/vector3.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Производственный менеджмент в концепции Zero waste и Lean менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Международный менеджмент премиум-сегмента</p>
                        <img class="program__block-img" src="img/program/vector3.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Инновационный HR-менеджмент</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                </div>
                <div class="program__tabs-item" id="tab_4">
                    
                    <div class="program__block">
                        <p class="program__block-title">Стратегический менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Управление человеческими ресурсами</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Финансовый менеджмент</p>
                        <img class="program__block-img" src="img/program/vector1.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Маркетинг и продажи</p>
                        <img class="program__block-img" src="img/program/vector3.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                    <div class="program__block">
                        <p class="program__block-title">Интернет-маркетинг</p>
                        <img class="program__block-img" src="img/program/vector2.png" alt="">
                        <a class="program__block-button" href="#form">Подать заявку</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="education">
    <div class="container">
        <div class="education__title" id="education">
            <h2>Формы<br>обучения</h2>
        </div>
        <div class="education__tabs">
            <div class="education__tabs-buttons">
                <div class="education__tabs-button active" type="button" data-tab="#tab_5">Очное</div>
                <div class="education__tabs-button" data-tab="#tab_6">Вечернее</div>
                <div class="education__tabs-button" data-tab="#tab_7">Выходного дня</div>
                <div class="education__tabs-button" data-tab="#tab_8">Заочное</div>
                <div class="education__tabs-button" data-tab="#tab_9">Дистанционное</div>
            </div>
            <div class="education__tabs-content">
                <div class="education__tabs-item active" id="tab_5">
                    <div class="education__tabs-title">Программа классического обучения</div>
                    <ul>
                        <li>Посещение занятий 5-6 раз в неделю</li>
                        <li>Зачеты и экзамены по учебному плану</li>
                        <li>Льготы: отсрочка и проездной</li>
                        <li>Общежитие при Университете</li>
                    </ul>
                </div>
                <div class="education__tabs-item" id="tab_6">
                    <div class="education__tabs-title">Программа вечернего обучения</div>
                    <ul>
                        <li>Посещение занятий 2 раза в неделю</li>
                        <li>Зачеты и экзамены по удобному плану</li>
                        <li>Возможность совмещать учебу с трудовой деятельностью</li>
                    </ul>
                </div>
                <div class="education__tabs-item" id="tab_7">
                    <div class="education__tabs-title">Программа выходного дня</div>
                    <ul>
                        <li>Посещение занятий в субботу и воскресенье</li>
                        <li>Зачеты и экзамены по "удобному плану"</li>
                        <li>Возможность совмещать учебу с трудовой деятельностью</li>
                    </ul>

                </div>
                <div class="education__tabs-item" id="tab_8">
                    <div class="education__tabs-title">Заочное обучение</div>
                    <ul>
                        <li>Не нужно посещать занятия</li>
                        <li>Зачеты и экзамены по удобному плану</li>
                        <li>Возможность совмещать учебу с трудовой деятельностью</li>
                    </ul>
                </div>

                <div class="education__tabs-item" id="tab_9">
                    <div class="education__tabs-title">Дистанционное обучение</div>
                    <ul>
                        <li>Обучение в удобное время через интернет</li>
                        <li>Удобный интернет-портал, где выгружены видео-лекции и текстовые материалы</li>
                        <li>Индивидуальный куратор, который отвечает на любой вопрос в течении 24 часов</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="form-section" id="form">
	<div class="container">
		<div class="form-section__form">

			
<form action="<?=$action?>&form=" class="form horizontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку на консультацию</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">&gt;</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo;</div>
            </label>
        </div>
    </div>
</form>


			<img class="form-section__left-vector" src="img/form-section/left-vector.svg" alt="left-vector">
			<img class="form-section__right-vector" src="img/form-section/right-vector.svg" alt="right-vector">
		</div>

	</div>
</section>

        <section class="speakers" id="speakers">
    <div class="container">
        <div class="speakers__title">
            <h2>Ведущие преподаватели</h2>
        </div>
        <div class="speakers__content">
            <div class="speakers__item">
                <img src="img/speakers/mihanenko.png" alt="">
                <div class="speakers__name">Михненко<br>Павел Александрович</div>
                <p>Заведующий кафедрой общего и&nbsp;стратегического менеджмента. Доктор экономических наук, доцент. Эксперт по&nbsp;стратегическому менеджменту в&nbsp;России и&nbsp;мире.</p>
            </div>
            <div class="speakers__item">
                <img src="img/speakers/habarov.png" alt="">
                <div class="speakers__name">Хабаров<br>Владимир Иванович</div>
                <p>Заведующий кафедрой организационного менеджмента. Доктор экономических наук, профессор. Эксперт по&nbsp;управлению проектами в&nbsp;России и&nbsp;мире.</p>
            </div>
            <div class="speakers__item">
                <img src="img/speakers/chenuhina.png" alt="">
                <div class="speakers__name">Чернухина<br>Галина Николаевна</div>
                <p>Заведующая кафедрой коммерции и&nbsp;торгового дела. Кандидат экономических наук, доцент. Специалист по&nbsp;управлению торговыми сетями</p>
            </div>
        </div>
    </div>
</section>

        <section class="proffesion">
    <div class="container">
        <div class="proffesion__cource-title">
            <h2>Получайте профессию <br>уже в процессе обучения</h2>
        </div>
        <div class="proffesion__cource-content">
            <div class="proffesion__cource-item">
                <div>
                    <div>1 курс</div>
                    <span>17-18 лет</span>
                </div>
                <p>Младший специалист</p>
            </div>
            <div class="proffesion__cource-item">
                <div>
                    <div>2 курс</div>
                    <span>18-19 лет</span>
                </div>
                <p>Cпециалист</p>
            </div>
            <div class="proffesion__cource-item">
                <div>
                    <div>3 курс</div>
                    <span>19-20 лет</span>
                </div>
                <p>Ведущий специалист</p>
            </div>
            <div class="proffesion__cource-item proffesion__cource-item-noborder">
                <div>
                    <div>4 курс</div>
                    <span>20-21 лет</span>
                </div>
                <p>Руководитель отдела</p>
            </div>
        </div>
        <div class="proffesion__work-title">
            <h2>Кем вы станете</h2>
        </div>
        <div class="proffesion__work-blocks">
            <div class="proffesion__work-item proffesion__work-red">
                <div class="proffesion__work-white">Менеджер по работе с VIP- клиентами</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-white">Заработная плата от</span>
                    <p class="proffesion__work-white">40 000 руб.</p>
                </div>
                <img src="img/proffesion/blue-vector.png" alt="">
            </div>
            <div class="proffesion__work-item proffesion__work-lowblue">
                <div class="proffesion__work-black">Коммерческий директор</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-black">Заработная плата от</span>
                    <p class="proffesion__work-black">150 000 руб.</p>
                </div>
                <img src="img/proffesion/blue-vector.png" alt="">
            </div>
            <div class="proffesion__work-item proffesion__work-red">
                <div class="proffesion__work-white">Финансовый менеджер/ контролер</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-white">Заработная плата от</span>
                    <p class="proffesion__work-white">60 000 руб.</p>
                </div>
                <img src="img/proffesion/white-vector.png" alt="">
            </div>
            <div class="proffesion__work-item proffesion__work-blue">
                <div class="proffesion__work-white">Руководитель отдела продаж</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-white">Заработная плата от</span>
                    <p class="proffesion__work-white">65 000 руб.</p>
                </div>
                <img src="img/proffesion/lowblue-vector.png" alt="">
            </div>
            <div class="proffesion__work-item proffesion__work-red">
                <div class="proffesion__work-white">Project manager (руководитель проекта)</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-white">Заработная плата от</span>
                    <p class="proffesion__work-white">80 000 руб.</p>
                </div>
                <img src="img/proffesion/white-vector.png" alt="">
            </div>
            <div class="proffesion__work-item proffesion__work-fullblue">
                <div class="proffesion__work-white">Генеральный директор</div>
                <div class="proffesion__work-item-price">
                    <span class="proffesion__work-white">Заработная плата от</span>
                    <p class="proffesion__work-white">200 000 руб.</p>
                </div>
                <img src="img/proffesion/red-vector.png" alt="">
            </div>

        </div>
    </div>
</section>

        <section class="form-section" id="form">
	<div class="container">
		<div class="form-section__form">

			
<form action="<?=$action?>&form=" class="form horizontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку на консультацию</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">&gt;</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo;</div>
            </label>
        </div>
    </div>
</form>


			<img class="form-section__left-vector" src="img/form-section/left-vector.svg" alt="left-vector">
			<img class="form-section__right-vector" src="img/form-section/right-vector.svg" alt="right-vector">
		</div>

	</div>
</section>

        <section class="univer" id="univer">
    <div class="container">
        <div class="univer__title">
            <h2>Об университете</h2>
        </div>
        <div class="univer__video">
            <a class="univer__video-intro" href="#popup-video" data-fancybox><img src="img/univer/univer-video.png" alt=""></a>
            <p>Короткое видео об Университете <span>«Синергия»</span>
            </p>
        </div>
        <div class="univer__catalog">
            <div class="univer__catalog-img">
                <img src="img/univer/catalog.jpg" alt="">
            </div>
            <div class="univer__catalog-items">
                <div class="univer__catalog-item">
                    <div>95000</div>
                    <p>студентов из 50 стран учится в 2021 году</p>
                </div>
                <div class="univer__catalog-item">
                    <div>1988</div>
                    <p>год основания Университета</p>
                </div>
                <div class="univer__catalog-item">
                    <div>>200</div>
                    <p>программ на 20 факультетах</p>
                </div>
            </div>
            <div class="univer__catalog-download">
                <p>В каталоге вы найдете всю необходимую информацию о факультетах и образовательных программах, возможностях трудоустройства и студенческой жизни в Университете «Синергия».</p>
                <a href="img/univer/university.pdf">Скачать каталог</a>
            </div>
        </div>
    </div>
</section>

        <section class="partners" id="partners">
    <div class=" container">
        <div class="partners__title">
            <h2>Партнеры факультета</h2>
        </div>
        <div class="partners__blocks">
            <div class="partners__item">
                <img src="img/partners/gos_duma.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/pat_carmanov.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/obi.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/kosmick.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/chenki_kosmo.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/tax_com.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/rossotrudnichestvo.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/lightmans.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/fererl_nalog.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/x5retail.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/pepsico.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/vision.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/akar.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/renaissance.png" alt="">
            </div>
            <div class="partners__item">
                <img src="img/partners/recruiting_group.png" alt="">
            </div>
        </div>
    </div>
</section>

        <section class="form-footer" id="form">
    <div class="container">
        <div class="form-footer__form">

            
<form action="<?=$action?>&form=" class="form horizontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Заполните заявку на консультацию и мы расскажем вам, как поступить на программу</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить заявку &gt;</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo;</div>
            </label>
        </div>
    </div>
</form>


        </div>
    </div>
</section>

        <section class="mistakes">
    <div class="container">
        <!-- <h2 class="life-hack__title"><span class="colorize">Топ-10</span> частых ошибок, на&nbsp;которых можно потерять баллы</h2> -->
    </div>
</section>

        <section class="life-hack">
    <div class="container">
        <!-- <h2 class="life-hack__title">Забудь про шпаргалки и&nbsp;зубрежку!</h2> -->
    </div>
</section>

        <section class="video">
    <div class="container">
        <!-- <h2 class="video__title">10&nbsp;полезных видео по&nbsp;двум предметам</h2> -->
    </div>
</section>

        <section class="advantage">
    <div class="container">
        
    </div>
</section>

        <footer>
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo"><img src="img/header/logo.svg" alt="Synergy. Больше чем образовние" class="footer__logo-img"></div>
            <div class="footer__phone">
                <a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a>
                <img src="img/header/phone.svg" alt="phone">
                <a href="tel:<?= $phone_link ?>" class="footer__phone-number"><?= $phone ?></a><br>
            </div>
        </div>
    </div>
</footer>

        
    </div>

    <div hidden>
        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Подайте заявку на&nbsp;участие</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Эл.почта" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                <div class="form__footer-text">Я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo;</div>
            </label>
        </div>
    </div>
</form>

</div>

<div class="popup popup-burger" id="popup-burger">
    <nav>
        <a href="#program" class="scroll">Направления</a>
        <a href="#speakers" class="scroll">Преподаватели</a>
        <a href="#univer" class="scroll">Об университете</a>
        <a href="#partners" class="scroll">Партнеры</a>
        <a href="#form" class="scroll highlight">Заявка</ins></a>
        <a href="tel:<?= $phone__link ?>"><?= $phone ?></a>
    </nav>

</div>

<div class="popup popup-video" id="popup-video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yXjpWycBOR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

        

        <a href="//sydi.ru/"></a>
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js



"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>

</html>