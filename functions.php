<?php

function generarToken($longitud = 32)
{
    // Generar bytes aleatorios seguros
    $bytesAleatorios = random_bytes($longitud);

    // Convertir a una cadena base64 segura para usar como token
    $token = base64_encode($bytesAleatorios);

    // Limpiar el token (remover caracteres no deseados)
    $token = str_replace(['+', '/', '='], ['-', '_', ''], $token);

    return $token;
}
/* 
La función random_bytes se utiliza para generar una cadena de bytes aleatorios.
 La longitud del token es configurable y, por defecto, se establece en 32 bytes (256 bits), lo cual es comúnmente aceptado como seguro.

Luego, se usa base64_encode para codificar estos bytes en una cadena base64.

Finalmente, se realiza una limpieza del token para asegurarse de que sea seguro para su uso en URL y en otros contextos.
 */

