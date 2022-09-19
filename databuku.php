<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/09294afb62.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><img src="asset/img/user.png" alt=""></i></span>
                    <span class="title">STARBHAK PERPUS</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-file-pen"></i></span>
                    <span class="title">Data Buku</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-file-pen"></i></span>
                    <span class="title">Data Siswa  </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-circle-exclamation"></i></span>
                    <span class="title">More..</span>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- home content -->
    <div class="home-content">
        <div class="home-1">
            <span>DATA PEPRPUSTAKAAN</span>
            <button><a href="">Tambah</a></button>


            <table border="1" style="border-collapse: collapse;" class="tabel-content">
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>DI Pinjam</th>
                    <th>Action</th>
                </tr>

                <?php
                    $sql= "SELECT * FROM databuku";
                    $query = mysqli_query($connect, $sql);
                    while($pel= mysqli_fetch_array($query)){
                        echo "
                        <tr>
                            <td>$pel[no]</td>
                            <td>$pel[kode_buku]</td>
                            <td>$pel[judul_buku]</td>
                            <td>$pel[kategori]</td>
                            <td>$pel[stok]</td>
                            <td>$pel[di_pinjam]</td>    
                            </td>
                            <td>
                                <a href='formedit.php?kode_buku=".$pel['kode_buku']."'>Edit</a> 
                                <a  href='hapus.php?id_pelanggan=".$pel['kode_buku']."'>Hapus</a> 
                            </td>
                        </tr>"; 
                    }

                ?>
            </table>
        </div>

        
    </div>
</body>
</html>