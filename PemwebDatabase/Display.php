<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Display</title>
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
                <div class="col-2"></div>
                <div class="col-8">
                    <table class="table table-borderless table-dark table-sm">
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
    </main>
    </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>