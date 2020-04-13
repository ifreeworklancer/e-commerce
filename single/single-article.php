<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Single article -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="../page/page-article.php">Блог</a></li>
                        <li class="breadcrumb-item"><?= $single_article['title']; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id="single-article">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-9 col-lg-4 order-2 order-lg-1">
                    <div class="single-article-description">
                        <div class="single-article-description__date">
                            <?= $single_article['date']; ?>
                        </div>
                        <h1 class="single-article-description__title">
                            <?= $single_article['title']; ?>
                        </h1>
                        <p>
                            <?= $single_article['description']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-8 order-1 order-lg-2">
                    <img src="<?= $single_article['image']; ?>" alt="single article image" class="single-article-image">
                </div>
            </div>
            <div class="row">
                <div class="col-12 single-article-wrapper">
                    <div class="col-sm-8 mx-auto">
                        <div class="single-article-body">
                            <?= $single_article['body']; ?>
                        </div>
                    </div>
                    <div class="col-sm-8 mx-auto">
                        <div class="single-article-footer">
                            <div class="single-article-author">
                                Автор статьи
                                <a href="#">
                                    <?= $single_article['author']; ?>
                                </a>
                            </div>
                            <ul class="social-list">
                                <li class="social-list__text">
                                    Поделиться в соцсетях:
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="20" height="20">
                                            <use xlink:href="#facebook-icon"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="20" height="20">
                                            <use xlink:href="#instagram-icon"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="20" height="20">
                                            <use xlink:href="#twitter-icon"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/sections/last-news.php');
require_once('../views/sections/product-related.php');
require_once('../views/base/footer-secondary.php');