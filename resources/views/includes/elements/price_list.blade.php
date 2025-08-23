<section class="price-section" id="price">
    <div class="container-fluid">
        <div class="row">
            <h2 class="price-heading">Ремонт взуття та сумок</h2>
            <p class="price-description">
                У вартість комплексного відновлення входить чистка ззовні та всередині, реставрація подряпин/
                рубців + захист від дощу/ снігу.
            </p>
            
            <!-- Desktop Price List (скрыт на мобильных) -->
            <ol class="price-list desktop-price-list">
                <li>
                    <span class="title">Заміна набійок</span>
                    <span class="price">350-500 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Профілактика підошви</span>
                    <span class="price">400 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Монтаж протектора</span>
                    <span class="price">900-1000 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Закріплення каблуків</span>
                    <span class="price">400 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Перетягування каблуків</span>
                    <span class="price">900 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Монтаж задників</span>
                    <span class="price">500-900 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Прошиття підошви</span>
                    <span class="price">400 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Монтаж устілок</span>
                    <span class="price">350-900 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Заміна бігунка / люверса</span>
                    <span class="price">100-200 UAH/ 1 шт.</span>
                </li>
                <li>
                    <span class="title">Розтягування взуття</span>
                    <span class="price">300-400 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Вкорочення холяви + лямування</span>
                    <span class="price">від 800 UAH/ пара</span>
                </li>
                <li>
                    <span class="title">Підклеювання / підшиття</span>
                    <span class="price">50-150 UAH/ деф.</span>
                </li>
                <li>
                    <span class="title">Монтаж латки</span>
                    <span class="price">150-250 UAH/ 1 шт.</span>
                </li>
                <li>
                    <span class="title">Заміна липучок/ гумок/ петельок</span>
                    <span class="price">100-200 UAH/ 1 шт.</span>
                </li>
                <li>
                    <span class="title">Перетягування союзки/ підкладки</span>
                    <span class="price">900-1500 UAH/ пара</span>
                </li>
            </ol>

            <!-- Mobile Price Button (показывается только на мобильных) -->
            <div class="mobile-price-button-wrapper">
                <button class="mobile-price-button" id="mobilePriceButton">
                    <span class="button-text">Подивитись ціни</span>
                    <svg class="chevron-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6L8 10L12 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Mobile Price Modal (поп-ап окно) -->
<div class="mobile-price-modal" id="mobilePriceModal">
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal-content">
        <!-- Header с кнопкой закрытия -->
        <div class="modal-header">
            <h3 class="modal-title">Ремонт взуття та сумок</h3>
            <button class="modal-close" id="modalClose">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        
        <!-- Scrollable content -->
        <div class="modal-body">
            <div class="mobile-price-list">
                <div class="price-item">
                    <span class="item-number">01</span>
                    <div class="item-content">
                        <span class="item-title">Заміна набійок</span>
                        <span class="item-price">350-500 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">02</span>
                    <div class="item-content">
                        <span class="item-title">Профілактика підошви</span>
                        <span class="item-price">400 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">03</span>
                    <div class="item-content">
                        <span class="item-title">Монтаж протектора</span>
                        <span class="item-price">900-1000 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">04</span>
                    <div class="item-content">
                        <span class="item-title">Закріплення каблуків</span>
                        <span class="item-price">400 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">05</span>
                    <div class="item-content">
                        <span class="item-title">Перетягування каблуків</span>
                        <span class="item-price">900 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">06</span>
                    <div class="item-content">
                        <span class="item-title">Монтаж задників</span>
                        <span class="item-price">500-900 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">07</span>
                    <div class="item-content">
                        <span class="item-title">Прошиття підошви</span>
                        <span class="item-price">400 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">08</span>
                    <div class="item-content">
                        <span class="item-title">Монтаж устілок</span>
                        <span class="item-price">350-900 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">09</span>
                    <div class="item-content">
                        <span class="item-title">Заміна бігунка / люверса</span>
                        <span class="item-price">100-200 UAH/ 1 шт.</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">10</span>
                    <div class="item-content">
                        <span class="item-title">Розтягування взуття</span>
                        <span class="item-price">300-400 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">11</span>
                    <div class="item-content">
                        <span class="item-title">Вкорочення холяви + лямування</span>
                        <span class="item-price">від 800 UAH/ пара</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">12</span>
                    <div class="item-content">
                        <span class="item-title">Підклеювання / підшиття</span>
                        <span class="item-price">50-150 UAH/ деф.</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">13</span>
                    <div class="item-content">
                        <span class="item-title">Монтаж латки</span>
                        <span class="item-price">150-250 UAH/ 1 шт.</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">14</span>
                    <div class="item-content">
                        <span class="item-title">Заміна липучок/ гумок/ петельок</span>
                        <span class="item-price">100-200 UAH/ 1 шт.</span>
                    </div>
                </div>
                <div class="price-item">
                    <span class="item-number">15</span>
                    <div class="item-content">
                        <span class="item-title">Перетягування союзки/ підкладки</span>
                        <span class="item-price">900-1500 UAH/ пара</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
