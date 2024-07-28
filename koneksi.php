<?php
$server = 'localhost';
$user = 'root';  // Ganti dengan username MySQL Anda jika berbeda
$password = '';      // Ganti dengan password MySQL Anda jika ada
$nama_database  = 'db_motor';

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "<skript>console.log('berhasil terhubung')</skript>";
}
