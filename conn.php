<?php
    $servername = 'localhost';
    $username   ='root';
    $password   = '';
    $database   = 'app_puskesmas';

    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "SELECT * FROM tbl_barang";

    $datas = mysqli_query($conn,$query);