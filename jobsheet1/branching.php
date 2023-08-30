<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branching</title>
</head>
<body>
    <form method="POST">
        <label for="nomor">Masukan Nomor : </label>
        <input type="number" name="nomor">
        <input type="submit" value="hasil"> 
    </form>
    <?php
    if(isset($_POST['nomor'])){
        $x = $_POST['nomor'];
        
        echo "Nilai x = $x </br></br>";
        if ($x > 0){
            echo "$x adalah Bilangan Positif";} 
        elseif ($x < 0){
            echo "$x adalah Bilangan Negatif";}
        else {echo "$x adalah Bilangan Nol";}
    }

    ?>
</body>
</html>