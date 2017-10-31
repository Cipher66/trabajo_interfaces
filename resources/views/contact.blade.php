<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registrarse</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/velocimetro.jpg" alt="Mafolio" width="100px" height="100px"></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="registrarse">Registrarse</a></li>
          <li><a href="/#quienes_somos">Quienes somos</a></li>
          <li><a href="http://www.zubirimanteo.hezkuntza.net/web/guest/inicio">Web de Zubiri Manteo</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  -->
  </header>

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>Registrarse</h1>
        <!-- banner text -->
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="inner-description" class="section inner-description">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <p>Rellene este formulario para registrarse</p>

        @if ($errors->any())
          <div class="alert alert-danger">
            <p>Registro no completado, faltan elementos o están mal escrito</p>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach

              </ul>
          </div>
        @endif
      <div id="formulario">
        <form method="post" action="Datos_de_registro">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          Nombre: <br />
          <input name="Nombre" class="campos_formulario" id="nombre" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Introduce tu nombre" >
          <br />
          Apellido: <br />
          <input name="Apellido" class="campos_formulario" id="apellido" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Introduce tu apellido" >
          <br />
          Dirección: <br />
          <input name="Direccion" class="campos_formulario" id="email" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Introduce tu dirección" >
          <br />
          E-mail: <br />
          <input name="Email" class="campos_formulario" id="email" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Correo electrónico" >
          <br />
          <input type="submit" class="button_CSS" value="Enviar" >
        </form>
      </div>
    </div>
  </div>
</section>
<!-- description text section -->
<!-- footer -->
<footer class="section footer">
  <center><h3><b>Contactos de redes sociales</b></h3></center>
  <br />
  <a href="https://www.facebook.com/">
    <img src="images/facebook_like.png" width="50px" height="50px" title="Facebook">
  </a>
  <a href="https://twitter.com/?lang=en">
    <img src="images/twitter_tuit.png" width="50px" height="50px" title="Twitter">
  </a>
  <a href="https://www.youtube.com/">
    <img src="images/youtube_channel.png" width="50px" height="50px" title="Youtube">
  </a>
  <a href="https://www.instagram.com/?hl=en">
    <img src="images/instagram_profile.png" width="50px" height="50px" title="Instagram">
  </a>
</footer>
<!-- footer -->

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/jquery.contact.js"></script> 
<script src="js/main.js"></script>
</body>
</html>