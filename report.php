<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report</title>
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
        <form action="report_file.php" method="post">
            <fieldset class="form-set">
                <label> Email </label>
                <div>
                    <input type="text" name="email" required>
                </div>
                <div>
                    <label> Keluhan </label>
                    <textarea name="keluhan" rows="4" cols="50" required></textarea>
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