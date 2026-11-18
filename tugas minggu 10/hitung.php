<?php
echo "<h2>Hasil Perhitungan</h2>";

// 1. TANGKAP DATA DARI FORM (Lengkapi bagian yang titik-titik!)
$nilai_a = $_POST['angka1'];
$nilai_b = $_POST['angka2'];

// 2. PROSES MATEMATIKA
$hasil = $nilai_a + $nilai_b;

// 3. TAMPILKAN HASILNYA
echo "<p>$nilai_a ditambah $nilai_b sama dengan <b>$hasil</b></p>";
echo "<br><a href='kalkulator.php'>Hitung Lagi</a>"; // Link untuk kembali ke form
?>