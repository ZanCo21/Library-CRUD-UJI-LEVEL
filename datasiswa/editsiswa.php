<?php
include "../koneksi.php";

if(isset($_POST['editsiswa'])){
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat_siswa = $_POST['alamat_siswa'];

    $sql = "UPDATE datasiswa SET id='$id',nisn='$nisn', nama_siswa='$nama_siswa', kelas ='$kelas', jurusan ='$jurusan',alamat_siswa='$alamat_siswa' WHERE id='$id'";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('location: datasiswa.php');
    }else{
        header('location: formeditsiswa.php?status=gagal;');
    }

}
?>