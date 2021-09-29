<?php
include '../koneksi.php';
session_start();
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu Atau Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"index.php\";</script>"; }
// menyimpan data kedalam variabel
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$kata   = $_POST['kata'];
$arti   = $_POST['arti'];
$cek_kata = mysqli_num_rows(mysqli_query($conn, "SELECT kata FROM terjemahan WHERE kata='$_POST[kata]'"));
if ($cek_kata > 0) {
    echo "<script>alert('Kata Sudah Ada!'); location.href=\"tambah.php\";</script>";
} else {

    $query      = "INSERT INTO terjemahan SET tanggal_update='$tanggal', kata='$kata', arti='$arti'";
    $sql        = mysqli_query($conn, $query);
    echo "<script>alert('Data Berhasil Disimpan'); location.href=\"tambah.php\";</script>";
}
