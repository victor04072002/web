<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión
    header("Location: ../index.php"); // Redirige a la página de login
    exit();
}
