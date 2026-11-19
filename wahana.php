<?php
echo"<h2>Pengecekan Wahana Roller Coaster</h2>";

$umur = 17;
$tinggi_cm = 175;

if($umur >= 16 && $tinggi_cm >=175) {
    echo "<h3 style='color: green;>'>Selamat Anda Boleh Naik Wahana!</h3>";
} else {
    echo "<h3 style='color: red;'>Maaf, Syarat Tidak Terpenuhi.</h3>";
}
?>