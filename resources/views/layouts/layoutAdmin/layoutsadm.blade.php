<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
<script type="text/javascript">
	function toggleSlidebar(){
		document.getElementById("slidebar").classList.toggle('active');
	}
</script>
