<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page basket -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><?= $page_basket['title']; ?></li>
                    </ol>
                    <h1 class="section-title">
                        <?= $page_basket['title']; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section id="page-basket">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="basket">
                        <div class="basket-header">
                            <div class="basket-header-item">
                                Наименование товара
                            </div>
                            <div class="basket-header-item">
                                Количество
                            </div>
                            <div class="basket-header-item">
                                Стоимость
                            </div>
                            <div class="basket-header-item">
                                Сумма
                            </div>
                            <div class="basket-header-item">
                                Удалить
                            </div>
                        </div>
                        <div class="basket-body">
                            <?php foreach ($page_basket['items'] as $item) : ?>
                                <div class="basket-item">
                                    <div class="basket-item-col">
                                        <div class="position-relative">
                                            <?php $count = 0;
                                            foreach ($item['images'] as $image) : $count++; ?>
                                                <div class="basket-item-prev simple-block  <?php if ($count === 1 && count($item['images']) > 1) echo 'mb-3'; ?>">
                                                    <img src="<?= $image; ?>" alt="product image">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="basket-item-description">
                                            <h5 class="basket-item__title">
                                                <?= $item['title']; ?>
                                            </h5>
                                            <div class="basket-item__subtitle">
                                                <?= $item['subtitle']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basket-item-col">
                                        <div class="quantity">
                                            <div class="quantity-button quantity-button--down">-</div>
                                            <input type="number" class="quantity-input form-control"
                                                   name="basket_quantity" min="1" value="1">
                                            <div class="quantity-button quantity-button--up">+</div>
                                        </div>
                                    </div>
                                    <div class="basket-item-col">
                                        <div class="basket-item-price">
                                            <?= $item['price']; ?>
                                            <span>
                                                грн
                                            </span>
                                        </div>
                                    </div>
                                    <div class="basket-item-col">
                                        <div class="basket-item-price">
                                            1675
                                            <span>
                                                грн
                                            </span>
                                        </div>
                                    </div>
                                    <div class="basket-item-col">
                                        <div class="basket-item-delete">
                                            <div class="close-icon">
                                                <div class="line line--left"></div>
                                                <div class="line line--right"></div>
                                            </div>
                                            удалить товар
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="basket-footer">
                            <div class="basket-total">
                                Итого:
                                <span class="basket-total__value">
                                    2675
                                    <span class="basket-total__currency">
                                        грн
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/advantages-secondary.php');
require_once('../views/base/footer-secondary.php');