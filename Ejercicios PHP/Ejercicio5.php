<html>
 <head>
  <title>Ejercicio 5</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <header>
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
 </header>
 <Font face="Comic Sans MS, arial, verdana">
 <h3>Mostrar En Pantalla Cual Es El Mayor De Tres Numeros.</h3>
 </font>
 </br>
   <?php
    $n1=54;
	$n2=10;
	$n3=36;
if($n1>$n2){
    echo "El primer numero (".$n1.") Es mayor que el segundo (".$n2.") Y al tercero(".$n3.")";
    }
    else if ($n1==$n2){
    echo "El segundo numero (".$n2.") Es igual que el tercer (".$n2.") El primero y segundo son iguales al tercero(".$n3.")";
    }
    else{
    echo "El primer numero (".$n1.") Es menor que el segundo numero (".$n2.") El tercero es menor al segundo (".$n3.")";
    }
   ?>
   <p ALIGN="right">
  <img src="img/imagen2.png" width="350" height="240">
  </p>
  <footer>
    <p> DIEGO MORALES GOMEZ</p>
    <a href="index.php">Regresar a Menu</a>
   </footer>
 </body>
</html>