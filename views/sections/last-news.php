<!-- Last news -->
<section id="last-news">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $last_news['title']; ?>
                </h2>
            </div>
            <?php
            foreach ($last_news['items'] as $item) : ?>
                <div class="col-sm-6 col-lg-4">
                    <a href="#" class="article-card">
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
</section>