<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::script('jquery/jquery-1.11.2.min.js'); }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js'); }}
	{{ HTML::style('bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('bootstrap/css/bootstrap-theme.min.css'); }}
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
</head>
<body class="taller">
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
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link selected'))}}</div>
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

					<article class="workshop-view">
						<header class="workshop-header">
							<h1 class="title">Taller Psicolog&iacute;a Zen</h1>
							<button class="btn btn-primary">Inscribirse</button>
						</header>
						<div class="row">
							<div class="col-md-8">
								<div class="contents">
									<p class="paragraph">Siddhartha es una novela alegórica escrita por Hermann Hesse en 1922 tras la primera guerra mundial. La misma relata la vida de un hombre hindú llamado Siddhartha. La obra ha sido considerada por el autor como un "poema hindú" y también, como la expresión esencial de su forma de vida. Muy leída en Oriente como tal, y menos en el mundo occidental.</p>
									<p class="paragraph">La novela presenta un registro muy original en el que se unifican elementos líricos y épicos, incluyendo narración y meditación, elevación de la más alta espiritualidad, y, al mismo tiempo, descarnada sensualidad.</p>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="data">
									<li><strong class="data-type">Fecha</strong><span class="data-info">19 de Mayo 2015</span></li>
									<li><strong class="data-type">Hora</strong><span class="data-info">08.45 hs.</span></li>
									<li><strong class="data-type">Lugar</strong><span class="data-info">Hip&oacute;lito Yrigoyen 2079</span></li>
									<li><strong class="data-type">Costo</strong><span class="data-info">$ 250</span></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<span class="title-section">Primer parte</span>
								<ul class="activity-list">
									<li class="activity">
										<span class="hours">08</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Bienvenida</span>
									</li>
									<li class="activity">
										<span class="hours">22</span><span class="colon">:</span><span class="minutes">11</span>
										<span class="activity-name">Bienvenida</span>
									</li>
									<li class="activity">
										<span class="hours">08</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Bienvenida</span>
									</li>

								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<span class="title-section">Primer parte</span>
								<ul class="activity-list">
									<li class="activity">
										<span class="hours">08</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Bienvenida</span>
									</li>
									<li class="activity">
										<span class="hours">08</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Bienvenida</span>
									</li>
									<li class="activity">
										<span class="hours">08</span><span class="colon">:</span><span class="minutes">45</span>
										<span class="activity-name">Bienvenida</span>
									</li>
								</ul>
							</div>
						</div>
					</article>

				</div>
			</div>



		</div>
	</main>
	<footer class="footer">

	</footer>
</body>
</html>
