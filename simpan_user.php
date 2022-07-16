<?php
include"koneksi.php";
session_start();
if ($_SESSION['masuk'] == "")
{
  header('location:index.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[masuk]'");
$row = mysqli_fetch_array($profil); //koneksi ke database

//menangkap posting dari field form input
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$akses = $_POST['hak_akses'];
mysqli_query($koneksi,"INSERT INTO tbl_user values ('','$nama','$username','$email','$pass','$akses', )");
$_SESSION['pesanSimpan'] = ' Data berhasil di simpan';
header('location:user.php');
?>
