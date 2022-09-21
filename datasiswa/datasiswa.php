<?php
    include '../koneksi.php';

    include 'inc_sidebar.php';
?>

<div class="home-content">
        <div class="home-1">
            <span>DATA SiSWA</span>
            <button><a href="formaddsiswa.php">Tambah</a></button>


            <table border="0" style="border-collapse: collapse;" class="tabel-content">
                <tr>
                    <th>Id</th>
                    <th>Nisn</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
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
                            <td>$data[nama_siswa]</td>
                            <td>$data[kelas]</td>
                            <td>$data[jurusan]</td>
                            <td>$data[alamat_siswa]</td>    
                            </td>
                            <td>
                                <a href='formeditsiswa.php?id=".$data['id']."'>Edit</a> 
                                <a  href='hapussiswa.php?id=".$data['id']."'>Hapus</a> 
                            </td>
                        </tr>"; 
                    }

                ?>
            </table>
        </div>

        
    </div>