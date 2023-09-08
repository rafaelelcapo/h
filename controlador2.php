<?php

  require_once("modelo2.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $ci = $_POST['ci'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $tfijo = $_POST['tfijo'];
    $tmovil = $_POST['tmovil'];
    $nacimiento = $_POST['nacimiento'];
    $pais = $_POST['pais'];
    $carrera = $_POST['carrera'];

    // Insertar datos en la base de datos usando la función del modelo
    $filasAfectadas = insertarDatos($nombre, $paterno, $materno, $ci, $direccion, $email, $edad, $fecha, $tfijo, $tmovil, $nacimiento, $pais, $carrera);

    if ($filasAfectadas > 0) {
      echo "Inserción Exitosa!";
    } else {
      echo "Error al insertar los datos.";
    }
  }
?>