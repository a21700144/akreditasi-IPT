<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/svg+xml" sizes="1181x1181" href="../../logo.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin - Laporan</title>
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
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-database"></i>&nbsp;<strong>Data</strong></a>
                        <div class="dropdown-menu" style="background: rgb(1,21,72);border-color: rgba(255,255,255,0);"><a class="dropdown-item" href="admin-add-data.php">Tambah Data</a><a class="dropdown-item" href="admin-manage-data.php">Manipulasi Data</a><a class="dropdown-item" href="admin-report-data.php"><i class="fa fa-long-arrow-right"></i><strong>&nbsp;<span style="text-decoration: underline;">Report&nbsp;Data</span></strong></a></div>
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
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button" style="color: rgb(0,0,0);"><i class="fas fa-bars"></i></button><span style="color: rgb(0,0,0);"><strong>Report Data</strong></span>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
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
            <!-- Start: REM:Form -->
            <div class="container-fluid">
                <!-- Start: REM:Form_MainMergeInput -->
                <div class="form-group">
                    <form style="max-width: 800px;" method="get">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="3">HASIL REPORT NILAI AKREDITASI</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <?php
                          include '..\..\component\db_connection.php';
                          $review_pt = mysqli_query($connection, "SELECT * from tbl_main");
                          $no = 1;


                          foreach ($review_pt as $data) {

						  echo "<div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Nama Prodi/Perguruan Tinggi</td>
                                        <th style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>" . $data['nama_pt'] . "<br></th>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Akreditasi saat ini</td>
                                        <th style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>" . $data['akred_saatini'] . "<br></th>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>TS&nbsp;(Tahun akademik penuh terakhir saat pengisian ISK):<br></td>
                                        <th style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>" . $data['tahun_akademik'] . "<br></th>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Program&nbsp;Pendidikan / Perguruan&nbsp;Tinggi:<br></td>
                                        <th style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>DOSEN TETAP</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>VALUE</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah DTPS</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_dtps'] . "</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'></tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah DTPS yang berpendidikan tertinggi Doktor/Doktor Terapan/Subspesialis<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_dtps_s3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah DTPS yang memiliki jabatan akademik Guru Besar<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_dtps_rektor'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah DTPS yang memiliki jabatan akademik Lektor Kepala<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_dtps_lektor_kepala'] . "</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah DTPS yang memiliki jabatan akademik Lektor<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_dtps_lektor'] . "</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>KURIKULUM</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td colspan='2' style='color: rgb(0,0,0);line-height: 16px;'><strong>Evaluasi dan Pemutakhiran Kurikulum</strong></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td colspan='2' style='color: rgb(0,0,0);line-height: 16px;'><strong>Capaian Pembelajaran</strong></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td colspan='2' style='color: rgb(0,0,0);line-height: 16px;'><strong>Struktur Kurikulum</strong></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>PENJAMIN MUTU</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 17px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style='color: rgb(0,0,0);line-height: 17px;'>
                                        <td style='color: rgb(0,0,0);line-height: 17px;'>[NOT_TESTED]</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 17px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>PELAMPAUAN SN-DIKTI</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>PELACAKAN KELULUSAN</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>DATA LULUSAN</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>VALUE</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-4 (2016/2017)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_ts4'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-3 (2017/2018)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_ts3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-2 (2018/2019)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_ts2'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-4 Yang Terlacak (2016/2017)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_lacak_ts4'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-3 Yang Terlacak (2017/2018)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_lacak_ts3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-2 Yang Terlacak (2018/2019)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_lacak_ts2'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-4 yang dinilai oleh pengguna lulusan pada saat studi pelacakan (2016/2017)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_nilai_ts4'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-3 yang dinilai oleh pengguna lulusan pada saat studi pelacakan (2017/2018)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_nilai_ts3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Jumlah Lulusan TS-2 yang dinilai oleh pengguna lulusan pada saat studi pelacakan (2018/2019)<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['jml_lulus_nilai_ts2'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>WAKTU TUNGGU</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>VALUE</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Waktu Tunggu Lulusan TS-4 (2016/2017)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['waktutunggu_ts4'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Waktu Tunggu Lulusan TS-3 (2017/2018)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['waktutunggu_ts3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Waktu Tunggu Lulusan TS-2 (2018/2019)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['waktutunggu_ts2'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>KESESUAIAN BIDANG KERJA</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>VALUE</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kesesuaian Bidang Kerja Lulusan TS-4 (2016/2017)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['sesuaibidang_ts4'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kesesuaian Bidang Kerja Lulusan TS-3 (2017/2018)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['sesuaibidang_ts3'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kesesuaian Bidang Kerja Lulusan TS-2 (2018/2019)</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>" . $data['sesuaibidang_ts2'] . "<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='table-responsive' style='box-shadow: 1px 1px 6px 3px rgba(128,128,128,0.25);padding: 10px;margin-top: 20px;margin-bottom: 20px;'>
                            <table class='table'>
                                <thead>
                                    <tr style='line-height: 16px;'>
                                        <th style='color: rgb(0,0,0);line-height: 16px;'>KEPUASAN PENGGUNA</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>VALUE</th>
                                        <th class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>INDEKS</th>
                                    </tr>
                                </thead>
                                <tbody style='color: rgb(0,0,0);line-height: 16px;'>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Penggunaan teknologi informasi</td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]</td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kemampuan berkomunikasi<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Keahlian pada bidang ilmu<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td class='text-center' style='color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kerjasama tim</td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Kemampuan Bahasa Asing</td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Pengembangan diri</td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                    <tr style='color: rgb(0,0,0);line-height: 16px;'>
                                        <td style='color: rgb(0,0,0);line-height: 16px;'>Etika</td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[NOT_TESTED]<br></td>
                                        <td style='text-align: center;color: rgb(0,0,0);line-height: 16px;'>[SIMULATION]<br></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class='text-center' colspan='3'><a class='btn btn-success' role='button' href='javascript:window.print();'><i class='fas fa-print'></i>&nbsp;Save PDF/Cetak</a></td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                            <?php
							";
                            }
                            ?>
                            </div>
                    </form>
                </div>
                <!-- End: REM:Form_MainMergeInput -->
            </div>
            <!-- End: REM:Form -->

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
    <script src="js/jquery.min.js"></script>
    <script src="js/jsPDF/dist/jspdf.min.js"></script>
    <script src="html2pdf.bundle.min.js"></script>
</body>

</html>
