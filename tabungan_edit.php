<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data Tabungan</title>
</head>
<body>
    <?php 
    include "config.php";
    $id = $_GET['id'];

    $sql = "SELECT * FROM tabungan_siswa WHERE id='$id'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>

    <h3>Ubah Data Tabungan</h3>
    <form action="tabungan_edit_action.php" method="post">
        <table>
            <tr>
                <td>Id User</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="number" name="user_id" value="<?php echo $data['user_id']?>" readonly >
                    <!-- <input type="number" name="user_id" value="<?php #echo $data['user_id']?>" hidden> -->
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal" value="<?php echo $data['tanggal']?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlah" value="<?php echo $data['jumlah']?>">
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>
                    <input type="text" name="keterangan" value="<?php echo $data['keterangan']?>">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="ubah" value="Simpan">
                    <input type="submit" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>