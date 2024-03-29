<!-- @format -->
<?php
//include auth file on all secure pages
include("auth.php");
include 'koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIMPEG | Admin - Kopdit Sinar Harapan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="../assets/css/css.css" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <script src="../assets/css/sweetalert.min.js"></script>
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Messages</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>3</span></div>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notification</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>
                                                        Cum sociis natoque penatibus et magnis dis
                                                        parturient montes
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span>
                                    <div class="spinner4 spinner-4"></div>
                                    <div class="ntd-ctn"><span>2</span></div>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Tasks</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <div class="skill">
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>HTML5 Validation Report</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>95%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Google Chrome Extension</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>85%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Social Internet Projects</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>75%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Bootstrap Admin</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 65%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>65%</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-bt">
                                                <div class="lead-content">
                                                    <p>Youtube App</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                    <span>55%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-settings"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">

                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/favicon.png" alt="" />
                                                    <div class="chat-avaible">
                                                        <i class="notika-icon notika-dot"></i>
                                                    </div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3> <?php echo $_SESSION['username']; ?><br><?php echo $_SESSION['level']; ?></h3>
                                                    <p>Kopdit Sinar Harapan</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="../logout.php">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li>
                                    <a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li>
                                            <a href="form-components.html">Form Components</a>
                                        </li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a></li>
                                        <li><a href="alert.html">Alerts</a></li>
                                        <li><a href="modals.html">Modals</a></li>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="tabs.html">Tabs</a></li>
                                        <li><a href="accordion.html">Accordion</a></li>
                                        <li><a href="dialog.html">Dialogs</a></li>
                                        <li><a href="popovers.html">Popovers</a></li>
                                        <li><a href="tooltips.html">Tooltips</a></li>
                                        <li><a href="dropdown.html">Dropdowns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="invoice.html">Invoice</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="color.html">Color</a></li>
                                        <li><a href="login-register.html">Login Register</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <?php if ($_SESSION['level'] == "admin") {
                            
                                ?>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index') {
                                echo ' class="active"';
                            } ?>>
                            <a href="index"><i class="notika-icon notika-house"></i> Beranda</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pegawai') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_pegawai"><i class="fa fa-users" aria-hidden="true"></i> Pegawai</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_mutasi') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_mutasi"><i class="fa fa-arrows" aria-hidden="true"></i> Mutasi</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_cuti') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_cuti"><i class="fa fa-universal-access" aria-hidden="true"></i> Cuti</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_gaji') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_gaji"><i class="fa fa-money" aria-hidden="true"></i> Gaji</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pensiun') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_pensiun"><i class="fa fa-list-alt" aria-hidden="true"></i>Pensiun</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_jabatan') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_jabatan"><i class="fa fa-handshake-o" aria-hidden="true"></i> Jabatan</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'edit_profil') {
                                echo ' class="active"';
                            } ?>>
                            <a href="edit_profil"><i class="fa fa-address-card" aria-hidden="true"></i> Profil</a>
                        </li>
                        <!-- <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_artikel') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_artikel"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Artikel</a>
                        </li> -->
                        <?php } ?>
                        <?php if ($_SESSION['level'] == "general manager") {
                            
                            ?>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index') {
                                echo ' class="active"';
                            } ?>>
                            <a href="index"><i class="notika-icon notika-house"></i> Beranda</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_cuti') {
                                echo ' class="active"';
                            } ?>>
                              <a href="v_pegawai"><i class="fa fa-users" aria-hidden="true"></i> Pegawai</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_mutasi') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_mutasi"><i class="fa fa-arrows" aria-hidden="true"></i> Mutasi</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_cuti') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_cuti"><i class="fa fa-universal-access" aria-hidden="true"></i> Cuti</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_gaji') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_gaji"><i class="fa fa-money" aria-hidden="true"></i> Gaji</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_pensiun') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_pensiun"><i class="fa fa-list-alt" aria-hidden="true"></i>Pensiun</a>
                        </li>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'v_jabatan') {
                                echo ' class="active"';
                            } ?>>
                            <a href="v_jabatan"><i class="fa fa-handshake-o" aria-hidden="true"></i> Jabatan</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.html">Dashboard One</a></li>
                                <li><a href="index-2.html">Dashboard Two</a></li>
                                <li><a href="index-3.html">Dashboard Three</a></li>
                                <li><a href="index-4.html">Dashboard Four</a></li>
                                <li><a href="analytics.html">Analytics</a></li>
                                <li><a href="widgets.html">Widgets</a></li>
                            </ul>
                        </div> -->
                    <!-- <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="view-email.html">View Email</a></li>
                                <li><a href="compose-email.html">Compose Email</a></li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Animations</a></li>
                                <li><a href="google-map.html">Google Map</a></li>
                                <li><a href="data-map.html">Data Maps</a></li>
                                <li><a href="code-editor.html">Code Editor</a></li>
                                <li><a href="image-cropper.html">Images Cropper</a></li>
                                <li><a href="wizard.html">Wizard</a></li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="flot-charts.html">Flot Charts</a></li>
                                <li><a href="bar-charts.html">Bar Charts</a></li>
                                <li><a href="line-charts.html">Line Charts</a></li>
                                <li><a href="area-charts.html">Area Charts</a></li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="normal-table.html">Normal Table</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-examples.html">Form Examples</a></li>
                            </ul>
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="notification.html">Notifications</a></li>
                                <li><a href="alert.html">Alerts</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="dialog.html">Dialogs</a></li>
                                <li><a href="popovers.html">Popovers</a></li>
                                <li><a href="tooltips.html">Tooltips</a></li>
                                <li><a href="dropdown.html">Dropdowns</a></li>
                            </ul>
                        </div> -->
                    <!-- <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="color.html">Color</a></li>
                                <li><a href="login-register.html">Login Register</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu area End-->
    <!-- Start Status area -->

    <!-- End Realtime sts area-->
    <!-- Start Footer area-->