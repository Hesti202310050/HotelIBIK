<?php
include"koneksi.php";
session_start();
if ($_SESSION['masuk'] == "")
{
  header('location:index.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[masuk]'");
$row = mysqli_fetch_array($profil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>HOTEL IBIK</title>
  <link rel="icon" href="admin/img/IBIK_1.png">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="admin/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="admin/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/css/style.css">
  <link rel="stylesheet" href="admin/css/components.css">
  <link rel="stylesheet" href="admin/css/animate.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <?php
          $query = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE id = '$_SESSION[masuk]'");
          $row = mysqli_fetch_array($query);
          ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $row['username'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.php" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="" data-toggle="modal" data-target="#logoutModal" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index_admin.php">Hotel IBIK</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index_admin.php">H-IBIK</a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="index_admin.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="user.php"><i class="fas fa-user"></i> <span>User</span></a></li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-city"></i> <span>Venue</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="rooms.php">Rooms</a></li>
                <li><a class="nav-link" href="meeting_rooms.php">Meeting Rooms</a></li>
                <li><a class="nav-link" href="ballrooms.php">Ballrooms</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> <span>Transaksi</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="booking.php">Booking</a></li>
                <li><a class="nav-link" href="transaksi/keluar_barang.php">Checkin</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-edit"></i> <span>Laporan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="laporan/barang.php">Booking Rooms</a></li>
              </ul>
            </li>
          </ul>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <div class="animated fadeIn">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="profile.php">Profile</div></a>
            </div>
          </div>
            <?php
            // menampilkan pesan jika ada pesan
            if (isset($_SESSION['pesanSimpan']) && $_SESSION['pesanSimpan'] <> '')
            {
              echo '<div id="pesanSimpan" class="alert alert-success" style="display:none;"><i class="fas fa-check-circle"></i>'.$_SESSION['pesanSimpan'].'</div>';
            }
            //mengatur session pesan menjadi kosong
            $_SESSION['pesanSimpan'] = '';
            //tutup
            if(isset($_SESSION['pesanError']) && $_SESSION['pesanError'] <> '')
            {
              echo '<div id="pesanError" class="alert alert-danger" style="display:none;"><i class="fas fa-exclamation-circle"></i>'.$_SESSION['pesanError'].'</div>';
            }
            $_SESSION['pesanError'] = '';
            //tutup
            ?>
              <div class="col-12">
                <div class="card">
                  <div class="card-header bg-primary text-white">
                    <b>Profile</b>
                  </div>
                  <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <label>
                        ID : <?php echo $row['id'] ?>
                      </label>
                      <br>
                      <label>
                        Nama : <?php echo $row['nama_lengkap'] ?>
                      </label>
                      <br>
                      <label>
                        Hak Akses : <?php echo $row['hak_akses'] ?>
                      </label>
                    </div>
                    <div class="col-6">
                      <label>
                        Username : <?php echo $row['username'] ?>
                      </label>
                      <br>
                      <label>
                        Password : <?php echo str_replace($row['password'], $row['password'], "*****") ?>
                      </label>
                    </div>
                  </div>
                  <br>
                  <a href="#" class="editModal" data-toggle="modal" id="<?php echo $row['id'] ?>"><button class="btn btn-primary btn-xs"><i class="fas fa-edit"></i>Edit Profile</button></a>
                  </div>
                  </div>
                </div>
              </div>
        </section>
      </div>

    <!-- Modal Popup untuk Edit-->
    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>

    <!-- Modal Popup untuk logout-->
    <div class="modal fade" tabindex="-1" role="dialog" id="logoutModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:40%;">
          <div class="modal-header">
            <h5 class="modal-title">Yakin?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Logout Dari Aplikasi?</p>
          </div>
          <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="main-footer">
    <div class="footer-left">
      @HOTELIBIK
    </div>
  </footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="admin/modules/jquery.min.js"></script>
<script src="admin/modules/popper.js"></script>
<script src="admin/modules/tooltip.js"></script>
<script src="admin/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="admin/modules/moment.min.js"></script>
<script src="admin/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="admin/modules/chart.min.js"></script>
<script src="admin/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="admin/modules/datatables/datatables.min.js"></script>
<script src="admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="admin/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="admin/js/page/index-0.js"></script>
<script src="admin/js/page/modules-datatables.js"></script>

<!-- Template JS File -->
<script src="admin/js/scripts.js"></script>
<script src="admin/js/custom.js"></script>

<!-- Javascript untuk menampilkan pesan-->
<script>
  //angka 300 dibawah ini artinya pesan akan muncul dalam 0,3 detik setelah document ready
  $(document).ready(function(){setTimeout(function(){$("#pesanSimpan").fadeIn('slow');},300);});
  //  angka 5000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
  setTimeout(function(){$("#pesanSimpan").fadeOut('slow');}, 3000);
</script>

<script>
  $(document).ready(function(){setTimeout(function(){$("#pesanError").fadeIn('slow');},300);});
  setTimeout(function(){$("#pesanError").fadeOut('slow');}, 3000);
</script>

<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
   $(document).ready(function () {
   $(".editModal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "edit_profil.php",
             type: "GET",
             data : {id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>
</body>
</html>
