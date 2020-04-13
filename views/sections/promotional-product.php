<!-- Promotional product -->
<section id="promotional-product">
    <div class="slider-arrow slider-arrow--promotional">
        <div class="slider-arrow-item slider-arrow-item--prev">
            <svg width="10" height="17">
                <use xlink:href="#arrow-prev"></use>
            </svg>
        </div>
        <div class="slider-arrow-item slider-arrow-item--next">
            <svg width="10" height="17">
                <use xlink:href="#arrow-next"></use>
            </svg>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="promotional-product-slider">
                    <?php foreach ($promotional_product['items'] as $item) : ?>
                        <div class="promotional-product-slider-item">
                            <?php foreach ($item['product'] as $product) : ?>
                                <a href="#" class="product-card simple-block simple-block-hover">
                                    <div class="product-card-badges">
                                        <?php if ($product['old_price'] !== '') : ?>
                                            <div class="product-card-badges__item product-card-badges__item--sale">
                                                Акция
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($product['new']) : ?>
                                            <div class="product-card-badges__item product-card-badges__item--new">
                                                Новинка
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($product['bestseller']) : ?>
                                            <div class="product-card-badges__item product-card-badges__item--bestseller">
                                                Хит продаж
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-card-prev">
                                        <img src="<?= $product['image']; ?>" alt="" class="product-card__image">
                                    </div>
                                    <div class="product-card-body">
                                        <h5 class="product-card__title">
                                            <?= $product['title']; ?>
                                        </h5>
                                        <div class="product-card__description">
                                            <?= $product['description']; ?>
                                        </div>
                                        <div class="product-card-price">
                                            <?php if ($product['old_price'] === '') : ?>
                                                <span class="product-card-price__value product-card-price__value--current">
                                                <?= $product['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                            <?php endif; ?>
                                            <?php if ($product['old_price'] !== '') : ?>
                                                <span class="product-card-price__value product-card-price__value--old">
                                                <?= $product['old_price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                                <span class="product-card-price__value product-card-price__value--new">
                                                <?= $product['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
                                <div class="divider">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            <?php endforeach; ?>
                            <div class="product-total simple-block simple-block-hover">
                                <div class="product-total-body">
                                    <h3 class="product-total__title">
                                        <?= $item['total']['title']; ?>
                                    </h3>
                                    <div class="product-card-price">
                                        <?php if ($item['total']['old_price'] === '') : ?>
                                            <span class="product-card-price__value product-card-price__value--current">
                                                <?= $item['total']['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                        <?php endif; ?>
                                        <?php if ($item['total']['old_price'] !== '') : ?>
                                            <span class="product-card-price__value product-card-price__value--old">
                                                <?= $item['total']['old_price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                            <span class="product-card-price__value product-card-price__value--new">
                                                <?= $item['total']['price']; ?>
                                                <span>
                                                    грн
                                                </span>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="product-total-footer">
                                    <div class="product-total-saving">
                                        Экономия
                                        <span>
                                            <?= $item['total']['old_price'] - $item['total']['price']; ?>
                                            <span>
                                                грн
                                            </span>
                                        </span>
                                    </div>
                                    <a href="#" class="btn btn-primary">
                                        Купить комплект
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>