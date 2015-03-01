<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::script('jquery/jquery-1.11.2.min.js'); }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
	{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('bootstrap/css/bootstrap-theme.min.css');}}
	<!-- {{ HTML::script('perfect-scrollbar/perfect-scrollbar.js'); }}
	{{ HTML::style('perfect-scrollbar/perfect-scrollbar.css'); }} -->
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
</head>
<body class="talleres" data-section="talleres">
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
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Psicología Zen y Práctica de Meditación 1<sup>er</sup> encuentro: <br> ¿Qué es la mente? Condicionamientos y sufrimiento.</h2>
						<div class="row separator">
							<div class="col-xs-4 col-md-4 no-gutter">
								<ul class="data">
									<li>Sábado 28 de Marzo 2015</li>
									<li>09.30 hs.</li>
									<li>Hipolito Irigoyen 4579 dpto. G,  Lanus Oeste</li>
								</ul>
							</div>
							<div class="col-xs-6 col-md-6 col-sm-pull-1">
								<p class="paragraph">
									 ¿Por qué sufrimos, por qué nuestra mente no nos deja disfrutar de los momentos  que vivimos y de las cosas que tenemos? ¿Tenemos una mente “programada” para sufrir? ¿Qué son los condicionamientos?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="{{ route('taller1') }}" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Psicología Zen y Práctica de Meditación 2<sup>do</sup> encuentro: <br> ¿Qué es la psicología basada en el Zen? Prácticas de meditación.</h2>
						<div class="row separator">
							<div class="col-xs-4 col-md-4 no-gutter">
								<ul class="data">
									<li>Sábado 25 de Abril 2015</li>
									<li>09.30 hs.</li>
									<li>Hipolito Irigoyen 4579 dpto. G,  Lanus Oeste</li>
								</ul>
							</div>
							<div class="col-xs-6 col-md-6 col-sm-pull-1">
								<p class="paragraph">
									 Qué es el zen? ¿Qué es la psicología basada en la enseñanza zen? ¿Qué es el budismo? ¿Qué no es el budismo? ¿ Qué es la meditación? ¿Cómo se medita?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="{{ route('taller2') }}" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Psicología Zen y Práctica de Meditación 3<sup>er</sup> encuentro: <br> Diferentes prácticas de meditación.</h2>
						<div class="row separator">
							<div class="col-xs-4 col-md-4 no-gutter">
								<ul class="data">
									<li>Sábado 30 de Mayo 2015</li>
									<li>09.30 hs.</li>
									<li>Hipolito Irigoyen 4579 dpto. G,  Lanus Oeste</li>
								</ul>
							</div>
							<div class="col-xs-6 col-md-6 col-sm-pull-1">
								<p class="paragraph">
									¿Qué beneficios trae la meditación? ¿Meditar es relajarse y respirar? Tipos de meditación: Mindfullness, Vipassana, Samattha, guiada, meditación con mantras, meditación con intención virtuosa, Zazen (sin intención).
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="{{ route('taller3') }}" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Psicología Zen y Práctica de Meditación 4<sup>to</sup> encuentro: <br> Miedo, ira, ansiedad, insactisfacción, estrés ¿Me sirve la meditación?</h2>
						<div class="row separator">
							<div class="col-xs-4 col-md-4 no-gutter">
								<ul class="data">
									<li>Sábado 27 de Junio 2015</li>
									<li>09.30 hs.</li>
									<li>Hipolito Irigoyen 4579 dpto. G,  Lanus Oeste</li>
								</ul>
							</div>
							<div class="col-xs-6 col-md-6 col-sm-pull-1">
								<p class="paragraph">
									¿Qué son las emociones? ¿Por qué nos cuesta controlarlas? ¿Cómo hacer para reducir su impacto negativo en nuestra mente? La práctica de la meditación y el desarrollo de la atención plena para alcanzar el bienestar y el cese del sufrimiento.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="{{ route('taller4') }}" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
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
							<a target="_blank" href="http://www.facebook.com" class="facebook"><span class="icon icon-facebook"></span></a>
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
