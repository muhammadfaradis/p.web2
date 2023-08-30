<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
</head>
<body>
    <form method="POST">
        <h2>Luas Persegi Panjang</h2>
        <label for="panjang">Masukan Panjang : </label>
        <input type="number" name="panjang"></br>

        <label for="lebar">Masukan Lebar : </label>
        <input type="number" name="lebar" ></br>
        <input type="submit" name="hitung_pp" value="Luas Persegi Panjang"> 
    </form>

    <form method="POST">
        <h2>Luas lingkaran</h2>
        <label for="jari jari">Masukan Jari Jari : </label>
        <input type="number" name="jari" ></br>
        <input type="submit" name="hitung_jari" value="Luas Lingkaran">
    </form>

    <?php
    if(isset($_POST['hitung_pp'])){
        if (isset($_POST ['panjang'])&& isset($_POST['lebar'])){
            $p = $_POST['panjang'];
            $l = $_POST['lebar'];
            
            function persegi_panjang($p,$l)
            {
                return $p*$l;
            }
            $luas_persegi_panjang = persegi_panjang($p,$l);
            echo "Luas Persegi Panjang = ". $luas_persegi_panjang ."</br>";
        }
        }
        
    if(isset($_POST['hitung_jari'])){
        if (isset($_POST ['jari'])){
            $r = $_POST['jari']; 

        function lingkaran($r)
    {
        return 3.14*$r*$r;
    }
    $luaslingkaran = lingkaran($r);
    echo "Luas Lingkaran = ". $luaslingkaran. "</br>";
    }
}
    ?>
</body>
</html>