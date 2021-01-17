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
  //memulai session yang disimpan pada browser
  session_start();
  header('Refresh: 5; URL=..\admin\index.php');

  //cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
  if($_SESSION['status']!="has_login"){

  //melakukan pengalihan
  header("location:login.php");
  }
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
                                        <h5 class="text-dark mb-4"><strong>Validasi Login Berhasil</strong><br><br>anda akan diarahkan ke beranda ...<br><br><i class="fab fa-periscope wobble animated infinite" style="text-align: center;font-size: 70px;"></i></h5>
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
