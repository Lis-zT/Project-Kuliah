<?php
$opening = "Selamat Datang Di Universitas Narotama";
$nama = "Randhi Danar Calvindo FIK TI 04322006 Semester 1";
echo nl2br("$opening \n $nama");
echo "<br>";
echo "<br>";

function fibonacci(int $jumlahbilangan)
{
    $fibonacci = [];
    if ($jumlahbilangan < 0) {
        return $fibonacci;
    }
    for ($i = 0; $i < $jumlahbilangan; $i++) {
        if ($i < 2) {
            $bilangan = $i;
        } else {
            $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        array_push($fibonacci, $bilangan);
    }
    return $fibonacci;
}
echo implode(" ", fibonacci(5)) . '<br>';
echo implode(" ", fibonacci(8)) . '<br>';
echo implode(" ", fibonacci(10)) . '<br>';
echo implode(" ", fibonacci(13)) . '<br>';
