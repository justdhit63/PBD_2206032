<?php 
include "koneksi.php";

isset( $_POST['proses']);
    mysqli_query($koneksi, "insert into data_tagihan set
    no_sl = '$_POST[no_sl]',
    no_pelanggan = '$_POST[no_pelanggan]',
    jumlah_tagihan = '$_POST[jumlah_tagihan]'");
    
    header("Location: admin_menu_cekdata.php");
    echo "<tr><a href='./admin_menu_cekdata.php'> Back </a></tr>";
    

    


?>