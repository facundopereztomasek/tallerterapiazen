<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::script('jquery/jquery-1.11.2.min.js'); }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
	{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('bootstrap/css/bootstrap-theme.min.css');}}
	{{ HTML::script('perfect-scrollbar/perfect-scrollbar.js'); }}
	{{ HTML::style('perfect-scrollbar/perfect-scrollbar.css'); }}
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
							<div class="site-logo"><img src="#" alt="logo taller psicolog&iacute;a zen" width="140"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<nav class="nav-bar clearfix">
					<!-- <a class="link selected" href="#">home</a> -->
					<div class="col-md-2 divisor"><a class="link" href="#"></a></div>
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link selected'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}</div>
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
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/QlD-HWpvW40/0.jpg" width="100%"></div>
							<div class="title-video">
								<p>
									<a class="link" href="#">Una taza de Zen</a>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/XVhhCu024B0/0.jpg" width="100%"></div>
							<div class="title-video">
								<p>
									<a class="link" href="#">Una taza de Zen</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/PKjDHiMY17Y/0.jpg" width="100%"></div>
							<div class="title-video">
								<p>
									<a class="link" href="#">Una taza de Zen</a>
								</p>
							</div>
						</div>
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/mQaY1Py4B70/0.jpg" width="100%"></div>
							<div class="title-video">
								<p>
									<a class="link" href="#">Una taza de Zen</a>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-push-1">
							<div class="video-preview-container"><img src="http://i.ytimg.com/vi/t3HMmmjtKFI/0.jpg" width="100%"></div>
							<div class="title-video">
								<p>
									<a class="link" href="#">Una taza de Zen</a>
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

	</footer>
</body>
</html>
