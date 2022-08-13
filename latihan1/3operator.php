<!DOCTYPE html>

<?php
$title = "Latihan Operator";
$a = 7;
$b = 3;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Penjoemlahan <?php echo $penjumlahan ?> </h1>
    <h1>Pengoerangan <?php echo $pengurangan ?> </h1>
    <h1>Perkalian <?php echo $perkalian ?> </h1>
    <h1>Pembagian <?php echo $pembagian ?> </h1>
    <h1>Sisa Bagi <?php echo $sisabagi ?> </h1>
    <h1>Pangkat <?php echo $pangkat ?> </h1>

    <p> <?php echo "$a + $b = $penjumlahan" ?></p>
</body>

</html>