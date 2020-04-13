<!-- Partners -->
<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners-wrapper">
                    <h2 class="section-title">
                        <?= $partners['title']; ?>
                    </h2>
                    <div class="partners-gallery">
                        <?php foreach ($partners['items'] as $item) : ?>
                            <div class="partners-gallery-item">
                                <div class="partners-item">
                                    <img src="<?= $item; ?>" alt="partner">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>