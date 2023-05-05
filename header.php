<?
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$title = 'Поставки оборудования для майнинг от заводов производителей с размещением в дата-центрах АЭС';
$description = 'Купить оборудование для майнинга криптовалют в Москве доступная цена на сайте gis-mining. Майнинг оборудование купить в лизинг и оптом в России.';

?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="/fonts/PTR/PTRootUI.css">
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome/brands.css">
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/js/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/prodSlide.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css?ver=<?=date("hisY")?>">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css?ver=<?=date("hisY")?>">
    <!--favicon-->
    <link rel="apple-touch-icon" href="https://gis-mining.ru/wp-content/uploads/2022/02/cropped-GIS-1-min-180x180.png">
    <link rel="icon" href="https://gis-mining.ru/wp-content/uploads/2022/02/cropped-GIS-1-min-32x32.png" sizes="32x32">
    <link rel="icon" href="https://gis-mining.ru/wp-content/uploads/2022/02/cropped-GIS-1-min-192x192.png" sizes="192x192">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--/favicon-->
    <!-- OG -->
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="gis-mining.ru">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$title;?>">
    <meta property="og:description" content="<?=$description;?>">
    <meta property="og:url" content="<? echo $url;?>">
    <meta property="og:image" content="/img/logo.svg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="gis-mining.ru">
    <meta name="twitter:title" content="<?=$title;?>">
    <meta name="twitter:description" content="<?=$description;?>">

    <meta name="robots" content="index, follow">
    <meta name="description" content="<?=$description;?>">
    <title><?=$title;?></title>
</head>
<body>
    <div class="lang-wrap dropdown d-flex d-md-none">
        <a href="#" class="lang-ch dropdown-toggle" role="button" id="dropdownLangMenuLink" data-toggle="dropdown" aria-expanded="false">RU</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownLangMenuLink">
            <li><a class="dropdown-item" href="/">RU</a></li>
            <li><a class="dropdown-item" href="/?lang=en">EN</a></li>
        </ul>
    </div>
    <header>
        <div class="collapse navbar-collapse justify-content-sm-center" id="mainmenu_mobile">
              <ul class="navbar-nav">
                   <div class="nav-item mb-0">
                       <form action="/search/" class="search-form">
                           <input class="search_input title-search-input" type="text" name="q" value="" size="40" maxlength="150" autocomplete="off" placeholder="Что вы хотите найти?">
                           <input name="s" type="image" src="/img/search.svg" class="search_bt" alt="Поиск майнинг оборудования в России">
                       </form>
                   </div>
                  <li class="nav-item">
                      <a class="nav-link blue-wrap" href="/">Каталог</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">Главная</a>
                  </li>
                  <li class="nav-item position-relative">
                      <a class="nav-link dropdown-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Услуги</a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item">Размещение</a>
                          <a href="#" class="dropdown-item">Техподдержка</a>
                          <a href="#" class="dropdown-item">Строительство ЦОД под ключ</a>
                          <a href="#" class="dropdown-item">Прямые поставки</a>
                          <a href="#" class="dropdown-item">Система мониторинга</a>
                          <a href="#" class="dropdown-item">Майнинг-фермы</a>
                          <a href="#" class="dropdown-item">Контейнеры для майнинга</a>
                          <a href="#" class="dropdown-item">Продажа майнинг оборудования</a>
                          <a href="#" class="dropdown-item">Инвестиции</a>
                          <a href="#" class="dropdown-item">МЦOД</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">ЦОД Калининская АЭС</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">Блог</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">О нас</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/">Контакты</a>
                  </li>

                  <div class="header-price nav-item">
                            <span>
                                <i class="fab fa-ethereum"></i>
                                <span id="ethchart">1 589$</span>
                            </span>
                        <div class="delitel"></div>
                        <span>
                                <i class="fab fa-btc"></i>
                                <span id="bitchart">21 376$</span>
                        </span>
                   </div>
                   <div class="nav-item phone_mobile-menu">
                       <a class="header-tel tel-ya" href="tel:+7(495)109-10-54">+7 (495) 109-10-54</a>
                   </div>
              </ul>
         </div>
        <div class="container">
            <div class="row g-0 top-row">
                <div class= "col-12 col-lg-6 icon-block">
                    <div class="left-wrap">
                        <a href="/" class="logo">
                            <img class="w" src="/img/logo.svg" alt="Gis">
                            <img class="dark" src="/img/header-logo-d.svg" alt="Gis">
                        </a>
                        <a class="header-tel tel-ya d-none d-xl-flex d-md-none" href="tel:+7(495)109-10-54">+7 (495) 109-10-54</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 icon-block">
                    <div class="header-top-right">
                        <div class="soc-top">
                            <a class="f-icon f-icon-wats social-ya" href="https://wa.me/79267720247?text=%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BE%D0%B1%D0%BE%D1%80%D1%83%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B4%D0%BB%D1%8F%20%D0%BC%D0%B0%D0%B9%D0%BD%D0%B8%D0%BD%D0%B3%D0%B0" target="_blank"></a>
                            <a class="f-icon f-icon-tg social-ya" href="https://t.me/GIS_Mining" target="_blank"></a>
                        </div>
                        <div class="lk-item-wrap">
                            <a class="lk-item lk-item-like" href="/"></a>
                            <a class="lk-item lk-item-cart" href="/personal/cart/"></a>
                            <a class="lk-item lk-item-profile" href="/personal/"></a>
                        </div>
                        <div class="lang-wrap dropdown d-none d-md-flex">
                            <a href="#" class="lang-ch dropdown-toggle" role="button" id="dropdownLangMenuLink" data-toggle="dropdown" aria-expanded="false">RU</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownLangMenuLink">
                                <li><a class="dropdown-item" href="/">RU</a></li>
                                <li><a class="dropdown-item" href="/?lang=en">EN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 col-lg-8 col-xl-9">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-toggler" role="button" type="button"
                             data-toggle="collapse"
                             data-target="#mainmenu_mobile"
                             aria-controls="mainmenu_mobile"
                             aria-expanded="false"
                             aria-label="Toggle navigation"
                        >
                            <div class="link-one"></div>
                            <div class="link-two"></div>
                            <div class="link-three"></div>
                        </div>
                        <div class="navbar-collapse collapse" id="mainmenu">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link blue-wrap" href="/">Каталог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-arrow" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Размещение</a>
                                        <a href="#" class="dropdown-item">Техподдержка</a>
                                        <a href="#" class="dropdown-item">Строительство ЦОД под ключ</a>
                                        <a href="#" class="dropdown-item">Прямые поставки</a>
                                        <a href="#" class="dropdown-item">Система мониторинга</a>
                                        <a href="#" class="dropdown-item">Майнинг-фермы</a>
                                        <a href="#" class="dropdown-item">Контейнеры для майнинга</a>
                                        <a href="#" class="dropdown-item">Продажа майнинг оборудования</a>
                                        <a href="#" class="dropdown-item">Инвестиции</a>
                                        <a href="#" class="dropdown-item">МЦOД</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">ЦОД Калининская АЭС</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Блог</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Контакты</a>
                                </li>
                            </ul>
                        </div>                    
                    </nav>
                </div>
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="right-bottom d-none d-lg-flex d-md-none">
                        <div class="top_search">
                            <a class="search-modal-link" href="#" data-toggle="collapse" data-target="#search-modal-wrap" aria-controls="search-modal-wrap" aria-expanded="false" aria-label="Toggle navigation"></a>
                        </div>
                        <div class="header-price">
                            <span>
                                <i class="fab fa-ethereum"></i>
                                <span id="ethchart">1 589$</span>
                            </span>
                            <div class="delitel"></div>
                            <span>
                                <i class="fab fa-btc"></i>
                                <span id="bitchart">21 376$</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fix-wrap">
        <div class="container">
            <div id="search-modal-wrap" class="collapse">
                <div class="title">Поиск</div>
                <form action="/search/" class="search-form">
                    <input class="search_input title-search-input" type="text" name="q" value="" size="40" maxlength="150" autocomplete="off" placeholder="Что вы хотите найти?">
                    <input name="s" type="image" src="/img/search.svg" class="search_bt" alt="Поиск майнинг оборудования в России">
                </form>
                <div class="title">Часто ищут</div>
                <a class="link" href="#">Каталог</a>
                <a class="link" href="#">Техподдержка</a>
                <a class="link" href="#">Размещение</a>
                <a class="link" href="#">Доставка</a>
                <a class="link" href="#">Antminer S19 XP</a>
            </div>
        </div>
    </div>

