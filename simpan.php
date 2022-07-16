<?php
//script php dimodifikasi berdasarkan script
//http://www.phpeasystep.com/phptu/18.html

//koneksi ke database
include "koneksi.php";
$cekdulu= "select * from tbl_rooms where nama='$_POST[nama]'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);
if (mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    echo "<script>alert('Nama Sudah Ada');history.go(-1) </script>";
}
else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
 

//menangkap posting dari field input form
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$query_insert = "INSERT INTO tbl_rooms (nama,jumlah)
VALUES ('$nama','$jumlah')";
$insert = mysql_query($query_insert);
 echo "<script language='javascript'>
 	alert('Data Berhasil Disimpan');
 	document.location.href='rooms.php';
 </script> ";
}
?>