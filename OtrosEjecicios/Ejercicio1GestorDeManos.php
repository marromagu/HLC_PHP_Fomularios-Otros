<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 Gestor de manos</title>
</head>
<body>
    <?php
$emoji = [
    128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077,
    128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406,
    128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308,
    129310, 129311, 129330
];
$color = [
    127995,127996,127997,127998,127999
];
$longitud  = count($emoji);
$tamC = count($color);
for ($i = 0; $i < $longitud; $i++ ) 
    echo "&#$emoji[$i]";
    echo "<br>"; 
    ?>
</body>
</html>