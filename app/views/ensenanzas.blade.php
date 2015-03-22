<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taller Psicología Zen - Enseñanzas</title>
	{{ HTML::script('jquery/jquery-1.11.2.min.js'); }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
	{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('bootstrap/css/bootstrap-theme.min.css');}}
	<!-- {{ HTML::script('perfect-scrollbar/perfect-scrollbar.js'); }}
	{{ HTML::style('perfect-scrollbar/perfect-scrollbar.css'); }} -->
	{{ HTML::script('slick/slick.min.js'); }}
	{{ HTML::style('slick/slick.css'); }}
	{{ HTML::style('slick/slick-theme.css'); }}
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
<body class="ensenanzas" data-section="ensenanzas">
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
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 story-container">
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-push-1">
							<h1 class="title-story">Mini historias</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-push-1">
							<div class="story-slider">
								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Tu mente y la del Buda son id&eacute;nticas.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/01.jpg' , 'Hombre con capucha' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											¿Por qué seguir buscando en el afuera lo que desde siempre existe en tu interior?
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">El mundo esta inclu&iacute;do en nosotros mismos.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/02.jpg' , 'Budita meditando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Nosotros somos el tiempo y cada instante que vivimos el universo entero está a nuestra disposición.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">El r&iacute;o no necesita que lo empujes.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/03.jpg' , 'Hombre remando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El hombre sigue la ley de la tierra, la tierra sigue la ley del cosmos, el cosmos sigue la ley del Zen, el Zen sigue su propia ley.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">El sol del mediod&iacute;a no da sombra.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/04.jpg' , '&Aacute;rboles' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Los pinos no tienen color viejo ni color nuevo, la naturaleza no sigue ninguna moda.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">No busquen el camino en lugares lejanos ni en los dem&aacute;s.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/05.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Mas bien puede encontrarlo todo el tiempo y en todas partes, el camino siempre está bajo nuestros pies.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<!-- ******************************************************* -->
								<!-- ******************************************************* -->
								<!-- ******************************************************* -->

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">La riqueza real est&aacute; a tu alcance.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/06.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Una ventana brillando sobre los pinos verdes no puede compararse ni a los palacios de jade ni a las torres de plata dorada.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Nada es permamente, nada es imperecedero.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/07.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											La l&aacute;mpara no se apodera de la luz que fluye por ella. No luches por apoderarte de la vida que fluye a trav&eacute;s de t&iacute;.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Todo est&aacute; sujeto al cambio.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/08.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El pasado queda atr&aacute;s, el futuro a&uacute;n no llega, el presente se nos escapa. Las cosas cambian continuamente sin ning&uacute;n fundamento firme.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">El viaje de mil millas comienza con el primer paso.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/09.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El camino del bienestar que ilumina, no est&aacute; trazado ni deja huella, es como la ruta que toman las aves en el cielo.
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">La mente zen no es la mente zen.</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/10.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Descartar la mente zen es el modo zen correcto. Porque finalmente ¿De qu&eacute; color es el viento?
										</p>
									</div>
									<!-- <a href="ensenanzas" class="box-link"></a> -->
								</article>


							</div>
						</div>
					</div>
				</div>
			</div>





			<div class="row loto-container">
				<div class="col-xs-6 col-md-6 video-container">
					<div class="row no-margin-bottom">
						<div class="col-xs-10 col-md-10 col-sm-push-1">
							<h1 class="title-story">Videos</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/QlD-HWpvW40/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/QlD-HWpvW40"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=QlD-HWpvW40">Una taza de Zen</a>
								</p>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/XVhhCu024B0/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/XVhhCu024B0"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=XVhhCu024B0">¿Qu&eacute; es el Zen?</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/PKjDHiMY17Y/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/PKjDHiMY17Y"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=PKjDHiMY17Y">Aprovecha el momento</a>
								</p>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/mQaY1Py4B70/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/mQaY1Py4B70"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=mQaY1Py4B70">Las puertas del cielo</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/t3HMmmjtKFI/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/t3HMmmjtKFI"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=t3HMmmjtKFI">Meditar en un minuto</a>
								</p>
							</div>
						</div>
						<div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/BLkrHH6Ov1Q/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/BLkrHH6Ov1Q"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=BLkrHH6Ov1Q">Camino al despertar</a>
								</p>
							</div>
						</div>

						<!-- <div class="col-xs-5 col-md-5 col-sm-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/QlD-HWpvW40/0.jpg" width="100%"></div>	#
			<d class="link"iv class="title-video">
								<p>
									aUna taza de Zen
								</p>
							</div>
						</div> -->
					</div>
				</div>
				{{ HTML::image('images/loto_icon.png' , 'Loto' , array('class'=>'loto-icon')) }}
				<div class="col-xs-6 col-md-6 text-container">
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-push-1">
							<h1 class="title-story">Textos</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-push-1">
							<ul class="texts-list">
								<li>{{HTML::link("pdf/basesdelameditacion.pdf", 'Bases de la Meditación Budista', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/buda.pdf", 'Siddharta Gautama Buda', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/buenapreguntabuenarespuesta.pdf", 'Buena pregunta, buena respuesta', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/elcorazondelasensenanzasdebuda.pdf", 'El corazón de las enseñanzas de Buda', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/problemasmentales.pdf", 'Cómo actuar con los problemas mentales', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/queesmeditar.pdf", '¿Qué es meditar?', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li>{{HTML::link("pdf/trabajandoemocionesperturbadoras.pdf", 'Trabajando con las emociones perturbadoras', array("class" => "link" , "target" => "_blank" ));}}
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
							</ul>
						</div>
					</div>
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
	<!-- MODALES -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-video">
					<iframe class="youtube-player" type="text/html" width="100%" height="100%" src="" frameborder="0"></iframe>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
