<?php
include "Orang.php" ;
include "Visibility.php" ;
include "Nilai.php" ;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
        <?php 
            $desy = new Orang();
            $desy->ucapSalam();

            echo "<br>";

            $cerry = new Orang();
            $cerry->nama = " Cerry Noviyanti ";
            $cerry->ucapSalam();

            echo "<br>";

            $visibility = new Visibility();
            $visibility->tampilkanProperty();

            echo "Ini Akses di luar kelas";
            echo "Public : " . $visibility->public . '<br>';
           // echo "protected : " . $visibility->protected . '<br>';
           // echo "private : " . $visibility->private . '<br>';   

            echo "<br> <br>";

            echo "Nilai MK Pemrograman Web: <br>";
            $nilai = new Nilai();
            $nilai->setTugas(80);
            $nilai->setUts(90);
            $nilai->setUas(85);

            echo "Nilai UTS : " . $nilai->getUts() . "<br>";
            echo "Nilai UAS : " . $nilai->getUas() . "<br>";
            echo "Nilai TUGAS : " . $nilai->getTugas() . "<br>";
            echo "Total Nilai : " . $nilai->hitungTotal() . "<br>";

        ?>
    </div>
</body>
</html>