<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            border-bottom: 3px solid transparent;
        }

        body {
            background: url(assets/img/biodata3.jpg) !important;
        }

        .container2 {
            height: 500px;
            border-style: solid;
            border-width: 2px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }
    </style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand  col-sm-3 col-md-2 mr-0" href=" home.php">Frizal Aditya Junitio R.</a>
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="display.php">Data Mahasiswa</a>
        <a class=" nav-link" href="index.php">Tambah Data</a>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php
        //mengecek apakah proses update dan delete sukses/gagal
        if (@$_GET['status'] !== NULL) {
            $status = $_GET['status'];
            if ($status == 'ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil di-update</div>';
            } elseif ($status == 'err') {
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal di-update</div>';
            }
        }
        ?>
        <h2 style="margin: 30px 0 30px 0;">Tampilan Data</h2>
        <div>
            <?php
            //proses menampilkan data dari database:
            //siapkan query SQL
            $query = "SELECT * FROM dataform";
            $result = mysqli_query(connection(), $query);
            ?>
            <div class="row">
                <div class="col-3">
                    <div class="card bg-dark  border-light mb-3">
                        <img src="assets/img/me3.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-8">
                    <div class="card bg-dark  border-light mb-3">
                        <div class="card-body">
                            <table class="table table-borderless table-light table-sm">
                                <?php while ($data = mysqli_fetch_array($result)) : ?>
                                    <tbody>
                                        <tr>
                                            <td>NPM</td>
                                            <td><?php echo $data['NPM'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $data['Nama'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td><?php echo $data['Alamat'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>SD</td>
                                            <td><?php echo $data['SD'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>SMP</td>
                                            <td><?php echo $data['SMP'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>SMA</td>
                                            <td><?php echo $data['SMA'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>Universitas</td>
                                            <td><?php echo $data['Universitas'];  ?></td>
                                        </tr>

                                        <tr>
                                            <td>Motto</td>
                                            <td><?php echo $data['Motto'];  ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="<?php echo "update.php?NPM=" . $data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                                                &nbsp;&nbsp;
                                                <a href="<?php echo "delete.php?NPM=" . $data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                <?php endwhile ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>