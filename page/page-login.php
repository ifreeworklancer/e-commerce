<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page login -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item">Вход</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id="page-login" class="page-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-5">
                    <div class="page-register-header">
                        <h1 class="section-title">
                            Войти
                        </h1>
                        <p class="page-register-header__description">
                            с помощью социальных сетей
                        </p>
                        <div class="quick-entry">
                            <a href="#" class="quick-entry-item simple-block">
                                <svg width="20" height="20">
                                    <use xlink:href="#google-entry"></use>
                                </svg>
                                Google
                            </a>
                            <a href="#" class="quick-entry-item simple-block">
                                <svg width="20" height="20">
                                    <use xlink:href="#facebook-entry"></use>
                                </svg>
                                Facebook
                            </a>
                        </div>
                        <div class="page-register-header-decor">
                            <div class="page-register-header-decor__line"></div>
                            <div class="page-register-header-decor__text">
                                или
                            </div>
                            <div class="page-register-header-decor__line"></div>
                        </div>
                    </div>
                    <div class="page-register-body">
                        <form>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="login-email">
                                        Email
                                    </label>
                                    <input type="email" id="login-email" class="form-control"
                                           placeholder="Введите Ваш email" required>
                                </div>
                                <div class="form-group">
                                    <label for="login-password">
                                        Пароль
                                    </label>
                                    <input type="password" id="login-password" class="form-control"
                                           placeholder="••••••••" required>
                                    <div class="invalid-message">
                                        Password invalid
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="login-memory">
                                        <label class="custom-control-label" for="login-memory">
                                            <span class="custom-control-label-input"></span>
                                            Запомнить меня
                                        </label>
                                    </div>
                                    <a href="./page-forgot-password.php" class="text-primary">Забыли пароль?</a>
                                </div>
                                <button class="btn btn-primary">
                                    Войти
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="page-register-footer">
                        <p class="page-register-footer__description">
                            У меня нет зарегистрированного аккаунта
                        </p>
                        <a href="./page-register.php" class="btn btn-outline-primary">
                            Зарегистрироваться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer-light.php');