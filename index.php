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
        <nav class="navbar bg-secondary" >
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
            <h3 class="d-flex justify-content-center">Ingrese Usuario</h3>
            <form action="guardarUsuarios.php" method="POST" name="viewport" content="width=device-width col-lg-3 col-md-4" enctype="multipart/form-data">
            <div class="form-group text-center"><br>
                <label for="Identidad"><b>ID</b></label>
                <input type="number" class="form-control text-center" id="Identidad" name="Identidad" placeholder="Ingrese su ID">
            </div>
            <div class="form-group text-center"><br>
                <label for="Nombre del Cliente"><b>Nombre del Cliente</b></label>
                <input type="text" class="form-control text-center" id="Nombre" name="Nombre" placeholder="Nombre Completo">
            </div>
            <div class="form-group  text-center"><br>
                <label for="Apellidos"><b>Apellidos</b></label>
                <input type="text" class="form-control text-center" id="Ape" name="Ape" placeholder="Apellidos">
            </div>
            <div class="form-group text-center"><br>
                <label for="Fecha de Nacimiento"><b>Fecha de Nacimiento</b></label>
                <input type="date" class="form-control text-center" id="Nacimiento" name="Nacimiento" placeholder="DD/MM/AÑO">
            </div>
            <div class="form-group text-center"><br>
                <label for="Cargo"><b>Cargo</b></label>
                <input type="text" class="form-control text-center" id="Cargo" name="Cargo" placeholder="A que se dedica">
            </div>
            <center>
                <input type="submit" class="btn btn-success btn-block center" name="saveu" value="Guardar" required></inpunt>
            </center>
        </form>
        </section>
    </main>
</body>
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Conectate directamente con nostros:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
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
        <!-- Grid column -->

        <!-- Grid column -->
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
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
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
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contactanos!
          </h6>
          <p><i class="fas fa-home me-3"></i> Manizales, UN Sede Manizales, CO</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            baldaer_licors@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 57 320 575 1236</p>
          <p><i class="fas fa-print me-3"></i> + 57 312 676 6372</p>
          <p><i class="fas fa-print me-3"></i> + 57 315 801 3496</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src = "validaciones.js"></script>
</html>