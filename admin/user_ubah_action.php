<?php 
session_start();
include "../config.php";

$user_id = $_POST["user_id"];
$lokasifile = $_FILES['gambar']['tmp_name'];
$nama_lengkap = $_POST["nama_lengkap"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$username = $_POST["username"];
$password = $_POST["password"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];

 //nama file temporary yang akan disimpan di server
$namafile = $_FILES['gambar']['name']; 

 //membaca nama file yang akan diupload
$uploaddir = "uploads/"; //folder penyimpanan berkas/file
$uploadfile = $uploaddir.$namafile; 

echo $nama_lengkap;


 //menggabungkan nama folder dan nama file
if(!empty($lokasifile)){
    $sql = "UPDATE user SET foto_siswa='$uploadfile', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', username='$username', password='$password', kelas='$kelas', alamat='$alamat' WHERE user_id='$user_id'";
    $hasil = mysqli_query($config, $sql);

    if($hasil){
        move_uploaded_file($lokasifile, $uploadfile);
        echo "<script> alert('Data berhasil diubah')</script>";
        echo "Nama File : <b>$namafile</b> sukses di 
        upload<br/><br/>";
        echo "<a href='halaman_user.php'>kembali</a>";
    } else {
        echo "Data gagal disimpan";
    }
} else {
    $sql = "UPDATE user SET   kelas='$kelas' WHERE  user_id='$user_id'";
    $hasil = mysqli_query($config, $sql);
    // header('location:halaman_user.php');
    
    // jenis_kelamin='$jenis_kelamin', username='$username', password='$password',, alamat='$alamat'
}
?>
