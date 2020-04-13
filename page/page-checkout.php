<?php
require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page checkout -->
    <div class="page-description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item">Оформление заказа</li>
                    </ol>
                    <h1 class="section-title">
                        Оформление заказа
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section id="page-checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-steps">
                        <div class="checkout-steps-item">
                            <div class="checkout-steps__title">
                                <span>01</span>
                                Введите данные получателя
                            </div>
                            <div class="checkout-steps-body">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="checkout-fname">
                                            Имя
                                        </label>
                                        <input type="text" id="checkout-fname" class="form-control"
                                               placeholder="Ваше имя" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="checkout-lname">
                                            Фамилия
                                        </label>
                                        <input type="text" id="checkout-lname" class="form-control"
                                               placeholder="Ваша фамилия" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="checkout-email">
                                            Email
                                        </label>
                                        <input type="email" id="checkout-email" class="form-control"
                                               placeholder="Ваш email" required>
                                    </div>
                                    <div class="form-group form-group--phone">
                                        <label for="checkout-phone">
                                            Номер телефона
                                        </label>
                                        <div class="d-flex">
                                            <div class="phone-placeholder">
                                                +380
                                            </div>
                                            <input type="tel" id="checkout-phone" class="form-control"
                                                   placeholder="Ваша телефон" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-steps-item">
                            <div class="checkout-steps__title">
                                <span>02</span>
                                Укажите способ и место доставки
                            </div>
                            <div class="checkout-steps-body">
                                <div class="checkout-select simple-block">
                                    <div class="checkout-select-input">
                                        <img src="../images/icons/ukr.png" alt="delivery image"
                                             class="checkout-select-input__logo">
                                        <div class="checkout-select-input__title">
                                            “Укрпошта”
                                        </div>
                                        <div class="checkout-select-input__description">
                                            Доставка по всему миру
                                        </div>
                                    </div>
                                    <div class="checkout-select-body">
                                        <div class="checkout-select-body-item">
                                            <div class="checkout-select-body__title">
                                                Выберите способ доставки:
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-department-1" name="customRadio"
                                                           class="custom-control-input"
                                                           checked>
                                                    <label class="custom-control-label" for="delivery-department-1">
                                                        <div class="custom-control-label-input"></div>
                                                        Доставка в отделение “Новой почты”
                                                    </label>
                                                </div>
                                                <div class="custom-selected-wrapper">
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-city-1">
                                                                Укажите город доставки
                                                            </label>
                                                            <input type="text" id="delivery-city-1" class="form-control"
                                                                   placeholder="Населеный пункт">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-stock-1">
                                                                Номер отделения и адрес
                                                            </label>
                                                            <input type="text" id="delivery-stock-1"
                                                                   class="form-control"
                                                                   placeholder="Отделение почты">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-department-1" name="customRadio"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="delivery-department-1">
                                                        <div class="custom-control-label-input"></div>
                                                        Доставка по указанному адресу курьером
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-select simple-block">
                                    <div class="checkout-select-input">
                                        <img src="../images/icons/nova.png" alt="delivery image"
                                             class="checkout-select-input__logo">
                                        <div class="checkout-select-input__title">
                                            “Новая почта”
                                        </div>
                                        <div class="checkout-select-input__description">
                                            Доставка по всему миру
                                        </div>
                                    </div>
                                    <div class="checkout-select-body">
                                        <div class="checkout-select-body-item">
                                            <div class="checkout-select-body__title">
                                                Выберите способ доставки:
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-department-2" name="customRadio2"
                                                           class="custom-control-input"
                                                           checked>
                                                    <label class="custom-control-label" for="delivery-department-2">
                                                        <span class="custom-control-label-input"></span>
                                                        Доставка в отделение “Новой почты”
                                                    </label>
                                                </div>
                                                <div class="custom-selected-wrapper">
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-city-2">
                                                                Укажите город доставки
                                                            </label>
                                                            <input type="text" id="delivery-city-2" class="form-control"
                                                                   placeholder="Населеный пункт">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-stock-2">
                                                                Номер отделения и адрес
                                                            </label>
                                                            <input type="text" id="delivery-stock-2"
                                                                   class="form-control"
                                                                   placeholder="Отделение почты">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-address-2" name="customRadio2"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="delivery-address-2">
                                                        <div class="custom-control-label-input"></div>
                                                        Доставка по указанному адресу курьером
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-select simple-block">
                                    <div class="checkout-select-input">
                                        <img src="../images/icons/intime.png" alt="delivery image"
                                             class="checkout-select-input__logo">
                                        <div class="checkout-select-input__title">
                                            “Интайм”
                                        </div>
                                    </div>
                                    <div class="checkout-select-body">
                                        <div class="checkout-select-body-item">
                                            <div class="checkout-select-body__title">
                                                Выберите способ доставки:
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-department-3" name="customRadio3"
                                                           class="custom-control-input"
                                                           checked>
                                                    <label class="custom-control-label" for="delivery-department-3">
                                                        <div class="custom-control-label-input"></div>
                                                        Доставка в отделение “Новой почты”
                                                    </label>
                                                </div>
                                                <div class="custom-selected-wrapper">
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-city-3">
                                                                Укажите город доставки
                                                            </label>
                                                            <input type="text" id="delivery-city-3" class="form-control"
                                                                   placeholder="Населеный пункт">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-selected">
                                                        <div class="form-group custom-selected-input">
                                                            <label for="delivery-stock-3">
                                                                Номер отделения и адрес
                                                            </label>
                                                            <input type="text" id="delivery-stock-3"
                                                                   class="form-control"
                                                                   placeholder="Отделение почты">
                                                            <svg width="7" height="11">
                                                                <use xlink:href="#shape-icon"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-selected-body">
                                                            <ul class="custom-selected-list">
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                                <li>Отделение №50 ул.Фортечна 5</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="delivery-address-3" name="customRadio3"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="delivery-address-3">
                                                        <div class="custom-control-label-input"></div>
                                                        Доставка по указанному адресу курьером
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-steps-item">
                            <div class="checkout-steps__title">
                                <span>03</span>
                                Оплата
                            </div>
                            <div class="checkout-steps-body">
                                <div class="checkout-select simple-block">
                                    <div class="checkout-select-input">
                                        <img src="../images/icons/visa.png" alt="payment image"
                                             class="checkout-select-input__logo">
                                        <div class="checkout-select-input__title">
                                            “VISA”
                                        </div>
                                        <div class="checkout-select-input__description">
                                            Оплата дебетовой картой
                                        </div>
                                    </div>
                                    <div class="checkout-select-body">
                                        <div class="checkout-select-body-item">
                                            <div class="d-flex flex-column flex-sm-row">
                                                <div class="form-group form-group--name-card">
                                                    <label for="visa-name-card">
                                                        Номер карты
                                                    </label>
                                                    <input type="text" id="visa-name-card"
                                                           class="form-control form-control--name-card"
                                                           placeholder="---- ---- ---- ----">
                                                </div>
                                                <div class="form-group form-group--term-card">
                                                    <label for="visa-term-card">
                                                        Срок действия
                                                    </label>
                                                    <input type="text" id="visa-term-card"
                                                           class="form-control form-control--term-card"
                                                           placeholder="-- / --">
                                                </div>
                                                <div class="form-group form-group--cvv-card">
                                                    <label for="visa-cvv-card">
                                                        CVV
                                                    </label>
                                                    <input type="password" id="visa-cvv-card"
                                                           class="form-control form-control--cvv-card"
                                                           placeholder="•••">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-select simple-block">
                                    <div class="checkout-select-input">
                                        <img src="../images/icons/paypal.png" alt="payment image"
                                             class="checkout-select-input__logo">
                                        <div class="checkout-select-input__title">
                                            “PayPal”
                                        </div>
                                        <div class="checkout-select-input__description">
                                            Платёжная система
                                        </div>
                                    </div>
                                    <div class="checkout-select-body">
                                        <div class="checkout-select-body-item">
                                            <div class="d-flex flex-column flex-sm-row">
                                                <div class="form-group form-group--name-card">
                                                    <label for="paypal-name-card">
                                                        Номер карты
                                                    </label>
                                                    <input type="text" id="paypal-name-card"
                                                           class="form-control form-control--name-card"
                                                           placeholder="---- ---- ---- ----">
                                                </div>
                                                <div class="form-group form-group--term-card">
                                                    <label for="paypal-term-card">
                                                        Срок действия
                                                    </label>
                                                    <input type="text" id="paypal-term-card"
                                                           class="form-control form-control--term-card"
                                                           placeholder="-- / --">
                                                </div>
                                                <div class="form-group form-group--cvv-card">
                                                    <label for="paypal-cvv-card">
                                                        CVV
                                                    </label>
                                                    <input type="password" id="paypal-cvv-card"
                                                           class="form-control form-control--cvv-card"
                                                           placeholder="•••">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">
                            Оформить заказ
                        </button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-4 order-1 order-lg-2">
                    <div class="checkout-card-wrapper">
                        <div class="checkout-card-header">
                            <div class="checkout-card-header__item">
                                Информация о Вашем заказе
                            </div>
                            <div class="checkout-card-header__item">
                                Заказ №<span>123456789</span>
                            </div>
                        </div>
                        <div class="checkout-card simple-block">
                            <div class="checkout-card-item checkout-basket">
                                <div class="checkout-basket-description">
                                    <div class="checkout-basket__title">
                                        Название товара
                                    </div>
                                    <div class="checkout-basket__text">
                                        Краткое описание товаров / артикул
                                    </div>
                                </div>
                                <div class="checkout-basket-quantity">
                                    <span>1</span>шт
                                </div>
                            </div>
                            <div class="checkout-card-item checkout-basket">
                                <div class="checkout-basket-description">
                                    <div class="checkout-basket__title">
                                        Название товара
                                    </div>
                                    <div class="checkout-basket__text">
                                        Краткое описание товаров / артикул
                                    </div>
                                </div>
                                <div class="checkout-basket-quantity">
                                    <span>2</span>шт
                                </div>
                            </div>
                            <div class="checkout-card-item checkout-basket-total">
                                <div class="checkout-basket-total__text">
                                    Сумма:
                                </div>
                                <div class="checkout-basket-total__value">
                                    2675 <span>грн</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-card simple-block">
                            <div class="checkout-card-item">
                                <ul class="checkout-data-list">
                                    <li>
                                        <svg width="15" height="15">
                                            <use xlink:href="#user-icon"></use>
                                        </svg>
                                        Александр Петренко
                                    </li>
                                    <li>
                                        <svg width="15" height="10">
                                            <use xlink:href="#email-icon"></use>
                                        </svg>
                                        petrenko@gmail.com
                                    </li>
                                    <li>
                                        <svg width="14" height="14">
                                            <use xlink:href="#phone-icon"></use>
                                        </svg>
                                        +380 99 123 456 78
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout-card-item">
                                <div class="checkout-data-delivery">
                                    <img src="../images/icons/nova.png" alt="nova pochta"
                                         class="checkout-data-delivery__image">
                                    <div class="checkout-data-delivery-description">
                                        <div class="checkout-data-delivery__title">
                                            Доставка в отделение
                                        </div>
                                        <div class="checkout-data-delivery__value">
                                            Запорожье, ул. Фортечна 5. Отделение №50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-card-item">
                                <div class="checkout-data-payment">
                                    <div class="checkout-data-payment__title">
                                        Оплата дебетовой картой
                                    </div>
                                    <img src="../images/icons/visa.png" alt="visa" class="checkout-data-payment__image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer-light.php');