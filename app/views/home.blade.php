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
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
</head>
<body class="home" data-section="home">
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
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link selected'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}</div>
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
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Taller: Introducci&oacute;n a la meditaci&oacute;n</h2>
						<div class="col-md-6">
							<p class="paragraph">
								Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
							</p>
							<p class="paragraph">
								Lograba incrementar sus energ&iacute;as, su lucidez, y su meditaci&oacute;n, que llam&oacute; Camino medio, comi&oacute; algo y se sent&oacute; bajo una higuera Bodhi.
							</p>
						</div>
						<a href="taller" class="btn btn-primary">Ver m&aacute;s</a>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<article class="box bg-box-1">
						<div class="title-container">
							<h2 class="title">¿Qu&eacute; es la mente?</h2>
						</div>
						<div class="description-container">
							<p class="description">
								Conoce qu&eacute; es y c&oacute;mo funciona la mente, y ten las herramientas que te permitir&aacute;n mejorar tu d&iacute;a a d&iacute;a.
							</p>
						</div>
						<a href="ensenanzas" class="box-link"></a>
					</article>
				</div>

				<div class="col-md-4">
					<article class="box bg-box-1">
						<div class="title-container">
							<h2 class="title">Aquietar la mente</h2>
						</div>
						<div class="description-container">
							<p class="description">
								Conoce qu&eacute; es y c&oacute;mo funciona la mente, y ten las herramientas que te permitir&aacute;n mejorar tu d&iacute;a a d&iacute;a.
							</p>
						</div>
						<a href="talleres" class="box-link"></a>
					</article>
				</div>

				<div class="col-md-4">
					<article class="box bg-box-1">
						<div class="title-container">
							<h2 class="title">Cese del sufrimiento</h2>
						</div>
						<div class="description-container">
							<p class="description">
								Conoce qu&eacute; es y c&oacute;mo funciona la mente, y ten las herramientas que te permitir&aacute;n mejorar tu d&iacute;a a d&iacute;a.
							</p>
						</div>
						<a href="psicoterapia" class="box-link"></a>
					</article>
				</div>


			</div>
		</div>
	</main>
</body>
</html>
