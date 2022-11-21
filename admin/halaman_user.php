<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <p align="left">Anda Login Sebagai "<?php echo 
    $_SESSION['username']; ?>" | Klik <a href="logout.php">disini</a> untuk logout.</p>
    
    <h3>Data Siswa</h3>
    <p><a href="user_tambah.php">[+Tambah Data Siswa]</a> </p>
    <table width='900' border='1' cellpadding="5" cellspacing="0">
        <tr>
            <th width='30'>No.</th>
            <th width='100'>User Id</th>
            <th width='350'>Foto Siswa</th>
            <th width='200'>Nama Lengkap</th>
            <th width='200'>Jenis Kelamin</th>
            <th width='300'>Username</th>
            <th width='100'>Password</th>
            <th width='100'>Kelas</th>
            <th width='350'>Alamat</th>
            <th width="100">Kelola</th>
        </tr>
    <?php
    include "../config.php";

    $sql="SELECT user_id, foto_siswa, nama_lengkap, jenis_kelamin, username, password, kelas, alamat FROM user ORDER BY user_id";
    $hasil = mysqli_query($config, $sql);
    $no=1;
    while ($data=mysqli_fetch_array($hasil)){
    ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data['user_id']?></td>
            <td><img src="<?php echo $data['foto_siswa']?>" 
            width="100%"></td>
            <td><?php echo $data['nama_lengkap']?></td>
            <td><?php echo $data['jenis_kelamin']?></td>
            <td><?php echo $data['username']?></td>
            <td><?php echo $data['password']?></td>
            <td><?php echo $data['kelas']?></td>
            <td><?php echo $data['alamat']?></td>
            <td align="center"><a href="user_ubah.php?user_id=<?php echo 
            $data['user_id'];?>">Edit</a>|<a href="user_hapus.php?id=<?php echo 
            $data['id'];?>">Hapus</a>
            </td>
        </tr>
    <?php 
        $no++;
    }
    echo "</table>";
    ?>
</body>
</html>