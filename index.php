<?php

use LDAP\Result;

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
        <a type="submit" href="tabla.php" class="btn btn-primary"> Ver lista de productos </a>
      </div>
    </nav>
  </header>
  <main id="contenido" class="p-4">
    <section id="contenedor_form" class="container p-4 col-lg-4 bg-white border border-dark rounded shadow-lg">
      <h3 class="d-flex justify-content-center">Ingrese Usuario</h3>
      <form action="guardarUsuarios.php" method="POST" name="viewport" content="width=device-width col-lg-3 col-md-4" enctype="multipart/form-data">
        <div class="form-group text-center"><br>
          <label for="Identidad"><b>ID:</b></label>
          <input type="number" class="form-control text-center" id="Identidad" name="Identidad" placeholder="Ingrese su ID" required>
        </div>
        <div class="form-group text-center"><br>
          <label for="Nombre del Cliente"><b>Nombre:</b></label>
          <input type="text" class="form-control text-center" id="Nombre" name="Nombre" placeholder="Nombre Completo" required>
        </div>
        <div class="form-group  text-center"><br>
          <label for="Apellidos"><b>Apellidos:</b></label>
          <input type="text" class="form-control text-center" id="Ape" name="Ape" placeholder="Apellidos" required>
        </div>
        <div class="form-group text-center"><br>
          <label for="Fecha de Nacimiento"><b>Fecha de Nacimiento:</b></label>
          <input type="date" class="form-control text-center" id="Nacimiento" name="Nacimiento" placeholder="DD/MM/AÑO" required>
        </div>

        <div class="form-group text-center">
          <label for="Cargo"><b>Cargo:</b></label>
          <select name="Cargo" id="Cargo" class="form-select">
            <option value="Administrador">Administrador</option>
            <option value="Usuario">Usuario</option>
            <option value="Comprador">Comprador</option>
          </select>
        </div>
        <center>
          <input type="submit" class="btn btn-success btn-block center" name="saveu" value="Guardar" required></inpunt>
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
<!-- Footer -->
<script src="validaciones.js"></script>

</html>