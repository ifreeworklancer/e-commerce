<!-- Intro -->
<section id="intro">
    <div class="slider-arrow slider-arrow--intro">
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
    <div class="intro-slider">
        <?php foreach ($intro['items'] as $item) : ?>
            <div class="intro-slider-item" style="background-image: url(<?= $item['image']; ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <div class="section-description">
                                <h2 class="section-description__title">
                                    <?= $item['title']; ?>
                                </h2>
                                <div class="section-description__subtitle">
                                    <?= $item['subtitle']; ?>
                                </div>
                                <a href="#" class="btn btn-primary">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>