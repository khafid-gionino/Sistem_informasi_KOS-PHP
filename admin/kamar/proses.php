<?php 
    require 'database.php';
    $db = new database();

    $action = $_GET['tambah'];
    if($action == "add"){
        $db->tambah_data($_POST['no_kamar'], $_POST['fasilitas'], $_POST['harga']);
        header('location:index.php');
    }
?>