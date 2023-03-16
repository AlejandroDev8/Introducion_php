<?php include 'includes/header.php';

  $num1 = 20;
  $num2 = 30;
  $num3 = 30;
  $num4 = "30";

  var_dump($num1 > $num2); // Está comparando si el número 1 es mayor al número 2, en este caso 20 mayor a 30, por eso sale "false"
  echo '<br>';

  var_dump($num1 < $num2); // En este caso está comparando si número 1 es menor al número 2, 20 menor que 30, por eso sale "true"
  echo '<br>';

  var_dump($num1 >= $num2); // El número 1 es mayor o igual al número, 20 mayor o igual a 30, es "false"
  echo '<br>';

  var_dump($num1 <= $num2); // El número 1 es menor o igual al número, 20 menor o igual a 30, es "true"
  echo '<br>';

  var_dump($num2 == $num3); // El número 2 es igual al número 3, 30 = 30, por eso sale "true"
  echo '<br>';

  var_dump($num2 == $num4); // Aquí el operador "==" va marcar "true", ya que no es tan estricto y no checa si el dato y el tipo de dato es el mismo
  echo '<br>';

  var_dump($num2 === $num4); // Aquí el operador "===" si es más estricto y si checa el dato y su tipo para ver si coinciden y por eso sale "false"
  echo '<br>';

  // Si el número de la izquierda es menor al número de la derecha, nos dará "-1", "0" si son iguales y "1" si el de izquierda es mayor al de la derecha
  var_dump($num1 <=> $num2); 
  echo '<br>';

  var_dump($num2 <=> $num3);
  echo '<br>';

  var_dump($num2 <=> $num1);
  
include 'includes/footer.php';
?>