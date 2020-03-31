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
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]) ;
        $no_tlp = htmlspecialchars($data["no_tlp"]) ;
        $email = htmlspecialchars($data["email"]) ;


        // queri tambah data
        $query = "INSERT INTO PELANGGAN
                VALUES 
                ('','$nama','$alamat','$no_tlp','$email')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

     }

     function hapus($id){
         global $conn;
         mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan= $id");

         return mysqli_affected_rows($conn);
     }

     function ubah($data){
        global $conn;
        $id = $data["id_pelanggan"];
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]) ;
        $no_tlp = htmlspecialchars($data["no_tlp"]) ;
        $email = htmlspecialchars($data["email"]) ;


        // queri tambah data
        $query = "UPDATE pelanggan SET
                    nama = '$nama',
                    alamat = '$alamat',
                    no_tlp = '$no_tlp',
                    email = '$email'
                    WHERE id_pelanggan= $id
                 ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
     }

     function cari($keyword){
         $query = " SELECT * FROM pelanggan WHERE nama LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    no_tlp LIKE '%$keyword%'
         ";

     return query($query);

     }


?>