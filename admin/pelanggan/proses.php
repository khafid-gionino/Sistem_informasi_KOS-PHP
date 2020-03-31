<?php 
    require 'database.php';
    $db = new database();

    $action = $_GET['tambah'];
    if($action == "add"){
        $db->tambah_data($_POST['nama'], $_POST['alamat'], $_POST['no_tlp'], $_POST['email']);
        header('location:index.php');
    }
?>