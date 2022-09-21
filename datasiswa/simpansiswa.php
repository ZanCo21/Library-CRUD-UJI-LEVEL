<?php
include '../koneksi.php';

if(isset($_POST ['simpansiswa'])){
    $id = $_POST ['id'];
    $nisn = $_POST ['nisn'];
    $nama_siswa = $_POST ['nama_siswa'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];
    $alamat_siswa = $_POST ['alamat_siswa'];

$sql = "INSERT INTO datasiswa VALUES ('$id', '$nisn', '$nama_siswa', '$kelas', '$jurusan', '$alamat_siswa')";

$query = mysqli_query($connect, $sql);

if($query){
    header('location: datasiswa.php');
}else{
    header('location: formaddsiswa.php?status=gagal');
}


}

?>