<?php
session_start();
include '../koneksi.php';
if (isset($_POST['login'])) {
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    if (mysqli_num_rows($query) != 0) {
        $get = mysqli_fetch_array($query);
        $level = $get['level'];
        $nama = $get['username'];
        $_SESSION['username'] = $nama;
        if ($level == "Admin") {
            echo "<script>alert('Selamat Datang Admin'); location.href=\"tambah.php\";</script>";
            echo "Anda admin";
        } elseif ($level == "User") {
            echo "<script>alert('Selamat Datang User'); location.href=\"user/index.php\";</script>";
            echo "Anda User";
        } elseif ($level == "Super Admin") {
            echo "<script>alert('Selamat Datang Super Admin'); location.href=\"admin/index.php\";</script>";
            echo "Anda User";
        } elseif ($level == "Mitra") {
            echo "<script>alert('Selamat Datang Mitra Sirespek'); location.href=\"mitra/index.php\";</script>";
            echo "Anda User";
        }
    } else {
        echo "<script>alert('Username Atau Password Salah!'); location.href=\"index.php\";</script>";
        echo "Login Gagal!";
    }
} else {
    echo "<script>alert('Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"login.php\";</script>";
    echo "Akses Ditolak!";
}
