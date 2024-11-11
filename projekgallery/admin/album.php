<?php
session_start();
include'../config/koneksi.php';
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
        <title>Galeri Rakyat</title>
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


<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card mt-2">
            <div class="card-header">Tambah Album</div>
            <div class="card-body">
                <form action="../config/aksi_album.php" method="POST">
                    <label class="form-label">Nama Album</label>
                    <input type="text" name="NamaAlbum" class="form-control" required>
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="Deskripsi" required></textarea>
                    <button type="submit" class="btn btn-primary mt-2" name="tambah">Tambah data</button>
                </form>
            </div>
        </div>
        </div>
        <div class="col-md-8">
          <div class="card mt-2">
            <div class="card-header">Data album
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama album</th>
                      <th>Deskripsi</th>
                      <th>tanggal</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $UserID = $_SESSION['UserID'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE UserID='$UserID'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['NamaAlbum']?></td>
                      <td><?php echo $data['Deskripsi']?></td>
                      <td><?php echo $data['TanggalDibuat']?></td>
                      <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $data['AlbumID'] ?>">
                      Hapus
                      </button>
                      <div class="modalfade" id="Hapus<?php echo $data['AlbumID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="../config/aksi_album.php" method="POST">
                              <input type="hidden" name="AlbumID" value="<?php echo $data['AlbumID']?>">
                              Apakah Anda Yakin akan menghapus data <strong> <?php echo $data['NamaAlbum'] ?> </strong>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="Hapus" class="btn btn-primary">Hapus Data</button>
                              </button>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>

                      </td>
                    </tr>
                  <?php } 
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <P>&copy; UKK RPL 2024 | Kelompok 4</P>
</footer>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    </body>
</htm