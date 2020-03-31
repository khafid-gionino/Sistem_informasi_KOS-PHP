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
        $no_kamar = htmlspecialchars($data["no_kamar"]);
        $fasilitas = htmlspecialchars($data["fasilitas"]) ;
        $harga = htmlspecialchars($data["harga"]) ;


        // queri tambah data
        $query = "INSERT INTO kamar
                VALUES 
                ('','$no_kamar','$fasilitas','$harga')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

     }

     function hapus($id){
         global $conn;
         mysqli_query($conn, "DELETE FROM kamar WHERE id_kamar= $id");

         return mysqli_affected_rows($conn);
     }

     function ubah($data){
        global $conn;
        $id = $data["id_kamar"];
        $nama = htmlspecialchars($data["no_kamar"]);
        $alamat = htmlspecialchars($data["fasilitas"]) ;
        $no_tlp = htmlspecialchars($data["harga"]) ;



        // queri tambah data
        $query = "UPDATE kamar SET
                    no_kamar = '$no_kamar',
                    fasilitas = '$fasilitas',
                    harga = '$harga',
                    WHERE id_kamar = $id
                 ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
     }

     function cari($keyword){
         $query = " SELECT * FROM kamar WHERE no_kamar LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' 
         ";

     return query($query);

     }


?>