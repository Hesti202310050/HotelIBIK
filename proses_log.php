<?php
include"koneksi.php";
session_start();
if (isset($_SESSION['login']))
{
  header('location:index.php');
}
?>
<?php
if(isset($_POST['login']))
{
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  $login = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username='$user' AND password=('$pass')");
  $cek = mysqli_num_rows($login);
  $data = mysqli_fetch_array($login);

    if($cek > 0)
    {
      if($data['hak_akses'] == 'Admin')
      {
        $_SESSION['login'] = $data['id_user'];
        header("location:index_admin.php");
      }
      elseif ($data['hak_akses'] == 'User')
      {
        $_SESSION['masuk'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama'];
        header("location:user/index-user.php");
      }
    }
    else
    {
      $_SESSION['pesanError'] = '  Username Atau Password Salah';
      header('location:index.php');
    }
}
?>
