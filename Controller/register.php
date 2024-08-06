<?php
// Incluir el archivo de control de registro
include '../Controller/control_register.php';

// Verificar que los datos del formulario están definidos
if (isset($_GET['namereg']) && isset($_GET['emailreg']) && isset($_GET['passwordreg'])) {
    $nombre = $_GET['namereg'];
    $correoElectronico = $_GET['emailreg'];
    $usu_clave = $_GET['passwordreg'];

    // Verificar si el correo electrónico ya está registrado
    if (verificar_correo($correoElectronico)) {
        echo "El correo electrónico ya está registrado. Por favor, use otro correo.";
    } else {
        // Registrar al usuario si el correo electrónico no está registrado
        $resultado = registrar_usuario($nombre, $correoElectronico, $usu_clave);

        if ($resultado) {
            header("Location: ../View/html/login.php?register=success"); 
        } else {
            echo "Error al registrar el usuario.";
        }
    }
} else {
    echo "Por favor, complete todos los campos del formulario.";
}