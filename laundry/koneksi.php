<?php
$koneksi = mysqli_connect("localhost","root","","laundry");

if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal : " . mysql_connect_errno();
}
?>