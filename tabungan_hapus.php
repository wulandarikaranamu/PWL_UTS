<?php 
    include "config.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM tabungan_siswa WHERE id ='$id'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data Berhasil Dihapus')</script>";
    header("location:halaman_crud.php");
    // header("location:halamanuser2.php") ini dimatikan untuk membuat alertnya muncul


?>