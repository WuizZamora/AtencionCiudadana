<?php
// config/connection.php

require_once __DIR__ . '/../vendor/autoload.php'; // Ruta corregida

use Dotenv\Dotenv;

class Connection
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
        // Cargar variables .env desde el directorio raíz
        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();

        // Resto del código (igual que antes)...
        $servidor = $_ENV['DB_HOST'];
        $usuario = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $base_datos = $_ENV['DB_NAME'];

        $this->conn = new mysqli($servidor, $usuario, $password, $base_datos);

        if ($this->conn->connect_error) {
            throw new RuntimeException("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public static function conectar()
    {
        if (self::$instance === null) {
            self::$instance = new Connection();
        }
        return self::$instance->conn;
    }
}
?>