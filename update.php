<?php
include './config.php';

$id=$_POST['id'];
$Nama=$_POST['Nama'];
$NoKTP=$_POST['NoKTP'];
$NoTelpon=$_POST['Notelpon'];
$TahunMasuk=$_POST['TahunMasuk'];
$JumlahMasaKerja=$_POST['JumlahMasaKerja'];

mysqli_query($koneksi,"update karyawan set Nama='$Nama',NoKTP='$NoKTP',NoTelp='$NoTelp',TahunMasuk='$TahunMasuk',JumlahMasaKerja'$JumlahMasaKerja' where id='$id'");

header("location:index.php");