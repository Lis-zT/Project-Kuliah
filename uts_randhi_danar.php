<?php
$inf = "Selamat Datang di Universitas Narotama";
$me = "Randhi Danar Calvindo Fasilkom Teknik Informatika Kelas B Semester 1";
$keg = "Membuat program untuk menampilkan digit angka terakhir nim";
$nim = "04322006";
$p = "Karena digit angka terakhir NIM saya 6 jadi saya memunculkan bentuk angka 6";
echo nl2br("$inf \n $me \n $nim \n \n $keg \n $p");
echo "<br>";
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo "*";
}
echo "<br>";
echo "*";
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo "*";
}
echo "<br>";
echo "*";
for ($i = 0; $i < 6; $i++) {
    echo "&nbsp;";
}
echo "*";
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    echo "*";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angka Nim</title>
</head>

<body>
    <form action="uts_randhi_danar.php" method="POST">
        <h3>Program Menampilkan angka terakhir digit NIM dengan metode input data </h3>
        <p>
            Masukan NIM :
            <input type="number" name="angka" id="angka" placeholder="masukan angka terakhir nim anda" style="width: 225px;">
        </p>
        <button type="submit" name="submit">Proses</button>
    </form>
</body>
<?php
if (isset($_POST['submit'])) {
    $angka = $_POST["angka"];
    if ($angka == 0) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } else if ($angka == 1) {
        for ($i = 0; $i < 5; $i++) {
            echo "* <br>";
        }
    } else if ($angka == 2) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } elseif ($angka == 3) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } elseif ($angka == 4) {
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
    } elseif ($angka == 5) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } elseif ($angka == 6) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } elseif ($angka == 7) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
    } elseif ($angka == 8) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } elseif ($angka == 9) {
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        echo "*";
        for ($i = 0; $i < 6; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
        echo "<br>";
        for ($i = 0; $i < 8; $i++) {
            echo "&nbsp;";
        }
        echo "*";
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            echo "*";
        }
    } else {
        echo "Masukan Angka NIM Terakhir Anda!";
    }
}

?>

</html>