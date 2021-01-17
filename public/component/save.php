<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/svg+xml" sizes="1181x1181" href="../logo.svg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - KP24</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body class="bg-gradient-primary">

<?php
	include 'db_connection.php';
	// menyimpan data kedalam variabel
	$nama_pt = $_POST['nama_pt'];
	$akred_saatini = $_POST['akred_saatini'];
	$tahun_akademik = $_POST['tahun_akademik'];
	$program_pt = $_POST['program_pt'];
	$jml_dtps = $_POST['jml_dtps'];
	$jml_dtps_s3 = $_POST['jml_dtps_s3'];
	$jml_dtps_rektor = $_POST['jml_dtps_rektor'];
	$jml_dtps_lektor_kepala = $_POST['jml_dtps_lektor_kepala'];
	$jml_dtps_lektor = $_POST['jml_dtps_lektor'];
	$eva_kuri = $_POST['eva_kuri'];
	$capai_lajar = $_POST['capai_lajar'];
	$struk_kuri = $_POST['struk_kuri'];
	$mutu_upps = $_POST['mutu_upps'];
	$dikti_upps = $_POST['dikti_upps'];
	$tracer_study = $_POST['tracer_study'];
	$jml_lulus_ts4 = $_POST['jml_lulus_ts4'];
	$jml_lulus_ts3 = $_POST['jml_lulus_ts3'];
	$jml_lulus_ts2 = $_POST['jml_lulus_ts2'];
	$jml_lulus_lacak_ts4 = $_POST['jml_lulus_lacak_ts4'];
	$jml_lulus_lacak_ts3 = $_POST['jml_lulus_lacak_ts3'];
	$jml_lulus_lacak_ts2 = $_POST['jml_lulus_lacak_ts2'];
	$jml_lulus_nilai_ts4 = $_POST['jml_lulus_nilai_ts4'];
	$jml_lulus_nilai_ts3 = $_POST['jml_lulus_nilai_ts3'];
	$jml_lulus_nilai_ts2 = $_POST['jml_lulus_nilai_ts2'];
	$waktutunggu_ts4 = $_POST['waktutunggu_ts4'];
	$waktutunggu_ts3 = $_POST['waktutunggu_ts3'];
	$waktutunggu_ts2 = $_POST['waktutunggu_ts2'];
	$sesuaibidang_ts4 = $_POST['sesuaibidang_ts4'];
	$sesuaibidang_ts3 = $_POST['sesuaibidang_ts3'];
	$sesuaibidang_ts2 = $_POST['sesuaibidang_ts2'];
	$puasguna_tekno = $_POST['puasguna_tekno'];
	$puasguna_komun = $_POST['puasguna_komun'];
	$puasguna_ilmu = $_POST['puasguna_ilmu'];
	$puasguna_tim = $_POST['puasguna_tim'];
	$puasguna_asing = $_POST['puasguna_asing'];
	$puasguna_kembang = $_POST['puasguna_kembang'];
	$puasguna_etika = $_POST['puasguna_etika'];

	// query SQL untuk insert data
	$query="INSERT INTO tbl_main SET nama_pt='$nama_pt',akred_saatini='$akred_saatini',tahun_akademik='$tahun_akademik',program_pt='$program_pt',jml_dtps='$jml_dtps',jml_dtps_s3='$jml_dtps_s3',jml_dtps_rektor='$jml_dtps_rektor',jml_dtps_lektor_kepala='$jml_dtps_lektor_kepala',jml_dtps_lektor='$jml_dtps_lektor',eva_kuri='$eva_kuri',capai_lajar='$capai_lajar',struk_kuri='$struk_kuri',mutu_upps='$mutu_upps',dikti_upps='$dikti_upps',tracer_study='$tracer_study',jml_lulus_ts4='$jml_lulus_ts4',jml_lulus_ts3='$jml_lulus_ts3',jml_lulus_ts2='$jml_lulus_ts2',jml_lulus_lacak_ts4='$jml_lulus_lacak_ts4',jml_lulus_lacak_ts3='$jml_lulus_lacak_ts3',jml_lulus_lacak_ts2='$jml_lulus_lacak_ts2',jml_lulus_nilai_ts4='$jml_lulus_nilai_ts4',jml_lulus_nilai_ts3='$jml_lulus_nilai_ts3',jml_lulus_nilai_ts2='$jml_lulus_nilai_ts2',waktutunggu_ts4='$waktutunggu_ts4',waktutunggu_ts3='$waktutunggu_ts3',waktutunggu_ts2='$waktutunggu_ts2',sesuaibidang_ts4='$sesuaibidang_ts4',sesuaibidang_ts3='$sesuaibidang_ts3',sesuaibidang_ts2='$sesuaibidang_ts2',puasguna_tekno='$puasguna_tekno',puasguna_komun='$puasguna_komun',puasguna_ilmu='$puasguna_ilmu',puasguna_tim='$puasguna_tim',puasguna_asing='$puasguna_asing',puasguna_kembang='$puasguna_kembang',puasguna_etika='$puasguna_etika'";
	mysqli_query($connection, $query);

	// mengalihkan ke halaman index.php
	header('Refresh: 5; URL=..\admin\data\admin-manage-data.php');
?>

<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-9 col-lg-12 col-xl-10">
						<div class="card shadow-lg o-hidden border-0 my-5">
								<div class="card-body p-0">
										<div class="row">
												<div class="col-lg-6 d-none d-lg-flex">
														<div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;../assets/img/videoblocks-business-strategy-success-animated-words-text-design-4k-video-background-loop_suyrxdtlb_thumbnail-full08.png&quot;);"></div>
												</div>
												<div class="col-lg-6">
														<div class="p-5">
																<div class="text-center">
																		<h5 class="text-dark mb-4"><strong>Data berhasil disimpan</strong><br><br>silahkan tunggu ...<br><br><i class="fab fa-periscope wobble animated infinite" style="text-align: center;font-size: 70px;"></i></h5>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="../assets/js/theme.js"></script>
</body>
</html>
