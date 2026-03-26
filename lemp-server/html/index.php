<?php
// Usamos el nombre del servicio de Docker ('db') como host
$host = 'db';
$db   = 'tec';
$user = 'tec';
$pass = 'Tec123.';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<div style='font-family: Arial; text-align: center; margin-top: 50px;'>";
    echo "<h1 style='color: #4CAF50;'>¡Conexión Exitosa! 🚀</h1>";
    echo "<p>Conectado correctamente a la base de datos <b>$db</b> en MariaDB.</p>";
    echo "</div>";
    
} catch (\PDOException $e) {
    echo "<h1>Error de conexión:</h1> <p>" . $e->getMessage() . "</p>";
    // Esto forzará que el error se escriba en tu carpeta /logs/php
    error_log("Error de BD: " . $e->getMessage());
}
?>