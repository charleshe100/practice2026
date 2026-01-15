<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>字串處理</title>    
</head>
<body>

<h1>字串取代</h1>
<h2>將”aaddw1123”改成”*********”</h2>
<?php
$a='aaddw1123';
echo '原字串為：'. $a . "<br>";
$b=str_repeat("*",strlen($a));
echo "字串處理後，顯示為：" . $b;
?>

<h1>字串分割</h1>
<h2>將”this,is,a,book”依”,”切割後成為陣列</h2>
<?php 
$c="this,is,a,book";
$array=explode(",", $c);

print_r($array);
?>

</body>
</html>
