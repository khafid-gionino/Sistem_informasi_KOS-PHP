<?php 
    require 'functions.php';
    $conn = mysqli_connect("localhost","root","","kos");

    //ambil data dari database
   $pendaftaran = mysqli_query($conn,  "SELECT pendaftaran.id_pendaftaran, pelanggan.nama, pelanggan.alamat, kamar.no_kamar, kamar.fasilitas, kamar.harga, pendaftaran.tgl_daftar FROM pendaftaran JOIN pelanggan ON pendaftaran.id_pelanggan = pelanggan.id_pelanggan JOIN kamar ON pendaftaran.id_kamar = kamar.id_kamar");

?>

<!DOCTYPE html>
<html >
<head>
    <title>Halaman Pendaftaran</title>
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
		<a href="../pembayaran/index.php"><img src="img/money.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="index.php"><img src="img/transaksie.png" align="right" width="50px" style="margin-left: 30px"></a>
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
    <h1>Pendaftaran Pelanggan</h1>

    <center>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>   
            <th>Alamat</th>
            <th>No.Kamar</th>
            <th>Tanggal Daftar</th>
        </tr>
    </center> 
        <?php $i = 1; ?>
        <?php foreach( $pendaftaran as $pdf) : ?>
        <tr>
            <td><?= $i ?> </td>
            <td>
                <a href="hapus.php?id_pendaftaran=  <?= $pdf ["id_pendaftaran"] ?> "><img src="img/delete.png" width="30px"></a>
            </td>
            <td><?= $pdf ["nama"] ?> </td>
            <td><?= $pdf ["alamat"] ?> </td>
            <td><?= $pdf ["no_kamar"] ?> </td>
            <td><?= $pdf ["tgl_daftar"] ?> </td>
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