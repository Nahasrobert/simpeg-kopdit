<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../admin/img/favicon.png" rel="icon" />

<!--===============================================================================================-->	

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <link href="../admin/img/favicon.png" rel="icon" /> -->


<!--===============================================================================================-->
</head>
<body>
<?php
require('../admin/koneksi/koneksi.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['nip'])) {
// removes backslashes
$nip = stripslashes($_REQUEST['nip']);
//escapes special characters in a string
$nip = mysqli_real_escape_string($con, $nip);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con, $password);
//Checking is user existing in the database or not
$query = "SELECT * FROM `pegawai` WHERE nip='$nip'
and password='" . md5($password) . "'";
$result = mysqli_query($con, $query) or die(mysqli_error());
$rows = mysqli_num_rows($result);
if ($rows == 1) {
	$_SESSION['nip'] = $nip;
	// Redirect user to index.php
	header("Location: ../index");
} else {
	$_SESSION['errorMessage'] = true;
	// header("Location: index.php");
	header("Location: index");
	exit();
}
} else {
?>
<div class="login-content">
	<!-- Login -->
	<div class="nk-block toggled" id="l-login">
	<div class="nk-form">
	
		<?php
		if (isset($_SESSION['errorMessage'])) {
		echo "<script>
		swal('Gagal!', 'nip dan password salah!', 'warning');
		</script>";
		}
		?>
<div class="limiter">
	<div class="container-login100">

			<div class="wrap-login100">
			<br>
			<center><h1 style="margin-top: -120px;">Sistem Informasi Kepegawaian Kopdit Sinar Harapan</h1></center>
			<!-- <center>Selamat Datang di Kopdit Sinar Harapan</center> -->
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>
			
			<form action="" method="post" name="login" class="login100-form validate-form">
				<span class="login100-form-title">
					Login 
					Pegawai
				</span>
				<div class="wrap-input100 validate-input" data-validate = "Valid NIP is required">
					<input class="input100" type="text" name="nip" placeholder="NIP">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-user-o" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="container-login100-form-btn">
					<button type="submit" name="submit" class="login100-form-btn">
						Login
					</button>
					
				</div>
					
				<div class="container-login100-form-btn">
				<a href="../loginadm">Login Admin & GM</a>
				</div>

				<!-- <div class="text-center p-t-12">
					<span class="txt1">
						Forgot
					</span>
					<a class="txt2" href="#">
						nip / Password?
					</a>
				</div> -->
				<div class="text-center p-t-136">
					<a class="txt2" href="#">
						<!-- Create your Account -->
						<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
					</a>
				</div>
			</form>
			
		</div>
	</div>
</div>

<?php } ?>


<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>