<?php
$con = "db-connection.php";
if (file_exists( $con ) ) :
else :
  echo "Database connection not found!";
endif;