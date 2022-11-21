<?php 
session_start(); //memulai session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
</head>
<body>
    <h2>Halaman Siswa Yang Menabung</h2>
    <form method="POST" action="user_tambah_action.php" enctype="multipart/form-data">
<table>
    <!-- <tr>
        <td width="150">Id User</td>
        <td>:</td>
        <td><input type="number" name="id" size="60"></td>
    </tr> -->
    <tr>
        <td>Foto Siswa</td>
        <td>:</td>
        <td><input type="file" name="gambar"> </td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama_lengkap"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td> <br>
        <td>
        <input type="radio" name="gender" value="laki-laki">Laki-laki<br>
        <input type="radio" name="gender" value="perempuan">Perempuan<br>
        </td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" size="60"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" size="60"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="kelas" size="60"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" cols="30" rows="10"  id=""></textarea></td>
    </tr>
    <tr>
        <td colspan="3">
        <input type="submit" name="simpan" value="simpan">
        <input type="reset" value="reset">
        </td>
    </tr>
</table>
</form>

</body>
</html>