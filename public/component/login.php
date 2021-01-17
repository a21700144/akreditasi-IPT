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
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;../assets/img/our-company-background-2.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                              <div class="p-5" style="text-align: center;"><img src="../assets/img/LOGO_PNG.svg" width="128px" height="128px">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h5 class="text-dark mb-4"><strong>Akreditasi Instansi Perguruan Tinggi</strong></h5>

                                        <?php if(isset($_GET['pesan'])) {  ?>
                                      	   <label style="color:red;"><?php echo $_GET['pesan']; ?></label>
                                        <?php } ?>

                                    </div>
                                    <form class="user" action="logincontroller.php" method="post">
                                        <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama User" name="username" autofocus="" autocomplete="on"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Sandi" name="password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Selalu Ingat Saya</label></div>
                                            </div>
                                        </div><button class="btn btn-primary active btn-block" type="submit" style="font-size: 12.8px;border-radius: 30px;background: #ffd168;color: rgb(0,0,0);border-color: #f3b72c;"><i class="fa fa-send-o"></i>&nbsp; Submit</button>
                                        <hr><a class="btn btn-primary disabled btn-block" role="button" style="font-size: 12.8px;border-radius: 30px;"><i class="fab fa-google"></i>&nbsp; Login dengan Google</a>
                                        <hr><a class="btn btn-primary active btn-block" role="button" style="border-radius: 30px;font-size: 12.8px;background: #ffd168;color: rgb(0,0,0);border-color: #f3b72c;" href="..\index.php"><i class="fas fa-home"></i>&nbsp; Kembali ke Beranda</a></form>
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
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
