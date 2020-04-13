<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page register -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item">Регистрация профиля</li>
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
                            Регистрация профиля
                        </h1>
                        <p class="page-register-header__description">
                            введите Ваш Email и придумайте надежный пароль
                        </p>
                    </div>
                    <div class="page-register-body">
                        <form class="form-register">
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="register-email">
                                        Email
                                    </label>
                                    <input type="email" id="register-email" class="form-control"
                                           placeholder="Введите Ваш email" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-password">
                                        Пароль
                                    </label>
                                    <input type="password" id="register-password" class="form-control"
                                           placeholder="••••••••" required>
                                    <div class="invalid-message">
                                        Password invalid
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="register-password-repeat">
                                        Повторите пароль
                                    </label>
                                    <input type="password" id="register-password-repeat" class="form-control"
                                           placeholder="••••••••" required>
                                    <div class="invalid-message">
                                        Password invalid
                                    </div>
                                </div>
                                <button class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="page-register-footer">
                        <p class="page-register-footer__description">
                            У меня есть зарегистрированный аккаунт
                        </p>
                        <a href="./page-login.php" class="btn btn-outline-primary">
                            Войти
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer-light.php');