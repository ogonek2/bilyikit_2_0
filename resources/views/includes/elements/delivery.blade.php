<section class="delivery-section">
    <div class="container-fluid">
        <div class="row">
            <div class="delivery-text">
                <h2 class="delivery-title">Який спосіб оберете ви?</h2>
                <p class="delivery-description">
                    Ми пропонуємо зручні варіанти доставки речей на відновлення —
                    оберіть той, що підходить саме вам. Ви знайдете інструкції для кожного способу:
                    самостійна доставка, виклик кур'єра або відправка Новою поштою.
                </p>
            </div>
            <div class="delivery-image">
                <img src="" alt="delivery">
            </div>

            <div class="delivery-tabs">
                <ul class="tab-nav">
                    <li class="active noselect" data-tab="tab1">Самостійно</li>
                    <li data-tab="tab2" class="noselect">Кур'єр</li>
                    <li data-tab="tab3" class="noselect">Нова пошта</li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
                        <div class="accordion-header noselect">Самостійно
                            <svg width="12" height="12"><path d="M0 0 L12 6 L0 12 Z" fill="#fff"/></svg>
                        </div>
                        <div class="accordion-body">
                            <ol>
                                <li>Доставте речі у наше відділення.</li>
                                <li>Отримайте консультацію і квитанцію.</li>
                                <li>Оплатіть готівкою або карткою.</li>
                                <li>Очікуйте сповіщення про готовність.</li>
                                <li>Заберіть речі не пізніше 90 днів.</li>
                            </ol>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <div class="accordion-header noselect">Кур'єр
                            <svg width="12" height="12"><path d="M0 0 L12 6 L0 12 Z" fill="#fff"/></svg>
                        </div>
                        <div class="accordion-body">
                            <ol>
                                <li>Замовте виклик кур'єра.</li>
                                <li>Передайте речі на перевірку.</li>
                                <li>Отримайте квитанцію онлайн.</li>
                                <li>Сплатіть зручним способом.</li>
                                <li>Отримайте сповіщення про готовність.</li>
                            </ol>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane">
                        <div class="accordion-header noselect">Нова пошта
                            <svg width="12" height="12"><path d="M0 0 L12 6 L0 12 Z" fill="#fff"/></svg>
                        </div>
                        <div class="accordion-body">
                            <ol>
                                <li>Відправте речі Новою поштою.</li>
                                <li>Отримайте квитанцію онлайн.</li>
                                <li>Оплатіть карткою або переказом.</li>
                                <li>Очікуйте сповіщення про готовність.</li>
                                <li>Отримайте відновлені речі.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.querySelectorAll('.tab-nav li').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.tab-nav li').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
            this.classList.add('active');
            document.getElementById(this.dataset.tab).classList.add('active');
        });
    });

    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', function() {
            this.parentElement.classList.toggle('open');
            this.classList.toggle('open');
        });
    });
</script>
@endpush
