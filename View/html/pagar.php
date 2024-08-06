<?php
session_start();
include '../../Model/conection.php';

if (!isset($_GET['cita_id'])) {
    header("Location: ../../index.php");
    exit();
}

$citaId = $_GET['cita_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = new conectar();
    $conn = $conexion->conectarse();

    try {
        // Actualizar el estado de la cita a "Confirmada"
        $sql = "UPDATE citas SET Estado = 'Confirmada' WHERE CitaID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $citaId);

        if ($stmt->execute()) {
            header("Location: ../../index.php?payment=success");
            exit();
        } else {
            echo "Error al confirmar el pago: ";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pagar Cita</title>
    <link rel="stylesheet" href="path_to_your_css_file.css">
</head>
<body>
    <h2>Pagar Cita</h2>
    <form action="pagar.php?cita_id=<?php echo htmlspecialchars($citaId); ?>" method="POST">
        <p>Detalles de la cita...</p>
        <button type="submit">Confirmar Pago</button>
    </form>
</body>
</html>
