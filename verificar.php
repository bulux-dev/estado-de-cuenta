<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar las credenciales de usuario y contraseña
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificar si las credenciales son correctas
    if ($username === "umg" && $password === "Taller2024") {
        // Iniciar sesión o establecer una variable de sesión para indicar que el usuario está autenticado
        session_start();
        $_SESSION["usuario_autenticado"] = true;
        
        // Redirigir al usuario al index.html
        header("Location: index.html");
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        echo "<p>Credenciales incorrectas. Por favor, inténtelo de nuevo.</p>";
    }
}
?>
