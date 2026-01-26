<?php
// 檢查是否已登入
if (!isset($_COOKIE['login_user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>COOKIE & SESSION 練習</title>    
</head>
<body>
<h2>會員首頁</h2>

<p>歡迎你，<?php echo $_COOKIE['login_user']; ?>！</p>

<ul>
    <li><a href="logout.php">登出</a></li>
</ul>

</body>
</html>
