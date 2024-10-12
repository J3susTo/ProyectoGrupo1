<?php
// Nombre del archivo donde se almacenará el contador
$archivo = 'contador_visitas.txt';

// Verificar si el archivo existe
if (!file_exists($archivo)) {
    // Si no existe, crearlo y establecer el contador en 0
    file_put_contents($archivo, '0');
}

// Leer el contenido actual del archivo (el número de visitas)
$contador = file_get_contents($archivo);

// Incrementar el contador
$contador++;

// Escribir el nuevo valor en el archivo
file_put_contents($archivo, $contador);

// Devolver el valor del contador para que pueda ser usado por JavaScript
echo $contador;
?>
