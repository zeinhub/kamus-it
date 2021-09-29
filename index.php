<?php require_once "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamusnya anak IT!</title>
    <link rel="icon" href="style/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div style="text-align: right; margin-top: 20px;" class="container">
    <?php $queryy="SELECT * FROM terjemahan"; 
            $result = mysqli_query($conn, $queryy);
            $count    = mysqli_num_rows($result); ?>
            <h5>Jumlah kata yang <br> tersedia saat ini : <br> <text style="color: red;"> <?php echo "$count"; ?></text> &nbsp; kata </h5>
        <div class="d-flex justify-content-center text-center">
            <div class="row-lg-3">
                <!-- <div class="judul"><h1>KAMUS IT</h1></div>
                <p>Kamusnya anak IT!</p> -->
                <img style="margin-top: 100px;" src="style/logo.png" alt="">
            </div>
        </div>            

        <div class="batas"></div>
        <div class="d-flex justify-content-center">
            <div class="col-lg-5 padding-0">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ayo mulai cari biar jadi anak IT...">
                </div>
            </div>
            <div class="col-lg-0 padding-0"> <button type="submit" id="klik" class="btn btn-primary">Cari</button></div>
        </div>
        <div style="overflow: scroll; height: 200px;" class="kotak">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <!-- <thead>
                    <tr>
                        <th>#</th>
                        <th>Kata</th>
                        <th>Arti</th>
                    </tr>
                </thead> -->
                <tbody id="tampil">
                    <?php
                    // require_once 'koneksi.php';
                    // $no = 1;
                    // $query = mysqli_query($conn, "SELECT * FROM terjemahan");
                    // while ($row = mysqli_fetch_object($query)) {
                    ?>
                        <!-- <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->kata; ?></td>
                            <td><?= $row->arti; ?></td>
                        </tr> -->
                    <!-- <?php //} ?> -->
                </tbody>
            </table>
            </div>
            <div class="batas"></div>
            <div style="height: 100px; margin-left: 20%;  position:absolute;" class="kotak">
            
            <footer>©2021 Made with ❤ | Kamus IT </footer>
            
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
        </script>
    </body>
</html>


<!-- Batas -->
<!-- 
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Live Search PHP Ajax - Sekolah Program</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <input type="text" id="search" class="form-control mt-3 mb-5" placeholder="serach name...">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>username</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody id="tampil">
                    <?php
                    require_once 'koneksi.php';
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM student_info");
                    while ($row = mysqli_fetch_object($query)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->name; ?></td>
                            <td><?= $row->course; ?></td>
                            <td><?= $row->age; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="https://sekolahprogram.com" class="btn btn-success mt-3 btn-block" target="_blank" rel="noopener noreferrer">By Sekolah Program</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html> -->