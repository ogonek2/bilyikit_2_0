<section class="locations-section" id="locations">
    <div class="container-fluid">
        <div class="row">
            <h2 class="locations-heading">ДЕ МИ ЗНАХОДИМОСЬ</h2>
            
            <div class="locations-container">
                <!-- Львів -->
                <div class="location-item">
                    <div class="location-question">
                        <h3 class="location-text noselect">Львів</h3>
                        <button class="location-toggle" aria-label="Розгорнути/згорнути">
                            <svg width="56" height="57" viewBox="0 0 56 57" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="1.35156" width="55" height="55" rx="27.5"
                                    stroke="#090909" />
                                <path d="M21 28.8516H35" stroke="#090909" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M28 21.8516L35 28.8516L28 35.8516" stroke="#090909" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="location-answer noselect">
                        <div class="address-list">
                            <a href="#" class="address-link">вул. Городоцька, 174. ТЦ "ТопМарт"</a>
                            <a href="#" class="address-link">вул. Липинського, 28. ЖК "Парус"</a>
                            <a href="#" class="address-link">вул. Червоної Калини, 48. ТЦ "Інтерсіті", 2 поверх</a>
                        </div>
                    </div>
                </div>

                <!-- Київ -->
                <div class="location-item">
                    <div class="location-question">
                        <h3 class="location-text noselect">Київ</h3>
                        <button class="location-toggle" aria-label="Розгорнути/згорнути">
                            <svg width="56" height="57" viewBox="0 0 56 57" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="1.35156" width="55" height="55" rx="27.5"
                                    stroke="#090909" />
                                <path d="M21 28.8516H35" stroke="#090909" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M28 21.8516L35 28.8516L28 35.8516" stroke="#090909" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="location-answer noselect">
                        <div class="address-list">
                            <a href="#" class="address-link">вул. Саксаганського, 27Б (вхід через арку)</a>
                            <a href="#" class="address-link">вул. Ю. Здановської, 48 (фасад п'ятиповерхового будинку)</a>
                        </div>
                    </div>
                </div>

                <!-- Партнерські приймальні пункти -->
                <div class="location-item">
                    <div class="location-question">
                        <h3 class="location-text noselect">Партнерські приймальні пункти</h3>
                        <button class="location-toggle" aria-label="Розгорнути/згорнути">
                            <svg width="56" height="57" viewBox="0 0 56 57" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="1.35156" width="55" height="55" rx="27.5"
                                    stroke="#090909" />
                                <path d="M21 28.8516H35" stroke="#090909" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M28 21.8516L35 28.8516L28 35.8516" stroke="#090909" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="location-answer noselect">
                        <div class="address-list">
                            <a href="#" class="address-link">м. Львів, вул. Дж. Вашингтона, 8. (ТЦ "МЕТРО")</a>
                            <a href="#" class="address-link">м. Львів, вул. Б. Лепкого, 10. ("Pralnia")</a>
                            <a href="#" class="address-link">м. Львів, вул. Кульпарківська, 93 ("Пральня Happy Laundry")</a>
                            <a href="#" class="address-link">м. Львів, вул. Малоголосківська, 44 ("Пральня Happy Laundry")</a>
                            <a href="#" class="address-link">м. Львів, вул. Івана Пулюя, 40 ("Пральня Happy Laundry")</a>
                            <a href="#" class="address-link">м. Київ, вул. Шолуденка, 30 ("Пральня Happy Laundry")</a>
                        </div>
                        
                        <div class="working-hours">
                            <p>Понеділок - п'ятниця: 10:00 - 19:00 • Обідня перерва: 13:00 - 14:00 • Субота - неділя: вихідні дні</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing locations accordion...');
    const locationItems = document.querySelectorAll('.location-item');
    console.log('Found location items:', locationItems.length);
    
    // Функция для инициализации аккордеона
    function initAccordion() {
        console.log('Initializing accordion, window width:', window.innerWidth);
        
        if (window.innerWidth <= 767) {
            console.log('Mobile mode: enabling accordion');
            // На мобильных включаем аккордеон
            locationItems.forEach((item, index) => {
                const question = item.querySelector('.location-question');
                const answer = item.querySelector('.location-answer');
                const toggle = item.querySelector('.location-toggle svg');
                
                console.log(`Setting up item ${index}:`, { question, answer, toggle });
                
                // Убираем старые обработчики
                if (item._clickHandler) {
                    question.removeEventListener('click', item._clickHandler);
                }
                
                // Создаем обработчик для этого элемента
                item._clickHandler = function() {
                    console.log(`Item ${index} clicked, current state:`, item.classList.contains('active'));
                    const isActive = item.classList.contains('active');
                    
                    // Закрываем все остальные элементы
                    locationItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            const otherAnswer = otherItem.querySelector('.location-answer');
                            const otherToggle = otherItem.querySelector('.location-toggle svg');
                            otherAnswer.style.maxHeight = '0';
                            otherToggle.classList.remove('opened_svg');
                        }
                    });
                    
                    // Переключаем текущий элемент
                    if (isActive) {
                        item.classList.remove('active');
                        answer.style.maxHeight = '0';
                        toggle.classList.remove('opened_svg');
                        console.log(`Item ${index} closed`);
                    } else {
                        item.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        toggle.classList.add('opened_svg');
                        console.log(`Item ${index} opened, height:`, answer.scrollHeight);
                    }
                };
                
                // Добавляем обработчик
                question.addEventListener('click', item._clickHandler);
                console.log(`Click handler added to item ${index}`);
                
                // Открываем первый элемент по умолчанию
                if (index === 0) {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    toggle.classList.add('opened_svg');
                    console.log(`First item opened by default, height:`, answer.scrollHeight);
                } else {
                    item.classList.remove('active');
                    answer.style.maxHeight = '0';
                    toggle.classList.remove('opened_svg');
                }
            });
        } else {
            console.log('Desktop mode: disabling accordion');
            // На десктопе отключаем аккордеон
            locationItems.forEach(item => {
                const question = item.querySelector('.location-question');
                const answer = item.querySelector('.location-answer');
                const toggle = item.querySelector('.location-toggle svg');
                
                // Убираем обработчики
                if (item._clickHandler) {
                    question.removeEventListener('click', item._clickHandler);
                    delete item._clickHandler;
                }
                
                // Показываем все ответы
                item.classList.remove('active');
                answer.style.maxHeight = 'none';
                toggle.classList.remove('opened_svg');
            });
        }
    }
    
    // Инициализируем при загрузке
    initAccordion();
    
    // Переинициализируем при изменении размера окна
    window.addEventListener('resize', function() {
        console.log('Window resized, reinitializing accordion...');
        initAccordion();
    });
});
</script>
