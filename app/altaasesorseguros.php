!DOCTYPE html>
<html>
<!--  declaramos el inicio del encabezado -->
<head>
<!-- Definimos el juego de caracteres de la página a UTF-8  -->
<meta charset="UTF-8" />
<!-- definimos algunos metadatos --> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- definimos la hoja de estilo CSS en el documento style.css--> 
<link href="style.css" rel="stylesheet">
<!-- terminamos el encabezado  -->
</head>
<!-- iniciamos el cuerpo del documento  -->
<body>
<!-- iniciamos la declaracion de una lista de bullets  para el menú superior-->
<ul>
<!--  declaramos los elementos del menú como bullets con ligas -->
  <li><a href="index.html">Nosotros</a></li>
  <li><a href="clientes.html">Clientes</a></li>
  <!-- declaramos un elemento de clase dropdown para el menú desplegable  -->
  <li class="dropdown">
  <!--  declaramos un elemento de clase dropbtn para el encabezado del menú desplegable -->
    <a class="active" href="javascript:void(0)" class="dropbtn">Asesores</a>
	<!-- insertamos una división para el contenido del menú desplegable  -->
    <div class="dropdown-content">
	<!--  declaramos los elementos del menú desplegable como bullets -->
      <a href="asesorcuentas.html">Asesor de Cuentas</a>
      <a href="asesorseguros.html">Asesor de Seguros</a>
      <a href="asesorahorros.html">Asesor de Ahorros</a>
	  <!-- terminamos la división del menú desplegable  -->
    </div>
	<!-- terminamos el bullets que contiene el menú desplegable  -->
  </li>
 <!-- agregamos otros bullets con referencias o ligas al menú superior  -->
  <li><a href="sucursales.html">Sucursales</a></li>
  <li><a href="empleados.html">Empleados</a></li>
  <!-- terminamos la lista de bullets  --> 
</ul>

<h2>Alta de asesor de seguros</h2>

<p>Ingrese los datos del asesor de seguros en los campos.</p>

<?php

// Verificamos si el método es GET o POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Es POST, en ese caso verificamos los valores recibidos desde la forma
	if( $_POST["nombre"] && $_POST["apaterno"] && $_POST["amaterno"] && $_POST["direccion"] && $_POST["telefono"] && $_POST["email"] && $_POST["sucursal"] ) {

      if (preg_match("/[^A-Za-z'-]/",$_POST['nombre'] )) {
         die ("Nombre inválido. Cancelando alta.");
      }
      if (preg_match("/[^A-Za-z'-]/",$_POST['apaterno'] )) {
         die ("Apellido paterno inválido. Cancelando alta.");
      }
      if (preg_match("/[^A-Za-z'-]/",$_POST['amaterno'] )) {
         die ("Apellido materno inválido. Cancelando alta.");
      }
		
      #if (preg_match("/[^A-Za-z'-]/",$_POST['email'] )) {
      if ( ! preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i",$_POST['email'] )  ) {
         die ("<div> Email inválido. Cancelando mensaje.</div>");
      }
      if (preg_match("/[^0-9'-]/",$_POST['telefono'] )) {
         die ("<div>Teléfono inválido. Cancelando mensaje.</div>");
      }
	  
	  // Los valores son correctos y completos, mostramos los datos a ingresar en MySQL
	  
      echo "<div> Asesor de cuenta <b>". $_POST['nombre']. "</b> <b>". $_POST['apaterno']. "</b> <b>". $_POST['amaterno']. "</b> que vive en <b>".
	  $_POST['direccion'] . "</b> con teléfono <b>". $_POST['telefono']. "</b> y e-mail <b>". $_POST['email']. " registrado</b><br></div>";
  
	}else{
	echo "<b>Por favor ingrese todos los campos</b>";
    echo "<meta http-equiv=\"refresh\" content=\"5; URL=asesorseguros.html\" />";	
	}
	
} else  {
    // Es GET, en ese caso mostramos la forma en HTML
	

echo "<div>";

echo "<!--declaramos una división que contiene un formulario-->\n";
echo "<div>\n";
echo "<!--declaramos un formulario con la accción altaclientes.php-->\n";
echo "<form action=\"altaasesorseguros.php\" method=\"post\" >\n";

echo "  <!--declarmos una etiqueta visible -->\n";
echo "  <label for=\"nombre\">Nombre:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\"><br>\n";

echo "  <!--declarmos una etiqueta visible -->\n";
echo "  <label for=\"apaterno\">Apellido paterno:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"apaterno\" name=\"apaterno\" value=\"\"><br>\n";

echo "  <!--declarmos una etiqueta visible -->\n";
echo "  <label for=\"amaterno\">Apellido materno:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"amaterno\" name=\"amaterno\" value=\"\"><br>\n";

echo "  <!--declaramos una etiqueta visible -->\n";
echo "  <label for=\"sucursal\">Sucursal:</label><br>\n";
echo "<!-- declaramos un combo box con atributos id y name-->\n";
echo "  <select id=\"sucursal\" name=\"sucursal\">\n";
echo "  <!-- declaramos una opción llamada 001 y valor Chapalita-->\n";
echo "    <option value=\"001\">Chapalita</option>\n";
echo "	<!--declaramos una opción llamada 002 y valor Juárez  -->\n";
echo "    <option value=\"002\">José Arréchiga</option>\n";
echo "	<!--  declaramos una opción llamada  003 y Las Pintitas-->\n";
echo "    <option value=\"003\">Las Pintitas</option>\n";
echo "	<!-- declaramos el fin del combo box -->\n";
echo "  </select><br>\n";


echo "  <!--declaramos una etiqueta visible -->\n";
echo "  <label for=\"direccion\">Dirección:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"direccion\" name=\"direccion\" value=\"\"><br>\n";


echo "  <!--declaramos una etiqueta visible -->\n";
echo "  <label for=\"telefono\">Teléfono:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"telefono\" name=\"telefono\" value=\"\"><br>\n";
  
echo "  <!--declaramos una etiqueta visible -->\n";
echo "  <label for=\"email\">E-mail:</label><br>\n";
echo "  <!--declaramos un campo de texto con atributos y valor inicial nulo-->\n";
echo "  <input type=\"text\" id=\"email\" name=\"email\" value=\"\"><br><br>\n";

echo "  <!-- declarmos un botón con etiqueta enviar -->\n";
// echo "  <input type=\"submit\" value=\"Enviar\">";
echo "<div style=\"overflow: auto; height: 70px; width: 180px; float: left; \" width=\"150\" align=\"left\" >\n";
echo "    <button class=\"button-red\" role=\"button\" type=\"submit\" >Registrar</button>\n";
echo "</div>\n";
echo "  <!-- Terminamos la declaración del formulario-->\n";
echo "</form>\n";
echo "<!-- Terminamoc la división que contiene el formulario-->\n";
echo "</div>\n";
echo "</div>\n";

}

?>

<br>
<br>

<!--insertamos una división para el texto a pie de página y le damos estilo -->
    <div style="overflow: auto; float: none; width: 100%">
	<!-- insertamos una línea horizontal en el documento -->
      <hr />
	  <!-- insertamos un parrafo -->
      <p>
	  <!-- insertamos un bloque de texto en fuente pequeña -->
        <small
          >Autor: Sánchez Álvarez Hector Javier<br />
          Matricula: ES172011532<br />
          hector_alvarez@nube.unadmexico.mx
		  <!-- terminamos el bloque de texto en fuente pequeña -->
        </small>
		<!-- terminamos el parrafo  -->
      </p>
	  <!--  terminamos la división que contiene el parrafo-->
    </div>

</body>
</html>


