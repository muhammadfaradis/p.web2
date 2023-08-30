<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 sampai 10 </br>";
    for ($x = 2; $x <=10; $x += 2)
    echo "$x </br>";
    
    echo "</br>Perulangan WHILE bilangan ganjil dari 1 sampai 10 </br>";
    $y = 1;
    while ($y <= 10){
        echo "$y </br>";
        $y +=2;}
        
    echo "</br>Perulangan DO WHILE bilangan prima kurang dari 20 </br>";
        $no = 2;

        do{
           $prima = true;
           for($i=2;$i<=sqrt($no);$i++){
            if($no % $i == 0){
                $prima = false;
                break;
            }
           }

           if($prima){
               echo $no. "</br>";
           }
           $no++;
        }while ($no<=20);

    ?>
</body>
</html>