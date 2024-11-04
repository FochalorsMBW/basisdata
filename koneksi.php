<?php
$servername = "localhost"; // Ganti jika menggunakan server lain
$username = "root"; // Ganti dengan username MySQL
$password = ""; // Ganti dengan password MySQL jika ada
$database = "toko_baju_23101152630143_luthfialhakim"; // Ganti dengan nama database yang kamu gunakan

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>
