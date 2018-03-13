
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet"  href="css/body.css">
<script src="javascript/jquery.js"></script>


<section class="slider-container">
    
		<ul id="slider" class="slider-wrapper">
            <?php foreach($sliders as $slider ): ?>
			<li class="slide-current">
			<img class="image-slider" src="<?php echo $ruta ?>/slider/<?php echo $slider['thumb']?>" alt="slider imagen 1">
			<div class="caption-slider">
			<h3 class="caption-title"><?php echo $slider['titulo']?></h3>
			<p><?php echo $slider['extracto']?></p>
			</div>	
			</li>
    <?php endforeach; ?>
			
	</ul>
	<!-- control slider-->
	<ul id="slider-controls" class="slider-controls">
	<li></li>
	<li></li>
	<li></li>
	<li></li>	
	</ul>
		
</section>

<div class="contenedor-noticias">

<div id="ladoIzquierdo-index">
	<a href="#"><img src=""></a>
</div>

<div class="noticias-centro">
   <h2 id="noti-centro">Noticias</h2>
<div class="linea"></div>
<?php foreach($posts as $post ): ?>
<div class="post">
	<article>
		<h3 class="titulo"><a href="single.php?id=<?php echo $post['id']?>"><?php echo $post['titulo']?></a></h3>
		<p class="fecha"><?php echo fecha($post['fecha'])?></p>
		<a href="single.php?id=<?php echo $post['id']?>">
			<img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="">
		</a>
		<p class="extracto"><?php echo $post['extracto']?></p>
		<a href="single.php?id=<?php echo $post['id']?>" class="continuar">Leer mas</a>
		</article>
	</div>
	<?php endforeach; ?>
		
	</div>
<div id="ladoDerecho-index">
    <a href="newpacient.php"><img src="imagenes/cruzrojabb.jpg"></a>
    <a href="newpacient.php"><img src="imagenes/citasprevia.png"></a>
   
</div>

</div>
<div class="contenedor-paginacion">
<?php require("./paginacion.php");?>
</div>
<div class="seccionAbajo2"><a href="">
	<img src="imagenes/bannerh1.png">
</a></div>
<div id="ladoAbajo-index">
<h2>Fotos recientes</h2><br>
<div id="session-imagenes">

<?php foreach($imagenes as $imagen): 
?>
      <div class="session-contenedor">
        <a href="#" target="_blank">
          <img class="imagenes-galeria" src="<?php echo $ruta ?>/galeria/<?php echo $imagen['thumb']?>" alt="lights">
          <div class="caption">
            <p class="extracto-imagen"><?php echo $imagen['extracto']?></p>
          </div>
        </a>
      </div>
<?php endforeach; ?>
 </div>      
  
</div>
<div class="seccionAbajo2"><a href="">
	<img src="imagenes/bannerh2.png">
</a></div>
	
