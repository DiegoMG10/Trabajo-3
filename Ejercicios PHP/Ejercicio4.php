<html>
 <head>
  <title>Ejercicio 4</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <header>
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
 </header>
 <Font face="Comic Sans MS, arial, verdana">
 <h3>Mostrar En Pantalla Cual Es El Mayor De Dos Numeros.</h3>
 </font>
 </br>
   <?php
    $n1=54;
	$n2=10;
	if($n1>$n2){
		echo "El Primer Numero (".$n1.") Es Mayor Que El Segundo (".$n2.")";
	}
	elseif($n1==$n2){
		echo "El Primer Numero (".$n2.") Es Igual Al Segundo (".$n2.")";
	}
	else{
		echo "El Primer Numero (".$n1.") Es Menor Que El Segundo (".$n2.")";
	}
   ?>
   <p ALIGN="right">
  <img src="img/imagen.jpg" width="350" height="250">
  </p>
   <footer>
    <p> DIEGO MORALES GOMEZ</p>
    <a href="index.php">Regresar a Menu</a>
   </footer>
 </body>
</html>