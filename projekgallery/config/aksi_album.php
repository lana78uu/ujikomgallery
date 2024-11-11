<?php
session_start();
include 'koneksi.php';

if(isset($_POST['tambah'])) {
    $NamaAlbum = $_POST['NamaAlbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $TanggalDibuat = date('Y-m-d');
    $UserID = $_SESSION['UserID'];

    $sql = mysqli_query($koneksi, "INSERT INTO album VALUES('', '$NamaAlbum','$Deskripsi','$TanggalDibuat','$UserID')");

    echo "<script>
    alert ('data berhasil di simpan!');
    location.href='../admin/album.php';
    </script>";
}


if(isset($_POST['edit'])) {
    $AlbumID = $_POST['AlbumID'];
    $NamaAlbum = $_POST['NamaAlbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $TanggalDibuat = date('Y-m-d');
    $UserID = $_SESSION['UserID'];

    $sql = mysqli_query($koneksi, "UPDATE album SET NamaAlbum='$NamaAlbum', Deskripsi='$Deskripsi',TanggalDibuat='$TanggalDibuat' WHERE AlbumID='$AlbumID'");

    echo "<script>
    alert ('data berhasil diperbarui!');
    location.href='../admin/album.php';
    </script>";
}

if (isset ($_POST['Hapus'])) {
    $AlbumID = $_POST['AlbumID'];

    $sql = mysqli_query($koneksi, "DELETE FROM album WHERE AlbumID='$AlbumID'");

    echo "<script>
    alert ('berhasil dihapus!');
    location.href='../admin/album.php';
    </script>";
}
?>