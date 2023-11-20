<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $array = [
            1 =>"Capital",
            2 =>"Población aproximada",
            3 =>"Idiomas principales de ese país",
            4 => "¿Si tiene costa?",
       ];
       $España = [
            1 =>"Madrid",
            2 =>"47,42 millones",
            3 =>"Español",
            4 => "Si",
        ];
        $Portugal = [
            1 =>"Lisboa",
            2 =>"10,33 millones ",
            3 =>"Portugués",
            4 => "Si",
        ];
        $Italia = [
            1 =>"Roma",
            2 =>"59,11 millones ",
            3 =>"Italiano",
            4 => "Si",
        ];
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        for ($i = 1; $i <= 4; $i++ ) {
            echo "| $array[$i] |";
            }
            echo "</br>";
        for ($i = 1; $i <= 4; $i++ ) {
            echo "| $España[$i] |";
            }
            echo "</br>";
        for ($i = 1; $i <= 4; $i++ ) {
            echo "| $Portugal[$i] |";
            }
            echo "</br>";
        for ($i = 1; $i <= 4; $i++ ) {
            echo "| $Italia[$i] |";
            }
                
    ?>
</body>
</html>