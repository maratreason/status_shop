@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
				<li class="breadcrumb-item"><a href="about.html">О нас</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-11">
		<div class="container">
			<h1 class="inner">О нас</h1>
			<div class="text">
				<p><span class="fw_5">Салон Status</span> — модное пространство с высоким уровнем сервиса и
					приятной атмосферой. Сюда приходят, чтобы меняться и совершенствоваться. Здесь царит магия
					красоты, а высококлассные специалисты создают прекрасные образы.</p>
				<p>Команду стилистов салона составляют профессиональные мастера с большим опытом, выпускники
					ведущих парикмахерских школ мира, которые продолжают постоянно повышать свой уровень.</p>
				<p>Помимо стрижек, укладок, причёсок и окрашиваний в самых сложных техниках, к вашим услугам
					дневной, вечерний макияж, коррекция формы и цвета бровей, долговременная укладка бровей,
					наращивание ресниц и перманентный макияж.</p>
				<p>В нашем салоне представлены эксклюзивные бренды индустрии красоты: Hipertin (Испания), Time
					To Grow, натуральная индийская хна.</p>
				<p>Мастера ногтевого сервиса выполняют маникюр и педикюр любой сложности, работая на самых
					лучших продуктах сегмента.</p>
				<p>Также в салоне можно получить несколько услуг одновременно, для экономии Вашего времени.</p>
				<p>Приходите в Status, и наша команда создаст ваш совершенный образ.</p>
				<p>Высокий уровень сервиса, приятная атмосфера, широкий, постоянно обновляющийся ассортимент
					услуг отвечают высоким требованием самых взыскательных клиентов.</p>
			</div>
			<div class="f_12 fw_6 text-center my-5">Галерея</div>
			<div class="position-relative">
				<div class="swiper-5">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="img/img1.jpg" alt="" class="img-example">
						</div>
						<div class="swiper-slide">
							<img src="img/img2.jpg" alt="" class="img-example">
						</div>
						<div class="swiper-slide">
							<img src="img/img3.jpg" alt="" class="img-example">
						</div>
						<div class="swiper-slide">
							<img src="img/img4.jpg" alt="" class="img-example">
						</div>
						<div class="swiper-slide">
							<img src="img/img1.jpg" alt="" class="img-example">
						</div>
					</div>
					<div class="swiper-button-prev">
						<svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.1192 58.3865L2 30.6932L21.1192 3" />
						</svg>
					</div>
					<div class="swiper-button-next">
						<svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.23486 58.3865L22.354 30.6932L3.23486 3" />
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
