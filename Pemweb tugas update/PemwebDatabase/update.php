<?php
include('connection.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['NPM'])) {

    $upd = $_GET['NPM'];
    $query = "SELECT * FROM dataform WHERE NPM = '$upd'";


    $result = mysqli_query(connection(), $query);
  }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $upd = $_POST['npm'];
  $alamat = $_POST['alamat'];

  $sql = "UPDATE dataform SET Alamat='$alamat' WHERE NPM='$upd'";


  $result = mysqli_query(connection(), $sql);
  if ($result) {
    $status = 'ok';
  } else {
    $status = 'err';
  }

  header('Location: home.php?status=' . $status);
}


?>


<!DOCTYPE html>
<html>

<head>
  <title>Update</title>

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


    <h2 style="margin: 50px 0 30px 0;">Update Data Mahasiswa</h2>
    <form action="update.php" method="POST">
      <?php while ($data = mysqli_fetch_array($result)) : ?>

        <div class="form-group">
          <label>NPM</label>
          <input type="text" class="form-control" name="npm" value="<?php echo $data['NPM'];  ?>" required="required">
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo $data['Alamat'];  ?>" required="required">
        </div>
      <?php endwhile; ?>

      <button type="submit" class="btn btn-primary">Save</button>

    </form>
  </main>
  </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>