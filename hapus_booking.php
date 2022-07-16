<?php
session_start();
include"koneksi.php";
$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM tbl_booking WHERE id_booking = $id");
$_SESSION['pesanHapus'] = ' Data berhasil dihapus';
header('location:booking.php');
?>
