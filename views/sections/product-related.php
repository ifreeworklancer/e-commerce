<!-- Popular -->
<section id="popular">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $product_related['title']; ?>
                </h2>
                <div class="popular-slider">
                    <?php
                    foreach ($product_related['items'] as $item) :
                        ?>
                        <div class="col-sm-6 col-lg-4 col-xl-3 popular-slider-item">
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
        </div>
    </div>
    <div class="slider-arrow slider-arrow--popular">
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
</section>