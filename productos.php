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
        <nav class="navbar shadow-lg" style="background-color: gray;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./imagenes/Logo.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
                </a>    
                <a type="submit" href="tabla.php" class="btn btn-info"> Observar </a>
            </div>
        </nav>
    </header>

    <main id="contenido" class="p-4">
        <section id="contenedor_form" class="container p-4 col-lg-4 bg-white border border-light rounded shadow-lg">
            <h3 class="d-flex justify-content-center">Ingrese datos</h3>
            <form  action="guardar.php" method="POST" name="viewport" content="width=device-width col-lg-3 col-md-4" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="ref" class="form-label">Referencia:</label>
                    <input type="number" id="ref" name="ref" class="form-control" aria-describedby="refHelp" required>
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" class="form-control" aria-describedby="TipoHelp">
                </div>

                <div class="mb-3">
                    <label for="grado" class="form-label">Grado:</label>
                    <input type="number" id="grado" name="grado" class="form-control" aria-describedby="GradoHelp">
                </div>

                <div class="mb-3">
                    <label for="cant" class="form-label">Cantidad:</label>
                    <input type="number" id="cant" name="cant" class="form-control" aria-describedby="CantidadHelp">
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" id="marca" name="marca" class="form-control" aria-describedby="MarcaHelp">
                </div>

                <div class="mb-3">
                    <label for="f_exp" class="form-label">Fecha de Expedición:</label>
                    <input type="date" id="f_exp" name="f_exp" class="form-control" min="1200-01-01" aria-describedby="FEHelp">
                </div>

                <div class="mb-3">
                    <label for="f_ven" class="form-label">Fecha de Vencimiento:</label>
                    <input type="date" id="f_ven" name="f_ven" class="form-control" max="2090-01-01" aria-describedby="FEHelp">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" id="precio" name="precio" class="form-control" aria-describedby="PrecioHelp">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" id="foto" name="foto" class="form-control bg-info" aria-describedby="FotoHelp">
                </div>
                <center>
                    <input type="submit" class="btn btn-success btn-block center" name="save" value="Guardar" required></inpunt>
                </center>
            </form>
        </section>
    </main>
</body>
<script src="funciones.js"></script>

</html>