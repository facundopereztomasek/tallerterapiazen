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
	{{ HTML::script('jquery-placeholder/jquery.placeholder.min.js'); }}
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
</head>
<body class="psicoterapia" data-section="psicoterapia">
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
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
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
						<h2 class="title">Psicoterapia v&iacute;a Skype</h2>
						<div class="row separator">
							<div class="col-md-8 no-gutter">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Lic. Gustavo Dominguez
								</p>
							</div>
						</div>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Contactar</button>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Psicoterapia v&iacute;a Skype</h2>
						<div class="row separator">
							<div class="col-md-8 no-gutter">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Lic. Gustavo Dominguez
								</p>
							</div>
						</div>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Contactar</button>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<article class="banner bg-taller-1 clearfix">
						<h2 class="title">Psicoterapia v&iacute;a Skype</h2>
						<div class="row separator">
							<div class="col-md-8 no-gutter">
								<p class="paragraph">
									Siddharta, despu&eacute;s de casi morir de hambre a causa de un estricto ascetismo, se dio cuenta de que la moderaci&oacute;n entre los extremos de la experiencia sensorial.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<p class="tip">
									Lic. Gustavo Dominguez
								</p>
							</div>
						</div>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Contactar</button>
					</article>
				</div>
			</div>


		</div>
	</main>

	<!-- MODALES -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="title-container">
					<p class="title">Psicoterapia v&iacute;a Skype</p>
				</div>
			<form class="modal-form clearfix" action="">
				<p class="subtitle">Formulario de contacto</p>
				<div class="input-container"><input type="hidden" value="taller1"></div>
				<div class="input-container required"><input name="firstname" type="text" placeholder="nombre"></div>
				<div class="input-container required"><input name="lastname" type="text" placeholder="apellido"></div>
				<div class="input-container required"><input name="email" type="text" placeholder="e-mail"></div>
				<div class="input-container half-input clearfix"><input name="phone" type="text" placeholder="tel&eacute;fono"><input name="skype" type="text" placeholder="skype"></div>
				<div class="input-container"><textarea name="message" id="" cols="30" rows="10" placeholder="mensaje"></textarea></div>
				<div><button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Enviar</button></div>
				<a href="#" class="cancel" data-dismiss="modal" aria-label="Close">Cancelar</a>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
