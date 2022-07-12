

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | SAFEBOX</title>
    <link rel="icon" type="image/x-icon" href="img/ff.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Kotak Luar -->
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-7 col-md-2 py-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Admin Card Body -->
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 d-none d-lg-block">
                                <img src="img/cc.png" width="110%">
                            </div>
                            <div class="col-lg-6 py-6" >
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">SAFEBOX</h1>
                                        <h3 class="h4 text-gray-900 mb-4">Admin Panel</h3>
                                    </div>
                                    <form class="user" action="apps/index.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" placeholder="Masukkan ID Anda" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password Anda" required>
                                        </div>

                                        <Input type="submit" value="Log In" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                        <div class="text-center">
                                            <h2></h2>
                                            <h5></h5>
                                        </div>
                                        <div class="text-center">
                                            <p>Copyright &copy; <a href="https://tideup.tech/" target="_blank">PT. Titik Dedikasi Indonesia.</a> <br> All Rights Reserved.</p>
                                        </div>
                                        <div class="text-center">
                                            <img src="img/ac.png" width="20%">
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>