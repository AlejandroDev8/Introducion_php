<?php include 'includes/header.php';

$cliente = [];
$clientes2 = array();
$clientes3 = ['Juan', 'Pedro', 'Karen'];
$clientes = [
    'nombre' => 'Juan',
    'saldo' => 200,
];

// Función Empty

// empty() evalúa si una variable está vacía, es decir, si no existe o si está vacía

var_dump(empty($cliente)); // true Está vacío
var_dump(empty($clientes2)); // true Está vacío
var_dump(empty($clientes3)); // false No está vacío

echo '<br>';

// Función isset 

// isset() evalúa si una variable está definida o no

var_dump(isset($cliente)); // true Está definida
var_dump(isset($clientes2)); // true Está definida
var_dump(isset($clientes3)); // true Está definida
var_dump(isset($clientes4)); // false No está definida

echo '<br>';

// isset() también evalúa si una propiedad de un array asociativo está definida o no

var_dump(isset($clientes['nombre'])); // true Está definida
var_dump(isset($clientes['codigo'])); // false No está definida

include 'includes/footer.php';
?>