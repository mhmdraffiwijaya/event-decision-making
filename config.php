<?php
$db = mysqli_connect("localhost","root","","db_prof");
if($host){
  echo "Koneksi berhasil";
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
?>
