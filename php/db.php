<?php
$host = "localhost";  // Servidor MySQL
$user = "root";       // Usuario por defecto
$pass = "root";           // Contraseña (vacía por defecto)
$db = "candylandia";  // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>