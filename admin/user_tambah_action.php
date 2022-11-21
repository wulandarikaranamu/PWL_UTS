<?php 
include "../config.php";

// $userid = $_POST["user_id"];
$nama_lengkap = $_POST["nama_lengkap"];
$jenis_kelamin = $_POST["gender"];
$username = $_POST["username"];
$password = $_POST["password"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];

 //nama file temporary yang akan disimpan di server
$lokasifile = $_FILES['gambar']['tmp_name']; 

 //membaca nama file yang akan diupload
$namafile = $_FILES['gambar']['name']; 
 
 //folder penyimpanan berkas/file
$uploaddir = "uploads/"; 

 //menggabungkan nama folder dan nama file
$uploadfile = $uploaddir.$namafile; 
 
//Jika file berhasil di upload
if(move_uploaded_file($lokasifile, $uploadfile)){
echo "Nama File : <b>$namafile</b> sukses di upload";

//masukkan informasi file ke dalam database
$sql = "INSERT INTO user VALUES('','$uploadfile','$nama_lengkap', '$jenis_kelamin', '$username', '$password','$kelas','$alamat')";
$hasil = mysqli_query($config, $sql);
// header('location:halaman_user.php');
} else {
echo "File gagal disimpan";
}
?>