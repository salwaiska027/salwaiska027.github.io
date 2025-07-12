<?php

$host = 'mysgl';    # localhost/127.0.0.1
$username = 'root';
$password = 'root';
$dp_name = 'latihan';

$koneksi = mysqli_connect($host, $username, $password, $dp_name);

if (!$koneksi){
    die ("konoksi gagal:" . mysqli_connect_error());
} else {
    echo "koneksi database berhasil";
}

?>