<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu Atau Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"index.php\";</script>"; }?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../style/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        .ssl {
            width: 40%;
            align-content: center;
            margin-left: 30%;
            margin-bottom: 100px;
            text-shadow: white;
        }

        body {
            background: url(https://i.pinimg.com/originals/4d/94/f5/4d94f5cc1a6202e13b07133b8b5ae486.jpg) repeat;
        }
    </style>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <div class="container text-center">
                                    <!-- <img style="width: 200px;" src="bootstrap/img/logo.png" alt=""> -->
                                </div>
                                <h1 class="h4 text-gray-900 mb-4">Tambah Kosa Kata Kamus</h1>
                            </div>
                            <form method="POST" action="proses_tambah_kata.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="kata" placeholder="Kosa Kata" name="kata">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="arti" placeholder="Terjemah" name="arti">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
                                        Tambah
                                    </button>
                                    <a href="logout.php" type="button" class="btn btn-block btn-danger">Keluar</a>                            </form>
                            <hr>

                            <!-- <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? masuk sekarang!</a>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <img class="ssl" src="https://miro.medium.com/max/800/1*Qyw0ADm95j8mYXC3oA5FVQ.png" alt="">
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <!-- Core plugin JavaScript-->
    
</body>

</html>