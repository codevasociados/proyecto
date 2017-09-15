<style media="screen">
.boton1{
	width: 300px;
	height: 100px;
	background-color:#ace40e;
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
	background-color:#0eb1e4;
	transition: all 500ms linear;
	border-radius: 30px;

}
.boton2:hover{
	background-color:#62c7e7;
	color: #000;
}
.boton3{
	width: 300px;
	height: 100px;
	background-color:#0ee41d;
	transition: all 500ms linear;
	border-radius: 30px;
}
.boton3:hover{
	background-color:#52e40e;
	color: #000;
}

</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>

{!! Html::style('css/fonts-google.css') !!}
{!! Html::style('bower_components/bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
{!! Html::style('css/style_layout.css') !!}
	@yield('css')
</head>
<body>

	<div id="slidebar">
		<div class="toggle-btn" onclick="toggleSlidebar()">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<p class="text-center"><img style="border: 5px solid #fff; margin-top: 10px;" src="imagen/male.png" alt="..." class="img-circle" width="10%"></p>

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
      <button  class="boton1" type="button" class="btn btn-default"><span class="glyphicon glyphicon-user"></span><br>PERSONAL</button>
			  <button  class="boton2" type="button" class="btn btn-default"><span class="glyphicon glyphicon-stats"></span><br>INVENTARIO</button>
				  <button class="boton3" type="button" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span><br>VENTAS</button>
    </div>
		</form>
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
	}
</script>
