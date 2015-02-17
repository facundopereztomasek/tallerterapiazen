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
	{{ HTML::script('jquery-placeholder/jquery.placeholder.min.js'); }}
	{{ HTML::style('styles/fonts.css'); }}
	{{ HTML::style('styles/styles.css'); }}
	{{ HTML::script('scripts/app.js'); }}
</head>
<body class="contacto" data-section="contacto">
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
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
					<div class="col-md-2 divisor"><a class="link logo-circle" href="{{route('home')}}"><img src="images/logo-mini.png" alt="logo taller psicolog&iacute;a zen" width="70"></a></div>
					<div class="col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
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
							{{ Form::open( array('class'=>'form-post')) }}
								<div><input type="text" class="input-name" placeholder="Nombre" name="nombre"></div>
								<div><textarea name="texto" class="input-message" id="" cols="30" rows="10" placeholder="Mensaje"></textarea></div>
								<div><button type="submit" id="send_post" class="btn btn-primary send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Enviar</button></div>
							{{ Form::close() }}
						</div>
						@foreach( $respuestas as $respuesta )
							<dl class="post">
								<dt class="question">
									<strong class="post-author">{{{ $respuesta->mensaje->nombre }}}</strong>
									<time class="post-time">({{{ date("d-m-Y",strtotime($respuesta->mensaje->created_at)) }}})</time>
									<p class="post-content">
										{{{ $respuesta->mensaje->texto }}}
									</p>
								</dt>
								<dd class="answer">
									<strong class="post-author">Gustavo</strong>
									<time class="post-time">({{{ date("d-m-Y",strtotime($respuesta->created_at)) }}})</time>
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
	<!-- Feedback acciones -->
	@if( ISSET($feedback) )

		<!-- MODALES -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="title-container">
						<p class="title">Contacto</p>
					</div>
					<p class="modal-success">{{{ $feedback['mensaje'] }}}</p>
				</div>
			</div>
		</div>
		<script>
			$('.modal').modal('toggle');
		</script>
	@endif
</body>
</html>
