<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Hapus Siswa</title>
</head>
<body>

<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Apakah Anda yakin akan menghapus data berikut?</h2>
<form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    Nama : <?php echo $row['nama'] ?> <br/>
    Alamat : <?php echo $row['alamat'] ?> <br/>
    Jenis Kelamin :
    <?php
    if ($row['jenis_kelamin'] == 1) {
        echo "Laki-laki";
    } else {
        echo "Perempuan";
    }
    ?> <br/>
    Agama : <?php echo $row['agama'] ?> <br/>
    Sekolah Asal : <?php echo $row['sekolah_asal'] ?> <br/>
    <button type="submit">Ya</button>
    <a href="list-siswa.php">Tidak</a>
</form>

</body>
</html>