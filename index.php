<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<body>

<h1>計算距離自己下一次生日還有幾天</h1>

<?php
// 設定生日（月、日）
$birthMonth = 1;
$birthDay   = 16;
echo "我的生日是" . $birthMonth . '月' . $birthDay . '日';
echo "<br>";
// 今天日期
$today = strtotime(date('Y-m-d'));

// 今年生日時間點
$birthdayThisYear = strtotime(date('Y') . '-' . $birthMonth . '-' . $birthDay);

// 如果今年生日已過 → 用明年
if ($birthdayThisYear < $today) {
    $birthdayThisYear = strtotime((date('Y') + 1) . '-' . $birthMonth . '-' . $birthDay);
}

// 計算相隔天數
$days = ($birthdayThisYear - $today) / 86400;

echo '距離下一次生日還有 ' . floor($days) . ' 天';
?>


</body>
</html>
