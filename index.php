<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>陣列</title>    
</head>
<body>

<h1>陣列</h1>
<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>


<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$year=2026;

$difference=$year-1024;

// $skyIndex=(($difference%10)+10)%10;
// $landIndex=(($difference%12)+12)%12;

$skyIndex = 0; // 甲
$landIndex = 0; // 子

// 用迴圈「一年一年往前推」
for ($i=1024+1; $i<= $year; $i++) {

    // 天干往後（10 一循環）
    $skyIndex++;
    if ($skyIndex == 10) {
        $skyIndex = 0;
    }

    // 地支往後（12 一循環）
    $landIndex++;
    if ($landIndex == 12) {
        $landIndex = 0;
    }
}

echo "西元 {$year} 年為：";
echo $sky[$skyIndex] . $land[$landIndex] . " 年";
?>
</body>
</html>
