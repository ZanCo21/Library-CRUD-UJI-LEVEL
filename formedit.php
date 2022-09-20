<?php
include 'koneksi.php';

include 'inc_sidebar.php';

$id = $_GET['id'];
$sql = "SELECT * FROM databuku WHERE id = '$id'";

$query = mysqli_query($connect, $sql);

 // (mysql_fetch_array/assoc)  pengambilan data MySQL menangkap data dari hasil perintah query
$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("gagal");
}


?>
<br>
<div class="container-edit">
    <h3>EDIT DATA PERPUSTAKAAN</h3>
    <form action="edit.php" method="post">
        <div class="title-edit">
        <p><label>ID :<input required="required" disabled type="text" name="id" value="<?php echo $data['id']?>"></label></p>
        <p><label>KODE BUKU :<input required="required" type="text" name="kode_buku" value="<?php echo $data['kode_buku']?>"></label></p>
        <p><label>JUDUL BUKU : <input required="required" type="text" name="judul_buku" value="<?php echo $data['judul_buku']?>"></label></p>
        <p><label>KATEGORI : <input required="required" type="text" name="kategori" value="<?php echo $data['kategori']?>"></label></p>
        <p><label>STOK : <input required="required" type="number" name="stok" value="<?php echo $data['stok']?>"></label></p>
        <p><label>DIPINJAM : <input required="required"  type="number" name="di_pinjam" value="<?php echo $data['di_pinjam']?>"></label></p>
        </div>
        
        <!-- type hidden ini berfungsi sebagai menyimpan data id mahasiswa yang sedang di edit-->
        <div class="btn-edit">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" name="editbuku" value="Edit buku" class="btn-buku">
        </div>

    </form>
</div>
