<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tambah Data</title>
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

    <div class="tambah_data">
        <form action="input_data.php" method="post">
            <fieldset class="form-set">
                <label> No SL </label>
                <div>
                    <input type="text" name="no_sl">
                </div>
                <div>
                    <label> No Pelanggan </label>
                    <input type="text" name="no_pelanggan">
                </div>
                <div>
                    <label> Jumlah Tagihan </label>
                    <input type="text" name="jumlah_tagihan">
                </div>
            </fieldset>
            <div id="sign-up-actions">
                <button class="btn-submit" name="proses">
                  <span id="btn-actions-text">Submit</span>
                </button>
              </div>
        </form>
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