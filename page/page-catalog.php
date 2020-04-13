<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page catalog -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><?= $page_catalog['title']; ?></li>
                    </ol>
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
                        <h1 class="section-title">
                            <?= $page_catalog['title']; ?>
                        </h1>
                        <div class="custom-selected custom-selected--simple">
                            <div class="form-group custom-selected-input">
                                <input type="text" id="filter-sort"
                                       class="form-control"
                                       placeholder="По популярности">
                                <svg width="7" height="11">
                                    <use xlink:href="#shape-icon"></use>
                                </svg>
                            </div>
                            <div class="custom-selected-body">
                                <ul class="custom-selected-list">
                                    <li>От А до Я</li>
                                    <li>От Я до А</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="page-catalog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="filters-total">
                        <div class="filters-total-value">
                            По фильтрам выбрано:
                            <span>
                                256 товаров
                            </span>
                        </div>
                        <div class="filters-total-badges">
                            <div class="filters-total-badges-item simple-block">
                                Категория
                                <div class="close-icon">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                            <div class="filters-total-badges-item simple-block">
                                Бренд
                                <div class="close-icon">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                            <div class="filters-total-badges-item simple-block">
                                от 100 до 700
                                <div class="close-icon">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3">
                    <div class="filters">
                        <div class="filters-item simple-block">
                            <div class="filters-item__title">
                                Категории товаров
                            </div>
                            <ul class="filters-item-list">
                                <li>
                                    <div class="filters-item-list-input">
                                        <img src="../images/icons/category-icon.png" alt="category icon">
                                        Категория товара
                                        <span>(126)</span>
                                        <svg width="7" height="11">
                                            <use xlink:href="#shape-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="filters-item-hidden">
                                        <ul>
                                            <li>
                                                <div>
                                                    Все товары подкатегории
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="filters-item-list-input">
                                        <img src="../images/icons/category-icon.png" alt="category icon">
                                        Категория товара
                                        <span>(126)</span>
                                        <svg width="7" height="11">
                                            <use xlink:href="#shape-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="filters-item-hidden">
                                        <ul>
                                            <li>
                                                <div>
                                                    Все товары подкатегории
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="filters-item-list-input">
                                        <img src="../images/icons/category-icon.png" alt="category icon">
                                        Категория товара
                                        <span>(126)</span>
                                        <svg width="7" height="11">
                                            <use xlink:href="#shape-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="filters-item-hidden">
                                        <ul>
                                            <li>
                                                <div>
                                                    Все товары подкатегории
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="filters-item-list-input">
                                        <img src="../images/icons/category-icon.png" alt="category icon">
                                        Категория товара
                                        <span>(126)</span>
                                        <svg width="7" height="11">
                                            <use xlink:href="#shape-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="filters-item-hidden">
                                        <ul>
                                            <li>
                                                <div>
                                                    Все товары подкатегории
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    Подкатегория
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters-item simple-block">
                            <div class="filters-item__title">
                                Производитель / бренд
                            </div>
                            <div class="filters-item-checkbox">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="filter-1">
                                        <label class="custom-control-label" for="filter-1">
                                            <div class="custom-control-label-input"></div>
                                            Название
                                            производителя
                                            <span>(126)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="filter-2">
                                        <label class="custom-control-label" for="filter-2">
                                            <div class="custom-control-label-input"></div>
                                            Название
                                            производителя
                                            <span>(23)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group disabled">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="filter-3">
                                        <label class="custom-control-label" for="filter-3">
                                            <div class="custom-control-label-input"></div>
                                            Название
                                            производителя
                                            <span>(0)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="filter-4">
                                        <label class="custom-control-label" for="filter-4">
                                            <div class="custom-control-label-input"></div>
                                            Название
                                            производителя
                                            <span>(1)</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filters-item simple-block">
                            <div class="filters-item__title">
                                Цена <span>грн</span>
                            </div>
                            <div class="filters-item-range">
                                <div id="rangeSlider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-8 col-xl-9 product-wrapper">
                    <div class="row">
                        <?php
                        $count = 0;
                        foreach ($page_catalog['items'] as $item) :
                            $count++;
                            ?>
                            <?php if ($count === 7) : ?>
                            <div class="col-12">
                                <div class="advertising-item"
                                     style="background-image: url(<?= $advertising['image']; ?>);">
                                    <div class="section-description">
                                        <h2 class="section-description__title">
                                            <?= $advertising['title']; ?>
                                        </h2>
                                        <div class="section-description__subtitle">
                                            <?= $advertising['subtitle']; ?>
                                        </div>
                                        <a href="#" class="btn btn-primary">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                            <div class="col-sm-6 col-xl-4">
                                <a href="#" class="product-card simple-block simple-block-hover">
                                    <div class="product-card-badges">
                                        <?php if ($item['old_price'] !== '') : ?>
                                            <div class="product-card-badges__item product-card-badges__item--sale">
                                                Акция
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($item['new']) : ?>
                                            <div class="product-card-badges__item product-card-badges__item--new">
                                                Новинка
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($item['bestseller']) : ?>
                                            <div class="product-card-badges__item product-card-badges__item--bestseller">
                                                Хит продаж
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-card-prev">
                                        <img src="<?= $item['image']; ?>" alt="" class="product-card__image">
                                    </div>
                                    <div class="product-card-body">
                                        <h5 class="product-card__title">
                                            <?= $item['title']; ?>
                                        </h5>
                                        <div class="product-card__description">
                                            <?= $item['description']; ?>
                                        </div>
                                        <div class="product-card-price">
                                            <?php if ($item['old_price'] === '') : ?>
                                                <span class="product-card-price__value product-card-price__value--current">
                                                <?= $item['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($item['old_price'] !== '') : ?>
                                                <span class="product-card-price__value product-card-price__value--old">
                                                <?= $item['old_price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                                <span class="product-card-price__value product-card-price__value--new">
                                                <?= $item['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="product-card-footer">
                                        <div class="quantity">
                                            <div class="quantity-button quantity-button--down">-</div>
                                            <input type="number" class="quantity-input form-control"
                                                   name="basket_quantity" min="1" value="1">
                                            <div class="quantity-button quantity-button--up">+</div>
                                        </div>
                                        <div class="btn btn-primary">
                                            <svg width="20" height="15">
                                                <use xlink:href="#basket-icon"></use>
                                            </svg>
                                            В корзину
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-8 col-xl-9 d-flex justify-content-center ml-lg-auto">
                    <ul class="pagination">
                        <li class="page-item page-item-button page-item-button--prev"><a
                                    class="btn btn-outline-primary" href="#">Предыдущая</a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">06</a></li>
                        <li class="page-item page-item-button page-item-button--next"><a
                                    class="btn btn-primary" href="#">Следующая</a></li>
                    </ul>
                </div>

                <!-- Product not found -->
<!--                <div class="col-sm-10 col-lg-8 col-xl-9 product-not-found">-->
<!--                    <svg width="70" height="70">-->
<!--                        <use xlink:href="#not-found-icon"></use>-->
<!--                    </svg>-->
<!--                    <div class="product-not-found__title">-->
<!--                        Ничего не найдено!-->
<!--                    </div>-->
<!--                    <div class="product-not-found__subtitle">-->
<!--                        Попробуйте изменить критерии поиска-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/advantages-secondary.php');
require_once('../views/base/footer-secondary.php');