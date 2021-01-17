<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/svg+xml" sizes="1181x1181" href="../../logo.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin - Manajemenen Data</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="../../assets/css/untitled.css">
</head>
<body id="page-top">

  <?php
    include '..\..\component\db_connection.php';
  ?>

    <div id="wrapper">
        <!-- Start: REM:Sidebar -->
        <nav class="navbar navbar-dark shadow align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <!-- Start: REM:SidebarTitle --><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="../../assets/img/LOGO_PNG.svg" style="width: 48px;max-width: 48px;filter: blur(0px);"><div class="sidebar-brand-text mx-3"><span style="color: rgb(255,255,255);">AKREDITASI<br>PT<br></span></div></a>
                <!-- End: REM:SidebarTitle -->
                <!-- Start: REM:SidebarLine -->
                <hr class="sidebar-divider my-0" style="width: 75%;">
                <!-- End: REM:SidebarLine -->
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="../index.php"><i class="fas fa-home" style="color: rgba(255,255,255,0.5);"></i><span style="color: rgba(255,255,255,0.5);">Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../../component/logout.php"><i class="icon-logout" style="color: rgba(255,255,255,0.5);"></i><span style="color: rgba(255,255,255,0.5);">Logout</span></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-database" style="color: rgb(255,255,255);"></i><strong>Data</strong></a>
                        <div class="dropdown-menu" style="background: rgb(1,21,72);border-color: rgba(255,255,255,0);"><a class="dropdown-item" href="admin-add-data.php">Tambah Data</a><a class="dropdown-item" href="admin-manage-data.php"><strong><span style="text-decoration: underline;">Manipulasi Data</span></strong></a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-user-circle" style="color: rgba(255,255,255,0.5);"></i><span style="color: rgba(255,255,255,0.5);">Profile</span></a></li>
                </ul>
                <!-- Start: REM:SidebarButtonCollapse -->
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                <!-- End: REM:SidebarButtonCollapse -->
            </div>
        </nav>
        <!-- End: REM:Sidebar -->
        <!-- Start: REM:ContentWrapper -->
        <div class="d-flex flex-column" id="content-wrapper">
            <!-- Start: REM:Content -->
            <div id="content">
                <!-- Start: REM:HeaderNavbar -->
                <nav class="navbar navbar-light navbar-expand shadow mb-4 topbar static-top" style="background: #2cf3db;max-height: 50px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button" style="color: rgb(0,0,0);"><i class="fas fa-bars"></i></button><span style="color: rgb(0,0,0);"><strong>Manipulasi&nbsp;Data</strong></span>
                        <ul
                            class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href=""><span class="mr-2 text-gray-600 small"><strong>Admin</strong></span><i class="fas fa-user-shield border rounded-circle border-dark" style="width: 32px;height: 32px;text-align: center;font-size: 18px;color: rgb(0,0,0);line-height: 28px;"></i></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item text-secondary" href=""><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-secondary" href="../../component/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <!-- End: REM:HeaderNavbar -->
            <!-- Start: REM:HeaderLine -->
            <div class="container-fluid"><hr style="width:100%;text-align:left;margin-left:0;background-color:gray"></div>
            <!-- End: REM:HeaderLine -->
            <!-- Start: REM:Report -->
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-active" style="color: rgb(0,0,0);">No</th>
                                <th class="table-active" style="text-align: center;color: rgb(0,0,0);">Nama Perguruan Tinggi</th>
                                <th class="table-active" style="text-align: center;color: rgb(0,0,0);">Akreditasi Saat Ini</th>
                                <th class="table-active" style="text-align: center;color: rgb(0,0,0);">Tahun Akademik</th>
                                <th class="table-active" style="text-align: center;color: rgb(0,0,0);">Program Pendidikan</th>
                                <th class="table-active" style="text-align: center;color: rgb(0,0,0);">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $nama_pt = mysqli_query($connection, "SELECT * from tbl_main");
                            $no = 1;
                            foreach ($nama_pt as $data) {
                            echo "<tr>
                                <td style='color: rgb(0,0,0);'>" . $no . "</td>
                                <td style='color: rgb(0,0,0);'>" . $data['nama_pt'] . "</td>
                                <td style='color: rgb(0,0,0);'>" . $data['akred_saatini'] . "</td>
                                <td style='color: rgb(0,0,0);'>" . $data['tahun_akademik'] . "</td>
                                <td style='color: rgb(0,0,0);'>" . $data['program_pt'] . "</td>
                                <td style='text-align: center;'>
                                    <div class='btn-group' role='group'>
                                      <a class='btn btn-success' role='button' href='admin-report-data.php?id_pt=$data[id]'>
                                        <i>Review</i>
                                      </a>
                                      <a class='btn btn-danger' role='button' href='delete.php?id_pt=$data[id]'>
                                        <i>Delete</i>
                                      </a>
                                    </div>
                                </td>
                            </tr>";


                              $no++;
                            }
  	                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: REM:Report -->
        </div>
        <!-- End: REM:Content -->
        <!-- Start: REM:FooterLine -->
        <div class="container-fluid"><hr style="width:100%;text-align:left;margin-left:0;background-color:gray"></div>
        <!-- End: REM:FooterLine -->
        <!-- Start: REM:Footer -->
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © KP24 2021</span></div>
            </div>
        </footer>
        <!-- End: REM:Footer -->
    </div>
    <!-- End: REM:ContentWrapper --><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../../assets/js/theme.js"></script>
</body>

</html>
