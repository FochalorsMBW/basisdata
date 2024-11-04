<?php
include 'config.php'; // Mengimpor konfigurasi yang berisi koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencari pengguna berdasarkan email
    $sql = "SELECT password FROM tbl_user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Mengambil password hash dari database
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Memverifikasi password
        if (password_verify($password, $hashed_password)) {
            echo "Login berhasil!";
            // Di sini, kamu bisa mengalihkan pengguna ke halaman dashboard atau lainnya
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email tidak terdaftar!";
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
}
?>
