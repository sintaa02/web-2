<?php
// buat variabel yang menerima value yang dikirim dari form
$customer = $_POST['customer'];
$produk = strtoupper($_POST['produk']);
$jumlah = $_POST['jumlah'];

// LOGIKA MENGHITUNG TOTAL HARGA
$harga_produk = [
    "TV" => 4200000,
    "KULKAS" => 3100000,
    "MESIN_CUCI" => 3800000
];

//Menghitung Total Belanja
$total_belanja = $harga_produk[$produk] * $jumlah;

// mencetak belanjaan
echo "<h2>Hasil Belanja</h2>";
echo "<p>Nama Customer: <strong>$customer</strong></p>";
echo "<p>Produk Pilihan: <strong>$produk</strong></p>";
echo "<p>Jumlah Beli: <strong>$jumlah</strong></p>";
echo "<p>Total Belanja: <strong>Rp. " . number_format($total_belanja, 0, ',', '.') . "</strong></p>";
?>
