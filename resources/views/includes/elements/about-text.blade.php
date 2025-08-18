<section class="about-section">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-lg-7 col-12">
                <div class="about-content">
                    <div class="block">
                        <h2 class="about-heading">Білий Кіт: експерти з відновлення взуття, сумок та шкіряного одягу</h2>
                    </div>
                    <div class="block b-p">
                        <div class="about-divider"></div>
                        <div class="group">
                            <p class="about-description">
                                Забезпечуємо всесезонний комплексний догляд за взуттям будь-якого типу та розміру. Також
                                ми
                                відновлюємо сумки та шкіряний одяг. Ви можете доставити взуття самостійно, викликати
                                курʼєра
                                або відправити Новою Поштою.
                            </p>
                            <a href="#" class="about-cta js-open-video" data-video-id="dQw4w9WgXcQ">
                                <span class="play-button" aria-hidden="true"></span>
                                <span class="about-cta-text">Дивитись відео</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="about-media">
                    <img src="{{ asset('assets/svg/asset_01.svg') }}" alt=""
                        class="about-illustration about-illustration-left" />
                    <img src="{{ asset('assets/svg/asset_02.svg') }}" alt=""
                        class="about-illustration about-illustration-right" />
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="video-modal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="video-modal__backdrop js-close-video" tabindex="-1"></div>
        <div class="video-modal__dialog" role="document">
            <button type="button" class="video-modal__close js-close-video" aria-label="Закрити"></button>
            <div class="video-modal__body">
                <iframe class="video-modal__iframe"
                    src="https://www.youtube.com/embed/Oz4EptTTRVY?si=Hg6TsR9vkX0NCpMQ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const openers = document.querySelectorAll('.js-open-video');
        const modal = document.querySelector('.video-modal');
        if (!modal) return;
        const iframe = modal.querySelector('.video-modal__iframe');
        const backdrop = modal.querySelectorAll('.js-close-video');
        let lastFocus = null;

        function openModal(videoId) {
            lastFocus = document.activeElement;
            const src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
            iframe.setAttribute('src', src);
            modal.classList.add('open');
            modal.setAttribute('aria-hidden', 'false');
        }

        function closeModal() {
            modal.classList.remove('open');
            modal.setAttribute('aria-hidden', 'true');
            iframe.setAttribute('src', '');
            if (lastFocus) {
                try {
                    lastFocus.focus();
                } catch (e) {}
            }
        }
        openers.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const id = this.getAttribute('data-video-id') || '';
                if (id) openModal(id);
            });
        });
        backdrop.forEach(el => el.addEventListener('click', closeModal));
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    })();
</script>
