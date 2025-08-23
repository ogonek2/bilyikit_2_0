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
                <img src="{{ asset('assets/svg/asset_020.svg') }}" alt="delivery">
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
                                <li>На місці ви отримаєте консультацію щодо відновлення речей та квитанцію з переліком відповідних послуг.</li>
                                <li>Оплачуйте готівкою або картою.</li>
                                <li>Очікуйте сповіщення viber/ telegram про готовність замовлення.</li>
                                <li>Забирайте відновленні речі не пізніше за 90 днів після отримання сповіщення про готовність.</li>
                            </ol>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <div class="accordion-header noselect">Кур'єр
                            <svg width="12" height="12"><path d="M0 0 L12 6 L0 12 Z" fill="#fff"/></svg>
                        </div>
                        <div class="accordion-body">
                            <ol>
                                <li>Оформіть заявку на виклик кур'єра.</li>
                                <li>По приїзду, кур'єр самостійно упакує речі та оформить квитанцію.</li>
                                <li>Після огляду речей з вами зв'яжеться наш менеджер, щоб затвердити відповідні послуги та надішле рахунок для оплати.</li>
                                <li>Коли замовлення буде виконано, наш менеджер завчасно попередить вас про повернення відновлених речей. ВІДПРАВИТИ НОВОЮ ПОШТОЮ - отримайте інформацію для відправлення Новою поштою.</li>
                            </ol>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane">
                        <div class="accordion-header noselect">Нова пошта
                            <svg width="12" height="12"><path d="M0 0 L12 6 L0 12 Z" fill="#fff"/></svg>
                        </div>
                        <div class="accordion-body">
                            <ol>
                                <li>Відправте речі до нас.</li>
                                <li>Після огляду речей з вами зв'яжеться наш менеджер, щоб затвердити відповідні послуги та надішле рахунок для оплати.</li>
                                <li>Коли замовлення буде виконано, наш менеджер зв'яжеться з вами для уточнень по відправленню.</li>
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
