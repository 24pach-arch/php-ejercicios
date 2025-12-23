<?php

$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

function calcularTotal(array $carrito): array {
    $total = 0;

    foreach ($carrito as $item) {
        $total += $item["precio"] * $item["cantidad"];
    }

    if ($total > 1000) {
        $descuento = $total * 0.10;
    } elseif ($total > 500) {
        $descuento = $total * 0.05;
    } else {
        $descuento = 0;
    }

    return [
        "total" => $total,
        "descuento" => $descuento,
        "total_final" => $total - $descuento
    ];
}

// Mostrar productos
foreach ($carrito as $item) {
    $subtotal = $item["precio"] * $item["cantidad"];
    echo "Producto: {$item['producto']}\n";
    echo "Precio unitario: {$item['precio']} €\n";
    echo "Cantidad: {$item['cantidad']}\n";
    echo "Subtotal: {$subtotal} €\n";
    echo "----------------------\n";
}

$resultado = calcularTotal($carrito);

echo "Total sin descuento: {$resultado['total']} €\n";
echo "Descuento aplicado: {$resultado['descuento']} €\n";
echo "Total final: {$resultado['total_final']} €\n";
