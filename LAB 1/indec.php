<?php

 $creditos = 'Melquisedec Espinoza';
$fecha = date('Y');

function deb ($valor){
  echo '<pre>';
  var_dump($valor);
  echo '</pre>';
}


$usuario[]=[
'Titulo' => 'Noticia1';
'Descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In rerum dolores ab repellat expedita aspernatur omnis quia quibusdam, ipsa eos!';

]

?>


<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
	<title> Pagina de laboratorio 1 </title>
	<link rel="stylesheet" href="styles/estilos.css">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
  <header> </header>
  
  <nav>
  	<ul>
  		<li><a href="#">Inicio</a></li>
  		<li><a href="#">Servicio</a></li>
  		<li><a href="#">Galeria</a></li>
  		<li><a href="#">Contacto</a></li>
      <li><a href="#"><?php echo"$fecha" ?><a></li>
      <li><a href="#"> >? = $fecha <a></li>
  	</ul>
  </nav>

  <main>
  	<section>
  	<title> noticia numero 1</title>
  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aliquid voluptate totam vero consequatur eaque, tenetur quidem minus enim illum!</p>
  		<img src="img/1.jpg">
  	</section>
  	<section>
  	<title> noticia numero 2</title>
  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas aut harum atque ipsum saepe totam consequuntur aperiam veritatis, rem.</p>
  		<img src="img/1.jpg">
  	</section>
	<section>
	<title> noticia numero 3</title>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas aut harum atque ipsum saepe totam consequuntur aperiam veritatis, rem.</p>
  		<img src="img/1.jpg">
	</section> 
	<section>
	<title> noticia numero 4</title>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas aut harum atque ipsum saepe totam consequuntur aperiam veritatis, rem.</p>
  		<img src="img/1.jpg">
	</section> 
	<section>
	<title> noticia numero 5</title>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas aut harum atque ipsum saepe totam consequuntur aperiam veritatis, rem.</p>
  		<img src="img/1.jpg">
	</section> 
	<section>
	<title> noticia numero 6</title>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quas aut harum atque ipsum saepe totam consequuntur aperiam veritatis, rem.</p>
  		<img src="img/1.jpg">
	</section>  
  </main>

  <footer>
  	<h3>Elaborado por: <?php echo "$creditos";?> &copy <?php echo"$fecha" ?> </h3>
  </footer>

</body>
</html>