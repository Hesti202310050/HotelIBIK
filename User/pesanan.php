<?php
include"../koneksi.php";
session_start();
if ($_SESSION['masuk'] == "")
{
  header('location:index-user.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[masuk]'");
$row = mysqli_fetch_array($profil);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Ibik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/IBIK_1.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">

    
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../admin/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../admin/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="../admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                <ul id="navigation">
                                <li><a href="index-user.php">Home</a></li>
                                        <li><a href="venue.php">Venue</a></li>
                                        <li><a class="active" href="pesanan.php">Pesanan Saya</a></li>
                                        <li><a href="#">Akun Saya</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="../assets/image/IBIK_1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="sign_in">
                                <div class="signin_btn d-none d-lg-block">
                                    <a href="../logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <div class="bradcam_area breadcam_bg1">
    <h3>Pesanan Saya</h3>
    </div>

        <br>
        <br>    
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="table-1">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Booking</th>
                          <th>Nama Pemesan</th>
                          <th>Email</th>
                          <th>Nama Venue</th>
                          <th>Tanggal Checkin</th>
                          <th>Tanggal Checkout</th>
                          <th>Lama Inap</th>
                          <th>Total Harga</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $data = mysqli_query($koneksi,"SELECT * FROM tbl_booking WHERE nama_pemesan = '$_SESSION[nama]'");
                        // LEFT JOIN tbl_user ON tbl_booking.id_user=tbl_user.id_user"
                        $no=0;
                        while ($select_result = mysqli_fetch_array($data))
                        {
                          $id = $select_result['id_booking'];
                          $kode = $select_result['kode_booking'];
                          $user = $select_result['nama_pemesan'];
                          $email = $select_result['email'];
                          $nama_rooms = $select_result['nama_rooms'];
                          $tgl = $select_result['tgl_masuk'];
                          $tgl_keluar = $select_result['tgl_keluar'];
                          $lama = $select_result['lama'];
                          $ttl_harga = $select_result['total_harga'];
                          $status = $select_result['status'];
                          $no++;
                        ?>
                          <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $kode ?></td>
                          <td><?php echo $user ?></td>
                          <td><?php echo $email ?></td>
                          <td><?php echo $nama_rooms ?></td>
                          <td><?php echo $tgl ?></td>
                          <td><?php echo $tgl_keluar ?></td>
                          <td><?php echo $lama ?> Malam</td>
                          <td>Rp.<?php echo number_format($ttl_harga, 0, ',', '.') ?></td>
                          <td><?php echo $status ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    </div>
    </div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Location
                            </h3>
                            <p class="footer_text"> Jl. Rangga Gading No.01, Gudang, Kecamatan Bogor Tengah <br>
                                Kota Bogor, Jawa Barat 16123</p>
                            <a href="https://g.page/ibikesatuan?share" class="btn-details">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservation
                            </h3>
                            <p class="footer_text">0812-6789-9900 <br>
                                kelompok2@gmail.com</p>
                        </div>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

   
            
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/scrollIt.js"></script>
    <script src="../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/nice-select.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/gijgo.min.js"></script>

    <script src="../admin/modules/datatables/datatables.min.js"></script>
    <script src="../admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../admin/modules/jquery-ui/jquery-ui.min.js"></script>

    
    <script src="../admin/js/page/index-0.js"></script>
    <script src="../admin/js/page/modules-datatables.js"></script>
                                      
  
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>

    <script src="../assets/js/main.js"></script>

</body>
</html>