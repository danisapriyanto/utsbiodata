<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik";
$koneksi = mysqli_connect($host,$user,$pass,$db);
//$koneksi = new mysqli("localhost","root","","akademik");

    // Check connection
    if (mysqli_connect_error()){
        echo "Koneksi database gagal : ". mysqli_connect_error();
    } 
?>