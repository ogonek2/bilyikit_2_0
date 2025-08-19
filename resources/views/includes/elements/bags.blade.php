<section class="bags-section" id="bags">
	<div class="container-fluid">
		<div class="row">
			<h2 class="bags-heading">ВІДНОВЛЕННЯ СУМОК</h2>

			<div class="bags-swiper swiper">
				<div class="swiper-wrapper">
					<!-- Card 1 -->
					<div class="swiper-slide">
						<div class="bags-card">
							<div class="bags-card__img"><img src="{{ asset('assets/svg/bags/Group.svg') }}" alt="" loading="lazy"></div>
							<div class="bags-card__title">Сумка S</div>
							<div class="bags-card__subtitle">Розмір виробу <= A5</div>
							<ul class="bags-card__list">
								<li><span class="price-badge">1000 UAH</span><div class="txt">Хімчистка</div></li>
								<li><span class="price-badge">2000 UAH</span><div class="txt">Хімчистка + фарбування + реставрація шкіри</div></li>
							</ul>
						</div>
					</div>
					<!-- Card 2 -->
					<div class="swiper-slide">
						<div class="bags-card">
							<div class="bags-card__img"><img src="{{ asset('assets/svg/bags/Group2.svg') }}" alt="" loading="lazy"></div>
							<div class="bags-card__title">Сумка M</div>
							<div class="bags-card__subtitle">Розмір виробу > A5 і < A4</div>
							<ul class="bags-card__list">
								<li><span class="price-badge">1100 UAH</span><div class="txt">Хімчистка</div></li>
								<li><span class="price-badge">3000 UAH</span><div class="txt">Хімчистка + фарбування + реставрація шкіри</div></li>
							</ul>
						</div>
					</div>
					<!-- Card 3 -->
					<div class="swiper-slide">
						<div class="bags-card">
							<div class="bags-card__img"><img src="{{ asset('assets/svg/bags/Group3.svg') }}" alt="" loading="lazy"></div>
							<div class="bags-card__title">Сумка L</div>
							<div class="bags-card__subtitle">Розмір виробу >A4 і < 1.5 складеного листка A4</div>
							<ul class="bags-card__list">
								<li><span class="price-badge">1200 UAH</span><div class="txt">Хімчистка</div></li>
								<li><span class="price-badge">4000 UAH</span><div class="txt">Хімчистка + фарбування + реставрація шкіри</div></li>
							</ul>
						</div>
					</div>
					<!-- Card 4 -->
					<div class="swiper-slide">
						<div class="bags-card">
							<div class="bags-card__img"><img src="{{ asset('assets/svg/bags/Group4.svg') }}" alt="" loading="lazy"></div>
							<div class="bags-card__title">Сумка XL</div>
							<div class="bags-card__subtitle">Розмір виробу >1.5 складеного листка A4 і менше A3</div>
							<ul class="bags-card__list">
								<li><span class="price-badge">1300 UAH</span><div class="txt">Хімчистка</div></li>
								<li><span class="price-badge">4500 UAH</span><div class="txt">Хімчистка + фарбування + реставрація шкіри</div></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>

<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
(function(){
	const el = document.querySelector('.bags-swiper');
	if(!el) return;
	new Swiper(el, {
		loop: false,
		slidesPerView: 1,
		spaceBetween: 16,
		pagination: { el: el.querySelector('.swiper-pagination'), clickable: true },
		navigation: { nextEl: el.querySelector('.swiper-button-next'), prevEl: el.querySelector('.swiper-button-prev') },
		breakpoints: {
			576: { slidesPerView: 1 },
			768: { slidesPerView: 2 },
			992: { slidesPerView: 3 },
			1200: { slidesPerView: 4, allowTouchMove: false }
		}
	});
})();
</script>
