<?php
// Koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelp = $_POST['NoTelp'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = $_POST['JumlahMasaKerja'];

//Menginput data ke database
mysqli_query($koneksi,"insert into karyawan values('','$Nama','$NoKTP','$NoTelp','$TahunMasuk','$JumlahMasaKerja')");

//Mengembalikan ke halaman awal
header("location:./index.php");