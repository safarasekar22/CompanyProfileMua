<?php
// ============================================
// Koneksi Database — RASC Makeup
// Default XAMPP/Laragon: user "root", password "" (kosong)
// Kalau Laragon kamu pakai password, isi di bawah ini.
// ============================================

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'rasc_makeup';

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error() .
        '<br>Pastikan sudah import database.sql lewat phpMyAdmin dan MySQL sedang berjalan.');
}

mysqli_set_charset($koneksi, 'utf8mb4');
