<?php
include("db.php"); ?>
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
        <nav class="navbar bg-secondary" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="./imagenes/Logo.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
                </a>
                <div>
                    <a  type="submit" href="index.php" class="btn btn-dark"> Atras </a>
                    <a type="submit" href="productos.php" class="btn btn-success"> Crear </a>  
                </div>
            </div>
        </nav>
    </header>  
    <div class = "container mt-3">
        <div class = "d-flex justify-content-center">
            <div class="col-md-8 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
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
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){?>
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
                                    <a href="editar.php?ref=<?php echo $row['ref']?>" class="btn btn-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>

                                    <a href="eliminar.php?ref=<?php echo $row['ref']?>" class="mt-2 btn btn-danger">
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
