<footer>
    <div class="container">
        <div class="footer-top-wrap">
            <div class="footer-item">
                <a class="logo-footer" href="/">
                    <img src="/img/logo.svg" alt="gis-mining.ru">
                </a>
                 <div class="col-12 col-lg-4 d-block d-lg-none copy-mobile">
                      <div class="copy">GIS MINING © <?= date('Y') ?></div>
                 </div>
                <div class="soc-top d-none d-lg-block">
                    <a class="f-icon f-icon-wats social-ya"
                       href="https://wa.me/79267720247?text=%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BE%D0%B1%D0%BE%D1%80%D1%83%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B4%D0%BB%D1%8F%20%D0%BC%D0%B0%D0%B9%D0%BD%D0%B8%D0%BD%D0%B3%D0%B0"></a>
                    <a class="f-icon f-icon-tg social-ya" href="https://t.me/GIS_Mining"></a>
                </div>
                <div class="soc-top d-none d-lg-block">
                    <a class="f-icon f-icon-vk social-ya" href="https://vk.com/gis_mining" target="_blank"></a>
                    <a class="f-icon f-icon-inst social-ya" href="https://instagram.com/gis_mining" target="_blank"></a>
                </div>
            </div>
            <div class="footer-item">
                <div class="title">О компании</div>
                <a class="footer-nav-link" href="/prodaja-mining/">Каталог</a>
                <a class="footer-nav-link" href="#">Инвестиции</a>
                <a class="footer-nav-link" href="#">Размещение</a>
                <a class="footer-nav-link" href="#">Диагностика и ремонт</a>
                <a class="footer-nav-link" href="#">Строительство</a>
                <a class="footer-nav-link" href="#">Техподдержка</a>
                <a class="footer-nav-link" href="#">Прямые поставки</a>
                <a class="footer-nav-link" href="#">МЦОД для майнинга</a>
            </div>
            <div class="footer-item">
                <div class="title">Информация</div>
                <a class="footer-nav-link" href="#">Информация</a>
                <a class="footer-nav-link" href="#">Рассрочка</a>
                <a class="footer-nav-link" href="#">Оплата и доставка</a>
                <a class="footer-nav-link" href="#">Гарантия</a>
                <a class="footer-nav-link" href="#">Сотрудничество</a>
                <a class="footer-nav-link" href="#">Блог</a>
                <a class="footer-nav-link" href="#">Контакты</a>
                 <div class="d-flex d-block d-lg-none">
                      <div class="soc-top">
                           <a class="f-icon f-icon-wats social-ya"
                              href="https://wa.me/79267720247?text=%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BE%D0%B1%D0%BE%D1%80%D1%83%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B4%D0%BB%D1%8F%20%D0%BC%D0%B0%D0%B9%D0%BD%D0%B8%D0%BD%D0%B3%D0%B0"></a>
                           <a class="f-icon f-icon-tg social-ya" href="https://t.me/GIS_Mining"></a>
                      </div>
                      <div class="soc-top">
                           <a class="f-icon f-icon-vk social-ya" href="https://vk.com/gis_mining" target="_blank"></a>
                           <a class="f-icon f-icon-inst social-ya" href="https://instagram.com/gis_mining" target="_blank"></a>
                      </div>
                 </div>

            </div>
            <div class="footer-item">
                <div class="title">Связь с нами</div>
                <div class="address">Россия, Москва, Варшавское шоссе, 1 стр. 1-2 W-Plaza</div>
                <a class="footer-phone" href="tel:+7(495)109-10-54">+7 (495) 109-10-54</a>
                <a class="footer-email" href="mailto:info@gis-corp.ru">info@gis-corp.ru</a>
            </div>
            <div class="footer-item">
                <!-- Cryptocurrency Price Widget -->
                <script>!function () {
                        var e = document.getElementsByTagName("script"), t = e[e.length - 1],
                            n = document.createElement("script");

                        function r() {
                            var e = crCryptocoinPriceWidget.init({
                                base: "USD,EUR,CNY,GBP",
                                items: "BTC,ETH,LTC,XMR,DASH",
                                backgroundColor: "FFFFFF",
                                streaming: "1",
                                rounded: "1",
                                boxShadow: "1",
                                border: "1"
                            });
                            t.parentNode.insertBefore(e, t)
                        }

                        n.src = "https://co-in.io/widget/pricelist.js?items=BTC%2CETH%2CLTC%2CXMR%2CDASH", n.async = !0, n.readyState ? n.onreadystatechange = function () {
                            "loaded" != n.readyState && "complete" != n.readyState || (n.onreadystatechange = null, r())
                        } : n.onload = function () {
                            r()
                        }, t.parentNode.insertBefore(n, null)
                    }();</script>
                <div class="w-text">by <a href="https://currencyrate.today/" rel="noopener" target="_blank">CurrencyRate.Today</a>
                </div>
                <!-- /Cryptocurrency Price Widget -->
            </div>
        </div>
        <div class="row g-0 bottom-row-footer">
            <div class="col-12 col-lg-4 d-none d-lg-block">
                <div class="copy">GIS MINING © <?= date('Y') ?></div>
            </div>
            <div class="col-12 col-lg-4">
                <a href="/">Политика конфиденциальности</a>
            </div>
            <div class="col-12 col-lg-4">
                Не является публичнай офертой
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="collbackModal_consultation" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <div class="one-click-form-wrap">
                <div class="form-wrap">
                    <div class="title">
                        Заявка на получение консультации
                    </div>
                    <div class="sub-title">
                        Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время
                    </div>
                    <form action="javascript:void(0);" method="post" onsubmit="ajax_f(10);" enctype="multipart/form-data"
                          id="form-10">
                        <label for="name-bottom">Ваше имя*</label>
                        <input required type="text" name="name" placeholder="Иван Иванов" id="name-10"
                               class="form-control">
                        <label for="tel-bottom">Ваш телефон*</label>
                        <input required type="tel" id="tel-10" name="tel" placeholder="+7 (999) 999-99-99"
                               class="form-control">
                        <button class="btn btn-blue">Отправить</button>
                        <div class="form-check-text">Нажимая на кнопку, Вы соглашаетесь с <a href="/">политикой конфиденциальности</a></div>
                    </form>
                </div>
                <div class="right">
                    <div class="text-modal">
                        <p>На нашем сайте вы можете заказать поставки майнинг-оборудования в Москву и по всей России с
                            полным комплектом сопроводительных документов по доступной цене</p>
                    </div>
                    <div class="face-block">
                        <div class="img">
                            <img src="/img/Nikita.png"
                                     alt="Никита Алексеевич">
                        </div>
                        <div class="info">
                            <span>С уважением,</span>
                            Руководитель отдела продаж компании GIS mining, Никита Алексеевич
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="collbackModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
             <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <div class="one-click-form-wrap">
                <div class="form-wrap">
                    <div class="title">
                        Заявка на обратный звонок
                    </div>
                    <div class="sub-title">
                        Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время
                    </div>
                    <form action="javascript:void(0);" method="post" onsubmit="ajax_f(11);" enctype="multipart/form-data"
                          id="form-11">
                        <label for="name-bottom">Ваше имя*</label>
                        <input required type="text" name="name" placeholder="Иван Иванов" id="name-11"
                               class="form-control">
                        <label for="tel-bottom">Ваш телефон*</label>
                        <input required type="tel" id="tel-11" name="tel" placeholder="+7 (999) 999-99-99"
                               class="form-control">
                        <button class="btn btn-blue">Отправить</button>
                        <div class="form-check-text">Нажимая на кнопку, Вы соглашаетесь с <a href="/">политикой конфиденциальности</a></div>
                    </form>
                </div>
                <div class="right">
                    <div class="text-modal">
                        <p>На нашем сайте вы можете заказать поставки майнинг-оборудования в Москву и по всей России с
                            полным комплектом сопроводительных документов по доступной цене</p>
                    </div>
                    <div class="face-block">
                        <div class="img">
                            <img src="/img/Nikita.png"
                                 alt="Никита Алексеевич">
                        </div>
                        <div class="info">
                            <span>С уважением,</span>
                            Руководитель отдела продаж компании GIS mining, Никита Алексеевич
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="spasibo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            <div class="title">Спасибо</div>
            <div class="sub-title">Ваша заявка отправлена! В ближайшее время с Вами свяжется наш менеджер</div>
            <div class="img"><img src="/img/Nikita.png" alt="Никита Алексеевич"></div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="/js/jquery-3.4.1.slim.min.js"></script>
<script src="/js/prodSlaide.js"></script>
<script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.5/jquery.touchSwipe.min.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
<script src="/js/slick/slick.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.ui.touch-punch.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
<script src="/js/index.js?ver=<?= date("hisY") ?>"></script>
</body>
</html>