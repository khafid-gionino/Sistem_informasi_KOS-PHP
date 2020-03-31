<?php 
     //koneksi ke database
     $conn = mysqli_connect("localhost","root","","kos");

     function query($query){
         global $conn;
         $result = mysqli_query($conn, $query);
         $rows = [];
         while( $row = mysqli_fetch_assoc($result) ){
             $rows[] = $row;
         }
         return $rows;
     }

     function tambah($data){
            global $conn;
        
            // ambil data dari tiap elemen
            $nama = $data["id_pelanggan"];
            $kamar = $data["id_kamar"];
            $tgl = $data["tgl_bayar"];

            // queri bayar data
            $query = "INSERT INTO pembayaran
                    VALUES 
                    (NULL,'$nama','$kamar', '$tgl')
                    ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);

     }

     function hapus($id){
         global $conn;
         mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = '$id'");

         return mysqli_affected_rows($conn);
     }

     function cari($keyword){
        $query = "SELECT pembayaran.id_pembayaran, pelanggan.nama, pelanggan.alamat, kamar.no_kamar, kamar.fasilitas, kamar.harga, pembayaran.tgl_daftar FROM pembayaran JOIN pelanggan ON pembayaran.id_pelanggan = pelanggan.id_pelanggan JOIN kamar ON pembayaran.id_kamar = kamar.id_kamar WHERE nama LIKE '%$keyword%' OR
                   alamat LIKE '%$keyword%' OR
                   no_kamar LIKE '%$keyword%' OR
                   fasilitas LIKE '%$keyword%' OR
                   harga LIKE '%$keyword%' 
        ";

    return query($query);

    }




?>