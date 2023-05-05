<? include('header.php'); ?>
    <div id="transition-header"></div>
    <div class="catalog-category">
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
                        <div class="bx-breadcrumb-item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope=""
                             itemtype="http://schema.org/ListItem">
                            <a class="bx-breadcrumb-item-link" href="/" title="Каталог" itemprop="item">
                                <span class="bx-breadcrumb-item-text" itemprop="name">Каталог</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </div>
                        <span class="separator">/</span>
                        <div class="bx-breadcrumb-item" id="bx_breadcrumb_1">
                            <span class="bx-breadcrumb-item-text">Асики</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="catalog-category-block">
                        <div class="catalog-category-sidebar">
                            <div class="catalog-category-cat">
                                <p class="catalog-category-sidebar-h">Категории</p>
                                <ul class="catalog-category-sidebar-wrp">
                                    <li><a href="#">Асики</a></li>
                                    <li><a href="#">Комплектующие</a></li>
                                </ul>
                            </div>
                            <div class="catalog-category-filter">
                                <p class="catalog-category-sidebar-h">Фильтр</p>
                                <div class="catalog-category-filter-wrp">
                                    <label class="catalog-category-filter-check">
                                        <input type="checkbox" name="В наличии" value="В наличии">
                                        <span>В наличии</span>
                                    </label>
                                    <div class="catalog-category-filter-item">
                                        <div class="catalog-category-filter-item-button close">Предзаказ</div>
                                        <div class="catalog-category-filter-item-main">
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Предзаказ" value="SHA-256">
                                                <span>SHA-256</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Предзаказ" value="Ethash">
                                                <span>Ethash</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="catalog-category-filter-item">
                                        <div class="catalog-category-filter-item-button close">Рассрочка</div>
                                        <div class="catalog-category-filter-item-main">
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Рассрочка" value="SHA-256">
                                                <span>SHA-256</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Рассрочка" value="Ethash">
                                                <span>Ethash</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="catalog-category-filter-item">
                                        <div class="catalog-category-filter-item-button">Прозводители</div>
                                        <div class="catalog-category-filter-item-main">
                                            <label class="catalog-category-filter-search">
                                                <input type="text" name="Производители" placeholder="Поиск..." class="search-input">
                                                <span class="search-btn"><img src="img/search-icon.svg" alt=""></span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Antminer">
                                                <span>Antminer</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Whatsminer">
                                                <span>Whatsminer</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Innosilicon">
                                                <span>Innosilicon</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Avalon">
                                                <span>Avalon</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Nvidia">
                                                <span>Nvidia</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Amd">
                                                <span>Amd</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Gigabyte">
                                                <span>Gigabyte</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Asus">
                                                <span>Asus</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Evga">
                                                <span>Evga</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Inno3d">
                                                <span>Inno3d</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Прозводители" value="Pny">
                                                <span>Pny</span>
                                            </label>
                                            <a href="#" class="catalog-category-filter-loadmore">Показать еще 10</a>
                                        </div>
                                    </div>
                                    <div class="catalog-category-filter-item">
                                        <div class="catalog-category-filter-item-button">Хешрейт</div>
                                        <div class="catalog-category-filter-item-main">
                                            <label class="catalog-category-filter-search">
                                                <input type="text" name="Хешрейт" placeholder="Поиск..." class="search-input">
                                                <span class="search-btn"><img src="img/search-icon.svg" alt=""></span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="100Mh">
                                                <span>100Mh</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="100Th">
                                                <span>100Th</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="102Th">
                                                <span>102Th</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="104Th">
                                                <span>104Th</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="110Th">
                                                <span>110Th</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="125Mh">
                                                <span>125Mh</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Хешрейт" value="14.5Th">
                                                <span>14.5Th</span>
                                            </label>
                                            <a href="#" class="catalog-category-filter-loadmore">Показать еще 10</a>
                                        </div>
                                    </div>
                                    <div class="catalog-category-filter-item">
                                        <div class="catalog-category-filter-item-button">Алгоритм</div>
                                        <div class="catalog-category-filter-item-main">
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Алгоритм" value="SHA-256">
                                                <span>SHA-256</span>
                                            </label>
                                            <label class="catalog-category-filter-check">
                                                <input type="checkbox" name="Алгоритм" value="Ethash">
                                                <span>Ethash</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="catalog-category-filter-item price-range">
                                        <div class="catalog-category-filter-item-button">Цена (от/до)</div>
                                        <div class="catalog-category-filter-item-main">
                                            <div class="catalog-filter-item-range" id="slider-price">
                                                <div class="slider-range-inputs">
                                                    <input type="text" class="min" value="0" placeholder="От" readonly>
                                                    <span></span>
                                                    <input type="text" class="max" value="400000" placeholder="До" readonly>
                                                </div>
                                                <div class="slider-range-values">
                                                    <span>0</span>
                                                    <span>1 200 000 ₽</span>
                                                </div>
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-category-items">
                            <h1>Асики</h1>
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
                    <ul class="catalog-pagination">
                        <li><a href="#" class="prev"><img src="img/home-slider-left-b.svg" alt=""></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="current">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" class="next"><img src="img/home-slider-right-b.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="catalog-category-text">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="catalog-block-text">
                        <div class="catalog-block-text-wrp">
                            <h2>Как купить майнинг-оборудование </h2>
                            <p>Сформировать заказ можно непосредственно на сайте нашего интернет-магазина, добавив в корзину понравившиеся позиции. Если возникли сложности с выбором того или иного оборудования, обратитесь к нашим менеджерам за консультацией онлайн. Мы предлагаем собрать майнинг-фермы с различными техническими параметрами. На все оборудование распространяется гарантия 1 год.</p>
                            <p>Магазин майнинг-оборудования предлагает услуги по строительству частных майнинг-центров и возможность размещения в нашем ЦОД по выгодной цене, расположенном на Калининской АЭС. Наша компания берет на себя обязательства по сохранности вашего оборудования и обеспечению его работоспособности в течение всего периода аренды. Своевременное технологическое обслуживание и поточный ремонт снизят риски сбоев по техническим причинам.</p>
                            <h2>Комплектующие для майнинг-ферм</h2>
                            <p>Мы поставляем только новое сертифицированное оборудование и комплектующие известных торговых марок. Служба поддержки круглосуточно консультирует по всем вопросам до и после покупки.</p>
                            <p>К преимущественным отличиям наших услуг относят:</p>
                            <ul>
                                <li>широкий ассортимент товаров для добычи криптовалюты в наличии и под заказ</li>
                                <li>большой выбор способов оплаты</li>
                                <li>доставка покупок любого объема из Китая за 21 день</li>
                                <li>собственный центр по ремонту оборудования, гарантия на все виды работ</li>
                                <li>строительство майнинг-центров «под ключ», невысокие цены</li>
                            </ul>
                            <p>
                                На нашем сайте вы купите новые комплектующие с нужными параметрами через магазин оборудования для майнинга. Если у вас возникли технические сложности с подключением, мы возьмем в обслуживание оборудования, выделив стабильную линию интернета на высокотехнологичной площадке в Москве и по всей России.
                            </p>
                        </div>
                        <a href="javascript:void(0)" class="catalog-block-text-loadmore btn-blue">Показать еще</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include('footer.php'); ?>