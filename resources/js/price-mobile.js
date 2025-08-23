document.addEventListener('DOMContentLoaded', function() {
    const mobilePriceButton = document.getElementById('mobilePriceButton');
    const mobilePriceModal = document.getElementById('mobilePriceModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const modalClose = document.getElementById('modalClose');
    
    console.log('Mobile Price Button:', mobilePriceButton);
    console.log('Mobile Price Modal:', mobilePriceModal);
    
    if (mobilePriceButton && mobilePriceModal) {
        // Открытие модального окна при клике на кнопку
        mobilePriceButton.addEventListener('click', function() {
            mobilePriceModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Блокируем скролл страницы
        });
        
        // Закрытие модального окна при клике на крестик
        if (modalClose) {
            modalClose.addEventListener('click', closeModal);
        }
        
        // Закрытие модального окна при клике на overlay
        if (modalOverlay) {
            modalOverlay.addEventListener('click', closeModal);
        }
        
        // Закрытие модального окна при нажатии Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobilePriceModal.classList.contains('active')) {
                closeModal();
            }
        });
        
        function closeModal() {
            mobilePriceModal.classList.remove('active');
            document.body.style.overflow = ''; // Восстанавливаем скролл страницы
        }
    }
});
