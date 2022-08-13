<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1></h1>
    <?php

    $nUTS = 70;
    $nUAS = 98;
    $nRata = ($nUAS + $nUAS) / 2;

    $nilai = 98;
    if ($nilai > 80) {
        $keterangan = "lulus";
    } else {
        $keterangan = "tidak lulus";
    }
    if ($nRata >= 90 and $nRata <= 100) {
        $keterangan = "a";
    } else if ($nRata >= 80 and $nRata <= 89) {
        $keterangan = "b";
    } else if ($nRata >= 70 and $nRata <= 79) {
        $keterangan = "c";
    } else  if ($nRata >= 70) {
        $keterangan = "d";
    } else {
        $keterangan = "UNDEFINED";
    }


    $var = 78;
    $var2 = 98;
    if ($var == 88 || $var == 78) {
        $hasil = "YA!!!";
    } else {
        $hasil = "TIDAK!!!";
    }

    if ($var2 == 88 || $var2 == 78) {
        $hasil2 = "YA!!!";
    } else {
        $hasil2 = "TIDAK!!!";
    }
    ?>
    <p>Nilai :<?php echo "<p>Nilai : $nilai</p>" ?> </p>
    <p>Keterangan : <?php echo $keterangan ?> </p>
    <p>Hasil : <?php echo $hasil ?> </p>
    <p>Hasil2 : <?php echo $hasil2 ?> </p>
</body>

</html>