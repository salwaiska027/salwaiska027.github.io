<?php

include "koneksi.php";

$id = $_POST['id'];

$sql = "DELETE FROM siswa WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
    header("location:list-siswa.php");
} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
