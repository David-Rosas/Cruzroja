<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="css/estilos.css">
</head>
<body>
<?php require '../header.php'; ?>
<div id="container-body">

<div class="contenedor-noticias">

<div class="noticias-centro">
 <h2 id="noti-centro">Panel de Control</h2>
 <div class="linea"></div>

<div class="post-nuevo">
	<article class="articulo-nuevo">
		<h2 class="titulo">Editar Articulo</h2>
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
			<input class="input-nuevo" type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
			<p></p>
			<input class="input-nuevo" type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
			<p></p>
			<textarea class="input-text" name="texto" value=""><?php echo $post['texto']; ?></textarea>
			<p></p>
			<input type="file" name="thumb">
			<input type="hidden" name="thumb_guardada" value="<?php echo $post['thumb']; ?>">
			<input class="sesion-btn" type="submit" value="Modificar Articulo">
			
		</form>
		</article>
	</div>
	
		
	</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Articulos</a></div>
	</div>
</div>
</div>

<?php require '../footer.php'; ?>
</body>
</html>
