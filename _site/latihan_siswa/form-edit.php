<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Edit Siswa</title>
</head>
<body>

<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Formulir Edit Siswa</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    Nama :
    <input type="text" name="nama" value="<?php echo $row['nama'] ?>"> <br/>
    Alamat :
    <textarea name="alamat">
        <?php echo $row['alamat'] ?>
    </textarea> <br/>
    Jenis Kelamin :
    <input type="radio" name="jenis_kelamin" value="1" <?php if ($row['jenis_kelamin'] == 1) echo "checked" ?>> Laki-Laki
    <input type="radio" name="jenis_kelamin" value="0" <?php if ($row['jenis_kelamin'] == 0) echo "checked" ?>> Perempuan <br/>
    Agama :
    <select name="agama">
        <option>--Pilih Agama--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
    </select> <br/>
    Sekolah Asal :
    <input type="text" name="sekolah_asal" value="<?php echo $row['sekolah_asal'] ?>"> <br/><br/>

    <button type="submit">Update</button>
    <a href="list-siswa.php">Batal</a>
</form>

</body>
</html>