<!-- @format -->

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login SIMPEG | Kopdit</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.png" />
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet" />
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/font-awesome.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/owl.carousel.css" />
  <link rel="stylesheet" href="admin/css/owl.theme.css" />
  <link rel="stylesheet" href="admin/css/owl.transitions.css" />
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/animate.css" />
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/normalize.css" />
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/scrollbar/jquery.mCustomScrollbar.min.css" />
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/wave/waves.min.css" />
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/notika-custom-icon.css" />
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/main.css" />
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="admin/style.css" />
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="admin/css/responsive.css" />
  <!-- modernizr JS
		============================================ -->
  <script src="admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
  <!-- Login Register area Start-->



  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
  <!-- Login Register area Start-->
  <?php
  require('admin/koneksi/koneksi.php');
  session_start();
  // If form submitted, insert values into the database.
  if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    //Checking is user existing in the database or not
    $query = mysqli_query($con,"select * from admin where username='$username' and password='" . md5($password) . "'");
    $rows = mysqli_num_rows($query);
    if ($rows > 0 ) {
      $data = mysqli_fetch_assoc($query);
      if($data['level']=="admin"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin/index");
     
      // cek jika user login sebagai pegawai
      }
      else if($data['level']=="general manager"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "general manager";
        // alihkan ke halaman dashboard pegawai
        header("location:admin/index");
     
      // cek jika user login sebagai pengurus
      }
    } else {
      $_SESSION['errorMessage'] = true;
      // header("Location: index.php");
      header("Location: login.php");
      exit();
    }
  } else {
  ?>
    <div class="login-content">
      <!-- Login -->
      <div class="nk-block toggled" id="l-login">
        <div class="nk-form">
          <img src="admin/img/favicon.png" style="width: 20% ;">
          <h3>Login Admin</h3>
          <?php
          if (isset($_SESSION['errorMessage'])) {
            echo "<script>
            swal('Gagal!', 'Username dan password salah!', 'warning');
          </script>";
          }
          ?>

          <br>
          <form action="" accept="form" method="post" name="login">
            <div class="input-group">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
              <div class="nk-int-st">
                <input type="text" name="username" required class="form-control" placeholder="Username" />
              </div>
            </div>
            <div class="input-group mg-t-15">
              <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
              <div class="nk-int-st">
                <input type="password" name="password" required class="form-control" placeholder="Password" />
              </div>
            </div>
            <div class="form-example-int mg-t-20">
              <button name="submit" type="sumbit" class="btn btn-success notika-btn-success">Login</button>
              <!-- <input name="submit" type="submit" class="btn btn-success notika-btn-success" value="Login" /> login -->
            </div>
          </form>
        </div>
      </div>
      <!-- <div class="form">
                    <h1>Log In</h1>
                    <form action="" method="post" name="login">
                        <input type="text" name="username" placeholder="Username" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <input name="submit" type="submit" value="Login" />
                    </form>
                    <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
                </div> -->
    <?php } ?>



    <!-- jquery
		============================================ -->
    <script src="admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="admin/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="admin/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="admin/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="admin/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="admin/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="admin/js/counterup/jquery.counterup.min.js"></script>
    <script src="admin/js/counterup/waypoints.min.js"></script>
    <script src="admin/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="admin/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="admin/js/flot/jquery.flot.js"></script>
    <script src="admin/js/flot/jquery.flot.resize.js"></script>
    <script src="admin/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="admin/js/knob/jquery.knob.js"></script>
    <script src="admin/js/knob/jquery.appear.js"></script>
    <script src="admin/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="admin/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="admin/js/wave/waves.min.js"></script>
    <script src="admin/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="admin/js/icheck/icheck.min.js"></script>
    <script src="admin/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="admin/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="admin/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="admin/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="admin/js/main.js"></script>
</body>

</html>