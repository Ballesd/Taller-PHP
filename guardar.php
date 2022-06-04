<?php

include("db.php");

if (isset($_POST['save'])) {
    $refer = $_POST['ref'];
    $tipo = $_POST['tipo'];
    $grado = $_POST['grado'];
    $cantidad = $_POST['cant'];
    $marca = $_POST['marca'];
    $fecha_e = $_POST['f_exp'];
    $fecha_v = $_POST['f_ven'];
    $precio = $_POST['precio'];
    $img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));



    $query = "INSERT INTO productos(ref,foto,tipo,grado,cantidad,marca,expedida,vencimiento,precio)
    VALUES($refer, '$img', '$tipo', $grado, $cantidad, '$marca', '$fecha_e', '$fecha_v', $precio)";

    $result = mysqli_query($conn, $query);

    header("Location: productos.php");
}
