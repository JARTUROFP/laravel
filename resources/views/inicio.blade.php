@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
   <div class="item active">
     <img src="{{asset('img/1.png')}}" alt="Los Angeles" style="width:100%;">
   </div>
      
   <div class="item">
      <img src="{{asset('img/2.png')}}"  alt="Chicago" style="width:100%;">
   </div>

   <div class="item">
      <img src="{{asset('img/3.png')}}"  alt="New york" style="width:100%;">
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
	</div>

      <div class="jumbotron">
			<h1>Centros de Atención y</h1>
			<h1>Cuidado Infantil (CACI)</h1>
   
			<br>
		 
			<p>Los Centros de Atención y Cuidado Infantil de la Secretaría de Finanzas que administra el Gobierno de la Ciudad de México a través de la Subsecretaría de Administración y Capital Humano y la Dirección General de Desarrollo Humano y Profesionalización, proporciona sus servicios a las hijas e hijos de las madres y padres trabajadores del Gobierno de la Ciudad de México basificados con dígito sindical. Así mismo de conformidad con la CIRCULAR SFCDMX/SSACH/DGDHP/003/2018 desde el 8 de enero del 2018, gozan del servicio los trabajadores de base sin dígito sindical, nómina 8 y personal de estructura del ámbito central y de los Órganos Políticos Administrativos del Gobierno de la Ciudad de México. En el rango de edad de los 43 días a los 5 años 11 meses en sus diferentes salas:</p>	  



<div style="font-size:15px; " id="texto_segunda_fila">
                  <h2>Contando con personal profesional en las siguientes áreas técnicas: </h2>
                </div>


 
<ul class="list-unstyled">
  <li class="media">
  <img class="d-flex mr-3" style="height: 150px; "  "font-size:105px; padding: 8px;" src="{{asset('img/pedagogia.png')}}" alt="pedagogia">
   <div style="background-color:#E90A8E;" class="media-body">
   <h2 style="color: #ffffff;"   ><br>
Le corresponde la aplicación y supervisión de los Programas Educativos vigentes que favorezcan el desarrollo de habilidades, conocimientos y destrezas para que los infantes adquieran las competencias para la vida.</h2><br>

         <h3  style="color: #ffffff;" class="mt-0 mb-1 font-weight-bold">
        A los menores que cursan 1º , 2º y 3º de preescolar, diario se les imparte una clase de inglés.
       </h3><br>
    </div>
    <br>
  </li>


  <li class="media">
    <img class="d-flex mr-3" style="height: 150px;" src="{{asset('img/nutricion.jpg')}}" alt="pedagogia">
    <div style="background-color:#33AFE3;" class="media-body">
   <h2 style="color: #ffffff;"><br>
Le corresponde la aplicación y supervisión de los Programas Educativos vigentes que favorezcan el desarrollo de habilidades, conocimientos y destrezas para que los infantes adquieran las competencias para la vida.</h2><br>

         <h2  style="color: #ffffff;" class="mt-0 mb-1 font-weight-bold">
        Se les proporciona un desayuno y comida balanceada.
        </h2><br>
    </div><br>
   
  </li>

  <li class="media">
    <img class="d-flex mr-3" style="height: 150px;" src="{{asset('img/medico.png')}}" alt="pedagogia">
    <div style="background-color:#662483;" class="media-body">
   <h2 style="color: #ffffff;"><br>

Prevenir los padecimientos mas frecuentes y contribuir a que los infantes se mantengas en las mejores condiciones de salud, mediante la aplicación de programas de medicina preventiva y actividades de educación higiénica, así como la vigilancia permanente de la salud de los menores durante su estancia en el CACI.
</h2><br>

         <h2  style="color: #ffffff;" class="mt-0 mb-1 font-weight-bold">
        
Participación de campañas de vacunación
</h2><br>
    </div>
    <br>
  </li>

  <li class="media">
    <img class="d-flex mr-3" style="height: 150px;" src="{{asset('img/psicologia.png')}}" alt="pedagogia">
    <div style="background-color:#00A19A;" class="media-body">
   <h2 style="color: #ffffff;"><br>
Promover la salud mental y el desarrollo emocional de los infantes, mediante la aplicación de
programas que les permita adquirir confianza y seguridad en sí mismos y proporcionar su óptima
incorporación social.

</h2><br>

         <h2  style="color: #ffffff;" class="mt-0 mb-1 font-weight-bold">
         Apoyo por problemas de dinámica familiar.
Si se requiriera serealiza la canalización externa a otras instituciones.</h2><br>
    </div>
    <br>
  </li>
  <li class="media">
    <img class="d-flex mr-3" style="height: 150px;" src="{{asset('img/trabajo_social.png')}}" alt="pedagogia">
    <div style="background-color:#878787;" class="media-body">
   <h2 style="color: #ffffff;"><br>
Impulsa la interacción entre el CACI y el núcleo familiar a través de actividades y programas que favorezcan el óptimo desarrollo de los menores.
</h2><br>

         <h2  style="color: #ffffff;" class="mt-0 mb-1 font-weight-bold">
         Los menores están inscritos en el programa “Primera Infancia de 0 a 5 años”, establecido por el Sistema
para el Desarrollo Integral de la Familia de la CDMX.</h2><br>
    </div>
    <br>
  </li>





  
</ul>
</div>
@endsection

 
