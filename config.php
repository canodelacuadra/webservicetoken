<?php
include('functions.php');
// Uso del ejemplo
$miToken = generarToken();

// Definir tokens de acceso (reemplaza estos con valores reales en un entorno de producción)
$accessTokens = [
    'user1' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...',
    'user2' => $miToken
];
