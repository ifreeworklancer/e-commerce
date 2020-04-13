<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-12 px-0">
                <h2 class="section-title text-center">
                    <?= $reviews['title']; ?>
                </h2>
                <div class="reviews-slider">
                    <?php foreach ($reviews['items'] as $item) : ?>
                        <div class="reviews-slider-item">
                            <div class="reviews-item">
                                <div class="reviews-item-quote">
                                    <svg width="68" height="43">
                                        <use xlink:href="#quote-icon"></use>
                                    </svg>
                                </div>
                                <div class="reviews-item-prev">
                                    <figure class="reviews-item__image"
                                            style="background-image: url(<?= $item['image']; ?>);"></figure>
                                </div>
                                <div class="reviews-item-body">
                                    <div class="reviews-item__description">
                                        <?= $item['description']; ?>
                                    </div>
                                    <div class="reviews-item__name">
                                        <?= $item['name']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--reviews">
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
                </div>
            </div>
        </div>
    </div>
</section>