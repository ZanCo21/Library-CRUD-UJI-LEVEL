<?php
include "koneksi.php";

include "inc_sidebar.php";

?>
<br>

<div class="container-edit">
    <form action="simpanbuku.php" method="post">
        <h3>Tambah Data</h3>
        <div class="title-edit">
            <p><label>KODE BUKU :<input required="required" type="text" name="kode_buku"></label></p>
            <p><label>JUDUL : <input required="required" type="text" name="judul_buku"></label></p>
            <p><label>KATEGORI : <input required="required" type="text" name="kategori"></label></p>
            <p><label>STOK : <input required="required" type="number" name="stok"></label></p>
            <p><label>DI PINJAM : <input required="required" type="number" name="di_pinjam"></label></p>

        </div>
        <div class="btn-edit">
            <input type="submit" name="simpanbuku" value="simpan" class="btn-buku">
        </div>

    </form>
</div>
</body>

</html>