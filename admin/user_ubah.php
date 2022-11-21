<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit User</title>
</head>
<body>

<?php 
    include '../config.php';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM user WHERE user_id='$user_id'";
    $hasil = mysqli_query($config, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
?>

<h2>Edit User</h2>
    <form method="POST" action="user_ubah_action.php" enctype="multipart/form-data">
<table>
    <!-- <tr>
        <td width="100">Judul Berita</td>
        <td>:</td>
        <td><input type="hidden" name="berita_id" value="<?php //echo $data['berita_id']?>">
        
    </tr> -->
    <tr>
        <td>Gambar</td>
        <td>:</td>
        <td>
            <input type="file" name="gambar"> 
            <p><?php echo $data['foto_siswa']?></p>
        </td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><textarea name="nama_lengkap" rows="6" cols="45" ><?php echo $data['nama_lengkap']; ?></textarea></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td> <br>
        <td>
        <input type="radio" name="jenis_kelamin" <?php  echo $data['jenis_kelamin'] === 'laki-laki' ? 'checked': '' ?> >Laki-laki<br>
        <input type="radio" name="jenis_kelamin" <?php  echo $data['jenis_kelamin'] === 'perempuan' ? 'checked': '' ?>>Perempuan<br>
        </td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" size="50" value="<?php echo $_SESSION['username'];?>" readonly></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" size="60" value="<?php echo $data['password']?>"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>
            <input type="text" name="kelas" size="60" value="<?php echo $data['kelas']?>">
            <input type="hidden" name="user_id" size="50" value="<?php  $data['user_id']?>"></td>

        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" cols="30" rows="10"   id=""><?php echo $data['alamat']?></textarea></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="simpan">
        <input type="reset" value="reset"></td>
    </tr>
</table>
    </form>
    <?php 
    }?>
</body>
</html>