<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/svg+xml" sizes="1181x1181" href="../logo.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Beranda</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<?php
  include 'component\db_connection.php';
?>

<body id="page-top">
    <div id="wrapper">
        <!-- Start: Sidebar_Configured -->
        <nav class="navbar navbar-dark navbar-expand-md shadow align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <!-- Start: REM:SidebarTitle --><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="assets/img/LOGO_PNG.svg" style="width: 48px;max-width: 48px;filter: blur(0px);"><div class="sidebar-brand-text mx-3"><span style="color: rgb(255,255,255);">AKREDITASI<br>PT<br></span></div></a>
                <!-- End: REM:SidebarTitle -->
                <!-- Start: REM:SidebarLine -->
                <hr class="sidebar-divider my-0" style="width: 75%;">
                <!-- End: REM:SidebarLine -->
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="../index.php"><i class="fas fa-home" style="color: rgb(255,255,255);"></i><span style="color: rgb(255,255,255);">Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="component/login.php"><i class="icon-login" style="color: rgba(255,255,255,0.5);"></i><span style="color: rgba(255,255,255,0.5);">Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="component/login.php"><i class="fas fa-plus" style="color: rgba(255,255,255,0.5);"></i><span style="color: rgba(255,255,255,0.5);">Input Data</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <!-- Start: REM:SidebarButtonCollapse -->
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="background: rgb(0,0,0);"></button></div>
                <!-- End: REM:SidebarButtonCollapse -->
            </div>
        </nav>
        <!-- End: Sidebar_Configured -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Start: #UI_Navbar_Header -->
                <nav class="navbar navbar-light navbar-expand shadow mb-4 topbar static-top" style="background: #f3b72c;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw" style="color: rgb(0,0,0);"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><strong>Guest</strong></span><i class="fa fa-user-o border rounded-circle border-dark" style="font-size: 18px;line-height: 28px;height: 32px;width: 32px;text-align: center;color: rgb(0,0,0);"></i></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item text-dark" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-dark" href="component/login.php"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Login</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <!-- End: #UI_Navbar_Header -->
            <!-- Start: #Content_Heading -->
            <div class="container-fluid">
                <h3 class="text-dark mb-1"><strong>Home</strong></h3>
            </div>
            <!-- End: #Content_Heading -->
            <div class="container-fluid">
                <!-- Start: Split Button Secondary --><a class="btn btn-primary btn-icon-split" role="button" style="background: #011548;" href="component/login.php"><span class="text-white-50 icon"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></span><span class="text-white text"><strong>Entri Data</strong></span></a>
                <!-- End: Split Button Secondary -->
            </div>
            <!-- Start: #Content_Line -->
            <div class="container-fluid"><hr style="width:100%;text-align:left;margin-left:0;background-color:gray"></div>
            <!-- End: #Content_Line -->
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Riwayat Entri</h3>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive" style="box-shadow: 0px 0px 4px 2px rgba(128,128,128,0.5);border-radius: 16px;margin: 5px;padding: 5px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="color: rgb(0,0,0);">Nama Prodi</th>
                                        <th style="color: rgb(0,0,0);">Status Akreditasi</th>
                                    </tr>
                                </thead>
                                <tbody style="color: rgb(0,0,0);">
                                  <?php
                                  $nama_pt = mysqli_query($connection, "SELECT * from tbl_main");
                                  foreach ($nama_pt as $data) {
                                  echo "<tr style='color: rgb(0,0,0);'>
                                        <td style='color: rgb(0,0,0);'>" . $data['nama_pt'] . "</td>
                                        <td style='color: rgb(0,0,0);'>" . $data['akred_saatini'] . "</td>
                                    </tr>";
                                    }
          	                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"><hr style="width:100%;text-align:left;margin-left:0;background-color:gray"></div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © KP24 2021</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
