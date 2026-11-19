<?php
echo "<h2> Pengecekan Wahana RollerCoaster </h2>";
$umur = 17;
$tinggi_cm = 160;

if ($umur >= 15 && $tinggi_cm >= 155) {
    echo "<h3 style='color: green;'> Selamat, Anda Boleh Naik Wahana!!</h3>";
} else {
    echo "<h3 style='color: red;'> Maaf, Syarat Tidak terpenuhi.</h3>";
}
?>