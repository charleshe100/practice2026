<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>網頁傳值練習</title>
    <style>
        body {
            font-family: Arial;
        }

        .calendar {
            width: 700px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            min-height: 80px;
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

        .today {
            background: #ffeeba;
            border: 2px solid #f0ad4e;
        }
    </style>
</head>
<body>

<h1>設計一個網頁版萬年曆，只需顯示西元年月日</h1>
<ul>
    <li>以月為單位來顯示一個月中的日期</li>
    <li>有上一個月，下一個月的連結來切換月份</li>
    <li>可以不同的顏色或樣式來強調當日或周末</li>
</ul>
<?php
    // 若網址有帶年月就用，否則用今天
    $year  = isset($_GET['year'])  ? intval($_GET['year'])  : date('Y');
    $month = isset($_GET['month']) ? intval($_GET['month']) : date('n');

    // 本月第一天
    $firstDay = strtotime("$year-$month-01");

    // 本月天數
    $totalDays = date('t', $firstDay);

    // 本月第一天是星期幾（0=日）
    $startWeekDay = date('w', $firstDay);

    // 今天日期
    $today = date('Y-m-d');

    // 上一月 / 下一月
    $prevYear  = $month == 1  ? $year - 1 : $year;
    $prevMonth = $month == 1  ? 12 : $month - 1;

    $nextYear  = $month == 12 ? $year + 1 : $year;
    $nextMonth = $month == 12 ? 1  : $month + 1;
    ?>
    
<div class="calendar">

    <!-- 標題與切換 -->
    <div class="header">
        <a href="?year=<?php echo $prevYear; ?>&month=<?php echo $prevMonth; ?>">◀ 上一月</a>
        <h2><?php echo $year . " 年 " . $month . " 月"; ?></h2>
        <a href="?year=<?php echo $nextYear; ?>&month=<?php echo $nextMonth; ?>">下一月 ▶</a>
    </div>

    <!-- 星期 -->
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
        // 補空白
        for ($i = 0; $i < $startWeekDay; $i++) {
            echo "<div></div>";
        }

        // 印出日期
        for ($day = 1; $day <= $totalDays; $day++) {

            $date = sprintf("%04d-%02d-%02d", $year, $month, $day);
            $weekDay = date('w', strtotime($date));

            $class = "";
            if ($weekDay == 0) $class = "sunday";
            if ($weekDay == 6) $class = "saturday";
            if ($date == $today) $class .= " today";

            echo "<div class='$class'>$day</div>";
        }
        ?>

    </div>
</div>

</body>
</html>
