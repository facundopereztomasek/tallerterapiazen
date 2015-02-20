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
						{{link_to_route('admin', 'Administrar',null,array('class' => 'link'))}}
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
			{{ Form::open() }}
				<div class="row">
					<div class="col-xs-4 col-md-4 col-md-offset-4 form-login">
						<div class="col-xs-12 col-md-12">
							<h1 class="title">Login</h1>
							<div class="form-group">
							    <input type="text" name="usuario" class="form-control" placeholder="Usuario">
							</div>
							<div class="form-group">
							    <input type="password" name="password" class="form-control" placeholder="Contraseña">
							</div>
							<br/>

							{{$errors->first('usuario')}}
							{{$errors->first('password')}}
						</div>

						<div class="col-xd-7 col-md-7">
							{{link_to_route('generar_password', 'Olvide mi contraseña',null,array('class'=>'btn btn-default'))}}
						</div>
						<div class="col-xd-5 col-md-5">
							<input type="submit" value="Enviar" class="btn btn-primary"/>
						</div>
<!-- <<<<<<< HEAD
=======
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<input type="submit" value="Enviar" class="btn btn-success"/>
					</div>
					<div class="col-md-2">
						{{link_to_route('generar_password', 'Olvide mi contraseña',null,array('class'=>'btn btn-default'))}}
>>>>>>> 1d7dbd370b7beecb25d82bab01038dadfa839c5c -->
					</div>

				</div>
						@if( isset($fail) )
							<div class="form-group">
								<p class="bg-danger">Usuario y/o contraseña incorrectos!</p>
							</div>
						@endif
			{{ Form::close() }}
		</div>
	</main>
</body>
</html>
