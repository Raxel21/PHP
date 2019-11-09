<style>
  .no-validado {
    font-size: 18px;
    color: #F00;
    font-weight: bold;
  }

  .validado {
    font-size: 18px;
    color: #0C3;
    font-weight: bold;
  }
</style>

<?php
  if (isset($_POST["enviando"])) {
    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];
    if($usuario == "Celvyn" && $edad >= 18) {
      echo "<p class='validado'>Puedes entrar</p>";
    } else {
      echo "<p class='no-validado'>" . "No puedes entar" . "</p>";
    }
  }
?>