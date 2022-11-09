<?php
$opening = "Selamat Datang Di Universitas Narotama";
$nama = "Randhi Danar Calvindo FIK TI 04322006 Semester 1";
echo nl2br("$opening \n $nama");
echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repeat Bilangan Prima</title>
</head>

<body>
    <form action="repeat_prima.php" method="post">
        <input type="number" name="number" placeholder="masukan angka">
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>
<?php
if (isset($_POST['submit'])) {
    $angka = $_POST["number"];
    for ($i = 1; $i <= $angka; $i++) {
        $a    = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            echo str_repeat("$i", 1) . ' ';
        }
    }
}

?>

</html>