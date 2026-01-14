<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>陣列</title>    
</head>
<body>

<h1>陣列</h1>
<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<ul>
    <li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
</ul>


<?php
$a = [2, 4, 6, 1, 8];
echo '$a = ';
echo implode(' ', $a);
echo "<br>";
// 取得陣列長度
$length = count($a);
// 只跑陣列長度的一半
for ($i = 0; $i < floor($length / 2); $i++) {
    // 對稱位置
    $oppositeIndex = $length - 1 - $i;

    // 交換元素（使用暫存變數）
    $temp = $a[$i];
    $a[$i] = $a[$oppositeIndex];
    $a[$oppositeIndex] = $temp;
}
// 輸出結果
// print_r($a);
echo '反轉後的結果：';
foreach ($a as $value) {
    echo $value . ' ';
}
?>
</body>
</html>
