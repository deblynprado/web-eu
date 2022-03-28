<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
</head>
<body>
  <?php
    $login = "common/login-form.php";

    if ( file_exists( $login ) ) :
      require $login;
      require "calc.php";
  else :

  endif;
  ?>
</body>