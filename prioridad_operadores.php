<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  
    $var1 = true;

    $var2 = false;

    $resultado = $var1 && $var2; // resultado = false

    if($resultado == true) {
      echo "Correcto";
    } else {
      echo "Incorrecto";
    }

  ?>
</body>
</html>