<?php
// Simpan logika sign up di sini
// Contoh sederhana hanya untuk ilustrasi
session_start();

// Data pengguna sederhana (sebagai contoh)
$users = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username sudah digunakan
    if (isset($users[$username])) {
        echo 'Username sudah digunakan. Silakan pilih username lain.';
    } else {
        // Tambahkan pengguna baru ke data pengguna
        $users[$username] = ['password' => $password];

        // Simpan informasi pengguna dalam sesi
        $_SESSION['user_id'] = $username;

        // Redirect ke halaman utama setelah sign up berhasil
        header('Location: index.php');
        exit;
    }
}
?>
