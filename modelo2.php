<?php

  // DATABASE SETTINGS
  define("DB_HOST", "localhost");
  define("DB_NAME", "mibasededatos");
  define("DB_CHARSET", "utf8mb4");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");

  // CONNECT TO DATABASE
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

  // Función para insertar datos en la base de datos
  function insertarDatos($nombre, $paterno, $materno, $ci, $direccion, $email, $edad, $fecha, $tfijo, $tmovil, $nacimiento, $pais, $carrera) {
    global $pdo;
    
    $sql = "INSERT INTO personas (nombre, paterno, materno, ci, direccion, email, edad, fecha, tfijo, tmovil, nacimiento, pais, carrera) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $paterno, $materno, $ci, $direccion, $email, $edad, $fecha, $tfijo, $tmovil, $nacimiento, $pais, $carrera]);

    return $stmt->rowCount(); // Devuelve la cantidad de filas afectadas
  }
?>
