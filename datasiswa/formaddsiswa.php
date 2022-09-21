<?php
include "../koneksi.php";
include "inc_sidebar.php";


?>

<br>

<div class="container-edit">
    <form action="simpansiswa.php" method="post">
        <h3>Tambah Data</h3>
        <div class="title-edit">
            <p><label>ID :<input disabled required="required" type="number" name="id"></label></p>
            <p><label>NISN : <input required="required" type="number" name="nisn"></label></p>
            <p><label>NAMA SISWA : <input required="required" type="text" name="nama_siswa"></label></p>
            <p><label>KELAS : <input required="required" type="text" name="kelas"></label></p>
            <p><label>JURUSAN : <input required="required" type="text" name="jurusan"></label></p>
            <p><label>ALAMAT SISWA : <input required="required" type="text" name="alamat_siswa"></label></p>

        </div>
        <div class="btn-edit">
            <input type="submit" name="simpansiswa" value="simpan" class="btn-buku">
        </div>

    </form>
</div>