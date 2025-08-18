<section class="footwear-section" id="footwear">
    <div class="container-fluid">
        <h2 class="footwear-heading">ВІДНОВЛЕННЯ ВЗУТТЯ</h2>

        <!-- Desktop/Grid and Mobile Slider -->
        <div class="row">
            <div class="footwear-swiper swiper">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide">
                        <div class="footwear-card">
                            <div class="footwear-card__sub">
                                синтетика<br>тканина<br>сітка
                            </div>
                            <div class="footwear-card__img"><img src="{{ asset('assets/svg/footwear/Group.svg') }}"
                                    alt="" loading="lazy"></div>
                            <div class="footwear-card__title">СТАНДАРТ</div>
                            <ul class="footwear-card__list">
                                <li><span class="price-badge">600 UAH</span>
                                    <div class="txt">Хімчистка</div>
                                </li>
                                <li><span class="price-badge">1200 UAH</span>
                                    <div class="txt">Хімчистка + фарбування</div>
                                </li>
                                <li><span class="price-badge">1400 UAH</span>
                                    <div class="txt">Хімчистка + фарбування випраного взуття</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="swiper-slide">
                        <div class="footwear-card">
                            <div class="footwear-card__sub">
                                гладка шкіра<br>замша<br>нубук
                            </div>
                            <div class="footwear-card__img"><img src="{{ asset('assets/svg/footwear/Group-1.svg') }}"
                                    alt="" loading="lazy"></div>
                            <div class="footwear-card__title">ПРЕМІУМ</div>
                            <ul class="footwear-card__list">
                                <li><span class="price-badge">700 UAH</span>
                                    <div class="txt">Хімчистка</div>
                                </li>
                                <li><span class="price-badge">1400 UAH</span>
                                    <div class="txt">Хімчистка + фарбування</div>
                                </li>
                                <li><span class="price-badge">1600 UAH</span>
                                    <div class="txt">Хімчистка + фарбування + реставрація шкіри</div>
                                </li>
                            </ul>
                            <div class="footwear-card__note">*2+ кольори або шкіра/замша +100 UAH до вартості</div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="swiper-slide">
                        <div class="footwear-card">
                            <div class="footwear-card__sub">
                                V.I.P. клас<br>лімітовані<br>колекції
                            </div>
                            <div class="footwear-card__img"><img src="{{ asset('assets/svg/footwear/Group-2.svg') }}"
                                    alt="" loading="lazy"></div>
                            <div class="footwear-card__title">VIP</div>
                            <ul class="footwear-card__list">
                                <li><span class="price-badge">800 UAH</span>
                                    <div class="txt">Хімчистка</div>
                                </li>
                                <li><span class="price-badge">1500 UAH</span>
                                    <div class="txt">Хімчистка + фарбування</div>
                                </li>
                                <li><span class="price-badge">1600 UAH</span>
                                    <div class="txt">Хімчистка + фарбування + реставрація шкіри</div>
                                </li>
                            </ul>
                            <div class="footwear-card__note">*2+ кольори або шкіра/замша +100 UAH до вартості</div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="swiper-slide">
                        <div class="footwear-card">
                            <div class="footwear-card__sub">
                                черевики<br>чоботи<br>UGG
                            </div>
                            <div class="footwear-card__img">
                                <img src="{{ asset('assets/svg/footwear/Group-3.svg') }}" alt="" loading="lazy">
                            </div>
                            <div class="footwear-card__title">ЗИМОВИЙ</div>
                            <ul class="footwear-card__list">
                                <li><span class="price-badge">900 UAH</span>
                                    <div class="txt">Хімчистка</div>
                                </li>
                                <li><span class="price-badge">1600 UAH</span>
                                    <div class="txt">Хімчистка + фарбування</div>
                                </li>
                                <li><span class="price-badge">2000 UAH</span>
                                    <div class="txt">Хімчистка + фарбування випраного взуття</div>
                                </li>
                                <li><span class="price-badge">1700 UAH</span>
                                    <div class="txt">Хімчистка + фарбування ботфортів</div>
                                </li>
                            </ul>
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
</section>

<!-- Swiper CDN (only once per page; safe to include here) -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    (function() {
        const el = document.querySelector('.footwear-swiper');
        if (!el) return;
        new Swiper(el, {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true
            },
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev')
            },
            breakpoints: {
                576: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4,
                    allowTouchMove: false
                }
            }
        });
    })();
</script>
