<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>字串處理</title>    
</head>
<body>

<h1>字串組合</h1>
<h2>將上例陣列重新組合成“this is a book”</h2>
<?php 
$c="this,is,a,book";
$array=explode(",", $c);
$Reorganization = implode(" ", $array);
echo $Reorganization;
?>

<h1>子字串取用</h1>
<h2>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h2>
<?php 
$string = " The reason why a great man is great is that he resolves to be a great man";
$result = substr($string, 0, 11) . "...";
echo $result;

?>

</body>
</html>
