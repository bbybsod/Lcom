<?php
// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];

// File CSV tempat menyimpan data
$file = 'data.csv';

// Cek apakah file sudah ada
$file_exists = file_exists($file);

// Buka file untuk ditulis (append)
$f = fopen($file, 'a');

// Jika file baru, tambahkan header
if (!$file_exists) {
    fputcsv($f, ['Nama', 'Email']);
}

// Tulis data
fputcsv($f, [$nama, $email]);

fclose($f);

echo "Data berhasil disimpan ke $file (bisa dibuka dengan Excel)";
?>
