<?php 
    require 'admin/pendaftaran/functions.php';
    $conn = mysqli_connect("localhost","root","","kos");

    //ambil data dari database
   $pendaftaran = mysqli_query($conn,  "SELECT pendaftaran.id_pendaftaran, pelanggan.nama, pelanggan.alamat, kamar.no_kamar, kamar.fasilitas, kamar.harga, pendaftaran.tgl_daftar FROM pendaftaran JOIN pelanggan ON pendaftaran.id_pelanggan = pelanggan.id_pelanggan JOIN kamar ON pendaftaran.id_kamar = kamar.id_kamar");

   if( isset($_POST["cari"])){
        $pendaftaran = cari($_POST["keyword"]);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Mi-Won Kos transaksi</title>
  </head>
  <body>
  <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img style="width: 30pk; height: 30px;" src="img/kos.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div style="margin-left: 20px;" class="navbar-nav">
                <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Transaksi</a>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profileadmin.php">Admin</a>
                    <a class="dropdown-item" href="profilkos.php">KOS</a>
                    <div class="dropdown-divider"></div>
                  </div>
                </li>
                <a style="margin-left: 800px;" class="nav-item nav-link" href="admin/index.php">Login admin</a>
              </div>
            </div>
      </nav>

      <div class="text-center">
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <h1 style="font-family: verdana;" >TRANSAKSI</h1>
                    </div>
                </div>
                </div>
                <br>

    <div class="row d-flex justify-content-center">
        <nav class="navbar navbar-light mt-3 mb-2">
          <form class="form-inline" action="" method="post">
              <input class="form-control mr-sm-2" type="search" placeholder="cari berdasarkan nama" aria-label="Search" name="keyword">
              <button class="btn btn-outline-success my-2 my-sm-0" type="cari" name="cari">Search</button>
          </form>
          </nav>
    </div>

        <center>
        <table border="1" cellpadding="10" cellspacing="0" >
            <tr>
                <th>No.</th>
                <th>Nama</th>   
                <th>Alamat</th>
                <th>No.Kamar</th>
                <th>Aksi</th>
            </tr>
        </center> 
            <?php $i = 1; ?>
            <?php foreach( $pendaftaran as $pdf) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><?= $pdf ["nama"] ?> </td>
                <td><?= $pdf ["alamat"] ?> </td>
                <td><?= $pdf ["no_kamar"] ?> </td>
                <td>
                    <a href="bayar.php?id_pendaftaran=  <?= $pdf ["id_pendaftaran"] ?>" class="btn btn-info btn-xs">Bayar</a>
                </td>
            </tr>
            <?php $i++; ?>
    <?php endforeach; ?>

        </table>
        <br>
        <br>
        <center>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>