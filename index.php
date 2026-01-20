<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<body>

<h1>利用date()函式的格式化參數，完成日期格式呈現</h1>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
// 指定時間（用 strtotime 固定時間）
$time = strtotime("2021-10-05 12:09:05");

// 2021/10/05
echo date("Y/m/d", $time);
echo "<br>";

// 10月5日 Tuesday
echo date("n月j日 l", $time);
echo "<br>";

// 2021-10-5 12:09:05
echo date("Y-n-j G:i:s", $time);
echo "<br>";

// 今天是西元2021年10月5日 上班日(或假日)
$dayOfWeek = date("N", $time); // 1(一) ~ 7(日)

if ($dayOfWeek >= 6) {
    $workDay = "假日";
} else {
    $workDay = "上班日";
}

echo "今天是西元" . date("Y年n月j日", $time) . " " . $workDay;
?>

</body>
</html>
