<?php 
       require 'database.php';
	   $db = new database();
   

    //ambil data dari database
//    $kamar = query("SELECT * FROM kamar");

   // keika tombol cari di tekan
   if( isset($_POST["cari"])){
       $kamar = cari($_POST["keyword"]);
   }
?>

<!DOCTYPE html>
<html >
<head>
    <title>Halaman kamar</title>
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
		<a href="../pendaftaran/index.php"><img src="img/transaksi.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="index.php"><img src="img/kamare.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../pelanggan/index.php"><img src="img/pelanggan.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../home1.html"><img src="img/home.png" align="right" width="45px" style="margin-left: 30px"></a>
	</span>
	</div>
    <h1>Daftar kamar</h1>
	<br>
	<center>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus
        placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="cari" name="cari">Cari</button>
    </form>
    </center>
    <br>
    <center>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nomor kamar</th>   
            <th>fasilitas</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $db->tampil() as $kmr) : ?>
        <tr>
            <td><?= $i ?> </td>
            <td>
                <a href="ubah.php?id_kamar=  <?= $kmr ["id_kamar"] ?>"><img src="img/update.png" width="30px"></a> 
				<a id="tombol_hapus" href="hapus.php?id_kamar=  <?= $kmr ["id_kamar"] ?> "><img src="img/delete.png" width="30px"></a>
            </td>
            <td> <?= $kmr ["no_kamar"] ?> </td>
            <td><?= $kmr ["fasilitas"] ?> </td>
            <td><?= $kmr ["harga"] ?> </td>
        </tr>
        <?php $i++; ?>
<?php endforeach; ?>
    </table>
    </center>
    <br>
    <br>
    <center>
    <a href="tambah.php" class="tombol_tambah"> Tambah Data </a>
    </center>
</body>
</html>