<?php
    include 'koneksi.php';
//(isset) memeriksa apakah suatu variabel sudah diatur atau belum. di simpan dengan method post
if(isset($_POST['editbuku'])){
    $id = $_POST['id'];
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $di_pinjam = $_POST['di_pinjam'];
;

$sql="UPDATE databuku SET id = '$id', kode_buku='$kode_buku', judul_buku='$judul_buku', kategori = '$kategori', stok='$stok', di_pinjam = '$di_pinjam' WHERE id = '$id'";
// menjalankan perintah
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location:databuku.php');        
    }else{
        header('Location:formedit.php?status=gagal;');
    }
}
?>