<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<body>

<h1>利用迴圈來計算連續五個周一的日期</h1>
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
// 起始的星期一
$startDate = "2021-10-04";

// 轉成時間點
$startTime = strtotime($startDate);

// 迴圈計算連續五個星期一
for ($i = 0; $i < 5; $i++) {

    // 每次加 7 天（一週）
    $currentTime = $startTime + ($i * 7 * 86400);

    // 輸出日期 + 星期
    echo date("Y-m-d", $currentTime) . " 星期一<br>";
}
?>


</body>
</html>
