<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入結果</title>
</head>
<body>
<?php
// 正確的帳號與密碼
$correctAccount  = "admin";
$correctPassword = "1234";

// 接收表單資料
$account  = $_POST['account'];
$password = $_POST['password'];
?>

<h2>登入結果</h2>

<?php
if ($account == $correctAccount && $password == $correctPassword) {
    echo "<p style='color:green;'>登入成功！</p>";
} else {
    echo "<p style='color:red;'>帳號或密碼錯誤！</p>";
}
?>

<a href="index.php">回登入頁</a>

</body>
</html>

</body>
</html>