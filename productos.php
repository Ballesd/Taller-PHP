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
        <nav class="navbar shadow-lg bg-dark">
            <div class="container-fluid mx-4">
                <a class="navbar-brand" href="index.php">
                    <img src="./imagenes/Logo.png" alt="" width="70" height="60" class="d-inline-block align-text-top">
                </a>
                <a type="submit" href="tabla.php" class="btn btn-primary"> Ver lista de productos </a>
            </div>
        </nav>
    </header>

    <main id="contenido" class="p-4">
        <section id="contenedor_form" class="container p-4 col-lg-4 bg-white border border-dark rounded shadow-lg">
            <h3 class="d-flex justify-content-center">Ingrese datos de producto</h3>
            <br>
            <form action="guardar.php" method="POST" name="viewport" content="width=device-width col-lg-3 col-md-4" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="ref" class="form-label">Referencia:</label>
                    <input type="number" id="ref" name="ref" class="form-control" aria-describedby="refHelp" required>
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" class="form-control" aria-describedby="TipoHelp" required>
                </div>

                <div class="mb-3">
                    <label for="grado" class="form-label">Grado:</label>
                    <input type="number" id="grado" name="grado" class="form-control" aria-describedby="GradoHelp" required>
                </div>

                <div class="mb-3">
                    <label for="cant" class="form-label">Cantidad:</label>
                    <input type="number" id="cant" name="cant" class="form-control" aria-describedby="CantidadHelp" required>
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" id="marca" name="marca" class="form-control" aria-describedby="MarcaHelp" required>
                </div>

                <div class="mb-3">
                    <label for="f_exp" class="form-label">Fecha de Expedición:</label>
                    <input type="date" id="f_exp" name="f_exp" class="form-control" min="1200-01-01" aria-describedby="FEHelp" required>
                </div>

                <div class="mb-3">
                    <label for="f_ven" class="form-label">Fecha de Vencimiento:</label>
                    <input type="date" id="f_ven" name="f_ven" class="form-control" max="2090-01-01" aria-describedby="FEHelp" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" id="precio" name="precio" class="form-control" aria-describedby="PrecioHelp" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" id="foto" name="foto" class="form-control" aria-describedby="FotoHelp" accept="image/*" required>
                </div>
                <center>
                    <input type="submit" class="btn btn-success btn-block center" name="save" value="Guardar"></inpunt>
                    <a href="tabla.php"> <button type="button" class="btn btn-danger btn-block center">Cancelar</button></a>
                </center>
            </form>
        </section>
    </main>


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
</body>
<script src="validaciones.js"></script>

</html>