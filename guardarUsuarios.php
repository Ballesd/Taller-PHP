<?php

include("db.php");

if (isset($_POST['saveu'])) {
    $ID = $_POST['Identidad'];
    $NombreDelCliente = $_POST['Nombre'];
    $Apellidos = $_POST['Ape'];
    $FechaDeNacimiento = $_POST['Nacimiento'];
    $Cargo = $_POST['Cargo'];


    $query = "INSERT INTO usuario(id,nombre,apellido,fechanacimiento,cargo)
    VALUES($ID, '$NombreDelCliente', '$Apellidos', '$FechaDeNacimiento', '$Cargo')";

    $result = mysqli_query($conn, $query);

    header("Location: tabla.php");
}