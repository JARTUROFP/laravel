@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>

#regForm {
  background-color: #f5f5f0;
  margin: 100px auto;
   font-family: Arial, Helvetica, sans-serif;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
  border: 1px solid #00b140;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
  color: #000000;

}

button {
  background-color: #00b140;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #00b140;
}
</style>


<body>

<form id="regForm" action="action_page.php">

   <img src="{{asset('img/Logo_CDMX.png')}}"  alt="Chicago" style="width:30%;">
      <img src="{{asset('img/Logo_Dependencia_n.png')}}"  alt="Chicago" style="width:15%;">

       <h1>Centros de Atención, Cuidado Infantil de la Secretaria de Administración y Finanzas del Gobierno de la Ciudad de México </h1>
  <br><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Periodo de Inscripción 
    <br>
    <p><input placeholder="Nombre de la Menor" oninput="this.className = ''" name="nombre" ></p>
    <p><input placeholder="Apellidos" oninput="this.className = ''" name="apellidos"></p>
  </div>
  <div class="tab">Fecha de Ingreso
    <br>
 <label for="birthday">Fecha de Nacimiento:</label>
  <input type="date" id="birthday" name="birthday">
  </div>
<br>


  <div class="tab">Nombre de las Padres o Tutor:
        <p><input placeholder="Nombre de las padres" oninput="this.className = ''" name="nombre" ></p>
    <p><input placeholder="Apellidos" oninput="this.className = ''" name="apellidos"></p>
    <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>


<h1>Delegaciones:</h1>
  <div class="col-75">
     <select id="country" name="country">
     
          <option value="australia">Iztapalapa</option>
          <option value="canada">Tlalpan</option>
          <option value="usa">Álvaro Obregón</option>
          <option value="australia">Iztacalco</option>
          <option value="canada">Coyoacán</option>
          <option value="usa">Xochimilco</option>
          <option value="australia">Tláhuac</option>
          <option value="canada">Benito Juárez</option>
          <option value="usa">Venustiano Carranza</option>
          <option value="australia">Gustavo A. Madero</option>
          <option value="canada">Milpa Alta</option>
          <option value="usa">Azcapotzalco</option>
          <option value="australia">Miguel Hidalgo</option>
          <option value="canada">Cuauhtémoc</option>
          <option value="usa">ÁCuajimalpa de Morelos</option>
        </select>

  </div>
    <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Teléfono" oninput="this.className = ''" name="telefono"></p>

     <label for="appt"> <p>Horario</p></label>
  <input type="time" id="appt" name="appt">

  <br><br>
  </div>

  <div class="tab">Nacimiento:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="mm"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>



  <div style="overflow:auto;">
    <div style="float:right;">
 
<h4>Reinscripción</h4>

      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Regresa</button>
   
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Acepta</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</body>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Acepta";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


@endsection






 
