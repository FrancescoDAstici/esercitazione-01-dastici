<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=10;
        $b=5;

        $prodIter=0;
        for($i=0; $i<$b; $i++){
            $prodIter+=$a;
        }

        echo "Prodotto Iterativo = ";
        echo $prodIter;
    ?>
</body>
</html>