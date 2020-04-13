<!-- Category -->
<section id="category">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $category['title']; ?>
                </h2>
            </div>
            <?php
            $category_col = array_chunk($category['items'], 2);
            foreach ($category_col as $col) :
                ?>
                <div class="col-sm-10 col-md-12 col-lg-4 category-col">
                    <?php foreach ($col as $item) : ?>
                        <a href="#" class="category-item simple-block simple-block-hover">
                            <div class="category-item-prev">
                                <img src="<?= $item['image']; ?>" alt="category image">
                            </div>
                            <div class="category-item-body">
                                <h4 class="category-item__title">
                                    <?= $item['title']; ?>
                                </h4>
                                <?php if ($item['description'] !== '') : ?>
                                    <div class="category-item__description">
                                        <?= $item['description']; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="category-item__quantity">
                                    Количество товаров:
                                    <span>
                                        <?= $item['quantity']; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="link-more">
                                Узнать больше
                                <svg width="6" height="10">
                                    <use xlink:href="#arrow-next"></use>
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>