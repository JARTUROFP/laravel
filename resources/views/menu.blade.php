
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


  <link href="{{ asset('css/nav.css')}}" rel="stylesheet"/>
  <link href="{{ asset('css/footer.css')}}" rel="stylesheet"/>
	
</head>
<body>
	
<div class="container">
<h2 style="padding-left:16px">
<img src="https://cdmxassets.s3.amazonaws.com/media/img-recibos/LOGO.svg" width="370px;"></h2>
<!-- Static navbar -->
	
<div class="topnav" id="myTopnav">
  <a style="background-color: #00B140; margin-left: 35px; margin-bottom: 23px;" class="active"></a>
  <a href="inicio">INICIO</a>		
  <a href="nosotros">NOSOTROS</a>
  <a href="nosotros_caci">NOSOTROS CACI</a>
  <a href="requisitos">REQUISITOS</a>
  <a href="tramites">TRÁMITES</a>
  <a href="civil_proteccion">PROTECCIÓN CIVIL</a>		
  <a href="contactenos">CONTACTENOS</a>	

<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

</div>
	
	

<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner1.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner2.jpg" alt="Chicago" style="width:100%;">
      </div>    
      <div class="item">
        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/banner3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>-->
</div>	
	
<div class="container">
@yield('mycontent')
</div>
	<div class="container">
	<div style="text-align: center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">
	<h5>SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</h5>
    <h5>DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</h5>
	</div>
	</div>	
	<br>

	<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
			  <div>
     			 <p>
                    |<a style="color:#00b140;" href="http://caci.ochentayocho.net/" title="INICIO">INICIO</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/nosotros/" title="NOSOTROS">NOSOTROS</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/nuestros_caci/" title="NUESTROS CACI">NUESTROS CACI</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/requisitos/" title="REQUISITOS">REQUISITOS</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/tramites/" title="TRAMITES">TRAMITES</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/proteccion_civil/" title="PROTECCIÓN CIVIL">PROTECCIÓN</a>|
                    |<a style="color:#00b140;" href="http://caci.ochentayocho.net/contactenos/" title="CONTACTENOS">CONTACTENOS</a>|
     			</p>
            <p>©Copyright Plataforma CACI, Todos los derechos reservados Gobierno CDMX / Teléfonos 12345678 / ext: 123 - Email: caci@cdmx.com</p>
     		</div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li>SIGUENOS EN:</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
			  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>
	
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	
</body>
</html>
