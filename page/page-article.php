<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page blog -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><?= $page_article['title']; ?></li>
                    </ol>
                    <h1 class="section-title">
                        <?= $page_article['title']; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section id="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="article-wrapper">
                        <?php
                        foreach ($page_article['items'] as $item) : ?>
                            <div class="article-item">
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
                    <div class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item page-item-button page-item-button--prev"><a class="btn btn-outline-primary" href="#">Предыдущая</a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">06</a></li>
                            <li class="page-item page-item-button page-item-button--next"><a class="btn btn-primary" href="#">Следующая</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/product-related.php');
require_once('../views/base/footer-secondary.php');