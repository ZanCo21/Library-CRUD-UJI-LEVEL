<?php
include 'koneksi.php';

if(isset($_POST ['simpanbuku'])){
    $kode_buku = $_POST ['kode_buku'];
    $judul_buku = $_POST ['judul_buku'];
    $kategori = $_POST ['kategori'];
    $stok = $_POST ['stok'];
    $di_pinjam = $_POST ['di_pinjam'];

    $sql = "INSERT INTO databuku (kode_buku, judul_buku, kategori, stok, di_pinjam) VALUES ('$kode_buku', '$judul_buku', '$kategori', '$stok', '$di_pinjam')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('location: databuku.php');
    }else{
        header('location: formtambah.php?status=gagal');
    }

}
?>