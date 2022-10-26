<?php
$opening = "Selamat Datang Di Universitas Narotama";
$nama = "Randhi Danar Calvindo FIK TI 04322006 Semester 1";
echo nl2br("$opening \n $nama");
?>

<br>
<br>

<?php
$l = 5;
$p = 6;
$ket = "Menghihtung Luas dengan rumus panjang kali lebar";

echo nl2br("$ket \n Lebar : $l \n Panjang : $p \n Luas : $l * $p = ");
echo $l * $p;
?>

<br>
<br>

<?php
$ket = "Menghitung luas dan volume bola";
$rl = "Rumus Luas = 4 * phi * r * r";
$rv = "Rumus Volume = 4/3 * phi * r * r";

echo nl2br("$ket \n $rl \n $rv ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Luas Dan Volume Bola</title>
</head>

<body>
    <form action="modul1.php" method="POST">
        <label for="hitung">Pilih Hitung :
            <select name="hitung" id="hitung">Hitung
                <option value="-">-</option>
                <option name="luas" value="luas">Luas</option>
                <option name="volume" value="volume">Volume</option>
            </select>
        </label>
        <p>
            Pilih phi :
            <input type="radio" name="phi" value="3.14">3.14
        </p>
        <p>
            Masukan Jari - Jari :
            <input type="text" name="jari">
            cm
        </p>
        <input type="submit" name="total" value="total">
    </form>
</body>
<?php
if (isset($_POST["total"])) {
    error_reporting(0);
    $jari = $_POST['jari'];
    $phi = $_POST['phi'];
    $hitung = $_POST['hitung'];
    if ($hitung == "luas") {
        $total = 4 * $phi * $jari * $jari;
        echo "Nilai $hitung Bola : $total cm2";
    } elseif ($hitung == "volume") {
        $total = (4 / 3) * $phi * $jari * $jari * $jari;
        echo "Nilai $hitung bola : $total cm2";
    } else {
        echo "masukan nilai dan pilih mau hitung apa!";
    }
}
?>

</html>

<br>
<br>

<?php
$info = "Konversi Suhu Fahrenheit (F) Reamur (R) dan Kelvin (K)";
echo "$info";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>

<body>
    <form action="modul1.php" method="POST">
        <p>
            Suhu :
            <input type="text" name="suhu"> Celcius
        </p>
        <label for="konversi">Konversi Suhu :
            <select name="konversi" id="konversi">Konversi
                <option value="-">-</option>
                <option name="fahrenheit" value="fahrenheit">Fahrenheit</option>
                <option name="kelvin" value="kelvin">Kelvin</option>
                <option name="reamur" value="reamur">Reamur</option>
            </select>
        </label>
        <br>
        <br>
        <input type="submit" name="hasil" value="hasil">
    </form>
</body>
<?php
if (isset($_POST["hasil"])) {
    $b = 32;
    $suhu = $_POST['suhu'];
    $konversi = $_POST['konversi'];
    echo "Suhu : $suhu °Celcius<br>";
    if ($konversi == "reamur") {
        $hasil = $suhu + $b;
        echo " Hasil konversi ke $konversi: $hasil ° $konversi";
    } else if ($konversi == "fahrenheit") {
        $hasil = 9 / 5 * $suhu + $b;
        echo "Hasil Konversi ke $konversi : $hasil ° $konversi";
    } else if ($konversi == "kelvin") {
        $hasil = 4 / 5 * $suhu;
        echo "Hasil Konversi ke $konversi : $hasil ° $konversi";
    } else {
        echo "Pilih dulu konversinya!";
    }
}
?>

</html>