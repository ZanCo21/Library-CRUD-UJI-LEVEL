<?php
include "../koneksi.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM datasiswa WHERE id='$id'";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('location: datasiswa.php');
    }else{
        header('location: datasiswa.php?status=gagal');
    }

?>