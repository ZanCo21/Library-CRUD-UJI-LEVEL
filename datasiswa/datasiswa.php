<?php
    include '../koneksi.php';

    include 'inc_sidebar.php';
?>

<div class="home-content">
        <div class="home-1">
            <span>DATA SiSWA</span>
            <button><a href="formtambah.php">Tambah</a></button>


            <table border="1" style="border-collapse: collapse;" class="tabel-content">
                <tr>
                    <th>ID</th>
                    <th>NISN</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>DI Pinjam</th>
                    <th>Action</th>
                </tr>

                <?php
                    $sql= "SELECT * FROM datasiswa";
                    $query = mysqli_query($connect, $sql);

                    while($data= mysqli_fetch_array($query)){
                        echo "
                        <tr>
                            <td>$data[id]</td>
                            <td>$data[nisn]</td>
                            <td>$data[judul_buku]</td>
                            <td>$data[kategori]</td>
                            <td>$data[stok]</td>
                            <td>$data[di_pinjam]</td>    
                            </td>
                            <td>
                                <a href='formedit.php?id=".$data['id']."'>Edit</a> 
                                <a  href='hapus.php?id=".$data['id']."'>Hapus</a> 
                            </td>
                        </tr>"; 
                    }

                ?>
            </table>
        </div>

        
    </div>