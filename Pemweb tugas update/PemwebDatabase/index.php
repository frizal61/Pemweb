<?php
include('connection.php');

$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sd = $_POST['sd'];
    $smp = $_POST['smp'];
    $sma = $_POST['sma'];
    $universitas = $_POST['universitas'];
    $motto = $_POST['motto'];


    $query = "INSERT INTO dataform (NPM, Nama, Alamat, SD, SMP, SMA, Universitas, Motto) VALUES('$npm','$nama','$alamat', '$sd', '$smp', '$sma', '$universitas', '$motto')";


    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Penambahan Data</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <style type="text/css">
        .navbar {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            border-bottom: 3px solid transparent;
        }
    </style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand  col-sm-3 col-md-2 mr-0" href=" index.php">Frizal Aditya Junitio R.</a>
        <a class="nav-link" href="display.php">Data Mahasiswa</a>
        <a class=" nav-link" href="index.php">Tambah Data</a>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <?php
        if ($status == 'ok') {
            echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
        } elseif ($status == 'err') {
            echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
        }
        ?>

        <h2 style="margin: 30px 0 30px 0;">Form Mahasiswa</h2>
        <form action="index.php" method="POST">

            <div class="form-group">
                <label>NPM</label>
                <input type="text" class="form-control" placeholder="NPM" name="npm" required="required">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" placeholder="Nama" name="alamat" required="required">
            </div>
            <div class="form-group">
                <label>SD</label>
                <input class="form-control" placeholder="Sekolah Dasar" name="sd" required="required">
            </div>
            <div class="form-group">
                <label>SMP</label>
                <input class="form-control" placeholder="Sekolah Menengah Pertama" name="smp" required="required">
            </div>
            <div class="form-group">
                <label>SMA</label>
                <input class="form-control" placeholder="Sekolah Menengah Atas" name="sma" required="required">
            </div>
            <div class="form-group">
                <label>Universitas</label>
                <input class="form-control" placeholder="Universitas Anda" name="universitas" required="required">
            </div>
            <div class="form-group">
                <label>Motto</label>
                <input class="form-control" placeholder="Motto Anda" name="motto" required="required">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>