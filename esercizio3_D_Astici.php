<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=20;
        $b=3;

        $quoziente=0;
        while($a>=$b){
            $a-=$b;
            $quoziente++;
        }

        echo "Quoziente = " . $quoziente . "<br>";
        echo "Resto = " . $a . "<br>";
    ?>
</body>
</html>