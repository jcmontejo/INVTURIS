 <!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Inventario Turístico - CHIAPAS</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSkB3uvifGeGI2UEQUzOSXmy0V7XMDEhA"
  	type="text/javascript"></script>

 	<script src="js/gmaps.js"></script>
  	<style type="text/css">
    #map {
      width: 100%;
      height: 600px;
    }
  </style>
</head><!--/head-->
<body>
  <!-- Login -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="contact-form-section">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Iniciar sesión</h4>
      </div>
      <div class="modal-body">
       {!! Form::open(['route' => 'access.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Correo</label>
	    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Contraseña</label>
	    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
	  </div>
	  

	  <button type="submit" class="btn btn-primary ">Entrar</button>
	{!! Form::close() !!}

      </div>

    </div>

  </div>
</div>
  
</div>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.html"><h1><img src="images/logo1.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="{{ url('/')}}">INICIO</a></li> 
						<li class="scroll"><a href="{{ url('/places')}}">Atractivos</a></li>
						<li class="scroll"><a href="#services">ESTADISTICAS</a></li> 
						<li class="scroll"><a href="#our-team">ACERCA DE</a></li> 
						<li class="scroll"><a data-toggle="modal" data-target="#login">Iniciar Sesión</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
@yield('content')

						

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 
	<script>
    var map = new GMaps({
      el: '#map',
      lat: 16.7569317,
      lng: -93.12923527777777,
      zoom: 7
    });
    map.addMarker({
	  lat: 17.483334,
	  lng: -92.033333,
	  title: 'Palenque',
	  click: function(e) {
	    alert('Estas en palenque');
	  }
	});
	map.addMarker({
	  lat: 16.7021616,
	  lng: -93.00813779999999,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Chiapa de Corzo	</p>'
		}
	});
	map.addMarker({
	  lat: 16.7516009,
	  lng: -93.1029939,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Tuxtla Gutiérrez</p>'
		}
	});
	map.addMarker({
	  lat: 16.7370359,
	  lng: -92.6376186,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en San Cristobal de las casas</p>'
		}
	});
	map.addMarker({
	  lat: 16.7549709,
	  lng:-93.0666981,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Comitan de Dominguez</p>'
		}
	});
	map.addMarker({
	  lat: 16.9087202,
	  lng:-92.0943704,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Ocosingo</p>'
		}
	});
	map.addMarker({
	  lat: 16.1374011,
	  lng:-93.87283539999999,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Tonala</p>'
		}
	});
	map.addMarker({
	  lat: 14.9055567,
	  lng:-92.26341359999998,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en Tapachula</p>'
		}
	});
	map.addMarker({
	  lat: 16.8187141,
	  lng:-93.06918739999998,
	  title: 'Palenque',
	  infoWindow: {
		  content: '<p>Estas en el cañon del sumidero</p>'
		}
	});
  </script>
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>