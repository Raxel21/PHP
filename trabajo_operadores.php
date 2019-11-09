<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    h1 {
      text-align:center;
    }

    table {
      background-color: #FFC;
      padding: 5px;
      border: #666 5px solid;
    }
  </style>
</head>
<body>
  <h1>USANDO OPERADORES COMPARACIÓN</h1>

  <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
      <tr>
        <td>Nombre:</td>
        <td>
          <label for="nombre_usuario"></label>
          <input type="text" name="nombre_usuario" id="nombre_usuario" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>Edad:</td>
        <td>
          <label for="edad_usuario"></label>
          <input type="text" name="edad_usuario" id="edad_usuario" autocomplete="off">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <td>
        <td colspan="2" align="center">
          <input type="submit" name="enviando" id="enviando" value="Enviar">
        </td>
      </td>
    </table>
  </form>
</body>
</html>