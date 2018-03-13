
<link rel="stylesheet" type="text/css" href="css/header.css">
	<?php include ("/opt/lampp/htdocs/proyectoUniversidad/admin/config.php");
		?>
	
	<div id="container-header">
		<div><a href="<?php $ruta?>?p=1"><img id=logo src="imagenes/cruzroja.png"></a></div>
		
	<div id="header-index">
	
	<form name="busqueda" id="header-arriba" action="<?php echo $ruta ?>/buscar.php">
			  <input class="busqueda-input" name="busqueda" placeholder="Buscar...">
				<button id="button-buscar" type="submit">Buscar</button>
	</form>			
			
		<a href="login.php"><button type="button" id="button">LOGIN</button></a>
		<div id="fondo-navegacion">
		<ul class="nave">
				<li><a href="index.php">INICIO</a></li>
				<li><a href="">INSTITUCION</a>
					<ul>
						<li><a href="">HISTORIA</a></li>
						<li><a href="">FILOSOFIA</a></li>
						<li><a href="">ESTRUCTURA</a></li>
						<li><a href="">EL EMBLEMA</a></li>
						<li><a href="">DIRECCIONES NACIONALES</a></li>
						<li><a href="">MOVIMIENTO INTERNACIONAL</a></li>
					</ul>
				</li>
				<li><a href="">SERVICIOS</a>
					<ul>
						<li><a href="">SECCIONALES</a></li>
						<li><a href="">EMERGENCIAS</a></li>
						<li><a href="">PROGRAMAS Y PROYECTOS</a></li>
                        <li><a href="newpacient.php">REGISTRO DE PACIENTE</a></li>
						</ul>
				</li>
				<li><a href="volunteer.php">VOLUNTARIADO</a></li>
				<li><a href="">AYUDAS Y DONACIONES</a></li>
			<li><a href="">INFORMACION</a>
			<ul>
				<li><a href="">NOTICIAS</a></li>
				<li><a href="">VIDEOS</a></li>
				<li><a href="">IMAGENES</a></li>
				<li><a href="">PREGUNTAS</a></li>
				</ul>
				</li>	
			<li><a href="contact.php">CONTACTENOS</a></li>
			</ul>
			</div>
		</div>
		
		</div>
		<div class="borrar"></div>

		
