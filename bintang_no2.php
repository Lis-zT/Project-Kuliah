<?php
$inf = "Selamat Datang di Universitas Narotama";
$me = "Randhi Danar Calvindo Fasilkom Teknik Informatika Kelas B Semester 1";
echo nl2br("$inf \n $me");

echo "<br>";
echo "<br>";

for ($i = 0; $i < 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "*";
    }
    echo "<br>";
}
