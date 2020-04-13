<!-- Blog -->
<section id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
                <div class="article-wrapper">
                    <?php
                    $count = 0;
                    foreach ($blog['items'] as $item) : $count++; ?>
                        <div class="article-item">
                            <?php if ($count === 1) : ?>
                                <h2 class="section-title">
                                    <?= $blog['title']; ?>
                                </h2>
                            <?php endif; ?>
                            <a href="#" class="article-card">
                                <div class="article-card-prev">
                                    <figure class="article-card__image"
                                            style="background-image: url(<?= $item['image']; ?>);"></figure>
                                </div>
                                <div class="article-card-body">
                                    <div class="article-card__date">
                                        <?= $item['date']; ?>
                                    </div>
                                    <h4 class="article-card__title">
                                        <?= $item['title']; ?>
                                    </h4>
                                    <div class="article-card__description">
                                        <?= $item['description']; ?>
                                    </div>
                                    <div class="link-more">
                                        Читать полностью
                                        <svg width="6" height="10">
                                            <use xlink:href="#arrow-next"></use>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>