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
<body class="admin" data-section="admin">
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
					<div class="col-md-2 divisor">
						<a class="link landing-page" href="#"></a>
						{{link_to_route('admin', 'Administrar',null,array('class' => 'link'))}}
					</div>
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}</div>
					<div class="col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link selected'))}}</div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="posts">
						<dl class="post">
							<dt class="question">
								<strong class="post-author">Facundo Perez</strong>
								<time class="post-time">(27 - 01 - 2015)</time>
								<p class="post-content">
									Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!
								</p>
							</dt>
							<dd class="do-answer">
								<form action="#" class="form-reply">
									<div><textarea name="" class="input-message" id="" cols="30" rows="10" placeholder="Escrib&iacute; la respuesta ac&aacute;"></textarea></div>
									<div class="btn-group">
										<button type="submit" id="send_post" class="btn btn-primary btn-right send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Responder</button>
										<button type="submit" id="send_post" class="btn btn-danger btn-left send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar Pregunta</button>
									</div>
								</form>
							</dd>
						</dl>

						<dl class="post">
							<dt class="question">
								<strong class="post-author">Facundo Perez</strong>
								<time class="post-time">(27 - 01 - 2015)</time>
								<p class="post-content">
									Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!
								</p>
							</dt>
							<dd class="do-answer">
								<form action="#" class="form-reply">
									<div><textarea name="" class="input-message" id="" cols="30" rows="10" placeholder="Escrib&iacute; la respuesta ac&aacute;"></textarea></div>
									<div class="btn-group">
										<button type="submit" id="send_post" class="btn btn-primary btn-right send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Responder</button>
										<button type="submit" id="send_post" class="btn btn-danger btn-left send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Eliminar Pregunta</button>
									</div>
								</form>
							</dd>
						</dl>


					</div>

				</div>



			</div>

		</div>
	</main>
</body>
</html>
