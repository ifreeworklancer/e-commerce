<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<div id="app">


    <!-- Modal -->
    <?php include(__DIR__ . '/../modules/modal.php'); ?>

    <!-- App-header -->
    <header id="app-header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 d-flex justify-content-between justify-content-lg-start align-items-center">
                        <a href="/" class="logo">
                            LOGO
                        </a>
                        <ul class="language-menu">
                            <li class="language-menu-item">
                                <div class="language-menu-selected">
                                    ru
                                    <svg width="7" height="11">
                                        <use xlink:href="#shape-icon"></use>
                                    </svg>
                                </div>
                                <ul class="language-menu-hidden">
                                    <li>
                                        <a href="#">ru</a>
                                    </li>
                                    <li>
                                        <a href="#">ua</a>
                                    </li>
                                    <li>
                                        <a href="#">en</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex align-items-center">
                        <ul class="contacts-list">
                            <li>
                                <a href="tel:<?= phone_link($phone); ?>">
                                    <svg width="15" height="15">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= $phone; ?>
                                </a>
                            </li>
                        </ul>
                        <form class="form-search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Найти...">
                                <button class="btn btn-search">
                                    <svg width="20" height="20">
                                        <use xlink:href="#search-icon"></use>
                                    </svg>
                                </button>
                                <button type="reset" class="btn btn-reset">
                                    <span class="line line--left"></span>
                                    <span class="line line--right"></span>
                                </button>
                            </div>
                        </form>
                        <a href="#" class="btn-register">
                            <svg width="20" height="20">
                                <use xlink:href="#user-icon"></use>
                            </svg>
                            Войти
                        </a>
                        <div class="btn btn-outline-primary basket-icon-header">
                            <svg width="20" height="15">
                                <use xlink:href="#basket-icon"></use>
                            </svg>
                            <span class="basket-icon-header__value">0</span>
                            грн
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="header-nav-list">
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">
                                    <div class="menu-icon">
                                        <div class="line line--top"></div>
                                        <div class="line line--middle"></div>
                                        <div class="line line--bottom"></div>
                                    </div>
                                    Каталог
                                </a>
                                <ul class="header-nav-list-hidden">
                                    <li>
                                        <a href="#">
                                            <img src="../../images/icons/category-icon.png" alt="category icon">
                                            Категория товара
                                        </a>
                                        <ul class="header-nav-list-hidden">
                                            <li>
                                                <a href="#">
                                                    Все товары подкатегории
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../../images/icons/category-icon.png" alt="category icon">
                                            Категория товара
                                        </a>
                                        <ul class="header-nav-list-hidden">
                                            <li>
                                                <a href="#">
                                                    Все товары подкатегории
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../../images/icons/category-icon.png" alt="category icon">
                                            Категория товара
                                        </a>
                                        <ul class="header-nav-list-hidden">
                                            <li>
                                                <a href="#">
                                                    Все товары подкатегории
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Подкатегория
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../../images/icons/category-icon.png" alt="category icon">
                                            Категория товара
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="../../images/icons/category-icon.png" alt="category icon">
                                            Категория товара
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">Акции</a>
                            </li>
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">О компании</a>
                            </li>
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">Блог</a>
                            </li>
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">Оплата и доставка</a>
                            </li>
                            <li class="header-nav-list-item">
                                <a href="#" class="header-nav-list-item__link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-bar d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="burger-menu">
                            <div class="line line--top"></div>
                            <div class="line line--middle"></div>
                            <div class="line line--bottom"></div>
                        </div>
                        <div class="open-search">
                            <svg width="20" height="20">
                                <use xlink:href="#search-icon"></use>
                            </svg>
                        </div>
                        <a href="#" class="btn-register">
                            <svg width="20" height="20">
                                <use xlink:href="#user-icon"></use>
                            </svg>
                        </a>
                        <div class="btn btn-outline-primary basket-icon-header">
                            <svg width="20" height="15">
                                <use xlink:href="#basket-icon"></use>
                            </svg>
                            <span class="basket-icon-header__value">0</span>
                            грн
                        </div>
                        <form class="form-search form-search-mob">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Найти...">
                                <button class="btn btn-search">
                                    <svg width="20" height="20">
                                        <use xlink:href="#search-icon"></use>
                                    </svg>
                                </button>
                                <button type="reset" class="btn btn-reset">
                                    <span class="line line--left"></span>
                                    <span class="line line--right"></span>
                                </button>
                            </div>
                        </form>
                        <div class="form-search-mask"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="close-menu">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
            <div class="header-nav">
                <ul class="header-nav-list">
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">
                            <div class="menu-icon">
                                <div class="line line--top"></div>
                                <div class="line line--middle"></div>
                                <div class="line line--bottom"></div>
                            </div>
                            Каталог
                        </a>
                        <ul class="header-nav-list-hidden">
                            <li>
                                <a href="#">
                                    <img src="../../images/icons/category-icon.png" alt="category icon">
                                    Категория товара
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../../images/icons/category-icon.png" alt="category icon">
                                    Категория товара
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../../images/icons/category-icon.png" alt="category icon">
                                    Категория товара
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../../images/icons/category-icon.png" alt="category icon">
                                    Категория товара
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="../../images/icons/category-icon.png" alt="category icon">
                                    Категория товара
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">Акции</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">О компании</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">Блог</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">Оплата и доставка</a>
                    </li>
                    <li class="header-nav-list-item">
                        <a href="#" class="header-nav-list-item__link">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main>
