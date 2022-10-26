<?php
$ket = "Selamat Datang Di Universitas Narotama";
$inf = "Randhi Danar Calvindo FIK TI 04322006 Semester 1";
echo nl2br("$ket \n $inf");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan Program Diskon</title>
</head>

<body>
    <form action="percabangan_diskon.php" method="POST">
        <h3>Diskon Pembelian</h3>
        <p>Pembelian Rp 50.000 disk 10%</p>
        <p>Pembelian Rp 100.000 disk 15%</p>
        <p>Pembelian Rp 200.000 disk 25%</p>
        <p>
            Masukan Harga Pembelian : Rp
            <input type="text" name="harga">
        </p>
        <input type="submit" name="total" id="submit" value="submit">
    </form>
</body>
<?php
if (isset($_POST['total'])) {
    $harga = $_POST["harga"];

    if ($harga >= 200000) {
        /*Menghitung total diskon*/
        $disk = 25 / 100 * $harga;
        /*Menghitung harga setelah diskon*/
        $dis = $harga - $disk;

        $ket1 = "Anda mendapatkan diskon 25 persen = Rp";
        $ket2 = "jumlah yang harus dibayar = Rp";
        echo nl2br("$ket1 $disk \n $ket2 $dis");
    } elseif ($harga >= 100000) {
        /*Menghitung total diskon*/
        $disk = 15 / 100 * $harga;
        /*Menghitung harga setelah diskon*/
        $dis = $harga - $disk;

        $ket1 = "Anda mendapatkan diskon 15 persen = Rp";
        $ket2 = "jumlah yang harus dibayar = Rp";
        echo nl2br("$ket1 $disk \n $ket2 $dis");
    } elseif ($harga >= 50000) {
        /*Menghitung total diskon*/
        $disk = 10 / 100 * $harga;
        /*Menghitung harga setelah diskon*/
        $dis = $harga - $disk;

        $ket1 = "Anda mendapatkan diskon 10 persen = Rp";
        $ket2 = "jumlah yang harus dibayar = Rp";
        echo nl2br("$ket1 $disk \n $ket2 $dis");
    } else {
        $j = "Anda Tidak Mendapatkan Diskon = 0";
        $i = "Jumlah yang harus dibayar = Rp $harga";
        echo nl2br("$j \n $i");
    }
}
?>

</html>