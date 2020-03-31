<?php 
    require 'functions.php';
    $conn = mysqli_connect("localhost","root","","kos");

    //ambil data dari database
   $pembayaran = mysqli_query($conn,  "SELECT pembayaran.id_pembayaran, pelanggan.nama, pelanggan.alamat, kamar.no_kamar, kamar.fasilitas, kamar.harga, pembayaran.tgl_bayar FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan = pelanggan.id_pelanggan JOIN kamar ON pembayaran.id_kamar = kamar.id_kamar");

?>

<!DOCTYPE html>
<html >
<head>
    <title>Halaman Pembayaran</title>
    <style>
		body{
			margin: auto;
			padding: inherit;
		}
		#header {
			background : #87CEFA;
			text-align-last: left;
			font-size: 40px;
			padding: 30px;
		}
		h1{
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		text-align: center;
		/*ketebalan font*/
		color:#1E1E1E;
		font-weight: 300;
		}
		.tombol_tambah{
		text-decoration: none;
		background: #46de4b;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
		}
		.tombol_tambah:hover{
		text-decoration: underline;
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
<body bgcolor="#fffff">
	<div id ="header"><a href="../home1.html"><img src="img/kos.png" height="60px"></a>
	<span>
		<a href="../index.php"><img src="img/back.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="index.php"><img src="img/moneye.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../pendaftaran/index.php"><img src="img/transaksi.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../kamar/index.php"><img src="img/kamar.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../pelanggan/index.php"><img src="img/pelanggan.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../home1.html"><img src="img/home.png" align="right" width="45px" style="margin-left: 30px"></a>
	</span>
	</div>
    <br>
    <h1>Pembayaran Pelanggan</h1>

    <center>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>   
            <th>Alamat</th>
            <th>No.Kamar</th>
            <th>Fasilitas</th>
            <th>Harga</th>
            <th>Tanggal Bayar</th>
        </tr>
    </center> 
        <?php $i = 1; ?>
        <?php foreach( $pembayaran as $pmb) : ?>
        <tr>
            <td><?= $i ?> </td>
            <td>
                <a href="hapus.php?id_pembayaran= <?= $pmb ["id_pembayaran"] ?> "><img src="img/delete.png" width="30px"></a>
            </td>
            <td><?= $pmb ["nama"] ?> </td>
            <td><?= $pmb ["alamat"] ?> </td>
            <td><?= $pmb ["no_kamar"] ?> </td>
            <td><?= $pmb ["fasilitas"] ?> </td>
            <td><?= $pmb ["harga"] ?> </td>
            <td><?= $pmb ["tgl_bayar"] ?> </td>
        </tr>
        <?php $i++; ?>
<?php endforeach; ?>

    </table>
    <br>
    <br>
    <center>
    <a href="tambah.php" class="tombol_tambah"> Tambah Data </a>
    </center>
</body>
</html>