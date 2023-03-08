<?php include 'includes/header.php';

  // Creación de Variables
  $name = 'Alejandro';
  echo $name;
  var_dump($name);

  // Creación de "Constantes"
  define('constante', 'Este es el valor de la constante');
  echo constante; // Cuando sea una constante, o sea un "define", se muestra en pantalla sin el signo de dollar

  // Otra forma de definir constantes, aunque no es tan común como el "define"
  const constante2 = 'Hola 2';
  echo constante2;

include 'includes/footer.php';
?>