<html>
 <head>
  <title>Ejercicio 3</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <header>
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
 </header>
 <Font face="Comic Sans MS, arial, verdana">
 <h3>Mostrar En Pantalla Una Tabla de 1 Por 10.</h3>
 </font>
 </br>
   <?php
	echo "<h2>BUCLE WHILE</h2><br>";
	echo "<table border=1>";
	for($i=0; $i<10; $i++)
	{
	echo "<tr>";
	echo "<td>";
	echo "Linea ".$i."<br>";
	echo "</td>";
    echo "<tr>";
	}
	echo "</table>";
   ?>
   <footer>
    <p>DIEGO MORALES GOMEZ</p>
    <a href="index.php">Regresar a Menu</a>
   </footer>
 </body>
</html>