<html>
 <head>
  <title>Ejercicio 1</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
  <header>
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
  </header>
  <Font face="Comic Sans MS, arial, verdana">
  <h3>Hacer Un Programa Que Sume, Reste, Multiplique y divida Dos Variables.</h3>
  </font>
  </br>
   <?php
    $numero1=10;
	$numero2=12;
	//SUMAR
	$suma=$numero1+$numero2;
	echo "$numero1+$numero2"."<br>";
	echo "suma = ".$suma. "<br>";
	//RESTAR
	$resta=$numero1-$numero2;
	echo "$numero1-$numero2"."<br>";
	echo "resta = ".$resta. "<br>";
	//MULTIPLICAR
	$multiplicacion=$numero1*$numero2;
	echo "$numero1*$numero2"."<br>";
	echo "Multiplicacion = ".$multiplicacion. "<br>";
	//DIVIDIR
	$divicion=$numero1/$numero2;
	echo "$numero1/$numero2"."<br>";
	echo "Divicion = ".$divicion. "<br>";
   ?>
   <p ALIGN="right">
  <img src="img/imagen2.png" width="360" height="240">
  </p>
   <footer>
    <p>DIEGO MORALES GOMEZ</p>
    <a href="index.php">Regresar a Menu</a>
   </footer>
 </body>
</html>