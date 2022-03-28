<?php
$con = "db-connection.php";
if (file_exists( $con ) ) :

  // English Version
  Here we can have anything specific for European website like calc, discount rules etc

  // Spanish Version
  Aquí podemos tener cualquier cosa específica para el sitio web europeo como calc, reglas de descuento, etc.

else :
  echo "Database connection not found!";
endif;