<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galeri Rakyat</title>
        <link rel="stylesheet" type="text/css"href="assets/css/bootstrap.min.css">
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
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Register</a>
      <a href="login.php" class="btn btn-outline-success m-1">Login</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="row-justify-content-center">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>LOGIN GALERI RAKYAT</h5>
                        <form action="config/aksi_login.php" method="POST">
                            <label class="form-label">Username</label>
                            <input type="text" name="Username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <input type="Password" name="Password" class="form-control" required>
                            <div class="d-grid mt-2">
                                <button class="btn btn-primary" type="submit" name="kirim">Masuk
                                </button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum punya akun? <a href="register.php">register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <P>&copy; UKK RPL 2024 | Kelompok 4</P>
</footer>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>