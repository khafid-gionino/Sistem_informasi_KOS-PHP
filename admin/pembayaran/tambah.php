<?php 
    require 'functions.php';

    
    // cek apakah tombol udah di tekan
    if( isset($_POST["submit"]) ){

        // cek apakah data berhasil di tambahkan
        if( tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data berhasil di tambahkan !!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else{
            echo "
            <script>
                alert('Data gagal di tambahkan !!');
                document.location.href = 'tambah.php';
            </script>
            "; 
        }
    }
    

?>

<!DOCTYPE html>
<html >
<head>
    <title>Tambah data </title>
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
		margin-top: 30px;
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
		margin: 25px auto;
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
		text-decoration: underline;
		background: white;
		color: #87CEFA;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
	
	.tombol_tambah:hover{
		text-decoration: underline;
		background: white;
		color: #87CEFA;
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
    <h1>Tambah Data </h1>
    <div class="kotak_tambah">
    <form action="" method="post">
                <center>
                <label >Nama : </label>
                <br>
                <select name="id_pelanggan" required="id_pelanggan" class="form-control">
                        <option value="#">-- Pilih Nama --</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","kos");
                            $pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
                            while ($key = mysqli_fetch_array($pelanggan)) {
                            ?>
                                <option value="<?php echo $key['id_pelanggan']; ?>">
                                    <?php echo $key['nama']; ?>
                                </option>
                                <?php
                            }
                        ?>
                    </select>
                        </center>
            <br>
              <center>
                <label >Nomor Kamar : </label>
                <br>
                <select name="id_kamar" required="id_kamar" class="form-control">
                        <option value="#">-- Pilih Kamar --</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","kos");
                            $kamar = mysqli_query($conn, "SELECT * FROM kamar");
                            while ($key = mysqli_fetch_array($kamar)) {
                            ?>
                                <option value="<?php echo $key['id_kamar']; ?>">
                                    <?php echo $key['no_kamar']; ?>
                                </option>
                                <?php
                            }
                        ?>
                    </select>
                        </center>
            <br>
            <center>
                <label for="tgl_bayar">Tanggal Bayar  : </label>
                <br>
                <input type="date" name="tgl_bayar" id="tgl_bayar">
                        </center>
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