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
    <main id = "contenido" class="p-4">
        <section id ="contenedor_form" class="container p-4 col-lg-4 bg-white" >
            <form action="guardar.php" method="POST" name="viewport" content="width=device-width col-lg-3 col-md-4" >
                <div class="mb-3" >
                    <label for="" class="form-label">Ref:</label>
                    <input type="number" id="" name = "" class="form-control" aria-describedby="refHelp">
                </div>   

                <div class="mb-3">
                    <label for="" class="form-label">Tipo:</label>
                    <input type="text" id="" name = "" class="form-control" aria-describedby="TipoHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Grado:</label>
                    <input type="number" id="" name = "" class="form-control" aria-describedby="GradoHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Cantidad:</label>
                    <input type="number" id="" name = "" class="form-control" aria-describedby="CantidadHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Marca:</label>
                    <input type="text" id="" name = "" class="form-control" aria-describedby="MarcaHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de Expedición:</label>
                    <input type="date" id="" name = "" class="form-control" min="1200-01-01" aria-describedby="FEHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Fecha de Vencimiento:</label>
                    <input type="date" id="" name = "" class="form-control" max="2090-01-01" aria-describedby="FEHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Precio:</label>
                    <input type="number" id="" name = "" class="form-control" aria-describedby="PrecioHelp">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Foto:</label>
                    <input type="file" id="" name = "" class="form-control bg-info" aria-describedby="FotoHelp">
                </div>
                <center>
                    <input type="submit" class="btn btn-success btn-block center" name="save" value="Guardar"></inpunt>
                </center>   
            </form>
        </section>
    </main>
</body>
<script src="funciones.js"></script>
</html>