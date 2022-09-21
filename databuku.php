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
    <link rel="stylesheet" href="css/style.css">
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
                    <span>STARBHAK PERPUS</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-file-pen"></i></span>
                    <span class="title-dash">Data Buku</span>
                </a>
            </li>

            <li>
                <a href="datasiswa/datasiswa.php">
                    <span class="icon"><i class="fa-solid fa-file-pen"></i></span>
                    <span class="title-dash"> Data Siswa  </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-circle-exclamation"></i></span>
                    <span class="title-dash">More..</span>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- home content -->
    <div class="home-content">
        <div class="home-1">
            <span>DATA PEPRPUSTAKAAN</span>
            <button><a href="formtambah.php">Tambah</a></button>


            <table border="0" style="border-collapse: collapse;" class="tabel-content">
                <tr>
                    <th>ID</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Di Pinjam</th>
                    <th>Action</th>
                </tr>

                <?php
                    $sql= "SELECT * FROM databuku";
                    $query = mysqli_query($connect, $sql);

                    while($data= mysqli_fetch_array($query)){
                        echo "
                        <tr>
                            <td>$data[id]</td>
                            <td>$data[kode_buku]</td>
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
</body>
</html>