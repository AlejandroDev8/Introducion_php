<?php include 'includes/header.php';

$nombreCliente = 'Alejandro Olvera';

// Funciones

// "strlen" nos permite saber la extensión del String
echo strlen($nombreCliente);

echo '<br>';

// "trim" nos permite eliminar espacios ne blanco
$texto = trim($nombreCliente);
echo strlen($texto);

echo '<br>';

// "strtoupper" nos permite convertir el string a mayúsculas
echo strtoupper($nombreCliente);

echo '<br>';

// "strtolower" para convertir el string a minúsculas
echo strtolower($nombreCliente);

echo '<br>';

// "srt_replace" nos permite cambiar cierta parte del string por una letra
echo str_replace('Alejandro', 'A', $nombreCliente); // En este caso busca la palabra "Alejandro" en el string, luego la remplaza por una "A" y l+al final va el nombre de la variable donde va a buscar la palabra

echo '<br>';

// "strpos" nos permite revisar si un string existe o no
echo strpos($nombreCliente, 'Alejandro'); // En este caso aparece "0" ya que "Alejandro se encuentra en la posición "0", si buscas en string y este no existe no te saldrá nada en pantalla

echo '<br>';

$tipoCliente = 'Premium';

// Para concatenar usamos el "."
echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;

echo '<br>';

// Otra forma de concatenar sería la siguiente, pero esta forma solo funciona con comillas dobles "", con las sencillas '' NO
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';
?>