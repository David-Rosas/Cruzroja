<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Cruz Roja Barcelona</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<?php include ("./admin/config.php"); ?>

<div class="contenedor-noticias-single">

  
	<div class="post-single">
	<article >
		<h2 class="titulo-single"><?php echo $post['titulo']?></h2>
		<p class="fecha"><?php echo fecha($post['fecha'])?></p>
		<img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="<?php echo $post['titulo']?>">
		<p class="extracto-single"><?php echo nl2br($post['texto']);?></p>
				</article>
	</div>
		<div id="ladoDerecho-index-single"></div>
	</div>

</div>

</body>
</html>