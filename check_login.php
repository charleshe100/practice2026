<?php
session_start();

// 正確帳密（示範用）
$correctAccount  = "admin";
$correctPassword = "1234";

// 取得表單資料
$account  = $_POST['account'];
$password = $_POST['password'];

// 檢查帳密
if ($account == $correctAccount && $password == $correctPassword) {

    // 設定 session
    $_SESSION['login_user'] = $account;

    // 導向登入後頁面
    header("Location: index.php");
    exit;

} else {
    echo "帳號或密碼錯誤<br>";
    echo "<a href='login.php'>回登入頁</a>";
}
?>
