<section class="footwear-rest" id="footwear-rest">
    <div class="container-fluid">
        <div class="row">
            <h2 class="footwear-rest__heading">Яким чином відбувається відновлення взуття?</h2>

            <div class="footwear-rest__controls">
                <button type="button" class="fr-btn" data-target="#fr-chem">
                    <span class="fr-btn__text">Хімчистка взуття</span>
                    <span class="fr-btn__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 5L19 12L12 19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
                <button type="button" class="fr-btn" data-target="#fr-farb">
                    <span class="fr-btn__text">Фарбування взуття</span>
                    <span class="fr-btn__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 5L19 12L12 19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
                <button type="button" class="fr-btn" data-target="#fr-rest">
                    <span class="fr-btn__text">Реставрація взуття</span>
                    <span class="fr-btn__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 5L19 12L12 19" stroke="#4251DE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </div>

            <div class="footwear-rest__panels">
                <div class="fr-panel" id="fr-chem" aria-hidden="true">
                    <div class="fr-panel__inner">
                        <button type="button" class="fr-panel__close" aria-label="Закрити"></button>
                        <h3 class="fr-panel__title">Хімчистка взуття</h3>
                        <p class="fr-panel__lead">Кожна пара взуття, яка потрапляє до нас на хімчистку проходить
                            наступні етапи:</p>
                        <ul class="fr-panel__list">
                            <li>чистка взуття ззовні та всередині</li>
                            <li>чистка устілок</li>
                            <li>прання шнурівок</li>
                            <li>антибактеріальна профілактика</li>
                        </ul>
                    </div>
                </div>

                <div class="fr-panel" id="fr-farb" aria-hidden="true">
                    <div class="fr-panel__inner">
                        <button type="button" class="fr-panel__close" aria-label="Закрити"></button>
                        <h3 class="fr-panel__title">Фарбування взуття</h3>
                        <p class="fr-panel__lead">Взуття, яке потрапляє до нас на фарбування проходить наступні етапи:
                        </p>
                        <ul class="fr-panel__list">
                            <li>хімчистка взуття (повний цикл)</li>
                            <li>підготовка поверхні взуття до фарбування</li>
                            <li>підбір фарби</li>
                            <li>фарбування</li>
                            <li>оброблення взуття відповідними</li>
                            <li>речовинами для закріплення результату</li>
                        </ul>
                    </div>
                </div>

                <div class="fr-panel" id="fr-rest" aria-hidden="true">
                    <div class="fr-panel__inner">
                        <button type="button" class="fr-panel__close" aria-label="Закрити"></button>
                        <h3 class="fr-panel__title">Реставрація взуття</h3>
                        <p class="fr-panel__lead">Шкіряне взуття, яке потрапляє до нас на фарбування та реставрацію
                            проходить наступні етапи:</p>
                        <ul class="fr-panel__list">
                            <li>хімчистка взуття (повний цикл)</li>
                            <li>підготовка поверхні взуття до фарбування</li>
                            <li>реставрація подряпин та рубців на шкірі</li>
                            <li>підбір фарби</li>
                            <li>фарбування</li>
                            <li>оброблення взуття відповідними речовинами для закріплення результату</li>
                        </ul>
                    </div>
                </div>
            </div>

            <img src="{{ asset('assets/svg/asset_05.svg') }}" alt="" loading="lazy" class="footwear-rest__illustration">
        </div>
    </div>
</section>

<script>
    (function() {
        const root = document.querySelector('.footwear-rest');
        if (!root) return;
        const btns = root.querySelectorAll('.fr-btn');
        const panels = root.querySelectorAll('.fr-panel');

        function openPanel(id) {
            const target = root.querySelector(id);
            if (!target) return;
            target.classList.add('is-open');
            target.setAttribute('aria-hidden', 'false');
            // scroll into view on small screens
            if (window.innerWidth < 992) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        function closePanel(panel) {
            panel.classList.remove('is-open');
            panel.setAttribute('aria-hidden', 'true');
        }

        btns.forEach(b => {
            b.addEventListener('click', function() {
                const id = this.getAttribute('data-target');
                const target = root.querySelector(id);
                if (!target) return;
                // toggle behaviour (allow multiple open like on mock)
                target.classList.contains('is-open') ? closePanel(target) : openPanel(id);
            });
        });

        root.addEventListener('click', function(e) {
            const closeBtn = e.target.closest('.fr-panel__close');
            if (closeBtn) {
                const panel = closeBtn.closest('.fr-panel');
                if (panel) closePanel(panel);
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') panels.forEach(closePanel);
        });
    })();
</script>
