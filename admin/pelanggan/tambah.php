

<!DOCTYPE html>
<html >
<head>
    <title>Tambah data pelanggan</title>
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
		<a href="../kamar/index.php"><img src="img/kamar.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="index.php"><img src="img/pelanggane.png" align="right" width="50px" style="margin-left: 30px"></a>
	</span>
	<span>
		<a href="../home1.html"><img src="img/home.png" align="right" width="45px" style="margin-left: 30px"></a>
	</span>
	</div>
    <h1>Tambah Data pelanggan</h1>
	<div class="kotak_tambah">
   	<p class="tulisan_tambah">Isi Data Pelanggan</p>
    <form method="post" action="proses.php?tambah=add">
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nma" required class="form_tambah">
            </li>
            <br>
          	<li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required class="form_tambah">
            </li>
            <br>
            <li>
                <label for="no_tlp">No.HP  : </label>
                <input type="text" name="no_tlp" id="no_tlp" required class="form_tambah">
            </li>
            <br>
            <li>
                <label for="email">Email   : </label>
                <input type="text" name="email" id="email" required class="form_tambah">
            </li>
            <br>
            <div>
                <button type="tambah" name="submit" class="tombol_tambah">Tambah Data</button>
                <br>
                <br>
                <center>
            	<a class="tombol_keluar" href="index.php">kembali</a>
            	</center>
    </form>
</body>
</html>