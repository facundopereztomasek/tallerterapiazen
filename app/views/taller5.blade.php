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
						<header class="workshop-header bg-taller-1">
							<h1 class="title">Taller Psicología Zen y Práctica de Meditación<br>
								TALLER INTENSIVO
							</h1>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".taller-modal">Inscribirse</button>
						</header>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<div class="contents">
									<p class="paragraph">¿Te interesa conocer como funciona tu mente desde la Psicoterapia basada en la enseñanza zen?
										¿Querés experimentar diferentes prácticas de meditación que te ayuden a comenzar tu búsqueda de bienestar interior?
										¿Querés aprender de qué modo contribuye la meditación para ayudarte con el miedo, la ansiedad, la insatisfacción, la ira y el estrés?
										Vení a participar del Taller INTENSIVO los días sábado 15 y domingo 16 de agosto de 9.30 a 16.30
									</p>
								</div>
							</div>
							<div class="col-xs-4 col-md-4">
								<ul class="data">
									<li><strong class="data-type">Fecha</strong><span class="data-info">15 y 16 de Agosto de 2015</span></li>
									<li><strong class="data-type">Hora</strong><span class="data-info">09.30 hs.</span></li>
									<li><strong class="data-type">Lugar</strong><span class="data-info">Capital Federal</span></li>
									<li><strong class="data-type">Costo</strong><span class="data-info">$400 por encuentro (*)</span></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<span class="title-section">Programa del Taller DIA 1</span>
								<ul class="activity-list">
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">¿Qué es la mente?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Ilusiones mentales</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">¿Hay que confiar en nuestra mente?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">¿Por qué sufrimos?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Condicionamientos mentales</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Distorsiones cognitivas</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">¿Cómo salir de la “Matrix”?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que es el Zen?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que es la enseñanza budista?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que no es la enseñanza budista?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que es la Psicoterapia basada en el Zen?</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Las cuatro nobles verdades.</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Los tres venenos mentales.</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">El octuple sendero.</span></li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Desarrollo de la atencion plena y la autoconciencia</span></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-md-8">
								<span class="title-section">Programa del Taller DIA 2</span>
								<ul class="activity-list">
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que es la meditación? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Cómo se medita? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Qué beneficios trae la meditación? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Meditar es relajarse y respirar?</span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Tipos de meditación: </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Mindfullness. Meditación vipassana. </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Meditación samattha. Meditación  guiada.Meditación con mantras. Meditación con intención virtuosa. </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Meditación Zazen (sin intención)</span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Que son las emociones? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Por qué nos descontrolan? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Cómo reducir su impacto negativo? </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Trabajar con las emociones negativas desde el camino medio:</span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Ira, ansiedad, miedo, insatisfacción, estrés. </span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">La práctica de la meditación: “antidoto para los venenos”</span?<li>
									<li class="activity"> <span class="hours">&gt;</span><span class="activity-name">Puesta en común y Final del Taller</span?<li>
								</ul>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-8 col-md-8">
								<div class="contents">
									<p class="paragraph">Recordá: <br>
										Te esperamos en lo posible a partir de 9.00 para poder comenzar a las 9.30 puntualmente.
										No es necesario experiencia previa ni ropa especial.
										No es una actividad orientada en sentido religioso.
									</p>
									<p class="paragraph">
										(*) Podes pagar antes del 15 de Agosto por adelantado 750 por los 2 encuentros</p>

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
			$('.success-modal ').modal('toggle');
		</script>
	@endif

	<!-- MODALES -->
	<div class="modal taller-modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="title-container">
					<p class="title">Taller: Psicología Zen y Práctica de Meditación<br>
						TALLER INTENSIVO.</p>
				</div>
			{{ Form::open( array('route'=>'inscribirse_taller','class'=>'modal-form clearfix')) }}
				<p class="subtitle">Formulario de contacto</p>
				<div class="input-container"><input type="hidden" name="taller" value="5"></div>
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
