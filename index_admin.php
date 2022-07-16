<?php
include"koneksi.php";
session_start();
if ($_SESSION['login'] == "")
{
  header('location:index.php');
}
$profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$_SESSION[login]'");
$row = mysqli_fetch_array($profil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hotel IBIK</title>
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
          $query = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE id_user = '$_SESSION[login]'");
          $row = mysqli_fetch_array($query);
          ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            </a>
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
              <h1>Dashboard</h1>
              <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="index_admin.php">Dashboard</a></div>
              </div>
            </div>
            <h1>Welcome</h1>
          </section>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="logoutModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top:50%;">
              <div class="modal-body">
                <h6>Anda Yakin Untuk Logout?</h6>
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
  <script src="admin/modules/highchart/code/highcharts.js"></script>

  <!-- Page Specific JS File -->
  <script src="admin/js/page/index.js"></script>
  <script src="admin/js/page/modules-datatables.js"></script>

  <!-- Template JS File -->
  <script src="admin/js/scripts.js"></script>
  <script src="admin/js/custom.js"></script>

  <!-- Js untuk pie chart -->
  <script type="text/javascript">
    Highcharts.chart('total_transaksi', {
      chart: {
        type: 'pie',
        options3d: {
          enabled: true,
          alpha: 45,
          beta: 0
        }
      },
      title: {
        text: 'Total Transaksi Barang'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
        pie: {
           allowPointSelect: true,
           cursor: 'pointer',
          depth: 35,
          dataLabels: {
            enabled: true,
            format: '{point.name}'
          }
        }
      },
      series: [{
        type: 'pie',
        name: 'Transaksi',
        data: [
          ['Keluar Barang', <?php echo $keluar  ?>],
          ['Kelola Barang', <?php echo $kelola ?>],
          {
            name: 'Masuk Barang',
            y: <?php echo $masuk  ?>,
            sliced: true,
            selected: true
          }
        ]
      }]
    });
  </script>

  <!-- Js untuk bar chart -->
  <script type="text/javascript">
    Highcharts.chart('jumlahbarang', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Jumlah Stok Barang'
      },
      xAxis: {
        type: 'category',
        labels: {
          rotation: -45,
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Jumlah (unit)'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        pointFormat: 'Total Barang: <b>{point.y:f} unit</b>'
      },
      series: [{
        name: 'Barang',
        data: [
          <?php
          $data = mysqli_query($koneksi,"SELECT * FROM tbl_barang");
          while ($row = mysqli_fetch_array($data))
          {
            $nama = $row['nama_barang'];
            $jumlah = $row['jumlah'];
          ?>
              ['<?php echo $nama ?>', <?php echo $jumlah ?>],
          <?php  } ?>
        ],
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: '#FFFFFF',
          align: 'right',
          format: '{point.y:f}', // one decimal
          y: 10, // 10 pixels down from the top
          style: {
            fontSize: '15px',
            fontFamily: 'Nunito, Segoe UI, arial'
          }
        }
      }]
    });
  </script>
</body>

</html>
