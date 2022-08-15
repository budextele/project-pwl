<?php 
// Include the database configuration file  
require_once '../koneksi.php'; 

// $id = $_GET['id'];
$user = $_SESSION['username'];
 
$image = $_FILES['image'];
$info = getimagesize($image['tmp_name']);
if(!$info){
    die("File yang diupload bukan file gambar");
}
$name = $image['name'];
$type = $image['type'];
$blob = addslashes(file_get_contents($image['tmp_name']));

$sql = "UPDATE admin SET (foto, foto_tipe, foto_nama) VALUES ('$blob', '$type', '$name') WHERE id=1";
// $sql = "UPDATE admin SET foto='$blob', foto_tipe='$type', foto_nama='$name' WHERE id=1";
// $sql = "UPDATE admin SET foto='$blob', foto_tipe='$type', foto_nama='$name' WHERE username='$user'";
if(mysqli_query($koneksi, $sql)){
    echo "<script>alert('File berhasil diupload');</script>";
    //delay redirect
    echo "<script>window.location.href='profile.php';</script>";
    // header("Location: profile.php");
    //show popup success
    
}   
else{
   //goto uploadimageform
    echo "<script>alert('File gagal diupload');</script>";
    echo "<script>window.location.href='imageUploadForm.php';</script>";
}

// Display status message 
?>