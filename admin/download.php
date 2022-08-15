<?php
	include '../koneksi.php';
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	$user = $_SESSION['username'];
	$sql= "SELECT foto FROM admin WHERE username='$user'";
	// $sql= "SELECT foto FROM admin WHERE id=1";
	$result = mysqli_query($koneksi,$sql);
	$row = mysqli_fetch_object($result);
	header ("Content-type: image/jpeg");
    echo $row->foto;
                            
	 ?>