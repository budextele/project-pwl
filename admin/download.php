<?php
	include '../koneksi.php';
	$sql= "SELECT foto FROM admin WHERE id=1";
	$result = mysqli_query($koneksi,$sql);
	$row = mysqli_fetch_object($result);
	header ("Content-type: image/jpeg");
    echo $row->foto;
                            
	 ?>