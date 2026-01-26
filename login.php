<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
<h1>會員登入COOKIE</h1>
<ul>
    <li>一般會員登入畫面設計</li>
    <li>登入檢查(帳密是否正確)</li>
    <li>登入後導向(首頁或後台或使用者資料)</li>
    <li>只要瀏灠器不關閉，不會再次要求登入</li>
</ul>
<h2>會員登入</h2>

<form action="check_login.php" method="post">
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