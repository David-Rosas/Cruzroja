<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Cruz Roja Barcelona</title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<div id="container-body">

<?php include ("header.php");?> 
<?php include("admin/config.php"); ?>
<?php include ("functions.php"); 
 $conexion = conexion($bd_config);
        if(!$conexion){
 	header('Location: error.php');
        }
 $posts = obtener_post($blog_config['post_por_pagina'], $conexion);
 if(!$posts){
 	header('Location: error.php');
 }

?>

<?php
$imagenes = obtener_imagen($blog_config['imagen_por_pagina'], $conexion);
 if(!$imagenes){
 	header('Location: error.php');
 }
 ?>	

<?php
$sliders = obtener_sliders($blog_config['slider_por_pagina'], $conexion);
 if(!$sliders){
 	header('Location: error.php');
 }
 ?>	
<!-- Noticias recientes-->
	
<?php include("views/index.view.php");?>
<!-- final de pagina-->
<?php include("footer.php"); ?>
</div>
<script src="javascript/jquery.js"></script>
<script src="javascript/slider.js"></script>

</body>
</html>
