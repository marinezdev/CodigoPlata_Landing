<?php
$id = $_GET['id'];

// p1 - Si se va a detener el servicio de SQL (1 = si)
// p2 - Random1 para habilitar el servicio (en minutos)
// p3 - Random1 para habilitar el servicio (en minutos)
$datos = [
    'acor870807' => ['name' => 'ASAE', 'p1' => 1, 'p2' => 1, 'p3' => 2]
];

if (isset($datos[$id])) {
    header('Content-Type: application/json');
    echo json_encode($datos[$id]);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Usuario no encontrado']);
}