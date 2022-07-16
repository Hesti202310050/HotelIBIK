<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

include"koneksi.php";
session_start();
if ($_SESSION['masuk'] == "")
{
  header('location:index.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[masuk]'");
$row = mysqli_fetch_array($profil);

//menangkap posting dari field form input
$kode = $_POST['kode_booking'];
$nama = $_POST['nama_pemesan'];
$email = $_POST['email'];
$venue = $_POST['venue'];
$tgl = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$date1=date_create("$tgl");
$date2=date_create("$tgl_keluar");
$diff=date_diff($date1,$date2);
$jumHari= $diff->days;
$cekHarga = mysqli_query($koneksi, "SELECT * FROM tbl_meeting WHERE nama = '$venue'");
$data = mysqli_fetch_array($cekHarga);
$total = "$jumHari" * "$data[harga]";
// $lama = $_POST['lama'];
// $total = "$jumlah"*" $harga";
$status	="Belum Bayar";

if(isset($_POST['submit']))
{
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'xammade.1440@gmail.com';                     // SMTP username
    $mail->Password   = 'pwachjvnydoartya';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('xammade.1440@gmail.com', 'INVOICE - Hotel IBIK');
    $mail->addAddress($email, $nama);     // Add a recipient
    
    // $mail->addReplyTo('namaemail', 'Percobaan');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Konfirmasi Pembayaran dari Hotel IBIK';
    $mail->Body    = '<h1>Halo, '.$nama.'</h1>
                      <h4>Berikut detail pesanan anda</h4>
                      <p>Kode: '.$kode.'</p>
                      <p>Nama Pemesan: '.$nama.'</p>
                      <p>Venue: '.$venue.'</p>
                      <p>Tanggal Check In: '.$tgl.'</p>
                      <p>Tanggal Check Out: '.$tgl_keluar.'</p>
                      <p>Lama Inap: '.$jumHari.' Malam</p>
                      <p>Total Harga: Rp.'.number_format($total, 0, ',', '.').'</p>
                      <p>Status Pembayaran: '.$status.'</p>';    

    if($mail->send())
    {
      mysqli_query($koneksi,"INSERT INTO tbl_booking values ('','$kode','$nama','$email','$venue','$tgl','$tgl_keluar','$jumHari','$total','$status')");
      $_SESSION['pesanSimpan'] = ' Data berhasil di simpan';
      header('location:booking.php');
    }
    else{
      $_SESSION['pesanError'] = ' Data gagal di simpan'. "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>