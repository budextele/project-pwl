<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$pelanggan = $_POST['pelanggan'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];

$tgl_hari_ini = date('Y-m-d');
$status = 0;

// mengambil data harga per kilo dari database
$h = mysqli_query($koneksi,"select harga_per_kilo from harga");
$harga_per_kilo = mysqli_fetch_assoc($h);

// menghitung harga laundry, harga perkilo x berat cucian
$harga = $berat * $harga_per_kilo['harga_per_kilo'];


// input data ke tabel transaksi
mysqli_query($koneksi,"insert into transaksi (transaksi_tgl, transaksi_pelanggan, transaksi_harga, transaksi_berat, transaksi_tgl_selesai, transaksi_status) values('$tgl_hari_ini','$pelanggan','$harga','$berat','$tgl_selesai','$status')");

// menyimpan id dari data yang di simpan pada query insert data sebelumnya
$id_terakhir = mysqli_insert_id($koneksi);


// menangkap data form input array (jenis pakaian dan jumlah pakaian)
$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];

// input data cucian berdasarkan id transaksi (invoice) ke table pakaian
for($x=0;$x<count($jenis_pakaian);$x++){
	if($jenis_pakaian[$x] != ""){
		mysqli_query($koneksi,"insert into pakaian values('','$id_terakhir','$jenis_pakaian[$x]','$jumlah_pakaian[$x]')");

	}
}


header("location:transaksi.php");

?>