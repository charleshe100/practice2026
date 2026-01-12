<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>陣列</title>    
</head>
<body>

<h1>陣列</h1>
<h2>找出五百年內的閏年(陣列儲存，迴圈印出)</h2>
<ul>
    <li>依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>

<?php
// 宣告陣列
$leapYears=[];
// for跑500年
for ($year=2000; $year < 2500; $year++) {
    // 判斷是否為閏年
    if (($year%4==0 && $year%100!= 0) || $year%400==0) {
        // 存進陣列
        $leapYears[]=$year;
    }
}

// 用迴圈印出陣列
echo '西元2000年起，500年內的閏年有：<br>';
foreach ($leapYears as $key => $leapYear) {
    echo $leapYear.", ";
    if(($key+1)%10==0){
        echo "<br>";
    }
}
?>



</body>
</html>
