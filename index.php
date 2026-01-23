<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>網頁傳值練習</title>
</head>
<body>

<h1>BMI 計算</h1>
<ul>
    <li>建立一個可以輸入身高和體重的表單畫面</li>
    <li>按下"計算BMI"按鈕後，在另一個頁面顯示BMI值</li>
</ul>

<form action="bmiResult.php" method="post">
    <p>
        <input type="number" name="height" required>
    </p>

    <p>
        <input type="number" name="weight" required>
    </p>

    <input type="submit" value="計算 BMI">
</form>

</body>
</html>
