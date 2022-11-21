<?php 

include "config.php";

$user_id = $_POST['user_id'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['keterangan'];

// var_dump($user_id);
// var_dump($tanggal);
// var_dump($jumlah);
// var_dump($ket);

$sql = "INSERT INTO tabungan_siswa (id, user_id, tanggal, jumlah, keterangan) 
        VALUES ('', '$user_id', '$tanggal', '$jumlah', '$ket');";

// var_dump($sql);

$hasil = mysqli_query($config, $sql);
// var_dump($hasil);

if($hasil) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal disimpan";
}
?>

<br> kembali ke <a href="halaman_crud.php">Halaman User</a>