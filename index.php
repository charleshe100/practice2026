<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>威力彩電腦選號沒有重覆號碼(利用while迴圈)</title>    
</head>
<body>

<h1>陣列</h1>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<div class="tablewrap">
<?php
$need=6;
$mix=1;
$max=38;
$numbers=[];
// 判斷陣列裡的數字有幾個
while (count($numbers) < $need) {
    // 產生數字
    $randNum=rand($mix,$max);
    // 檢查數字有無重覆
    if (!in_array($randNum, $numbers, true)) {
        // 數字沒在陣列裡，再將它放入陣列中
        $numbers[]=$randNum;
    }
}

// 數字排序
sort($numbers);

// 印出數字
echo '威力彩號碼，您的選號是：';
foreach ($numbers as $num) {
        echo $num . ", ";
    }
?>
</table>
</div>

</body>
</html>
