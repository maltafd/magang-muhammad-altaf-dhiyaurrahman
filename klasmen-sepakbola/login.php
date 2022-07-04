<?php
include './controller/User_Controller.php';

session_start();
if (isset($_SESSION['id'])) {
	header("location:index.php");
}

$email = (isset($_SESSION['email'])) ? $_SESSION['email'] : '';
$password = (isset($_SESSION['password'])) ? $_SESSION['password'] : '';

$login = new User_Controller();
$login = $login->login($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/login.css">
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
          <h2 class="fw-bold mb-5">Login</h2>
	                            <p class="text-muted mb-4">Login untuk mengelola klasemen.</p>
	                            <?php echo $login ?>
	                            <form method="post" action="">
	                                <div class="form-group mb-3">
	                                    <input name="email" type="text" placeholder="Username/Email" value="<?php echo $email ?>" class="form-control rounded-pill border-0 shadow-sm px-4">
	                                </div>
	                                <div class="form-group mb-3">
	                                    <input name="password" type="password" placeholder="Password" value="<?php echo $password ?>" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
	                                </div>
	                                <div class="custom-control custom-checkbox mb-3">
	                                    <input name="ingat" type="checkbox" checked class="custom-control-input">
	                                    <label for="customCheck1" class="custom-control-label">Ingat Saya</label>
	                                </div>
	                                <button name="login" type="submit" class="btn btn-primary w-100 btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
	                                <div class="text-center">
	                                	<p>Belum punya akun? <a href="register.php">Register</a></p>
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