</main>

<!-- App-footer -->
<footer id="app-footer" class="app-footer-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="site-map-wrapper d-flex justify-content-between flex-wrap">
                    <?php $count = 0;
                    foreach ($site_map['items'] as $item) : $count++; ?>
                        <div class="site-map-item">
                            <div class="site-map-item__title">
                                <?= $item['title']; ?>
                            </div>
                            <ul class="site-map-item-list">
                                <?php foreach ($item['list'] as $val) : ?>
                                    <li>
                                        <a href="#">
                                            <?= $val; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if ($count === 3) : ?>
                                <form action="#" class="form-mailing">
                                    <div class="form-group">
                                        <label for="email">
                                            Подписаться на рассылку новинок
                                        </label>
                                        <div class="d-flex">
                                            <input type="email" id="email" class="form-control"
                                                   placeholder="Введите Ваш email" required>
                                            <button class="btn">
                                                <svg width="21" height="17">
                                                    <use xlink:href="#mailing-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-contacts d-flex justify-content-around align-items-center flex-wrap">
                    <a href="/" class="logo mb-3 mb-lg-0">
                        LOGO
                    </a>
                    <ul class="contacts-list">
                        <li>
                            <a href="tel:<?= phone_link($phone); ?>">
                                <svg width="15" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone; ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= $email; ?>">
                                <svg width="20" height="13">
                                    <use xlink:href="#email-icon"></use>
                                </svg>
                                <?= $email; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $address_link; ?>" target="_blank">
                                <svg width="9" height="15">
                                    <use xlink:href="#address-icon"></use>
                                </svg>
                                <?= $address; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-copyright d-flex justify-content-between align-items-center flex-column flex-sm-row">
                    <div class="footer-copyright-item mb-2 mb-sm-0">
                        <?= date('Y'); ?>
                        Все права защищены
                    </div>
                    <div class="footer-copyright-item">
                        Дизайн и разработка сайта <a href="https://impressionbureau.pro/" target="_blank">Impression Bureau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>