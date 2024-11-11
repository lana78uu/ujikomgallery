<?php
session_start();
include 'koneksi.php';

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

$sql = mysqli_query($koneksi, "SELECT * FROM  galleryuser WHERE Username='$Username' AND Password='$Password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);

    $_SESSION['Username'] = $data ['Username'];
    $_SESSION['UserID'] = $data['UserID'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('Login Berhasil');
    location.href='../admin/index.php';
    </script>";
}else{
    echo "<script>
    alert('Username atau Password Salah!');
    location.href='../login.php';
    </script>";
}

?>