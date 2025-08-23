document.addEventListener('DOMContentLoaded', function() {
    const mobilePriceButton = document.getElementById('mobilePriceButton');
    const mobilePriceList = document.getElementById('mobilePriceList');
    
    if (mobilePriceButton && mobilePriceList) {
        mobilePriceButton.addEventListener('click', function() {
            // Переключаем состояние кнопки
            this.classList.toggle('active');
            
            // Показываем/скрываем список цен
            if (this.classList.contains('active')) {
                mobilePriceList.style.display = 'block';
                // Плавная анимация появления
                mobilePriceList.style.opacity = '0';
                mobilePriceList.style.transform = 'translateY(-10px)';
                
                setTimeout(() => {
                    mobilePriceList.style.transition = 'all 0.3s ease';
                    mobilePriceList.style.opacity = '1';
                    mobilePriceList.style.transform = 'translateY(0)';
                }, 10);
            } else {
                // Плавная анимация скрытия
                mobilePriceList.style.transition = 'all 0.3s ease';
                mobilePriceList.style.opacity = '0';
                mobilePriceList.style.transform = 'translateY(-10px)';
                
                setTimeout(() => {
                    mobilePriceList.style.display = 'none';
                }, 300);
            }
        });
    }
});
