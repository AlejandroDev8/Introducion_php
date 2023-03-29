<?php include 'includes/header.php';

// Arrays in PHP

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array
echo '<pre>';
var_dump($carrito);
echo '</pre>';

// Acceder a un elemento del array
echo $carrito[1];

// Agregar elemento al indice 3 del al array
$carrito[3] = 'Audífonos';

// Agregar elemento al final del al array

array_push($carrito, 'Teclado');


// Agregar elemento al inicio del al array

array_unshift($carrito, 'Celular');

// Agregar elementos al array	

echo '<pre>';
var_dump($carrito);
echo '</pre>';


$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

echo '<pre>';
var_dump($clientes);
echo '</pre>';

echo $clientes[1];

include 'includes/footer.php';
?>