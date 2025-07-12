<?php

include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekola_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal',";
if (mysqli_query($koneksi, $sgl)) {
    header("location:list_siswa.php");
} else {
    echo "error: . $sql . "<br>" . mysqli_error($koneksi)";
}