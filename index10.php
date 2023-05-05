<? include('header.php'); ?>
    <div id="transition-header"></div>
    <div class="catalog-cart">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bx-breadcrumb breadcrumbs-dark" itemprop="http://schema.org/breadcrumb" itemscope=""
                         itemtype="http://schema.org/BreadcrumbList">
                        <div class="bx-breadcrumb-item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope=""
                             itemtype="http://schema.org/ListItem">
                            <a class="bx-breadcrumb-item-link" href="/" title="Главная" itemprop="item">
                                <span class="bx-breadcrumb-item-text" itemprop="name">Главная</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </div>
                        <span class="separator">/</span>
                        <div class="bx-breadcrumb-item" id="bx_breadcrumb_1">
                            <span class="bx-breadcrumb-item-text">Корзина</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="catalog-cart-main">
                        <a href="#" data-toggle="modal" data-target="#cartAdd">
                            Модальное окно "Товар добавлен в корзину"
                        </a>
                        <div class="modal fade cart-add-modal" id="cartAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="img/blue-cross-icon.svg" alt="cross">
                                    </button>
                                    <div class="cart-add-modal-top">
                                        <h3>Товар добавлен в корзину</h3>
                                        <a href="#" class="cart-add-modal-back">Вернуться к покупкам</a>
                                        <a href="#" class="btn btn-blue">Перейти в корзину</a>
                                    </div>
                                    <div class="cart-add-modal-items">
                                        <div class="cart-add-modal-item">
                                            <div class="cart-add-modal-item-img"><img src="img/catalog-item-1-1.jpg" alt=""></div>
                                            <div class="cart-add-modal-item-name">
                                                <p>Antminer S19 XP</p>
                                            </div>
                                            <div class="cart-add-modal-item-count">
                                                <div class="number number-counter" data-step="1" data-min="1" data-max="1000">
                                                    <span class="number-minus minus"></span>
                                                    <input class="number-text" type="text" name="count" value="1">
                                                    <span class="number-plus plus"></span>
                                                </div>
                                            </div>
                                            <div class="cart-add-modal-item-price">
                                                <p>3 200 ₽</p>
                                            </div>
                                            <div class="catalog-cart-item-usl">
                                                <p>Дополнительные услуги</p>
                                                <ul>
                                                    <li>
                                                        <label class="catalog-category-filter-check">
                                                            <input type="checkbox" name="Услуга №1" value="Хостинг в дата-центре">
                                                            <span>Хостинг в дата-центре</span>
                                                        </label>
                                                        <span>- Расширенная гарантия</span>
                                                        <span>- Система контроля и учета майнинг оборудования</span>
                                                        <span>- Личный аккаунт менеджер</span>
                                                    </li>
                                                    <li>
                                                        <label class="catalog-category-filter-check">
                                                            <input type="checkbox" name="Услуга №2" value="Бесплатное обслуживание">
                                                            <span>Бесплатное обслуживание</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-add-modal-other">
                                        <p>Также вы смотрели</p>
                                        <div id="carouselModalRecc" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="catalog-wrap">
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="catalog-wrap">
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-item-wrap catalog-item-wrap-small">
                                                            <div class="catalog-item-wrap-img">
                                                                <img src="img/catalog-item-1-1.jpg" alt="">
                                                            </div>
                                                            <div class="catalog-item-wrap-info">
                                                                <a class="name" href="/">Antminer S19 XP</a>
                                                                <div class="info-wrap">
                                                                    <div class="info-element">
                                                                        SHA-256 | 141 TH/s | 3200W
                                                                    </div>
                                                                </div>
                                                                <div class="price-wrap">
                                                                    <div class="sale-price">81 000 ₽</div>
                                                                    <div class="price">90 000 ₽</div>
                                                                    <div class="sale-per">-10%</div>
                                                                </div>
                                                                <div class="bottom-btn-wrap">
                                                                    <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                                    <a class="more-link" href="/">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-navigation">
                                                <a class="carousel-control-prev" href="#carouselModalRecc" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselModalRecc" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-cart-top">
                            <h1>Корзина</h1>
                            <a href="#" class="catalog-cart-remove">
                                Очистить корзину
                            </a>
                        </div>
                        <div class="catalog-cart-items">
                            <p class="catalog-cart-items-h" style="display: none;">Ваш заказ</p>
                            <div class="catalog-cart-items-top">
                                <p>Товар</p>
                                <p>Цена</p>
                                <p>Кол-во</p>
                                <p>Сумма</p>
                            </div>
                            <div class="catalog-cart-item">
                                <div class="catalog-cart-item-img"><img src="img/catalog-item-1-1.jpg" alt=""></div>
                                <div class="catalog-cart-item-name">
                                    <p>Antminer S19 XP</p>
                                </div>
                                <div class="catalog-cart-item-price">
                                    <p>3 200 ₽</p>
                                </div>
                                <div class="catalog-cart-item-count">
                                    <div class="number number-counter" data-step="1" data-min="1" data-max="1000">
                                        <span class="number-minus minus"></span>
                                        <input class="number-text" type="text" name="count" value="1">
                                        <span class="number-plus plus"></span>
                                    </div>
                                </div>
                                <div class="catalog-cart-item-finalprice">
                                    <p>3 200 ₽</p>
                                </div>
                                <div class="catalog-cart-item-icons">
                                    <a href="#" class="like-list-link"></a>
                                    <a href="#" class="cart-item-delete"></a>
                                </div>
                                <div class="catalog-cart-item-usl">
                                    <p>Дополнительные услуги</p>
                                    <ul>
                                        <li>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Услуга №1" value="Хостинг в дата-центре">
                                                <span>Хостинг в дата-центре</span>
                                            </label>
                                            <span>- Расширенная гарантия</span>
                                            <span>- Система контроля и учета майнинг оборудования</span>
                                            <span>- Личный аккаунт менеджер</span>
                                        </li>
                                        <li>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Услуга №2" value="Бесплатное обслуживание">
                                                <span>Бесплатное обслуживание</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog-cart-item">
                                <div class="catalog-cart-item-img"><img src="img/catalog-item-1-1.jpg" alt=""></div>
                                <div class="catalog-cart-item-name">
                                    <p>Antminer S19 XP</p>
                                </div>
                                <div class="catalog-cart-item-price">
                                    <p>3 200 ₽</p>
                                </div>
                                <div class="catalog-cart-item-count">
                                    <div class="number number-counter" data-step="1" data-min="1" data-max="1000">
                                        <span class="number-minus minus"></span>
                                        <input class="number-text" type="text" name="count" value="1">
                                        <span class="number-plus plus"></span>
                                    </div>
                                </div>
                                <div class="catalog-cart-item-finalprice">
                                    <p>3 200 ₽</p>
                                </div>
                                <div class="catalog-cart-item-icons">
                                    <a href="#" class="like-list-link"></a>
                                    <a href="#" class="cart-item-delete"></a>
                                </div>
                                <div class="catalog-cart-item-usl">
                                    <p>Дополнительные услуги</p>
                                    <ul>
                                        <li>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Услуга №1" value="Хостинг в дата-центре">
                                                <span>Хостинг в дата-центре</span>
                                            </label>
                                            <span>- Расширенная гарантия</span>
                                            <span>- Система контроля и учета майнинг оборудования</span>
                                            <span>- Личный аккаунт менеджер</span>
                                        </li>
                                        <li>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Услуга №2" value="Бесплатное обслуживание">
                                                <span>Бесплатное обслуживание</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog-cart-bottom">
                                <p>
                                    Итого:
                                    <span>6 400 ₽ (цена с НДС)</span>
                                </p>
                                <a href="#" class="btn btn-blue">Оформить заказ</a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-card-recc">
                        <h2>Рекомендуемые товары</h2>
                        <div id="carouselRecc" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="catalog-wrap">
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="rec">Рекомендуем</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link like-active"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-1.jpg">
                                                        <img class="image" src="/img/catalog-item-1-1.jpg">
                                                        <img class="image" src="/img/catalog-item-1-2.jpg">
                                                        <img class="image" src="/img/catalog-item-1-3.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">В наличии Москва <span class="stars">5</span></div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <!--                             start info block desktop-->
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <!--                             END info block desktop-->

                                            <!-- start info block mobile-->
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3200W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>

                                            <div class="price-wrap">
                                                <div class="sale-price">81 000 ₽</div>
                                                <div class="price">90 000 ₽</div>
                                                <div class="sale-per d-none d-lg-flex">-10%</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="hit">Хит</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-2.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>

                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>



                                            <div class="price-wrap">
                                                <div class="sale-price">81 000 ₽</div>
                                                <div class="price">90 000 ₽</div>
                                                <div class="sale-per d-none d-lg-flex">-10%</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-3.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>
                                            <div class="price-wrap">
                                                <div class="sale-price">345 000 ₽</div>

                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="rec">Рекомендуем</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-4.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19PRO</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>
                                            <div class="price-wrap">
                                                <div class="sale-price">120 000 ₽</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="catalog-wrap">
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="rec">Рекомендуем</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link like-active"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-1.jpg">
                                                        <img class="image" src="/img/catalog-item-1-1.jpg">
                                                        <img class="image" src="/img/catalog-item-1-2.jpg">
                                                        <img class="image" src="/img/catalog-item-1-3.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">В наличии Москва <span class="stars">5</span></div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <!--                             start info block desktop-->
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <!--                             END info block desktop-->

                                            <!-- start info block mobile-->
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3200W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>

                                            <div class="price-wrap">
                                                <div class="sale-price">81 000 ₽</div>
                                                <div class="price">90 000 ₽</div>
                                                <div class="sale-per d-none d-lg-flex">-10%</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="hit">Хит</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-2.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>

                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>



                                            <div class="price-wrap">
                                                <div class="sale-price">81 000 ₽</div>
                                                <div class="price">90 000 ₽</div>
                                                <div class="sale-per d-none d-lg-flex">-10%</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-3.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19 XP</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>
                                            <div class="price-wrap">
                                                <div class="sale-price">345 000 ₽</div>

                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                        <div class="catalog-item-wrap">
                                            <div class="teg-wrap">
                                                <div class="rec">Рекомендуем</div>
                                                <div class="new">Новинка</div>
                                            </div>
                                            <a href="#" class="like-list-link"></a>
                                            <a href="/">
                                                <div class="slide-prod-wrap">
                                                    <div class="slide-prod-wrap-logo"><img src="img/bitmain.svg" alt=""></div>
                                                    <div class="images">
                                                        <img class="image" src="/img/catalog-item-4.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="nal">
                                                В наличии Москва <span class="stars">5</span>
                                            </div>
                                            <a class="name" href="/">Antminer S19PRO</a>
                                            <div class="info-wrap d-none d-lg-block">
                                                <div class="info-element">
                                                    Алгоритм: <b>SHA-256</b>
                                                </div>
                                                <div class="info-element">
                                                    Хэшрейт: <b>141 TH/s</b>
                                                </div>
                                                <div class="info-element">
                                                    Потребление: <b>3010W</b>
                                                </div>
                                                <div class="info-element">
                                                    Монета: <b>Bitcoin</b>
                                                </div>
                                            </div>
                                            <div class="info-wrap d-block d-lg-none">
                                                <div class="info-element">
                                                    SHA-256 | 141 TH/s | 3010W
                                                </div>
                                                <div class="info-element">
                                                    Монета: BTC
                                                </div>
                                            </div>
                                            <div class="price-wrap">
                                                <div class="sale-price">120 000 ₽</div>
                                            </div>

                                            <div class="bottom-btn-wrap">
                                                <a class="btn add-to-card btn-blue" href="/">В корзину</a>
                                                <a class="more-link" href="/">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselRecc" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselRecc" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include('footer.php'); ?>