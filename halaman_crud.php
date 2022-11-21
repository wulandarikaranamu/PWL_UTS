<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan Siswa</title>
</head>
<body>
    <h3>Tabungan Siswa</h3>
    <p>[<a href="tabungan_tambah.php">Tambah Data Tabungan Siswa</a>]</p>
    <table width="720" border="1" cellpadding="5" cellspasing="0">
        <tr>
            <th width="30">No.</th>
            <th width="30">Id User</th>
            <th width="30">Tanggal</th>
            <th width="30">Jumlah Tabungan</th>
            <th width="30">Keterangan</th>
            <th width='150'>Kelola</th>
        </tr>
    <?php 
    include "config.php";

    $sql = "SELECT id, user_id, tanggal, jumlah, keterangan FROM tabungan_siswa ORDER BY user_id";

    $hasil = mysqli_query($config, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['user_id']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['jumlah']; ?></td>
    <td><?php echo $data['keterangan']; ?></td>
    <td align="center">
        <a href="tabungan_edit.php?id=<?php echo
        $data['id'];?>">Edit</a> |
        <a href="tabungan_hapus.php?id=<?php echo
        $data['id'];?>">Hapus</a>
    </td>
</tr>
    
<?php
    $no++;
    }
        echo "</table>";
    ?>
    </table>
</body>
</html>