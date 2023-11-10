<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="" method="post">
	<label for="numero1">Numero 1:</label><br>
	<input type="text" id="numero1" name="numero1"/><br>

	<label for="numero2">Numero 2:</label><br>
	<input type="text" id="numero2" name="numero2"/><br>
	
	<label for="numero3">Numero 3:</label><br>
	<input type="text" id="numero3" name="numero3"/><br>

	<label for="operacion">Operacion:</label><br>
	<select id="operacion" name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br>

	<input type="submit" value="Calculadora">
   </form>
 

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numero1 = $_POST["numero1"];
      $numero2 = $_POST["numero2"];
      $numero3 = $_POST["numero3"];
      $operacion = $_POST["operacion"];
    
      if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)) {
          $resultado = 0;
    
	  if ($operacion === "sumar") {
	      $resultado = $numero1 + $numero2 + $numero3;
	      echo "Resultado de la suma: $resultado";
	  } elseif ($operacion === "restar") {
	      $resultado = $numero1 - $numero2 - $numero3;
	      echo "Resultado de la resta: $resultado";
          } elseif ($operacion === "multiplicar") {
	      $resultado = $numero1 * $numero2 * $numero3;
	      echo "Resultado de la multiplicación: $resultado";
	  } elseif ($operacion === "dividir") {
	      if ($numero2 != 0 && $numero3 !=0) {
	          $resultado = $numero1 / ($numero2 * $numero3);
	          echo "Resultado de la división: $resultado";
	      } else {
	          echo "Error: No se puede dividir por cero.";
	      }
	  } else {
	      echo "Operación no válida.";
	  }
      } else {
	  echo "Dime numero válidos.";
      }
    }
    ?>

</body>
</html>


