<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<body>

<h1>計算兩個日期相隔幾天</h1>

<?php
$date1 = new DateTime("2026-01-01");
$date2 = new DateTime("2026-01-18");

$interval = $date1->diff($date2);

echo "相隔天數：" . $interval->days . " 天";
?>

</body>
</html>
