<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_kampus"; 

// untuk koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>