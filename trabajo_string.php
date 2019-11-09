<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>

    .resaltar {
      color: #F00; 
      font-weight: bold;
    }

  </style>
</head>
<body>
    
  <?php
  
    $variable1 = "CASA";
    $variable2 = "CASA";
    
    // Tiene en cunta si esta en minusculas o mayusculas
    // $resultado = strcmp($variable1, $variable2);
    // No tiene en cuenta si estan en minusculas o mayusculas
    $resultado = strcmp($variable1, $variable2);
    
    if (!$resultado) {
      echo "Son iguales";
    } else {
      echo "No son iguales";
    }
  ?>
 
</body>
</html>