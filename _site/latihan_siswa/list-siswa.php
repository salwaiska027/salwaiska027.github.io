<doctype html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
<h2>Siswa yang sudah mendaftar</h2>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="form-daftar.php">[+] Tambah Baru</a></li>
</ul>

<?php
include "koneksi.php";

$sql = "SELECT * FROM siswa";
$result = mysqli_query($koneksi, $sql);
?>

<table border="1">
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tindakan</th>
    </tr>
</thead>
    <tbody>
    <?php
    $no = 1;
  while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php
                    if ($row['jenis_kelamin'] == 1) {
                    echo "Laki-laki";
                    } else {
                    }
                    echo "Perempuan";
                    ?></td>
        <td><?php echo $row['agama']; ?></td>
        <td><?php echo $row['sekolah_asal']; ?></td>
        <td>
            <a href="form-edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="form-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>