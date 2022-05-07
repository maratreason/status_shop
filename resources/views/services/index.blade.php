@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
				<li class="breadcrumb-item"><a href="services.html">Услуги</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-2">
		<div class="container">
			<h1 class="inner">Услуги</h1>
			<div
				class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-center justify-content-md-start g-0 mb-4">
				<div>
					<a href="service-page-1.html" class="serv">
						<img src="{{asset('img/services-index/1.jpg')}}" alt="">
						<div>Стрижка</div>
					</a>
				</div>
				<div>
					<a href="service-page-2.html" class="serv">
						<img src="img/Окрашивание.jpg" alt="">
						<div>Окрашивание</div>
					</a>
				</div>
				<div>
					<a href="service-page-3.html" class="serv">
						<img src="img/Уход для волос.jpg" alt="">
						<div>Уход для волос</div>
					</a>
				</div>
				<div>
					<a href="service-page-4.html" class="serv">
						<img src="img/Эстетическая трихология.jpg" alt="">
						<div>Эстетическая трихология</div>
					</a>
				</div>
				<div>
					<a href="service-page-5.html" class="serv">
						<img src="img/Ламинирование ресниц.jpg" alt="">
						<div>Ламинирование ресниц</div>
					</a>
				</div>
				<div>
					<a href="service-page-6.html" class="serv">
						<img src="img/Оформление бровей.jpg" alt="">
						<div>Оформление бровей</div>
					</a>
				</div>
				<div>
					<a href="service-page-7.html" class="serv">
						<img src="img/Make Up.jpg" alt="">
						<div>Макияж</div>
					</a>
				</div>
				<div>
					<a href="service-page-8.html" class="serv">
						<img src="img/Маникюр.jpg" alt="">
						<div>Маникюр</div>
					</a>
				</div>
				<div>
					<a href="service-page-9.html" class="serv">
						<img src="img/Педикюр.jpg" alt="">
						<div>Педикюр</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
