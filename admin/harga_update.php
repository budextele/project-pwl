<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$harga = $_POST['harga'];

// update data
mysqli_query($koneksi,"update harga set harga_per_kilo='$harga'");

// mengalihkan halaman kembali ke halaman pelanggan
header("location:harga.php");

?>