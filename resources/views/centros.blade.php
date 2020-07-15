@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
  
  <div class="item active">
     <img src="{{asset('img/11.png')}}" alt="Los Angeles" style="width:100%;">
   </div>
      
   <div class="item">
      <img src="{{asset('img/banner.png')}}"  alt="Chicago" style="width:100%;">
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


<br>
  <div class="container">
  <div style="text-align: center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">
<h5 style="color: #00b140;">CENTROS DE ATENCIÓN Y CUIDADO INFANTIL DE LA SECRETARÍA DE ADMINISTRACIÓN Y FINANZAS DEL GOBIERNO DE LA CIUDAD DE MÉXICO</h5>
</div>
</div>
<br>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>DOMICILIO</td>
      <td>TELEFONO</td>
    </tr>
    <tr>
      <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)
Col. Doctores C.P. 07620
Del. Cuauhtémoc</td>
      <td>55-88-33-20 y 
51-34-25-50</td>
    </tr>
    <tr>
      <td>Dr. Lavista No. 54 casi esquina Dr. Andrade
Col. Doctores C.P. 07620
Del. Cuauhtémoc</td>
      <td>55-78-76-76</td>
    </tr>
    <tr>
      <td>Jesús García No. 63
Col. Guerrero   C.P. 06300
Delegación Cuauhtémoc</td>
      <td>55-92-70-98 y 
55-66-19-29</td>
    </tr>
    <tr>
      <td>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller
Col. 24 de Abril C.P. 15980
Delegación Venustiano Carranza</td>
      <td>57-64-40-36 y 
55-52-03-63</td>
    </tr>
    <tr>
      <td>Plaza Benito Juárez No. 10
Col. Ramos Millán C.P. 08000
Delegación Iztacalco</td>
      <td>56-57-26-89</td>
    </tr>
   
  </tbody>
</table>


<br>











@endsection

 
