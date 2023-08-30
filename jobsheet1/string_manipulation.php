<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string_manipulation</title>
</head>
<body>
    <?php
    $x = "Selamat Belajar PHP !";
    echo "$x </br>";
    echo "</br> Mengubah string menjadi huruf Kapital : ".strtoupper ($x)."</br>";
    echo "</br> Mengubah string menjadi huruf Kecil : ".strtolower ($x)."</br>";
    echo "</br> Memotong string : ".substr($x,0,7)."</br>";
    ?>
</body>
</html>