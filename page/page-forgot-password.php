<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page forgot password -->
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

    <section id="page-forgot-password" class="page-register vh-100 py-0">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-7 col-lg-5 col-xl-4">
                    <div class="page-register-header">
                        <h1 class="section-title">
                            Забыли пароль?
                        </h1>
                        <p class="page-register-header__description">
                            введите Ваш Email, вам прийдет на него ключ изменения пароля
                        </p>
                    </div>
                    <div class="page-register-body">
                        <form>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="forgot-email">
                                        Email
                                    </label>
                                    <input type="email" id="forgot-email" class="form-control"
                                           placeholder="Введите Ваш email" required>
                                </div>
                                <button class="btn btn-primary">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer-light.php');