<?php
    $host     = "localhost";
    $username = "root";
    $password = "";
    $database = "db_prof";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    } 

   
?>
