<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIS</title>
  <link rel="icon" href="assets/img/favicon.ico">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/animate.css">
</head>

<body background="assets/img/inventaris.png" style="background-repeat: no-repeat;background-attachment: fixed;background-size: cover; ">
  <div id="app">
    <section class="section">
      <div class="container animated fadeIn mt-3">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/LOGO SIS.png" alt="logo" width="30%" >
            </div>
            <?php
              // menampilkan pesan jika ada pesan
              if (isset($_SESSION['pesanError']) && $_SESSION['pesanError'] <> '')
              {
                echo '<div id="pesanError" class="alert alert-danger" style="display:none;"><i class="fas fa-exclamation-circle"></i>'.$_SESSION['pesanError'].'</div>';
              }
              //mengatur session pesan menjadi kosong
              $_SESSION['pesanError'] = '';
              //tutup
            ?>
            <div class="card card-primary">
              <div class="card-header" style="min-height:0%">
              </div>
              <div class="card-body">
                <form method="POST" action="proses_log.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                      Username tidak boleh kosong
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"  required>
                    <div class="invalid-feedback">
                      Password tidak boleh kosong
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" name="login">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(document).ready(function(){setTimeout(function(){$("#pesanError").fadeIn('slow');},300);});
    setTimeout(function(){$("#pesanError").fadeOut('slow');}, 3000);
  </script>

</body>
</html>
