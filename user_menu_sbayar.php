<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pembayaran</title>
    <link rel="stylesheet" href="style_user.css">
</head>
<body>
    <nav>
        <div class="wrapper1">
            <div class="logo"><a href=''> PDAM Tirta Intan Garut</a></div>
            <div class="menu">
                <ul>
                <li><a href="report.php" class="tbl-merah">Report</a></li>
                    <li><a href="user_menu.html">Home</a></li>
                    <li><a href="user_menu_info.html">Info</a></li>
                    <li><a href="index.html" class="tbl-yellow">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="tambah_data">
        <form action="user_menu_sbayar.php" method="post">
            <fieldset class="form-set">
                <label> No SL </label>
                <div>
                    <input type="text" name="no_sl" value="<?php if(isset($_GET['no_sl'])){ echo $_GET['no_sl']; } ?>">
                </div>
            </fieldset>
            <div id="sign-up-actions">
                <button class="btn-submit" name="proses">
                  <span id="btn-actions-text"> Cari </span>
                </button>
              </div>
        </form>
    </div>
<div class="data_tagihan">
    <table>
        <thead>
        <tr>
            <th>No SL</th>
            <th>No Pelanggan</th>
            <th>Jumlah Tagihan</th>
            <th colspan="1"> Aksi </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $query="select * from data_tagihan where no_sl = 0";
                include "koneksi.php";
                if(isset($_POST['proses'])){
                $search = $_POST['no_sl'];

                $query="select * from data_tagihan where no_sl = '$search'";
            }

                $tampil = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($tampil)){
                    echo "
                        <tr>
                            <th> $data[no_sl] </th>
                            <th> $data[no_pelanggan] </th>
                            <th> $data[jumlah_tagihan] </th>
                            <th class='action_button_del'><a href='user_menu_bayar.php?kode=$data[no_sl]'> Bayar </a></th>
                        </tr>";
                }

            ?>

        </tr>
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