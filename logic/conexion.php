<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "base_de_datos_proyecto";
//Creamos la conexion
try {
    $conexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error en la conexion con PDO : " . $e->getMessage();
}