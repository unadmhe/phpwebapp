<!DOCTYPE html>
<!-- declaramos el inicio del docuemtno HTML --> 
<html>
<!-- declaramos el inicio del encabezado--> 
<head>
<!-- Definimos el juego de caracteres de la página a UTF-8  -->
<meta charset="UTF-8">
<!-- definimos metadatos del documento--> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- declarmos la hoja de estilo a utilizar en el archivo style.css--> 
<link href="style.css" rel="stylesheet">
<!-- terminamos el encabezado del documento--> 
</head>
<!-- iniciamos el cuerpo del documento--> 
<body>
<!-- insertamos una división para el menú superior de la clase topnav--> 
<div class="topnav">
<!-- declaramos una liga al documento principal index.html--> 
  <a href="index.html">Nosotros</a>
  <!-- declaramos una liga al documento principal.html--> 
  <a class="active" href="login.php">Cuentahabientes</a>
  <!-- declaramos una liga al documento sucursales.html --> 
  <a href="sucursales.php">Sucursales</a>
  <!-- declaramos una liga al documento contacto.html--> 
  <a href="contacto.php">Contacto</a>
<!-- terminamos la división que contiene el menú --> 
</div>
<!-- insertamos una división que contiene encabezados con cierto estilo --> 
<div style="padding-left:16px">
<!-- insertamos un bloque de texto de tamaño 2 --> 
  <h2>Caja Popular Zaragoza</h2>
  <!--terminamos la division que contienen los encabezados--> 
</div>



<?php

// Verificamos si el método es GET o POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Es POST, en ese caso verificamos los valores recibidos desde la forma
	if( $_POST["usuario"] && $_POST["password"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['usuario'] )) {
         die ("Nombre inválido. Cancelando alta.");
      }
      if (preg_match("/[^A-Za-z'-]/",$_POST['password'] )) {
         die ("Apellido paterno inválido. Cancelando alta.");
      }
	  
	  // Los valores son correctos y completos, mostramos los datos a ingresar en MySQL
	  
      echo "<div> Bienvenido usuario <b>". $_POST['usuario']. "</b> con password <b>". $_POST['password']. "</b><br></div>";
	  
	  echo "<meta http-equiv=\"refresh\" content=\"5; URL=principal.html\" />";
	  
	}
	
} else  {
    // Es GET, en ese caso mostramos la forma en HTML

echo "<!--declaramos una división que contiene un formulario--> ";
echo "<div>";
echo "<!--declaramos un formulario con la accción login.php--> ";
echo "<form action=\"login.php\" method=\"post\">";
echo "<!--declarmoa una etiqueta visible -->";
echo "  <label for=\"fname\">Usuario:</label><br>";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo--> ";
echo "  <input type=\"text\" id=\"user\" name=\"usuario\" value=\"\"><br>";
echo "  <!-- declarmos una etiqueta visible--> ";
echo "  <label for=\"lname\">Contraseña:</label><br>";
echo "  <!--declaramos un campo de texto tipo password con atributos y valor nulo--> ";
echo "  <input type=\"password\" id=\"pass\" name=\"password\" value=\"\"><br><br>";
echo "  <!-- declarmos un botón con etiqueta enviar --> ";
echo "  <input type=\"submit\" value=\"Enviar\">";
echo "  <!-- Terminamos la declaración del formulario--> ";
echo "</form> ";
echo "<!-- Terminamoc la división que contiene el formulario--> ";
echo "</div>";
	
}
?>

<!-- insertamos una línea horizontal en el documento--> 
<hr>
<!-- declaramos un parrafo --> 
<p>
<!--insewrtamos un texto en fuente pequeña--> 
<small>Autor: Sánchez Álvarez Hector Javier<br>
Matricula: ES172011532<br>
hector_alvarez@nube.unadmexico.mx
<!-- Terminamos el texto en fuente pequeña --> 
</small>
<!-- Terminamos el parrafo --> 
</p>
<!-- Terminamos el cuerpo del documento --> 
</body>
<!-- Terminamos el documento --> 
</html>


