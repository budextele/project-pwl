<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus transaksi
mysqli_query($koneksi,"delete from transaksi where transaksi_id='$id'");

// menghapus data pakaian dalam transaksi ini
mysqli_query($koneksi,"delete from pakaian where pakaian_transaksi='$id'");

// alihkan halaman ke halaman transaksi
header("location:transaksi.php");
?>