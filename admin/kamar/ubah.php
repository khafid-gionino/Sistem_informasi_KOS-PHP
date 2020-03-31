<?php 
    require 'functions.php';

    // ambil data di URL
    $id_kamar = $_GET["id_kamar"];
  
    // query data mahasiswa berdasarkan id
    $kmr = query("SELECT * FROM kamar WHERE id_kamar = $id_kamar")[0];

    // cek apakah tombol udah di tekan
    if( isset($_POST["submit"]) ){

        // cek apakah data berhasil di ubah
        if( ubah($_POST) > 0){
            echo "
                <script>
                    alert('Data berhasil di ubah !!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else{
            echo "
            <script>
                alert('Data gagal di ubah !!');
                document.location.href = 'ubah.php';
            </script>
            "; 
        }
    }
    

?>

<!DOCTYPE html>
<html >
<head>
    <title>Ubah data kamar</title> <style>
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
	<br>
    <h1>Ubah Data Kamar</h1>
	<div class="kotak_tambah">
   	<p class="tulisan_tambah">Ubah Data Kamar</p>
    <form action="" method="post">
        <input type="hidden" name="id_kamar" value=" <?=  $kmr["id_kamar"]; ?> ">
        <ul>
            <li>
                <label for="no_kamar">Nomor kamar : </label>
                <input type="text" name="no_kamar" id="no_kamar" required value="<?= $kmr["no_kamar"]; ?> " >
            </li>
            <br>
          <li>
                <label for="fasilitas">Fasilitas : </label>
                <input type="text" name="fasilitas" id="fasilitas" required value="<?= $kmr["fasilitas"]; ?> ">
            </li>
            <br>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" required value="<?= $kmr["harga"]; ?> ">
            </li>
        </ul>
        <button type="tambah" name="submit" class="tombol_tambah">Ubah Data</button>
                <br>
                <br>
                <center>
            	<a class="tombol_keluar" href="index.php">kembali</a>
            	</center>
    </form>
</body>
</html>