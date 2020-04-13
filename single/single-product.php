<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single product -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="../page/page-catalog.php">Каталог</a></li>
                        <li class="breadcrumb-item"><?= $single_product['title']; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id="single-product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6">
                    <div class="product-gallery">
                        <div class="product-card-badges">
                            <?php if ($single_product['old_price'] !== '') : ?>
                                <div class="product-card-badges__item product-card-badges__item--sale">
                                    Акция
                                </div>
                            <?php endif; ?>
                            <?php if ($single_product['new']) : ?>
                                <div class="product-card-badges__item product-card-badges__item--new">
                                    Новинка
                                </div>
                            <?php endif; ?>
                            <?php if ($single_product['bestseller']) : ?>
                                <div class="product-card-badges__item product-card-badges__item--bestseller">
                                    Хит продаж
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="product-gallery-body">
                            <?php $count = 0;
                            foreach ($single_product['images'] as $image) : $count++; ?>
                                <div class="product-gallery-body-item <?php if ($count === 1) echo 'active'; ?>">
                                    <div class="product-gallery-item simple-block">
                                        <img src="<?= $image; ?>" alt="product image">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="product-gallery-nav">
                            <?php foreach ($single_product['images'] as $image) : ?>
                                <div class="product-gallery-nav-item product-gallery-nav-item--image">
                                    <div class="product-gallery-item simple-block">
                                        <img src="<?= $image; ?>" alt="product image">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="product-gallery-nav-item">
                                <div class="product-gallery-item simple-block video-prev"
                                     style="background-image: url(<?= getVideoImageLinkAttribute($single_product['video']); ?>);"
                                     data-youtube="<?= getVideoLinkAttribute($single_product['video']); ?>">
                                    <div class="play-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6">
                    <div class="product-description">
                        <h1 class="product-description__title">
                            <?= $single_product['title']; ?>
                        </h1>
                        <div class="product-description-info">
                            <div class="product-description-status product-description-status--available">
                                есть в наличии
                            </div>
                            <div class="product-description-vendor-code">
                                Артикул <?= $single_product['vendor_code']; ?>
                            </div>
                        </div>
                        <div class="product-description__text">
                            <p>
                                <?= $single_product['description']; ?>
                            </p>
                        </div>
                        <div class="product-description-feature">
                            <p>
                                Дополнительные критерии: цвет, размер и т д (если необходимо)
                            </p>
                            <form>
                                <div class="form-group d-flex align-items-center">
                                    <?php $count = 0;
                                    foreach ($single_product['colors'] as $color) : $count++; ?>
                                        <div class="custom-radio-color">
                                            <input type="radio" id="color-<?= $count; ?>" name="customRadio"
                                                   class="custom-control-input"
                                                <?php if ($count === 1) echo 'checked'; ?>
                                            >
                                            <label class="custom-control-label" for="color-<?= $count; ?>">
                                                <div class="custom-control-label-input"
                                                     style="background: <?= $color; ?>;"></div>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </form>
                        </div>
                        <div class="product-description-footer">
                            <div class="product-card-price">
                                <?php if ($single_product['old_price'] === '') : ?>
                                    <span class="product-card-price__value product-card-price__value--current">
                                        <?= $single_product['price']; ?>
                                        <span>
                                            грн
                                        </span>
                                    </span>
                                <?php endif; ?>
                                <?php if ($single_product['old_price'] !== '') : ?>
                                    <span class="product-card-price__value product-card-price__value--old">
                                        <?= $single_product['old_price']; ?>
                                        <span>
                                            грн
                                        </span>
                                    </span>
                                    <span class="product-card-price__value product-card-price__value--new">
                                        <?= $single_product['price']; ?>
                                        <span>
                                            грн
                                        </span>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="quantity">
                                <div class="quantity-button quantity-button--down">-</div>
                                <input type="number" class="quantity-input form-control"
                                       name="basket_quantity" min="1" value="1">
                                <div class="quantity-button quantity-button--up">+</div>
                            </div>
                            <a href="#" class="btn btn-primary btn-add-basket">
                                <svg width="20" height="15">
                                    <use xlink:href="#basket-icon"></use>
                                </svg>
                                В корзину
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 mt-4">
                    <div class="product-info">
                        <div class="custom-tabs">
                            <ul class="custom-tabs-nav">
                                <?php $count = 0;
                                foreach ($single_product['info'] as $item) : $count++; ?>
                                    <li class="<?php if ($count === 1) echo 'active'; ?>">
                                        <?= $item['title']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="custom-tabs-body">
                                <?php $count = 0;
                                foreach ($single_product['info'] as $item) : $count++; ?>
                                    <div class="custom-tabs-body-item <?php if ($count === 1) echo 'active'; ?>">
                                        <?= $item['description']; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/advantages-secondary.php');
require_once('../views/sections/promotional-product.php');
require_once('../views/sections/advertising-secondary.php');
require_once('../views/sections/product-related.php');
require_once('../views/base/footer-secondary.php');