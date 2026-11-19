<?php
$input_user=['user'];
$input_pass=['pass'];

if ($input_user == "admin" && $input_pass == "rpl123") {
    echo "<h1 style='color: green; text-align: center;'> Login Berhasil! </h1>";
    echo "<p style='text-align: center;'> Selamat Datang  di Dashboard Rahasia RPL. </p> ";
} else {
    echo "<h1 style ='color: red; text-align: center;'> LOGIN GAGAL! </h1>";
    echo "<center><a href='login.php'> Coba Lagi </a></center>";
}
?>
