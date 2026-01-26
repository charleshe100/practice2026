<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入檢查</title>
</head>
<body>
<?php
// 正確帳密
$correctAccount  = "admin";
$correctPassword = "1234";

// 取得表單資料
$account  = $_POST['account'];
$password = $_POST['password'];

// 檢查帳密
if ($account == $correctAccount && $password == $correctPassword) {

    // 設定 cookie（不給過期時間 → 關瀏覽器就消失）
    setcookie("login_user", $account, 0, "/");

    // 導向登入後頁面
    header("Location: index.php");
    exit;

} else {
    echo "帳號或密碼錯誤<br>";
    echo "<a href='login.php'>回登入頁</a>";
}
?>

</body>
</html>