<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Status @yield('title')</title>
	<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/common.css')}}" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (m, e, t, r, i, k, a) {
			m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
			m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(86173647, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/86173647" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body>
	<header>
		<div class="container py-md-3">
			<div class="row align-items-center justify-content-between">
				<div class="col-3 col-sm-2 d-block d-lg-none">
					<button type="button" class="burger" data-bs-toggle="offcanvas"
						data-bs-target="#burger-menu">
						<i class="fas fa-bars"></i>
					</button>
				</div>
				<div class="col-4 col-sm-3 col-md-2">
					<a href="{{route('orders.home')}}"><img src="{{asset('img/logo-white.svg')}}" alt="???????????? ??????????????" class="logo"></a>
				</div>
				<div class="d-none d-sm-block col-4 col-md-6 col-lg-8">
					<div class="text-end fw_3 mb-lg-2"><a href="tel:89510668777">8 951 066 8 777</a></div>
					<nav class="d-none d-lg-block main-menu">
						<ul>
							<li @if(Route::currentRouteNamed('services'))class="active"@endif><a href="{{route('services')}}">????????????</a></li>
							<li @if(Route::currentRouteNamed('offers'))class="active"@endif><a href="{{route('offers')}}">??????????</a></li>
							<li @if(Route::currentRouteNamed('catalog'))class="active"@endif><a href="{{route('catalog')}}">??????????????</a></li>
							<li @if(Route::currentRouteNamed('team'))class="active"@endif><a href="{{route('team')}}">??????????????</a></li>
							<li @if(Route::currentRouteNamed('about'))class="active"@endif><a href="{{route('about')}}">??????????</a></li>
							<li @if(Route::currentRouteNamed('contact'))class="active"@endif><a href="{{route('contact')}}">????????????????</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-4 col-sm-3 col-md-2 d-flex justify-content-center">
					<a type="button" class="btn-icon" href={{route('login')}} title="?????????????? ?? ???????????? ????????????????????????????">
						<svg width="40" height="38" viewBox="0 0 40 38" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.9998 9.35485C21.8332 9.35485 23.3332 10.7581 23.3332 12.4731C23.3332 14.1882 21.8332 15.5914 19.9998 15.5914C18.1665 15.5914 16.6665 14.1882 16.6665 12.4731C16.6665 10.7581 18.1665 9.35485 19.9998 9.35485ZM19.9998 23.3871C24.4998 23.3871 29.6665 25.3984 29.9998 26.5054V28.0645H9.99984V26.521C10.3332 25.3984 15.4998 23.3871 19.9998 23.3871ZM19.9998 6.23657C16.3165 6.23657 13.3332 9.02743 13.3332 12.4731C13.3332 15.9188 16.3165 18.7097 19.9998 18.7097C23.6832 18.7097 26.6665 15.9188 26.6665 12.4731C26.6665 9.02743 23.6832 6.23657 19.9998 6.23657ZM19.9998 20.2688C15.5498 20.2688 6.6665 22.3581 6.6665 26.5054V31.1828H33.3332V26.5054C33.3332 22.3581 24.4498 20.2688 19.9998 20.2688Z"/>
						</svg>
					</a>
					<a href="{{ route('basket') }}" class="btn-icon ms-2 ms-md-4" title="?????????????? ?? ??????????????">
						<svg width="40" height="38" viewBox="0 0 40 38" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.5771 20.2688C28.8271 20.2688 29.9271 19.6296 30.4938 18.6629L36.4605 8.54409C37.0771 7.51506 36.2771 6.23657 35.0105 6.23657H10.3438L8.77715 3.11829H3.32715V6.23657H6.66048L12.6605 18.0704L10.4105 21.8747C9.19381 23.964 10.7938 26.5054 13.3271 26.5054H33.3271V23.3871H13.3271L15.1605 20.2688H27.5771ZM11.9271 9.35484H32.1771L27.5771 17.1505H15.8771L11.9271 9.35484ZM13.3271 28.0645C11.4938 28.0645 10.0105 29.4677 10.0105 31.1828C10.0105 32.8979 11.4938 34.3011 13.3271 34.3011C15.1605 34.3011 16.6605 32.8979 16.6605 31.1828C16.6605 29.4677 15.1605 28.0645 13.3271 28.0645ZM29.9938 28.0645C28.1605 28.0645 26.6771 29.4677 26.6771 31.1828C26.6771 32.8979 28.1605 34.3011 29.9938 34.3011C31.8271 34.3011 33.3271 32.8979 33.3271 31.1828C33.3271 29.4677 31.8271 28.0645 29.9938 28.0645Z"/>
						</svg>
						<div class="count">@if(!empty(session('ordersCount'))){{session('ordersCount')}}@else 0 @endif</div>
					</a>
				</div>
			</div>
		</div>
	</header>

    @yield('content')

    <footer class="d-none d-md-block">
        <div class="container py-5">
            <div class="row row-cols-3 row-cols-lg-4 justify-content-between">
                <div>
                    <nav class="f-menu">
                        <ul>
                            <li><a href="service-page-1.html">??????????????</a></li>
                            <li><a href="service-page-2.html">??????????????????????</a></li>
                            <li><a href="service-page-3.html">???????? ?????? ??????????</a></li>
                            <li><a href="service-page-4.html">???????????????????????? ????????????????????</a></li>
                            <li><a href="service-page-5.html">?????????????????????????? ????????????</a></li>
                            <li><a href="service-page-6.html">???????????????????? ????????????</a></li>
                            <li><a href="service-page-7.html">????????????</a></li>
                            <li><a href="service-page-8.html">??????????????</a></li>
                            <li><a href="service-page-9.html">??????????????</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="text-center d-flex flex-column justify-content-between align-items-center">
                    <img src="img/logo-white.svg" alt="" class="w-50 mb-4">
                    <div>
                        <div class="f_08 mb-3">?????????????????????????????? ??????????:</div>
                        <div class="social mb-4">
                            <a href="https://instagram.com/salon_status_kzn" title="Instagram">
                                <svg viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.4531 2H7.44792C4.68506 2 2.44531 4.23858 2.44531 7V17C2.44531 19.7614 4.68506 22 7.44792 22H17.4531C20.216 22 22.4557 19.7614 22.4557 17V7C22.4557 4.23858 20.216 2 17.4531 2Z" />
                                    <path
                                        d="M16.4526 11.3698C16.5761 12.2021 16.4338 13.052 16.0461 13.7988C15.6584 14.5456 15.045 15.1512 14.2931 15.5295C13.5412 15.9077 12.6891 16.0394 11.858 15.9057C11.0269 15.7721 10.2591 15.3799 9.66389 14.785C9.06866 14.1901 8.67627 13.4227 8.54253 12.592C8.4088 11.7614 8.54053 10.9097 8.91899 10.1582C9.29744 9.40667 9.90336 8.79355 10.6505 8.40605C11.3977 8.01856 12.2481 7.8764 13.0808 7.99981C13.9302 8.1257 14.7165 8.52128 15.3237 9.12812C15.9309 9.73496 16.3266 10.5209 16.4526 11.3698Z" />
                                    <path d="M17.9536 6.5H17.9636" />
                                </svg>
                            </a>
                            <a class="d-none d-md-flex" href="https://wa.me/79510668777" title="Whatsapp">
                                <svg class="type-2" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9941 14.3072L17.9851 14.3822C15.7849 13.2862 15.5548 13.1402 15.2707 13.5662C15.0736 13.8612 14.4993 14.5302 14.3262 14.7282C14.1511 14.9232 13.977 14.9382 13.6798 14.8032C13.3797 14.6532 12.4162 14.3382 11.2756 13.3182C10.3871 12.5232 9.79082 11.5482 9.61473 11.2482C9.32158 10.7422 9.9349 10.6702 10.4932 9.61417C10.5932 9.40417 10.5422 9.23917 10.4682 9.09017C10.3931 8.94017 9.79583 7.47017 9.5457 6.88417C9.30557 6.30017 9.05844 6.37417 8.87335 6.37417C8.29705 6.32417 7.87583 6.33217 7.50464 6.71817C5.8898 8.49217 6.29701 10.3222 7.67873 12.2682C10.3941 15.8202 11.8409 16.4742 14.4863 17.3822C15.2006 17.6092 15.852 17.5772 16.3672 17.5032C16.9415 17.4122 18.1351 16.7822 18.3843 16.0772C18.6394 15.3722 18.6394 14.7872 18.5644 14.6522C18.4903 14.5172 18.2942 14.4422 17.9941 14.3072Z"
                                        fill="white" />
                                    <path d="M21.0087 3.44894C13.3157 -3.98406 0.584082 1.40694 0.57908 11.8929C0.57908 13.9889 1.12836 16.0329 2.17491 17.8379L0.478027 23.9999L6.81631 22.3479C14.7254 26.6179 24.4865 20.9479 24.4905 11.8989C24.4905 8.72295 23.2498 5.73394 20.9937 3.48794L21.0087 3.44894ZM22.4914 11.8659C22.4854 19.4989 14.1021 24.2659 7.47165 20.3699L7.11147 20.1559L3.35952 21.1309L4.36504 17.4859L4.12592 17.1109C-0.000220805 10.5459 4.74024 1.96594 12.5563 1.96594C15.2117 1.96594 17.704 3.00094 19.5809 4.87594C21.4569 6.73494 22.4914 9.22594 22.4914 11.8659Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a class="d-flex d-md-none" href="whatsapp://send?phone=79510668777"
                                title="Whatsapp">
                                <svg class="type-2" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9941 14.3072L17.9851 14.3822C15.7849 13.2862 15.5548 13.1402 15.2707 13.5662C15.0736 13.8612 14.4993 14.5302 14.3262 14.7282C14.1511 14.9232 13.977 14.9382 13.6798 14.8032C13.3797 14.6532 12.4162 14.3382 11.2756 13.3182C10.3871 12.5232 9.79082 11.5482 9.61473 11.2482C9.32158 10.7422 9.9349 10.6702 10.4932 9.61417C10.5932 9.40417 10.5422 9.23917 10.4682 9.09017C10.3931 8.94017 9.79583 7.47017 9.5457 6.88417C9.30557 6.30017 9.05844 6.37417 8.87335 6.37417C8.29705 6.32417 7.87583 6.33217 7.50464 6.71817C5.8898 8.49217 6.29701 10.3222 7.67873 12.2682C10.3941 15.8202 11.8409 16.4742 14.4863 17.3822C15.2006 17.6092 15.852 17.5772 16.3672 17.5032C16.9415 17.4122 18.1351 16.7822 18.3843 16.0772C18.6394 15.3722 18.6394 14.7872 18.5644 14.6522C18.4903 14.5172 18.2942 14.4422 17.9941 14.3072Z"
                                        fill="white" />
                                    <path d="M21.0087 3.44894C13.3157 -3.98406 0.584082 1.40694 0.57908 11.8929C0.57908 13.9889 1.12836 16.0329 2.17491 17.8379L0.478027 23.9999L6.81631 22.3479C14.7254 26.6179 24.4865 20.9479 24.4905 11.8989C24.4905 8.72295 23.2498 5.73394 20.9937 3.48794L21.0087 3.44894ZM22.4914 11.8659C22.4854 19.4989 14.1021 24.2659 7.47165 20.3699L7.11147 20.1559L3.35952 21.1309L4.36504 17.4859L4.12592 17.1109C-0.000220805 10.5459 4.74024 1.96594 12.5563 1.96594C15.2117 1.96594 17.704 3.00094 19.5809 4.87594C21.4569 6.73494 22.4914 9.22594 22.4914 11.8659Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="tel:89510668777" title="??????????????????">
                                <svg viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.5229 16.9201V19.9201C22.5241 20.1986 22.467 20.4743 22.3554 20.7294C22.2437 20.9846 22.08 21.2137 21.8747 21.402C21.6694 21.5902 21.427 21.7336 21.163 21.8228C20.899 21.912 20.6193 21.9452 20.3418 21.9201C17.2631 21.5857 14.3057 20.5342 11.7073 18.8501C9.28991 17.3148 7.24036 15.2663 5.70423 12.8501C4.01333 10.2413 2.96105 7.27109 2.63263 4.1801C2.60763 3.90356 2.64051 3.62486 2.72918 3.36172C2.81785 3.09859 2.96037 2.85679 3.14767 2.65172C3.33496 2.44665 3.56292 2.28281 3.81704 2.17062C4.07116 2.05843 4.34586 2.00036 4.62367 2.0001H7.62522C8.11078 1.99532 8.58151 2.16718 8.94967 2.48363C9.31783 2.80008 9.5583 3.23954 9.62626 3.7201C9.75295 4.68016 9.9879 5.62282 10.3266 6.5301C10.4612 6.88802 10.4904 7.27701 10.4106 7.65098C10.3308 8.02494 10.1454 8.36821 9.87639 8.6401L8.60573 9.9101C10.03 12.4136 12.104 14.4865 14.6088 15.9101L15.8795 14.6401C16.1515 14.3712 16.495 14.1859 16.8691 14.1062C17.2433 14.0264 17.6325 14.0556 17.9906 14.1901C18.8983 14.5286 19.8415 14.7635 20.8021 14.8901C21.2881 14.9586 21.7319 15.2033 22.0492 15.5776C22.3665 15.9519 22.5351 16.4297 22.5229 16.9201Z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.0962 6.42C22.9773 5.94541 22.7353 5.51057 22.3945 5.15941C22.0537 4.80824 21.6262 4.55318 21.1552 4.42C19.4343 4 12.5507 4 12.5507 4C12.5507 4 5.66714 4 3.94625 4.46C3.47525 4.59318 3.04776 4.84824 2.70695 5.19941C2.36615 5.55057 2.12409 5.98541 2.00524 6.46C1.6903 8.20556 1.53624 9.97631 1.54501 11.75C1.53378 13.537 1.68785 15.3213 2.00524 17.08C2.13627 17.5398 2.38375 17.9581 2.72376 18.2945C3.06377 18.6308 3.48483 18.8738 3.94625 19C5.66714 19.46 12.5507 19.46 12.5507 19.46C12.5507 19.46 19.4343 19.46 21.1552 19C21.6262 18.8668 22.0537 18.6118 22.3945 18.2606C22.7353 17.9094 22.9773 17.4746 23.0962 17C23.4087 15.2676 23.5627 13.5103 23.5564 11.75C23.5676 9.96295 23.4136 8.1787 23.0962 6.42V6.42Z" />
                                    <path d="M10.2998 15.02L16.0528 11.75L10.2998 8.47998V15.02Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="f_09 fw_3 mb-2">
                            <a href="#">???????????????? ????????????????????????????????????</a>
                        </div>
                        <div class="f_09 fw_3">
                            <a href="#">?????????????? ????????????????????</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-start f_08 fw_3 mb-3">
                            <img src="img/icons/map-pin.svg" alt="??????????" class="me-2">
                            <div>???????????????????????? ??????????????????: ??.????????????, ?????????? ??????????????????????, 3</div>
                        </div>
                        <div class="d-flex align-items-start f_08 fw_3 mb-3">
                            <img src="{{asset('img/icons/phone.svg')}}" alt="?????????? ????????????????" class="me-2">
                            <a href="tel:8 951 066 8 777">8 951 066 8 777</a>
                        </div>
                    </div>
                    <div>
                        <a class="developers" href="http://asmpromo.ru/" alt="???????????????? ?? ?????????????????????? ????????????"
                            title="???????????????? ?? ?????????????????????? ????????????" target="_blanc">
                            <div class="f_08">???????????????? ?? ?????????????????????? ????????????</div>
                            <img src="{{asset('img/asm_white.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="d-block d-md-none mobile">
        <div class="container h-100 d-flex justify-content-around align-items-center">
            <a href="index.html" class="active">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.9999 7.22171L19.8333 12.4717V21.5834H17.4999V14.5834H10.4999V21.5834H8.16659V12.4717L13.9999 7.22171ZM13.9999 4.08337L2.33325 14.5834H5.83325V23.9167H12.8333V16.9167H15.1666V23.9167H22.1666V14.5834H25.6666L13.9999 4.08337Z" />
                </svg>
                <div>??????????????</div>
            </a>
            <a href="" role="button" data-bs-toggle="modal" data-bs-target="#callback">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.2083 3.87504H15.2025C14.8 2.76337 13.7458 1.95837 12.5 1.95837C11.2542 1.95837 10.2 2.76337 9.7975 3.87504H5.79167C4.7375 3.87504 3.875 4.73754 3.875 5.79171V21.125C3.875 22.1792 4.7375 23.0417 5.79167 23.0417H19.2083C20.2625 23.0417 21.125 22.1792 21.125 21.125V5.79171C21.125 4.73754 20.2625 3.87504 19.2083 3.87504ZM12.5 3.87504C13.0271 3.87504 13.4583 4.30629 13.4583 4.83337C13.4583 5.36046 13.0271 5.79171 12.5 5.79171C11.9729 5.79171 11.5417 5.36046 11.5417 4.83337C11.5417 4.30629 11.9729 3.87504 12.5 3.87504ZM19.2083 21.125H5.79167V5.79171H7.70833V8.66671H17.2917V5.79171H19.2083V21.125Z" />
                </svg>
                <div>????????????</div>
            </a>
            <a href="services.html">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.64 7.64C9.87 7.14 10 6.59 10 6C10 3.79 8.21 2 6 2C3.79 2 2 3.79 2 6C2 8.21 3.79 10 6 10C6.59 10 7.14 9.87 7.64 9.64L10 12L7.64 14.36C7.14 14.13 6.59 14 6 14C3.79 14 2 15.79 2 18C2 20.21 3.79 22 6 22C8.21 22 10 20.21 10 18C10 17.41 9.87 16.86 9.64 16.36L12 14L19 21H22V20L9.64 7.64ZM6 8C4.9 8 4 7.11 4 6C4 4.89 4.9 4 6 4C7.1 4 8 4.89 8 6C8 7.11 7.1 8 6 8ZM6 20C4.9 20 4 19.11 4 18C4 16.89 4.9 16 6 16C7.1 16 8 16.89 8 18C8 19.11 7.1 20 6 20ZM12 12.5C11.72 12.5 11.5 12.28 11.5 12C11.5 11.72 11.72 11.5 12 11.5C12.28 11.5 12.5 11.72 12.5 12C12.5 12.28 12.28 12.5 12 12.5ZM19 3L13 9L15 11L22 4V3H19Z" />
                </svg>
                <div>????????????</div>
            </a>
            <a href="catalog.html">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 8.5H2V6.5H7V8.5ZM7 11.5H2V13.5H7V11.5ZM20.59 18.5L16.76 14.67C15.96 15.19 15.02 15.5 14 15.5C11.24 15.5 9 13.26 9 10.5C9 7.74 11.24 5.5 14 5.5C16.76 5.5 19 7.74 19 10.5C19 11.52 18.69 12.46 18.17 13.25L22 17.09L20.59 18.5ZM17 10.5C17 8.85 15.65 7.5 14 7.5C12.35 7.5 11 8.85 11 10.5C11 12.15 12.35 13.5 14 13.5C15.65 13.5 17 12.15 17 10.5ZM2 18.5H12V16.5H2V18.5Z" />
                </svg>
                <div>??????????????</div>
            </a>
            <a href="contacts.html">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.3333 15.2083C18.1875 15.2083 17.0875 15.025 16.0608 14.6858C15.9692 14.6583 15.8683 14.64 15.7767 14.64C15.5383 14.64 15.3092 14.7317 15.1258 14.9058L13.1092 16.9225C10.515 15.6025 8.38833 13.485 7.06833 10.8908L9.085 8.865C9.34167 8.6175 9.415 8.26 9.31417 7.93917C8.975 6.9125 8.79167 5.8125 8.79167 4.66667C8.79167 4.1625 8.37917 3.75 7.875 3.75H4.66667C4.1625 3.75 3.75 4.1625 3.75 4.66667C3.75 13.2742 10.7258 20.25 19.3333 20.25C19.8375 20.25 20.25 19.8375 20.25 19.3333V16.125C20.25 15.6208 19.8375 15.2083 19.3333 15.2083ZM5.61083 5.58333H6.98583C7.05 6.39 7.1875 7.1875 7.4075 7.9575L6.3075 9.06667C5.93167 7.9575 5.69333 6.79333 5.61083 5.58333ZM18.4167 18.3892C17.2067 18.3067 16.0333 18.0683 14.9333 17.6925L16.0333 16.5925C16.8125 16.8125 17.61 16.95 18.4167 17.005V18.3892ZM12 3.75V12.9167L14.75 10.1667H20.25V3.75H12ZM18.4167 8.33333H13.8333V5.58333H18.4167V8.33333Z" />
                </svg>
                <div>????????????????</div>
            </a>
        </div>
    </footer>
    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="burger-menu">
        <div class="offcanvas-body">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
                <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.0001 2.99995L13.345 12.9999L23.0001 22.9999" />
                    <path d="M2.99997 22.9999L13.3447 13L2.99997 3" />
                </svg>
            </button>
            <div class="box">
                <h3 class="white text-center text-sm-start mb-5">????????</h3>
                <nav class="main-menu">
                    <ul>
                        <li><a href="index.html">??????????????</a></li>
                        <li>
                            <a href="" role="button" data-bs-dismiss="offcanvas" data-bs-toggle="modal"
                                data-bs-target="#callback">????????????</a>
                        </li>
                        <li><a href="services.html">????????????</a></li>
                        <li><a href="offers.html">??????????</a></li>
                        <li><a href="catalog.html">??????????????</a></li>
                        <li><a href="team.html">??????????????</a></li>
                        <li><a href="about.html">??????????</a></li>
                        <li><a href="contacts.html">????????????????</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Online booking -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="booking">
        <div class="offcanvas-body">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
                <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.0001 2.99995L13.345 12.9999L23.0001 22.9999" />
                    <path d="M2.99997 22.9999L13.3447 13L2.99997 3" />
                </svg>
            </button>
            <div class="box">
                <form action="" name="bookingForm" id="booking-form">
                    <div id="page-1" class="page active">
                        <div class="title">???????????? ????????????</div>
                        <div class="px-lg-4 f_14">
                            <div class="line">
                                <div class="left">
                                    <img src="img/icons/scissors.svg" alt="????????????" class="me-2 me-lg-4">
                                    <button type="button" class="white to-page"
                                        data-target="page-2">????????????</button>
                                </div>
                                <div class="right">
                                    <output id="serviceResult"></output>
                                    <button type="button" class="del ms-2 ms-md-4" data-target="service"
                                        onclick="clear(this)">
                                        <img src="img/icons/edit_off.svg" alt="??????????????">
                                    </button>
                                </div>
                            </div>
                            <div class="line">
                                <div class="left">
                                    <img src="img/icons/people_alt.svg" alt="????????????" class="me-2 me-lg-4">
                                    <button type="button" class="white to-page"
                                        data-target="page-3">????????????</button>
                                </div>
                                <div class="right">
                                    <output id="masterResult"></output>
                                    <button type="button" class="del ms-2 ms-md-4" data-target="master"
                                        onclick="clear(this)">
                                        <img src="img/icons/edit_off.svg" alt="??????????????">
                                    </button>
                                </div>
                            </div>
                            <div class="line">
                                <div class="left">
                                    <img src="img/icons/watch_later.svg" alt="???????? ?? ??????????"
                                        class="me-2 me-lg-4">
                                    <div>???????? ?? ??????????</div>
                                </div>
                                <div class="right">
                                    <input type="datetime-local" name="datetime">
                                    <!-- <button type="button" class="ms-4">
                                            <img src="img/icons/edit_off.svg" alt="??????????????">
                                        </button> -->
                                </div>
                            </div>
                        </div>
                        <button type="button" id="next-step" class="btn_main btn_1 mx-auto mt-5 to-page"
                            data-target="page-4" disabled="disabled">
                            <span class="f_09">????????????????????</span>
                        </button>
                    </div>
                    <div id="page-2" class="page">
                        <button type="button" class="white to-page btn-back" data-target="page-1">
                            <svg viewBox="0 0 20 36" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 33L2 18L17 3" />
                            </svg>
                        </button>
                        <div class="title">?????????? ????????????</div>
                        <div class="px-lg-4 f_14">
                            <div class="line justify-content-start">
                                <input type="radio" name="service" id="servID-1" value="??????????????"
                                    data-out="serviceResult" class="to-page" data-target="page-1">
                                <label for="servID-1" class="ms-2 ms-md-4">??????????????</label>
                            </div>
                            <div class="line justify-content-start">
                                <input type="radio" name="service" id="servID-2" value="??????????????????????"
                                    data-out="serviceResult" class="to-page" data-target="page-1">
                                <label for="servID-2" class="ms-2 ms-md-4">??????????????????????</label>
                            </div>
                            <div class="line justify-content-start">
                                <input type="radio" name="service" id="servID-3" value="??????????????"
                                    data-out="serviceResult" class="to-page" data-target="page-1">
                                <label for="servID-3" class="ms-2 ms-md-4">??????????????</label>
                            </div>
                        </div>
                    </div>
                    <div id="page-3" class="page">
                        <button type="button" class="white to-page btn-back" data-target="page-1">
                            <svg viewBox="0 0 20 36" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 33L2 18L17 3" />
                            </svg>
                        </button>
                        <div class="title">?????????? ??????????????</div>
                        <div class="px-lg-4">
                            <div class="line py-3">
                                <div class="radio-div">
                                    <input type="radio" name="master" data-out="masterResult" value="????????????"
                                        class="to-page" data-target="page-1">
                                    <div class="master-avatar">
                                        <img src="img/team/5.png" alt="">
                                        <div>
                                            <div class="f_12 fw_6 mb-2">????????????</div>
                                            <div class="f_09 mb-2">???????????????????? ??????????????????</div>
                                            <div class="rating">
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line py-3">
                                <div class="radio-div">
                                    <input type="radio" name="master" data-out="masterResult" value="??????????"
                                        class="to-page" data-target="page-1">
                                    <div class="master-avatar">
                                        <img src="img/team/1.png" alt="">
                                        <div>
                                            <div class="f_12 fw_6 mb-2">??????????</div>
                                            <div class="f_09 mb-2">????????????????????, ??????????????????</div>
                                            <div class="rating">
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line py-3">
                                <div class="radio-div">
                                    <input type="radio" name="master" data-out="masterResult"
                                        value="??????????????????" class="to-page" data-target="page-1">
                                    <div class="master-avatar">
                                        <img src="img/team/6.png" alt="">
                                        <div>
                                            <div class="f_12 fw_6 mb-2">??????????????????</div>
                                            <div class="f_09 mb-2">????????????????????, ??????????????????</div>
                                            <div class="rating">
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="grade" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                                <svg class="" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="page-4" class="page">
                        <button type="button" class="white to-page btn-back" data-target="page-1">
                            <svg viewBox="0 0 20 36" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 33L2 18L17 3" />
                            </svg>
                        </button>
                        <div class="title">???????????? ????????????</div>
                        <div class="px-lg-5 pt-5 f_14">
                            <input type="text" placeholder="??????" class="w-100 mb-3">
                            <input type="text" placeholder="+7 (___) ___ __ __ " class="w-100 mb-3" required>
                            <input type="text" placeholder="e-mail" class="w-100 mb-3">
                            <input type="text" placeholder="?????? ??????????????????????" class="w-100 mb-4">
                            <div class="d-flex mb-4">
                                <input type="checkbox" id="consent" class="me-3">
                                <label for="consent" class="f_08">???????????????? ???? ?????????????????? ????????????????????????
                                    ????????????</label>
                            </div>
                        </div>
                        <button type="submit" class="btn_main btn_1 mx-auto mt-5">
                            <span class="f_09">????????????????????</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Quiz -->
    <div class="modal fade" id="quiz" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4 p-sm-5">
                <div class="box">
                    <!-- <form action="/mail/send.php" method="POST" enctype="multipart/form-data"> -->
                    <form id="form_color" enctype="multipart/form-data">
                        <div id="quiz-slider" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-interval="false" data-bs-wrap="false">
                            <div class="carousel-inner">
                                <fieldset class="carousel-item active">
                                    <div class="indicators mb-4"></div>
                                    <div class="font-2 text-center f_15 mb-3">?????? 1</div>
                                    <div class="font-2 f_14 fw_5 text-center mb-4 mb-sm-5">???????????????? ???????? ??????
                                        ?????????????????? ?????????????????????????? ?? ?????????????? ??????????????????</div>
                                    <div class="row row-cols-sm-2">
                                        <div class="mb-4 mb-sm-0">
                                            <img src="img/sample.jpg" alt="" id="file-img-1"
                                                class="load-img img-fluid">
                                        </div>
                                        <div>
                                            <div class="input-file-hidden mx-auto mx-sm-0">
                                                <button type="button" class="btn_main btn_2">??????????????????
                                                    ????????</button>
                                                <input type="file" name="images" class="verify"
                                                    id="inp-file-1" data-illustartion="file-img-1"
                                                    multiple
                                                    oninput="loadImgs(this); verifyInp(this);"
                                                    required>
                                            </div>
                                            <div class="file-list mt-3"></div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn_main btn_1 mx-auto mt-3 mt-sm-5"
                                        data-bs-target="#quiz-slider" data-bs-slide="next"
                                        disabled="disabled"><span class="f_09">??????????????????
                                            ??????</span></button>
                                    <div class="text-center f_09 light-gray mt-3">*???????? ???????? ?????????? ??????????????
                                        ?????????? ?????????? ??????????????</div>
                                </fieldset>
                                <fieldset class="carousel-item">
                                    <div class="indicators mb-4"></div>
                                    <div class="font-2 text-center f_15 mb-3">?????? 2</div>
                                    <div class="font-2 f_14 fw_5 text-center mb-4 mb-sm-5">???????? ????????????
                                        (?????????????? ??????????????????)</div>
                                    <div class="row row-cols-sm-2">
                                        <div class="mb-4 mb-sm-0">
                                            <img src="img/sample.jpg" alt="" id="file-img-2"
                                                class="load-img img-fluid">
                                        </div>
                                        <div>
                                            <div class="input-file-hidden mx-auto mx-sm-0">
                                                <button type="button" class="btn_main btn_2">??????????????????
                                                    ????????</button>
                                                <input type="file" name="images2" class="verify"
                                                    id="inp-file-2" data-illustartion="file-img-2"
                                                    multiple
                                                    oninput="loadImgs(this); verifyInp(this);"
                                                    required>
                                            </div>
                                            <div class="file-list mt-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4 mt-sm-5">
                                        <button type="button" class="btn_main btn_2 me-4"
                                            data-bs-target="#quiz-slider" data-bs-slide="prev"><span
                                                class="f_09">??????????</span></button>
                                        <button type="button" class="btn_main btn_1"
                                            data-bs-target="#quiz-slider" data-bs-slide="next"
                                            disabled="disabled"><span class="f_09">??????????????????
                                                ??????</span></button>
                                    </div>
                                    <div class="text-center f_09 light-gray mt-3">*???????? ???????? ?????????? ??????????????
                                        ?????????? ?????????? ??????????????</div>
                                </fieldset>
                                <fieldset class="carousel-item">
                                    <div class="indicators mb-4"></div>
                                    <div class="font-2 text-center f_15 mb-3">?????? 3</div>
                                    <div class="font-2 f_14 fw_5 text-center mb-4 mb-sm-5">???????? ???????? ??????????
                                        (?????????????? ??????????????????)</div>
                                    <div class="row row-cols-sm-2">
                                        <div class="mb-4 mb-sm-0">
                                            <img src="img/sample.jpg" alt="" id="file-img-3"
                                                class="load-img img-fluid">
                                        </div>
                                        <div>
                                            <div class="input-file-hidden mx-auto mx-sm-0">
                                                <button type="button" class="btn_main btn_2">??????????????????
                                                    ????????</button>
                                                <input type="file" name="images3" class="verify"
                                                    id="inp-file-3" data-illustartion="file-img-3"
                                                    multiple
                                                    oninput="loadImgs(this); verifyInp(this);"
                                                    required>
                                            </div>
                                            <div class="file-list mt-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4 mt-sm-5">
                                        <button type="button" class="btn_main btn_2 me-4"
                                            data-bs-target="#quiz-slider" data-bs-slide="prev"><span
                                                class="f_09">??????????</span></button>
                                        <button type="button" class="btn_main btn_1"
                                            data-bs-target="#quiz-slider" data-bs-slide="next"
                                            disabled="disabled"><span class="f_09">??????????????????
                                                ??????</span></button>
                                    </div>
                                    <div class="text-center f_09 light-gray mt-3">*???????? ???????? ?????????? ??????????????
                                        ?????????? ?????????? ??????????????</div>
                                </fieldset>
                                <fieldset class="carousel-item">
                                    <div class="indicators mb-4"></div>
                                    <div class="font-2 text-center f_15 mb-3">?????? 4</div>
                                    <div class="font-2 f_14 fw_5 text-center mb-4 mb-sm-5">???????????????? ????
                                        ?????????????????? ????????????????</div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-xxl-6">
                                            <div class="font-2 f_12 fw_3 mb-2 mb-sm-3">???????????? ????????
                                                ???????????? ?????? ???????????????</div>
                                            <div
                                                class="d-flex justify-content-between font-2 f_11 mb-4 mb-sm-5">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" class="verify"
                                                        name="desired-color" id="darker"
                                                        value="????????????" oninput="verifyInp(this);"
                                                        required>
                                                    <label for="darker" class="ms-3">????????????</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" class="verify"
                                                        name="desired-color" id="lighter"
                                                        value="??????????????" oninput="verifyInp(this);"
                                                        required>
                                                    <label for="lighter"
                                                        class="ms-3">??????????????</label>
                                                </div>
                                            </div>
                                            <div class="font-2 f_12 fw_3 mb-2 mb-sm-3">???????? ????????????
                                                ???????????? ?????????????????</div>
                                            <div
                                                class="d-flex justify-content-between font-2 f_11 mb-4 mb-sm-5">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" class="verify"
                                                        name="dyed-hair" id="dyed"
                                                        value="????????????????????"
                                                        oninput="verifyInp(this);" required>
                                                    <label for="dyed" class="ms-3">????</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" class="verify"
                                                        name="dyed-hair" id="not-dyed"
                                                        value="???? ????????????????????"
                                                        oninput="verifyInp(this);" required>
                                                    <label for="not-dyed" class="ms-3">??????</label>
                                                </div>
                                            </div>
                                            <div class="font-2 f_12 fw_3 mb-2 mb-sm-3">???????</div>
                                            <input type="text" name="text" placeholder="???????????????? ????????????"
                                                class="verify white w-100" oninput="verifyInp(this);"
                                                required>
                                            <div class="d-flex justify-content-between mt-4 mt-sm-5">
                                                <button type="button" class="btn_main btn_2 me-4"
                                                    data-bs-target="#quiz-slider"
                                                    data-bs-slide="prev"><span
                                                        class="f_09">??????????</span></button>
                                                <button type="button" class="btn_main btn_1"
                                                    data-bs-target="#quiz-slider"
                                                    data-bs-slide="next" disabled="disabled"><span
                                                        class="f_09">?????????????????? ??????</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="carousel-item">
                                    <div class="indicators mb-4"></div>
                                    <div class="font-2 text-center f_15 mb-3">?????? 5</div>
                                    <div class="font-2 f_14 fw_5 text-center mb-1">???????????????? ???????? ????????????????????
                                        ????????????</div>
                                    <div class="font-2 f_12 fw_3 text-center mb-4 mb-sm-5">?????? ??????????????????
                                        ?????????????????????? ?????????????? ?????????? ????????????????</div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 col-xxl-6">
                                            <input id="tel" type="text" name="phone"
                                                placeholder="?????????? ????????????????" class="white w-100"
                                                required>
                                            <div class="d-flex justify-content-between mt-4 mt-sm-5">
                                                <button type="button" class="btn_main btn_2 me-4"
                                                    data-bs-target="#quiz-slider"
                                                    data-bs-slide="prev"><span
                                                        class="f_09">??????????</span></button>
                                                <button type="submit" class="btn_main btn_1"><span
                                                        class="f_09">????????????</span></button>
                                            </div>
                                            <div class="text-center f_09 light-gray mt-3">??????????????
                                                ??????????????????, ???? ???????????????????????? ?????????????????? ?? ??????????????????
                                                ???????????????????????? ????????????</div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <button id="online_close" type="button" class="btn-close" data-bs-dismiss="modal" onclick="clearQuiz('form_color')">
                    <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.0001 2.99995L13.345 12.9999L23.0001 22.9999" />
                        <path d="M2.99997 22.9999L13.3447 13L2.99997 3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- callback simple -->
    <div class="modal fade" id="callback" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="box">
                    <form id="form_recording" action="{{route('basket-confirm')}}" method="POST">
                        @csrf
                        <h4>???????????? ????????????</h4>
                        <input type="text" name="name" placeholder="??????" class="white w-100 mb-3" required>
                        <input id="tel" name="phone" placeholder="?????????? ????????????????" class="white w-100 mb-3"
                            required>
                        <textarea type="text" name="comment" rows="3" placeholder="??????????????????????"
                            class="white w-100 mb-4"></textarea>
                        <div class="d-flex mb-4">
                            <input type="checkbox" name="agree" id="consent" class="me-3" required>
                            <label for="consent" class="f_08">???????????????? ???? ?????????????????? ???????????????????????? ????????????</label>
                        </div>
                        <button id="online_appointment" type="submit"
                            class="btn_main btn_1 mx-auto">??????????????????</button>
                    </form>
                </div>
                <button type="button" id="online_close" class="btn-close" data-bs-dismiss="modal">
                    <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.0001 2.99995L13.345 12.9999L23.0001 22.9999" />
                        <path d="M2.99997 22.9999L13.3447 13L2.99997 3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- success message -->
    <div class="modal fade" id="success-message" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="box py-4">
                    <div class="white text-center f_12">???????? ???????????? ????????????????????</div>
                    <button type="button" class="btn_main btn_1 mx-auto mt-4" data-bs-dismiss="modal">
                        <span class="f_09">??????????????</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Skripts -->
    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sliders.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mask.js')}}"></script>
    </body>

    </html>
