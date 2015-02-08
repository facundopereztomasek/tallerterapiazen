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
				<div class="col-md-9">
					<div class="posts">
						<div class="post new-post">
							<div class="do-post">
								<span class="invitation">Escribe tu pregunta o deja un mensaje</span>
								<button type="button" id="show_form_post" class="btn btn-primary btn-dynamic" data-toggle="modal" data-target=".bs-example-modal-lg">Escribir Mensaje</button>
							</div>
							<form action="#" class="form-post">
								<div><input type="text" class="input-name" placeholder="Nombre"></div>
								<div><textarea name="" class="input-message" id="" cols="30" rows="10" placeholder="Mensaje"></textarea></div>
								<div><button type="submit" id="send_post" class="btn btn-primary send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Enviar</button></div>
							</form>
						</div>
						@foreach( $respuestas as $respuesta )
							<dl class="post">
								<dt class="question">
									<strong class="post-author">{{{ $respuesta->mensaje->nombre }}}</strong>
									<time class="post-time">( {{{ $respuesta->mensaje->created_at }}} )</time>
									<p class="post-content">
										{{{ $respuesta->mensaje->texto }}}
									</p>
								</dt>
								<dd class="answer">
									<strong class="post-author">Gustavo</strong>
									<time class="post-time">{{{ $respuesta->created_at }}}</time>
									<p class="post-content">
										{{{ $respuesta->texto }}}
									</p>
								</dd>
							</dl>
						@endforeach

						
					</div>

				</div>

				<div class="col-md-3">
					<div class="contact-info">
						<h2 class="title">
							Informaci&oacute;n de contacto
						</h2>
						<dl class="info-list">
							<dt class="info-type">E-mail</dt>
							<dl class="info-data"> <a class="link" href="mailto:contacto@tallerterapiazen.com.ar">contacto@tallerterapiazen.com.ar</a></dl>
							<dt class="info-type">Skype</dt>
							<dl class="info-data">tallerterapiazen</dl>
							<dt class="info-type">Tel&eacute;fono</dt>
							<dl class="info-data">1-234-5678</dl>
						</dl>
					</div>
				</div>

			</div>

		</div>
	</main>
</body>
</html>
