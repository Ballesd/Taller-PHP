<?php
include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller-PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid mx-4">
                <a class="navbar-brand" href="index.php">
                    <img src="./imagenes/Logo.png" alt="" width="70" height="60" class="d-inline-block align-text-top">
                </a>
                <div>
                    <a href="productos.php" class="btn btn-success"> Registrar Producto </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-3">
        <h1 class="d-flex justify-content-center">Productos existentes</h1>
        <br>
        <div class="d-flex justify-content-center">
            <div class="col-md-8 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Foto</th>
                            <th>Ref</th>
                            <th>Tipo</th>
                            <th>Grado</th>
                            <th>Cantidad</th>
                            <th>Expedición</th>
                            <th>Vencimiento</th>
                            <th>Precio</th>
                            <th>Accciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM productos";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td>
                                    <img class="img-thumbnail" src="data:<?php echo $row['grado']; ?>;base64,<?php echo  base64_encode($row['foto']); ?>">
                                </td>
                                <td><?php echo $row['ref'] ?></td>
                                <td><?php echo $row['tipo'] ?></td>
                                <td><?php echo $row['grado'] ?></td>
                                <td><?php echo $row['cantidad'] ?></td>
                                <td><?php echo $row['expedida'] ?></td>
                                <td><?php echo $row['vencimiento'] ?></td>
                                <td><?php echo $row['precio'] ?></td>
                                <td>
                                    <a href="editar.php?ref=<?php echo $row['ref'] ?>" class="btn btn-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>

                                    <a href="eliminar.php?ref=<?php echo $row['ref'] ?>" class="mt-2 btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>


<footer class="text-center text-lg-start bg-dark text-white pt-1">

    <section>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Licores BalDaEr
                    </h6>
                    <p>
                        Consigue la mayor variedad de licores y productos.
                        Somos actualmente una empresa con un alcance local y en todo el territorio Nacional
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Productos
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Ron</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Aguardiente</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Tequila</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vodka</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Precios</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Ajustes</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Ordenes</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Ayuda</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Contactanos!F¿</h6>
                    <p><i class="fas fa-home me-3"></i> Manizales, UN Sede Manizales, CO</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        baldaer_licors@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 57 320 575 1236</p>
                    <p><i class="fas fa-print me-3"></i> + 57 312 676 6372</p>
                    <p><i class="fas fa-print me-3"></i> + 57 315 801 3496</p>
                </div>

            </div>

        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Administración de Sistemas Informáticos
        <a class="text-reset fw-bold" href="https://unal.edu.co/">UNIVERSIDAD NACIONAL DE COLOMBIA</a>
    </div>
</footer>

<script src="validaciones.js"></script>

</html>