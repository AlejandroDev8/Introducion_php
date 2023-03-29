<?php include 'includes/header.php';

// Arrays asociativos en PHP

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 500
    ]
];

// Util para ver los contenidos de un array
echo '<pre>';
var_dump($cliente);
echo '</pre>';

// Acceder a un elemento del array
echo $cliente['nombre'];
echo $cliente['informacion']['disponible'];


// Agregar un elemento al array Si se agrega una propiedad que no existe, se crea, pero si se agrega una propiedad que ya existe, se sobrescribe

$cliente['codigo'] = 12345;

echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';
?>