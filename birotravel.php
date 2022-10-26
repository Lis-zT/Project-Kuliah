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
    <title>Biro Travel</title>
</head>

<body>
    <form action="birotravel.php" method="POST">
        <h3>Biro Travel</h3>
        <p>Kapasitas BusKecil : 7</p>
        <p>Kapasitas Bus Besar : 50</p>
        <p>
            Masukan Jumlah Penumpang :
            <input type="text" name="penumpang">
            Orang
        </p>
        <input type="submit" name="total" value="total">
    </form>
</body>
<?php
if (isset($_POST["total"])) {
    $penumpang = $_POST["penumpang"];
    $bb = 50;
    $bk = 7;
    if ($penumpang >= $bb) {
        /*Perhitungan jumlah bis besar*/
        $total = $penumpang / $bb;
        $hsl = floor($total);

        /*Perhitungan sisa jumlah bis kecil*/
        $jml = $penumpang % $bb;
        $kcl = $jml / $bk;
        $hsl2 = floor($kcl);

        /*Perhitungan penumpang yang ditolak*/
        $tlk = $jml % $bk;
        $hsl3 = floor($tlk);

        echo nl2br("Bus Besar : $hsl \n Bus Kecil : $hsl2 \n Ditolak : $hsl3");
    } elseif ($penumpang >= $bk) {
        /*Perhitungan jumlah bis kecil*/
        $total = $penumpang / $bk;
        $hsl2 = floor($total);

        /*Perhitungan penumpang yang ditolak*/
        $tolak = $penumpang % $bk;
        $hsl3 = floor($tolak);
        echo nl2br("Bus Besar : 0 \n Bus Kecil : $hsl2 \n Ditolak : $hsl3");
    } else {
        echo "Masasukan jumlah penumpang!";
    }
}
?>

</html>