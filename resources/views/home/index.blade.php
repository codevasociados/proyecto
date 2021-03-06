
<!DOCTYPE html>
<html>
<head>
	<title></title>

{!! Html::style('css/fonts-google.css') !!}
{!! Html::style('bower_components/bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
{!! Html::style('css/style_layout.css') !!}
{!! Html::style('css/csshake.css') !!}
{!! Html::style('css/hover/component.css') !!}
{!! Html::style('css/hover/default.css') !!}

	@yield('css')
<style media="screen">
.boton1{
	width: 300px;
	height: 100px;
	background-color:#789f07;
	transition: all 500ms linear;
	border-radius: 30px;
}
.boton1:hover{
	background-color:#baf90a;
	color: #000;
}
.boton2{
	width: 300px;
	height: 100px;
	background-color:#046a8a;
	transition: all 500ms linear;
	border-radius: 30px;

}
.boton2:hover{
	background-color:#0eb1e4;
	color: #000;
}
.boton3{
	width: 300px;
	height: 100px;
	background-color:#6c00c1;
	transition: all 500ms linear;
	border-radius: 30px;
}
.boton3:hover{
	background-color:#be06d5;
	color: #000;
}

body {
	position: fixed;
	left: 0;
	right: 0;
	z-index: 1;
	display: block;
	background-image:url("imagen/darsalud.jpg");
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 100%;
}
.icono{
	padding-top: 7px;
  padding-left: 7px;
  padding-right: 7px;
  padding-right: 7px;
  margin-right: 7px;
	transition: all 500ms linear;
}


</style>
</head>
<div id="blur" class="blur">

</div>
<div class="slidebar" id="slidebar">
		<div class="toggle-btn" onclick="toggleSlidebar()">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<p class="text-center"><img style="border: 5px solid #fff; margin-top: 10px;" src="imagen/male.png" alt="..." class="img-circle" width="10%">
			<br>
			Nombre de Usuario
		</p>

		<ul>
			<li>
				<div class="barra"></div>
				<p class="menu">Inicio</p>
			</li>
			<li>
				<div class="barra"></div>
				<p class="menu">Acerca de</p>
				<li>
					<div class="barra"></div>
					<p class="menu">Contactos</p>
				</li>
		</ul>
		<form class="form-horizontal" role="form">
			<div class="col-lg-12">
      <button  class="boton1" type="button" class="btn btn-default"><p style="padding-left:20px;"class="text-left">PERSONAL</p> <span style="font-size: 4.0em;" class="glyphicon glyphicon-user"></span></button>
			<button  class="boton2" type="button" class="btn btn-default"><p style="padding-left:20px;"class="text-left">PERSONAL</p> <span style="font-size: 4.0em;" class="glyphicon glyphicon-stats"></span></button>
			<button class="boton3" type="button" class="btn btn-default"><p style="padding-left:20px;"class="text-left">PERSONAL</p> <span  style="font-size: 4.0em;" class="glyphicon glyphicon-shopping-cart"></span></button>
    </div>
		</form>
	</div>


	<div class="menu2" id="menu2">
	<div class="icono">
	<div class="shake-rotate shake-constant">
		<span style="font-size: 2.5em; padding-right:7px; " class="glyphicon glyphicon-user"></span>
	</div>
		
		<span  style="font-size: 2.3em; padding-right:7px; " class="glyphicon glyphicon-globe"></span>
		<span style="font-size: 2.3em; padding-right:7px; " class="glyphicon glyphicon-comment"></span>
		<span style="font-size: 2.3em; padding-right:7px; " class="glyphicon glyphicon-calendar"></span>
		<span style="font-size: 2.3em; padding-right:7px; " class="glyphicon glyphicon-off"></span>	

	</div>



	</div>

<body class="body">



	<div class="content">

	</div>
</body>

</html>

<!--Recursos de la animacion de carga de pagina!-->
	<script type='text/javascript'>
			window.onload = detectarCarga;
			function detectarCarga(){
				document.getElementById("imgLOAD").style.display="none";
				document.getElementById("page").style.display="block";

			}
	</script>
    <!--  Elementos de javascript
    *   Bootstrap, material-design
     -->
	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
 	{!! Html::script('bower_components/moment/min/moment.min.js') !!}

	 {!! Html::script('bower_components/bootstrap/js/bootstrap.min.js') !!}
	 {!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	 {!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}

	 {!! Html::script('js/hover/componet.js') !!}
	 {!! Html::script('js/hover/modernizr.cutom.js') !!}

	 @yield('scripts')
    <script type="text/javascript">
      $(document).on('ready', function(){
        $.material.init();
      });
    </script>
		<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function(){
				$(".alerta").fadeIn(2500); },0000);
			});
		$(document).ready(function() {
			setTimeout(function(){
				$(".alerta").fadeOut(2500); },5000);
			});
		</script>
<script type="text/javascript">
	function toggleSlidebar() {
		document.getElementById("slidebar").classList.toggle('active');
		document.getElementById("blur").classList.toggle('active');
	}
</script>
<script type="text/javascript">
$(function() {
$( ".body" ).draggable({ containment: 'parent' });
});
</script><script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript">
</script>
