<?php
session_start();

// Data pengguna sederhana (sebagai contoh)
$users = [
    'user1' => ['password' => 'password1'],
    'user2' => ['password' => 'password2'],
    // Tambahkan pengguna lain jika diperlukan
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah pengguna ada dalam data pengguna
    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        // Simpan informasi pengguna dalam sesi
        $_SESSION['user_id'] = $username;

        // Redirect ke halaman utama setelah login berhasil
        header('Location: index.php');
        exit;
    } else {
        // Jika username atau password salah, mungkin tampilkan pesan kesalahan atau redirect ke halaman login
        echo 'Login gagal. Silakan coba lagi.';
    }
}
?>
