<?php
    include "../koneksi.php";
    include "inc_sidebar.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM datasiswa WHERE id='$id'";

    $query = mysqli_query($connect, $sql);

    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ){
        die ('gagal');
    }


?>
<br>
<div class="container-edit">
    <h3>EDIT DATA PERPUSTAKAAN</h3>
    <form action="editsiswa.php" method="post">
        <div class="title-edit">
        <p><label>ID :<input required="required" disabled type="number" name="id" value="<?php echo $data['id']?>"></label></p>
        <p><label>NISN :<input required="required" type="number" name="nisn" value="<?php echo $data['nisn']?>"></label></p>
        <p><label>NAMA SISWA : <input required="required" type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']?>"></label></p>
        <p><label>KELAS: <input required="required" type="text" name="kelas" value="<?php echo $data['kelas']?>"></label></p>
        <p><label>JURUSAN : <input required="required" type="text" name="jurusan" value="<?php echo $data['jurusan']?>"></label></p>
        <p><label>ALAMAT : <input required="required"  type="text" name="alamat_siswa" value="<?php echo $data['alamat_siswa']?>"></label></p>
        </div>
        
        <!-- type hidden ini berfungsi sebagai menyimpan data id mahasiswa yang sedang di edit-->
        <div class="btn-edit">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" name="editsiswa" value="Edit data" class="btn-buku">
        </div>

    </form>
</div>


