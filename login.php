<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// fungsi md5 di atas untuk enkripsi kedalam bentuk md5

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// cek jika username dan password yang di input di temukan, buat session dan alihkan halaman ke halaman admin(folder admin),
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>