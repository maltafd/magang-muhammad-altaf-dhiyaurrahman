<?php
include './controller/User_Controller.php';

session_start();
if (isset($_SESSION['id'])) {
	header("location:index.php");
}

$register = new User_Controller();
$pesan_form = '';
if(isset($_POST['register']))
{
	$pesan_form = $register->register($_POST);
}

$nama_depan = (isset($_POST['nama_depan'])) ? $_POST['nama_depan'] : '';
$nama_belakang = (isset($_POST['nama_belakang'])) ? $_POST['nama_belakang'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$konfirmasi_password = (isset($_POST['konfirmasi_password'])) ? $_POST['konfirmasi_password'] : '';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-primary"
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up</h2>
          <?php echo $pesan_form ?>
	                            <form method="post" action="">
	                            	<div class="row">
	                            		<div class="col-md-6">
			                                <div class="form-group mb-3">
			                                    <input name="nama_depan" value="<?= $nama_depan ?>" type="text" placeholder="Nama Depan" required class="form-control rounded-pill border-0 shadow-sm px-4">
			                                </div>
	                            		</div>
	                            		<div class="col-md-6">
			                                <div class="form-group mb-3">
			                                    <input name="nama_belakang" value="<?= $nama_belakang ?>" type="text" placeholder="Nama Belakang" required class="form-control rounded-pill border-0 shadow-sm px-4">
			                                </div>
	                            		</div>
	                            	</div>
	                                <div class="form-group mb-3">
	                                    <input name="username" value="<?= $username ?>" type="text" placeholder="Username" required class="form-control rounded-pill border-0 shadow-sm px-4">
	                                </div>
	                                <div class="form-group mb-3">
	                                    <input name="email" value="<?= $email ?>" type="email" placeholder="Email" required class="form-control rounded-pill border-0 shadow-sm px-4">
	                                </div>
	                                <div class="form-group mb-3">
	                                    <input name="password" value="<?= $password ?>" type="password" placeholder="Password" required class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
	                                </div>
	                                <div class="form-group mb-3">
	                                    <input name="konfirmasi_password" value="<?= $konfirmasi_password ?>" type="password" placeholder="Konfirmasi Password" required class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
	                                </div>
	                                <button name="register" type="submit" class="btn btn-primary w-100 center btn-block text-uppercase mb-2 rounded-pill shadow-sm">Registrasi</button>
	                                <div class="text-center">
	                                	<p>Sudah punya akun? <a href="login.php">Login</a></p>
	                                </div>
	                            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    
</body>
</html>