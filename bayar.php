<?php 
    require 'admin/pendaftaran/functions.php';
    $id_pendaftaran = $_GET["id_pendaftaran"];

    $pdf = query( "SELECT pendaftaran.id_pendaftaran, pelanggan.nama, pelanggan.alamat, kamar.no_kamar, kamar.fasilitas, kamar.harga, pendaftaran.tgl_daftar, pendaftaran.id_pelanggan FROM pendaftaran JOIN pelanggan ON pendaftaran.id_pelanggan = pelanggan.id_pelanggan JOIN kamar ON pendaftaran.id_kamar = kamar.id_kamar WHERE id_pendaftaran = $id_pendaftaran")[0];


    // cek apakah tombol udah di tekan
    if( isset($_POST["submit"]) ){
      
      // cek apakah data berhasil di tambahkan
      if( bayar($_POST) > 0){
          echo "
              <script>
                  alert('Data berhasil di tambahkan !!');
                  document.location.href = 'transaksi.php';
              </script>
          ";
      } else{
          echo "
          <script>
              alert('Data gagal di tambahkan !!');
              document.location.href = 'bayar.php';
          </script>
          "; 
      }
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

    <title>Mi-Won Kos transaksi</title> <style>


	h1{
		text-align: center;
		/*ketebalan font*/
		color:#1E1E1E;
		font-weight: 300;
	}

	.tulisan_tambah{
		text-align: center;
	}

	.kotak_tambah{
		width: 350px;	
        color : white;
		background: black;
		/*meletakkan form ke tengah*/
		margin: 80px auto;
		padding: 30px 20px;
	}

	label{
		font-size: 11pt;
	}

	.form_tambah{
		/*membuat lebar form penuh*/
		box-sizing : border-box;
		width: 100%;
		padding: 10px;
		font-size: 11pt;
		margin-bottom: 20px;
	}

	.tombol_bayar{
		text-decoration: none;
		background: #46de4b;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
		.tombol_keluar{
		text-decoration: none;
		background: salmon;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}

	.tombol_keluar:hover{
		background: #87CEFA;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
	
	.tombol_bayar:hover{
		background: #87CEFA;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
	</style>
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

      <div class="text-center">
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <h1 style="font-family: verdana;" >TRANSAKSI</h1>
                    </div>
                </div>
                </div>

    <div class="kotak_tambah mt-2">
   	<p class="tulisan_tambah">Silahkan Lakukan Pembayaran !!</p>
    <form action="" method="post">
        <input type="hidden" name="id_pendaftaran" value=" <?=  $pdf["id_pendaftaran"]; ?> ">
        <input type="hidden" name="id_pelanggan" value="<?= $pdf["id_pelanggan"]; ?>" >
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" required value="<?= $pdf["nama"]; ?> " readonly value="" >
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" required value="<?= $pdf["alamat"]; ?> " readonly value="">
        </div>
        <div class="form-group">
            <label for="no_kamar">No.kamar</label>
            <input type="text" class="form-control" name="id_kamar" required value="<?= $pdf["no_kamar"]; ?> " readonly value="">
        </div>
        <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control" name="fasilitas" required value="<?= $pdf["fasilitas"]; ?> " readonly value="">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" required value="<?= $pdf["harga"]; ?> " readonly value="">
        </div>
        <div class="form-group">
					<label>Tanggal Bayar</label><br>
          <input type="date" class="form-control pull-right" name="tgl_bayar" name="tgl_bayar">
				</div>	
        <button type="bayar" name="submit" class="btn btn-primary">Bayar</button>

        <a href="transaksi.php" class="btn btn-danger ">Kembali</a>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>