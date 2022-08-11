<?php 

// nama host, Username, password dan nama database
$koneksi = mysqli_connect("localhost","bcgwqowk_laundry","*Laundry123#","bcgwqowk_laundry");

// Periksa Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>