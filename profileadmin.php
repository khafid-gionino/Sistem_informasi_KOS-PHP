<?php
    $data = file_get_contents('dataadmin.json');
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
                    <a class="dropdown-item" href="#">Admin</a>
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
                        <h1 style="font-family: verdana;" >PROFILE ADMIN</h1>
                    </div>
                </div>
                </div>
                <br>

        
                <div  class="row d-flex justify-content-center" >
                    <?php foreach ($profile as $row) :  ?>
                    <div class="col-md-3">
                        <div class="card ">
                            <img src="<?= $row["gambar"]?>" class="card-img-top" >
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["nama"]?></h5>
                                <h5 class="card-title"><?= $row["npm"]?></h5>
                                <p>
                                <?= $row["Deskripsi"]?>
                                </p>
                                <a href="<?= $row["web"] ?>" class="btn btn-primary">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
    
            </div>
        





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>