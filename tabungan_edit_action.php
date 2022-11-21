<?php 
include "config.php";

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['keterangan'];

$sql = "UPDATE tabungan_siswa 
        SET tanggal='$tanggal',
            jumlah='$jumlah',
            keterangan='$ket'
        WHERE id ='$id'";

$sql = mysqli_query($config, $sql);

if($sql){
    echo "Data Berhasil Diubah";
}else{
    echo "Data Gagal Diubah";
}
?>

<br>kembali ke <a href="halaman_crud.php">Halaman User</a>