<?php 
    require 'functions.php';

    $id = $_GET["id_pembayaran"];

    if( hapus($id) > 0){
        echo "
        <script>
            alert('Data berhasil di hapus !!');
            document.location.href = 'index.php';
        </script>
    ";
    }else{
        echo "
        <script>
            alert('Data gagal di hapus !!');
            document.location.href = 'index.php';
        </script>
    ";
    }

?>