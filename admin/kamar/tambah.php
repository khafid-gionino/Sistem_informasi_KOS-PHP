<!DOCTYPE html>
<html >
<head>
    <title>Tambah data kamar</title>
    <style>
    body{
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		background: white;
	}

	#header {
			background : #87CEFA;
			text-align-last: left;
			font-size: 40px;
			padding: 30px;
	}

	h1{
		text-align: center;
		/*ketebalan font*/
		color:#1E1E1E;
		font-weight: 300;
	}

	.tulisan_tambah{
		text-align: center;
		/*membuat semua huruf menjadi kapital*/
		text-transform: uppercase;
	}

	.kotak_tambah{
		width: 350px;	
		background: #87CEFA;
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

	.tombol_tambah{
		background: #46de4b;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
		.tombol_keluar{
		background: salmon;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}

	.tombol_keluar:hover{
		text-decoration: underline;
		background: #87CEFA;
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
<body>
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
    <h1>Tambah Data kamar</h1>
    <div class="kotak_tambah">
   	<p class="tulisan_tambah">Isi Data Kamar</p>
    <form method="post" action="proses.php?tambah=add">
            <li>
                <label for="no_kamar">Nomor kamar : </label>
                <input type="text" name="no_kamar" id="no_kamar" required class="form_tambah">
            </li>
            <br>
          <li>
                <label for="fasilitas">Fasilitas : </label>
                <input type="text" name="fasilitas" id="fasilitas" required class="form_tambah">
            </li>
            <br>
            <li>
                <label for="harga">Harga  : </label>
                <input type="text" name="harga" id="harga" required class="form_tambah">
            </li>
            <br>
                <button type="tambah" name="submit" class="tombol_tambah">Tambah Data</button>
                <br>
                <br>
                <center>
            	<a class="tombol_keluar" href="index.php">kembali</a>
            	</center>
	</form>
</div>
</body>
</html>