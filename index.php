<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<body>

<h1>計算兩個日期相隔幾天</h1>

<?php
// 給定兩個日期
$date1 = "2026-01-01";
$date2 = "2026-01-18";

// 轉成時間點
$time1 = strtotime($date1);
$time2 = strtotime($date2);

// 如果順序顛倒就交換
if ($time1 > $time2) {
    $temp  = $time1;
    $time1 = $time2;
    $time2 = $temp;
}

// 計算相差秒數
$diffSeconds = $time2 - $time1;

// 換算成天數（1 天 = 86400 秒）
$diffDays = $diffSeconds / 86400;

echo $date1 . " 與 " . $date2 . " 相隔 " . floor($diffDays) . " 天";
?>


</body>
</html>
