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
        
<section class="thanks">
  <div class="container">
    <div class="thanks__logo">
      <img src="img/header/logo.svg" alt="Synergy Logo">
    </div>
    <div class="thanks__content">

      <h1 class="thanks__title">Спасибо!</h1>
      <div class="thanks__title2">Ваша заявка принята.</div>
      <div class="thanks__title3">Скоро специалист приемной комиссии свяжется с вами и ответит на вопросы.</div>
      <a href="https://synergy.ru/lp/management-dp1/">На главную</a>
      <img src="img/thanks/vectors.png" alt="vecktor">

      <?php /*?><p>Подпишись на наши группы в соцсетях,<br> чтобы быть в курсе событий</p><?php */ ?>

    </div>
    <?php /*?> 
    <div class="thanks__icons">
      <a href=""><img src="img/thanks/vk_icon.svg" alt=""></a>
      <a href=""><img src="img/thanks/inst_icon.svg" alt=""></a>
    </div> 
    <?php */ ?>


  </div>
</section>

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