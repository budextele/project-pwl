<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
    $username = $_SESSION['username'];

// menangkap data yang dikirim dari form
$password_baru = md5($_POST['password_baru']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5

// mengupdate data password pada table admin
mysqli_query($koneksi,"update admin set password='$password_baru' where username='$username'");

header("location:profile.php?pesan=oke");

?>