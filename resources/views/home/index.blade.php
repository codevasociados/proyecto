
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
		<img src="..." alt="..." class="img-circle">
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
