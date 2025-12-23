<?php

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// Minúsculas
$texto = strtolower($texto);

// Limpiar signos y separar palabras
$texto = preg_replace("/[^a-záéíóúñü\s]/u", "", $texto);
$palabras = explode(" ", $texto);

// Filtrar palabras de menos de 3 letras
$palabras = array_filter($palabras, fn($p) => mb_strlen($p) >= 3);

// Contar palabras
$contador = array_count_values($palabras);

// Mostrar solo palabras repetidas
$repetidas = array_filter($contador, fn($c) => $c > 1);

echo "Palabras repetidas:\n";
foreach ($repetidas as $palabra => $veces) {
    echo "$palabra → $veces veces\n";
}

// Palabra más repetida
if (!empty($repetidas)) {
    arsort($repetidas);
    $masRepetida = array_key_first($repetidas);
    echo "Palabra más repetida: $masRepetida\n";
} else {
    echo "No hay palabras repetidas.\n";
}

// Total de palabras
echo "Número total de palabras: " . count($palabras) . "\n";
