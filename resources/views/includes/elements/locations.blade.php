<section class="locations-section" id="locations">
    <div class="container-fluid">
        <div class="row">
            <h2 class="locations-heading">ДЕ МИ ЗНАХОДИМОСЬ</h2>
            
            <div class="locations-container">
                <!-- Львів -->
                <div class="location-item">
                    <h3 class="location-title">Львів</h3>
                    <div class="address-list">
                        <a href="#" class="address-link">вул. Городоцька, 174. ТЦ "ТопМарт"</a>
                        <a href="#" class="address-link">вул. Липинського, 28. ЖК "Парус"</a>
                        <a href="#" class="address-link">вул. Червоної Калини, 48. ТЦ "Інтерсіті", 2 поверх</a>
                    </div>
                </div>

                <!-- Київ -->
                <div class="location-item">
                    <h3 class="location-title">Київ</h3>
                    <div class="address-list">
                        <a href="#" class="address-link">вул. Саксаганського, 27Б (вхід через арку)</a>
                        <a href="#" class="address-link">вул. Ю. Здановської, 48 (фасад п'ятиповерхового будинку)</a>
                    </div>
                </div>

                <!-- Партнерські приймальні пункти -->
                <div class="location-item">
                    <h3 class="location-title">Партнерські приймальні пункти</h3>
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
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let accordionInitialized = false;
    
    // Проверяем, нужно ли включить аккордеон (только на мобильных)
    function initAccordion() {
        if (window.innerWidth <= 767) {
            if (!accordionInitialized) {
                const locationItems = document.querySelectorAll('.location-item');
                
                locationItems.forEach((item, index) => {
                    const title = item.querySelector('.location-title');
                    const content = item.querySelector('.address-list, .working-hours');
                    
                    // Создаем кнопку для мобильной версии
                    const toggleBtn = document.createElement('button');
                    toggleBtn.className = 'mobile-toggle';
                    toggleBtn.innerHTML = `
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    `;
                    
                    // Добавляем кнопку рядом с заголовком
                    title.appendChild(toggleBtn);
                    
                    // Скрываем контент на мобильных (кроме первого)
                    if (index === 0) {
                        item.classList.add('active');
                    } else {
                        content.style.display = 'none';
                    }
                    
                    // Обработчик клика
                    toggleBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        const isActive = item.classList.contains('active');
                        
                        // Закрываем все остальные
                        locationItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                                const otherContent = otherItem.querySelector('.address-list, .working-hours');
                                otherContent.style.display = 'none';
                            }
                        });
                        
                        // Переключаем текущий
                        if (isActive) {
                            item.classList.remove('active');
                            content.style.display = 'none';
                        } else {
                            item.classList.add('active');
                            content.style.display = 'block';
                        }
                    });
                });
                
                accordionInitialized = true;
            }
        } else {
            // На десктопе сбрасываем все стили и убираем кнопки
            if (accordionInitialized) {
                const locationItems = document.querySelectorAll('.location-item');
                
                locationItems.forEach(item => {
                    // Убираем класс active
                    item.classList.remove('active');
                    
                    // Показываем весь контент
                    const content = item.querySelector('.address-list, .working-hours');
                    content.style.display = '';
                    
                    // Убираем мобильные кнопки
                    const toggleBtn = item.querySelector('.mobile-toggle');
                    if (toggleBtn) {
                        toggleBtn.remove();
                    }
                });
                
                accordionInitialized = false;
            }
        }
    }
    
    // Инициализируем при загрузке
    initAccordion();
    
    // Переинициализируем при изменении размера окна
    window.addEventListener('resize', initAccordion);
});
</script>
