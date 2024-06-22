<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin History Transaksi</title>
    <link rel="stylesheet" href="style_user.css">
</head>
<body>
    <nav>
        <div class="wrapper1">
            <div class="logo"><a href=''> PDAM Tirta Intan - Admin</a></div>
            <div class="menu">
                <ul>
                    <li><a href="admin_menu.html">Home</a></li>
                    <li><a href="admin_menu_cekdata.php">Cek Data</a></li>
                    <li><a href="admin_menu_tambah.php">Tambah Data</a></li>
                    <li><a href="petugas.php">Data Petugas</a></li>
                    <li><a href="index.html" class="tbl-yellow">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="data_tagihan">
        <table>
            <thead>
                <th> No </th>
                <th> No SL</th>
                <th> No Pelanggan </th>
                <th> Jumlah Tagihan </th>
                <th> Waktu </th>
                <th colspan="1"> Aksi </th>
            </thead>
            <tbody>
                    <?php 
                    include "koneksi.php";
                    $ambildata = mysqli_query($koneksi,"select * from log_pembayaran");
                    while ($tampil = mysqli_fetch_array($ambildata)){
                        echo "
                        <tr>
                            <th> $tampil[log_id] </th>
                            <th> $tampil[no_sl] </th>
                            <th> $tampil[no_pelanggan] </th>
                            <th> $tampil[jumlah_tagihan] </th>
                            <th> $tampil[waktu] </th>
                            <th class='action_button_del'><a href='?kode=$tampil[log_id]'> Delete </a></th>
                        </tr>";

                    }

                    ?>

                    <?php
                    if(isset($_GET['kode'])){
                        if(mysqli_query($koneksi,"delete from log_pembayaran where log_id='$_GET[kode]'")){
                            echo "<meta http-equiv-refresh content=2;URL='admin_menu_history.php'>"; 
                        }
                        else{
                            echo "hapus data error";
                        }
                    }

                    ?>
                </tbody>
        </table>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
            <div class="footer-section">
                    <h3>PDAM</h3>
                    <p>Perusahaan Daerah Air Minum merupakan salah satu unit usaha milik daerah, yang bergerak dalam distribusi air bersih bagi masyarakat umum.</p>
                </div>
                <div class="footer-section">
                    <h3>Website Info</h3>
                    <p>Website Untuk Melakukan Pembayaran Online di PDAM Tirta Intan Garut</p>
                </div>
                <div class="footer-section">
                    <h3>Alamat</h3>
                    <p>Jl. Raya Bayongbong - Garut No.220, Mangkurayat, Kec. Cilawu, Kabupaten Garut, Jawa Barat</p>
                    <p>Kode Pos: 44181</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Kelompok 1.</b> Informatika A.
        </div>
    </div>
    
</body>
</html>