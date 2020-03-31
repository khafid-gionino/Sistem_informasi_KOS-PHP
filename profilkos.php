<?php
    $data = file_get_contents('datakos.json');
    $profile = json_decode($data, true);

    $profile = $profile["profile"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Mi-Won Kos Profile</title>
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
                <a class="nav-item nav-link" href="transaksi.php">Transaksi</a>
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

      <div style="font-family: verdana; margin-top:20px;" class="profile">
            <h1 style="text-align: center;">PROFILE KOS</h1>
            <hr>
        <div class="row">
          <div class="col">
            <div class="container">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=semolowaru%20selatan%20IV%20no.20%20sukolilo%20surabaya%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.couponflat.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
          </div>
            </div>
          <div class="col">
          <div class="card" style="width: 35rem;">
              <div class="card-body ">
              <h3>Nama      : <?= $profile[0]["nama"] ?> </h3>
              <h3>Alamat    : <?= $profile[0]["alamat"] ?> </h3>
              <h3>Email     : <?= $profile[0]["email"] ?> </h3>
              <h3>No HP     : <?= $profile[0]["no_hp"] ?> </h3>
              </div>
            </div>
          </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>