<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taller Psicología Zen - Contacto</title>
	{{ HTML::script('jquery/jquery-1.11.2.min.js'); }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
	{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('bootstrap/css/bootstrap-theme.min.css');}}
	<!-- {{ HTML::script('perfect-scrollbar/perfect-scrollbar.js'); }}
	{{ HTML::style('perfect-scrollbar/perfect-scrollbar.css'); }} -->
	{{ HTML::script('jquery-placeholder/jquery.placeholder.min.js'); }}
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png?v=2">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png?v=2">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png?v=2">
	<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png?v=2">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png?v=2">
	<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png?v=2">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png?v=2">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png?v=2">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png?v=2">
	<link rel="icon" type="image/png" href="favicon-32x32.png?v=2" sizes="32x32">
	<link rel="icon" type="image/png" href="android-chrome-192x192.png?v=2" sizes="192x192">
	<link rel="icon" type="image/png" href="favicon-96x96.png?v=2" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon-16x16.png?v=2" sizes="16x16">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="mstile-144x144.png?v=2">
	<meta name="theme-color" content="#ffffff">
	<meta name="apple-mobile-web-app-title" content="Le Jardin">
	<link rel="shortcut icon" href="favicon.ico?v=2"/>
	<link rel="icon" type="image/png" href="favicon-192x192.png?v=2" sizes="192x192">
	<link rel="icon" type="image/png" href="favicon-160x160.png?v=2" sizes="160x160">
	<link rel="icon" type="image/png" href="favicon-96x96.png?v=2" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon-16x16.png?v=2" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon-32x32.png?v=2" sizes="32x32">
	<link rel="icon" href="favicon.ico?v=2"/>
	<link rel="icon" href="favicon.png?v=2" type="image/png" />
	<link rel="icon" href="favicon.ico?v=2" type="image/vnd.microsoft.icon" />
</head>
<body class="contacto" data-section="contacto">
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="title-container">
						<div class="wrapper">
							<a href="{{route('home')}}"><h1 class="title">Taller Psicolog&iacute;a Zen</h1></a>
							<div class="subtitle-container">
								<strong class="subtitle">Tu mente: Conocela, Aquietala, Liberala.</strong>
							</div>
							<div class="site-logo"><a href="{{route('home')}}"><img src="images/logo-taller-chico.png" alt="logo taller psicolog&iacute;a zen" width="140"></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<nav class="nav-bar clearfix">
					<!-- <a class="link selected" href="#">home</a> -->
					<div class="col-xs-2 col-md-2 divisor"><a class="link logo-circle" href="{{route('home')}}"><img src="images/logo-mini.png" alt="logo taller psicolog&iacute;a zen" width="70"></a></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="error-404">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-6">
					<div class="error-404-image">

					</div>
				</div>

				<div class="col-xs-6 col-md-6">
					<p class="error-404-paragraph">
						<span class="error-404-subtitle">
							ERROR 404!!!
						</span>
						<span class="error-404-title">
							DEMASIADO LEJOS <br> ESTÁS YENDOOO!!!
						</span>
						<span class="error-404-description">
							La direccion a la que quisiste acceder no existe, <a href="{{route('home')}}">clickea aca</a> para volver a la home.

						</span>
					</p>
				</div>


			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-md-8">
					<div class="col-xs-5 col-md-5">
						<div class="rights">
							<span><a href="{{route('home')}}">Taller Psicolog&iacute;a Zen</a></span>
						</div>
					</div>
					<div class="col-xs-7 col-md-7">
						<div class="designer">
							<p>Dise&ntilde;o y desarrollo: 	<a target="_blank" href="http://www.facundotomasek.com.ar">Facundo P&eacute;rez Tomasek</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4">
					<div class="social">
						<div class="col-xs-6 col-md-6">
							<span class="follow">
								Seguinos en
							</span>
						</div>
						<div class="col-xs-6 col-md-6">
							<a target="_blank" href="https://www.facebook.com/tallerpsicologiazen" class="facebook"><span class="icon icon-facebook"></span></a>
							<a target="_blank" href="http://www.twitter.com" class="twitter"><span class="icon icon-twitter"></span></a>
							<a target="_blank" href="http://www.youtube.com" class="youtube"><span class="icon icon-youtube"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
