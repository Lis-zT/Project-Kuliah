<?php
$opening = "Selamat Datang Di Universitas Narotama";
$nama = "Randhi Danar Calvindo FIK TI 04322006 Semester 1";
echo nl2br("$opening \n $nama");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Faktorial While</title>
</head>

<body>
    <form action="while_faktorial.php" method="POST">
        <h3>Fungsi Faktorial Menggunakan While</h3>
        <input type="number" name="faktor" placeholder="masukan angka">
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>
<?php
if (isset($_POST['submit'])) {
    $faktor = $_POST["faktor"];
    $a = 1;
    while ($faktor > 1) {
        $a = $faktor * $a;
        $faktor--;
    }
    echo "Jumlah Perhitungan Faktorial $faktor! = $a";
}
?>

</html>