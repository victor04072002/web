<?php
$servername = "localhost"; 
$username = "root";       
$password = "root";            
$dbname = "candylandia";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos $dbname.";
}

// Cierra la conexión
$conn->close();
?>