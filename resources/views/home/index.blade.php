
<!DOCTYPE html>
<html>
<head>
	<title></title>

{!! Html::style('css/fonts-google.css') !!}
{!! Html::style('bower_components/bootstrap/css/bootstrap.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
	@yield('css')
	<style media="screen">
	*{
		margin:0px;
		padding: 0px;
		font-family: sans-serif;
		color: #fff;
	}
	#slidebar{
		position: fixed;
		width: 1000px;
		height: 100%;
		background-color: #990000;
		left: -1000px;
		transition: all 500ms linear;
	}
	#slidebar.active{
		left: 0px;

	}

	#slidebar ul li{
		color: rgb(230,230,230,0.9);
		list-style: none;
		padding:10px 10px;
		width: 90%;
		height:55px;
		border-bottom: 1px solid #990000;
		overflow: hidden;
		border-bottom: 1px solid rgba(100,100,100,0.3);

	}
	div.barra{
		position: absolute;
		height: 35px;
		width: 0px;
		background-color: #fff;
		opacity: .4;
		-webkit-transition: width .2s;
	}

	li:hover div.barra{
		width:950px;
		cursor: pointer
	}

	p.menu{
		position: relative;
		padding:10px;
		padding-left: : 25px;
		float:left;
		color:white;
		/*opacity: .6;*/
		font-size: 1.0em;
		-webkit-transition: opacity .2s;
	}
	#slidebar .toggle-btn{
		position: absolute;
		left: 1030px;
		top: 20px;
		cursor: pointer;
	}
	#slidebar .toggle-btn span{
		display: block;
		width: 30px;
		height: 5px;
		background: #151719;
		margin: 5px 0px;
	}
	</style>
</head>

<body>

	<div id="slidebar">
		<div class="toggle-btn" onclick="toggleSlidebar()">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
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
