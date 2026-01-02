<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>values</h1>
    <h2>交換兩個變數的值</h2>
    <?php 
    $a=40;
    $b=60;
    echo "a=$a<br>";
    echo "b=$b<br>";
    echo "交換後<br>";
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo "a=$a<br>";
    echo "b=$temp<br>";

    ?>
</body>
</html>