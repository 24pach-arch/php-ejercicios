<?php

$estudiantes = [
    "Ana"    => [8, 7, 9],
    "Luis"   => [5, 6, 4],
    "María"  => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

function calcularPromedio(array $notas): float {
    return array_sum($notas) / count($notas);
}

$aprobados = 0;
$suspensos = 0;
$mejorEstudiante = "";
$mejorPromedio = 0;

foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);

    echo "Estudiante: $nombre\n";
    echo "Promedio: " . number_format($promedio, 2) . "\n";

    if ($promedio >= 6) {
        echo "Estado: Aprobado\n";
        $aprobados++;
    } else {
        echo "Estado: Suspenso\n";
        $suspensos++;
    }

    echo "---------------------\n";

    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "Total aprobados: $aprobados\n";
echo "Total suspensos: $suspensos\n";
echo "Mejor estudiante: $mejorEstudiante con promedio " . number_format($mejorPromedio, 2) . "\n";
