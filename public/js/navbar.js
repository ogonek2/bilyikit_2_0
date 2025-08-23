// JavaScript для работы бургер-меню
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const mobileNavbar = document.querySelector('#mobileNavbar');
    
    if (navbarToggler && mobileNavbar) {
        navbarToggler.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Переключаем состояние
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Показываем/скрываем мобильное меню
            if (isExpanded) {
                mobileNavbar.classList.remove('show');
                document.body.style.overflow = '';
            } else {
                mobileNavbar.classList.add('show');
                document.body.style.overflow = 'hidden';
            }
        });
        
        // Закрываем меню при клике на ссылку
        const mobileNavLinks = mobileNavbar.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNavbar.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
        
        // Закрываем меню при клике вне его
        document.addEventListener('click', function(event) {
            if (!navbarToggler.contains(event.target) && !mobileNavbar.contains(event.target)) {
                mobileNavbar.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
        
        // Закрываем меню при нажатии Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                mobileNavbar.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
    }
    
    // Добавляем класс scrolled при скролле
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
