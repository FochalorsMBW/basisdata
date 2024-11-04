<?php
include 'koneksi.php'; // Mengimpor koneksi ke database
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['kata_sandi'];


$query_sql = "INSERT INTO registrasi (nama, email, kata_sandi) VALUES ('$nama', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>
