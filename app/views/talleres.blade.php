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
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Introducci&oacute;n a la meditaci&oacute;n</h2>
						<div class="row separator">
							<div class="col-md-3 no-gutter">
								<ul class="data">
									<li>19 de Mayo 2015</li>
									<li>08.45 hs.</li>
									<li>Hip&oacute;lito Yrigoyen 2079</li>
								</ul>
							</div>
							<div class="col-md-6 col-md-pull-1">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="taller" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Introducci&oacute;n a la meditaci&oacute;n</h2>
						<div class="row separator">
							<div class="col-md-3">
								<ul class="data">
									<li>19 de Mayo 2015</li>
									<li>08.45 hs.</li>
									<li>Hip&oacute;lito Yrigoyen 2079</li>
								</ul>
							</div>
							<div class="col-md-6 col-md-pull-1">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="taller" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Introducci&oacute;n a la meditaci&oacute;n</h2>
						<div class="row separator">
							<div class="col-md-3">
								<ul class="data">
									<li>19 de Mayo 2015</li>
									<li>08.45 hs.</li>
									<li>Hip&oacute;lito Yrigoyen 2079</li>
								</ul>
							</div>
							<div class="col-md-6 col-md-pull-1">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Traer ropa c&oacute;moda
								</p>
							</div>
						</div>
						<a href="taller" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
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
</body>
</html>
