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

    $nombre = "Celvyn";

    function dameNombre() {

      global $nombre;

      $nombre = "El nombre es " . $nombre;

    }

    dameNombre();

    echo $nombre;

  ?>  
</body>
</html>