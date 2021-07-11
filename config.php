<?php
$koneksi = mysqli_connect("localhost", "root", "", "karyawan");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}