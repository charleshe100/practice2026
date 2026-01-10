<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>九九乘法表（陣列產生）</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        .tablewrap{
            display: inline-block;
            padding: 5px;
            border: 3px solid #aaa;
        }
    </style>
</head>
<body>

<h1>PHP 程式流程控制</h1>
<h2>利用陣列產生九九乘法表</h2>
<div class="tablewrap">
<?php
// 建立空的二維陣列
$timesTable = [];

// 用迴圈產生九九乘法表，並以「字串」形式存入陣列
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $timesTable[$i][$j] = "{$i} × {$j} = " . ($i * $j);
    }
}
?>

<!--用迴圈印出陣列內容-->
<table>
<?php
foreach ($timesTable as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>{$cell}</td>";
    }
    echo "</tr>";
}
?>
</table>
</div>

</body>
</html>
