<style>
  .resultado {
    color: #008f39;
    font-weight: bold;
    font-size: 18px;
  }
</style>

<?php
  if(isset($_POST["button"])) {
    $numero1 = $_POST["numero_uno"];
    $numero2 = $_POST["numero_dos"];    
    $operacion = $_POST["operacion"];
    realizaOperacion($operacion, $numero1, $numero2);    
  }
  function realizaOperacion($calculo, $n1, $n2) {
    // strcmp devuelve 1 si son diferente, y si son iguales devuelve 0 
    if(!strcmp("Suma", $calculo)) {
      echo "El resultado de la $calculo es: " . "<span class='resultado'>" . ($n1 + $n2) . "</span>";            
    }
    if(!strcmp("Resta", $calculo)) {
      echo "El resultado de la $calculo es: " . "<span class='resultado'>" . ($n1 - $n2) . "</span>";
    }
    if(!strcmp("Multiplicación", $calculo)) {
      echo "El resultado de la $calculo es: " . "<span class='resultado'>" . ($n1 * $n2) . "</span>";
    }
    if(!strcmp("División", $calculo)) {
      echo "El resultado de la $calculo es: " . "<span class='resultado'>" . ($n1 / $n2) . "</span>";
    }
    if(!strcmp("Módulo", $calculo)) {
      echo "El resultado del $calculo es: " . "<span class='resultado'>" . ($n1 % $n2) . "</span>";
    }
  }
?>  