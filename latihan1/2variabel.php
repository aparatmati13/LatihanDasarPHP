<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama_lengkap = "JHONSSS";
    $nim = 102029666;
    $laki_laki = true;
    ?>

    <h1>HALLO <?php echo $nama_lengkap ?> </h1>
    <p> <?php echo "NIM : $nim " ?></p>
    <br>
    <p> <?php echo 'NIM : $nim ' . $nim ?></p> <br>
    <p> <?php echo 'laki-laki' . $laki_laki ?></p>
</body>

</html>