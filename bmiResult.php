<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算結果</title>
</head>
<body>
<?php
// 接收表單資料
$height = $_POST['height'];
$weight = $_POST['weight'];

// 身高由 cm 轉成公尺
$heightMeter = $height / 100;

// BMI 計算公式
$bmi = $weight / ($heightMeter * $heightMeter);

// 取到小數點第 2 位
$bmi = round($bmi, 2);
?>

<h2>BMI 計算結果</h2>

<p>身高：<?php echo $height; ?> 公分</p>
<p>體重：<?php echo $weight; ?> 公斤</p>
<p><strong>BMI 值：<?php echo $bmi; ?></strong></p>

<table>
    <tr>
        <td>BMI < 18.5</td>
        <td>「體重過輕」，需要多運動，均衡飲食，以增加體能，維持健康！</td>
    </tr>
    <tr>
        <td>18.5 ≤ BMI < 24</td>
        <td>恭喜！「健康體重」，要繼續保持！</td>
    </tr>
    <tr>
        <td>24 ≤ BMI < 27</td>
        <td>「體重過重」了，要小心囉，趕快力行「健康體重管理」！</td>
    </tr>
    <tr>
        <td>BMI ≥ 27</td>
        <td>啊～「肥胖」，需要立刻力行「健康體重管理」囉！</td>
    </tr>
</table>

<a href="index.php">回上一頁重新計算</a>

</body>
</html>

</body>
</html>