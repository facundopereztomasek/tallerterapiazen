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
	{{ HTML::script('slick/slick.min.js'); }}
	{{ HTML::style('slick/slick.css'); }}
	{{ HTML::style('slick/slick-theme.css'); }}
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
</head>
<body class="ensenanzas" data-section="ensenanzas">
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title-container">
						<div class="wrapper">
							<h1 class="title">Taller Psicolog&iacute;a Zen</h1>
							<div class="subtitle-container">
								<strong class="subtitle">Tu mente: Conocela, Aquietala, Liberala.</strong>
							</div>
							<div class="site-logo"><img src="images/logo-taller-chico.png" alt="logo taller psicolog&iacute;a zen" width="140"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<nav class="nav-bar clearfix">
					<!-- <a class="link selected" href="#">home</a> -->
					<div class="col-md-2 divisor"><a class="link logo-circle" href="{{route('home')}}"><img src="images/logo-mini.png" alt="logo taller psicolog&iacute;a zen" width="70"></a></div>
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 story-container">
					<div class="row">
						<div class="col-md-10 col-md-push-1">
							<h1 class="title-story">Mini historias</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-push-1">
							<div class="story-slider">
								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Hombre con capucha</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/01.jpg' , 'Hombre con capucha' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											Tu mente y la del Buda son id&eacute;nticas.
										</p>
									</div>
									<a href="ensenanzas" class="box-link"></a>
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Budita meditando</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/02.jpg' , 'Budita meditando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El mundo esta inclu&iacute;do en nosotros mismos.
										</p>
									</div>
									<a href="ensenanzas" class="box-link"></a>
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Hombre remando</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/03.jpg' , 'Hombre remando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El r&iacute;o no necesita que lo empujes.
										</p>
									</div>
									<a href="ensenanzas" class="box-link"></a>
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">&Aacute;rboles</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/04.jpg' , '&Aacute;rboles' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											El sol del mediod&iacute; no da sombra.
										</p>
									</div>
									<a href="ensenanzas" class="box-link"></a>
								</article>

								<article class="box box-story bg-box-1">
									<div class="title-container">
										<h2 class="title">Monje caminando</h2>
									</div>
									<div class="box-image">
										{{ HTML::image('images/stories/05.jpg' , 'Monje caminando' , array('class'=>'story-image')) }}
									</div>
									<div class="description-container">
										<p class="description">
											No busquen el camino en lugares lejanos ni en los dem&aacute;s.
										</p>
									</div>
									<a href="ensenanzas" class="box-link"></a>
								</article>

							</div>
						</div>
					</div>
				</div>
			</div>





			<div class="row loto-container">
				<div class="col-md-6 video-container">
					<div class="row no-margin-bottom">
						<div class="col-md-10 col-md-push-1">
							<h1 class="title-story">Videos</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/QlD-HWpvW40/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/QlD-HWpvW40"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=QlD-HWpvW40">Una taza de Zen</a>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-md-push-1">
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
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/PKjDHiMY17Y/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/PKjDHiMY17Y"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=PKjDHiMY17Y">Aprovecha el momento</a>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-md-push-1">
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
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/t3HMmmjtKFI/0.jpg" width="100%">
								<button type="button" class="video-button" data-toggle="modal" data-target=".bs-example-modal-lg" data-src="http://www.youtube.com/embed/t3HMmmjtKFI"></button>
							</div>
							<div class="title-video">
								<p>
									<a class="link" target="_blank" href="https://www.youtube.com/watch?v=t3HMmmjtKFI">Meditar en un minuto</a>
								</p>
							</div>
						</div>
						<!-- <div class="col-md-5 col-md-push-1">
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
				<div class="col-md-6 text-container">
					<div class="row">
						<div class="col-md-10 col-md-push-1">
							<h1 class="title-story">Textos</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-push-1">
							<ul class="texts-list">
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
									<p class="abstract">Abstract del texto para que se sepa de que trata.</p>
								</li>
								<li><a class="link" href="">Las ense&ntilde;anzas de Buda</a>
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
				<div class="col-md-8">
					<div class="col-md-5">
						<div class="rights">
							<span><a href="http://www.tallerterapiazen.com.ar">Taller Terapia Zen</a></span>
						</div>
					</div>
					<div class="col-md-7">
						<div class="designer">
							<p>Dise&ntilde;o y desarrollo: 	<a target="_blank" href="http://www.facundotomasek.com.ar">Facundo P&eacute;rez Tomasek</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="social">
						<div class="col-md-6">
							<span class="follow">
								Seguinos en
							</span>
						</div>
						<div class="col-md-6">
							<a target="_blank" href="http://www.facebook.com" class="facebook"><span class="icon icon-facebook"></span></a>
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
