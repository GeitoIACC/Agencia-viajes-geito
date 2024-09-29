<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $plazas = $_POST['plazas'];
    $precio = $_POST['precio'];

    if (!empty($origen) && !empty($destino) && !empty($fecha) && $plazas > 0 && $precio > 0) {
        $stmt = $conn->prepare("INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$origen, $destino, $fecha, $plazas, $precio]);
        echo "Vuelo insertado correctamente.";
    } else {
        echo "Por favor, completa todos los campos correctamente.";
    }
}
?>
