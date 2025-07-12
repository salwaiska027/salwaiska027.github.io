<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Form Pendaftaran Siswa Baru | Digital Talent</title>

</head>

<body>

<h2>Formulir Pendaftaran Siswa Baru</h2>

<form action="create.php" method="POST">

<table>

<tr>

<td>Nama</td>

<td>:</td>

<td><input type="text" name="nama"></td>

</tr>

<tr>

<td>Alamat</td>

<td>:</td>

<td><textarea name="alamat"></textarea></td>

</tr>

<tr>

<td>Jenis Kelamin</td>

<td>:</td>

<td>

<input type="radio" name="jenis_kelamin" value="1"> Laki-laki

<input type="radio" name="jenis_kelamin" value="0"> Perempuan

</td>

</tr>

<tr>

<td>Agama</td>

<td>:</td>

<td>

<select name="agama">

<option>--Pilih Agama--</option>

<option>Islam</option>

<option>Kristen</option>

<option>Hindu</option>

<option>Budha</option>

</select>

</td>

</tr>

<tr>

<td>Sekolah Asal</td>

<td>:</td>

<td><input type="text" name="sekolah_asal"> <br/></td>

</tr>

<tr>

<td colspan="2">

</td>

<td>

<button type="submit">Daftar</button>

<a href="index.php">Batal</a>

</td>

</tr>

</table>

</form>

</body>

</html>