<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>時間及日期處理</title>
</head>
<style>
body {
    font-family: Arial;
}

.calendar {
    width: 700px;
}

.weekdays, .days {
    display: flex;
    flex-wrap: wrap;
}

.weekdays div,
.days div {
    width: calc(100% / 7);
    border: 1px solid #ccc;
    box-sizing: border-box;
    min-height: 100px;
    padding: 5px;
}

.weekdays div {
    background: #f0f0f0;
    text-align: center;
    font-weight: bold;
}

.sunday {
    color: red;
}

.saturday {
    color: blue;
}

.special {
    background: #fff3cd;
    font-size: 12px;
    margin-top: 5px;
}
</style>
<body>

<h1>線上月曆製作</h1>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>

<?php
$year  = 2026;
$month = 1;

// 這個月第一天
$firstDay = strtotime("$year-$month-01");

// 這個月總天數
$totalDays = date("t", $firstDay);

// 這個月第一天是星期幾（0=日, 6=六）
$startWeekDay = date("w", $firstDay);

// 特殊日期設定
$specialDays = [
    "2026-01-01" => "元旦",
    "2026-01-23" => "世界自由日"
];
?>


<h2><?php echo $year . " 年 " . $month . " 月"; ?></h2>

<div class="calendar">

    <!-- 星期標題 -->
    <div class="weekdays">
        <div>日</div>
        <div>一</div>
        <div>二</div>
        <div>三</div>
        <div>四</div>
        <div>五</div>
        <div>六</div>
    </div>

    <!-- 日期 -->
    <div class="days">
        
        <?php
        for ($i = 0; $i < $startWeekDay; $i++) {
            echo "<div></div>";
        }

        // 印出日期
        for ($day = 1; $day <= $totalDays; $day++) {

            $date = sprintf("%04d-%02d-%02d", $year, $month, $day);
            $weekDay = date("w", strtotime($date));

            $class = "";
            if ($weekDay == 0) $class = "sunday";
            if ($weekDay == 6) $class = "saturday";

            echo "<div class='$class'>";
            echo "<strong>$day</strong>";

            // 特殊日期顯示
            if (isset($specialDays[$date])) {
                echo "<div class='special'>" . $specialDays[$date] . "</div>";
            }

            echo "</div>";
        }
        ?>

    </div>
</div>

</body>
</html>
