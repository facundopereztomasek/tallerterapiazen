<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taller Psicología Zen - Taller</title>
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
<!--[if IE]>
	<body class="taller ie">
<![endif]-->

<!--[if !IE]><!-->
<body class="taller" data-section="taller">
<!--<![endif]-->

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
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}</a><div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}</a><div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link selected'))}}</a><div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}</a><div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}</a><div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">

					<article class="workshop-view">
						<header class="workshop-header bg-taller-2">
							<h1 class="title">Taller Psicología Zen y Práctica de Meditación 2<sup>do</sup> encuentro: <br>
							¿Qué es la psicología basada en el Zen? Prácticas de meditación.</h1>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".taller-modal">Inscribirse</button>
						</header>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<div class="contents">
									<p class="paragraph phrase">"Pronto el silencio será una leyenda del pasado. El hombre inventa, día tras día, máquinas y dispositivos que aumentan el ruido y distraen a la humanidad de la esencia de la vida, de la contemplación, de la meditación."</p>
									<p class="paragraph">Agradecemos tu interés por esta actividad y esperamos tu activa participación para que sea un encuentro grupal enriquecedor en el que te puedas conectar con una mirada novedosa acerca de enseñanzas muy antiguas, orientadas a la comprensión de la mente, el cese del sufrimiento y la práctica de la meditación como medio para manejar nuestros niveles de estrés, promover un nivel de bienestar y llegar a una conexión saludable con vos mismo en el aquí y ahora.</p>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<ul class="data">
									<li><strong class="data-type">Fecha</strong><span class="data-info">Sábado 19 de Septiembre de 2015</span></li>
									<li><strong class="data-type">Hora</strong><span class="data-info">09.30 hs.</span></li>
									<li><strong class="data-type">Lugar</strong><span class="data-info">Hipolito Irigoyen 4579 dpto. G, Lanus Oeste</span></li>
									<li><strong class="data-type">Costo</strong><span class="data-info">$380 por encuentro (*)</span></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<span class="title-section">Primer parte</span>
								<ul class="activity-list">
									<li class="activity">
										<span class="hours">09</span><span class="colon">:</span><span class="minutes">30</span>
										<span class="activity-name">Presentación.</span>
									</li>
									<li class="activity">
										<span class="hours">09</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">¿Qué es el Zen? ¿Qué es la enseñanza budista? ¿Qué no es la enseñanza budista? ¿Qué es la Psicoterapia basada en el Zen?</span>
									</li>
									<li class="activity">
										<span class="hours">10</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Break, café.</span>
									</li>

								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<span class="title-section">Segunda parte</span>
								<ul class="activity-list">
									<li class="activity">
										<span class="hours">11</span><span class="colon">:</span><span class="minutes">00</span>
										<span class="activity-name">Las cuatro nobles verdades. Los tres venenos mentales. El octuple sendero. Desarrollo de la atencion plena y la autoconciencia.</span>
									</li>
									<li class="activity">
										<span class="hours">12</span><span class="colon">:</span><span class="minutes">15</span>
										<span class="activity-name">Práctica de meditación.</span>
									</li>
									<li class="activity">
										<span class="hours">12</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Final del 2<sup>do</sup> encuentro.</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-8 col-md-8">
								<div class="contents">
									<p class="paragraph">Recordá: <br>
										El dia 19 te esperamos en lo posible a partir de 09.15, 
										para poder comenzar a las 09.30 puntualmente.
										No es necesario experiencia previa ni ropa especial.
										No es una actividad orientada en sentido religioso.
									</p>
									<!-- <p class="paragraph">
										(*) si te anotás para realizar todos los encuentros podés pagar hasta el 27 de Marzo por adelantado el total del Taller con el 14% de descuento: $1200 por los 4 encuentros.</p> -->

								</div>
							</div>
						</div>
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
							<a target="_blank" href="https://www.facebook.com/tallerpsicologiazen" class="facebook"><span class="icon icon-facebook"></span></a>
							<a target="_blank" href="http://www.twitter.com" class="twitter"><span class="icon icon-twitter"></span></a>
							<a target="_blank" href="http://www.youtube.com" class="youtube"><span class="icon icon-youtube"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Feedback acciones -->
	@if( Session::get('feedback') )

		<!-- MODALES -->
		<div class="modal success-modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="title-container">
						<p class="title">Contacto</p>
					</div>
					<p class="modal-success">{{ Session::get('feedback')['mensaje'] }}</p>
				</div>
			</div>
		</div>
		<script>
			$('.success-modal').modal('toggle');
		</script>
	@endif

	<!-- MODALES -->
	<div class="modal taller-modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="title-container">
					<p class="title">Taller Psicología Zen y Práctica de Meditación 2do encuentro: ¿Qué es la psicología basada en el Zen? Prácticas de meditación.</p>
				</div>
			{{ Form::open( array('route'=>'inscribirse_taller','class'=>'modal-form clearfix')) }}
				<p class="subtitle">Formulario de contacto</p>
				<div class="input-container"><input type="hidden" name="taller" value="2"></div>
				<div class="input-container required"><input name="nombre" type="text" placeholder="nombre"></div>
				<div class="input-container required"><input name="apellido" type="text" placeholder="apellido"></div>
				<div class="input-container required"><input name="email" type="text" placeholder="e-mail"></div>
				<div class="input-container"><textarea name="mensaje" id="" cols="30" rows="10" placeholder="mensaje"></textarea></div>
				<div><button type="submit" class="btn btn-primary" >Enviar</button></div>
				<a href="#" class="cancel" data-dismiss="modal" aria-label="Close">Cancelar</a>
			{{ Form::close() }}
			</div>
		</div>
	</div>


	<!-- <script> $(document).ready(function(){ $('button.btn[type=button]').click(); }) </script> -->
</body>
</html>
