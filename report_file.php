<?php 
    include "koneksi.php";

    isset( $_POST['proses']);
        mysqli_query($koneksi, "insert into report(email,keluhan) values
        ('$_POST[email]', '$_POST[keluhan]')");

        echo "<tr><a href='./report.php'> Back </a></tr>";
    ?>