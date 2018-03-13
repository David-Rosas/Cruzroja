<?php 


if (isset($_GET['suscribete'])){
	$email = limpiarDatos($_GET['suscribete']);
	
		
	if($email ==''){
		?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca una email.
			</div>
			</div>
	<?php	

	}else{
	$statement = $conexion->prepare('SELECT * FROM suscribete WHERE email LIKE :email');
		$statement->execute(array(':email' => $email));
		
		$resultados = $statement->fetchAll();

		if($resultados){
			?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Ya usted  esta suscrito</strong>
			</div>
			</div>
	<?php	
		}else{
	$statement = $conexion->prepare('INSERT INTO suscribete (id, email) VALUES (null, :email)');

	$statement->execute(array(
		':email' => $email,
		)); 
      ?>
      <div id="container-body">
	<div class="alert alert-success">
  <strong>Exito!</strong> Usted a sido suscrito con exito.
</div>
</div>
<?php
}
}
}

?>
<link rel="stylesheet" type="text/css" href="css/footer.css">
<div id="contenedor-abajo">
<div class="pie">
          <div class="abajo-contenedor">
            <div id="parte-arriba">
            <form  method="GET" enctype="multipart/form-data" >
			  <label for="suscribete">SUSCRíBASE A NUESTRO BOLETíN</label>
				<input id="suscribete" name="suscribete" placeholder="pedro@mail.com">
				<button id="button2" type="submit">SUSCRIBIRSE</button>
              </form>
			  </div>
			  <div id="secciones-abajo">
              <div id="parte-izquierdo">
                <h5 class="h5derecho">SECCIONES</h5>
                <p class="pderecho"><a href="#">Quienes somos</a></p>
				<p class="pderecho"><a href="#">Nuestras actividades</a></p>
				<p class="pderecho"><a href="#">Dónde trabajamos</a></p>
				 <p class="pderecho"><a href="#">Guerra y derecho</a></p> 
              </div>
              <div id="parte-centro">
                <h5 class="h5derecho">ACCESO RAPIDO</h5>
                <p class="pderecho"><a href="#">Quienes somos</a></p>
				<p class="pderecho"><a href="#">Nuestras actividades</a></p>
				<p class="pderecho"><a href="#">Dónde trabajamos</a></p>
				 <p class="pderecho"><a href="#">Guerra y derecho</a></p> 
              </div>
			  <div id="footer-derecho">
			  <h5 class="h5derecho">REDES SOCIALES</h5>
			  <div class="redes">
				<p><a id="facebook" href="#"></a></p>
				<p><a id="instagram" href="#"></a></p>
				<p><a id="twitter" href="#"></a></p>
				<p><a id="google" href="#"></a></p> 
				</div>
            </div>
          </div>
          <div id="footer-derechos">
           <p> © 2017 Copyright Cruz Roja
            <a href="#!">Derechos legales</a></p> 
		</div>
		</div>	  
       </div>
            
		
</div>
	
	
	