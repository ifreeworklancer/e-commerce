<!-- Advantages -->
<section id="advantages" class="advantages-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $advantages['title']; ?>
                </h2>
            </div>
            <?php
            foreach ($advantages['items'] as $item) :
                ?>
                <div class="col-sm-6 col-lg-4 advantages-col">
                    <div class="advantages-item simple-block">
                        <div class="advantages-item-prev">
                            <img src="<?= $item['image']; ?>" alt="advantages">
                        </div>
                        <div class="advantages-item-body">
                            <h6 class="advantages-item__title">
                                <?= $item['title']; ?>
                            </h6>
                            <div class="advantages-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>