<?php
include "koneksi.php";
    if(isset($_GET['kode'])){
        if(mysqli_query($koneksi,"delete from data_tagihan where no_sl='$_GET[kode]'")){
                echo "<meta http-equiv-refresh content=2;URL='user_menu.html'>";
                echo "<a href='user_menu_sbayar.php'>back<a>";
                        }
                        else{
                            echo "hapus data error";
                        }

                        
                    }

            ?>