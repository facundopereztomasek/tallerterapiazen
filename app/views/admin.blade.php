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
<body class="admin" data-section="admin">
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
					<div class="col-xs-2 col-md-2 divisor">
						<a class="link landing-page" href="#"></a>
						{{link_to_route('admin', 'Administrar',null,array('class' => 'link inline'))}}
						<span>/</span>
						{{link_to_route('logout', 'Logout',null,array('class' => 'link inline'))}}
					</div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('home', 'home',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('ensenanzas', 'ense&ntilde;anzas',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('talleres', 'talleres',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('psicoterapia', 'psicoterapia',null,array('class' => 'link'))}}<div class="hover-link"></div></div>
					<div class="col-xs-2 col-md-2 divisor">{{link_to_route('contacto', 'contacto',null,array('class' => 'link selected'))}}<div class="hover-link"></div></div>
				</nav>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="posts">

						@foreach( $preguntas as $pregunta )

							<dl class="post">
								<dt class="question">
									<strong class="post-author">{{{ $pregunta['nombre'] }}}</strong>
									<time class="post-time">({{{ date("d-m-Y",strtotime($pregunta['created_at'])) }}})</time>
									<p class="post-content">
										{{{ $pregunta['texto'] }}}
									</p>
								</dt>

								@if( ISSET($pregunta['respuesta']) && count($pregunta['respuesta']) > 0 )

									<dd class="answer">
										<strong class="post-author">Gustavo</strong>
										<time class="post-time">({{{ date("d-m-Y",strtotime($pregunta['respuesta']['created_at'])) }}})</time>
										<p class="post-content">
											{{{ $pregunta['respuesta']['texto'] }}}
										</p>
										<dd class="do-answer">
											<div class="btn-group">
												<a href="{{ route('pregunta_borrar', $pregunta['id']) }}" class="btn btn-danger btn-left send-post">Eliminar Pregunta</a>
											</div>
										</dd>
									</dd>

								@else

									<dd class="do-answer">
										{{ Form::open( array('class'=>'form-reply') ) }}
											<input type="hidden" name="mensaje_id" value="{{{ $pregunta['id'] }}}" />
											<div><textarea name="texto" class="input-message" id="" cols="30" rows="10" placeholder="Escrib&iacute; la respuesta ac&aacute;"></textarea></div>
											<div class="btn-group">
												<button type="submit" id="send_post" class="btn btn-primary btn-right send-post" data-toggle="modal" data-target=".bs-example-modal-lg">Responder</button>
												<a href="{{ route('pregunta_borrar', $pregunta['id']) }}" class="btn btn-danger btn-left send-post">Eliminar Pregunta</a>
											</div>
										{{ Form::close() }}
									</dd>

								@endif

							</dl>

						@endforeach

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
	@if( $feedback || Session::get('feedback') )

		<!-- MODALES -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="title-container">
						<p class="title">Contacto</p>
					</div>
					@if( $feedback )
						<p class="modal-success">{{{ $feedback['mensaje'] }}}</p>
					@elseif( Session::get('feedback') )
						<p class="modal-success">{{ Session::get('feedback')['mensaje'] }}</p>
					@endif
				</div>
			</div>
		</div>
		<script>
			$('.modal').modal('toggle');
		</script>
	@endif

	<!-- MODALES -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="title-container">
					<p class="title">Psicoterapia v&iacute;a Skype</p>
				</div>
			{{ Form::open( array('route'=>'inscribirse_taller','class'=>'modal-form clearfix')) }}
				<p class="subtitle">Formulario de contacto</p>
				<div class="input-container"><input type="hidden" value="taller1"></div>
				<div class="input-container required"><input name="nombre" type="text" placeholder="nombre"></div>
				<div class="input-container required"><input name="apellido" type="text" placeholder="apellido"></div>
				<div class="input-container required"><input name="email" type="text" placeholder="e-mail"></div>
				<div class="input-container"><textarea name="mensaje" id="" cols="30" rows="10" placeholder="mensaje"></textarea></div>
				<div><button type="submit" class="btn btn-primary" >Enviar</button></div>
				<a href="#" class="cancel" data-dismiss="modal" aria-label="Close">Cancelar</a>
			{{ Form::close() }}
			</div>
		</div>
	</div>
</body>
</html>
