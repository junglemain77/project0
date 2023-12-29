<?php
$host           = 'localhost';
$username       = 'root';
$password       = '';
$dbname         = 'mahasiswa';

$koneksi        = mysqli_connect($host, $username, $password, $dbname);
if(!$koneksi){
    die("Tidak bisa terkoneksi ke database");
} else {
    echo "Berhasil terkoneksi ke database";
}   