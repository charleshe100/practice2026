<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>網頁傳值練習</title>
</head>
<body>

<h1>登入檢查</h1>
<ul>
    <li>建立一個可以輸入帳號和密碼的表單畫面</li>
    <li>輸入帳號密碼，按下"登入"按鈕後，在另一個頁面顯示帳號密碼是否正確。</li>
</ul>

<h2>會員登入</h2>

<form action="loginCheck.php" method="post">
    <p>
        帳號：
        <input type="text" name="account" required>
    </p>

    <p>
        密碼：
        <input type="password" name="password" required>
    </p>

    <input type="submit" value="登入">
</form>

</body>
</html>
