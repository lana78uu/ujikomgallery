<?php
session_start();
if ($_SESSION['status'] !='login') {
    echo "<script>
    aler('Anda belum Login!);
    location.href='../index.php';
    </script>";
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website Galeri Foto</title>
        <link rel="stylesheet" type="text/css"href="../assets/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Galeri Rakyat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="album.php" class="nav-link">Album</a>
      </div>
      <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <P>&copy; UKK RPL 2024 | Kelompok 4</P>
</footer>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>