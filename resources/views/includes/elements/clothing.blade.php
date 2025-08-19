<section class="clothing-section" id="clothing">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="clothing-content">
                    <h2 class="clothing-heading">ВІДНОВЛЕННЯ ШКІРЯНОГО ОДЯГУ</h2>
                    <p class="clothing-description">
                        У вартість комплексного відновлення входить чистка ззовні та всередині, реставрація подряпин/
                        рубців + захист від дощу/ снігу.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Desktop: Two cards side by side -->
                <div class="clothing-cards-desktop">
                    <div class="clothing-card">
                        <div class="clothing-card__title">Куртка</div>
                        <div class="clothing-card__material">Замша / Шкіра</div>
                        <ul class="clothing-card__list">
                            <li>
                                <span class="price-badge">900 UAH</span>
                                <div class="txt">Хімчистка</div>
                            </li>
                            <li>
                                <span class="price-badge">3000 UAH</span>
                                <div class="txt">Чистка + бронювання + гідроброня</div>
                            </li>
                        </ul>
                        <div class="clothing-card__note">Експрес за 1-2 дні + 50% вартості</div>
                    </div>
                    <div class="clothing-card">
                        <div class="clothing-card__title">Дублянка</div>
                        <div class="clothing-card__material">Замша / Шкіра</div>
                        <ul class="clothing-card__list">
                            <li>
                                <span class="price-badge">1000 UAH</span>
                                <div class="txt">Хімчистка</div>
                            </li>
                            <li>
                                <span class="price-badge">4000 UAH</span>
                                <div class="txt">Хімчистка + фарбування + реставрація шкіри</div>
                            </li>
                        </ul>
                        <div class="clothing-card__note">Експрес за 1-2 дні + 50% вартості</div>
                    </div>
                </div>

                <!-- Mobile: Swiper slider -->
                <div class="clothing-swiper swiper">
                    <div class="swiper-wrapper">
                        <!-- Card 1 - Куртка -->
                        <div class="swiper-slide">
                            <div class="clothing-card">
                                <div class="clothing-card__title">Куртка</div>
                                <div class="clothing-card__material">Замша / Шкіра</div>
                                <ul class="clothing-card__list">
                                    <li>
                                        <span class="price-badge">900 UAH</span>
                                        <div class="txt">Хімчистка</div>
                                    </li>
                                    <li>
                                        <span class="price-badge">3000 UAH</span>
                                        <div class="txt">Чистка + бронювання + гідроброня</div>
                                    </li>
                                </ul>
                                <div class="clothing-card__note">Експрес за 1-2 дні + 50% вартості</div>
                            </div>
                        </div>
                        <!-- Card 2 - Дублянка -->
                        <div class="swiper-slide">
                            <div class="clothing-card">
                                <div class="clothing-card__title">Дублянка</div>
                                <div class="clothing-card__material">Замша / Шкіра</div>
                                <ul class="clothing-card__list">
                                    <li>
                                        <span class="price-badge">1000 UAH</span>
                                        <div class="txt">Хімчистка</div>
                                    </li>
                                    <li>
                                        <span class="price-badge">4000 UAH</span>
                                        <div class="txt">Хімчистка + фарбування + реставрація шкіри</div>
                                    </li>
                                </ul>
                                <div class="clothing-card__note">Експрес за 1-2 дні + 50% вартості</div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation + Pagination (shown on mobile) -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper CDN (only once per page; safe to include here) -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    (function() {
        const el = document.querySelector('.clothing-swiper');
        if (!el) return;

        new Swiper(el, {
            loop: false,
            slidesPerView: 1, // стабильная ширина слайда = ширина контейнера
            spaceBetween: 16,
            speed: 400,
            // уменьшаем шанс «петли» от наблюдателей размеров
            observer: false,
            resizeObserver: false,
            updateOnWindowResize: true,
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true
            },
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev')
            },
            breakpoints: {
                1200: {
                    allowTouchMove: false
                }
            }
        });
    })();
</script>
