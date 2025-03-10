<?php
include 'db.php';  // Incluye la conexión a la base de datos

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar los campos
    if (empty($nombre) || empty($apellidoPaterno) || empty($email) || empty($password)) {
        echo "Todos los campos son requeridos.";
    } else {
        // Verificar si el correo ya está registrado
        $sql_check_email = "SELECT COUNT(*) FROM usuarios WHERE email = ?";
        if ($stmt_check = $conn->prepare($sql_check_email)) {
            $stmt_check->bind_param("s", $email);
            $stmt_check->execute();
            $stmt_check->bind_result($email_count);
            $stmt_check->fetch();
            $stmt_check->close();

            // Si el correo ya está registrado
            if ($email_count > 0) {
                echo "<script>
                    alert('Este correo ya está registrado.');
                    window.location.href = '../index.php'; // Redirige al formulario de registro
                </script>";
            } else {
                // Encriptar la contraseña
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Preparar la consulta para insertar los datos
                $sql = "INSERT INTO usuarios (nombre, apellidoPaterno, email, password) VALUES (?, ?, ?, ?)";

                if ($stmt = $conn->prepare($sql)) {
                    // Enlazar los parámetros
                    $stmt->bind_param("ssss", $nombre, $apellidoPaterno, $email, $hashedPassword);

                    // Ejecutar la consulta
                    if ($stmt->execute()) {
                        echo "<script>
                            alert('Registro Exitoso!');
                            window.location.href = '../index.php'; // Redirige después del alert
                        </script>";
                    } else {
                        echo "Error al registrar: " . $stmt->error;
                    }

                    // Cerrar la sentencia
                    $stmt->close();
                }
            }
        }
    }
}

// Cerrar la conexión
$conn->close();
?>