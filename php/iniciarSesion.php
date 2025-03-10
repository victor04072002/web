<?php
// Iniciar la sesión
session_start();

// Conexión a la base de datos
include 'db.php';  // Asegúrate de que la ruta es correcta

// Definir variable de error
$error_message = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si los campos están vacíos
    if (empty($email) || empty($password)) {
        $error_message = "Por favor ingrese ambos campos.";
    } else {
        // Preparar la consulta para verificar el usuario
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            // Enlazar los parámetros
            $stmt->bind_param("s", $email);

            // Ejecutar la consulta
            $stmt->execute();
            $result = $stmt->get_result();

            // Verificar si el correo existe
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Verificar la contraseña
                if (password_verify($password, $user['password'])) {
                    // Iniciar sesión y redirigir al usuario
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['nombre'];
                    header("Location: ../principal.php"); // Redirige a una página de bienvenida
                    exit();
                } else {
                    header("Location: ../index.php"); // Redirige a una página de bienvenida
                    $error_message = "Contraseña incorrecta.";
                }
            } else {
                header("Location: ../index.php"); // Redirige a una página de bienvenida
                $error_message = "Correo no encontrado.";
            }

            // Cerrar la sentencia
            $stmt->close();
        }
    }
}

// Cerrar la conexión
$conn->close();
?>

