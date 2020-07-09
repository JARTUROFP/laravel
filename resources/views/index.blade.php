<!DOCTYPE html>
<html lang="en">
<head>
	<title>	CONTACTENOS </title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="bg-container-contact100" style="background-image: url(images/bg-01.png);">
		<div class="contact100-header flex-sb-m">
			<a href="#" class="contact100-header-logo">
			</a>
			<div>
				<button class="btn-show-contact100">
				CONTACTENOS 
				</button>
			</div>
		</div>
	</div> 
	
	<div class="container-contact100">
		<div class="wrap-contact100">
			<button class="btn-hide-contact100">
				<i class="zmdi zmdi-close"></i>
			</button> 
			<br>
            <div style="text-align-last: center;"> <img src="images/bg-05.svg" width="300px;" >
		
			</div>
			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input">
					<input id="name" class="input100" type="text" name="name" placeholder="Nombre y Apellidos *">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="Email válido *">
					<span class="focus-input100"></span>
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope m-b-5"></span>
					</label>
				</div>
               
				<div class="wrap-input100 validate-input">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Teléfono *">
					<span class="focus-input100"></span>
					<label class="label-input100" for="phone">
						<span class="lnr lnr-smartphone m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Tus comentarios aquí"></textarea>
					<span class="focus-input100"></span>
					<label class="label-input100 rs1" for="message">
						<span class="lnr lnr-bubble"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
					ENVIAR COMENTARIOS
					</button>
					<br>	
				    Nota: Todos los campos que poseen * son considerados como obligatorios, por lo tanto deben de ser llenados antes de enviar sus comentarios.
				</div>
			</form>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="js/main.js"></script>

	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
