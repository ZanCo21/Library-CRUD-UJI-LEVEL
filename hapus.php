<?php
include "koneksi.php";


$id = $_GET['id'] ;
$sql = "DELETE FROM databuku WHERE id ='$id'";

$query =  mysqli_query($connect, $sql);

if($query){
    header('location: databuku.php');
}else{
    header('location: databuku.php?status=gagal');
}

?>