<?php 

    class database{
        var $host = "localhost";
        var $uname = "root";
        var $pass = "";
        var $db = "kos";

        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
            if(mysqli_connect_errno()){
                echo "koneksi db gagal : " . mysqli_connect_error();
            }
        }

        function tampil(){
            $data = mysqli_query($this->koneksi, "SELECT * FROM kamar");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }

        function tambah_data($no_kamar, $fasilitas, $harga){
            mysqli_query($this->koneksi,  "INSERT INTO kamar
            VALUES 
            ('','$no_kamar','$fasilitas','$harga')
            ");
        }
    }


?>