<?php
require_once('config.php');

// Obtener el token de acceso de la solicitud
$token = null;
$headers = apache_request_headers();
foreach ($headers as $header => $value) {
    if (strtolower($header) == 'authorization') {
        $token = trim(str_replace('Bearer', '', $value));
        break;
    }
}

// Verificar el token de acceso
function verifyToken($token)
{
    global $accessTokens;
    return array_search($token, $accessTokens) !== false;
}

// Verificar la autenticación
if (!$token || !verifyToken($token)) {
    http_response_code(401);
    die('Acceso no autorizado.');
}

// Respuesta del servicio web
$response = [
    'status' => 'success',
    'message' => '¡Acceso autorizado!',
    'data' => ['usuario' => array_search($token, $accessTokens)]
];

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
