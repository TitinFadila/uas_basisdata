<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$rt = $_POST['rt'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($nim) || !empty($rt) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into penduduk values('','$nama','$nik','$rt','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>