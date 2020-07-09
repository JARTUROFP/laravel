
@extends('inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
<br>
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet"> 

<link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet"> 

<link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet"> 

<link href="{{ asset('css/util.css') }}" rel="stylesheet"> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet"> 


	<div class="container-contact100">

		<div class="wrap-contact100">
			<span class="contact100-form-symbol">
				<img src="images/icons/symbol-01.png" alt="SYMBOL-MAIL">
			</span>

			<form class="contact100-form validate-form flex-sb flex-w">
				<span class="contact100-form-title">
				<img  style="width: 730px;" src="{{ asset('img/bg-05.svg') }}">
				</span>

				<div class="wrap-input100 rs1 validate-input" >
					<input class="input100" type="text" name="name" required placeholder="Nombre y Apellidos">
					<span class="focus-input100"></span>
					<span class="barra"></span>
                          <div class="validation"></div>
				</div>

				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="email" required placeholder="Dirección de correo electrónico">
					<span class="focus-input100"></span>
					<span class="barra"></span>
                          <div class="validation"></div>
				</div>

				<div class="wrap-input100 validate-input">
					<textarea class="input100" type="text" name="message" required placeholder="Escríbenos un mensaje"></textarea>
					<span class="focus-input100"></span>
					<span class="barra"></span>
                          <div class="validation"></div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar
					</button>
				</div>
			</form>
		</div>
	</div>




   <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
   <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
   <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
   <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
   <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>

@endsection

 

