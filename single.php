<html>
<head>

<title>Cruz Roja Barcelona</title>

</head>
<body>
	<div id="container-body">
<?php include ("header.php"); ?>
<?php include ("/opt/lampp/htdocs/proyectoUniversidad/admin/config.php"); ?>
<?php include ("functions.php"); ?>
		
<?php
$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if(!$conexion){
	header('Location: error.php');
}
if(empty($id_articulo)){
	header('Location: index.php');
}
$post = obtener_post_por_id($conexion, $id_articulo);
if (!$post){
	header('Location: index.php');
}
$post = $post[0];

?>
<?php include("views/single.view.php");?>
<!-- final de pagina-->
<?php include("footer.php"); ?>
</div>

</body>
</html>

