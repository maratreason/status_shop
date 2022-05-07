@extends('layouts.main')

@section('content')
<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
				<li class="breadcrumb-item"><a href="offers.html">Акции</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-4">
		<div class="container">
			<h1 class="inner">Акции</h1>
			<div class="row row-cols-2 row-cols-lg-3 g-2 g-sm-4">
				<div>
					<a href="offer-page.html" class="offer type-1">
						<img src="{{asset('img/serv2.jpg')}}" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">30%</span> скидка
							</div>
							<div class="desc">действует в будние дни с 10:00 до 12:00</div>
						</div>
					</a>
				</div>
				<div>
					<a href="offer-page.html" class="offer type-2">
						<img src="img/serv1.jpg" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">15%</span> скидка
							</div>
							<div class="desc">на стрижку горячими ножницами</div>
						</div>
					</a>
				</div>
				<div>
					<a href="offer-page.html" class="offer type-3">
						<img src="img/serv7.jpg" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">10%</span> скидка
							</div>
							<div class="desc">На услуги вазажиста</div>
						</div>
					</a>
				</div>
				<div>
					<a href="offer-page.html" class="offer type-1">
						<img src="img/serv2.jpg" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">30%</span> скидка
							</div>
							<div class="desc">действует в будние дни с 10:00 до 12:00</div>
						</div>
					</a>
				</div>
				<div>
					<a href="offer-page.html" class="offer type-2">
						<img src="img/serv1.jpg" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">15%</span> скидка
							</div>
							<div class="desc">на стрижку горячими ножницами</div>
						</div>
					</a>
				</div>
				<div>
					<a href="offer-page.html" class="offer type-3">
						<img src="img/serv7.jpg" alt="">
						<div class="text">
							<div class="title mb-2">
								<span class="f_12">10%</span> скидка
							</div>
							<div class="desc">На услуги вазажиста</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
